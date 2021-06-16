<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    
    <?php
//echo"<h1>Josué Corrêa</h1>";
header('Content-type: text/html; charset=utf-8');
    $lang = $_GET['lang'];
    $sr = $_GET['sr'];
    $servername = 'localhost';
    $username = 'avsbox';
    $password = 'wasliebstdu7?J';
    $dbname = 'avsbox_live';
    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Variáveis do cabeçalho
    $call_id_c; $pos_title_c; $date_up_c; $desc_header; $beg_date_c; $end_date_c; $urgent_c; $service_len_c; $duties_c; $stipendb_c; $interview_c; $a_dress_c;
    $u_dress_c; $lodging_c; $gender_c; $age_c; $marital_c; $children_c; $experience_c; $languages_c; $skills_c; $currency_c; $fin_type_c;
    $stipendc_c; $raise_c; $additional_c; $city_c; $airport_c; $pickup_c; $visa_c; $visa_type_c; $org_name_c; $division_c; $country_c; $add_info_c;
    $callpage_c; $avs_c;
    // Variáveis do formulário
    $call_id_f; $pos_title_f; $date_up_f; $beg_date_f; $end_date_f; $urgent_f; $service_len_f; $duties_f; $stipendb_f; $interview_f; $a_dress_f; $u_dress_f;
    $lodging_f; $gender_f; $age_f; $marital_f; $children_f; $experience_f; $languages_f; $skills_f; $currency_f; $fin_type_f; $stipende_f; $raise_f;
    $additional_f; $city_f; $airport_f; $pickup_f; $visa_f; $visa_type_f; $lat; $lng; $org_name_f; $division_f; $country_f; $add_info_f; $img_cat_f;

    if ($conn->connect_error){
        die("Falha na conexão: ".$conn->connect_error);
    }
        $sql_c = "select `a.call_id`, `a.pos_title`, `a.date_up`, `b.desc_header`, `b.beg_date`, `b.end_date`, `b.urgent`, `b.service_len`, `b.duties`,
                    `b.stipend`, `b.interview`, `b.a_dress`, `b.u_dress`, `d.lodging`, `d.gender`, `d.age`, `d.marital`, `d.children`,
                    `e.experience`, `e.languages`, `e.skills`, `c.currency`, `c.fin_type`, `c.stipend`, `c.raise`, `c.additional`,
                    `g.city`, `g.airport`, `g.pickup`, `g.visa`, `g.visa_type`, `f.org_name`, `f.division`, `f.country`, `f.add_info`,`callpage`,`avs`
                  from tb_headers where trad_lan = \"".$lang."\" ;";
        //echo $sql_c;
        $sql_f = "select a.call_id, a.pos_title, 
                    date_format(a.date_up,(select date_for from tb_lang where cod_lang = 'pt')) as 'date_up', 
                    date_format(b.beg_date,(select date_for from tb_lang where cod_lang = 'pt')) as 'beg_date', 
                    date_format(b.end_date,(select date_for from tb_lang where cod_lang = 'pt')) as 'end_date', 
                    b.urgent, b.service_len, b.duties, b.stipend as \"b.stipend\", b.interview, b.a_dress, b.u_dress, 
                    c.lodging, c.gender, c.age, c.marital, c.children, d.experience, d.languages, d.skills, e.currency, 
                    e.fin_type, e.stipend_terms as \"e.stipend\", e.raise, e.additional, f.city, f.airport, f.pickup, f.visa, 
                    f.visa_type, f.lat, f.lng, g.org_name, g.division, g.country, g.add_info, h.category 
                    from tb_call a 
                    join tb_description b 
                    on(a.sr_number= b.sr_number and a.trad_lan = b.trad_lan) 
                    join tb_lodging c 
                    on(a.sr_number = c.sr_number and a.trad_lan = c.trad_lan) 
                    join tb_qualifications d 
                    on(a.sr_number = d.sr_number and a.trad_lan = d.trad_lan) 
                    join tb_finances e 
                    on(a.sr_number = e.sr_number and a.trad_lan = e.trad_lan) 
                    join tb_travel f 
                    on(a.sr_number = f.sr_number and a.trad_lan = f.trad_lan) 
                    join tb_req_org g 
                    on(a.sr_number = g.sr_number and a.trad_lan = g.trad_lan) 
                    join (
                    select sr_number,
                        if( pos_types like \"Academic%\",                   \"Academic\",
                        if( pos_types like \"Accounting%\",                 \"Accounting/Business\",
                        if( pos_types like \"Administration%\",             \"Administration\",
                        if( pos_types like \"ADRA%\",                       \"Social Work\",
                        if( pos_types like \"Agriculture%\",                \"Agriculture\",
                        if( pos_types like \"Chaplain%\",                   \"Chaplain\",
                        if( pos_types like \"Church%\",                     \"Church/Evangelism\",
                        if( pos_types like \"Cleaning%\",                   \"Cleaning\",
                        if( pos_types like \"Communications%\",             \"Communications\",
                        if( pos_types like \"Computer%\",                   \"Computer/Website\",
                        if( pos_types like \"Construction%\",               \"Construction\",
                        if( pos_types like \"Coordinator%\",                \"Coordinator\",
                        if( pos_types like \"Counselor%\",                  \"Counselor\",
                        if( pos_types like \"Dean%\",                       \"Dean\",
                        if( pos_types like \"Dental%\",                     \"Dental\",
                        if( pos_types like \"Engineer%\",                   \"Engineer\",
                        if( pos_types like \"Event%\",                      \"Event Organizer\",
                        if( pos_types like \"Graphic%\",                    \"Graphic Design\",
                        if( pos_types like \"Librarian%\",                  \"Librarian\",
                        if( pos_types like \"Maintenance%\",                \"Maintenance\",
                        if( pos_types like \"Maintenance - Custodial%\",    \"Custodial\",
                        if( pos_types like \"Maintenance - Electrician%\",  \"Electrician\",
                        if( pos_types like \"Maintenance - Mechanic%\",     \"Mechanic\",
                        if( pos_types like \"Maintenance - Plumber%\",      \"Plumber\",
                        if( pos_types like \"Marketing%\",                  \"Marketing\",
                        if( pos_types like \"Medical%\",                    \"Medical\",
                        if( pos_types like \"Nursing%\",                    \"Nursing\",
                        if( pos_types like \"Nutritionist%\",               \"Nutritionist\",
                        if( pos_types like \"Office%\",                     \"Office\",
                        if( pos_types like \"Orphanage%\",                  \"Orphanage\",
                        if( pos_types like \"Pastor%\",                     \"Pastor/Evangelist\",
                        if( pos_types like \"Physical%\",                   \"Physio Therapist\",
                        if( pos_types like \"Pilot%\",                      \"Pilot\",
                        if( pos_types like \"Principal%\",                  \"Principal\",
                        if( pos_types like \"Secretarial%\",                \"Secretarial\",
                        if( pos_types like \"Software%\",                   \"Software Development\",
                        if( pos_types like \"Speech%\",                     \"Speech Therapy/Pathologist\",
                        if( pos_types like \"Teaching – Bible/Religion%\",  \"Religion Teacher\",
                        if( pos_types like \"Teaching – College%\",         \"College Teacher\",
                        if( pos_types like \"Teaching – Computer%\",        \"Computer Teacher\",
                        if( pos_types like \"Teaching – Elementary%\",      \"Elementary Teacher\",
                        if( pos_types like \"Teaching – English/Religion%\",\"English Teacher\",
                        if( pos_types like \"Teaching – ESL%\",             \"ESL Teacher\",
                        if( pos_types like \"Teaching – History%\",         \"History Teacher\",
                        if( pos_types like \"Teaching – Kindergarten%\",    \"Kindergarten Teacher\",
                        if( pos_types like \"Teaching – Math%\",            \"Math Teacher\",
                        if( pos_types like \"Teaching – Music%\",           \"Music Teacher\",
                        if( pos_types like \"Teaching – Other%\",           \"Other Teacher\",
                        if( pos_types like \"Teaching – PE%\",              \"PE Teacher\",
                        if( pos_types like \"Teaching – Science%\",         \"Science Teacher\",
                        if( pos_types like \"Teaching – Secondary%\",       \"Highschool Teacher\",
                        if( pos_types like \"Training%\",                   \"Training/Seminar\",
                        if( pos_types like \"Translation%\",                \"Translation\",
                        if( pos_types like \"Urban%\",                      \"Influence Centers\",
                        if( pos_types like \"Video Production%\",           \"Video Production\",
                        if( pos_types like \"Youth Ministry%\",             \"Youth Ministry\", 
                                                                            \"Other\"
                            ))))))))))))))))))))))))))))))))))))))))))))))))))))))))
                            as category
                        
                    from tb_description where trad_lan = \"en\") as h
                    on(a.sr_number = h.sr_number)
                    where a.trad_lan = '".$lang."' and a.sr_number = '".$sr."';";
    $conn->query("SET NAMES 'utf8';");
    $result_f = ($conn->query($sql_f));
    $result_c = ($conn->query($sql_c));
    
    if($result_c->num_rows > 0){
        while($row_c = $result_c->fetch_assoc()){
            $pos_title_c    =   $row_c["a.pos_title"];  $date_up_c      =   $row_c["a.date_up"];    $beg_date_c     =   $row_c["b.beg_date"];  
            $end_date_c     =   $row_c["b.end_date"];   $urgent_c       =   $row_c["b.urgent"];     $service_len_c  =   $row_c["b.service_len"]; 
            $duties_c       =   $row_c["b.duties"];     $stipendb_c     =   $row_c["b.stipend"];    $interview_c    =   $row_c["b.interview"]; 
            $a_dress_c      =   $row_c["b.a_dress"];    $u_dress_c      =   $row_c["b.u_dress"];    $lodging_c      =   $row_c["d.lodging"];
            $gender_c       =   $row_c["d.gender"];     $age_c          =   $row_c["d.age"];        $marital_c      =   $row_c["d.marital"]; 
            $children_c     =   $row_c["d.children"];   $experience_c   =   $row_c["e.experience"]; $languages_c    =   $row_c["e.languages"]; 
            $skills_c       =   $row_c["e.skills"];     $currency_c     =   $row_c["c.currency"];   $fin_type_c     =   $row_c["c.fin_type"]; 
            $stipendc_c     =   $row_c["c.stipend"];    $raise_c        =   $row_c["c.raise"];      $additional_c   =   $row_c["c.additional"]; 
            $city_c         =   $row_c["g.city"];       $airport_c      =   $row_c["g.airport"];    $pickup_c       =   $row_c["g.pickup"]; 
            $visa_c         =   $row_c["g.visa"];       $visa_type_c    =   $row_c["g.visa_type"];  $org_name_c     =   $row_c["f.org_name"]; 
            $division_c     =   $row_c["f.division"];   $country_c      =   $row_c["f.country"];    $add_info_c     =   $row_c["f.add_info"]; 
            $callpage_c     =   $row_c["callpage"];     $avs_c          =   $row_c["avs"];          $call_id_c      =   $row_c["a.call_id"]; 
            $desc_header    =   $row_c["b.desc_header"];
        }
    }
    if($result_f->num_rows > 0){
        while($row_f = $result_f->fetch_assoc()){
            $pos_title_f    =   $row_f["pos_title"];    $date_up_f      =   $row_f["date_up"];      $beg_date_f     =   $row_f["beg_date"]; 
            $end_date_f     =   $row_f["end_date"];     $urgent_f       =   $row_f["urgent"];       $service_len_f  =   $row_f["service_len"]; 
            $duties_f       =   $row_f["duties"];       $stipendb_f     =   $row_f["b.stipend"];    $interview_f    =   $row_f["interview"]; 
            $a_dress_f      =   $row_f["a_dress"];      $u_dress_f      =   $row_f["u_dress"];      $lodging_f      =   $row_f["lodging"]; 
            $gender_f       =   $row_f["gender"];       $age_f          =   $row_f["age"];          $marital_f      =   $row_f["marital"]; 
            $children_f     =   $row_f["children"];     $experience_f   =   $row_f["experience"];   $languages_f    =   $row_f["languages"]; 
            $skills_f       =   $row_f["skills"];       $currency_f     =   $row_f["currency"];     $fin_type_f     =   $row_f["fin_type"]; 
            $stipende_f     =   $row_f["e.stipend"];    $raise_f        =   $row_f["raise"];        $additional_f   =   $row_f["additional"]; 
            $city_f         =   $row_f["city"];         $airport_f      =   $row_f["airport"];      $pickup_f       =   $row_f["pickup"]; 
            $visa_f         =   $row_f["visa"];         $visa_type_f    =   $row_f["visa_type"];    $lat            =   $row_f["lat"]; 
            $lng            =   $row_f["lng"];          $org_name_f     =   $row_f["org_name"];     $division_f     =   $row_f["division"]; 
            $country_f      =   $row_f["country"];      $add_info_f     =   $row_f["add_info"];     $call_id_f      =   $row_f["call_id"];
            $img_cat_f      =   $row_f["category"];
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
<link href="images/svaicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
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
  <div id="preloader">
    <div id="spinner">
      <img class="floating" src="images/preloaders/preload.png" alt="">
      <h5 class="line-height-50 font-18 ml-15">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <?php define("BASE_URL","http://45.55.203.7/");?>
  <?php define("LANGUAGE",$_REQUEST["lang"]);?>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent bg-transparent-1 navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
             <div class="col-md-2">
                <div class="widget dark">
                  <h5 class="widget-title mb-10">Síguenos en</h5>

                  <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                    <li><a href="https://www.facebook.com/dsasva/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/VoluntariosDSA" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/serviciovoluntario/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
            </div>
            <ul class="menuzord-menu">
              <li ><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>">Inicio</a>
              <li class="active"><a href="#home">SVA</a>
                <ul class="dropdown">
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>sva/about">Quienes somos</a>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>sva/about/story">Nuestra historia</a>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>sva/about">Nuestros objetivos</a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>contact">Nuestro Equipo</a></li>
                  
              </li>
                </ul>
              </li>
              <li><a href="#">Voluntarios <span class="label label-info">Vamos</span></a>
                <ul class="dropdown">
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>volunteers/testimonies"">Testimonios de voluntarios</a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>volunteers/life"">Vida voluntario</a>
                  </li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>volunteers/bevolunteer">Sé un voluntario</a>
                </ul>
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>missionschools">Escuelas en Misión</a>
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>missionchurchs">Iglesias en Misión</a>
                 
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>events">Eventos</a>
                
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>resources">Recursos</a></li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>contact">Contactos</a></li>
              <li><a href="#">Links</a>
          <ul class="dropdown">
                      <li><a href="https://www.adventistvolunteers.org/" target="_blank">AVS CG</a></li>
                        <li><a href="https://adra.org/" target="_blank">ADRA International</a></li>
                        <li><a href="https://maranathabrasil.com.br/" target="_blank">Maranatha International</a></li>
                        <li><a href="http://www.salvavidasamazonia.org/" target="_blank">Proyectos cortos en Amazonas</a></li>
                        <li><a href="https://www.adventisthelp.org/" target="_blank">Trabajo con refugiados</a></li>
                        <li><a href="http://nuevotiempo.org/mision360/" target="_blank">Misión 360</a></li>
                        <li><a href="https://afmsudamerica.org/" target="_blank">Misión desafiante</a></li>
                        <li><a href="https://adventistmission.org/" target="_blank">Adventist Misión</a></li>
                </ul>
                <!--<div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3 pull-right">
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
                    
                  </div>
                </div>-->
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
            <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg1.jpg">
                <div class="container pt-50 pb-30">

                    <!-- Section Content -->
                    <div class="section-content text-center">
                        <div class="row"> 
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <h3 class="title text-white"><?php echo $callpage_c ?></h3>
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
            <div class="col-md-4">
              <div class="thumb">
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
            <div class="col-md-8">
              <h2 class="name text-theme-colored mt-0 mb-0"><?php echo $pos_title_f; ?>
              <ul class="styled-icons icon-gray icon-theme-colored icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              </h2>
              
              
              <h6 class="mt-5"><?php echo $service_len_f." - ".$fin_type_f;?>
              </h6>
                <br>
                
              
              <div class="widget">
              <ul class="nav nav-pills boot-tabs">
                  <li class="active"><a data-toggle="tab" href="#tab4" aria-expanded="false">Resumo</a></li>
                  <li class=""><a data-toggle="tab" href="#tab5" aria-expanded="true">Requiere</a></li>
                <li class=""><a data-toggle="tab" href="#tab1" aria-expanded="true">Deberes</a></li>
                <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Experiencia</a></li>
                <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Alojamiento</a></li>
                <li class=""><a data-toggle="tab" href="#tab6" aria-expanded="false">Ubicación</a></li>
                <li class=""><a data-toggle="tab" href="#tab7" aria-expanded="false">Coordinador AVS</a></li>
                
              </ul>
              <div class="tab-content">
                <div id="tab4" class="tab-pane fade active in">
                      <table style="width:70%">
                        <tr>
                          <td><li><?php echo "<strong>".$call_id_c.": </strong>"; ?></li></td>
                           <td><?php echo $call_id_f; ?></td>
                        </tr>
                        <tr>
                          <td><li><?php echo "<strong>".$beg_date_c.": </strong>"; ?></li></td>
                           <td><?php echo $beg_date_f; ?></td>
                        </tr>
                        <tr>
                          <td><li><?php echo "<strong>".$end_date_c.": </strong>"; ?></li></td>
                           <td><?php echo $end_date_f; ?></td>
                        </tr>
                        <tr>
                          <td><li><?php echo "<strong>".$urgent_c.": </strong>"; ?></li></td>
                           <td><?php echo $urgent_f; ?></td>
                        </tr>
                        <tr>
                          <td><li><?php echo "<strong>".$stipendc_c.": </strong>"; ?></li></td>
                           <td><?php echo $stipende_f; ?></td>
                        </tr>
                      </table>
                </div>
                <div id="tab5" class="tab-pane fade">
                    <?php $pattern = "[\((.*?),|\((.*?)\.]"; ?>
                      <table style="width:70%">
                          <tr>
                          <td><?php echo "<strong>".$languages_c.": </strong>"; ?></td>
                           <td><?php echo "|".preg_replace($pattern,"|",$languages_f); ?></td>
                        </tr>
                        <tr>
                          <td><?php echo "<strong>".$marital_c.": </strong>"; ?></td>
                           <td><?php echo $marital_f; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo "<strong>".$gender_c.": </strong>"; ?></td>
                           <td><?php echo $gender_f; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo "<strong>".$age_c.": </strong>"; ?></td>
                           <td><?php echo $age_f; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo "<strong>".$visa_c.": </strong>"; ?></td>
                           <td><?php echo $visa_f; ?></td>
                        </tr>
                        <?php if($visa_type_f != ""){
                                echo "<tr>";
                                echo "<td>";
                                echo "<strong>".$visa_type_c.": </strong></td>";
                                echo "<td>".$visa_type_f."</td>";
                                echo "</tr>";
                            }
                                echo "<tr>";
                                echo "<td>";
                                echo "<strong>".$interview_c.": </strong></td>";
                                echo "<td>".$interview_f."</td>";
                                echo "</tr>";
                            if($raise_f != ""){
                                echo "<tr>";
                                echo "<td>";
                                echo "<strong>".$raise_c.": </strong></td>";
                                echo "<td>".$raise_f."</td>"; 
                                echo "</tr>";
                            }
                        ?>
                        </table>
                </div>  
                 
                <div id="tab1" class="tab-pane fade">
                  <p><?php echo "   ".$duties_f; ?></p>
                </div>
                <div id="tab2" class="tab-pane fade">
                  <p><?php echo "   ".$experience_f; ?></p>
                </div>
                <div id="tab3" class="tab-pane fade">
                  <p><?php echo "   ".$lodging_f; ?></p>
                </div>
                  <div id="tab6" class="tab-pane fade">
                      <table style="width:70%">
                          <tr>
                          <td><?php echo "<strong>".$city_c.": </strong>"; ?></td>
                           <td><?php echo $city_f; ?></td>
                           <tr>
                          <td><?php echo "<strong>".$airport_c.": </strong>"; ?></td>
                           <td><?php echo $airport_f; ?></td>
                           <tr>
                          <td><?php echo "<strong>".$org_name_c.": </strong>"; ?></td>
                           <td><?php echo $org_name_f; ?></td>
                           <tr>
                          <td><?php echo "<strong>".$division_c.": </strong>"; ?></td>
                           <td><?php echo $division_f; ?></td>
                           <tr>
                          <td><?php echo "<strong>".$country_c.": </strong>"; ?></td>
                           <td><?php echo $country_f; ?></td>
                      </table>
                </div>
                  <div id="tab7" class="tab-pane fade">
                  <p><span>Nombre:</span> UPN<br><span>Correo:</span> nombrecoordinador@upn.adventistas.org</p>
                </div>
              </div>
                  <a href=
                      <?php
                        $html_file_url = '\'http://localhost/josue/ProySVA/call.php?sr='.$sr.'&lang='.$lang.'\''; // html file 
                        $pdf_file_url = 'pdf/'.$sr.'.'.$lang.'.pdf'; // pdf file 

                        $cmd = "/var/www/html/ProySVA/app/bin/wkhtmltopdf -O Landscape $html_file_url $pdf_file_url 2>&1";// command 
                        $output = shell_exec($cmd); // execute command from php
                        echo "\"".$pdf_file_url."\"";
                      ?> class="btn btn-gray nav nav-pills">Descargar pdf</a>
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

	var mymap = L.map('mapid').setView([<?php echo ($lat+0.025).",".$lng; ?>], 10);
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
