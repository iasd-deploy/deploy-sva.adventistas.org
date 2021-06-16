<?php include(__DIR__.'/../header.php'); ?>
<div class="main-content">

    <?php
    
    // Variáveis do cabeçalho
    $call_id_c; $pos_title_c; $date_up_c; $desc_header; $beg_date_c; $end_date_c; $urgent_c; $service_len_c; $duties_c; $stipendb_c; $interview_c; $a_dress_c;
    $u_dress_c; $lodging_c; $gender_c; $age_c; $marital_c; $children_c; $experience_c; $languages_c; $skills_c; $currency_c; $fin_type_c;
    $stipendc_c; $raise_c; $additional_c; $city_c; $airport_c; $pickup_c; $visa_c; $visa_type_c; $org_name_c; $division_c; $country_c; $add_info_c;
    $callpage_c; $avs_c;
    // Variáveis do formulário
    $call_id_f; $pos_title_f; $date_up_f; $beg_date_f; $end_date_f; $urgent_f; $service_len_f; $duties_f; $stipendb_f; $interview_f; $a_dress_f; $u_dress_f;
    $lodging_f; $gender_f; $age_f; $marital_f; $children_f; $experience_f; $languages_f; $skills_f; $currency_f; $fin_type_f; $stipende_f; $raise_f;
    $additional_f; $city_f; $airport_f; $pickup_f; $visa_f; $visa_type_f; $lat; $lng; $org_name_f; $division_f; $country_f; $add_info_f; $img_cat_f;

    
    
    
    if(count($result_c) > 0){
        foreach($result_c as $key => $value){
            $pos_title_c    =   $value->pos_title;  $date_up_c      =   $value->date_up;    $beg_date_c     =   $value->beg_date;  
            $end_date_c     =   $value->end_date;   $urgent_c       =   $value->urgent;     $service_len_c  =   $value->service_len; 
            $duties_c       =   $value->duties;     $stipendb_c     =   $value->stipend;    $interview_c    =   $value->interview; 
            $a_dress_c      =   $value->a_dress;    $u_dress_c      =   $value->u_dress;    $lodging_c      =   $value->lodging;
            $gender_c       =   $value->gender;     $age_c          =   $value->age;        $marital_c      =   $value->marital; 
            $children_c     =   $value->children;   $experience_c   =   $value->experience; $languages_c    =   $value->languages; 
            $skills_c       =   $value->skills;     $currency_c     =   $value->currency;   $fin_type_c     =   $value->fin_type; 
            $stipendc_c     =   $value->stipend;    $raise_c        =   $value->raise;      $additional_c   =   $value->additional; 
            $city_c         =   $value->city;       $airport_c      =   $value->airport;    $pickup_c       =   $value->pickup; 
            $visa_c         =   $value->visa;       $visa_type_c    =   $value->visa_type;  $org_name_c     =   $value->org_name; 
            $division_c     =   $value->division;   $country_c      =   $value->country;    $add_info_c     =   $value->add_info; 
            $callpage_c     =   $value->callpage;   $avs_c          =   $value->avs;        $call_id_c      =   $value->call_id; 
            $desc_header    =   $value->desc_header;
        }
    }
    if(count($result_f) > 0){
        foreach($result_f as $key => $value){
            $pos_title_f    =   $value->pos_title;    $date_up_f      =   $value->date_up;      $beg_date_f     =   $value->beg_date; 
            $end_date_f     =   $value->end_date;     $urgent_f       =   $value->urgent;       $service_len_f  =   $value->service_len; 
            $duties_f       =   $value->duties;       $stipendb_f     =   $value->b_stipend;    $interview_f    =   $value->interview; 
            $a_dress_f      =   $value->a_dress;      $u_dress_f      =   $value->u_dress;      $lodging_f      =   $value->lodging; 
            $gender_f       =   $value->gender;       $age_f          =   $value->age;          $marital_f      =   $value->marital; 
            $children_f     =   $value->children;     $experience_f   =   $value->experience;   $languages_f    =   $value->languages; 
            $skills_f       =   $value->skills;       $currency_f     =   $value->currency;     $fin_type_f     =   $value->fin_type; 
            $stipende_f     =   $value->e_stipend;    $raise_f        =   $value->raise;        $additional_f   =   $value->additional; 
            $city_f         =   $value->city;         $airport_f      =   $value->airport;      $pickup_f       =   $value->pickup; 
            $visa_f         =   $value->visa;         $visa_type_f    =   $value->visa_type;    $lat            =   $value->lat; 
            $lng            =   $value->lng;          $org_name_f     =   $value->org_name;     $division_f     =   $value->division; 
            $country_f      =   $value->country;      $add_info_f     =   $value->add_info;     $call_id_f      =   $value->call_id;
            $img_cat_f      =   $value->category;
        }
    }
    //echo $pos_title_f;
    ?>

    <!-- Meta Tags -->
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="ngopress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
    <meta name="author" content="ThemeMascot" /> -->

    <!-- Page Title -->
    <title><?php echo $avs_c." - ".$callpage_c; ?></title>

    

    

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
    <script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>




  <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 0px solid #e3f0f2;
        text-align: left;
        padding: 6px;
    }

    tr:nth-child(odd) {
        background-color: #e3f0f2;
    }
    div.scroll {
        width: 100px;
        height: 100px;
        overflow: scroll;
        overflow-x: hidden;
    }

    </style>

