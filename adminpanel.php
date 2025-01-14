
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    header("Location: no-access.php");
} else {
}
?>

<?php
session_start();
// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
}


include "db.php";

// Execute a query to get the total number of rows in the messages table
$sql = "SELECT COUNT(*) AS total_rows FROM messages";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_rows = $row['total_rows'];
} else {
    $total_rows = "Error: " . mysqli_error($conn);
}

$sql = "SELECT COUNT(*) AS total_rows2 FROM registration";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_rows2 = $row['total_rows2'];
} else {
    $total_rows2 = "Error: " . mysqli_error($conn);
}


$sql = "SELECT COUNT(*) AS total_rows3 FROM users";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_rows3 = $row['total_rows3'];
} else {
    $total_rows3 = "Error: " . mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminpanel.css">
    <title>Admin Panel</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('/StartUpSage/img/businessadmin.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        a{
            text-decoration: none;
        }

        .admin-container {
            margin-top: auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 20%;
            border-radius: 5%;
            margin-bottom: 20px;
            margin-left: 25%;
            background: linear-gradient(123deg, #123, #237, #437);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.6);
        }

        .container {
            padding: 2px 16px;
        }

        h1{
            margin-left:20%;
            font-size: 400%;
        }
    </style>

</head>

<body style="overflow-y: auto;">

    <div class="sidebar-container">
        <!-- Sidebar -->
        <?php include 'adminsidebar.php'; ?>
        
    </div>
    <h1>Welcome To Admin Panel </h1>
    <div class="admin-container">
      
        <div class="card">
        <a href="display_messages.php" style=" color:white;"><img src="img/messagelogo.png" alt="Avatar" style="width:100%"></a>
            <div class="container">
                <h2><b><a href="display_messages.php" style=" color:white;">Messages</a></b></h2>
                <h3>Total Messages : <?php echo $total_rows; ?> </h3>
            </div>
        </div>

        <div class="card">
        <a href="allregistrations.php" style=" color:white;"> <i class="fa fa-registered" style="font-size:150px;color:red"></i></a>
            <div class="container">
            <h2><b><a href="allregistrations.php" style=" color:white;">Registrations</a></b></h2>
                <h3>Total Registrations : <?php echo $total_rows2; ?> </h3>
            </div>
        </div>

        <div class="card">
        <a href="allusers.php" style=" color:white;"><i class="fa fa-users" style="font-size:150px;color:blue"></i></a>
            <div class="container">
            <h2><b><a href="allusers.php" style=" color:white;">Users</a></b></h2>
                <h3>Total Users :  <?php echo $total_rows3; ?> </h3>
            </div>
        </div>
    </div>

</body>

</html>
