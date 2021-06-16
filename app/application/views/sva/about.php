<?php include(__DIR__.'/../header.php'); ?>
  
   
  <!-- Start main-content -->
  <div class="main-content">
        <!-- Section: inner-header -->
        
        <section class="inner-header divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo BASE_CDN;?>images/about/foto_pagina_sva.jpg" ; background-position: 50% 0px;">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white subtitle" ><?php echo $config["lang"]["ABOUT"]["TITLE"]?></h3>
            </div>
          </div>
        </div>
      </div>      
    </section>
        
     


    <!-- Section: About Us -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2><?php echo $config["lang"]["ABOUT"]["GROUP1"]["TITLE"]?></h2>
              <p class="lead text-theme-colored"><?php echo $config["lang"]["ABOUT"]["GROUP1"]["SUBTITLE"]?> </p>
              <p><?php echo $config["lang"]["ABOUT"]["GROUP1"]["DESCRIPTION"]?> </p>
            </div>
            <div class="col-md-12">
              <div class="icon-box text-center p-0 mb-sm-40 p-40 border-1px border-theme-colored">
                <div>
                  <h4 class="icon-box-title mt-15 mb-10 text-uppercase letter-space-2"><strong><?php echo $config["lang"]["ABOUT"]["GROUP2"]["TITLE"]?> </strong></h4>
                  <p><?php echo $config["lang"]["ABOUT"]["GROUP2"]["DESCRIPTION"]?> </p>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Divider call -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo BASE_CDN;?>images/bg/world.jpg" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0" id="story">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-9">
              <h2 class="text-white font-opensans font-30 mt-0 mb-5"><?php echo $config["lang"]["ABOUT"]["LABEL_GREEN"]["TITLE"]?></h2>
              <h3 class="text-white font-opensans font-18 mt-0"> <?php echo $config["lang"]["ABOUT"]["LABEL_GREEN"]["SUBTITLE"]?></h3>
            </div>
            <!-- <div class="col-md-3 mt-30"> 
              <a href="https://www.adventistvolunteers.org/" target="_blank" class="btn btn-default btn-theme-colored btn-circled btn-lg"><?php echo $config["lang"]["ABOUT"]["LABEL_GREEN"]["BUTTON"]?></a> 
            </div> -->
          </div>
        </div>
      </div>
    </section>

<section class="divider parallax layer-overlay overlay-deep mobile-parallax"  >
      <div class="container" >
        <div class="row text-justify">
          <div class="col-md-6">
            <h3 class="line-bottom"><?php echo $config["lang"]["ABOUT"]["GROUP3"]["TITLE"]?></h3>
            <p><?php echo $config["lang"]["ABOUT"]["GROUP3"]["DESCRIPTION"]?></p>
          </div>
          <div class="col-md-6">
            <h3 class="line-bottom"><?php echo $config["lang"]["ABOUT"]["GROUP4"]["TITLE"]?></h3>
            <p><?php echo $config["lang"]["ABOUT"]["GROUP4"]["DESCRIPTION"]?></p>
          </div>
        </div>
      </div>
    </section>

<?php include(__DIR__.'/../footer.php'); ?>