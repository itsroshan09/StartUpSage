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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('/StartUpSage/img/alladmins.png');
        }

        .container {
            max-width: 800px;
            margin-left: 30%;
            margin-top: 3%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        h1 {
            text-align: center;
            color: #0c00af;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black; /* Add border to the table */
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border: 2px solid #ddd; /* Make underline more visible */
        }

        th {
            background-color: #ff9900;
            color: #000;
            font-size: 16px;
            font-weight: 7  00;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
    </style>
    <title>All Users</title>
</head>

<body style="overflow-y: auto;">
<div class="sidebar-container">
    
    <?php  include 'adminsidebar.php'; ?>
    </div>
    <div class="container">
        <?php
        include 'db.php';

        // Retrieve data from the users table
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        // Check if there are any users
        if (mysqli_num_rows($result) > 0) {
            echo '<center><h1>All Users</h1><table border="1">';
            echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>';

            // Output data of each user
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["first_name"] . '</td>';
                echo '<td>' . $row["last_name"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No users found.';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>

    </div>


</body>

</html>