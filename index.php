<?php
include 'header.php';
include 'db.php';
?>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("June 5, 2024 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + "Days " + hours + "Hours " +
      minutes + "Minutes " + seconds + "Seconds ";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>

<style>
  #demo2 {
    background-color: #444;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    justify-content: center;
    margin-top: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border: 1px solid white;
  }

  /* Adding a gradient background to the timer for a more attractive look */
  #demo2 {
    background-color: #002347;
    backdrop-filter: blur(8px);
  }

  .text {
    font-size: 18px;
  }

  #demo {
    font-size: 130%;
    text-align: center;
    font-weight: 900;
    background-image: linear-gradient(to right, #ff9966, #ff5e62);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: 5px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px;
  }


  #dynamictext::before {
    content: "";
    height: 30px;
    width: 2px;
    position: absolute;
    top: 50%;
    right: -8px;
    background: #BD53ED;
    transform: translateY(-45%);
    animation: blink 0.7s infinite;
  }

  #dynamictext.stop-blinking::before {
    animation: none;
  }

  @keyframes blink {
    50% {
      opacity: 0
    }
  }

  p,
  a {
    font-family: sans-serif;
  }

  .footer-area section_gap {
    font-family: sans-serif;
  }
</style>
<script>
  // Smooth scrolling when clicking on links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      // Get the target element by ID
      const targetId = this.getAttribute('href').slice(1);
      const targetElement = document.getElementById(targetId);

      // Calculate the position of the target element relative to the viewport
      const offset = targetElement.getBoundingClientRect().top;

      // Scroll to the target element with smooth behavior
      window.scrollTo({
        top: window.pageYOffset + offset, // Calculate the absolute position
        behavior: 'nearest' // Smooth scrolling behavior
      }); 
    });
  });
</script>


<!--================ Start Home Banner Area =================-->
<section class="home_banner_area" style="background: url('img/banner/index-banner.png') no-repeat center;">
  <div class="banner_inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner_content text-center">
            <p class="text-uppercase">
              Best online education service in the world
            </p>
            <h2 class="text-uppercase mt-4 mb-5">
              One Step Ahead This Season
            </h2>
            <div>
              <a href="about-us.php" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
              <a href="#courses-section" class="primary-btn ml-sm-3 ml-0">see course</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Home Banner Area =================-->



<!--================ Start Feature Area =================-->
<section class="feature_area section_gap_top">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3">Awesome Feature</h2>
          <p>
            Replenish man have thing gathering lights yielding shall you
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Feature Blocks -->
      <div class="col-lg-4 col-md-6">
        <div class="single_feature">
          <div class="desc">
            <h4 class="mt-3 mb-2">Innovation</h4>
            <p>
              Entrepreneurs often introduce new products, services, or processes. They are innovative thinkers who
              seek to solve problems or meet needs in unique and creative ways.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single_feature">
          <div class="desc">
            <h4 class="mt-3 mb-2">Risk-taking</h4>
            <p>
              Entrepreneurship involves a willingness to take calculated risks. Entrepreneurs understand that
              uncertainty is inherent in business, and they are willing to take on challenges to achieve their goals.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single_feature">
          <div class="desc">
            <h4 class="mt-3 mb-2">Proactiveness</h4>
            <p>
              Entrepreneurs are proactive individuals who take the initiative to pursue opportunities. They don't wait
              for things to happen; instead, they make things happen.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single_feature">
          <div class="desc">
            <h4 class="mt-3 mb-2">Vision</h4>
            <p>
              Successful entrepreneurs have a clear vision of what they want to achieve. They are able to set
              long-term goals and create a roadmap to reach them.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single_feature">
          <div class="desc">
            <h4 class="mt-3 mb-2">Time Management</h4>
            <p>
              Entrepreneurs often have to juggle multiple tasks and responsibilities. Effective time management is
              essential for prioritizing activities and maximizing productivity.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single_feature">
          <div class="desc">
            <h4 class="mt-3 mb-2">Leadership</h4>
            <p>
              Entrepreneurs often need strong leadership skills to guide their team and make strategic decisions.
              Effective leadership helps in inspiring and motivating others to work towards common goals.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Feature Area =================-->
