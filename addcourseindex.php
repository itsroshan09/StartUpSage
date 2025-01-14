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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('/StartUpSage/img/addcourseindex2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1{
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }


        .form_area {
            width: 60%; /* Set container width to 60% */
            max-width: 600px; /* Set maximum width if the screen width is larger */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.68);
            background-color: rgba(255, 255, 255, 0.8);
            margin-left: 15%;
            border-radius: 5%;
            align-items: center;
            margin-top: 3%;
            height: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            align-items: center;
            display: block; /* Display the button as a block element */
            margin: 0 auto; /* Auto margin to horizontally center the button */
        }

        button:hover {
            background-color: #258cd1;
        }
    </style>
</head>
<body style="overflow-y: auto;">
<div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>
    <div class="form_area">
        <h1>Add Course</h1>
        <hr style="color: #333; border: 1px solid black;">
        <BR><BR>
        <form id="courseForm" action="process_addcourseindex.php" method="post" enctype="multipart/form-data">
            <b><label for="title">Title:</label></b>
            <input name="title" placeholder="Course Title" required type="text" id="title" />

            <b><label for="description">Description:</label></b>
            <textarea name="description" placeholder="Course Description" required id="description"></textarea>

            <b><label for="price">Price:</label></b>
            <input name="price" placeholder="Course Price" required type="number" step="0.01" id="price" />

            <b><label for="tag">Tag:</label></b>
            <input name="tag" placeholder="Course Tag" type="text" id="tag" />

            <b><label for="author">Author:</label></b>
            <input name="author" placeholder="Course Author" type="text" id="author" />

            <b><label for="image">Image Path :</label></b>
            <input name="image" id="image" placeholder="Image Path"/>

            <b><label for="link">Link:</label></b>
            <input name="link" placeholder="Course Link" type="" id="link" />

            <div class="text-center">
                <button type="submit">Add Course</button>
            </div>
        </form>
    </div>
</body>
</html>
