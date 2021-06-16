<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178757103-1"></script>
<script hidden>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178757103-1');
</script>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $config["lang"]["HEADER"]["description"]; ?>" />
<meta name="keywords" content="<?php echo $config["lang"]["HEADER"]["keywords"]; ?>" />
<meta name="author" content="<?php echo $config["lang"]["HEADER"]["author"]; ?>" />

<!-- Page Title -->
<title><?php echo $config["lang"]["HEADER"]["title"]; ?></title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo BASE_CDN; ?>images/svaicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo BASE_CDN; ?>images/1icon.png" rel="apple-touch-icon">
<link href="<?php echo BASE_CDN; ?>images/2icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo BASE_CDN; ?>images/3icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo BASE_CDN; ?>images/4icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo BASE_CDN; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_CDN; ?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_CDN; ?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo BASE_CDN; ?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo BASE_CDN; ?>css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo BASE_CDN; ?>css/style-main.css?aa=<?php echo rand(); ?>" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo BASE_CDN; ?>css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo BASE_CDN; ?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo BASE_CDN; ?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo BASE_CDN; ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo BASE_CDN; ?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo BASE_CDN; ?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo BASE_CDN; ?>css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo BASE_CDN; ?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo BASE_CDN; ?>js/jquery-ui.min.js"></script>
<script src="<?php echo BASE_CDN; ?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo BASE_CDN; ?>js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo BASE_CDN; ?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo BASE_CDN; ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

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
      <img class="floating" src="images<?php echo BASE_CDN; ?>/preloaders/preload.png" alt="">
       </div>
    <div id="disable-preloader" class="btn btn-default btn-sm"><?php echo $config["lang"]["PRELOADER"]["GROUP1"]["BUTTON"];?></div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent bg-transparent-1 navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container-fluid add-padding">
          
          <nav id="menuzord-right" class="menuzord default menuzord-responsive">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="widget no-border m-0">
            <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="#"><img src="<?php echo BASE_CDN."images/".$config["lang"]["FOOTER"]["GROUP4"]["IMAGE"]?>"/></i></a>
            </div>
          </div>


          
            <!-- <div class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm"> -->
            <!-- <section class="icon-theme-colored icon-dark icon-circled icon-sm"> -->
            <!--<a class="menuzord-brand" href="https://twitter.com/VoluntariosDSA" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="menuzord-brand" href="https://www.instagram.com/serviciovoluntario/" target="_blank"><i class="fa fa-instagram"></i></a>
            


////##############
//Login buttom

             --><!-- <a class="menuzord-brand"><button type="button" class="btn btn-dark btn-circled text-white" data-toggle="modal" data-target=".bs-example-modal-sm">Login</button></a>