<section id="courses-section" class="popular_courses">
  <?php
  $sql = "SELECT * FROM courses";
  $result = $conn->query($sql);

  // Display courses using PHP
  echo '<div class="popular_courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Our Popular Courses</h2>
                        <p>
                            Courses to get you started
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">';

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Adding the course_id to the link as a POST parameter
      echo '<div class="single_course">
                <div class="course_head">
                    <img class="img-fluid" src="' . $row['image_path'] . '" alt="" />
                </div>
                <div class="course_content">
                    <span class="price">' . ($row['price'] == 0 ? 'Free' : '₹' . (int)($row['price'])) . '</span>
                    <span class="tag mb-4 d-inline-block">' . $row['tag'] . '</span>
                    <h4 class="mb-3">
                        <form action="course-details1.php" method="post">
                            <input type="hidden" name="course_id" value="' . $row['id'] . '">
                            <button type="submit" class="course-link-btn" style="border:-10%;border-color:white;">' . $row['title'] . '</button>
                        </form>
                    </h4>
                    <p>' . $row['description'] . '</p><br>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="authr_meta">
                            <span class="d-inline-block ml-2">' . $row['author'] . '</span>
                        </div>
                        <div class="mt-lg-0 mt-3">
                            <span class="meta_info mr-4">
                                <i class="ti-heart mr-2"></i>' . $row['likes'] . '
                            </span>
                        </div>
                    </div>
                </div>
            </div>';
    }
  }

  echo '</div>
    </div>
</div>
</div>
</div>
</div>';
  ?>
