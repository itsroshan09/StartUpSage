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
    <title>Messages</title>
 
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background: url('/StartUpSage/img/user-messages.png');
        }

        th {
            color: darkblue;
        }

        /* Styles for the sidebar */
      
        /* Styles for the main content */
        .main-content {
            margin-left: 30%;
            padding: 20px;
        }

        .table-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid black;
            align-items: center;
            margin-right: 25%;
        }

        h1 {
            color: red;
            text-align: center;
            font-size: 26px;
            font-weight: 600;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
            color: #000;
            font-size: 14px;
            font-weight: 400;
        }

        th {
            background-color: #ff9900;
            color: #000;
            font-size: 16px;
            font-weight: 700; /* Fix typo here */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        .delete-btn {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }

        
    </style>
</head>

<body style="overflow-y: auto;">

    <?php
    include 'db.php';
   
    ?>
<div class="sidebar-container">
    
<?php  include 'adminsidebar.php'; ?>
</div>
    <div class="main-content">
        <div class="table-container">
            <h1>Messages</h1>
            <?php
            // Retrieve data from the messages table
            $sql = "SELECT * FROM messages";
            $result = mysqli_query($conn, $sql);

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
                $id_to_delete = $_POST['delete'];
                $sql_delete = "DELETE FROM messages WHERE id=$id_to_delete";
                if ($conn->query($sql_delete) === TRUE) {
                    // Record deleted successfully
                    header("Refresh:0");
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }

            // Check if there are any messages
            if (mysqli_num_rows($result) > 0) {
                echo '<table>';
                echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date</th><th>Action</th></tr>';

                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["name"] . '</td>';
                    echo '<td>' . $row["email"] . '</td>';
                    echo '<td>' . $row["message"] . '</td>';
                    echo '<td>' . $row["created_at"] . '</td>';
                    echo "<td><form method='post'><button class='delete-btn' type='submit' name='delete' value='" . $row['id'] . "'>Delete</button></form></td>";
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo 'No messages found.';
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>

</body>

</html>