<!-- addsidebar.php -->

<?php
// Include your database connection file (db.php)
include('db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $pageId = $_POST['page_id'];
    $contents = $_POST['contents'];

    // Insert data into the 'sidebar' table
    $sql = "INSERT INTO sidebar (page_id, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Check for errors in the prepared statement
    if ($stmt === false) {
        die('Error in SQL query: ' . $conn->error);
    }

    $stmt->bind_param('is', $pageId, $contents);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Data Added to Sidebar...!!'); window.location.href='adminpanel.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='adminpanel.php';</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
