<?php
// Include your database connection file (db.php)
include('db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the page ID from the form
    $pageId = $_POST['page_id'];

    // Validate the page ID (you might want to add more validation)
    echo "<script> var a = confirm('Are you sure you want to delete this course?'); </script>";

    // Check the user's choice from the confirmation dialog
    echo "<script> if (a) { window.location.href='process_deletecourse.php?page_id=$pageId'; } else { window.location.href='deletecourse.php'; } </script>";
}
?>