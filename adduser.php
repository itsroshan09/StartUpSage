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
    <title>Document</title>

    <style> 
    .right-panel{
        margin-left:10%;
    }

</style>
</head>
<body>
    <div class="sidebar-container">
<?php include 'adminsidebar.php'; ?>
    </div>

    <div class="right-panel">
    <?php include 'register.php'; ?>
    </div>
</body>
</html>