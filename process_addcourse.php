<!-- process_form.php -->

<?php
include('db.php'); // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $section1 = $_POST['section1'];
    $section2 = $_POST['section2'];
    $section3 = $_POST['section3'];
    $section4 = $_POST['section4'];
    $section5 = $_POST['section5'];

    // Insert data into the 'pages' table
    $sql = "INSERT INTO pages (section1, section2, section3, section4, section5) 
            VALUES ('$section1', '$section2', '$section3', '$section4', '$section5')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>  window.location.href='addsidebar.php'; alert('Course Added...!!'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
