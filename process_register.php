<?php
// Include the database connection file
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate user input
    $firstName = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $lastName = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the 'users' table using prepared statements
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "<h2 style='color:White;'>Registration successfull!</h2>";
        echo "<script>window.location.href='index.php'; alert('Registration Successfull'); </script>";
    } else {
        echo "h2 style='color:White;'>Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
}
?>
