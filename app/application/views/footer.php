<!-- Footer -->
<footer id="footer" class="footer pb-0 " style="background-image: url(<?php echo BASE_CDN; ?>images/footer-bg.png);
    background-position: initial !important;
    background-size: initial !important;
    background-repeat: initial !important;
    background-attachment: initial !important;
    background-origin: initial !important;
    background-clip: initial !important;
    background-color: #009DAC !important;">
  <div class="container pt-70 pb-40">
    <div class="row multi-row-clearfix">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark"> <img alt="" src="<?php echo BASE_CDN . "images/" . $config["lang"]["HEADER"]["logo"]; ?>" style="max-width: 200px;">
          <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
            <li><a style="background:#FFF;" href="https://www.facebook.com/dsasva/" target="_blank"><i style="color: #009DAC !important;" class="fa fa-facebook"></i></a></li>
            <li><a style="background:#FFF;" href="https://www.instagram.com/voluntariosdsa/" target="_blank"><i style="color: #009DAC !important;" class="fa fa-instagram"></i></a></li>
            <li><a style="background:#FFF;" href="https://www.youtube.com/channel/UCcT_36c9SHZToN2GViyzyYQ/videos" target="_blank"><i style="color: #009DAC !important;" class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom"><?php echo $config["lang"]["FOOTER"]["GROUP1"]["TITLE"] ?></h5>
          <ul class="list list-border">
            <li><a  href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>sva/about"><?php echo $config["lang"]["FOOTER"]["GROUP1"]["ITEMS"][0]["TITLE"] ?></a></li>
            <li><a  href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>calls"><?php echo $config["lang"]["FOOTER"]["GROUP1"]["ITEMS"][1]["TITLE"] ?></a></li>
            <li><a  href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>contact"><?php echo $config["lang"]["FOOTER"]["GROUP1"]["ITEMS"][2]["TITLE"] ?></a></li>
            <li><a  href="<?php echo BASE_URL . strtolower(LANGUAGE) . '/' ?>volunteers/bevolunteer"><?php echo $config["lang"]["FOOTER"]["GROUP1"]["ITEMS"][3]["TITLE"] ?></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom"><?php echo $config["lang"]["FOOTER"]["GROUP2"]["TITLE"] ?></h5>
          <style>
            .dropdown-content {
              display: none;
              position: relative;
              background-color: #f1f1f1;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
              z-index: 1;
            }
            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            .dropdown:hover .dropdown-content {
              display: block;
            }
          </style>
          <ul class="list-border list theme-colored angle-double-right">
            <li>
              <select style="width: 100%;" onchange="var win = window.open(this.value, '_blank');win.focus();">
                <option><?php echo $config["lang"]["FOOTER"]["GROUP1"]["OTHER_PROJECTS"]; ?> </option>
                <option value="https://www.adventistvolunteers.org/">Adventist Volunteers CG</option>
                <option value="https://adra.org/">ADRA International</option>
                <option value="https://maranathabrasil.com.br/">Maranatha International</option>
                <option value="http://www.salvavidasamazonia.org/"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK2N"]; ?></option>
                <option value="https://www.adventisthelp.org/"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK3N"]; ?></option>
                <option value="<?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK1"]; ?>"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK1N"]; ?></option>
                <option value="<?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK4"]; ?>"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["LINK4N"]; ?></option>
                <option value="https://adventistmission.org/">Adventist Mission</option>
                <option value="https://www.nucleodemissao.org">Núcleo de Missão, UNASP-EC</option>
                <option value="https://www.facebook.com/voluntariadounasp.sp/">Centro de Voluntariado Berndt Wolter, UNASP-SP</option>
                <option value="https://www.institutokaleo.org">Instituto Kaleo</option>
                <option value="https://afmbrasil.org">Adventist Frontier Mission - AFM</option>
              </select>

            </li>

          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom"><?php echo $config["lang"]["FOOTER"]["GROUP3"]["TITLE"] ?></h5>
          <ul class="list list-border">
            <li><a href="#" class="lineheight-20">+55 (61) 3701-1818</a></li>
            <li><a href="#" class="lineheight-20">voluntarios@adventistas.org</a></li>
            <li><a href="#" class="lineheight-20">Av L3 Sul, SGAS, Quadra 611. Conjunto D, Parte C, Asa Sul. Brasília - DF. Brasil</a></li>
          </ul>
          <!-- Mailchimp Subscription Form Validation-->
        </div>
      </div>
    </div>
  </div>
  <div class="footer-nav bg-black-222 p-20">
    <div class="row text-center">
      <div class="col-md-12">
        <p class="text-white font-11 m-0"><?php echo $config["lang"]["FOOTER"]["GROUP4"]["CHURCH"]; ?></p>
      </div>
    </div>
  </div>
</footer>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

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