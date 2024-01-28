
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
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="<?php echo $image_home_slider.'/first_slider_hope_specialist_logo.jpg'; ?>" alt="">
          </div>
          <div class="slider-text">
            <h2>Welcome to <strong>New Hope Hospital</strong> </h2>
            <p><strong></strong>&nbsp;</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="<?php echo $image_home_slider.'/second_slider_homonal_assay.jpg'; ?>" alt="">
          </div>
          <div class="slider-text">
            <h2>We offer <strong>Excellent Services</strong></h2>
            <p><strong>We have state-of-the-art facilities</strong> to meet every of your health needs</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>
            </div>
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="<?php echo $image_home_slider.'/third_slider_scanning_patient.jpg'; ?>" alt="">
          </div>
          <div class="slider-text">
            <h2>We are <strong>Professionals</strong> </h2>
            <p><strong>Highly Skilled Health care workers</strong> with a professional touch</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>
            </div>
          </div>
        </div>
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="<?php echo $image_home_slider.'/fourth_slider_staff_examining_patient.jpg'; ?>" alt="">
          </div>
          <div class="slider-text">
            <h2>We are <strong>Trustworthy</strong> </h2>
            <p><strong>Read what</strong> our patients say about our services</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>
            </div>
          </div>
        </div>
        <!-- End Fourth slide -->

        <!-- Start Fifth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="<?php echo $image_home_slider.'/fifth_slider_smiling_nurses_1.jpg'; ?>" alt="">
          </div>
          <div class="slider-text">
            <h2>We would <strong>Love to Meet You</strong> </h2>
            <p>Have any<strong> Health Concerns? </strong> Why don't you call or visit Us.</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>
            </div>
          </div>
        </div>
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
              <p>Have any reason to receive an immediate health solution? Here at New Hope we offer quick medical services and efficient outcomes.</p>
              <div class="readmore_area">
                <a href="#" data-hover="Read More"><span>Read More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Opening Hours</h3>
              <p>We operate a <b>24 hour</b> service including public holidays. Our centres also work during the scheduled time below.</p>
              <ul class="opening-table">
                <li>
                  <span>Monday - Friday</span>
                  <div class="value">8.00am - 6.00pm</div>
                </li>
                <li>
                  <span>Saturday</span>
                  <div class="value">8.00am - 8.00pm</div>
                </li>
                <li>
                  <span>Sunday</span>
                  <div class="value">8.00am - 8.00pm</div>
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
                        <img src="images/patients-3.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">Wow, New Hope Hospital is the best place to receive complete health treatment services. My stay with them was very satisfying and their excellent health service enabled me a quick recovery.</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/patients-1.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">A visit to New Hope Hospital shows very committed staffs ready to help you get better, quickly. Their services are the best in town as regards the health sector and their prices are highly affordable.</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/patients-2.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">Receiving the most caring treatment ever from a health institution summarizes my stay in New Hope Hospital. With the most effective machines and highly efficient staff, you can be rest assured that your medical fears are well covered.</p>
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
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>January <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>213</li>
                          <li><a href="#"><span class="fa fa-comments"></span>0</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Atuchukwu</a></li>
                            <li>the <a href="#">Chief Medical Director</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Laser Fevers and its' worries</h2>
                          <p>Many people think that lassa fever is all from rats, but there is more to be discussed under this than the common man can see. The name lassa fever was coined from &ctdot;</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Smith</a></li>
                            <li>In <a href="#">Dental</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Latest Trend Of Medical Dental Department</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Smith</a></li>
                            <li>In <a href="#">Dental</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Latest Trend Of Medical Dental Department</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
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