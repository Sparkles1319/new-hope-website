<?php
/**
 * Created by PhpStorm.
 * User: ijeoma
 * Date: 02/04/2018
 * Time: 01:30
 */
?>

<!--=========== BEGIN Service SECTION ================-->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="service-area">
                    <!-- Start Service Title -->

                    <!-- Start Service Content -->
                    <?php include_once 'key_services.php';?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== End Service SECTION ================-->
<!--=========== BEGAIN SPECIAL services ================-->
<section id="extraFeatures">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="departments-area">
                    <div class="section-heading">
                        <h2>Other Services</h2>
                        <div class="line-red"></div>
                    </div>
                    <!-- Start Departments Accordion -->

                    <div class="panel-group custom-panel" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Theatre <span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident <a href="#" data-hover="Read More" class="readmore_services"><span>read more...</span></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Ambulance Services<span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <img class="img-center" src="images/choose-us-img3.jpg" alt="img">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Pharmacy  <span class="fa fa-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        More <span class="fa fa-minus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse in">
                                <div class="panel-body">
<!--                                    <div class="sidebar-widget">-->
<!---->
<!--                                        <ul id="servicesList">-->
<!--                                            <li><a href="#"><span class="fa fa-angle-right"></span>Endoscopy</a></li>-->
<!--                                            <li><a href="#"><span class="fa fa-angle-right"></span>Surgery</a></li>-->
<!--                                            <li><a href="#"><span class="fa fa-angle-right"></span>Antenatal</a></li>-->
<!--                                            <li><a href="#"><span class="fa fa-angle-right"></span>Intensive Care Unit</a></li>-->
<!--                                            <li><a href="#"><span class="fa fa-angle-right"></span>Pharmacy</a></li>-->
<!--                                            <li><a href="#"><span class="fa fa-angle-right"></span>Diabetes</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
                                    <div class="single-footer-widget">
                                        <?php include "more_services_list.php";?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php include "clinic_times.php"; ?>
            </div>
        </div>
    </div>
</section>
