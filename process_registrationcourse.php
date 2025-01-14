<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Validate and sanitize data (you can add more validation as needed)
    $name = htmlspecialchars(trim($name));
    $phone = htmlspecialchars(trim($phone));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Database connection parameters (modify these according to your setup)
    include 'db.php';
    

    // Insert data into the registration table
    $sql = "INSERT INTO registration (name, phone, email) VALUES ('$name', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
       header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect or display an error message if someone tries to access the script directly without submitting the form
    echo "Invalid access";
}
?>
