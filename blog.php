<?php $sub_title="Blog";?>
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
<?php include 'navbar.php'?>
<!--=========== END HEADER SECTION ================-->


<!--=========== START BLOG SECTION ================-->
<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>BLOG</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="<?php echo $home_url;?>">Home</a></li>
                            <li class="active">Blog</li>
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
                                                        <a href="#"><img src="<?php echo $image_blog.'/Health_Promise2020.png'; ?>" alt="img" style="height: 420px; width: 1500px;"></a>
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
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="Healthy_Goals_2020.php">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Read More</span>
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
                                                        <a href="#"><img src="<?php echo $image_blog.'/Liver Picture 1500 860.jpeg'; ?>" alt="img" style="height: 420px; width: 1500px;"></a>
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
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="hepatitis_b_v1.php">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Read More</span>
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