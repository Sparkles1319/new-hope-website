<?php $sub_title="Gallery";?>
<!DOCTYPE html>
<html lang="en">
  <?php include "header.php"?>
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
    <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Gallery</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="<?php echo $home_url;?>">Home</a></li>
                  <li class="active">Gallery</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="gallery-area">
              <!-- Start First Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>Critical Medical Services</h2>
                  <div class="line"></div>
                </div>
                <div class="row">
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-1.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/Dialysis Centre 2.jpeg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">Dialysis Centre</figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-2.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/Dialysis Centre 3.jpeg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Dialysis Centre Entrance</figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-3.jpg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/ICU_2.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Intensive Care Unit (ICU)</figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-small-4.jpg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/ICU DIALYSIS.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">ICU Dialysis</figcaption>
                  </figure> 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-5.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/OPERATING THEATRE 2.jpg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">Operating Theatre</figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-4.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/OPERATING THEATRE.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Operating Theatre</figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-2.jpg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/Ambulance1.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Emergency Ambulance Exterior</figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-1.jpg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/Ambulance3.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">Emergency Ambulance Interior</figcaption>
                  </figure>                 
                </div>
              </div>
              <!-- End First Image Album  -->

              <!-- Start Second Image Album  -->
              <div class="my-simple-gallery">
                <div class="section-heading">
                  <h2>Laboratory, Scan & X-ray Services</h2>
                  <div class="line"></div>
                </div>
                <div class="row">
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-1.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/BIOCHEMISTRY DEPT..jpg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">Biochemistry</figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-2.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/CD4.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">CD4 Count</figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-3.jpg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/BLOOD BANKING.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Blood Bank</figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-4.jpg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/HORMONAL ASSAY.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">Hormonal Assay</figcaption>
                  </figure> 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-5.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/GENOTYPE WORK BENCH.jpg" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description">Genotype Work Bench</figcaption>         
                  </figure>
                  
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-4.jpg" itemprop="contentUrl" data-size="1024x1024">
                      <img src="images/gallery/AUTO-CHEMISTRY ANALYZER.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Auto Chemistry Analyzer</figcaption>
                  </figure> 
                 
                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-2.jpg" itemprop="contentUrl" data-size="1024x683">
                      <img src="images/gallery/X-ray2.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                    </a>
                    <figcaption itemprop="caption description">Mobile X-ray</figcaption>
                  </figure>

                  <figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="images/gallery/gallery-large-1.jpg" itemprop="contentUrl" data-size="1024x768">
                      <img src="images/gallery/X-ray1.jpg" itemprop="thumbnail" alt="Image description" />
                      <span class="image-effect"></span>
                  </a>
                    <figcaption itemprop="caption description">Mobile X-ray</figcaption>
                  </figure>                 
                </div>
              </div>
              <!-- End Second Image Album  -->

              <!-- This Section only for Lightbox view -->
              <!-- Root element of PhotoSwipe. Must have class pswp. -->
              <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe. 
                     It's a separate element, as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                  <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                  <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                  <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                  </div>

                  <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                  <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
    <?php include 'footer.php'?>
    <!--=========== End Footer SECTION ================-->

     
  </body>
</html>