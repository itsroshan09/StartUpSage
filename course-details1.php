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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  p, span, a, h1 {
    font-family: sans-serif;
  }

  .footer-area section_gap
  {
    font-family: sans-serif;
  }
</style>
</head>

<body>
  <?php
  include 'header.php';
  include 'db.php';

  // Assuming you have a database connection established
  // Check if course_id is set in the URL
  if (isset($_POST['course_id'])) {
    // Sanitize and validate the input, you may want to improve this
    $course_id = filter_input(INPUT_POST, 'course_id', FILTER_SANITIZE_NUMBER_INT);

    // Query to retrieve data from coursedetails table based on course_id
    $sql_coursedetails = "SELECT * FROM coursedetails WHERE id = $course_id";
    $result_coursedetails = $conn->query($sql_coursedetails);

    // Check if the query was successful
    if ($result_coursedetails === false) {
      die("Error: " . $conn->error);
    }

    // Check if there are any results
    if ($result_coursedetails->num_rows > 0) {
      // Output data of the row from coursedetails table
      $row_coursedetails = $result_coursedetails->fetch_assoc();
  ?>
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
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                      $module_key = 'module_' . $i;
                      echo '<li class="justify-content-between d-flex"><p>Module ' . $i . ': ' . $row_coursedetails[$module_key] . '</p></li>';
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 right-contents">
              <ul>
                <li>
                  <a class="justify-content-between d-flex">
                    <p>Trainer’s Name</p>
                    <span class="or"><?= $row_coursedetails['trainer_name'] ?></span>
                  </a>
                </li>
                <li>
                  <a class="justify-content-between d-flex">
                    <p>Course Fee</p>
                    <span><?= $row_coursedetails['course_fee'] ?></span>
                  </a>
                </li>
                <li>
                  <a class="justify-content-between d-flex">
                    <p>Available Seats</p>
                    <span><?= $row_coursedetails['available_seats'] ?></span>
                  </a>
                </li>
                <li>
                  <a class="justify-content-between d-flex">
                    <p>Schedule</p>
                    <span><?= $row_coursedetails['schedule'] ?></span>
                  </a>
                </li>
              </ul>
              <a href="/StartUpSage/loadpage.php?course_id=<?= $row_coursedetails["id"] ?>" class="primary-btn text-uppercase enroll rounded-0 text-white">Enroll the course</a>
            </div>
          </div>
        </div>
      </section>
  <?php
    } else {
      echo "0 results";
    }
  } else {
    echo "Invalid request. Please provide a course_id.";
  }
  ?>


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