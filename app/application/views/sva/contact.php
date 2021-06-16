<?php include(__DIR__.'/../header.php'); ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="<?php echo BASE_CDN;?>images/bg/mountain.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white"><?php echo $config["lang"]["CONTACT"]["TITLE"]?></h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
    <section>
      <div class="container pb-0">
        <div class="row text-center">
          
            <div class="icon-box iconbox-border iconbox-theme-colored p-40">
              <img class="pull-left mr-15 thumbnail" src="http://placehold.it/430x240" alt="">
              
            
              <h5 class=""><?php echo $config["lang"]["CONTACT"]["GROUP1"]["TITLE"]; ?></h5>
              <p class="text-gray"><?php echo $config["lang"]["CONTACT"]["GROUP1"]["SUBTITLE"]; ?></p>
            </div>
        </div>
          
 <!-- Section: Divider call -->
    <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo BASE_CDN;?>images/bg/map.jpg">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-9">
              <h2 class="text-white font-opensans font-30 mt-0 mb-5"><?php echo $config["lang"]["CONTACT"]["GROUP2"]["TITLE"]?></h2>
            </div>
            <div class="col-md-3 mt-30"> 
           
          </div>
        </div>
      </div>
    </section>
 

        <section>
  <div class="row">
        <?php if(count($config["lang"]["GROUP2"]["ITEMS"])>0){?>
              <?php foreach ($config["lang"]["GROUP2"]["ITEMS"] as $key => $value) {
               ?>
               <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="image-box-thum">
                <img src="https://placehold.it/360x240" alt="">
              </div>
              <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
                <h3 class="title mt-0"><?php echo $value["TITLE"]?></h3>
                <p class="desc mb-20"><?php echo $value["SUBTITLE"]?></p>
                <a href="mailto:<?php echo $value["EMAIL"]?>" class="btn btn-colored btn-theme-colored"><?php echo $value["EMAIL_TITLE"]?>:<?php echo $value["EMAIL"]?></a>
              </div>
            </div>


              <?php } ?>

        <?php }?>

            
          </div>
    </section>
<!--  <div class="separator">
  <span>Coordinadores por uniones hispanas</span>
  </div>
<div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-white maxwidth500 mb-30">
                <div class="thumb">
                  <img src="<?php echo BASE_CDN;?>images/project/1.jpg" alt="" class="img-fullwidth">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">franceso@upeu.edu.pe <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10 pb-10">
                  <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Francesco Marquina</a></h5>
                  <p>Coordinador Servicio Voluntario Adventista - UPN.</p>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
  </div>
  <!-- end main-content -->


<?php include(__DIR__.'/../footer.php'); ?>