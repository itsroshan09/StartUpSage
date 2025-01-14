<?php
session_start();
// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
}
?>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    header("Location: no-access.php");
} else {
}
?>


<?php
// Include your database connection file (db.php)
include('db.php');

// Fetch all page IDs from the 'pages' table
$result = $conn->query("SELECT id FROM pages");

// Check for errors in the query
if ($result === false) {
    die('Error in SQL query: ' . $conn->error);
}

// Fetch associative array of page IDs
$pageIds = $result->fetch_all(MYSQLI_ASSOC);

// Close the result set
$result->close();

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-image: url('/StartUpSage/img/addcourseindex2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }


        .form_area {
            width: 170%;
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.68);
            background-color: rgba(255, 255, 255, 0.8);
            margin-top: 50px;
            overflow-y: auto;
            max-height: 80vh;
            position: relative;
        }

        .form_area label {
            display: block;
            color: #555;
        }

        .form_area input,
        .form_area textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form_area button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #0f0;
            color: #000;
            font-weight: 700;
            border: none;
            border-radius: 5px;
            cursor: pointer;

            border: 1.5px solid black;
            margin-top: 20px;
            left: 30%;
            position: relative;
        }

        button:hover {
            background-color: #c9302c;
        }
    </style>
</head>

<body style="overflow-y: auto;">
    <div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>


    <div class="form_container">
        <form action="process_addcoursedetails.php" method="post" class="form_area">
            <h1>Add Course Details</h1>
            <hr style="color: #333; border: 1px solid black;">
            <label for="course_id"><b>Course ID:</b></label>
            <select name="course_id" required>
                <?php
                // Loop through page IDs and create options
                foreach ($pageIds as $pageId) {
                    echo '<option value="' . $pageId['id'] . '">' . $pageId['id'] . '</option>';
                }
                ?>
            </select><br><br>

            <label for="module_1"><b>Module 1:</b></label>
            <input type="text" id="module_1" name="module_1" required><br><br>

            <label for="module_2"><b>Module 2:</b></label>
            <input type="text" id="module_2" name="module_2" required><br><br>

            <label for="module_3"><b>Module 3:</b></label>
            <input type="text" id="module_3" name="module_3" required><br><br>

            <label for="module_4"><b>Module 4:</b></label>
            <input type="text" id="module_4" name="module_4" required><br><br>

            <label for="module_5"><b>Module 5:</b></label>
            <input type="text" id="module_5" name="module_5" required><br><br>

            <label for="trainer_name"><b>Trainer Name:</b></label>
            <input type="text" id="trainer_name" name="trainer_name" required><br><br>

            <label for="course_fee"><b>Course Fee:</b></label>
            <input type="text" id="course_fee" name="course_fee" required><br><br>

            <label for="available_seats"><b>Available Seats:</b></label>
            <input type="text" id="available_seats" name="available_seats" required><br><br>

            <label for="schedule"><b>Schedule:</b></label>
            <input type="text" id="schedule" name="schedule" required><br><br>

            <br>
            <button type="submit">Add Course Details</button>

            <br>
          
        </form>
    </div>
  

</body>

</html>