<!-- preloader -->


<!-- Header -->

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg4.jpg">
        <div class="container pt-50 pb-30">

            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row"> 
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h3 class="title text-white"><?php echo $pos_title_f;//$callpage_c; ?></h3>
                    </div>
                </div>

            </div>
        </div>   

    </section>

    <!-- Section: Volunteer Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <div class="thumb" align="middle">
                <img src=
                <?php
                $folder = BASE_CDN."images/call_category/";
                $marker_category;
                switch($img_cat_f){            
                                case "Academic":                    echo "\"".$folder."academic.jpg\"";             $marker_category = "education";   break; //ok
                                case "Accounting/Business":         echo "\"".$folder."accounting.jpg\"";           $marker_category = "office";      break; //ok
                                case "Administration":              echo "\"".$folder."administration.jpg\"";       $marker_category = "office";      break; //ok
                                case "Social Work":                 echo "\"".$folder."influence_centers.jpg\"";    $marker_category = "social";      break; //ok
                                case "Agriculture":                 echo "\"".$folder."agriculture.jpg\"";          $marker_category = "heavy";       break; //ok
                                case "Chaplain":                    echo "\"".$folder."chaplain.jpg\"";             $marker_category = "church";      break; //ok
                                case "Church/Evangelism":           echo "\"".$folder."bible_worker.jpg\"";         $marker_category = "church";      break; //ok
                                case "Cleaning":                    echo "\"".$folder."cleaning.jpg\"";             $marker_category = "heavy";       break; //ok
                                case "Communications":              echo "\"".$folder."communications.jpg\"";       $marker_category = "tech";        break; //ok
                                case "Computer/Website":            echo "\"".$folder."computer.jpg\"";             $marker_category = "tech";        break; //ok
                                case "Construction":                echo "\"".$folder."construction.jpg\"";         $marker_category = "heavy";       break; //ok
                                case "Coordinator":                 echo "\"".$folder."coordinator.jpg\"";          $marker_category = "office";      break; //ok
                                case "Counselor":                   echo "\"".$folder."counselor.jpg\"";            $marker_category = "church";      break; //ok
                                case "Dean":                        echo "\"".$folder."dean.jpg\"";                 $marker_category = "church";      break; //ok
                                case "Dental":                      echo "\"".$folder."dental.jpg\"";               $marker_category = "health";      break; //ok
                                case "Engineer":                    echo "\"".$folder."engineer.jpg\"";             $marker_category = "heavy";       break; //ok
                                case "Event Organizer":             echo "\"".$folder."event_organizer.jpg\"";      $marker_category = "office";      break; //ok
                                case "Graphic Design":              echo "\"".$folder."graphic_design.jpg\"";       $marker_category = "tech";        break;
                                case "Librarian":                   echo "\"".$folder."librarian.jpg\"";            $marker_category = "education";   break;
                                case "Maintenance":                 echo "\"".$folder."maintenance.jpg\"";          $marker_category = "heavy";       break;
                                case "Custodial":                   echo "\"".$folder."custodial.jpg\"";            $marker_category = "heavy";       break;
                                case "Electrician":                 echo "\"".$folder."electrician.jpg\"";          $marker_category = "heavy";       break;
                                case "Mechanic":                    echo "\"".$folder."mechanic.jpg\"";             $marker_category = "heavy";       break;
                                case "Plumber":                     echo "\"".$folder."plumber.jpg\"";              $marker_category = "heavy";       break;
                                case "Marketing":                   echo "\"".$folder."marketing.jpg\"";            $marker_category = "office";      break;
                                case "Medical":                     echo "\"".$folder."medical.jpg\"";              $marker_category = "health";      break;
                                case "Nursing":                     echo "\"".$folder."nursing.jpg\"";              $marker_category = "health";      break;
                                case "Nutritionist":                echo "\"".$folder."nutritionist.jpg\"";         $marker_category = "health";      break;
                                case "Office":                      echo "\"".$folder."office.jpg\"";               $marker_category = "office";      break;
                                case "Orphanage":                   echo "\"".$folder."orphanage.jpg\"";            $marker_category = "social";      break;
                                case "Pastor/Evangelist":           echo "\"".$folder."evangelist.jpg\"";           $marker_category = "church";      break;
                                case "Physio Therapist":            echo "\"".$folder."physio_therapist.jpg\"";     $marker_category = "health";      break;
                                case "Pilot":                       echo "\"".$folder."pilot.jpg\"";                $marker_category = "heavy";       break;
                                case "Principal":                   echo "\"".$folder."principal.jpg\"";            $marker_category = "education";   break;
                                case "Secretarial":                 echo "\"".$folder."secretarial.jpg\"";          $marker_category = "office";      break;
                                case "Software Development":        echo "\"".$folder."software_development.jpg\""; $marker_category = "tech";        break;
                                case "Speech Therapy/Pathologist":  echo "\"".$folder."speech_therapist.jpg\"";     $marker_category = "health";      break;
                                case "Religion Teacher":            echo "\"".$folder."religion_teacher.jpg\"";     $marker_category = "education";   break;
                                case "College Teacher":             echo "\"".$folder."college_teacher.jpg\"";      $marker_category = "education";   break;
                                case "Computer Teacher":            echo "\"".$folder."computer_teacher.jpg\"";     $marker_category = "education";   break;
                                case "Elementary Teacher":          echo "\"".$folder."elementary_teacher.jpg\"";   $marker_category = "education";   break;
                                case "English Teacher":             echo "\"".$folder."esl_teacher.jpg\"";          $marker_category = "education";   break;
                                case "ESL Teacher":                 echo "\"".$folder."esl_teacher.jpg\"";          $marker_category = "education";   break;
                                case "History Teacher":             echo "\"".$folder."history_teacher.jpg\"";      $marker_category = "education";   break;
                                case "Kindergarten Teacher":        echo "\"".$folder."kindergarten_teacher.jpg\""; $marker_category = "education";   break;
                                case "Math Teacher":                echo "\"".$folder."math_teacher.jpg\"";         $marker_category = "education";   break;
                                case "Music Teacher":               echo "\"".$folder."music_teacher.jpg\"";        $marker_category = "education";   break;
                                case "Other Teacher":               echo "\"".$folder."other_teacher.jpg\"";        $marker_category = "education";   break;
                                case "PE Teacher":                  echo "\"".$folder."pe_teacher.jpg\"";           $marker_category = "education";   break;
                                case "Science Teacher":             echo "\"".$folder."science_teacher.jpg\"";      $marker_category = "education";   break;
                                case "Highschool Teacher":          echo "\"".$folder."highschool_teacher.jpg\"";   $marker_category = "education";   break;
                                case "Training/Seminar":            echo "\"".$folder."seminar.jpg\"";              $marker_category = "education";   break;
                                case "Translation":                 echo "\"".$folder."translation.jpg\"";          $marker_category = "office";      break;
                                case "Influence Centers":           echo "\"".$folder."influence_centers.jpg\"";    $marker_category = "social";      break;
                                case "Video Production":            echo "\"".$folder."video_production.jpg\"";     $marker_category = "tech";        break;
                                case "Youth Ministry":              echo "\"".$folder."youth_ministry.jpg\"";       $marker_category = "church";      break;
                                case "Other":                       echo "\"".$folder."other.jpg\"";                $marker_category = "heavy";       break;
                                default: echo "\"".$folder."other.jpg\""; break;
                            }
                            ?> alt="">
                        </div>
                        <br>
                        <div id="mapid" style="width: 100%; height: 250px;"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 pb-sm-20">
          <!--    <h2 class="name text-theme-colored mt-0 mb-0"><?php echo $pos_title_f; ?> 
              <ul class="styled-icons icon-gray icon-theme-colored icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
          </h2> -->


           <!--   <h6 class="mt-5"><?php echo $service_len_f." - ".$fin_type_f;?>
              </h6>
              <br> > -->

              
              <div class="widget">
                  <ul class="nav nav-pills boot-tabs">

                    <li class="active"><a data-toggle="tab" href="#tab4" aria-expanded="false"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["RESUME"];?></a></li>
                    <li class=""><a data-toggle="tab" href="#tab5" aria-expanded="true"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["REQUIREMENTS"];?></a></li>
                    <li class=""><a data-toggle="tab" href="#tab1" aria-expanded="true"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["DUTIES"];?></a></li>
                    <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["EXPERIENCE"];?></a></li>
                    <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["LODGING"];?></a></li>
                    <li class=""><a data-toggle="tab" href="#tab7" aria-expanded="false"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["APPLY"];?></a></li>
                    <li class=""><div id="btnprint" class="btn btn-gray nav nav-pills" onclick="printcall()"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["PRINT"];?></div></li>
                    <li class=""><div id="btnimage" class="btn btn-gray nav nav-pills" onclick="openpng()"><?php echo $config["lang"]["DETAILS"]["WIDGET"]["JPG"];?></div></li>
                </ul>
                <div class="tab-content">
                    <div id="tab4" class="tab-pane fade active in scroll" style="left: 100%; top: 100%; width: 100%; height: 425px">
                      <table style="width:99%">
                        <tr>
                            <td style="width:40%"><li><?php echo $call_id_c.": "; ?></li></td>
                            <td style="width:60%"><?php echo $call_id_f; ?></td>
                        </tr>
                        <tr>
                            <td><li><?php echo $service_len_c; ?></li></td>
                            <td><?php echo $service_len_f; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <li><?php echo $fin_type_c; ?></li>
                            </td>
                            <td><?php echo $fin_type_f; ?></td>
                        </tr>
                        <tr>
                            <td><li><?php echo $beg_date_c.": "; ?></li></td>
                            <td><?php echo $beg_date_f; ?></td>
                        </tr>
                        <tr>
                            <td><li><?php echo $end_date_c.": "; ?></li></td>
                            <td><?php echo $end_date_f; ?></td>
                        </tr>
                        <tr>
                            <td><li><?php echo $urgent_c.": "; ?></li></td>
                            <td><?php echo $urgent_f; ?></td>
                        </tr>
                        <tr>
                            <td><li><?php echo $stipendc_c.": "; ?></li></td>
                            <td><?php echo $stipende_f; ?></td>
                        </tr>
                        <tr>
                          <td style="width:40%"><li><?php echo $city_c.": "; ?></li></td>
                          <td style="ẅidth:60%"><?php echo $city_f; ?></td>
                      </tr>
                      <tr>
                       <td><li><?php echo $airport_c.": "; ?></li></td>
                       <td><?php echo $airport_f; ?></td>
                   </tr>
                   <tr>
                       <td><li><?php echo $org_name_c.": "; ?></li></td>
                       <td><?php echo $org_name_f; ?></td>
                   </tr>
                   <tr>
                       <td><li><?php echo $division_c.": "; ?></li></td>
                       <td><?php echo $division_f; ?></td>
                   </tr>
                   <tr>
                       <td><li><?php echo $country_c.": "; ?></li></td>
                       <td><?php echo $country_f; ?></td>
                   </tr>
               </table>
           </div>
           <div id="tab5" class="tab-pane fade scroll" style="left: 100%; top: 100%; width: 100%; height: 425px">
            <?php $pattern = "[\((.*?),|\((.*?)\.]";
                $pattern2 = "[\ \,\.]";
                $temp_langs = str_replace("..",".",str_replace("...",".",str_replace(",.",".",str_replace(" ,",",",preg_replace($pattern2,",",preg_replace($pattern,",",$languages_f))))));
                          //echo $temp_langs;
                          //die();
                ?>
                <table style="width:99%">
                  <tr>
                      <td style="width:40%"><li><?php echo $languages_c.": "; ?></li></td>
                      <td style="width:60%"><?php echo $temp_langs; ?></td>
                  </tr>
                  <tr>
                    <td><li><?php echo $marital_c.": "; ?></li></td>
                    <td><?php echo $marital_f; ?></td>
                </tr>
                <tr>
                    <td><li><?php echo $gender_c.": "; ?></li></td>
                    <td><?php echo $gender_f; ?></td>
                </tr>
                <tr>
                    <td><li><?php echo $age_c.": "; ?></li></td>
                    <td><?php echo $age_f; ?></td>
                </tr>
                <tr>
                    <td><li><?php echo $visa_c.": "; ?></li></td>
                    <td><?php echo $visa_f; ?></td>
                </tr>
                <?php if($visa_type_f != ""){
                    echo "<tr>";
                    echo "<td>";
                    echo "<li>".$visa_type_c.": </li></td>";
                    echo "<td>".$visa_type_f."</td>";
                    echo "</tr>";
                }
                echo "<tr>";
                echo "<td>";
                echo "<li>".$interview_c.": </li></td>";
                echo "<td>".$interview_f."</td>";
                echo "</tr>";
                if($raise_f != ""){
                    echo "<tr>";
                    echo "<td>";
                    echo "<li>".$raise_c.": </li></td>";
                    echo "<td>".$raise_f."</td>"; 
                    echo "</tr>";
                }
                ?>
            </table>
        </div>  
        <?php $pattern = "(?<=^|(\.|\?)\"?)[^\.\?]*($|(\.|\?)\"?)"; ?>
        <div id="tab1" class="tab-pane fade scroll" style="left: 100%; top: 100%; width: 100%; height: 425px">
            <?php $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $duties_f);
            echo "<table style=\"width:99%\">";
            foreach($sentences as $item) {
                if(strlen($item)>10){
                    echo "<tr>";
                    echo "<td><li>";
                    echo $item;
                    echo "</li></td>"; 
                    echo "</tr>";
                }
            }
            echo "</table>";
            ?>
        </div>
        <div id="tab2" class="tab-pane fade scroll" style="left: 100%; top: 100%; width: 100%; height: 425px">
            <?php $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $experience_f);
            echo "<table style=\"width:99%\">";
            foreach($sentences as $item) {
                if(strlen($item)>10){
                    echo "<tr>";
                    echo "<td><li>";
                    echo $item;
                    echo "</li></td>"; 
                    echo "</tr>";
                }
            }
            echo "</table>";
            ?>
        </div>
        <div id="tab3" class="tab-pane fade scroll" style="left: 100%; top: 100%; width: 100%; height: 425px">
            <?php $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $lodging_f);
            echo "<table style=\"width:99%\">";
            foreach($sentences as $item) {
                if(strlen($item)>10){
                    echo "<tr>";
                    echo "<td><li>";
                    echo $item;
                    echo "</li></td>"; 
                    echo "</tr>";
                }
            }
            echo "</table>";
            ?>
        </div>

        <div id="tab7" class="tab-pane fade scroll" style="left: 100%; top: 100%; width: 100%; height:425px">

