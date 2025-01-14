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
    <title>All Admins</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('/StartUpSage/img/alladmins.png');
        }

        .container {
            width: 700px;
            margin-top: 2%;
            margin-left: 33%;
            padding: 10px 20px 20px 20px;
            background-color: #f2f2f2;
            border-radius: 10px;    
        }

        h1 {
            text-align: center;
            color: #0c00af;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border: 2px solid #000;
            color: #000;
        }

        th {
            background-color: #ff9900;
            font-size: 16px;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
    </style>
</head>

<body style="overflow-y: auto;">
<div class="sidebar-container">
    
    <?php  include 'adminsidebar.php'; ?>
    </div>

    <div class="container">
        <h1>All Admins</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';

                // Retrieve data from the admins table
                $sql = "SELECT * FROM admin";
                $result = mysqli_query($conn, $sql);

                // Check if there are any admins
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each admin
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td>' . $row["email"] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="2">No admins found.</td></tr>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        </div>      
</body>

</html>