</section>

  <!--================ Start Registration Area =================-->
  <div class="section_gap registration_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="row clock_sec clockdiv" id="clockdiv">
            <div class="col-lg-12">
              <h1 class="mb-3" style="color: red; text-align: center;">Register Now</h1><br><br>
              <h3 style="color: lightgreen;">An Entrepreneur Event</h3>
              <p>
                Join us for an exclusive event designed for entrepreneurs.
              </p>
            </div>
            <div id="demo2">
              <p id="demo"> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
          <div class="register_form">
            <h3>Courses for Free</h3>
            <p>It is high time for learning</p>
            <form action="process_registrationcourse.php" method="post">
              <div class="col-lg-12 form_group">
                <input name="name" placeholder="Your Name" required="" type="text" id="name" />
                <input name="phone" placeholder="Your Phone Number" required="" type="tel" id="phone" />
                <input name="email" placeholder="Your Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required="" type="email" id="email" />
              </div>
              <div class="col-lg-12 text-center">
                <button class="primary-btn" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Registration Area =================-->

  <!--================ Start Trainers Area =================-->
  <section class="trainer_area section_gap_top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Our Expert Trainers</h2>
            <p>
              Master Trainers and best entrepreneurs
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex align-items-center">
        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
          <div class="thumb d-flex justify-content-sm-center">
            <img class="img-fluid" src="img/trainer/roshan1.jpg" alt="" />
          </div>
          <div class="meta-text text-sm-center">
            <h4 style="font-weight: 700">Roshan Patil</h4>
            <p class="designation" style="font-weight: 600">Senior Entrepreneur</p>
            <div class="mb-4">
              <p style="text-align: start;">
                A seasoned visionary, blending experience with innovation. This leader champions resilience, guiding businesses through dynamic landscapes with wisdom and a forward-thinking mindset.
              </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-twitter"></i></a>
              <a href="#"><i class="ti-linkedin"></i></a>
              <a href="#"><i class="ti-pinterest"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
          <div class="thumb d-flex justify-content-sm-center">
            <img class="img-fluid" src="img/trainer/yash.jpg" alt="" />
          </div>
          <div class="meta-text text-sm-center">
            <h4 style="font-weight: 700">Yash Patil</h4>
            <p class="designation" style="font-weight: 600">Senior Entrepreneur</p>
            <div class="mb-4">
              <p style="text-align: start;">
                An industry stalwart, crafting success stories with decades of expertise. This senior entrepreneur is a beacon of leadership, inspiring growth, and fostering a culture of continuous innovation.
              </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-twitter"></i></a>
              <a href="#"><i class="ti-linkedin"></i></a>
              <a href="#"><i class="ti-pinterest"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
          <div class="thumb d-flex justify-content-sm-center">
            <img class="img-fluid" src="img/trainer/purvesh.jpg" alt="" />
          </div>
          <div class="meta-text text-sm-center">
            <h4 style="font-weight: 700">Purvesh Mali</h4>
            <p class="designation" style="font-weight: 600">Senior Entrepreneur</p>
            <div class="mb-4">
              <p style="text-align: start;">
                Mastering the entrepreneurial art, this seasoned professional embodies adaptability. Their strategic prowess and wealth of experience redefine success, leaving an indelible mark on the business landscape.
              </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-twitter"></i></a>
              <a href="#"><i class="ti-linkedin"></i></a>
              <a href="#"><i class="ti-pinterest"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
          <div class="thumb d-flex justify-content-sm-center">
            <img class="img-fluid" src="img/trainer/aniket.jpg" alt="" />
          </div>
          <div class="meta-text text-sm-center">
            <h4 style="font-weight: 700">Aniket Vasane</h4>
            <p class="designation" style="font-weight: 600">Senior Entrepreneur</p>
            <div class="mb-4">
              <p style="text-align: start;">
                A trailblazing senior entrepreneur, leading with a blend of wisdom and forward vision. Their journey is a testament to resilience, inspiring the next generation of innovators and leaders.
              </p>
              <br>
            </div>
            <div class="align-items-center justify-content-center d-flex">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-twitter"></i></a>
              <a href="#"><i class="ti-linkedin"></i></a>
              <a href="#"><i class="ti-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Trainers Area =================-->

  <!--================ Start Events Area =================-->
  <div class="events_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3 text-white">Upcoming Events</h2>
            <p>
              Checkout the hot selling and the most popular Entrepreneur events in India.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="single_event position-relative">
            <div class="event_thumb">
              <img src="img/event/e1.jpg" alt="" />
            </div>
            <div class="event_details">
              <div class="d-flex mb-4">
                <div class="date"><span>24</span>Nov</div>

                <div class="time-location">
                  <p>
                    <span class="ti-time mr-2"></span> 12:00 PM - 4:30 PM
                  </p>
                  <p>
                    <span class="ti-location-pin mr-2"></span> Jalgaon
                  </p>
                </div>
              </div>
              <p>
                A Strategic Business Planning Masterclass is an intensive training session designed to equip
                entrepreneurs and business professionals with the skills and knowledge needed to create effective
                business plans.
              </p>
              <a href="/StartUpSage/loadpage.php?course_id=2" class="primary-btn rounded-0 mt-3">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single_event position-relative">
            <div class="event_thumb">
              <img src="img/event/e2.jpg" alt="" />
            </div>
            <div class="event_details">
              <div class="d-flex mb-4">
                <div class="date"><span>25</span>Nov</div>

                <div class="time-location">
                  <p>
                    <span class="ti-time mr-2"></span> 12:00 PM - 4:30 PM
                  </p>
                  <p>
                    <span class="ti-location-pin mr-2"></span> Nashik
                  </p>
                </div>
              </div>
              <p>
                The Global Entrepreneurship Summit is a high-profile international event that brings together
                entrepreneurs, investors, policymakers, and thought leaders from around the world.
              </p>
              <a href="/StartUpSage/loadpage.php?course_id=5" class="primary-btn rounded-0 mt-3">View Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="text-center pt-lg-5 pt-3">

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Events Area =================-->

  <!--================ Start Testimonial Area =================-->
  <div class="testimonial_area section_gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="main_title">
            <h2 class="mb-3">Client say about me</h2>
            <p>
              𝗦𝗲𝗹𝗳-𝗟𝗲𝗮𝗱𝗲𝗿𝘀𝗵𝗶𝗽 𝗜𝘀 𝗧𝗵𝗲 𝗠𝗼𝘀𝘁 𝗜𝗺𝗽𝗼𝗿𝘁𝗮𝗻𝘁 𝗟𝗲𝗮𝗱𝗲𝗿𝘀𝗵𝗶𝗽
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="testi_slider owl-carousel">
          <div class="testi_item">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <img src="img/testimonials/yash.jpg" alt="" />
              </div>
              <div class="col-lg-8">
                <div class="testi_text">
                  <h4>Abhishekh Sinha</h4>
                  <p>
                    I am turning it around though. I'm getting better at it and I could care less who doesn't like it.
                    Thank you for the reminder and encouragement!
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testi_item">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <img src="img/kartik.png" alt="" />
              </div>
              <div class="col-lg-8">
                <div class="testi_text">
                  <h4>Kartik Suryawanshi</h4>
                  <p>
                    Boundaries are important not only in business, No boundaries means you'll end up looking like that
                    wad of gum on the road.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testi_item">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <img src="img/testimonials/roshan (2).jpg" alt="" />
              </div>
              <div class="col-lg-8">
                <div class="testi_text">
                  <h4>Sanskar Mahajan</h4>
                  <p>
                    This is so crucial to have the bounderies in the place with the coaches. I must admit as a people pleaser,
                    I'm still learning mine.I am turning it around though.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ End Testimonial Area =================-->

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