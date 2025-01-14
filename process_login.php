<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = isset($_POST["login-email"]) ? $_POST["login-email"] : "";
    $password = isset($_POST["login-pass"]) ? $_POST["login-pass"] : "";

    // Validate user input (you may want to add more validation)
    if (empty($email) || empty($password)) {
        header("Location: login.php?error=InvalidInput");
        exit();
    }

    // Perform SQL query to get hashed password for the given email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            // Check if any row was returned
            if ($row = mysqli_fetch_assoc($result)) {
                // Verify the hashed password
                $hashedPassword = $row['password'];
                if (password_verify($password, $hashedPassword)) {
                    // Passwords match, log the user in
                    session_start();
                    $_SESSION["user_email"] = $email;
                    
                    if (isset($_POST['remember'])) {
                        // Set a cookie to remember the user for 30 days (change as needed)
                        setcookie('user_email', $email, time() + (30 * 24 * 60 * 60), '/');
                        setcookie('user_password', $password, time() + (30 * 24 * 60 * 60), '/');
                    }
                    // Display success alert
                    echo "<script>window.location.href='index.php'; alert('Login Successful'); </script>";
                    exit();
                } else {
                    // Passwords don't match, redirect to login page with an error message
                    header("Location: login.php?error=InvalidCredentials");
                    exit();
                }
            } else {
                // No matching user found, redirect to login page with an error message
                echo "<script>window.location.href='login.php'; alert('Login Failed !!'); </script>";
                exit();
            }
        } else {
            // Error in the query
            header("Location: login.php?error=DatabaseError");
            exit();
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Error in preparing the statement
        header("Location: login.php?error=DatabaseError");
        exit();
    }
} else {
    // Invalid request method
    header("Location: login.php?error=InvalidRequest");
    exit();
}
?>
