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
  <style>
    .about-community-board {
      color: #fff;
      padding: 1.5rem 0;
      position: relative;
      text-align: center;
      background-color: #181865;
    }

    @media (min-width: 501px) {
      .about-community-board {
        padding: -18px 0 1.5rem
      }
    }

    .about-community-board .hsg-page-width-normal {
      padding: 0
    }

    @media (min-width: 501px) {
      .about-community-board .hsg-page-width-normal {
        padding: 0 2rem
      }
    }

    .about-community-board__background {
      display: none
    }

    @media (min-width: 501px) {
      .about-community-board__background {
        display: initial
      }
    }

    .about-community-board__grid {
      display: flex;
      flex-wrap: wrap;
      padding: 3.5rem 0
    }

    @media (min-width: 501px) {
      .about-community-board__grid {
        padding: 3.5rem 0 1.5rem
      }
    }

    .about-community-board__grid-cell {
      flex-basis: 50%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 2rem 0;
      font-size: 1.125rem;
      font-weight: 600;
      border: 0
    }

    @media (min-width: 501px) {
      .about-community-board__grid-cell {
        flex-basis: 33%
      }

      .about-community-board__grid-cell:nth-child(-n+3) {
        border-bottom: 2px solid #fff
      }

      .about-community-board__grid-cell:nth-child(2) {
        border-left: 2px solid #fff;
        border-right: 2px solid #fff
      }

      .about-community-board__grid-cell:nth-child(5) {
        border-left: 2px solid #fff;
        border-right: 2px solid #fff
      }
    }

    .about-community-board__bold-text {
      display: block;
      font-size: 1.5rem;
      font-weight: 700;
    }

    @media (min-width: 1025px) {
      .about-community-board__bold-text {
        font-size: 20px;
      }
    }

    .about-community-board__link {
      font-size: 0.875rem
    }

    .about-community-board__text-block {
      display: block
    }

    .about-community-board .hsg-page-header__edge {
      display: none
    }

    @media (min-width: 501px) {
      .about-community-board .hsg-page-header__edge {
        display: initial;
        max-width: 100%;
        overflow: hidden
      }
    }


    body {
      font-family: Arial, sans-serif;
    }


    .about_area {
      background-color: #fff;
      padding: 60px 0;
    }

    .about_area h4 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .about_area p {
      color: #777;
      line-height: 1.8;
    }

    .about_area .primary-btn {
      background-color: #fdc632;
      color: #002347;
      padding: 0px 20px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
    }

    .about_area .primary-btn:hover {
      background-color: darkblue;
    }

    p, a {
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
              <h2>About Us</h2>
              <div class="page_link">
                <a href="index.php">Home</a>
                <a href="about-us.php">About</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================ Start About Area =================-->
  <section class="about_area section_gap">
    <div class="container">
      <div class="row h_blog_item">
        <div class="col-lg-6">
          <div class="h_blog_img">
            <!-- <img class="img-fluid12" src="img/about.png" alt="" /> -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <h4>Welcome to Entrepreneur's website</h4>
              <p>
                Welcome to our entrepreneur's hub, where innovation flourishes and dreams take flight. Our platform is a
                dynamic space designed to empower and guide visionaries on their journey to success. With a focus on
                collaboration, our vibrant community connects entrepreneurs, fostering shared insights and support.
                Access a wealth of resources, from cutting-edge tools to mentorship programs, all aimed at propelling
                your ideas forward. Explore investment opportunities, attend educational workshops, and join a community
                that believes in the transformative power of entrepreneurship. Welcome to a space where ideas thrive,
                businesses grow, and the entrepreneurial spirit is celebrated. Let's embark on this exciting journey
                together!
              </p>
              <a class="primary-btn" href="#">
                Learn More <i class="ti-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>


      <div class="row h_blog_item">
        <!-- First set of columns for "Our Mission" -->
        <div class="col-lg-6 order-lg-2">
          <div class="h_blog_img">
            <!-- <img class="img-fluid1" src="img/our mission.png" alt="" /> -->
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <h2 class="about-our-mission__heading">Our Mission</h2>
              <p>
                There's this notion that to grow a business, you have to be ruthless. But we know there's a better way
                to grow. One where what's good for the bottom line is also good for customers. We believe businesses
                can
                grow with a conscience, and succeed with a soul — and that they can do it with inbound. That's why
                we've
                created an ecosystem uniting software, education, and community to help businesses grow better every
                day.
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="row h_blog_item">
        <!-- Second set of columns for "Our Story" -->
        <div class="col-lg-6 order-lg-1">
          <div class="h_blog_img">
            <!-- <img class="img-fluid1" src="img/our story.jpg" alt="" /> -->
          </div>
        </div>
        <div class="col-lg-6 order-lg-2">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <h2 class="about-our-mission__heading">Our Story</h2>
              <h3 class="story-event-title">Starting the Entrepreneur Guide</h3>
              <p class="story-event-description">
                In Year 2015, we embarked on our journey to empower aspiring entrepreneurs with knowledge and
                resources. Our goal was to create a comprehensive guide that would assist individuals in navigating
                the challenging yet rewarding path of entrepreneurship.
              </p>
              <br><br>
              <h3 class="story-event-title">Expanding our Reach</h3>
              <p class="story-event-description">
                Description of the milestone or significant event that occurred in this year. This could include
                achievements, partnerships, or other key developments that helped us reach a wider audience.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================ End About Area =================-->

  <div class="about-our-community">
    <div id="hs_cos_wrapper_module_1560767529505503" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" data-hs-cos-general-type="widget" data-hs-cos-type="module">
      <section class="about-community-board" data-background-overlay="gradient2">
        <div class="hsg-page-width-normal">
          <h2 class="about-community-board__header" style="color: yellow;">
            Our Community
          </h2>
          <div class="about-community-board__grid">
            <div class="about-community-board__grid-cell">
              <div>
                <img class="about-community-board__icon" src="https://www.hubspot.com/hubfs/assets/hubspot.com/about_2019/icons/Community%20Icons/Globe-icon.svg" alt="Globe icon">
                <p>
                  <br>
                  <span class="about-community-board__bold-text">7,400+</span>
                  employees in
                  <span class="about-community-board__bold-text">12</span>
                  global offices
                </p>
              </div>
            </div>

            <div class="about-community-board__grid-cell">
              <div>
                <img class="about-community-board__icon" src="https://www.hubspot.com/hubfs/assets/hubspot.com/about_2019/icons/Community%20Icons/Smilyface-icon.svg" alt="Smily face icon">
                <p>
                  <br>
                  <span class="about-community-board__bold-text">194,000+</span>
                  customers in
                  <span class="about-community-board__bold-text">120+</span>
                  countries
                </p>
              </div>
            </div>

            <div class="about-community-board__grid-cell">
              <div>
                <img class="about-community-board__icon" src="https://www.hubspot.com/hubfs/assets/hubspot.com/about_2019/icons/Community%20Icons/Integrations-icon.svg" alt="Integrations cube icon">
                <p>
                  <br>
                  <span class="about-community-board__bold-text">1,500+</span>
                  integrations
                  <span class="about-community-board__bold-text"></span>
                </p>
              </div>
            </div>

            <div class="about-community-board__grid-cell">
              <div>
                <img class="about-community-board__icon" src="https://www.hubspot.com/hubfs/assets/hubspot.com/about_2019/icons/Community%20Icons/HUG-icon.svg" alt="HUG icon">
                <p>
                  <br>
                  <span class="about-community-board__bold-text">150+</span>
                  Startup User Groups in
                  <span class="about-community-board__bold-text">21</span>
                  countries
                </p>
              </div>
            </div>

            <div class="about-community-board__grid-cell">
              <div>
                <img class="about-community-board__icon" src="https://www.hubspot.com/hubfs/assets/hubspot.com/about_2019/icons/Community%20Icons/inbound.svg" alt="inbound logo">
                <p>
                  <br>
                  <span class="about-community-board__bold-text">11,000+</span>
                  INBOUND 2023
                  <span class="about-community-board__bold-text"></span>
                  registered attendees
                </p>
              </div>
            </div>

            <div class="about-community-board__grid-cell">
              <div>
                <img class="about-community-board__icon" src="https://www.hubspot.com/hubfs/assets/hubspot.com/about_2019/icons/Community%20Icons/Academy-icon.svg" alt="Academy icon">
                <p>
                  <br>
                  <span class="about-community-board__bold-text">459,000+</span>
                  inbound professionals
                  <span class="about-community-board__bold-text"></span>
                  trained and certified
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <br><br><br><br>

  <!--================ Start footer Area  =================-->
  <?php
    include 'footer.php'
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