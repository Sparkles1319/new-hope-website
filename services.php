<?php $sub_title="Services";?>
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
<a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<?php include "navbar.php";?>
<!--=========== END HEADER SECTION ================-->

<?php
//$path_to_pages=$base_url.$path_to_service_page;
$default_dict=$services_dict['all_services'];
$default_page=$services_dict['all_services']['url'];
$load_page=$default_page;
if(isset($_GET['reqpage']) && $_GET['reqpage']){


    $req_page=strtolower(htmlspecialchars($_GET['reqpage']));


    if (isset($services_dict[$req_page])){


        $default_dict=$services_dict[$req_page];

//        echo @get_headers(htmlspecialchars(APP_URL.$services_dict[$req_page]['url']));
        $load_page=file_exist_service($services_dict[$req_page]['url'],$default_page);
//        echo $load_page;
    }


}
?>
<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2><?php echo $default_dict['name']; ?></h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="<?php echo $home_url; ?>">Home</a></li>
                            <li><a href="<?php echo $services_url; ?>">Services</a></li>
                            <li class="active"><?php echo $default_dict['breadcrumb'] ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($load_page==$default_page){
//        echo $load_page . "++++".$default_page;

        include $load_page;
    }
        else{

        ?>
<!--        load page is all services page, load it directly-->

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!-- Start Blog Archive Area -->
                                <div class="blogArchive-area">
                                    <div class="row">
                                        <!-- Start left Side bar -->
                                        <div class="col-md-3 col-sm-4">
                                            <aside class="sidebar">

                                                <!-- Start sidebar widget -->
                                                <div class="single-footer-widget sidebar-widget">
                                                    <h3>Services</h3>
                                                    <?php include "services/all_services_list.php";?>
                                                </div>


                                            </aside>
                                        </div>
                                        <!-- Start Blog Content -->
                                        <?php

                                        include $load_page;


                                        ?>
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
                        <?php include "services/clinic_times.php"; ?>
                    </div>
                </div>
            </div>
<!--        load page is individual services page, include them here-->
    <?php }?>

    <!--=========== START BLOG SECTION ================-->



    <!--=========== END BLOG SECTION ================-->



</section>



<!--=========== Start Footer SECTION and all scripts================-->
<?php include "footer.php"?>
<!--=========== End Footer SECTION ================-->


<script>
    $('document').ready(function () {
        var title;
//        $('ul.nav-pills').height($('div.tab-content').height());
//        $('.change_title').click(function () {
//            title= $(this).text();
//            $('#change_title').text(title);
//        });
//
//        // to get the clicked tab
//
//        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
////show selected tab / active
//            console.log ( $(e.target).attr('href') );
//            $('a[data-toggle="tab"]').find('i').remove();
//            $(e.target).append("&nbsp;<i class='fa fa-caret-right'></i>");
//
//        });

        //To make doctor scrollable

        $('#scroll_doctor').slick({
            dots: true,
            infinite: true,
            speed: 800,
            arrows:false,
            slidesToShow: 1,
            slide: 'section',
            autoplay: true,
            fade: true,
            autoplaySpeed: 5000,
            cssEase: 'linear'
        });


    });
   
</script>
</body>
</html>