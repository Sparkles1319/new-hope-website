<?php $sub_title="About us";?>
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
    <!--<a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>-->
    <!-- END SCROLL TOP BUTTON -->

        <!--=========== BEGIN HEADER SECTION ================-->
    <?php include "navbar.php";?>
    <!--=========== END HEADER SECTION ================-->      
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>About Us</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="<?php echo $home_url;?>">Home</a></li>
                  <li class="active">About Us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>
    <!--=========== BEGIN ABOUT US SECTION - VISIBLE IN LARGE DEVICES ================-->
    <section class="visible-lg-block visible-md-block hidden-sm hidden-xs" id="meetDoctors" style="padding-top: 5px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <div class="section-heading">
            <h3 id="change_title">Overview</h3>
          <div class="line-red"></div>
          </div>
            </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

          <div class="tabbable" style="height: 100%;" id="aboutUsTabbable" >
            <ul class="nav nav-pills nav-stacked col-sm-3" style=" padding-right: 0; height: 100%;">
              <li class="active"><a href="#overview" data-toggle="tab"  class="change_title about_us_contents">Overview &nbsp;<i class="fa fa-caret-right "></i></a></li>
              <li><a href="#mission" data-toggle="tab" class="change_title about_us_contents">Our Mission</a></li>
              <li><a href="#vision" data-toggle="tab" class="change_title about_us_contents">Our Vision</a></li>
              <li><a href="#messagefromMD" data-toggle="tab" class="change_title about_us_contents">Message from the MD</a></li>

            </ul>
            <div class="tab-content col-sm-9 " style="padding-left: 30px;font-size: 16px; height: 100%">
              <div class="tab-pane active" id="overview" style="padding-top: 0;">
                <p>New Hope Hospitals and Laboratory Limited is a high standard health facility and has staff capacity comprising medical doctors (specialists and medical officers), registered and specialist staff nurses, pharmacist, laboratory scientists, radiographers and varied technicians. The hospital was established in the year 1984 and since then has grown to be one of the best health centers on the east of the Niger. It is located at the center hub of the city of Onitsha, Anambra State and currently boasts of having state-of-the-art machines in its various medical departments.</p>
             <p>
               Currently operating in various sites across Onitsha, New Hope Hospital offers services such as general health care, maternity, ultrasound and digital scanning, CT-Scan, Endoscopy, Mobile X-ray, Mammography, Ambulance services and many more others. Prompt service is the watchword at New Hope Hospital and we are available 24 hours every day of the week. 24 hours of power supply is also assured.
             </p>
              </div>
              <div class="tab-pane" id="mission" style="padding-top: 0;">
                  <p>To provide accessible, high quality yet cost-effective health care in a conducive environment that promotes speedy recovery.</p>
              </div>
              <div class="tab-pane" id="vision" style="padding-top: 0;"><p>To become a reference point in health care delivery dedicated to clinical quality and patient centeredness.</p>
              </div>
              <div class="tab-pane" id="messagefromMD" style="padding-top: 0;"><p>Welcome to New Hope Hospital. We strive to render to our people the best quality medical service using state-of-the-art equipment in the most cost effective and caring manner while maintaining a conducive, clean and healthy environment.</p>

            <p>The quick recovery of our patients is our primary concern. We hope you enjoy your stay here even as we assist you for a speedy and complete recovery. Above all, we recognize that it is only God that heals.</p>
              </div>

            </div>

          </div>
        </div>
        </div>

      </div>
    </section>
    <!--=========== End Doctors SECTION VISIBLE IN SMALL DEVICES ================-->
<section id="testimonial" class="visible-sm-block visible-xs-block hidden-lg hidden-lg">
  <div class="panel-group" id="aboutus_accordion">
    <!-- Panel 1 -->
    <div class="panel panel-primary" id="aboutUsPanel">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#aboutus_accordion" href="#overview_accordion">
            Overview
          </a>
        </h4>
      </div>
      <div id="overview_accordion" class="panel-collapse collapse in">
        <div class="panel-body">
          <p>New Hope Hospital is a premium high standard health facility that boasts of over 30 beds and more than 100 staff working all round the clock. The hospital was established in the year 1984 and since then has grown to be one of the best health centers on the east of the Niger. It is located at the center hub of the city of Onitsha and currently boasts of having up-to-date health machines and laboratory equipment.</p>
          <p>
            Currently operating in various sites, it offers services such as general health care, maternity, ultrasound and digital scanning, CT-Scan, Endoscopy, Mobile X-ray and many more others. You are highly welcome to this homely place where everyone is concerned about your getting healthy.
          </p>
        </div>
      </div>
    </div>
      <!-- Panel 2 -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#aboutus_accordion" href="#mission_accordion">
              Our Mission
            </a>
          </h4>
        </div>
        <div id="mission_accordion" class="panel-collapse collapse">
          <div class="panel-body">
              <p>To provide accessible, high quality yet cost-effective health care in a conducive environment that promotes speedy recovery.</p>  
          </div></div>
      </div>
      <!-- Panel 3 -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#aboutus_accordion" href="#vision_accordion">
              Our Vision
            </a>
          </h4>
        </div>
        <div id="vision_accordion" class="panel-collapse collapse">
          <div class="panel-body">
            <p>To become a reference point in health care delivery dedicated to clinical quality and patient centeredness.</p>
          </div>
        </div>
      </div>
      <!--      end of Vision panel-->
      <!-- Panel 4 -->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#aboutus_accordion" href="#messagefromMD_accordion">
              Message from the MD
            </a>
          </h4>
        </div>
        <div id="messagefromMD_accordion" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Welcome to New Hope Hospital. We strive to render to our people the best quality medical service using state-of-the-art equipment in the most cost effective and caring manner while maintaining a conducive, clean and healthy environment.</p>

            <p>The quick recovery of our patients is our primary concern. We hope you enjoy your stay here even as we assist you for a speedy and complete recovery. Above all, we recognize that it is only God that heals.</p>
          </div>
        </div>
      </div>
<!--      end of message from the MD panel-->


    </div>
</section>

    <!--=========== BEGIN Doctors SECTION ================-->
    <?php include "meet_our_staff.php" ?>
    <!--=========== End Doctors SECTION ================-->
    <!--=========== BEGAIN Counter SECTION ================-->
   <?php include_once 'counter_show.php';?>
    <!--=========== End Counter SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
    <?php include "footer.php"?>
    <!--=========== End Footer SECTION ================-->

    <!-- jQuery Library  -->

    <script>
      $('document').ready(function () {
        var title;
        $('ul.nav-pills').height($('div.tab-content').height());
        $('.change_title').click(function () {
         title= $(this).text();
          $('#change_title').text(title);
        });

        // to get the clicked tab

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
//show selected tab / active
          console.log ( $(e.target).attr('href') );
          $('a[data-toggle="tab"]').find('i').remove();
          $(e.target).append("&nbsp;<i class='fa fa-caret-right'></i>");

        });


      });
    </script>
  </body>
</html>