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
            background-image: url('/StartUpSage/img/userpanel.jpg');
            background-size: cover;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user-panel {
            background-color: hsla(0, 0%, 10%, 0.1);
            padding: 2.5rem 1.5rem;
            border-radius: 1rem;
            backdrop-filter: blur(8px);
            width: 500px;
            border: 3px solid #ffffff;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
        }

        h1 {
            color: #f00;
            /* Red heading color */
            margin-bottom: 20px;
        }

        .user-button {
            padding: 12px 24px;
            margin: 10px;
            width: 200px;
            font-size: 18px;
            background-color: #fffd7c;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .user-button:hover {
            background-color: #fffb00;
            /* Darker orange on hover */
        }
    </style>
    <title>User Panel</title>
</head>

<body style="overflow-y: auto;">
    <?php
    include 'db.php';
    include 'adminsidebar.php' ?>
    <div class="user-panel">
        <h1>Welcome to the User Panel</h1>

        <!-- Form for Add User -->
        <form action="adduser.php" method="POST">
            <button type="submit" class="user-button">Add User</button>
        </form>

        <!-- Form for Delete User -->
        <form action="deleteuser.php" method="POST">
            <button type="submit" class="user-button">Delete User</button>
        </form>

        <!-- Form for All Users -->
        <form action="allusers.php" method="POST">
            <button type="submit" class="user-button">All Users</button>
        </form>

        <!-- Form for Logout -->
       
    </div>
</body>

</html>