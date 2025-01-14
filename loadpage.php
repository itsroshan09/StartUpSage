<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_email'])) {
  // Redirect to login page
  header("Location: login.php");
  exit();
}
// Function to get page content by ID
function getPageContent($pageId)
{
  global $conn;

  $query = "SELECT * FROM pages WHERE id = $pageId";
  $result = $conn->query($query);

  if (!$result) {
    die("Query failed: " . $conn->error);
  }

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Extract data into separate variables
    $section1 = '<div class="section1" id="section1">' . $row['section1'] . '</div>';
    $section2 = '<div class="section2" id="section2">' . $row['section2'] . '</div>';
    $section3 = '<div class="section3" id="section3">' . $row['section3'] . '</div>';
    $section4 = '<div class="section4" id="section4">' . $row['section4'] . '</div>';
    $section5 = '<div class="section5" id="section5">' . $row['section5'] . '</div>';

    // You can then use these variables as needed
    return $section1 . $section2 . $section3 . $section4 . $section5;
  }
}

// Function to get sidebar items by page ID
function getSidebarItems($pageId)
{
  global $conn;

  $query = "SELECT * FROM sidebar WHERE page_id = $pageId";
  $result = $conn->query($query);

  if (!$result) {
    die("Query failed: " . $conn->error);
  }

  $sidebarItems = array();

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $sidebarItems[] = $row['content'];
    }
  }

  return $sidebarItems;
}

// Check if the course ID is provided in the URL
if (isset($_GET['course_id'])) {
  $courseId = $_GET['course_id'];
  $pageContent = getPageContent($courseId);
  $sidebarItems = getSidebarItems($courseId);
} else {
  $pageContent = "Course ID not provided.";
  $sidebarItems = array(); // Empty array if course ID is not provided
}




