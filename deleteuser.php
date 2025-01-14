<?php
session_start();
// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
}

$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    header("Location: no-access.php");
    exit();
}

// Include your database connection file (db.php)
include('db.php');

// Fetch all first names from the 'users' table
$result = $conn->query("SELECT first_name FROM users");

// Check for errors in the query
if ($result === false) {
    die('Error in SQL query: ' . $conn->error);
}

// Fetch associative array of first names
$firstNames = $result->fetch_all(MYSQLI_ASSOC);

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
    <title>Delete User</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('/StartUpSage/img/deleteuser.png');
        }

        form {
            max-width: 400px;
            margin: 10% auto;
            padding: 20px; /* Increased padding for better spacing */
            border-radius: 10px;
            position: relative;
            background-color: #fff; /* Added background color for better visibility */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
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
            width: 50%; /* Full width button */
            padding: 10px 20px;
            font-size: 16px;
            background-color: #d9534f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #c9302c;
        }

        .selected-name {
            margin-top: 20px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .centered-button
        {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="sidebar-panel">
    <?php include 'adminsidebar.php'; ?>
</div>
<div class="right-panel">
    <form method="post" action="process_deleteuser.php">
        <h1>Delete User</h1>
        <hr style="color: #333; border: 1px solid black;">
        <br><br>
        <label for="first-name">First Name:</label>
        <select name="first_name" id="first-name" required>
            <option value="">Select a user</option>
            <?php
            // Loop through first names and create options
            foreach ($firstNames as $firstName) {
                echo '<option value="' . $firstName['first_name'] . '">' . $firstName['first_name'] . '</option>';
            }
            ?>
        </select><br><br>
        
        <div class="selected-name" id="selected-name">Selected Name: </div>

        <div class="centered-button">
            <button type="submit">Delete User</button>
        </div>
    </form>
</div>

<script>
    // Update the selected name box when a name is selected from the dropdown
    document.getElementById('first-name').addEventListener('change', function () {
        var selectedName = this.value;
        document.getElementById('selected-name').textContent = 'Selected Name: ' + selectedName;
    });
</script>

</body>
</html>
