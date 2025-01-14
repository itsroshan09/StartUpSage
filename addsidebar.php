<!-- addsidebar.php -->
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
    <title>Add to Sidebar</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 50px;
            padding: 0;
            background-image: url('/StartUpSage/img/addsidebar.jpg');
            background-size: cover;
        }

        h1 {
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        form {
            max-width: 600px;
            border-radius: 10px;
            /* Box shadow for depth */
            max-width: 400px;
            border-radius: 10px;

        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        textarea {
            width: 100%;
            height: 100px;
            /* Adjust the height as needed */
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {

            font-size: 16px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .right-container {
            margin-left: 45%;
            margin-top: 10%;
            max-width: 600px;
            background-color: white;
            border-radius: 10px;
            backdrop-filter: blur(8px);
            /* Box shadow for depth */
            max-width: 400px;
            border-radius: 10px;
            margin-right: 20px;
            /* Add margin to the right side */
            padding: 20px;
            /* Add padding for spacing inside the container */
            box-sizing: border-box;
            /* Include padding in the width calculation */
        }

        .btn {

            display: block;
            /* Ensure the button is a block element */
            margin: 0 auto;
            /* Center the button horizontally */
            margin-top: 20px;
            /* Add margin to the top for spacing */
            font-size: 16px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px 20px;
            /* Adjust padding as needed */

        }
    </style>
</head>

<body style="overflow-y: auto;">
    <div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>
    <div class="right-container">
        <form method="post" action="process_addsidebar.php">
            <h1> Add Sidebar Contents </h1>
            <hr style="color: #333; margin-bottom: 18px">
            <b><label for="page_id">Page ID:</label></b>
            <select name="page_id" required>
                <?php
                // Loop through page IDs and create options
                foreach ($pageIds as $pageId) {
                    echo '<option value="' . $pageId['id'] . '">' . $pageId['id'] . '</option>';
                }
                ?>
            </select><br><br>
            <b><label for="contents">Contents:</label></b>
            <textarea name="contents" required></textarea>
            <button class="btn" type="submit">Go</button>
        </form>
    </div>
</body>

</html>