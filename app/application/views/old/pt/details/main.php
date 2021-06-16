<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include(__DIR__.'/../../header.php'); ?>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 0px solid #e8eff9;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #e8eff9;
        }
        div.scroll {
            width: 100px;
            height: 100px;
            overflow: scroll;
            overflow-x: hidden;
        }

    </style>
    <?php
//echo"<h1>Josué Corrêa</h1>";
header('Content-type: text/html; charset=utf-8');
    
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
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="ngopress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title><?php echo $avs_c." - ".$callpage_c; ?></title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo BASE_CDN;?>images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo BASE_CDN;?>images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo BASE_CDN;?>images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo BASE_CDN;?>images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo BASE_CDN;?>images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo BASE_CDN;?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_CDN;?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_CDN;?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_CDN;?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo BASE_CDN;?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo BASE_CDN;?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo BASE_CDN;?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="<?php echo BASE_CDN;?>css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo BASE_CDN;?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo BASE_CDN;?>js/jquery-ui.min.js"></script>
<script src="<?php echo BASE_CDN;?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo BASE_CDN;?>js/jquery-plugin-collection.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>





<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  
  
  <!-- Header -->
        <header id="header" class="header">
            <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent bg-transparent-1 navbar-sticky-animated animated-active">
                <div class="header-nav-wrapper">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default no-bg">
                            <div class="col-md-3">
                                <div class="widget dark">
                                    <h5 class="widget-title mb-10">Síguenos en</h5>

                                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="#home">SVA</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Quienes somos</a>
                                        <li><a href="#">Nuestra historia</a>
                                        <li><a href="#">Nuestros objetivos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Voluntarios <span class="label label-info">Vamos</span></a>
                                    <ul class="dropdown">
                                        <li><a href="">Testimonios de voluntarios</a></li>
                                        <li><a href="#">Vida voluntario</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Escuelas en Misión</a>
                                    <ul class="dropdown">
                                    </ul>
                                </li>
                                <li><a href="#">Iglesias en Misión</a>
                                    <ul class="dropdown">
                                    </ul>
                                </li>
                                <li><a href="#">Eventos</a>
                                    <ul class="dropdown">
                                    </ul>
                                </li>
                                <li><a href="">Recursos</a>
                                    <ul class="dropdown">
                                    </ul>
                                </li>
                                <li><a href="#">Links</a>

                                    <div class="megamenu">
                                        <div class="megamenu-row">
                                            <div class="col3">
                                                <ul class="list-unstyled list-dashed">
                                                    <li>
                                                        <h5 class="pl-10"><strong>Links de interés:</strong></h5>
                                                    </li>
                                                    <li><a href="https://www.adventistvolunteers.org/" target="_blank">AVS CG</a></li>
                                                    <li><a href="https://adra.org/">ADRA International</a></li>
                                                    <li><a href="https://maranathabrasil.com.br/">Maranatha International</a></li>
                                                    <li><a href="http://www.salvavidasamazonia.org/">Proyectos cortos en Amazonas</a></li>
                                                    <li><a href="https://www.adventisthelp.org/">Trabajo con refugiados</a></li>
                                                    <li><a href="http://nuevotiempo.org/mision360/">Misión 360</a></li>
                                                    <li><a href="https://afmsudamerica.org/">Misión desafiante</a></li>
                                                    <li><a href="https://adventistmission.org/">Adventist Misión</a></li>
                                                </ul>
                                            </div>
                                            <div class="col5">
                                                <h5 class=""><strong>Lo más reciente:</strong></h5>
                                                <article class="post clearfix">
                                                    <div class="entry-header">
                                                        <div class="post-thumb"> <img class="img-fullwidth" src="images/blog/mega-menu.jpg" alt=""> </div>
                                                    </div>
                                                    <div class="post-details">                        
                                                        <h4 class="entry-title mt-10"><a href="#">Noticia 1</a></h4>
                                                        <p class="">De la página de adventistas.org pero en el voluntariado<a class="text-theme-colored" href="#"> Leer más →</a> </p>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
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
                        $folder = "avs.categories/";
                        switch($img_cat_f){            
                                case "Academic":                    echo "\"".$folder."academic.jpg\"";                     break; //ok
                                case "Accounting/Business":         echo "\"".$folder."accounting.jpg\"";                   break; //ok
                                case "Administration":              echo "\"".$folder."administration.jpg\"";               break; //ok
                                case "Social Work":                 echo "\"".$folder."social_work.jpg\"";                  break; //ok
                                case "Agriculture":                 echo "\"".$folder."agriculture.jpg\"";                  break; //ok
                                case "Chaplain":                    echo "\"".$folder."chaplain.jpg\"";                     break; //ok
                                case "Church/Evangelism":           echo "\"".$folder."bible_worker.jpg\"";                 break; //ok
                                case "Cleaning":                    echo "\"".$folder."cleaning.jpg\"";                     break; //ok
                                case "Communications":              echo "\"".$folder."communications.jpg\"";               break; //ok
                                case "Computer/Website":            echo "\"".$folder."computer.jpg\"";                     break; //ok
                                case "Construction":                echo "\"".$folder."construction.jpg\"";                 break; //ok
                                case "Coordinator":                 echo "\"".$folder."coordinator.jpg\"";                  break; //ok
                                case "Counselor":                   echo "\"".$folder."counselor.jpg\"";                    break; //ok
                                case "Dean":                        echo "\"".$folder."dean.jpg\"";                         break; //ok
                                case "Dental":                      echo "\"".$folder."dental.jpg\"";                       break; //ok
                                case "Engineer":                    echo "\"".$folder."engineer.jpg\"";                     break; //ok
                                case "Event Organizer":             echo "\"".$folder."event_organizer.jpg\"";              break; //ok
                                case "Graphic Design":              echo "\"".$folder."graphic_design.jpg\"";               break;
                                case "Librarian":                   echo "\"".$folder."librarian.jpg\"";                    break;
                                case "Maintenance":                 echo "\"".$folder."maintenance.jpg\"";                  break;
                                case "Custodial":                   echo "\"".$folder."custodial.jpg\"";                    break;
                                case "Electrician":                 echo "\"".$folder."electrician.jpg\"";                  break;
                                case "Mechanic":                    echo "\"".$folder."mechanic.jpg\"";                     break;
                                case "Plumber":                     echo "\"".$folder."plumber.jpg\"";                      break;
                                case "Marketing":                   echo "\"".$folder."marketing.jpg\"";                    break;
                                case "Medical":                     echo "\"".$folder."medical.jpg\"";                      break;
                                case "Nursing":                     echo "\"".$folder."nursing.jpg\"";                      break;
                                case "Nutritionist":                echo "\"".$folder."nutritionist.jpg\"";                 break;
                                case "Office":                      echo "\"".$folder."office.jpg\"";                       break;
                                case "Orphanage":                   echo "\"".$folder."orphanage.jpg\"";                    break;
                                case "Pastor/Evangelist":           echo "\"".$folder."evangelist.jpg\"";                   break;
                                case "Physio Therapist":            echo "\"".$folder."physio therapist.jpg\"";             break;
                                case "Pilot":                       echo "\"".$folder."pilot.jpg\"";                        break;
                                case "Principal":                   echo "\"".$folder."principal.jpg\"";                    break;
                                case "Secretarial":                 echo "\"".$folder."secretarial.jpg\"";                  break;
                                case "Software Development":        echo "\"".$folder."software_development.jpg\"";         break;
                                case "Speech Therapy/Pathologist":  echo "\"".$folder."speech_therapist.jpg\"";             break;
                                case "Religion Teacher":            echo "\"".$folder."religion_teacher.jpg\"";             break;
                                case "College Teacher":             echo "\"".$folder."college_teacher.jpg\"";              break;
                                case "Computer Teacher":            echo "\"".$folder."computer_teacher.jpg\"";             break;
                                case "Elementary Teacher":          echo "\"".$folder."elementary_teacher.jpg\"";           break;
                                case "English Teacher":             echo "\"".$folder."english_teacher.jpg\"";              break;
                                case "ESL Teacher":                 echo "\"".$folder."esl_teacher.jpg\"";                  break;
                                case "History Teacher":             echo "\"".$folder."history_teacher.jpg\"";              break;
                                case "Kindergarten Teacher":        echo "\"".$folder."kindergarten_teacher.jpg\"";         break;
                                case "Math Teacher":                echo "\"".$folder."math_teacher.jpg\"";                 break;
                                case "Music Teacher":               echo "\"".$folder."music_teacher.jpg\"";                break;
                                case "Other Teacher":               echo "\"".$folder."other_teacher.jpg\"";                break;
                                case "PE Teacher":                  echo "\"".$folder."pe_teacher.jpg\"";                   break;
                                case "Science Teacher":             echo "\"".$folder."science_teacher.jpg\"";              break;
                                case "Highschool Teacher":          echo "\"".$folder."highschool_teacher.jpg\"";           break;
                                case "Training/Seminar":            echo "\"".$folder."seminar.jpg\"";                      break;
                                case "Translation":                 echo "\"".$folder."translation.jpg\"";                  break;
                                case "Influence Centers":           echo "\"".$folder."influence_centers.jpg\"";            break;
                                case "Video Production":            echo "\"".$folder."video_production.jpg\"";             break;
                                case "Youth Ministry":              echo "\"".$folder."youth_ministry.jpg\"";               break;
                                case "Other":                       echo "\"".$folder."other.jpg\"";                        break;
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
                <li class="active"><a data-toggle="tab" href="#tab4" aria-expanded="false">Resumo</a></li>
                <li class=""><a data-toggle="tab" href="#tab5" aria-expanded="true">Requiere</a></li>
                <li class=""><a data-toggle="tab" href="#tab1" aria-expanded="true">Deberes</a></li>
                <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Experiencia</a></li>
                <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Alojamiento</a></li>
                <li class=""><a data-toggle="tab" href="#tab7" aria-expanded="false">Aplicar</a></li>
                <li class=""><a href=
                      <?php
                        $html_file_url = '\'http://localhost/ProySVA/call.php?sr='.$sr.'&lang='.$lang.'\''; // html file 
                        $pdf_file_url = 'pdf/'.$sr.'.'.$lang.'.pdf'; // pdf file 

                        $cmd = "/home/josue/Apps/linux-generic-amd64/app/bin/wkhtmltopdf -O Landscape $html_file_url $pdf_file_url 2>&1";// command 
                        $output = shell_exec($cmd); // execute command from php
                        echo "\"".$pdf_file_url."\"";
                      ?> class="btn btn-gray nav nav-pills">Descargar pdf</a></li>
                
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
                          $temp_langs = preg_replace($pattern,"|",$languages_f);
                          $temp_langs = preg_replace("(\ \|.)",", ",$temp_langs);
                          $temp_langs = preg_replace("(\ \|)",".",$temp_langs);
                          $temp_langs = preg_replace("(\|\ )",", ",$temp_langs);?>
                      <table style="width:99%">
                          <tr>
                              <td style="width:40%"><li><?php echo $languages_c.": "; ?></li></td>
                      <td style="width:60%"><?php echo preg_replace("(\|)",".",$temp_langs); ?></td>
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
                      
                      <table style="width:99%">
                          <tr>
                              <th>
                                  Unión
                              </th>
                              <th>
                                  Secretário
                              </th>
                              <th>
                                  Correo
                              </th>
                          </tr>
                          <tr>
                              <td>UA</td>
                              <td>Gabriel Cevasco</td>
                              <td>rosita.ciuffardi@adventistas.org.ar</td>
                          </tr>
                          <tr>
                              <td>UB</td>
                              <td>Huascar Parada</td>
                              <td>rosa.nacif@adventistas.org.bo</td>
                          </tr>
                          <tr>
                              <td>UCh</td>
                              <td>Hernan Sanzana</td>
                              <td>lidia.hermosilla@adventistas.cl</td>
                          </tr>
                          <tr>
                              <td>UE</td>
                              <td>Darlyn Ayala</td>
                              <td>maria.mulki@adventistas.ec</td>
                          </tr>
                          <tr>
                              <td>UP</td>
                              <td>Claudio Leal</td>
                              <td>rute.vale@adventistas.org.py</td>
                          </tr>
                          <tr>
                              <td>UPN</td>
                              <td>Daniel Montalvan</td>
                              <td>raquel.palacin@adventistas.org.pe</td>
                          </tr>
                          <tr>
                              <td>UPS</td>
                              <td>Fari Choque</td>
                              <td>eli.arteaga@adventistas.org.pe</td>
                          </tr>
                          <tr>
                              <td>UU</td>
                              <td>Evaldino Ramos</td>
                              <td>secretaria.uu@adventistas.org.uy</td>
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
  
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-70 pb-40">
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<!-- Google Map Javascript Codes -->

<script>

	var mymap = L.map('mapid').setView([<?php echo ($lat+0.1).",".$lng; ?>], 10);
        mymap.scrollWheelZoom.disable();
        
        
			

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				maxZoom: 12,
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		id: 'mapbox.streets'
	}).addTo(mymap);
        

	L.marker([<?php echo $lat.",".$lng; ?>]).addTo(mymap)
		<?php echo ".bindPopup( \"<strong>".$org_name_f."</strong>"."<br>".$city_f.", ".$country_f."\"";?>).openPopup();

	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>


</body>
</html>
