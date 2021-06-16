<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="ngopress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Servicio Voluntario Adventista - Proyectos disponibles</title>

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
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="//45.55.203.7/static/images/bg/bg1.jpg" style="background-image: url(&quot;//45.55.203.7/static/images/bg/bg1.jpg&quot;); background-position: 50% -75px;">
      <div class="container pt-90 pb-20">
        <!-- Section Content -->
        <div class="section-content pt-50">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Búsqueda de Proyectos</h3>
              <ul class="list-inline text-white">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          
	

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" integrity="sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==" crossorigin=""></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../dist/MarkerCluster.css" />
	<link rel="stylesheet" href="../dist/MarkerCluster.Default.css" />
	<script src="../dist/leaflet.markercluster-src.js"></script>
	<script src="realworld.388.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
        
        <div id="map" style="width: 100%; height: 500px;"></div>
	<script type="text/javascript">

		
    
    
                var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				maxZoom: 12,
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}),
			latlng = L.latLng(12, 22.5);

		var map = L.map('map', {center: latlng, zoom: 3, layers: [tiles]});
                map.scrollWheelZoom.disable();
                L.easyButton( 'fa-star', function(){
                    var m = markerList[Math.floor(Math.random() * markerList.length)];
                                markers.zoomToShowLayer(m, function () {
                                        m.openPopup();
                                });
                                map.setView(m,18);
                  }).addTo(map);
                
                L.easyButton( 'fa-refresh', function(){
                  map.setView([12.0,22.5],3);
                }).addTo(map);
   
   
                L.easyButton( 'fa-print', function(){
                  downloadList();
                }).addTo(map);
                
                

		var markers = L.markerClusterGroup();
		var markerList = [];
                
                

		function populate() {
//			for (var i = 0; i < addressPoints.length; i++) {

//			}



                <?php
                $lang = $_GET['lang'];
                $servername = 'localhost';
                $username = 'avsbox';
                $password = 'wasliebstdu7?J';
                $dbname = 'avsbox_live';
                // create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // check connection
                if ($conn->connect_error){
                    die("Falha na conexão: ".$conn->connect_error);
                }
                $sql = "select
                        a.url,
                        a.call_type,
                        a.sr_number, 
                        a.pos_title, 
                        d.org_name, 
                        d.division, 
                        d.country, 
                        b.lat, 
                        b.lng,
                        c.details,
                        c.LT,
                        c.ST,
                        e.id_emoji
                        from tb_call a left join tb_travel b on(a.sr_number = b.sr_number and a.trad_lan = b.trad_lan) 
                        left join tb_req_org d on (a.sr_number = d.sr_number and a.trad_lan = d.trad_lan) 
                        left join tb_headers c on (a.trad_lan = c.trad_lan)
                        left join tb_country e on ((select country from tb_req_org where sr_number = a.sr_number and trad_lan = \"en\") = e.name_en)
                        where (a.call_id like \"%SAD-IN%\" or a.call_id not like \"%IN%\") and lat != \"\" and lng != \"\"
                        and a.trad_lan like \"%".$lang."\" and a.active = \"yes\";";
                //echo $sql;
                //echo $sql;
                $conn->query("SET NAMES 'utf8';");
                $result = ($conn->query($sql));
                if($result->num_rows > 0){
                    $count = 0;
                    $link;
                    switch($lang){
                        case "pt": $link = "http://localhost.org/avs_site/pt/voluntarios/chamados-disponiveis/chamados/call.php";break;
                        case "es": $link = "http://localhost.org/avs_site/es/voluntarios/llamados-disponibles/llamados/call.php";break;
                        case "de": $link = "http://localhost.org/avs_site/pt/voluntarios/chamados-disponiveis/chamados/call.php";break;
                        case "en": $link = "http://localhost.org/avs_site/es/voluntarios/llamados-disponibles/llamados/call.php";break;
                        default: $link = ""; break;
                    }
                    $link = "http://45.55.203.7/josue/ProySVA/detalhes.php";
                    while ($row = $result->fetch_assoc()) {
//                        echo "m = L.marker([".$row["lat"].",".$row["lng"]."]);";//.addTo(map)".
//                                //".bindPopup(<br>".$row["pos_title"]."</br><br />".$row["org_name"].").openPopup();";
//                        echo "markers.addLayer(m);";
                        echo "var a = addressPoints[".$count."];";
                        echo "var title = \"".$row["pos_title"]."\";";
                        echo "var marker = L.marker(L.latLng(".$row["lat"].",".$row["lng"]."), { title: title });";
                        echo "marker.bindPopup(\"<strong>".$row["pos_title"]."</strong>"
                                . "<br>".$row["org_name"]
                                . "<br>".$row["country"]
                                . "<br><a id='call_info' href='".$link."?lang=".$lang."&sr=".$row["sr_number"]."'>".$row["details"]."</a><br>"
                                . "\");";
                        echo "markers.addLayer(marker);";
                        echo "markerList.push(marker);";   
                        $count = $count+1;
                    }
                }
                ?>
                        
		}

		populate();
                
                function downloadList(){
                    window.open(
                        <?php
                            $html_file_url = '\'http://45.55.203.7/josue/ProySVA/list.php?lang='.$lang.'\''; // html file 
                            $pdf_file_url = 'pdf/list.'.$lang.'.pdf'; // pdf file 

                            $cmd = "/var/www/html/ProySVA/app/bin/wkhtmltopdf -O Landscape $html_file_url $pdf_file_url 2>&1";// command 
                            $output = shell_exec($cmd); // execute command from php
                            echo "\"".$pdf_file_url."\"";
                        ?>             
                ,'_blank');
                }       

		map.addLayer(markers);
                
                function clickZoom(e){
                    map.setView([12.0,22.5],3);
                }
               
                
		document.getElementById('doit').onclick = function () {
			var m = markerList[Math.floor(Math.random() * markerList.length)];
			markers.zoomToShowLayer(m, function () {
				m.openPopup();
			});
		};

	</script>
        
        
        
        
        

        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
<footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#009DAC">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>