//Condition for payment page of 5th course Social Enterprenurship
if ($courseId == 5) {
  // Redirect to the payment page
  echo "<script> window.open('https://rzp.io/i/fbltbijmY');    </script>";

  exit();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>StartUp Sage</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;


    }

    .sidebar {
      height: 600px;
      background-color: #ffffff;
      padding-top: 16px;
      position: -webkit-sticky;
      display: block;
      width: 80%;
      padding: 20px;
      border-radius: 20px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      list-style-type: none;
      border: 1px solid;
    }

    .sidebar a {
      text-decoration: none;
      color: black;
      padding: 10px;
      position: relative;
      transition: color 0.3s ease-in-out;
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }



    .sidebar a:hover {
      color: #3498db;
    }

    .sidebar .separator {
      height: 2px;
      width: 100%;
      background-color: #ecf0f1;
      margin-top: 5px;
    }

    .sidebar .separator1 {
      height: 2px;
      width: 100%;
      background-color: #202020;
      margin-top: 5px;
    }

    .sidebar a:last-child .separator {
      display: none;
    }



    img {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.0);
      transition: all 0.3s ease;
    }

    img:hover {
      box-shadow: 0 10px 8px lightgrey;
    }

    .container2 {
      display: flex;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      /* Adjust the values as needed */
      padding: 10px;
      /* Add padding to give space for the shadow */
      font-size: 14pt;
    }

    .contents {
      flex: 1;
      padding: 20px;
      margin: 0px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(52, 152, 219, 0.5);
      transition: transform 0.3s ease-in-out;
      text-align: justify;
    }

    p {
      align-items: justify;
      font-family: sans-serif;
      color: #333;
    }

    a {
      align-items: justify;
      font-family: sans-serif;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
      background: #cfe4ff;
    }

    .section1,
    .section2,
    .section3,
    .section4,
    .section5 {
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    h1 {
      color: #FF5733;
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
      border-radius: 5px;
      margin-top: 15px;
    }

    .section2,
    .section3,
    .section4,
    .section5 {
      display: none;
    }

    .prebtn,
    .nextbtn {
      background-color: #00ff40;
      /* Solid color background */
      color: #f00;
      /* White text color */
      padding: 10px 24px;
      /* Adjust padding as needed */
      font-size: 24px;
      font-weight: 700;
      /* Bold font */
      border: 1px solid black;
      /* No border */
      border-radius: 5px;
      /* Slightly rounded corners for a modern look */
      cursor: pointer;
      transition: transform 0.1s ease-in-out, box-shadow 0.1s ease-in-out;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
      /* Deeper box shadow for more depth */
    }

    .prebtn:active,
    .nextbtn:active {
      transform: translateY(4px);
      /* Moves the button down on click */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      /* Adjusts the shadow to give a pressed effect */
    }


    .prebtn:hover,
    .nextbtn:hover {
      background: linear-gradient(to right, #00ff40, #00ff40);
      /* Reverse gradient on hover */
      transform: scale(1.05);
      /* Scale up on hover for a subtle effect */
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
      /* Increase box shadow on hover */
    }

    .banner-advertise {
      height: 600px;
      width: 310px;
      border-radius: 10px;
    }


    .advertisement-container {
      width: 270px;
      height: 460px;
      border: 2px solid #333;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
    }


    u {
      color: #000;
    }

    .advertisement-label {
      font-size: 26px;
      font-weight: bold;
      margin-top: 10px;
      margin-bottom: -25px;
      text-align: center;
      color: #3498db;
      -ms-text-underline-position: under;
      text-underline-position: below;
    }

    .advertisement-container img {
      max-width: 100%;
      max-height: calc(100% - 26px);
      display: block;
    }

    /* Styles for the advertisement image on hover */
    .advertisement-image:hover {
      transform: scale(1.05);
      /* Enlarge the image by 5% on hover */
    }

    /* Add responsive styles within this media query */
    @media screen and (max-width: 768px) 
    {
            .container2 {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .sidebar {
                width: 90%;
                max-width: 100%;
                padding: 10px;
            }
            .contents {
                width: 100%;
                max-width: 100%;
            }
            .banner-advertise {
                width: 90%;
                max-width: 100%;
            }
          }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>
  <br><br><br><br>
  <center>
    <!--================Home Banner Area =================-->
  </center>
  <!--================End Home Banner Area =================-->
  <div class="container2">
    <div style="width:390px; margin-right: -50px;">
      <div class="sidebar">
        <a href="#" style="color: #1200ff; align-self: center; font-size: 25px; font-weight: bold;"> Modules </a>
        <span class="separator1"></span>

        <?php
        foreach ($sidebarItems as $index => $item) {
          // Add an id attribute to each sidebar item link
          echo '<a href="#" onclick="scrollToSection(' . $index . ')">' . ($index + 1) . '. ' . $item . '</a>';

          // Check if the current item is not the last one
          if ($index < count($sidebarItems) - 1) {
            // Add a separator (you can customize the separator as needed)
            echo '<span class="separator"></span>';
          }
        }
        ?>

      </div>

      <div class="banner-advertise">
        <img src="/StartUpSage/img/banner/Ad.jpg">
      </div>
    </div>

    <div class="contents">
      <div class="col-rg 3">
        <?php
        // Display page content if it's found, otherwise show an error message
        if (isset($pageContent)) {
          echo $pageContent;
        } else {
          echo "Page not found.";
        }
        ?>
      </div>
    </div>
  </div>
  <div>

    <!--================ Start footer Area  =================-->
    <?php
      include 'footer.php';
    ?>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>

    <!-- JavaScript for scrolling to sections -->
    <script>
      //Scrolling Logic
      function scrollToSection(index) {
        // Build the target section id based on the index
        var targetSectionId = 'section' + (index + 1);
        // Get the target div
        var targetDiv = document.getElementById(targetSectionId);
        // Scroll to the target div
        targetDiv.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
        var section1 = document.getElementById("section1");
        var section2 = document.getElementById("section2");
        var section3 = document.getElementById("section3");
        var section4 = document.getElementById("section4");
        var section5 = document.getElementById("section5");
        switch (targetDiv) {

          case "section1":
            section1.style.display = "block";
            section2.style.display = "none";
            section3.style.display = "none";
            section4.style.display = "none";
            section5.style.display = "none";
            break;

          case "section2":
            section2.style.display = "block";
            section1.style.display = "none";
            section3.style.display = "none";
            section4.style.display = "none";
            section5.style.display = "none";
            break;
        }
      }



      //Next Button Logic

      function display(index) {
        // Build the target section id based on the index
        var targetSectionId = 'section' + (index + 1);
        // Get the target div
        var targetDiv = document.getElementById(targetSectionId);
        // Scroll to the target div
        targetDiv.style.display = "block";

        var targetSectionId = 'section' + (index);
        var targetDiv = document.getElementById(targetSectionId);
        targetDiv.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });

        var targetSectionId = 'section' + (index);
        // Get the target div
        var targetDiv = document.getElementById(targetSectionId);
        // Scroll to the target div
        targetDiv.style.display = "none";
      }



      //Previous Button Logic
      function previous(index) {
        // Build the target section id based on the index
        var targetSectionId = 'section' + (index - 1);
        // Get the target div
        var targetDiv = document.getElementById(targetSectionId);
        // Scroll to the target div
        targetDiv.style.display = "block";

        var targetSectionId = 'section' + (index - 1);
        var targetDiv = document.getElementById(targetSectionId);
        targetDiv.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });

        var targetSectionId = 'section' + (index);
        // Get the target div
        var targetDiv = document.getElementById(targetSectionId);
        // Scroll to the target div
        targetDiv.style.display = "none";
      }
    </script>
</body>

</html>