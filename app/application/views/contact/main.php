<?php include(__DIR__.'/../header.php'); ?>
 <!-- Start main-content -->
  <div class="main-content"style="background-image: url(<?php echo BASE_CDN; ?>images/footer-bg.png);
    background-position: initial !important;
    background-size: initial !important;
    background-repeat: initial !important;
    background-attachment: initial !important;
    background-origin: initial !important;
    background-clip: initial !important;
    background-color: rgb(255, 255, 255) !important;">
    <!-- Section: inner-header -->
    <section class="inner-header divider  layer-overlay overlay-theme-colored-9" style="" data-bg-img="<?php echo BASE_CDN;?>images/contact/contatos.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white subtitle"><?php echo $config["lang"]["CONTACT"]["TITLE"]?></h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
 <!-- Section: Divider call -->
<section>
         <div class="container pb-0">
        <div class="row text-center">
            <div class="image-box-details">
                <img src="<?php echo BASE_CDN."images/contact/".$config["lang"]["CONTACT"]["GROUP1"]["PICTURE"]; ?>" alt="" height="300">
              </div>
          <h2 class="text-uppercase line-bottom-center mt-0"><?php echo $config["lang"]["CONTACT"]["GROUP1"]["TITLE"]; ?></h2>
          <h3 class="text-uppercase line-bottom-center mt-0"><?php echo $config["lang"]["CONTACT"]["GROUP1"]["SUBTITLE"]; ?></h3>
            <!-- <div class="icon-box iconbox-border iconbox-theme-colored p-40">
                
              </a>
              <p class="text-gray"><?php echo $config["lang"]["CONTACT"]["GROUP1"]["DESCRIPTION"]?> </p>
            </div> -->
        </div>
          </div>
      </section>
              <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo BASE_CDN;?>images/bg/world.jpg" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-9">
                
              <h2 class="text-white font-opensans font-30 mt-0 mb-5"><?php echo $config["lang"]["CONTACT"]["GROUP2"]["TITLE"]; ?></h2>
            </div>
        </div>
      </div>
    </section>
 <br>
 
 
 
 <section class="divider">
      <div class="container pt-5 pb-5">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
<!--              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>-->
            </div>
          
        
        <div class="section-content">
        <?php if(count($config["lang"]["CONTACT"]["GROUP2"]["ITEMS"])>0){?>
              <?php foreach ($config["lang"]["CONTACT"]["GROUP2"]["ITEMS"] as $key => $value) {
               ?>
               <div class="col-xs-12 col-sm-2 col-md-6">
                   <div class="image-box-details text-center p-20 pt-30 pb-30">
                  
                <img src="<?php echo BASE_CDN."images/contact/".$value["PICTURE"];?>" alt="" height="300">
              
                <h3 class="title mt-0"><?php echo $value["TITLE"]?></h3>
                <p class="desc mb-20"><?php echo $value["SUBTITLE"]?></p>
                <a href="mailto:<?php echo $value["EMAIL"]?>" class="btn btn-colored btn-theme-colored"><?php echo $value["EMAIL"]?></a>
                       </div>
            </div>
              <?php } ?> 
        <?php }?>

        </div>
        </div>
        </div>
      </div>
    </section> 
 
 <section class="divider parallax layer-overlay overlay-white-9" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg11.jpg" style="background-image: url(&quot;images/bg/bg11.jpg&quot;); background-position: 50% -1805px;">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0"><?php echo $config["lang"]["CONTACT"]["GROUP3"]["TITLE1"];?></h5>
              <h2 class="mt-0 text-uppercase font-28"><?php echo $config["lang"]["CONTACT"]["GROUP3"]["TITLE2"]?></h2>
              <div class="icon">
                <i class="fa fa-hospital-o"></i>
              </div>
            </div>
            <div class="col-md-6"> <p><?php echo $config["lang"]["CONTACT"]["GROUP3"]["DESCRIPTION"];?></p></div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
           
            <?php if(count($config["lang"]["CONTACT"]["GROUP3"]["ITEMS"])>0){?>


              <?php foreach ($config["lang"]["CONTACT"]["GROUP3"]["ITEMS"] as $key => $value) {
               ?>
               

                 <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30 contact-item">
              <div class="team-member">
                <div class="bg-white text-center pt-20">
                    <div class="member-biography">
                     <div>
                <img src="<?php echo BASE_CDN."images/contact/".$value["PICTURE"];?>" alt="" height="230" width="172.5">
                
              </div>
                    <h3 class="font-22 contact_name"><?php echo $value["TITLE"]?> </h3>
                    <h5 class="font-weight-300 font-14"><a href="mailto:<?php echo $value["EMAIL"]?>"><?php echo $value["SUBTITLE"]?></a></h5>
                    
                    <p class='info_contact'> <?php echo $value["EMAIL"]?> </p>
                  </div>
                </div>
              </div>
            </div>


              <?php } ?>
        <?php }?>

           

          </div>
        </div>
      </div>
    </section>


<?php include(__DIR__.'/../footer.php'); ?>