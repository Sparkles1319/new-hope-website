<?php include 'header.php'?>
  <body>
  <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="375226342952087"
  logged_in_greeting="Hello, how can we help you today?"
  logged_out_greeting="Hello, how can we help you today?">
      </div>
    
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <!--<a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i>
    </a>-->
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
<?php include 'navbar.php'?>
    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper - No slider according to Chi-Chi's Request-->
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <!--<img src="<?php echo $image_home_slider.'/Mobile_Cover.jpg'; ?>" -->
                <img src="Mobile_Cover.jpg"
                    srcset="MobileCover_04012020_1.jpg 320w, MobileCover_04012020_1.jpg 800w, MobileCover_04012020_1.jpg 1200w, 
                            MobileCover_04012020_1.jpg 1500w, MobileCover_04012020_1.jpg 1800w, HomePage_04012020.jpg 2000w" 
                    alt="Welcome to New Hope Hospital">
                <a href="http://www.newhopehospital.org/about_us.php">
          </div>
          <div class="slider-text">
            <!--<h2>Welcome to <strong>New Hope Hospital</strong> </h2>
            <p><strong></strong>&nbsp;</p>
            <div class="readmore_area"> 
              <a data-hover="Read More" href="<?php echo $about_url.'#overview';?>"><span>Read More</span></a>-->
            </div>
          </div>
        </div>
         
        <!-- End First slide -->


        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-flask"></span>
              <h3>Emergency Care</h3>
              <p>Have any reason to receive an immediate health solution? We offer ambulance services that can get to you quickly in case of an emergency.</p>
              <div class="readmore_area">
                <a href="#" data-hover="Read More"><span>Read More</span></a>
              </div>
            </div>s
          </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Opening Hours</h3>
              <p>We operate a <b>24 hour</b> service including public holidays. Our centres work during these times:</p>
              <ul class="opening-table">
                <li>
                  <span><p>New Hope Hospital</p></span>
                  <div class="value">Mon-Sun 24 hours</div>
                </li>
                <li>
                  <span><p>Hope Specialist Centre</p></span>
                  <div class="value">Mon-Sun 24 hours</div>
                </li>
                <li>
                  <span><p>Onitsha Diagnostic Centre</p></span>
                  <div class="value">Mon-Sat 8am-5pm</div>
                </li>
                <li>
                  <span><p>New Hope, Okpoko Branch</p></span>
                  <div class="value">Mon-Sat 8am-5pm</div>
                </li>
              </ul>              
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-hospital-o"></span>
              <h3>Appointment</h3>
              <p>Consider booking an appointment for your next health service or medical checkup.</p>
              <div class="readmore_area">
                <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appointment"><span>Appointment</span></a>
              </div>
              <!-- start modal window -->
              <?php include_once 'appointment_modal.php';?>
              <!-- /.modal -->
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
      </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->

    <!--=========== BEGIN Service SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                  <h2><a href="<?php echo $services_url;?>">Our Services</a></h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <?php include_once 'key_services.php';?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--=========== End Service SECTION ================-->



    <!--=========== BEGIN Counter SECTION ================-->
    <?php include_once 'counter_show.php';?>
    <!--=========== End Counter SECTION ================-->


    <!--=========== BEGIN Testimonial SECTION ================-->
    <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="testimonial-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>What our Patients are Saying</h2>
                <div class="line"></div>
              </div>
              <div class="testimonial-area">
                <ul class="testimonial-nav">
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/testimonial/ij_image2.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">Wow, New Hope Hospital is the best place to receive complete health treatment services. My stay with them was very satisfying and their excellent health service enabled me have a quick recovery.</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/testimonial/chichi_image2.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">New Hope Hospital has very committed staffs ready to help you get better, quickly. Their services are the best in town for health care and their prices are highly affordable.</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/testimonial/joe_image1.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">Receiving the most caring treatment ever from a health institution summarizes my stay in New Hope Hospital. With very effective machines and highly efficient staff, you can be rest assured that your medical problems will be thoroughly treated.</p>
                      </div>
                    </div>
                  </li>                 
                </ul>
              </div>
            </div>
    </section>
    <!--=========== End Testimonial SECTION ================-->
    <!--=========== BEGIN Home Blog SECTION ================-->
    <section id="homeBLog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="homBlog-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>News From Blog</h2>
                            <div class="line"></div>
                        </div>
                        <!-- Start Home Blog Content -->
                        <div class="homeBlog-content">
                            <div class="row">
                                <!-- Start Single Blog -->
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    &nbsp;
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="single-Blog">
                                        <div class="single-blog-left">
                                            <ul class="blog-comments-box">
                                                <li>January <h2>2</h2>2020</li>
                                                <li><span class="fa fa-eye"></span>10</li>
                                                <li><a href="#"><span class="fa fa-comments"></span>0</a></li>
                                            </ul>
                                        </div>
                                        <div class="single-blog-right">
                                            <div class="blog-img">
                                                <figure class="blog-figure">
                                                    <a href="#"><img src="<?php echo $image_blog.'/Health_Promise2020.png'; ?>" <!--alt="img" style="height: 280px; width: 1500px;"-->></a>
                                                    <span class="image-effect"></span>
                                                </figure>
                                            </div>
                                            <div class="blog-author">
                                                <ul>
                                                    <li>By <a href="#">Chimalume Atuchukwu</a></li>
                                                    <li>the <a href="#">Content Contributor</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <h2>Setting Health-y Goals for 2020</h2>
                                                <p>It is only a few days into the new year and new decade and while a lot of us may have already set our personal development, financial, career and relationship goals for the year, it is pertinent to remember that the most important factor in the achievement of these goals is your health- which is your mind and body. Yes, without a healthy body and mind, attaining these ambitious goals we have set may not happen. So, here are five health goals we suggest you add to your list of 2020 goals:  &ctdot;</p>
                                                <div class="readmore_area">
                                                    <a href="Healthy_Goals_2020.php" data-hover="Read More"><span>Read More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== End Home Blog SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
<?php include 'footer.php';?>
    <!--=========== End Footer SECTION ================-->

   
    
     
  </body>
</html>