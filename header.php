<?php
// Start output buffering
ob_start();

// Start or resume a session
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Check if user is logged in
if (isset($_SESSION['user_email'])) {
  // Extract username from email
  $email = $_SESSION['user_email'];
  $username = substr($email, 0, strpos($email, '@'));

  $user_icon = "<i class='fa fa-user-circle-o' style='font-size:32px; color:darkblue; margin-top:3px;'></i>";
  $welcome_message = "Hello, $username";
} else {
  $welcome_message = "";
  $user_icon = "";
}
?>



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>StartUp Sage</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <!-- main css -->

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="scss/_home.scss" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .single_feature {
      height: 300px;
      border-radius: 20px;
      border: 2px dashed black;
    }

    .home_banner_area {
      z-index: 1;
      min-height: 900px;
      position: relative;
      background-size: cover;
    }

    .header_area .navbar {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      background-color: white;
    }

    .nav-item {
      color: black;
      font-family: calibri;
    }

    /* Media queries for responsiveness */
    @media (max-width: 992px) {

      /* Styles for tablets and smaller screens */
      .home_banner_area {
        min-height: 600px;
        /* Adjust height for smaller screens */
      }
    }

    @media (max-width: 768px) {

      /* Styles for tablets and smaller screens */
      .navbar-expand-lg .navbar-nav .nav-link {
        color: black;
        /* Adjust navbar link color for visibility */
      }
    }

    /* Additional styles */
    .navbar-brand.logo_h img {
      max-width: 100%;
      height: auto;
    }

    .nav-item {
      margin-left: 0%;
      /* Adjust margin in percentage */
      margin-right: 0%;
      /* Adjust margin in percentage */
      display: inline-flex;
      /* Display items in a row */
      align-items: center;
      /* Align items vertically */
    }

    /* Media queries for responsiveness */
    @media (max-width: 576px) {

      /* Styles for smartphones */
      .nav-item {
        margin-left: 1%;
        /* Adjust margin in percentage for smaller screens */
        margin-right: -2%;
        /* Adjust margin in percentage for smaller screens */
        display: block;
        /* Change display to block for stacking on smaller screens */
        text-align: center;
        /* Center align text */
      }

      .nav-item:last-child {
        margin-top: 10px;
        /* Add top margin in pixels to separate from the previous item */
      }

      .navbar-brand.logo_h img {
        max-width: 80%;
        /* Adjust max-width for logo on smaller screens */
      }
    }
  </style>

</head>

<body>
  <?php
  $user_agent = $_SERVER['HTTP_USER_AGENT'];

  if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    include 'links.php';
  } else {
  }
  ?>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php"><img src="/StartUpSage/img/logo.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent" style="color:black;">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item" style="color:black;">
                <a class="nav-link" href="/StartUpSage/index.php" style="color:black;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/StartUpSage/blog.php" style="color:black;">InspireHub</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/StartUpSage/about-us.php" style="color:black;">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/StartUpSage/contact.php" style="color:black;">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/StartUpSage/login.php" style="color:black;">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/StartUpSage/adminpanel.php" style="color:black;">Admin</a>
              </li>
              <li class="nav-item">
                <a href="/StartUpSage/logout.php">
                  <i class="fa fa-sign-out" style="font-size:2em; margin-top:3px;"></i></a>
              </li>

              <?php if (isset($_SESSION['user_email'])) : ?>
                <li class="nav-item" style="margin-left: 0px; margin-right: -60px;">
                  <?php echo $user_icon; ?>
                
                  <a href="#" class="nav-link" style="color:black; margin-left:5px">
                  <?php echo $welcome_message; ?></a>
                </li>

              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <?php
include 'bot.php';
?>
</body>