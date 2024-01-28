<?php

$home_active="";
$about_active="";
$service_active="";
$staff_active="";
$gallery_active="";
$contact_active="";
$blog_active="";
$careers_active="";

if ($sub_title && strpos(strtolower($sub_title),"home")!==false){
    $home_active="active";
}
if ($sub_title && strpos(strtolower($sub_title),"about us")!==false){
    $about_active="active";
}
if ($sub_title && strpos(strtolower($sub_title),"contact")!==false){
    $contact_active="active";
}
if ($sub_title && strpos(strtolower($sub_title),"services")!==false){
    $service_active="active";
}
if ($sub_title && strtolower($sub_title)==strtolower("staff")){
    $staff_active="active";
}
if ($sub_title && strpos(strtolower($sub_title),"gallery")!==false){
    $gallery_active="active";
}
if ($sub_title && strpos(strtolower($sub_title),"blog")!==false){
    $blog_active="active";
}
if ($sub_title && strpos(strtolower($sub_title),"careers")!==false){
    $careers_active="active";
}
?>
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <!--<a class="navbar-brand" href="index.html"><i class="fa fa-heartbeat"></i>WpF <span>Medinova</span></a>              -->
                    <!-- IMG BASED LOGO  -->
                    <a class="navbar-brand" href="<?php echo $home_url;?>" style="margin-top: -5px;padding: 0 15px;">
                        <img src="<?php echo $base_url.'/';?>images/New_Hope_Logo.png" alt="logo"  width="10" height="60">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="<?php echo $home_active;?>"><a href="<?php echo $home_url;?>">Home</a></li>
                        <!--<li><a href="features.html">Features</a></li>-->
                        <li class="dropdown <?php echo $about_active;?>">
                            <a href="about_us.php" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo $about_url.'#brief_history';?>">Overview</a></li>
                                <li><a href="<?php echo $about_url.'#mission';?>">Our Mission</a></li>
                                <li><a href="<?php echo $about_url.'#vision';?>">Our Vision</a></li>
                                <li><a href="<?php echo $about_url.'#messagefromMD';?>">Message from MD</a></li>
                                <li><a href="<?php echo $about_url.'#meet_our_staff';?>">Meet our Staff</a></li>
                            </ul>
                        </li>

                        <li class="dropdown <?php echo $service_active;?>">
                            <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo $services_url;?>">All Services</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=general_medical';?>">General Medicine</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=maternity';?>">Maternity</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=lab';?>">Laboratory</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=xrayscan';?>">Scans and X-Ray</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=dialysis';?>">Dialysis</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=ctscan';?>">CT Scan</a></li>
                                <li><a href="<?php echo $services_url.'?reqpage=ctscan';?>">Ambulance</a></li>
                            </ul>
                        </li>


                        <li class="<?php echo $gallery_active;?>"><a href="<?php echo $gallery_url;?>">Gallery</a></li>
                        <li class="<?php echo $blog_active;?>"><a href="<?php echo $blog_url;?>">Blog</a></li>
                        <li class="<?php echo $careers_active;?>"><a href="careers.php">Careers</a></li>
                        

                        <li class="<?php echo $contact_active;?>"><a href="<?php echo $contact_url;?>">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>