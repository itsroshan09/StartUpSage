<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $tag = $_POST["tag"];
    $author = $_POST["author"];
    $link = $_POST["link"];

    // Validate and sanitize data (you can add more validation as needed)
    $title = htmlspecialchars(trim($title));
    $description = htmlspecialchars(trim($description));
    $price = floatval($price); // Convert to float
    $tag = htmlspecialchars(trim($tag));
    $author = htmlspecialchars(trim($author));
    $link = filter_var($link, FILTER_SANITIZE_URL);

    // Handle image upload
    $image_path = ''; // This will store the path to the uploaded image
    if ($_FILES['image']['error'] == 0) {
        $upload_dir = 'uploads/'; // Specify the directory to store uploaded images
        $image_name = basename($_FILES['image']['name']);
        $image_path = $upload_dir . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    // Database connection parameters (modify these according to your setup)
    include 'db.php';

    // Insert data into the courses table
    $sql = "INSERT INTO courses (title, description, price, tag, image_path, author, link) 
            VALUES ('$title', '$description', $price, '$tag', '$image_path', '$author', '$link')";

    if ($conn->query($sql) === TRUE) {
        header("Location: addcoursedetails.php");
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
