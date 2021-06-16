<?php include(__DIR__.'/../header.php'); ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

      <script>
      $(function() {
        $("#text-one").change(function() {
          $("#schools_list").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/schools/dropdown/" + $(this).val());
        });
      });
      </script>

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
    <section class="inner-header divider  layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo BASE_CDN;?>images/schools/foto_escolas_missionarias.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white subtitle"><?php echo $config["lang"]["SCHOOLS"]["GROUP1"]["HEADER"];?></h2>
            </div>
          </div>
        </div>
      </div>      
    </section>

  

 <section class="divider parallax layer-overlay overlay-white-9" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg11.jpg" style="background-image: url(&quot;images/bg/bg11.jpg&quot;); background-position: 50% -1805px;">
      <div class="container">

<div class="row text-center">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="icon-box iconbox-theme-colored ">
              <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["SCHOOLS"]["GROUP1"]["QUESTION"];?></h4>
                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group">
                        <select id="text-one" name="form_division" class="form-control required" aria-required="true">
                          <option selected value="base"> <?php echo $config["lang"]["SCHOOLS"]["GROUP1"]["DROPDOWN"];?> </option>
                          <?php
                          if(count($divisions) > 0){
                            $lang = strtolower(LANGUAGE);
                            foreach ($unions as $key => $value){
                              if(LANGUAGE == "PT" && $value->code_pt !== NULL){
                                echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code_pt.")" . "</option>";
                              }elseif(LANGUAGE == "ES" && $value->code_es !== NULL){
                                echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code_es.")" . "</option>";
                              }else{
                                echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code.")" . "</option>";
                              }
                            }
                            // foreach($divisions as $key => $value){
                            //   echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code."_".$lang.") " . "</option>";
                            // }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
              <!-- <h5 class="icon-box-title">Finance Manager</h5>
              <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p> -->
              <!-- <a class="btn btn-dark btn-sm mt-15" href="#">Buscar</a> -->
            </div>
          </div>
        </div>

        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h5 class="font-weight-300 m-0"><?php echo $config["lang"]["SCHOOLS"]["GROUP1"]["TITLE1"]?></h5>
              <h2 class="mt-0 text-uppercase font-30 text-center"><?php echo $config["lang"]["SCHOOLS"]["GROUP1"]["TITLE2"]?></h2>
              <div class="icon">
                <i class="fa fa-graduation-cap"></i>
              </div>
            </div>
            <div class="col-md-12 text-center"> <p><?php echo $config["lang"]["SCHOOLS"]["GROUP1"]["DESCRIPTION"];?></p></div>
          </div>
        </div>
        <div id="schools_list" class="section-content">
          <div class="row">
            <?php if(count($schools)>0){ $i = 0; ?>
              <?php foreach ($schools as $key => $value) {
                if($i % 3 == 0 or $i == 0){echo "<div class=\"row\">";}
               ?>

             

            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30 bg-silver-light">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="<?php echo BASE_CDN."images/schools/".$value->foto ?>" alt="" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom"><?php echo $value->cod ?></li>
                        <li class="font-12 text-white text-uppercase"><?php echo $value->country ?></li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?php echo $value->name ?></a></h4>
                        <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
                      </div>
                    </div>
                  </div>

                  <style type="text/css">
                    th, td {
                      padding: 3px;
                    }
                  </style>
                  <p></p>
                  <table style="width:100%" >
                    <?php if($value->coordinator != "" and $value->coordinator != null){ ?>
                      <tr><td><i class="fa fa-user"></i></td><td class="text-left"><?php echo $value->coordinator ?></td></tr>
                    <?php } ?>
                    <?php if($value->telefone1 != "" and $value->telefone1 != null){ ?>
                      <tr>
                        <td><i class="fa fa-phone"></i></td><td class="text-left"><?php echo $value->telefone1 ?></td>
                        <?php if($value->telefone2 != "" and $value->telefone2 != null){ ?>
                          <tr><td><i class="fa fa-phone"></i></td><td class="text-left"><?php echo $value->telefone2 ?></td></tr>
                        <?php } ?>
                      </tr>
                    <?php } ?>
                    
                    <?php if($value->address != "" and $value->address != null){ ?>
                      <tr><td><i class="fa fa-map-marker"></i></td><td class="text-left"><?php echo $value->address ?></td></tr>
                    <?php } ?>   
                  </table>
                  

                  

                  <!-- Social Links -->
                  <ul class="styled-icons icon-theme-colored text-center">
                    <?php if($value->facebook != "" and $value->facebook != null){?>
                      <li><a href="<?php echo $value->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <?php }?>
                    <?php if($value->instagram != "" and $value->instagram != null){?>
                      <li><a href="<?php echo $value->instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <?php }?>
                    <?php if($value->email1 != "" and $value->email1 != null){?>
                      <li><a href="<?php echo "mailto:".$value->email1 ?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    <?php }?>
                    <?php if($value->website != "" and $value->website != null){?>
                      <li><a href="<?php echo $value->website ?>" target="_blank"><i class="fa fa-globe"></i></a></li>
                    <?php }?>    
                  </ul>




<!-- 

                  <a href="#" class="btn-read-more">Read more</a> -->
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>

            <!-- <p>AAAAAAAAAAAAAAAA</p> -->

<?php  ?>
              
        <?php $i++; if($i % 3 == 0 and $i != 0){echo "</div>";}    }?>
        <?php }?>

          






        </div>
      </div>
    </section>

    <!-- BLOG  -->







<?php include(__DIR__.'/../footer.php'); ?>