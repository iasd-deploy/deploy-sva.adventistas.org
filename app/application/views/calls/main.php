<?php include(__DIR__.'/../header.php'); ?>

<style>
  
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script>
    var current_page = 1;
    var records_per_page = 10;
    var objJson = '';
    window.onload = updateDropDowns("clear");
    $(function() {
        $("#continent").change(function() {
          updateDropDowns("continent");
          disableDropDown(this);
        });
      });
    $(function() {
        $("#area").change(function() {
          updateDropDowns("area");
          disableDropDown(this);
        });
      });
    $(function() {
        $("#subarea").change(function() {
          updateDropDowns("subarea");
          disableDropDown(this);
        });
      });
    $(function() {
        $("#country").change(function() {
          updateDropDowns("country");
          disableDropDown(this);
        });
      });
    $(function() {
        $("#marital").change(function() {
          updateDropDowns("marital");
          disableDropDown(this);
        });
      });
    $(function() {
        $("#gender").change(function() {
          updateDropDowns("gender");
          disableDropDown(this);
        });
      });
    $(function() {
        $("#children").change(function() {
          updateDropDowns("children");
          disableDropDown(this);
        });
      });
    function disableDropDown(dropdown){
        $(dropdown).attr("disabled", true);
    }
    function enableDropDown(dropdown){
        $(dropdown).attr("disabled", false);
    }
    function enableButton(button){
        $(button).removeClass('disabled');
    }
    function disableButton(button){
        $(button).addClass('disabled');
    }
    function getEndPoint($source){
        switch($source){
            case "continent": return "getContinentDropDown";
            case "country":   return "getCountryDropDown"; 
            case "area":      return "getGreatAreaDropdown";
            case "subarea":   return "getSpecificAreaDropdown";
            case "marital":   return "getMaritalDropdown"; 
            case "gender":    return "getSexDropDown"; 
            case "children":  return "getChildrenDropDown"; 
            case "total":     return "getFilteredCardsCount";
            case "cards":     return "getFilteredCardsJSON";
        }
    }
    function setElements($source, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
        if($category_a  == 'base' || $category_a  == '--')    { $category_a = '';};
        if($category_b  == 'base' || $category_b  == '--')    { $category_b = '';};
        if($continent   == 'base' || $continent   == '--')    { $continent  = '';};
        if($country     == 'base' || $country     == '--')    { $country    = '';};
        if($marital     == 'base' || $marital     == '--')    { $marital    = '';};
        if($children    == 'base' || $children    == '--')    { $children   = '';};
        if($gender      == 'base' || $gender      == '--')    { $gender     = '';};
        $endpoint = getEndPoint($source);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo BASE_URL.'/'.strtolower(LANGUAGE); ?>/calls/"+$endpoint, true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify({
            category_a: $category_a,
            category_b: $category_b,
            continent: $continent,
            country: $country,
            marital: $marital,
            children: $children,
            gender: $gender
        }));
        xhr.onload = function() {
          if($source == "total"){
            $("#"+$source).html(this.responseText+' <?php echo $config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["LARGETXT"]["A"];?>  <span class="text-theme-colored font-weight-400"> <?php echo $config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["LARGETXT"]["B"];?> </span> <span class="font-30 text-theme-colored">.</span>');
          }else if($source == "cards"){
            var listing_table = document.getElementById("listingTable");
            listing_table.innerHTML = '';
            objJson = JSON.parse(this.responseText);
            console.log(objJson.length);
            console.log(numPages());
            current_page = 1;
            changePage(1);
          }else{
            $("#"+$source).empty().append(this.responseText);
                enableDropDown($list[i]);
            
          }
        };
    };
    function updateDropDowns($source){
        if($source == "clear"){
            $list = ["continent", "country", "area", "subarea", "marital", "gender", "children", "total", "cards"];
            for (var i = $list.length - 1; i >= 0; i--) {
                setParamenters(true, $list[i], '', '', '', '', '', '', '');
            }
        }else{
            $source != "area"      ?  (setParamenters(false, "area", false, true, true, true, true, true, true)) : '';
            $source != "subarea"   ?  (setParamenters(false, "subarea", true, false, true, true, true, true, true)) : ''; 
            $source != "continent" ?  (setParamenters(false, "continent", true, true, false, true, true, true, true)) : '';
            $source != "country"   ?  (setParamenters(false, "country", true, true, true, false, true, true, true)) : ''; 
            $source != "marital"   ?  (setParamenters(false, "marital", true, true, true, true, false, true, true)) : ''; 
            $source != "children"  ?  (setParamenters(false, "children", true, true, true, true, true, false, true)) : ''; 
            $source != "gender"    ?  (setParamenters(false, "gender", true, true, true, true, true, true, false)) : ''; 
            setParamenters(false, "total", true, true, true, true, true, true, true);
            setParamenters(false, "cards", true, true, true, true, true, true, true);
            enableButton("#clear");
        }
    }     
    function setParamenters($clear, $source, $area, $subarea, $continent, $country, $marital, $children, $gender){
        if($clear){
                setElements($source, '','','','','','','');
            }
        else if(false === $("#"+$source).is('[disabled=disabled]')){ 
            setElements(
                $source,
                ($area       ? $("#area").val()      : ''), 
                ($subarea    ? $("#subarea").val()   : ''),
                ($continent  ? $("#continent").val() : ''), 
                ($country    ? $("#country").val()   : ''), 
                ($marital    ? $("#marital").val()   : ''),
                ($children   ? $("#children").val()  : ''), 
                ($gender     ? $("#gender").val()    : '')
            );
        };
    }
    function clearfilters() {
        if($("#clear").hasClass('disabled')){
        }else{
            // updateDropDowns("clear"); 
            // $list = ["#continent", "#country", "#area", "#subarea", "#marital", "#gender", "#children"];
            // for (var i = $list.length - 1; i >= 0; i--) {
            //     //enableDropDown($list[i]);
            //     disableDropDown($list[i]);
            // }
            // disableButton("#clear");
            location.reload();
            return false;
        }
    };
    function prevPage(){
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
        document.getElementById('scrool-to-list').click();
    }
    function nextPage(){
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
            document.getElementById('scrool-to-list').click();
        }else{
            console.log('Current Page: '+current_page+', Num Pages: '+numPages());
        }
    }
    function changePage(page){
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("listingTable");
        var page_span = document.getElementById("page");
     
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        listing_table.innerHTML = "";

        for (var i = (page-1) * records_per_page; i < (page * records_per_page) && i < objJson.length; i++) {
            listing_table.innerHTML += 
            '<div class="section-content">' +
              '<div class="row">' +
                '<div class="col-sm-12 col-md-12 col-lg-12">' +
                  '<div class="call-card schedule-box maxwidth500 bg-lighter mb-30">' +
                    '<a class="link" href="'+objJson[i].linkdetails+'"></a>' +
                    '<div class="schedule-details clearfix p-15 pt-10">' +
                      '<div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">' +
                        '<ul>' +
                          '<li class="font-19 text-white font-weight-600 border-bottom "><i class="fa fa-'+objJson[i].sex+' mr-5"></i></li>' +
                          '<li class="font-12 text-white text-uppercase">'+objJson[i].available+' '+objJson[i].vacancies+'</li>' +
                        '</ul>' +
                      '</div>' +
                      '<h4 class="title mt-0"><a href="'+objJson[i].linkdetails+'">'+objJson[i].pos_title+'</a></h4>' +
                      '<ul class="list-inline font-11 text-gray">' +
                        '<li><i class="fa fa-university mr-5"></i>'+objJson[i].org_name+'</li>' +
                        '<li><i class="fa fa-map-marker mr-5"></i>'+objJson[i].country+'</li>' +
                        '<li><i class="fa fa-clock-o mr-5"></i>'+objJson[i].service_len+'</li>' +
                        (objJson[i].stipend == "Calling Organization" ? '<li><i class="fa fa-money mr-5"></i>'+objJson[i].stipend_terms+'</li>' : '') +
                      '</ul>' +
                      '<div class="clearfix"></div>' +
                      '<p class="mt-10">'+objJson[i].duties_short+'</p>' +
                      '<div class="mt-10">' +
                        '<a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="'+objJson[i].linkdetails+'"><i class="fa fa-file-text mr-5"></i><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["CARDS"]["INFOBTN"]; ?></li></a>' +
                        '<a href="'+objJson[i].linkimage+'" target="_blank" class="btn btn-dark btn-sm mt-10"><i class="fa fa-share-alt mr-5"></i><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["CARDS"]["SHAREBTN"]; ?></li></a>' +
                      '</div>' +
                    '</div>' +
                  '</div>' +
                '</div>';
        }
        page_span.innerHTML = page + "/" + numPages();

        if (page == 1) {
            btn_prev.style.visibility = "hidden";
        } else {
            btn_prev.style.visibility = "visible";
        }

        if (page == numPages()) {
            btn_next.style.visibility = "hidden";
        } else {
            btn_next.style.visibility = "visible";
        }
    }
    function numPages(){
        return Math.ceil(objJson.length / records_per_page);
    }
    window.onload = function() {
        changePage(1);
    };
  </script>

 <!-- Start main-content -->
  <div class="main-content">
   <!-- Section: inner-header -->
   <section class="inner-header divider  layer-overlay overlay-theme-colored-9" data-bg-img="<?php echo BASE_CDN;?>images/project/chamados.jpg" style="background-image: url(<?php echo BASE_CDN;?>images/bg/bg1.jpg); ">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white subtitle"><?php echo $config["lang"]["PROJECTS"]["TITLE"];?></h3>
            </div>
          </div>
        </div>
      </div>      
    </section>

   <!-- Start call search -->
   <section class="divider parallax layer-overlay overlay-white-9" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg11.jpg" style="background-image: url(&quot;images/bg/bg11.jpg&quot;); background-position: 50% -1805px;">
    <div class="container">

    <!-- Dropdowns / fields -->
    <div class="row text-center">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="icon-box iconbox-theme-colored ">
                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group">
                        <div class="row">
                        <!-- Continents -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="continent" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Countries -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="country" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Areas -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="area" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Sub-areas -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="subarea" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Marital -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="marital" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Gender -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="gender" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Children -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <select id="children" name="form_division2" class="form-control required" aria-required="true">
                              
                            </select>
                          </div>
                        </div>
                        <!-- Clear button -->
                        <div id="results" class="col-sm-6">
                          <div class="form-group">
                            <button id="clear" class="btn btn-primary btn-lg disabled" type="button" onclick="clearfilters()" class="btn btn-primary btn-lg"><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["CLEARBTN"];?></button>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
    </div>
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0"><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["SMALLTXT"];?></h5>
              <h2 id="total" class="mt-0 text-uppercase font-28"><?php foreach($cards_count as $key => $value){echo $value->count;} echo ' <?php echo $config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["LARGETXT"]["A"];?> <span class="text-theme-colored font-weight-400"> <?php echo $config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["LARGETXT"]["B"];?> </span> <span class="font-30 text-theme-colored">.</span>'?></h2>
              <div class="icon">
                <i class="fa fa-search"></i>
              </div>
            </div>
            <div class="col-md-6"> <p><?php echo "<br>".$config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["HINT"]." <a href=".BASE_URL.strtolower(LANGUAGE)."/calls/map"." class=\"btn btn-gray btn-theme-colored btn-circled btn-xs\"> ".$config["lang"]["PROJECTS"]["SEARCH"]["RESULTS"]["MAPBTN"]."</a>";?></p></div>
          </div>
        
        <div id="listingTable"></div>
        <section>
                <div class="row text-center">
                
                <button id="btn_prev" class="btn btn-primary btn-lg" type="button" onclick="prevPage()" class="btn btn-primary btn-lg"><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["PAGINATION"]["PREV"]; ?></button>
                <button id="btn_next" class="btn btn-primary btn-lg" type="button" onclick="nextPage()" class="btn btn-primary btn-lg"><?php echo $config["lang"]["PROJECTS"]["SEARCH"]["PAGINATION"]["NEXT"]; ?></button>
                <div class="row text-center">
                    <?php echo $config["lang"]["PROJECTS"]["SEARCH"]["PAGINATION"]["PAGES"]; ?>: <span id="page"></span>
                    <a id="scrool-to-list" href="#results"></a>
                </div>
            </div>
        </section>
    </section>

<?php include(__DIR__.'/../footer.php'); ?>