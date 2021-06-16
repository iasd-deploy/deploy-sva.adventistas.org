<?php include(__DIR__.'/../../header.php'); ?>
<title>SVA - Proyectos</title>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aaa86ac4b401e45400dc328/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 <!-- Start main-content -->
  <div class="main-content">

           <!-- Section: inner-header -->
           <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="<?php echo BASE_CDN;?>images/bg/bg12.jpg" style="background-image: url(<?php echo BASE_CDN;?>images/bg/bg1.jpg); background-position: 50% 0px;">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">PROYECTOS</h3>
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

  <link rel="stylesheet" href="<?php echo BASE_CDN;?>js/maps/MarkerCluster.css" />
  <link rel="stylesheet" href="<?php echo BASE_CDN;?>js/maps/MarkerCluster.Default.css" />
  <script src="<?php echo BASE_CDN;?>js/maps/leaflet.markercluster-src.js"></script>
  <script src="<?php echo BASE_CDN;?>js/realworld.388.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>
        
        <div id="map" style="width: 100%; height: 700px;"></div>
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
//      for (var i = 0; i < addressPoints.length; i++) {

//      }



                <?php
               
              
                if(count($calls) > 0){
                    $count = 0;
                    $link;

                    /*$links = BASE_URL.strtolower(LANGUAGE).'/calls/available';


                    switch($lang){
                        case "pt": $link = "http://localhost.org/avs_site/pt/voluntarios/chamados-disponiveis/chamados/call.php";break;
                        case "es": $link = "http://localhost.org/avs_site/es/voluntarios/llamados-disponibles/llamados/call.php";break;
                        case "de": $link = "http://localhost.org/avs_site/pt/voluntarios/chamados-disponiveis/chamados/call.php";break;
                        case "en": $link = "http://localhost.org/avs_site/es/voluntarios/llamados-disponibles/llamados/call.php";break;
                        default: $link = ""; break;
                    }*/
                    $lang = strtolower(LANGUAGE);
                    $link = "http://".BASE_URL."es/calls/details/";
                    foreach ($calls as $key => $value) {
//                        echo "m = L.marker([".$row["lat"].",".$row["lng"]."]);";//.addTo(map)".
//                                //".bindPopup(<br>".$row["pos_title"]."</br><br />".$row["org_name"].").openPopup();";
//                        echo "markers.addLayer(m);";
                        echo "var a = addressPoints[".$count."];";
                        echo "var title = \"".$value->pos_title."\";";
                        echo "var marker = L.marker(L.latLng(".$value->lat.",".$value->lng."), { title: title });";
                        echo "marker.bindPopup("
                                //. "\"<center><strong>".$value->pos_title."</strong></center>"
                                . "\"<center><h4 class='font-weight-500 font-18'><a href='page-single-cause.html'>".$value->pos_title."</a></h4></center>"
                                . "<center>".$value->org_name."</center>"
                                
                                . "<strong><center>".strtoupper($value->country)."</center></strong>"
                                . "<br>"
                                . "<center><a class= 'btn btn-border btn-circled btn-theme-colored btn-xs' style='transition: none; line-height: 19px; border-width: 1px; margin: 0px; padding: 11px 28px; letter-spacing: 0px; font-weight: 400; font-size: 14px;' id='call_info' href='".$link.$value->sr_number."'>".$value->details."</a></center><br>"
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
                    window.open("http://45.55.203.7/es/calls/reports/list",'_blank');
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



<?php include(__DIR__.'/../../footer.php'); ?>