//################           -->

            <!-- </section> -->
            <!-- </div> -->

             <!-- <div class="">
                <div class="widget dark">
                  <h5 class="widget-title mb-10">Síguenos en</h5>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                    <li><a href="https://www.facebook.com/dsasva/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/VoluntariosDSA" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/serviciovoluntario/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
            </div> -->
            <ul class="menuzord-menu">

               
              <li ><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>"><?php echo $config["lang"]["MENU"]["HOME"];?></a></li> 
              <li class="active"><a href="#home"><?php echo $config["lang"]["MENU"]["SVA"];?></a>
                <ul class="dropdown">
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>sva/about"><?php echo $config["lang"]["MENU"]["WHO_WE_ARE"];?></a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>sva/about/story"><?php echo $config["lang"]["MENU"]["OUR_STORY"];?></a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>sva/about"><?php echo $config["lang"]["MENU"]["OUR_GOALS"];?></a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>contact"><?php echo $config["lang"]["MENU"]["OUR_TEAM"];?></a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>volunteers/bevolunteer"><?php echo $config["lang"]["MENU"]["BE_A_VOLUNTEER"];?></a></li>
                  
                </ul>
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>schools"><?php echo $config["lang"]["MENU"]["MISSION_SCHOOLS"];?> </a></li>

              <!-- <li><a href="#"><?php echo $config["lang"]["MENU"]["VOLUNTEERS"];?></a>
                <ul class="dropdown"> -->

                <!--  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>volunteers/testimonies"">Testimonios de voluntarios</a></li>
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>volunteers/life">Vida voluntario</a>-->
                
                  
           <!--      </ul>
              </li> -->

              <!--<li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>missionschools">Escuelas en Misión</a>
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>missionchurchs">Iglesias en Misión</a>
                 
              </li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>events">Eventos</a>-->
                
              </li>
              
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>calls"><?php echo $config["lang"]["MENU"]["CALLS"];?></a></li>
              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>groups"><?php echo $config["lang"]["MENU"]["GROUPS"];?></a>
                <!-- <ul class="dropdown">
                  <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>groups"><?php echo $config["lang"]["MENU"]["SEND"];?></a></li>
                </ul> -->
              </li>





              <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>contact"><?php echo $config["lang"]["MENU"]["CONTACTS"];?></a></li>
              <!-- <li><a href="#"><?php echo $config["lang"]["MENU"]["LINKS"];?></a>
                  <ul class="dropdown">
                              <li><a href="https://www.adventistvolunteers.org/" target="_blank">Adventist Volunteers CG</a></li>
                                <li><a href="https://adra.org/" target="_blank">ADRA International</a></li>
                                <li><a href="https://maranathabrasil.com.br/" target="_blank">Maranatha International</a></li>
                                <li><a href="http://www.salvavidasamazonia.org/" target="_blank"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK2N"];?></a></li>
                                <li><a href="https://www.adventisthelp.org/" target="_blank"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK3N"];?></a></li>
                                <li><a href="<?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK1"];?>"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK1N"];?></a></li>
                                <li><a href="<?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK4"];?>" target="_blank"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK4N"];?></a></li>
                                <li><a href="https://adventistmission.org/" target="_blank">Adventist Mission</a></li>
                                <li><a href="https://www.nucleodemissao.org" target="_blank">Núcleo de Missão, UNASP-EC</a></li>
                                <li><a href="https://www.facebook.com/voluntariadounasp.sp/" target="_blank">Centro de Voluntariado Berndt Wolter, UNASP-SP</a></li>
                                <li><a href="https://www.institutokaleo.org" target="_blank">Instituto Kaleo</a></li>
                                <li><a href="https://afmbrasil.org" target="_blank">Adventist Frontier Mission - AFM</a></li>
                                <li><a href="http://www.adventista.edu.br/missoes/" target="_blank">Agência de Voluntariado e Missão FADBA</a></li>
                                <li><a href="http://www.institutodemissao.org.br" target="_blank">Instituto de missão da UCOB</a></li>
                        </ul>
              </li> -->


              <!-- <li><a href="#"><?php echo $config["lang"]["DOWNLOADS"]["TITLE"];?></a>
                  <ul class="dropdown">
                    <li><a href="<?php echo BASE_CDN.'files/'.strtolower(LANGUAGE).'/'.'magazine_'.strtolower(LANGUAGE).'.pdf';?>" target="_blank"><?php echo $config["lang"]["DOWNLOADS"]["MAGAZINE"];?></a></li>
                              <li><a href="<?php echo BASE_CDN.'files/'.strtolower(LANGUAGE).'/'.'sendme_'.strtolower(LANGUAGE).'.zip';?>" target="_blank"><?php echo $config["lang"]["DOWNLOADS"]["SENDME"];?></a></li>
                                <li><a href="<?php echo BASE_CDN.'files/'.strtolower(LANGUAGE).'/'.'slides_'.strtolower(LANGUAGE).'.zip';?>" target="_blank"><?php echo $config["lang"]["DOWNLOADS"]["PRESENTATIONS"];?></a></li>
                                <li><a href="<?php echo BASE_CDN.'files/'.strtolower(LANGUAGE).'/'.'certificate_'.strtolower(LANGUAGE).'.pdf';?>" target="_blank"><?php echo $config["lang"]["DOWNLOADS"]["CERTIFICATE"];?></a></li>
                                <li><a href="<?php echo BASE_URL.strtolower(LANGUAGE).'/'?>resources"><?php echo $config["lang"]["MENU"]["RESOURCES"];?></a></li>
                        </ul>
              </li> -->


              <li><a href="#"><?php echo LANGUAGE;?></a>
                  <ul class="dropdown">
                              <li><a href="<?php echo BASE_URL.'es/'.CURRENT_PAGE; ?>" >ES</a></li>
                              <li><a href="<?php echo BASE_URL.'pt/'.CURRENT_PAGE; ?>" >PT</a></li>
                              <li><a href="<?php echo BASE_URL.'en/'.CURRENT_PAGE; ?>" >EN</a></li>
                        </ul>
              </li>
              <!-- <li ><button type="button" class="btn btn-dark text-white" data-toggle="modal" data-target=".bs-example-modal-sm">Login</button></li> -->
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
