<?php 
include(__DIR__.'/header.php'); ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>
             <li onclick="window.open('<?php $lang = (strtolower(LANGUAGE) == 'en'? 'es' :  strtolower(LANGUAGE)); echo ($lang =='es') ? 'https://evento.sva.adventistas.org/por-todo-el-mundo' : 'https://evento.sva.adventistas.org/por-todo-mundo'; ?>')" data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0" data-saveperformance="off" data-title="" data-description="">
                <img  src="<?php echo BASE_CDN;?>images/evento_<?php echo (strtolower(LANGUAGE) == 'en'? 'es' :  strtolower(LANGUAGE));?>_new2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              </li>
              <!-- <a href="">
              </a> -->

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0" data-saveperformance="off" data-title="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?php echo BASE_CDN;?>images/bg/por_todo_mundo_<?php echo (strtolower(LANGUAGE) == 'en'? 'es' :  strtolower(LANGUAGE));?>.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo BASE_CDN;?>images/bg/slide3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?php echo BASE_CDN;?>images/bg/slide3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-2-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['110']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;"><?php echo $config["lang"]["HOME"]["SLIDER"][1]["LABEL1"]; ?>
                </div>

                <!-- LAYER NR. 2 -->
               <!-- <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-2-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Iglesias en misión 
                </div>-->

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-2-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','35','40']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php echo $config["lang"]["HOME"]["SLIDER"][1]["LABEL2"]; ?>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95','105','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                  <!-- <a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>contact" class="btn btn-dark btn-theme-colored btn-xl"><?php echo $config["lang"]["HOME"]["SLIDER"][1]["LABEL3"]; ?></a> -->
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });            
          });
        </script>    
        <!-- Slider Revolution Ends -->   
      </div>
    </section>

    <section style="background: #009DAC;">
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">
        
            <div class="col-md-12">
             
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 p-5">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                    <img src="<?php echo BASE_CDN;?>images/icons/luggage.png" style="padding:5px" />
                    </a>
                    <!-- <h4 class="icon-box-title m-0 mb-5"></h4> -->
                    <h4 class="icon-box-title m-0 mb-5" style="margin-left: 5px; color: #FFF;" ><?php echo $config["lang"]["HOME"]['ICONS']['ITEM1']?></h4>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 p-5">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                    <img src="<?php echo BASE_CDN;?>images/icons/bible.png"  style="padding:5px"/>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5" style="margin-left: 5px; color: #FFF;"><?php echo $config["lang"]["HOME"]['ICONS']['ITEM2']?></h4>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 p-5">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <!-- <i class="flaticon-charity-alms text-white font-36"></i> -->
                      <img src="<?php echo BASE_CDN;?>images/icons/home.png"  style="padding:5px"/>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5" style="margin-left: 5px; color: #FFF;"><?php echo $config["lang"]["HOME"]['ICONS']['ITEM3']?></h4>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 p-5">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                    <img src="<?php echo BASE_CDN;?>images/icons/competence.png"  style="padding:5px"/>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5" style="margin-left: 5px; color: #FFF;"><?php echo $config["lang"]["HOME"]['ICONS']['ITEM4']?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://files.adventistas.org/iasd_lgpd/dist/iasd_lgpd.min.js"></script>

    <!-- Section: About  -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 pb-sm-20">
              <h3 class="text-uppercase text-center title  mt-0 mb-30 mt-sm-40" style="font-size: 30px;">
                 <?php echo $config["lang"]["HOME"]['PROJECTS']['TITLE']?></h3>
              </div>
               <?php
                    $latest_calls;
                    
                    foreach($latest_calls as $key => $value){
                      if($value->available > 1){
                          switch(LANGUAGE){
                              case "PT": $vacancies = "VAGAS"; break;
                              case "ES": $vacancies = "VACANTES"; break;
                              default:   $vacancies = "VACANCIES"; break;
                          }
                      }else{
                          switch(LANGUAGE){
                              case "PT": $vacancies = "VAGA"; break;
                              case "ES": $vacancies = "VACANTE"; break;
                              default:   $vacancies = "VACANCY"; break;
                          }
                      }
                      if($value->gender == "Either"){
                          $sex = "users";
                      }else{
                          $sex = strtolower($value->gender);
                      }
                      if($value->stipend == 'Calling Organization'){
                          $stipend = '<li><i class="fa fa-money mr-5"></i>'.substr($value->stipend_terms,0,40).'...'.'</li>';
                      }else{
                          $stipend = "";
                      }
                      $linkdetails = "//".BASE_URL.strtolower(LANGUAGE)."/calls/details/".$value->sr_number;
                      $linkimage = "//".BASE_CDN."images/resources/png/".$value->sr_number.'.'.strtolower(LANGUAGE).'.jpg';
                      ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
                          <div class="call-card schedule-box maxwidth500 bg-white mb-30">
                            <a class="link" href="<?php echo $linkdetails; ?>"></a>
                            <div class="schedule-details clearfix p-15 pt-10">
                              <div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">
                                <ul>
                                  <li class="font-19 text-white font-weight-600 border-bottom "><i class="fa fa-<?php echo $sex;?> mr-5"></i></li>
                                  <li class="font-12 text-white text-uppercase"><?php echo $value->available.' '.$vacancies; ?></li>
                                </ul>
                              </div>
                              <h4 class="title mt-0"><a href="<?php echo $linkdetails; ?>"><?php echo (strlen($value->pos_title)>25 ? substr($value->pos_title,0 , 25).'...' : $value->pos_title); ?></a></h4>
                              <ul class="list-inline font-11 text-gray">
                                <li><i class="fa fa-university mr-5"></i><?php echo (strlen($value->org_name)>32 ? substr($value->org_name,0 , 32).'...' : $value->org_name); ?></li>
                                <li><i class="fa fa-map-marker mr-5"></i><?php echo (strlen($value->country)>15 ? substr($value->country,0 , 15).'...' : $value->country); ?></li>
                                <li><i class="fa fa-clock-o mr-5"></i><?php echo (strlen($value->service_len)>15 ? substr($value->service_len,0 , 15).'...' : $value->service_len); ?></li>
                                <?php echo ($value->stipend == "Calling Organization" ? '<li><i class="fa fa-money mr-5"></i>'.(strlen($value->stipend_terms)>8 ? substr($value->stipend_terms,0 , 8).'...' : $value->stipend_terms).'</li>' : '') ?>
                              </ul>
                              <div class="clearfix"></div>
                              <p class="mt-10"><?php echo (strlen($value->duties)>35 ? substr($value->duties,0 , 35).'...' : $value->duties); ?></p>
                              <div class="mt-10">
                                <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="<?php echo $linkdetails; ?>"><i class="fa fa-file-text mr-5"></i><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["CARDS"]["INFOBTN"]; ?></li></a>
                                <a href="<?php echo $linkimage; ?>" target="_blank" class="btn btn-dark btn-sm mt-10"><i class="fa fa-share-alt mr-5"></i><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["CARDS"]["SHAREBTN"]; ?></li></a>
                              </div>
                            </div>
                          </div>
                        </div>
                    <?php
                    }
                ?> 
         
    </section>
  
  <!-- end main-content -->

<?php include(__DIR__.'/footer.php'); ?>