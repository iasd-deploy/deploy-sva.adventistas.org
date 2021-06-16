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

    <link rel="stylesheet" href="//unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />
    <script src="//unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" integrity="sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==" crossorigin=""></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_CDN;?>js/maps/MarkerCluster.css" />
    <link rel="stylesheet" href="<?php echo BASE_CDN;?>js/maps/MarkerCluster.Default.css" />
    <script src="<?php echo BASE_CDN;?>js/maps/leaflet.markercluster-src.js"></script>
    <script src="<?php echo BASE_CDN;?>js/realworld.388.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
    <script src="//cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
    <!-- After Leaflet script -->
    <script src="https://unpkg.com/leaflet.featuregroup.subgroup@1.0.2/dist/leaflet.featuregroup.subgroup.js"></script> 
</head>

<body class="">
  <div id="map" style="width: 100%; height: 100vh"></div>
    
  <script type="text/javascript">
    var redIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/heavy1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var heavyIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/heavy1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var officeIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/office1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var educationIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/education1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var healthIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/health1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var churchIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/church1.png".'\''; ?>,

        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var techIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/tech1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var socialIcon = L.icon({
        iconUrl: <?php echo '\''.BASE_CDN."images/resources/map-markers/social_work1.png".'\''; ?>,
        iconSize:     [35, 40], // size of the icon
        iconAnchor:   [35, 40], // point of the icon which will correspond to marker's location
        popupAnchor:  [-20, -42] // point from which the popup should open relative to the iconAnchor
    });
    var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
                  }),
    latlng = L.latLng(12, 22.5);
    var map = L.map('map', {center: latlng, zoom: 3, layers: [tiles]});
                map.scrollWheelZoom.enable();
                L.easyButton( 'fa-home', function(){
                  window.location.href = "<?php echo BASE_URL.strtolower(LANGUAGE);?>";
                }).addTo(map);
                L.easyButton( 'fa-search', function(){
                  window.location.href = "<?php echo BASE_URL.strtolower(LANGUAGE).'/calls';?>";
                }).addTo(map);
                L.easyButton( 'fa-refresh', function(){
                  map.setView([12.0,22.5],3);
                }).addTo(map);
                L.easyButton( 'fa-print', function(){
                  downloadList();
                }).addTo(map);
    var parentGroup = L.markerClusterGroup().addTo(map);            
    var markers = L.markerClusterGroup();
    var markerList = [];
    var heavy     = [];
    var office    = [];
    var education = [];
    var health    = [];
    var church    = [];
    var tech      = [];
    var social    = [];
    var groups    = [];
    var overlays = {};                
    function populate() {
          <?php
           function replaceAccents($str) {
                $search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ,ñ,Ñ");
                $replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE,n,N");
                return str_replace($search, $replace, $str);
              }
            if(count($calls) > 0){
                $count = 0;
                $link;
                $lang = strtolower(LANGUAGE);
                $link = "//".BASE_URL.strtolower(LANGUAGE)."/calls/details/";
                foreach ($calls as $key => $value) {
                    switch($value->category_a) {
                      case "Health":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: healthIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "health.push(marker);";
                      break;
                      case "Church":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: churchIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "church.push(marker);";
                      break;
                      case "Education":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: educationIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "education.push(marker);";
                      break;
                      case "Heavy":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: heavyIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "heavy.push(marker);";
                      break;
                      case "Office":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: officeIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "office.push(marker);";
                      break;
                      case "Social Work":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: socialIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "social.push(marker);";
                      break;
                      case "Tech":
                      echo "var a = addressPoints[".$count."];";
                      echo "var title = \"".$value->pos_title."\";";
                      echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), {icon: techIcon}, { title: title });";
                      echo "marker.bindPopup("
                              . "\"<center><text class='font-opensans font-16'><a href='".$link.$value->sr_number."'>".$value->pos_title."</a></></center>"
                              . "<center>".$value->org_name."</center>"
                              . "<strong><center><text class='font-opensans'>".strtoupper(replaceAccents($value->country))."</></center></strong>"
                              . "<br>"
                              . "<center><a class= 'btn btn-default btn-theme-colored btn-xs' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
                              . "\");";
                      echo "tech.push(marker);";
                      break;
                    default:
                    } 
                    $count = $count+1;
                }
            }
            // MAP Filters
            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["HEALTH"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "health).addTo(map);";

            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["EDUCATION"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "education).addTo(map);";

            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["HEAVY"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "heavy).addTo(map);";

            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["CHURCH"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "church).addTo(map);";

            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["TECH"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "tech).addTo(map);";

            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["OFFICE"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "office).addTo(map);";

            echo "overlays[".'"'.$config["lang"]["PROJECTS"]["FILTERS"]["SOCIAL"].'"'."] = L.featureGroup.subGroup(";
            echo "parentGroup,";
            echo "social).addTo(map);";
        ?>
            L.control.layers(null, overlays, {
              collapsed: true,
            }).addTo(map);  
    }
    populate(); 
    function downloadList(){
        <?php echo "window.open(\"//".BASE_URL.strtolower(LANGUAGE)."/calls/reports/list\",'_blank');";?>
        
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
    parentGroup = L.markerClusterGroup(overlays), // Could be any other Layer Group type.
    mySubGroup = L.featureGroup.subGroup(parentGroup, makersList);
    parentGroup.addTo(map);
    mySubGroup.addTo(map);
  </script>
      
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo BASE_CDN; ?>js/custom.js?v=2"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_CDN; ?>js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<?php if (isset($ancla)) { ?>
  <script>
    $('html, body').animate({
      scrollTop: $('#<?php echo $ancla; ?>').offset().top
    }, 'slow');
  </script>
<?php } ?>

</body>

</html>