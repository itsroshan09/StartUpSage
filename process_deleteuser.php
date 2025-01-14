<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = isset($_POST["first_name"]) ? $_POST["first_name"] : "";

    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);

    // Check if the user exists
    $checkUserSql = "SELECT * FROM users WHERE first_name = '$username'";
    $result = mysqli_query($conn, $checkUserSql);

    if (mysqli_num_rows($result) > 0) {
        // User exists, proceed with deletion
        $deleteUserSql = "DELETE FROM users WHERE first_name = '$username'";

        if (mysqli_query($conn, $deleteUserSql)) {
            echo "<script> alert('User Deleted Successfully.');window.location.href='userpanel.php'; </script>";
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }
    } else {
        // User does not exist
        echo "<script> alert('User Does Not Exist');window.location.href='deleteuser.php'; </script>";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the delete user form if accessed without proper submission
    header("Location: deleteuser.php");
    exit();
}
?>
