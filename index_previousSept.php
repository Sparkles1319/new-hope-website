
<?php $sub_title="Home";?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
  <body>
    
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i>
    </a>
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
            <img src="<?php echo $image_home_slider.'/Daddy_Musa.jpg'; ?>" alt="Home Page Slider">
          </div>
          <div class="slider-text">
            <h2>Welcome to <strong>New Hope Hospital</strong> </h2>
            <p><strong></strong>&nbsp;</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="<?php echo $about_url.'#overview';?>"><span>Read More</span></a>
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
              <p>Have any reason to receive an immediate health solution? Here at New Hope we offer quick medical services with excellent outcomes.</p>
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
              <p>We operate a <b>24 hour</b> service including public holidays. Our centres also work during the scheduled time below:</p>
              <ul class="opening-table">
                <li>
                  <span><p>New Hope Hospital</p> <p>(80 Modebe Avenue)</p></span>
                  <div class="value">Mon-Sun (24hrs)</div>
                </li>
                <li>
                  <span><p>Hope Specialist Medical Centre</p> <p>(104 Modebe Avenue)</p></span>
                  <div class="value">Mon-Sun (8am-8pm)</div>
                </li>
                <li>
                  <span><p>Onitsha Medical Diagnosis Center</p> <p>(26 Umunna Street)</p></span>
                  <div class="value">Mon-Fri (8am-6pm), Sat (8am - 2pm)</div>
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
                <h2>What our patients said</h2>
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
                        <p class="testimonial-parg">Wow, New Hope Hospital is the best place to receive complete health treatment services. My stay with them was very satisfying and their excellent health service enabled me a quick recovery.</p>
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
                        <p class="testimonial-parg">Receiving the most caring treatment ever from a health institution summarizes my stay in New Hope Hospital. With the most effective machines and highly efficient staff, you can be rest assured that your medical problems will be thoroughly treated.</p>
                      </div>
                    </div>
                  </li>                 
                </ul>
              </div>
            </div>
          </div>
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
                                                <li>July <h2>2</h2>2018</li>
                                                <li><span class="fa fa-eye"></span>10</li>
                                                <li><a href="#"><span class="fa fa-comments"></span>0</a></li>
                                            </ul>
                                        </div>
                                        <div class="single-blog-right">
                                            <div class="blog-img">
                                                <figure class="blog-figure">
                                                    <a href="#"><img src="<?php echo $image_blog.'/Liver Picture 1500 860.jpeg'; ?>" alt="img" style="height: 280px; width: 1500px;"></a>
                                                    <span class="image-effect"></span>
                                                </figure>
                                            </div>
                                            <div class="blog-author">
                                                <ul>
                                                    <li>By <a href="#">Dr. Azubuike Atuchukwu</a></li>
                                                    <li>the <a href="#">Resident Doctor</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <h2>Hepatitis B - An Introduction</h2>
                                                <p>Hepatitis B is a viral infectious disease caused by the Hepatitis B virus which primarily affects the liver cells. It may lead to chronic liver disease like liver cirrhosis, chronic active Hepatitis, chronic persistent Hepatitis or primary liver cell cancer. Hepatitis B is a global public health problem and an estimated 500,000 people die annually  &ctdot;</p>
                                                <div class="readmore_area">
                                                    <a href="hepatitis_b_v1.php" data-hover="Read More"><span>Read More</span></a>
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