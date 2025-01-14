<!-- editcourse.php -->
<?php
session_start();
// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
}
?>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    header("Location: no-access.php");
} else {
   
}
?>


<?php
// Include your database connection file (db.php)
include('db.php');

// Fetch all page IDs from the 'pages' table
$result = $conn->query("SELECT id FROM pages");

// Check for errors in the query
if ($result === false) {
    die('Error in SQL query: ' . $conn->error);
}

// Fetch associative array of page IDs
$pageIds = $result->fetch_all(MYSQLI_ASSOC);

// Close the result set
$result->close();

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <style>
        /* Add your custom styles here */

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('/StartUpSage/img/editcourse.png');
            background-repeat: no-repeat;
            background-size: cover;

        }

        form {
            max-width: 600px;
            padding: 20px;
            border-radius: 10px;
            position: relative;
            margin:5%;
            
        }

        h1{
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;

            margin-top: 20px;

            position: absolute;
            /* Adjust vertical position */
            left: 50%;
            /* Center horizontally */
            transform: translateX(-50%);
            /* Center horizontally */
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .right-panel{
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            
            border-radius: 10px;
         
            position: relative;
            background-color: white;
        }
    </style>
</head>

<body>

<div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>
<div class="right-panel">
    <form method="post" action="process_editcourse.php" onsubmit="return validateForm()">
    <h1> Edit Courses </h1>
    <hr style="color: #333; border: 1px solid black;">
    <label for="course_id">Course ID:</label>
        <select name="id" required>
            <?php
            // Loop through page IDs and create options
            foreach ($pageIds as $pageId) {
                echo '<option value="' . $pageId['id'] . '">' . $pageId['id'] . '</option>';
            }
            ?>
        </select><br><br>
        <table>
            <thead>
                <tr>
                   
                    <th>Column</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>section1</td>
                    <td><textarea name="section1"></textarea></td>
                </tr>
                <tr>
                    <td>section2</td>
                    <td><textarea name="section2"></textarea></td>
                </tr>
                <tr>
                    <td>section3</td>
                    <td><textarea name="section3"></textarea></td>
                </tr>
                <tr>
                    <td>section4</td>
                    <td><textarea name="section4"></textarea></td>
                </tr>
                <tr>
                    <td>section5</td>
                    <td><textarea name="section5"></textarea></td>
                </tr>
            </tbody>
        </table>

        <button type="submit">Update</button>
        <div id="error-message" class="error-message"></div>
    </form>
    </div>
    <script>
        function validateForm() {
            var sections = ['section1', 'section2', 'section3', 'section4', 'section5'];
            var isValid = true;

            for (var i = 0; i < sections.length; i++) {
                var value = document.getElementsByName(sections[i])[0].value.trim();

                if (value === '') {
                    isValid = false;
                    document.getElementById('error-message').innerText = 'All fields must be filled.';
                    break;
                }
            }

            return isValid;
        }
    </script>

</body>

</html>