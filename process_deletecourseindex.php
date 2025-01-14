<!-- deletecourse.php -->

<?php
// Include your database connection file (db.php)
include('db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the page ID from the form
    $pageId = $_POST['page_id'];

    // Validate the page ID (you might want to add more validation)
    if (is_numeric($pageId)) {
        // Use MySQLi to delete related data from 'sidebar' table first
    
            $sql = "DELETE FROM courses WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $pageId);

            // Execute the query to delete from 'pages' table
            $stmtResult = $stmt->execute();

            // Check for errors in the 'pages' deletion
            if (!$stmtResult) {
                echo "<script>alert('Error in deleting from courses: " . $stmt->error . "'); window.location.href='homepagecoursespanel.php';</script>";
            }

            // If both queries were successful, show success message
            if ($stmtResult) {
                echo "<script>alert('Course Deleted...!!'); window.location.href='homepagecoursespanel.php';</script>";
            }
        
    } else {
        echo "<script>alert('Invalid Page ID.'); window.location.href='homepagecoursespanel.php';</script>";
    }

    // Close the statements
    $stmt2->close();
    $stmt->close();

    // Close the database connection
    $conn->close();
}
?>
