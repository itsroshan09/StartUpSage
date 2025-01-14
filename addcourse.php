<!-- index.php -->
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
        /* Add your custom styles here */

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 7%;
            padding: 0;
            background: url('/StartUpSage/img/addcourses.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 10px;
            border-radius: 10px;
            position: relative;
        }

        h1{
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            align-items: center;
            display: block; /* Display the button as a block element */
            margin: 0 auto; /* Auto margin to horizontally center the button */
            position: absolute;
            /* Adjust vertical position */
            left: 50%;
            /* Center horizontally */
            transform: translateX(-50%);
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .right-panel{
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            
            border-radius: 10px;
         
            position: relative;
            background-color: white;
        }
    </style>
</head>
<body>
     <div class="sidebar-panel">
        <?php include 'adminsidebar.php'; ?>
    </div>
<div class="right-panel">
    <form method="post" action="process_addcourse.php" onsubmit="return validateForm()">
        <h1> Add Courses </h1>
        <hr style="color: #333; border: 1px solid black;">
        <table>
            <thead>
                <tr>
                 
                    <th>Column</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <!-- ID will be auto-generated, so no need for input field -->
                <tr style="display:none;">
                    <td></td>
                </tr>
                <tr>
               
                    <td>section1</td>
                    <td><textarea name="section1"></textarea></td>
                </tr>
                <tr>
                   
                    <td>section2</td>
                    <td><textarea name="section2"></textarea></td>
                </tr>
                <tr>
                    
                    <td>section3</td>
                    <td><textarea name="section3"></textarea></td>
                </tr>
                <tr>
                   
                    <td>section4</td>
                    <td><textarea name="section4"></textarea></td>
                </tr>
                <tr>
                    
                    <td>section5</td>
                    <td><textarea name="section5"></textarea></td>
                </tr>
            </tbody>
        </table>

        <button type="submit">Go</button>
        <div id="error-message" class="error-message"></div>
    </form>
    </div>
    <script>
        function validateForm() {
            var sections = ['section1', 'section2', 'section3', 'section4', 'section5'];
            var isValid = true;

            for (var i = 0; i < sections.length; i++) {
                var value = document.getElementsByName(sections[i])[0].value.trim();

                if (value === '') {
                    isValid = false;
                    document.getElementById('error-message').innerText = 'All fields must be filled.';
                    break;
                }
            }

            return isValid;
        }
    </script>

</body>
</html>