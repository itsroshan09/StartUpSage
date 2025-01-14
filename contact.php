<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Contact</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <style>
    p,
    a {
      font-family: sans-serif;
    }

    .footer-area section_gap {
      font-family: sans-serif;
    }
  </style>
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
              <h2>Contact Us</h2>
              <div class="page_link">
                <a href="index.php">Home</a>
                <a href="contact.php">Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Contact Area =================-->
  <section class="contact_area section_gap">
    <div class="container">
    <div id="mapBox" class="mapBox" data-lat="21.0037847" data-lon="75.5511845" data-zoom="13" data-info="StartUpSage, Govet. Polytechnix=c, Jalgaon." data-mlat="21.0037847" data-mlon="75.5511845"></div>

      <div class="row">
        <div class="col-lg-3">
          <div class="contact_info">
            <center>
              <h3 style="color: red;">Our Details</h3>
            </center>
            <hr>
            <div class="info_item">
              <i class="ti-home"></i>
              <h6>Jalgaon, Maharashtra</h6>
              <p>National Highway no.6, jalgaon.</p>
            </div>
            <div class="info_item">
              <i class="ti-headphone"></i>
              <h6><a href="#">+91 9307541814</a></h6>
              <p>Day : Monday - Saturday <br>Time : 9AM to 6PM</p>
            </div>
            <div class="info_item">
              <i class="ti-email"></i>
              <h6><a href="#">startupSage@gmail.com</a></h6>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="col-md-6">
              <center>
                <h3 style="color: red;">Contact us!</h3>
              </center>
              <hr>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required="" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required="" />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
              </div>
              <div class="form-group">
                <button type="submit" value="submit" class="btn primary-btn">
                  Send Message
                </button>
              </div>
            </div>

            <div class="col-md-6 text-right">
              <img src="img/contact/contact-us.png" height="370px" width="370px" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--================Contact Area =================-->

  <!--================ start footer Area  =================-->
  <?php
    include 'footer.php';
  ?>
  <!--================ End footer Area  =================-->

  <!--================Contact Success and Error message Area =================-->
  <div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="ti-close"></i>
          </button>
          <h2>Thank you</h2>
          <p>Your message is successfully sent...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modals error -->

  <div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="ti-close"></i>
          </button>
          <h2>Sorry !</h2>
          <p>Something went wrong</p>
        </div>
      </div>
    </div>
  </div>
  <!--================End Contact Success and Error message Area =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>