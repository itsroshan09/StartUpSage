

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
    <title>Delete Course</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('/StartUpSage/img/deletecourse2.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 10px;
           
            border-radius: 10px;
           
            position: relative;
            
           
        }

        h1{
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #d9534f;
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
            background-color: #c9302c;
        }
        
        
        .right-panel{
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            margin-top:10%;
            border-radius: 10px;
            height: 270px;
            position: relative;
            background-color: white;
        }
    </style>
</head>
<body>
<div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>
<div class="right-panel">    <form method="post" action="confirmdeletecourse.php">
    <h1> Delete Courses </h1>
        <hr style="color: #333; border: 1px solid black;">
        <BR><BR>
        <label for="course_id">Course ID:</label>
        <select name="page_id" required>
            <?php
            // Loop through page IDs and create options
            foreach ($pageIds as $pageId) {
                echo '<option value="' . $pageId['id'] . '" name="page_id">' . $pageId['id'] . '</option>';
            }
            ?>
        </select><br><br>
        
        <button type="submit">Delete</button>
    </form>
    </div>

</body>
</html> 