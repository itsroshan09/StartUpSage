<?php
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = isset($_POST["login-email"]) ? $_POST["login-email"] : "";
    $password = isset($_POST["login-pass"]) ? $_POST["login-pass"] : "";

    // Perform SQL query to get hashed password for the given email from admin table
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if any row was returned
        if ($row = mysqli_fetch_assoc($result)) {
            // Verify the hashed password
            $hashedPassword = $row['password'];
            if (password_verify($password, $hashedPassword)) {
                // Passwords match, log the admin in
                session_start();
                $_SESSION["admin_email"] = $email;
                echo "<script> alert('Login Successfully.....!'); </script>";
                header("Location: adminpanel.php"); // Redirect to admin dashboard or any other page
                exit();
            } else {
                // Passwords don't match, redirect to login page with an error message
                echo "<script>window.location.href='admin.php'; alert('Login Failed..!'); </script>";
                exit();
            }
        } else {
            // No matching admin found, redirect to login page with an error message
            echo "<script>window.location.href='admin.php'; alert('Login Failed.!'); </script>";
            exit();
        }
    } else {
        // Error in the query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
