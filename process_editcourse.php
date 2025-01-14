<!-- process_editcourse.php -->

<?php
// Include your database connection file (db.php)
include('db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $id = $_POST['id'];
    $section1 = $_POST['section1'];
    $section2 = $_POST['section2'];
    $section3 = $_POST['section3'];
    $section4 = $_POST['section4'];
    $section5 = $_POST['section5'];

    // Validate ID
    if (!empty($id) && is_numeric($id)) {
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("UPDATE pages SET section1 = ?, section2 = ?, section3 = ?, section4 = ?, section5 = ? WHERE id = ?");
        $stmt->bind_param('sssssi', $section1, $section2, $section3, $section4, $section5, $id);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>  window.location.href='coursespanel.php'; alert('Course Updated...!!'); </script>";
        } else {
            echo "<script>  window.location.href='coursespanel.php'; alert('Error While Updating Course...!!'); </script>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<script>  window.location.href='coursespanel.php'; alert('Invalid Course ID...!!'); </script>";
    }

    // Close the database connection
    $conn->close();
}
?>
