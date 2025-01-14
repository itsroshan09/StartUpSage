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
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php
  include 'header.php'
  ?>

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="banner_content text-center">
              <h2>Entreprenuership Strategy</h2>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="courses.html">Courses</a>
                <a href="course-details1.html">Courses Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================ Start Course Details Area =================-->
  <section class="course_details_area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 course_details_left">
          <div class="main_image">
            <img class="img-fluid" src="img/courses/course-details.jpg" alt="">
          </div>
          <div class="content_wrapper">
            <h4 class="title">Course Outline</h4>
            <div class="content">
              <ul class="course_list">
                <li class="justify-content-between d-flex">
                  <p>Module 1: Introduction</p>
                  <a class="primary-btn text-uppercase" href="#">View Details</a>
                </li>
                <li class="justify-content-between d-flex">
                  <p>Module 2: Business Planning and Development</p>
                  <a class="primary-btn text-uppercase" href="#">View Details</a>
                </li>
                <li class="justify-content-between d-flex">
                  <p>Module 3: Marketing and sales strategies</p>
                  <a class="primary-btn text-uppercase" href="#">View Details</a>
                </li>
                <li class="justify-content-between d-flex">
                  <p>Module 4: Financial management and funding</p>
                  <a class="primary-btn text-uppercase" href="#">View Details</a>
                </li>
                <li class="justify-content-between d-flex">
                  <p>Module 5: Scaling and growth strategies</p>
                  <a class="primary-btn text-uppercase" href="#">View Details</a>
                </li>

              </ul>
            </div>
          </div>
        </div>


        <div class="col-lg-4 right-contents">
          <ul>
            <li>
              <a class="justify-content-between d-flex">
                <p>Trainer’s Name</p>
                <span class="or">Roshan Patil</span>
              </a>
            </li>
            <li>
              <a class="justify-content-between d-flex">
                <p>Course Fee </p>
                <span>Free</span>
              </a>
            </li>
            <li>
              <a class="justify-content-between d-flex">
                <p>Available Seats </p>
                <span>120</span>
              </a>
            </li>
            <li>
              <a class="justify-content-between d-flex">
                <p>Schedule </p>
                <span>2.00 pm to 4.00 pm</span>
              </a>
            </li>
          </ul>
          <a href="/StartUpSage/loadpage.php?course_id=2" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Enroll the course</a>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Course Details Area =================-->

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>