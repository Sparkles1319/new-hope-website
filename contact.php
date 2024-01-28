<?php $sub_title="Contact Us";?>
<!DOCTYPE html>
<html lang="en">
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
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include 'navbar.php'?>
    <!--=========== END HEADER SECTION ================-->            
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Contact</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="<?php echo $home_url;?>">Home</a></li>
                  <li class="active">Contact Us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>    

    <!--=========== END Google Map SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-6">
            <div class="contact-form">
              <div class="section-heading">
                <h3>Get in Touch</h3>
                <div class="line"></div>
              </div>
              <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
              <form class="submitphoto_form">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                  <input type="text" class="wp-form-control wpcf7-email" placeholder="Phone Number">
                <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address">
                <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
               <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Send Message</span></button>                
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="contact-address">
              <div class="section-heading">
                <h3>Address</h3>
                <div class="line"></div>
              </div>
               <p>You can drop in to visit us at any of our available hours or reach us through one of these means:</p>
              <address class="contact-info">               
                <p><span class="fa fa-home"></span>80 Modebe Avenue
                Onitsha, Anambra State, Nigeria</p>
                <p><span class="fa fa-phone"></span>+2348033045697</p>
                <p><span class="fa fa-envelope"></span>info@newhopehospital.org</p>
              </address>
                <div class="section-heading">
                    <h3>Social Media</h3>
                    <div class="line"></div>
                </div>

              <div class="social-share">               
               <ul>
                 <li><a href="https://www.facebook.com/newhopehospitals/" target="_blank"><span class="fa fa-facebook"></span></a></li>
                 <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                 <li><a href="https://www.instagram.com/newhopehospitals/" target="_blank"><span class="fa fa-instagram"></span></a></li>

                 <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
               </ul>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=========== BEGIN Google Map SECTION ================-->
    <section id="googleMap">
        <div class="section-heading">
            <h3>Directions</h3>
            <div class="line"></div>
        </div>
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1c2W43Hn0ei8oqWS1ULmdL2QeYLoGUQxr" width="100%" height="480"></iframe>
    </section>

    <!--=========== Start Footer SECTION ================-->
    <?php include 'footer.php'?>
    <!--=========== End Footer SECTION ================-->


     
  </body>
</html>