<!--                      <table style="width:99%">
                          <tr>
                              <th>
                                  <?php echo $config["lang"]["CONTACT"]["NEWGROUP"]["ITEMS"]["A"];?>
                              </th>
                              <th>
                                  <?php echo $config["lang"]["CONTACT"]["NEWGROUP"]["ITEMS"]["B"];?>
                              </th>
                              <th>
                                  <?php echo $config["lang"]["CONTACT"]["NEWGROUP"]["ITEMS"]["C"];?>
                              </th>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][0]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][0]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][0]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][1]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][1]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][1]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][2]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][2]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][2]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][3]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][3]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][3]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][4]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][4]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][4]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][5]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][5]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][5]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][6]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][6]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][6]["EMAIL"];?></td>
                          </tr>
                          <tr>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][7]["UNION"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][7]["TITLE"];?></td>
                              <td><?php echo $config["lang"]["CONTACT"]["GROUP3"]["ITEMS"][7]["EMAIL"];?></td>
                          </tr>
                      </table>-->
                      <table style="width:99%">
                          <tr>
                              <td>
                                  <p class="font-opensans"><?php echo $config["lang"]["BE_VOLUNTEER"]["STEP2"]["SUBTITLE"];?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <center>
                                      <a href="https://www.adventistvolunteers.org/VM/default.aspx?p=CreateNewAccount&amp;ReturnUrl=%2fVM%2fVolunteer%2f" class="btn btn-colored btn-theme-colored mt-15"><?php echo $config["lang"]["BE_VOLUNTEER"]["STEP2"]["BUTTON"];?></a>
                                  </center>
                              </td>
                          </tr>
                      </table>
                  </div>
              </div>

          </div>

      </div>
  </div>

