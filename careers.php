<?php $sub_title="Careers";?>
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
<!-- BEGIN PRELOADER -->
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


<!--=========== START BLOG SECTION ================-->
<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Careers</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="<?php echo $home_url;?>">Home</a></li>
                            <li class="active">careers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Start Blog Archive Area -->
                        <div class="blogArchive-area">
                            <div class="row">
                                <!-- Start Blog Content -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="blog-content">
                                        <!-- Start Single Blog -->
                                        <div class="single-Blog">
                                            <!--<div class="single-blog-left">
                                                <ul class="blog-comments-box">
                                                    <li>July <h2>2</h2>2018</li>
                                                    <li><span class="fa fa-eye"></span>10</li>
                                                    <li><a href="#"><span class="fa fa-comments"></span>0</a></li>
                                                </ul>-->
                                            <!--</div>
                                            <div class="single-blog-right">
                                                <div class="blog-img">
                                                    <figure class="blog-figure">
                                                        <a href="#"><img src="<?php echo $image_blog.'/IMG_20160323_162657.jpg'; ?>" alt="img" style="height: 420px; width: 1500px;"></a>
                                                        <span class="image-effect"></span>
                                                    </figure>
                                                </div>
                                                <div class="blog-author">
                                                    <ul>
                                                        <li>By the <a href="#">Site Administrator</a></li>
                                                        <li> <a href="#">New Hope Hospitals & Laboratories</a></li>
                                                    </ul>
                                                </div>
                                                </div>-->
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">X-ray Technician</h2>
                                                    <p>Applications are open for the role of an x-ray technician in our medical facility located in Onitsha, Anambra state. &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Xray_Technician.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Medical Laboratory Technician</h2>
                                                    <p>We require the services of a medical laboratory technician for immediate employment in our medical facility located in Onitsha, Anambra state. &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Lab_Technician.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Key Client Officer/Marketer</h2>
                                                    <p>If you’re young, dynamic, creative and highly self-motivated and you’re seeking a place to apply these attributes, then we have a role for you. &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Key_Client_Officer.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Receptionist</h2>
                                                    <p>We require the services of a receptionist for immediate employment in our medical facility located in Onitsha, Anambra state. &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Receptionist.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Accounts Clerk</h2>
                                                    <p>We are looking for a skilled Accounts Clerk to perform a variety of accounting, bookkeeping and financial tasks in our organization &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Accounts_Clerk.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Imaging Scientists/Radiographers</h2>
                                                    <p>Applications are hereby invited from suitably qualified candidates for the role of imaging scientist at our multi-specialty medical centre  &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Imaging_Scientist.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Medical Doctor</h2>
                                                    <p>A medical doctor is required for immediate employment at our primary medical facility  &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Medical_Officer.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Account Officer</h2>
                                                    <p>Applications are hereby invited from suitably qualified candidates for the role of Account Officer in our medical centre &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Account_Officer.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>

                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px">Anesthesiologists</h2>
                                                    <p>Anesthesiologists with experience in ICU management are required for immediate employment at our medical facility  &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Anesthesiologists.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                    <div class="blog-content">
                                                    <h2 style="margin-top: 40px"> Registered Nurses</h2>
                                                    <p>Applications are now open for registered nurses to join our medical facility  &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Registered_Nurse.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
                                                </div>
                                                
                                                <div class="blog-content">
                                                    <h2 style="margin-top: 40px"> Renal Dialysis Nurses</h2>
                                                    <p>We are looking for dedicated and experienced renal dialysis nurses to provide quality care to patients in need of dialysis treatment at our multi-specialty medical centre  &ctdot;</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Renal_Dialysis_Nurse.php" target="_blank">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Job details</span>
                                                    </a>
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
    </div>
</section>
<!--=========== END BLOG SECTION ================-->


<!--=========== Start Footer SECTION ================-->
<?php include 'footer.php'?>
<!--=========== End Footer SECTION ================-->



</body>
</html>