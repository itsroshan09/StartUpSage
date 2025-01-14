<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    header("Location: no-access.php");
} else {
}
?>

<?php
session_start();
// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
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
            background-image: url('/StartUpSage/img/courses-panel.png');
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
            margin-top: -20px;
        }

        .user-button {
            padding: 12px 24px;
            margin: 10px;
            width: 200px;
            font-size: 18px;
            background-color: #54ff3d;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Button shadow */
        }

        .user-button:hover {
            background-color: #19da00;
        }
    </style>
    <title>Courses Panel</title>
</head>

<body>
    <div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>
    <div class="user-panel">
        <h1>Welcome to the Courses Panel</h1>

        <!-- Form for Add User -->
        <form action="addcourse.php" method="POST">
            <button type="submit" class="user-button">Add Course</button>
        </form>

        <!-- Form for Delete User -->
        <form action="editcourse.php" method="POST">
            <button type="submit" class="user-button">Edit Course</button>
        </form>

        <!-- Form for All Users -->
        <form action="deletecourse.php" method="POST">
            <button type="submit" class="user-button">Delete Course</button>
        </form>


    </div>
</body>

</html>