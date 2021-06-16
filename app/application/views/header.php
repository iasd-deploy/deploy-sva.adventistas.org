<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178757103-1"></script>
  <script hidden>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-178757103-1');
  </script>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
  <link href="<?php echo BASE_CDN; ?>css/css-plugin-collections.css" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="<?php echo BASE_CDN; ?>css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />
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
  <link href="<?php echo BASE_CDN; ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_CDN; ?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_CDN; ?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

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
      <div id="disable-preloader" class="btn btn-default btn-sm"><?php echo $config["lang"]["PRELOADER"]["GROUP1"]["BUTTON"]; ?></div>
    </div>
    <header id="header" class="header">
      <div class="header-top p-0 bg-theme-colored xs-text-center" data-bg-img="images/footer-bg.png" style="background-image: url(&quot;<?php echo BASE_CDN; ?>images/footer-bg.png&quot;);">
        <div class="container pt-20 pb-20">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="widget no-border m-0">
                <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>"> 
                <img style="max-height: 60px; width:80%" width="80%" src="<?php echo BASE_CDN . "images/" . $config["lang"]["HEADER"]["logo"]; ?>" />
              </a>
              </div>
            </div> 
            <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="widget no-border clearfix m-0 mt-5">
              <ul class="styled-icons icon-gray icon-theme-colored icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="https://www.facebook.com/dsasva/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/voluntariosdsa/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCcT_36c9SHZToN2GViyzyYQ/videos" target="_blank"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light" style="z-index: 1000;">
      <div class="container">
        <nav id="menuzord" class="menuzord default bg-silver-light menuzord-responsive">
          <ul class="menuzord-menu">

            <li id="logo-fixed" style="display:none;">
            <img style="max-height: 60px; width:100px" src="<?php echo BASE_CDN . "images/logo_color.svg" ?>" />
            </li>
            <!-- <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>"><?php echo $config["lang"]["MENU"]["HOME"]; ?></a></li> -->
            <li  <?php if($current == "about"){ ?> class="active" <?php } ?>><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>sva/about"  ><?php echo $config["lang"]["MENU"]["SVA"]; ?></a>
              <!-- <ul class="dropdown">
                <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>sva/about"><?php echo $config["lang"]["MENU"]["WHO_WE_ARE"]; ?></a></li>
                <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>sva/about/story"><?php echo $config["lang"]["MENU"]["OUR_STORY"]; ?></a></li>
                <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>sva/about"><?php echo $config["lang"]["MENU"]["OUR_GOALS"]; ?></a></li>
                <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>contact"><?php echo $config["lang"]["MENU"]["OUR_TEAM"]; ?></a></li>
                <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>volunteers/bevolunteer"><?php echo $config["lang"]["MENU"]["BE_A_VOLUNTEER"]; ?></a></li>

              </ul> -->
            </li>
            <li  <?php if($current == "schools"){ ?> class="active" <?php } ?>><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>schools"><?php echo $config["lang"]["MENU"]["MISSION_SCHOOLS"]; ?> </a></li>


            </li>

            <li  <?php if($current == "calls"){ ?> class="active" <?php } ?>><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>calls"><?php echo $config["lang"]["MENU"]["CALLS"]; ?></a></li>
            <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>groups"><?php echo $config["lang"]["MENU"]["GROUPS"]; ?></a>
            </li>





            <li><a href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>contact"><?php echo $config["lang"]["MENU"]["CONTACTS"]; ?></a></li>

            <li><a href="#"><?php echo LANGUAGE; ?></a>
              <ul class="dropdown">
                <li><a href="<?php echo BASE_URL . 'es/' . CURRENT_PAGE; ?>">ES</a></li>
                <li><a href="<?php echo BASE_URL . 'pt/' . CURRENT_PAGE; ?>">PT</a></li>
                <li><a href="<?php echo BASE_URL . 'en/' . CURRENT_PAGE; ?>">EN</a></li>
              </ul>
            </li>
            
            <li><a style="padding: 8px 16px; border-radius: 30px; background: #F7A502; color:#FFF;" target="_blank" href="<?php $lang = (strtolower(LANGUAGE) == 'en'? 'es' :  strtolower(LANGUAGE)); echo ($lang =='es') ? 'https://evento.sva.adventistas.org/por-todo-el-mundo' : 'https://evento.sva.adventistas.org/por-todo-mundo'; ?>"><?php echo $config["lang"]["MENU"]["EVENT_SUSCRIBE"]; ?></a></li>
          </ul>
          <!-- <ul class="list-inline pull-right flip hidden-sm hidden-xs">
            <li>
              <a class="btn btn-colored btn-flat btn-theme-colored mt-15 ajaxload-popup" href="ajax-load/donation-form.html">Donate Now</a>
            </li>
            <li>
              <a class="btn btn-colored btn-flat btn-theme-colored mt-15 ajaxload-popup" href="ajax-load/volunteer-apply-form.html">Join Us</a>
            </li>
          </ul> -->
        </nav>
       
      </div>
    </div>
    <div></div>
  </div>
  </header>