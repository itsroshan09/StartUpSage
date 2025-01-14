<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Output JavaScript alert
echo "<script>alert('Logged Out...!!');</script>";

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("Location: index.php");
exit();
?>
