<?php
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = isset($_POST["signup-email"]) ? $_POST["signup-email"] : "";
    $password = isset($_POST["signup-pass"]) ? $_POST["signup-pass"] : "";

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Perform SQL query to insert admin data into the admin table
    $sql = "INSERT INTO admin (email, password) VALUES ('$email', '$hashedPassword')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Admin signup successful, redirect to login page
        header("Location: index.php");
        exit();
    } else {
        // Error in the query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
