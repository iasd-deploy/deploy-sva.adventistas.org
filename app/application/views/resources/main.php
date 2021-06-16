<?php include(__DIR__.'/../header.php'); ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="<?php echo BASE_CDN; ?>images/bg/bg8.jpg" style="background-image: url(&quot;//45.55.203.7/static/images/bg/bg12.jpg&quot;); background-position: 50% 0px;">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white"><?php echo $config["lang"]["RESOURCES"]["TITLE"]?></h3>
            </div>
          </div>
        </div>
      </div>      
    </section>
<!--    <br>
    <br>
    <section>
      <div class="container pt-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes">
            <div class="col-sm-12 col-md-4 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
              <div class="sm-height-auto bg-theme-colored">
                <div class="p-30 mb-sm-30">
                    
                  <h3 class="text-uppercase text-white mt-0"><?php echo $config["lang"]["RESOURCES"]["GROUP1"]["TITLE"]?></h3>
                  
                  <p class="text-white"></p>
                  
                  <a class="text-white"><?php echo $config["lang"]["RESOURCES"]["GROUP1"]["DESCRIPTION"]?></a>
                  <div class="widget">
              <ul class="list list-divider list-border">
                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-white"> <?php echo $config["lang"]["RESOURCES"]["GROUP1"]["BUTTON1"]?></a></i></li>
                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-white"> <?php echo $config["lang"]["RESOURCES"]["GROUP1"]["BUTTON2"]?></a></i></li>
              </ul>
            </div>
                </div>
                <i class="flaticon-charity-shaking-hands-inside-a-heart bg-icon"></i>
              </div>
            </div>
            
              <div class="col-sm-12 col-md-4 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
              <div class="sm-height-auto bg-theme-colored">
                <div class="p-30 mb-sm-30">
                    
                  <h3 class="text-uppercase text-white mt-0"><?php echo $config["lang"]["RESOURCES"]["GROUP2"]["TITLE"]?> </h3>
                  
                  <p class="text-white"></p>
                  
                  <a class="text-white"><?php echo $config["lang"]["RESOURCES"]["GROUP2"]["DESCRIPTION"]?></a>
                  <div class="widget">
              <ul class="list list-divider list-border">
                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-white"> <?php echo $config["lang"]["RESOURCES"]["GROUP1"]["BUTTON1"]?></a></i></li>
              </ul>
            </div>
                </div>
                <i class="flaticon-charity-shaking-hands-inside-a-heart bg-icon"></i>
              </div>
            </div>
              
              <div class="col-sm-12 col-md-4 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
              <div class="sm-height-auto bg-theme-colored">
                <div class="p-30 mb-sm-30">
                    
                  <h3 class="text-uppercase text-white mt-0"><?php echo $config["lang"]["RESOURCES"]["GROUP3"]["TITLE"]?></h3>
                  
                  <p class="text-white"></p>
                  
                  <a class="text-white"><?php echo $config["lang"]["RESOURCES"]["GROUP3"]["DESCRIPTION"]?></a>
                  <div class="widget">
              <ul class="list list-divider list-border">
                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-white"> <?php echo $config["lang"]["RESOURCES"]["GROUP3"]["BUTTON1"]?></a></i></li>
                <li><a href="#"><i class="fa fa-check-square-o mr-10 text-white"> <?php echo $config["lang"]["RESOURCES"]["GROUP3"]["BUTTON2"]?></a></i></li>
              </ul>
            </div>
                </div>
                <i class="flaticon-charity-shaking-hands-inside-a-heart bg-icon"></i>
              </div>
            </div>
              
              
              
          </div>
        </div>
      </div>
    </section>-->
<style>
div#container
{
    width:100%;
    height:1300px;
    overflow:hidden;     /* if you don't want a scrollbar, set to hidden */
    overflow-x:hidden;   /* hides horizontal scrollbar on newer browsers */

    /* resize and min-height are optional, allows user to resize viewable area */
    -webkit-resize:vertical; 
    -moz-resize:vertical;
    resize:vertical;
    min-height:317px;
}

iframe#embed
{
    width:100%;       /* set this to approximate width of entire page you're embedding */
    height:14500px;      /* determines where the bottom of the page cuts off */
    margin-left:0px; /* clipping left side of page */
    margin-top:-244px;  /* clipping top of page */
    margin-bottom:-500px;
    overflow:hidden;

    /* resize seems to inherit in at least Firefox */
    -webkit-resize:none;
    -moz-resize:none;
    resize:none;
}
</style>
<div id="container">
<?php
    if(LANGUAGE == "PT"){
        echo "<iframe id=\"embed\" scrolling=\"no\" src=\"https://downloads.adventistas.org/pt/departamento/servico-voluntario-adventista//\"></iframe>";
    }
    elseif(LANGUAGE == "ES"){
        echo "<iframe id=\"embed\" scrolling=\"no\" src=\"https://downloads.adventistas.org/es/departamento/servicio-voluntario-adventista/\"></iframe>";
    }
    elseif(LANGUAGE == "EN"){
        echo "<iframe id=\"embed\" scrolling=\"no\" src=\"https://downloads.adventistas.org/es/departamento/servicio-voluntario-adventista/\"></iframe>";
    }
    ?>
</div>
    

   


<?php include(__DIR__.'/../footer.php'); ?>