</div>
</div>
</section>
</div>
<!-- end main-content -->



<script>

var mymap = L.map('mapid').setView([<?php echo ($lat+0.05).",".($lng-0.03); ?>], 10);
mymap.scrollWheelZoom.disable();
//Map definition
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 12,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    id: 'mapbox.streets'
}).addTo(mymap);
<?php
//Marker definition
switch($marker_category){
    case "heavy": ?>
    var heavyIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/heavy1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: heavyIcon}).addTo(mymap)"; break;
    case "office": ?>
    var officeIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/office1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: officeIcon}).addTo(mymap)"; break;
    case "education": ?>
    var educationIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/education1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: educationIcon}).addTo(mymap)"; break;
    case "health": ?>
    var healthIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/health1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: healthIcon}).addTo(mymap)"; break;
    case "church": ?>
    var churchIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/church1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: churchIcon}).addTo(mymap)"; break;
    case "tech": ?>
    var techIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/tech1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: techIcon}).addTo(mymap)"; break;
    case "social": ?>
    var socialIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/social_work1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    }); <?php
    echo "L.marker([".$lat.",".$lng."], {icon: socialIcon}).addTo(mymap)"; break;
}
 echo ".bindPopup( \"<strong>".$org_name_f."</strong>"."<br>".$city_f.", ".$country_f."\"";?>).openPopup();


var popup = L.popup();

function onMapClick(e) {
  popup
  .setLatLng(e.latlng)
  .setContent("You clicked the map at " + e.latlng.toString())
  .openOn(mymap);
}

mymap.on('click', onMapClick);

</script>
<script>
function printcall(){
    <?php echo "window.open(\"http://".BASE_URL.strtolower(LANGUAGE)."/calls/reports/".$sr."\",'_blank');";?>
}
</script>
<script>
function openpng(){
    <?php echo "window.open(\"http://".BASE_CDN."images/resources/png/".$sr.".".strtolower(LANGUAGE)."."."jpg"."\",'_blank');";?>
}
</script>
<?php include(__DIR__.'/../footer.php'); ?>
