<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the page ID from the URL
    $pageId = $_GET['page_id'];

    // Validate the page ID
    if (is_numeric($pageId)) {
        // Use MySQLi to delete related data from 'sidebar' table first
        $sql2 = "DELETE FROM sidebar WHERE page_id = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param('i', $pageId);
        $stmt2Result = $stmt2->execute();

        if (!$stmt2Result) {
            // Handle errors
            echo "Error in deleting from sidebar: " . $stmt2->error;
        }

        // If 'sidebar' deletion is successful, proceed to delete from 'pages' table
        if ($stmt2Result) {
            $sql = "DELETE FROM pages WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $pageId);
            $stmtResult = $stmt->execute();

            if (!$stmtResult) {
                // Handle errors
                echo "<script>alert('Error in deleting from pages: " . $stmt->error . "'); window.location.href='coursespanel.php';</script>";
            } else {
                // If both queries were successful, show success message
                echo "<script>alert('Course Deleted...!!'); window.location.href='coursespanel.php';</script>";
            }
        }
    } else {
        // Handle invalid page ID
        echo "<script>alert('Invalid Page ID.'); window.location.href='coursespanel.php';</script>";
    }

    // Close the statements
    $stmt2->close();
    $stmt->close();

    // Close the database connection
    $conn->close();
}
?>