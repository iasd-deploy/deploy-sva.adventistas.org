
  <?php include(__DIR__.'/../header.php'); ?>
  <div class="main-content">

    <!-- Meta Tags -->
      <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <meta name="description" content="ngopress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
      <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
      <meta name="author" content="ThemeMascot" /> -->

      <!-- Page Title -->
      <title><?php echo $avs_c." - ".$callpage_c; ?></title>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

      <script>
      $(function() {
        $("#text-one").change(function() {
          $("#text-two").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/groups/orgs/" + $(this).val());
          $("#text-three").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/groups/orgs/" + "--");
        });
        $("#text-two").change(function() {
          $("#text-three").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/groups/orgs/" + $(this).val());
        });
      });
      
      $(function() {
        $("#text-one2").change(function() {
          $("#text-two2").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/groups/orgs/" + $(this).val());
          $("#text-three2").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/groups/orgs/" + "--");
        });
        $("#text-two2").change(function() {
          $("#text-three2").load("<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/groups/orgs/" + $(this).val());
        });
      });
      </script>

      <!-- Section: home -->
      <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="<?php echo BASE_CDN; ?>images/bg/map.jpg" style="background-image: url(&quot;http://html.kodesolution.live/j/ngopress/v2.0/demo/images/bg/map.jpg&quot;); background-position: 50% 0px;">
        <div class="display-table">
          <div class="display-table-cell">
            <div class="container">
              <div class="row">

                <div class="col-md-8 col-md-push-2">
                  
                  <!-- <div class="text-center mb-60"><a href="http://sva.adventistas.org/" class=""><img alt="" src="<?php echo BASE_CDN."images/".$config["lang"]["FOOTER"]["GROUP4"]["IMAGE"]; ?>"></a> -->
                  <!-- </div> -->
                  <div class="bg-lightest border-1px p-30 mb-0">
                    

                    <!-- <img alt="" src="<?php echo BASE_CDN."images/".$config["lang"]["FOOTER"]["GROUP4"]["IMAGE"]; ?>"> -->
                    
                    <form id="group_project_form" name="group_project_form" action="<?php echo BASE_URL; ?>groups/send" method="post" enctype="multipart/form-data" novalidate="novalidate">
                      <h3 class="text-theme-colored mt-0 pt-5"> <?php echo $config["lang"]["GROUPS"]["FORM"]["TITLE"] ; ?></h3>
                    <hr>
                    <!-- <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["EMAIL"]["SCOPE0"] ; ?></h4> -->
                    <!-- <div class="row" aria-required="true">
                      
                    </div> -->
                    <!-- <hr> -->

                    <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["TITLE"] ; ?></h4>
                      <input type="hidden" value="<?php echo LANGUAGE; ?>" name="language" />
                      <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group" >
                          <div class="radio">
                            <label>
                              <input type="radio" name="reach" value="national" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["EMAIL"]["SCOPE1"] ; ?>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <div class="radio">
                            <label>
                              <input type="radio" name="reach" value="international" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["EMAIL"]["SCOPE2"] ; ?>
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["NAME"]; ?><small>*</small></label>
                            <input name="form_name" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["NAME_HINT"]; ?>" required="" class="form-control" aria-required="true">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DATE"]; ?><small>*</small></label>
                            <div id="example-daterange">
                              <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="start" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DATE_PATTERN"]; ?>" aria-required="true" required="" class="form-control">
                                <span class="input-group-addon"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DATE_SEPARATOR"]; ?></span>
                                <input type="text" class="input-sm form-control" name="end" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DATE_PATTERN"]; ?>" aria-required="true" required="" class="form-control">
                              </div>
                              <!-- Datepicker Daterange Script -->
                              <script type="text/javascript">
                              $('#example-daterange .input-daterange').datepicker({
                                language: 'pt-BR',
                                format: 'dd/mm/yyyy'
                              });
                              </script>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DAYS_IN_SERVICE"]; ?><small>*</small></label>
                            <input name="form_days" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DAYS_IN_SERVICE_HINT"]; ?>" required="" class="form-control" aria-required="true">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["INSTITUTION"]; ?><small>*</small></label>
                            <input name="form_inst" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["INST_HINT"] ; ?>" required="" class="form-control" aria-required="true">
                          </div>
                        </div>
                      </div>
                      <hr>
                      <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["TITLE"]; ?></h4>
                      <div class="row" aria-required="true">
                        <div class="col-sm-6">
                          <div class="form-group" >
                            <div class="checkbox" class="form-control" aria-required="true">
                              <label>
                                <input type="checkbox" name="tp1" value="true" >
                                <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["HEALTH"] ; ?> 
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <div class="checkbox">
                              <label>
                               <input type="checkbox" name="tp2" value="true" >
                               <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["SOCIAL"] ; ?>
                             </label>
                           </div>
                         </div>
                       </div>
                       <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp3" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["EDUCATION"] ; ?> 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp4" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["EVANGELISM1"] ; ?> 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp5" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["EVANGELISM2"] ; ?>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp6" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["URBAN"] ; ?> 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp7" value="true" >
                                <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["CONSTRUCTION"] ; ?> 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp8" value="true" >
                                <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["PSYCHOLOGICAL"] ; ?> 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp9" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["SCHOOL"] ; ?>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp10" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["HEALTH_FAIR"] ; ?> 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="tp11" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP2"]["OTHER"] ; ?> 
                              <input type="text" name="tp12" />​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​  
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["TITLE"] ; ?></h4>
                    <div class="row">
                      
                        <!-- <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["UNION2"]; ?><small>*</small></label>
                            <select id="text-two2" name="form_union2" class="form-control required" aria-required="true">
                              <option selected value="base"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["UNION2_HINT"]; ?></option>
                              <?php
                              if(count($unions) > 0){
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
                        </div> -->
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DIVISION2"]; ?><small>*</small></label>
                            <select id="text-one2" name="form_division2" class="form-control required" aria-required="true">
                              <option selected value="base"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DIVISION_HINT"]; ?></option>
                              <?php
                              if(count($divisions) > 0){
                                $lang = strtolower(LANGUAGE);
                                foreach ($divisions as $key => $value){
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





                              <!-- <option value="GC">Associação Geral</option>
                              <option value="ECD">Divisão da África Central/Oriental</option>
                              <option value="ESD">Divisão Euro-Asiática</option>
                              <option value="IAD">Divisão Interamericana</option>
                              <option value="EUD">Divisão Intereuropéia</option>
                              <option value="NAD">Divisão Norteamericana</option>
                              <option value="NSD">Divisão do Norte da Ásia/Pacífico</option>
                              <option value="SAD">Divisão Sulamericana</option>
                              <option value="SPD">Divisão do Sul to Pacífico</option>
                              <option value="SID">Divisão do Sul da África e do Oceano Índico</option>
                              <option value="SUD">Divisão Sulasiática</option>
                              <option value="SSD">Divisão do Sul da Ásica/Pacífico</option>
                              <option value="TED">Divisão Transeuropéia</option>
                              <option value="WAD">Divisão do Oeste/Centro da África</option>
                              <option value="GMEU">Missão da União do Norte da África e do Oriente Médio</option>
                              <option value="ISRF">Campo de Israel</option> -->
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["UNION2"]; ?><small>*</small></label>
                            <select id="text-two2" name="form_union2" class="form-control required" aria-required="true">
                              <option><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["UNION_HINT"]; ?></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["CONFERENCE2"]; ?><small>*</small></label>
                            <select id="text-three2" name="form_conference2" class="form-control required" aria-required="true">
                              <option><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["CONF_HINT"] ; ?></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DISTRICT2"]; ?><small>*</small></label>
                            <input name="form_district2" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DISTRICT_HINT"] ; ?>" required="" class="form-control" aria-required="true">
                          </div>
                        </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["NAME"] ; ?><small>*</small></label>
                          <input name="form_coord" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["NAME_HINT"]; ?>" required="" class="form-control" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["PHONE"] ; ?><small>*</small></label>
                          <input name="form_phone" type="phone" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["PHONE_HINT"] ; ?>" required="" class="form-control" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["EMAIL"] ; ?><small>*</small></label>
                          <input name="form_email" class="form-control required email" type="email" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP3"]["EMAIL_HINT"] ; ?>" aria-required="true">
                        </div>
                      </div>
                      <!-- <div class="col-sm-6">
                        <div class="form-group">
                          <label>Sexo <small>*</small></label>
                          <select name="form_sex" class="form-control required" aria-required="true">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
                        </div>
                      </div> -->
                    </div>
                    <hr>
                    <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["TITLE"] ; ?></h4>
                    <div class="row">
                      <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DIVISION"]; ?><small>*</small></label>
                            <select id="text-one" name="form_division" class="form-control required" aria-required="true">
                              <option selected value="base"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DIVISION_HINT"]; ?></option>
                              <?php
                              if(count($divisions) > 0){
                                $lang = strtolower(LANGUAGE);
                                foreach ($divisions as $key => $value){
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





                              <!-- <option value="GC">Associação Geral</option>
                              <option value="ECD">Divisão da África Central/Oriental</option>
                              <option value="ESD">Divisão Euro-Asiática</option>
                              <option value="IAD">Divisão Interamericana</option>
                              <option value="EUD">Divisão Intereuropéia</option>
                              <option value="NAD">Divisão Norteamericana</option>
                              <option value="NSD">Divisão do Norte da Ásia/Pacífico</option>
                              <option value="SAD">Divisão Sulamericana</option>
                              <option value="SPD">Divisão do Sul to Pacífico</option>
                              <option value="SID">Divisão do Sul da África e do Oceano Índico</option>
                              <option value="SUD">Divisão Sulasiática</option>
                              <option value="SSD">Divisão do Sul da Ásica/Pacífico</option>
                              <option value="TED">Divisão Transeuropéia</option>
                              <option value="WAD">Divisão do Oeste/Centro da África</option>
                              <option value="GMEU">Missão da União do Norte da África e do Oriente Médio</option>
                              <option value="ISRF">Campo de Israel</option> -->
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["UNION"]; ?><small>*</small></label>
                            <select id="text-two" name="form_union" class="form-control required" aria-required="true">
                              <option><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["UNION_HINT"]; ?></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["CONFERENCE"]; ?><small>*</small></label>
                            <select id="text-three" name="form_conference" class="form-control required" aria-required="true">
                              <option><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["CONF_HINT"] ; ?></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DISTRICT"]; ?><small>*</small></label>
                            <input name="form_district" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["DISTRICT_HINT"] ; ?>" required="" class="form-control" aria-required="true">
                          </div>
                        </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["NAME"] ; ?><small>*</small></label>
                          <input name="form_coord2" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["NAME_HINT"] ; ?>" required="" class="form-control" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["PHONE"] ; ?><small>*</small></label>
                          <input name="form_phone2" type="phone" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["PHONE_HINT"] ; ?>" required="" class="form-control" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["EMAIL"] ; ?><small>*</small></label>
                          <input name="form_email2" class="form-control required email" type="email" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP4"]["EMAIL_HINT"] ; ?>" aria-required="true">
                        </div>
                      </div>
                      <!-- <div class="col-sm-6">
                        <div class="form-group">
                          <label>Sexo <small>*</small></label>
                          <select name="form_sex2" class="form-control required" aria-required="true">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
                        </div>
                      </div> -->
                    </div>
                    <hr>
                    <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP5"]["TITLE"] ; ?></h4>
                    <div class="row" aria-required="true">
                      <div class="col-sm-12">
                        <div class="form-group" >
                          <div class="radio">
                            <label>
                              <input type="radio" name="SMOption" value="true" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP5"]["YES"] ; ?>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <div class="radio">
                            <label>
                              <input type="radio" name="SMOption" value="false" >
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP5"]["NO"] ; ?>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP5"]["UPLOAD"] ; ?></label>
                          <input name="form_attachment1" class="file" type="file" accept="image/png, image/jpeg" data-show-upload="false" data-show-caption="true">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["TITLE"]; ?></h4><h5><a style="color:blue" href="<?php echo BASE_CDN.$config["lang"]["GROUPS"]["FORM"]["GROUP6"]["LINK"]; ?>" class=""><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["DOWNLOAD"] ; ?></a></h5>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["UPLOAD"]; ?></label>
                          <input name="form_attachment2" class="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" data-show-upload="false" data-show-caption="true">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP7"]["TITLE"]; ?></h4>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <div class="checkbox" class="form-control" aria-required="true">
                            <label>
                              <input type="checkbox" name="box1" value="true">
                              <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP7"]["VOLUNTEER_TERM"]; ?>  - <a style="color:blue" href="<?php echo BASE_CDN.$config["lang"]["GROUPS"]["FORM"]["GROUP7"]["VOLUNTEER_TERM_DOC"]; ?>" class=""><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["DOWNLOAD"] ; ?></a></label>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-sm-12">
                          <div class="form-group">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="box2" value="true">
                                <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP7"]["ETHICS_TERM"]; ?> - <a style="color:blue" href="#" class=""><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["DOWNLOAD"] ; ?></a></label>
                              </div>
                            </div>
                          </div> -->
                          <div class="col-sm-12">
                            <div class="form-group">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="box3" value="true">
                                  <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP7"]["MEDICAL_TERM"]; ?> - <a style="color:blue" href="<?php echo BASE_CDN.$config["lang"]["GROUPS"]["FORM"]["GROUP7"]["MEDICAL_TERM_DOC"]; ?>" class=""><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["DOWNLOAD"] ; ?></a></label>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="box4" value="true">
                                    <?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP7"]["IMAGE_TERM"]; ?> - <a style="color:blue" href="<?php echo BASE_CDN.$config["lang"]["GROUPS"]["FORM"]["GROUP7"]["IMAGE_TERM_DOC"]; ?>" class=""><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP6"]["DOWNLOAD"] ; ?></a></label>
                                  </div>
                                </div>
                                <h5 style="color:red" class="text mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP7"]["NOTE"]; ?></h5>
                              </div>
                            </div>
                            <hr>
                            <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP8"]["TITLE"]; ?></h4>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP8"]["NON_ADVENTISTS"]; ?><small>*</small></label>
                                  <input name="form_qtd" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP8"]["NUMBER_HINT"]; ?>" required="" class="form-control" aria-required="true">
                                </div>
                              </div>
                            </div>
                            <hr>
                            <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["TITLE"]; ?></h4>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["VOTE_NUMBER"]; ?><small>*</small></label>
                                  <input name="form_vote" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["NUMBER_HINT"]; ?>" required="" class="form-control" aria-required="true">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["INSTITUTION"]; ?><small>*</small></label>
                                  <input name="form_vote_inst" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["INST_HINT"]; ?>" required="" class="form-control" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["INSTITUTION_PAYMENT"]; ?><small>*</small></label>
                                  <input name="form_payment_inst" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["INST_HINT_PAYMENT"]; ?>" required="" class="form-control" aria-required="true">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["SVA_COORD"]; ?><small>*</small></label>
                                  <input name="form_sva_coord" type="text" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP9"]["SVA_COORD_HINT"]; ?>" required="" class="form-control" aria-required="true">
                                </div>
                              </div>
                            </div>
                            <hr>
                            <h4 class="text-theme-colored mt-0 pt-5"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP10"]["TITLE"]; ?></h4>
                            <div class="row">
                            </div>
                            <div class="form-group">
                              <label><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP10"]["MESSAGE"]; ?></label>
                              <textarea name="form_message" class="form-control" rows="7" placeholder="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP10"]["MESSAGE_HINT"]; ?>" aria-required="true"></textarea>
                            </div>
                            <div class="form-group">
                              <input name="form_botcheck" class="form-control" type="hidden" value="">
                              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="<?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP10"]["BUTTON_HINT"]; ?>"><?php echo $config["lang"]["GROUPS"]["FORM"]["GROUP10"]["BUTTON"]; ?></button>
                            </div>
                          </form>
                          <!-- Job Form Validation-->
                          <script type="text/javascript">
                            $("#group_project_form").validate({
                              submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                  dataType:  'json',
                                  success: function(data) {
                                    if( data.status == 'true' ) {
                                      $(form).find('.form-control').val('');
                                      $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                    }
                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                    $(form_result_div).html(data.message).fadeIn('slow');
                                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 60000);
                                  }
                                });
                              }
                            });
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </section> 
  </div>
<!-- end main-content -->



<script src="<?php echo BASE_CDN; ?>js/custom.js?v=2"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
        The following part can be removed on Server for On Demand Loading) -->
  
  <?php if(isset($ancla)){ ?>
  <script>

  $('html, body').animate({ scrollTop: $('#<?php echo $ancla;?>').offset().top }, 'slow');

  </script>
  <?php } ?>

</body>
</html>
