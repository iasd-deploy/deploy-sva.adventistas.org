<?php

class Calls extends Controller {
	function index(){
            $call_model = $this->loadModel("call_model");
            // //Separated

            // $continents = $call_model->getContinentDropDown(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            // $areas = $call_model->getGreatAreaDropdown(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            // $marital = $call_model->getMaritalDropdown(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            // $gender = $call_model->getSexDropDown(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            // $children = $call_model->getChildrenDropDown(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            // $cards_count = $call_model->getFilteredCardsCount(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            
            //Together
            $filters = $call_model->getAllFilters(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            $continents = []; 
            $areas = [];
            $marital = [];
            $gender = [];
            $children = [];
            $cards_count = [];
            if($filters != null){
                foreach ($filters as $key => $value) {
                    if($continents[$value->continent] == null){
                        $continents[$value->continent] = (object)[];
                        $continents[$value->continent]->continent =  $value->continent;
                    }
                    if($areas[$value->category_a] == null){
                        $areas[$value->category_a] = (object)[];
                        $areas[$value->category_a]->category_a = $value->category_a;
                    }

                    if($marital[$value->marital_code] == null){
                        $marital[$value->marital_code] = (object)[];
                        $marital[$value->marital_code]->code = $value->marital_code;
                        $marital[$value->marital_code]->translation = $value->translation_marital;
                    }

                    if($gender[$value->gender_code] == null){
                        $gender[$value->gender_code] = (object)[];
                        $gender[$value->gender_code]->code = $value->gender_code;
                        $gender[$value->gender_code]->translation = $value->translation_gender;
                    }

                    if($children[$value->children_code] == null){
                        $children[$value->children_code] = (object)[];
                        $children[$value->children_code]->code = $value->children_code;
                        $children[$value->children_code]->translation = $value->translation_children;
                    }

                    
                }
                ksort($continents);
                ksort($areas);
                ksort($marital);
                ksort($gender);
                ksort($children);
                if($cards_count == null){
                    $cards_count[0] = (object)[];
                    $cards_count[0]->count = count($filters);
                }
            }
            $cards = $call_model->getFilteredCards(strtolower(LANGUAGE), '', '', '', '', '', '', '');
            $template = $this->loadView('calls/main');
            //$template->set("calls", $calls);
            $template->set("continents", $continents);
            $template->set("areas", $areas);
            $template->set("marital", $marital);
            $template->set("gender", $gender);
            $template->set("children", $children);
            $template->set("cards", $cards);
            $template->set("cards_count", $cards_count);
            $template->set("calls", $calls);
            $template->set("current", "calls");
            $template->render();
	}


    

    function map(){
            $call_model = $this->loadModel("call_model");
            $calls = $call_model->getCalls(strtolower(LANGUAGE));
            $template = $this->loadView('calls/map');
            $template->set("calls", $calls);
            $template->render();
    }

    function detailsnew($call_id){ 
        $call_details_model = $this->loadModel("call_details_model");
        $result_c = $call_details_model->getHeaders(strtolower(LANGUAGE));
        $result_f = $call_details_model->getCallDetails(strtolower(LANGUAGE),$call_id);
        $template = $this->loadView('details/main');
        $template->set("result_f", $result_f);
        $template->set("result_c", $result_c);
        $template->set("sr", $call_id);
        $template->set("lang", strtolower(LANGUAGE));
        $template->render();
    }

    function details($call_id){ 
        $call_details_model = $this->loadModel("call_details_model");
        $result_c = $call_details_model->getHeaders(strtolower(LANGUAGE));
        $result_f = $call_details_model->getCallDetails(strtolower(LANGUAGE),$call_id);
        $template = $this->loadView('details/main_new');
        $template->set("result_f", $result_f);
        $template->set("result_c", $result_c);
        $template->set("sr", $call_id);
        $template->set("lang", strtolower(LANGUAGE));
        $template->render();
    }

    function reports($name){
        $reports_model = $this->loadModel("reports_model");
        if($name == "list"){
            $result_f = $reports_model->getListOfCalls_fields(LANGUAGE);
            $result_c = $reports_model->getListOfCalls_headers(LANGUAGE);
            $template = $this->loadView('reports/list');
            $template->set("result_f", $result_f);
            $template->set("result_c", $result_c);
            $template->set("lang", strtolower(LANGUAGE));
            $template->render();
        }
        if(substr($name,0,2) == "SR"){
            $result_c = $reports_model->getSpecificCall_header(LANGUAGE);
            $result_f = $reports_model->getSpecificCall_fields(LANGUAGE,$name);
            $template = $this->loadView('reports/call');
            $template->set("result_f", $result_f);
            $template->set("result_c", $result_c);
            $template->set("lang", strtolower(LANGUAGE));
            $template->render();
        }
    }

    function testing(){
        echo $_POST["p1"];
    }

    function getFilteredCalls(){
        $model = $this->loadModel("call_model");
        $result = $model->getFilteredCalls(strtolower(LANGUAGE),$_POST["category_a"], $_POST["category_b"], $_POST["continent"], $_POST["country"], $_POST["marital"], $_POST["children"], $_POST["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        echo count($result);

        ?>
        
          <div class="row">
            <?php if(count($result)>0){ $i = 0; ?>
              <?php foreach ($result as $key => $value) {
                if($i % 3 == 0 or $i == 0){echo "<div class=\"row\">";}
              ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <article class="post clearfix mb-sm-30 bg-silver-light">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="<?php echo BASE_CDN."images/schools/".$value->foto ?>" alt="" alt="" class="img-responsive img-fullwidth">
                      </div>

                    </div>
                    <div class="entry-content p-20 pr-10">
                      <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                          <ul>
                            <li class="font-16 text-white font-weight-600 border-bottom"><?php echo $value->cod ?></li>
                            <li class="font-12 text-white text-uppercase"><?php echo $value->country ?></li>
                          </ul>
                        </div>
                        <div class="media-body pl-15">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#"><?php echo $value->name ?></a></h4>
                          </div>
                        </div>
                      </div>
                      <style type="text/css">
                        th, td {
                          padding: 3px;
                        }
                      </style>
                      <p></p>
                      <table style="width:100%" >
                        <?php if($value->coordinator != "" and $value->coordinator != null){ ?>
                          <tr><td><i class="fa fa-user"></i></td><td class="text-left"><?php echo $value->coordinator ?></td></tr>
                        <?php } ?>
                        <?php if($value->telefone1 != "" and $value->telefone1 != null){ ?>
                          <tr><td><i class="fa fa-phone"></i></td><td class="text-left"><?php echo $value->telefone1 ?></td></tr>
                        <?php } ?>
                        <?php if($value->address != "" and $value->address != null){ ?>
                          <tr><td><i class="fa fa-map-marker"></i></td><td class="text-left"><?php echo $value->address ?></td></tr>
                        <?php } ?>   
                      </table>
                      <!-- Social Links -->
                      <ul class="styled-icons icon-theme-colored text-center">
                        <?php if($value->facebook != "" and $value->facebook != null){?>
                          <li><a href="<?php echo $value->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <?php }?>
                        <?php if($value->instagram != "" and $value->instagram != null){?>
                          <li><a href="<?php echo $value->instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <?php }?>
                        <?php if($value->email1 != "" and $value->email1 != null){?>
                          <li><a href="<?php echo "mailto:".$value->email1 ?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        <?php }?>
                        <?php if($value->website != "" and $value->website != null){?>
                          <li><a href="<?php echo $value->website ?>" target="_blank"><i class="fa fa-globe"></i></a></li>
                        <?php }?>    
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                  </article>
                </div>
            <?php  ?>   
        <?php $i++; if($i % 3 == 0 and $i != 0){echo "</div>";} }?>
        <?php }?>
        
      
        <?php




    }

    function getFilteredCardsCount(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getFilteredCardsCount(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        // switch(LANGUAGE){
        //     case "PT": $message = "Acomoda????o pra crian??as"; break;
        //     case "ES": $message = "Alojamiento para ni??os"; break;
        //     default:   $message = "Accommodation for children"; break;
        // }

        if(count($result) > 0){
            //echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                echo $value->count;
            }
        }else{
            echo "0";
        }
    }

    function getFilteredCardsJSON(){
        header('Content-type:application/json;charset=utf-8');
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getFilteredCards(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $vacancies = "";
        $sex = "";
        $stipend = "";
        $local_code = "";
        $i = 0;
        $len = count($result);
        $answer = array();
        if(count($result) > 0){
            //echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                if($value->available > 1){
                    switch(LANGUAGE){
                        case "PT": $vacancies = "VAGAS"; break;
                        case "ES": $vacancies = "VACANTES"; break;
                        default:   $vacancies = "VACANCIES"; break;
                    }
                }else{
                    switch(LANGUAGE){
                        case "PT": $vacancies = "VAGA"; break;
                        case "ES": $vacancies = "VACANTE"; break;
                        default:   $vacancies = "VACANCY"; break;
                    }
                }
                if($value->gender == "Either"){
                    $sex = "users";
                }else{
                    $sex = strtolower($value->gender);
                }
                if($value->stipend == 'Calling Organization'){
                    $stipend = '<li><i class="fa fa-money mr-5"></i>'.substr($value->stipend_terms,0,40).'...'.'</li>';
                }else{
                    $stipend = "";
                }
                $linkdetails = "//".BASE_URL.strtolower(LANGUAGE)."/calls/details/".$value->sr_number;
                $linkimage = "//".BASE_CDN."images/resources/png/".$value->sr_number.'.'.strtolower(LANGUAGE).'.jpg';
                $item = new stdClass(); // create a new object
                $item->sr_number= $value->sr_number;
                $item->pos_title= $value->pos_title; 
                $item->available= $value->available;
                $item->gender= $value->gender;
                $item->service_len= $value->service_len;
                $item->duties= $value->duties;
                $item->country= $value->country;
                $item->org_name= $value->org_name;
                $item->stipend= $value->stipend;
                $item->stipend_terms= substr($value->stipend_terms,0,40).'...';
                $item->sex= $sex;
                $item->vacancies= $vacancies;
                $item->linkdetails= $linkdetails;
                $item->linkimage= $linkimage;
                $item->duties_short= substr($value->duties,0,150).'...';
                array_push($answer,$item);
            }
            echo json_encode($answer);
        }else{
            echo "No calls found";
        }
    }

    function getFilteredCards(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getFilteredCards(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $vacancies = "";
        $sex = "";
        $stipend = "";
        $local_code = "";


        

        if(count($result) > 0){
            //echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                if($value->available > 1){
                    switch(LANGUAGE){
                        case "PT": $vacancies = "VAGAS"; break;
                        case "ES": $vacancies = "VACANTES"; break;
                        default:   $vacancies = "VACANCIES"; break;
                    }
                }else{
                    switch(LANGUAGE){
                        case "PT": $vacancies = "VAGA"; break;
                        case "ES": $vacancies = "VACANTE"; break;
                        default:   $vacancies = "VACANCY"; break;
                    }
                }
                if($value->gender == "Either"){
                    $sex = "users";
                }else{
                    $sex = strtolower($value->gender);
                }
                if($value->stipend == 'Calling Organization'){
                    $stipend = '<li><i class="fa fa-money mr-5"></i>'.substr($value->stipend_terms,0,40).'...'.'</li>';
                }else{
                    $stipend = "";
                }
                $linkdetails = "//".BASE_URL.strtolower(LANGUAGE)."/calls/details/".$value->sr_number;
                $linkimage = "//".BASE_CDN."images/resources/png/".$value->sr_number.'.'.strtolower(LANGUAGE).'.jpg';
                ?>
                <div class="section-content">
                    <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="schedule-box maxwidth500 bg-lighter mb-30">
                    <div class="schedule-details clearfix p-15 pt-10">
                      <div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">
                        <ul>
                          <li class="font-19 text-white font-weight-600 border-bottom "><i class="fa fa-<?php echo $sex ?> mr-5"></i></li>
                          <li class="font-12 text-white text-uppercase"><?php echo $value->available.' '.$vacancies ?></li>
                        </ul>
                      </div>
                      <h4 class="title mt-0"><a href="#"><?php echo $value->pos_title?></a></h4>
                      <ul class="list-inline font-11 text-gray">
                        <li><i class="fa fa-university mr-5"><?php echo $value->org_name?></i></li>
                        <li><i class="fa fa-map-marker mr-5"></i><?php echo $value->country?></li>
                        <li><i class="fa fa-clock-o mr-5"></i><?php echo $value->service_len?></li>
                        <?php echo $stipend ?>
                      </ul>
                      <div class="clearfix"></div>
                      <p class="mt-10"><?php echo substr($value->duties,0,300).'...' ?></p>
                      <div class="mt-10">
                       <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="<?php echo  $linkdetails ?>"><i class="fa fa-file-text mr-5"></i>Mais informa????es</li></a>
                       <a href="<?php echo  $linkimage ?>" class="btn btn-dark btn-sm mt-10"><i class="fa fa-share-alt mr-5"></i>Compartilhar</li></a>
                      </div>
                    </div>
                  </div>
                </div>
            
              </div>
            </div>
          </div>
                          <?php
            }
        }else{
            echo "No calls found";
        }
    }

    function getChildrenDropDown(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getChildrenDropDown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "PT": $message = "Acomoda????o pra crian??as"; break;
            case "ES": $message = "Alojamiento para ni??os"; break;
            default:   $message = "Accommodation for children"; break;
        }

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                echo "<option value=\"".$value->code."\">" . $value->translation."</option>";
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
    }

    function getSexDropDown(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getSexDropDown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "PT": $message = "Sexo"; break;
            case "ES": $message = "Sexo"; break;
            default:   $message = "Sex"; break;
        }

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                echo "<option value=\"".$value->code."\">" . $value->translation."</option>";
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
    }

    function getMaritalDropdown(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getMaritalDropdown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "PT": $message = "Estado civil"; break;
            case "ES": $message = "Estado civil"; break;
            default:   $message = "Marital status"; break;
        }

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                echo "<option value=\"".$value->code."\">" . $value->translation."</option>";
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
    }

    function getSpecificAreaDropdown(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getSpecificAreaDropdown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "PT": $message = "Especialidade"; break;
            case "ES": $message = "Especialidad"; break;
            default:   $message = "Expertise"; break;
        }

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                if(LANGUAGE == "PT"){
                    switch($value->category_b){
                        case "Academic":                      echo "<option value=\"".$value->category_b."\">" . "Acad??mico"."</option>"; break;                                   
                        case "Accounting/Business":           echo "<option value=\"".$value->category_b."\">" . "Contabilidade/Neg??cios"."</option>"; break;                                       
                        case "Administration":                echo "<option value=\"".$value->category_b."\">" . "Administra????o"."</option>"; break;                                  
                        case "Social Work":                   echo "<option value=\"".$value->category_b."\">" . "Servi??o social"."</option>"; break;                               
                        case "Agriculture":                   echo "<option value=\"".$value->category_b."\">" . "Agricultura"."</option>"; break;                              
                        case "Chaplain":                      echo "<option value=\"".$value->category_b."\">" . "Capelania"."</option>"; break;                           
                        case "Church/Evangelism":             echo "<option value=\"".$value->category_b."\">" . "Igreja/Evangelismo"."</option>"; break;                                    
                        case "Cleaning":                      echo "<option value=\"".$value->category_b."\">" . "Limpeza"."</option>"; break;                       
                        case "Communications":                echo "<option value=\"".$value->category_b."\">" . "Comunica????es"."</option>"; break;                                         
                        case "Computer/Website":              echo "<option value=\"".$value->category_b."\">" . "Inform??tica/Sites"."</option>"; break;                                         
                        case "Construction":                  echo "<option value=\"".$value->category_b."\">" . "Constru????o"."</option>"; break;                                   
                        case "Coordinator":                   echo "<option value=\"".$value->category_b."\">" . "Coordena????o"."</option>"; break;                                     
                        case "Counselor":                     echo "<option value=\"".$value->category_b."\">" . "Aconselhamento"."</option>"; break;                       
                        case "Dean":                          echo "<option value=\"".$value->category_b."\">" . "Preceptoria"."</option>"; break;                   
                        case "Dental":                        echo "<option value=\"".$value->category_b."\">" . "Dentista"."</option>"; break;                               
                        case "Engineer":                      echo "<option value=\"".$value->category_b."\">" . "Engenharia"."</option>"; break;                               
                        case "Event Organizer":               echo "<option value=\"".$value->category_b."\">" . "Organiza????o de eventos"."</option>"; break;                                            
                        case "Graphic Design":                echo "<option value=\"".$value->category_b."\">" . "Design gr??fico"."</option>"; break;                                               
                        case "Librarian":                     echo "<option value=\"".$value->category_b."\">" . "Bibliotec??rio"."</option>"; break;                                       
                        case "Maintenance":                   echo "<option value=\"".$value->category_b."\">" . "Manuten????o"."</option>"; break;                                       
                        case "Custodial":                     echo "<option value=\"".$value->category_b."\">" . "Zelador"."</option>"; break;                               
                        case "Electrician":                   echo "<option value=\"".$value->category_b."\">" . "Eletricista"."</option>"; break;                                       
                        case "Mechanic":                      echo "<option value=\"".$value->category_b."\">" . "Mec??nico"."</option>"; break;                               
                        case "Plumber":                       echo "<option value=\"".$value->category_b."\">" . "Bombeiro hidr??ulico"."</option>"; break;                                       
                        case "Marketing":                     echo "<option value=\"".$value->category_b."\">" . "Marketing"."</option>"; break;                                       
                        case "Medical":                       echo "<option value=\"".$value->category_b."\">" . "M??dico"."</option>"; break;                           
                        case "Nursing":                       echo "<option value=\"".$value->category_b."\">" . "Enfermeiro(a)"."</option>"; break;                                       
                        case "Nutritionist":                  echo "<option value=\"".$value->category_b."\">" . "Nutricionista"."</option>"; break;                                              
                        case "Office":                        echo "<option value=\"".$value->category_b."\">" . "Escrit??rio"."</option>"; break;                                       
                        case "Orphanage":                     echo "<option value=\"".$value->category_b."\">" . "Orfanato"."</option>"; break;                                       
                        case "Pastor/Evangelist":             echo "<option value=\"".$value->category_b."\">" . "Pastor/Evangelista"."</option>"; break;                                                          
                        case "Physio Therapist":              echo "<option value=\"".$value->category_b."\">" . "Fisioterapeuta"."</option>"; break;                                                           
                        case "Pilot":                         echo "<option value=\"".$value->category_b."\">" . "Piloto"."</option>"; break;                                       
                        case "Principal":                     echo "<option value=\"".$value->category_b."\">" . "Diretor"."</option>"; break;                                                  
                        case "Secretarial":                   echo "<option value=\"".$value->category_b."\">" . "Secretariado"."</option>"; break;                           
                        case "Software Development":          echo "<option value=\"".$value->category_b."\">" . "Desenvolvimento de software"."</option>"; break;                                               
                        case "Speech Therapy/Pathologist":    echo "<option value=\"".$value->category_b."\">" . "Fonoaudi??logo/Patologista"."</option>"; break;                                   
                        case "Religion Teacher":              echo "<option value=\"".$value->category_b."\">" . "Professor de religi??o"."</option>"; break;                  
                        case "College Teacher":               echo "<option value=\"".$value->category_b."\">" . "Professor universit??rio"."</option>"; break;                                    
                        case "Computer Teacher":              echo "<option value=\"".$value->category_b."\">" . "Professor de inform??tica"."</option>"; break;              
                        case "Elementary Teacher":            echo "<option value=\"".$value->category_b."\">" . "Professor do ensino fundamental"."</option>"; break;              
                        case "English Teacher":               echo "<option value=\"".$value->category_b."\">" . "Professor de l??ngua inglesa"."</option>"; break;                                  
                        case "ESL Teacher":                   echo "<option value=\"".$value->category_b."\">" . "Professor de Ingl??s como l??ngua estrangeira"."</option>"; break;              
                        case "History Teacher":               echo "<option value=\"".$value->category_b."\">" . "Professor de hist??ria"."</option>"; break;              
                        case "Kindergarten Teacher":          echo "<option value=\"".$value->category_b."\">" . "Professor de jardim de inf??ncia"."</option>"; break;                                  
                        case "Math Teacher":                  echo "<option value=\"".$value->category_b."\">" . "Professor de matem??tica"."</option>"; break;                              
                        case "Music Teacher":                 echo "<option value=\"".$value->category_b."\">" . "Professor de m??sica"."</option>"; break;              
                        case "Other Teacher":                 echo "<option value=\"".$value->category_b."\">" . "Professor (outros)"."</option>"; break;                              
                        case "PE Teacher":                    echo "<option value=\"".$value->category_b."\">" . "Professor de educa????o f??sica"."</option>"; break;                                  
                        case "Science Teacher":               echo "<option value=\"".$value->category_b."\">" . "Professor de ci??ncias"."</option>"; break;          
                        case "Highschool Teacher":            echo "<option value=\"".$value->category_b."\">" . "Professor do ensino m??dio"."</option>"; break;      
                        case "Training/Seminar":              echo "<option value=\"".$value->category_b."\">" . "Treinamento/Semin??rio"."</option>"; break;                                  
                        case "Translation":                   echo "<option value=\"".$value->category_b."\">" . "Tradu????o"."</option>"; break;                              
                        case "Influence Centers":             echo "<option value=\"".$value->category_b."\">" . "Centros de influ??ncia"."</option>"; break;                                              
                        case "Video Production":              echo "<option value=\"".$value->category_b."\">" . "Produ????o de video"."</option>"; break;                              
                        case "Youth Ministry":                echo "<option value=\"".$value->category_b."\">" . "Minist??rio Jovem"."</option>"; break;      
                    }                        
                }elseif(LANGUAGE == "ES"){
                    switch($value->category_b){
                        case "Academic":                      echo "<option value=\"".$value->category_b."\">" . "Acad??mico"."</option>"; break;                                   
                        case "Accounting/Business":           echo "<option value=\"".$value->category_b."\">" . "Contabilidad / Negocios"."</option>"; break;                                       
                        case "Administration":                echo "<option value=\"".$value->category_b."\">" . "Administraci??n"."</option>"; break;                                  
                        case "Social Work":                   echo "<option value=\"".$value->category_b."\">" . "Servicio social"."</option>"; break;                               
                        case "Agriculture":                   echo "<option value=\"".$value->category_b."\">" . "Agricultura"."</option>"; break;                              
                        case "Chaplain":                      echo "<option value=\"".$value->category_b."\">" . "Capellan??a"."</option>"; break;                           
                        case "Church/Evangelism":             echo "<option value=\"".$value->category_b."\">" . "Iglesia / Evangelismo"."</option>"; break;                                    
                        case "Cleaning":                      echo "<option value=\"".$value->category_b."\">" . "Limpieza"."</option>"; break;                       
                        case "Communications":                echo "<option value=\"".$value->category_b."\">" . "Comunicaciones"."</option>"; break;                                         
                        case "Computer/Website":              echo "<option value=\"".$value->category_b."\">" . "Computadoras / Sitios"."</option>"; break;                                         
                        case "Construction":                  echo "<option value=\"".$value->category_b."\">" . "Construcci??n"."</option>"; break;                                   
                        case "Coordinator":                   echo "<option value=\"".$value->category_b."\">" . "Coordinaci??n"."</option>"; break;                                     
                        case "Counselor":                     echo "<option value=\"".$value->category_b."\">" . "Asesoramiento"."</option>"; break;                       
                        case "Dean":                          echo "<option value=\"".$value->category_b."\">" . "Preceptor??a"."</option>"; break;                   
                        case "Dental":                        echo "<option value=\"".$value->category_b."\">" . "Dentista"."</option>"; break;                               
                        case "Engineer":                      echo "<option value=\"".$value->category_b."\">" . "Ingenieria"."</option>"; break;                               
                        case "Event Organizer":               echo "<option value=\"".$value->category_b."\">" . "Organizaci??n de eventos"."</option>"; break;                                            
                        case "Graphic Design":                echo "<option value=\"".$value->category_b."\">" . "Dise??o grafico"."</option>"; break;                                               
                        case "Librarian":                     echo "<option value=\"".$value->category_b."\">" . "Bibliotec??rio"."</option>"; break;                                       
                        case "Maintenance":                   echo "<option value=\"".$value->category_b."\">" . "Mantenimiento"."</option>"; break;                                       
                        case "Custodial":                     echo "<option value=\"".$value->category_b."\">" . "Conserje"."</option>"; break;                               
                        case "Electrician":                   echo "<option value=\"".$value->category_b."\">" . "Electricista"."</option>"; break;                                       
                        case "Mechanic":                      echo "<option value=\"".$value->category_b."\">" . "Mec??nico"."</option>"; break;                               
                        case "Plumber":                       echo "<option value=\"".$value->category_b."\">" . "Bombero hidr??ulico"."</option>"; break;                                       
                        case "Marketing":                     echo "<option value=\"".$value->category_b."\">" . "M??rketing"."</option>"; break;                                       
                        case "Medical":                       echo "<option value=\"".$value->category_b."\">" . "Doctor"."</option>"; break;                           
                        case "Nursing":                       echo "<option value=\"".$value->category_b."\">" . "Enfermero"."</option>"; break;                                       
                        case "Nutritionist":                  echo "<option value=\"".$value->category_b."\">" . "Nutricionista"."</option>"; break;                                              
                        case "Office":                        echo "<option value=\"".$value->category_b."\">" . "Escritorio"."</option>"; break;                                       
                        case "Orphanage":                     echo "<option value=\"".$value->category_b."\">" . "Orfanato"."</option>"; break;                                       
                        case "Pastor/Evangelist":             echo "<option value=\"".$value->category_b."\">" . "Pastor / Evangelista"."</option>"; break;                                                     
                        case "Physio Therapist":              echo "<option value=\"".$value->category_b."\">" . "Fisioterapeuta"."</option>"; break;                                                           
                        case "Pilot":                         echo "<option value=\"".$value->category_b."\">" . "Piloto"."</option>"; break;                                       
                        case "Principal":                     echo "<option value=\"".$value->category_b."\">" . "Director"."</option>"; break;                                                  
                        case "Secretarial":                   echo "<option value=\"".$value->category_b."\">" . "Secretar??a"."</option>"; break;                           
                        case "Software Development":          echo "<option value=\"".$value->category_b."\">" . "Desarrollo de software"."</option>"; break;                                               
                        case "Speech Therapy/Pathologist":    echo "<option value=\"".$value->category_b."\">" . "Terapeuta del habla / pat??logo"."</option>"; break;                                   
                        case "Religion Teacher":              echo "<option value=\"".$value->category_b."\">" . "Profesor de religi??n"."</option>"; break;                  
                        case "College Teacher":               echo "<option value=\"".$value->category_b."\">" . "Profesor universitario"."</option>"; break;                                    
                        case "Computer Teacher":              echo "<option value=\"".$value->category_b."\">" . "Profesor de inform??tica"."</option>"; break;              
                        case "Elementary Teacher":            echo "<option value=\"".$value->category_b."\">" . "Maestro de escuela primaria"."</option>"; break;              
                        case "English Teacher":               echo "<option value=\"".$value->category_b."\">" . "Profesor de ingles"."</option>"; break;                                  
                        case "ESL Teacher":                   echo "<option value=\"".$value->category_b."\">" . "Profesor de ingl??s como lengua extranjera"."</option>"; break;              
                        case "History Teacher":               echo "<option value=\"".$value->category_b."\">" . "Profesor de Historia"."</option>"; break;              
                        case "Kindergarten Teacher":          echo "<option value=\"".$value->category_b."\">" . "Maestra de kindergarten"."</option>"; break;                                  
                        case "Math Teacher":                  echo "<option value=\"".$value->category_b."\">" . "Profesor de matem??ticas"."</option>"; break;                              
                        case "Music Teacher":                 echo "<option value=\"".$value->category_b."\">" . "Profesor de m??sica"."</option>"; break;              
                        case "Other Teacher":                 echo "<option value=\"".$value->category_b."\">" . "Maestro (otros)"."</option>"; break;                              
                        case "PE Teacher":                    echo "<option value=\"".$value->category_b."\">" . "Profesor de educaci??n f??sica"."</option>"; break;                                  
                        case "Science Teacher":               echo "<option value=\"".$value->category_b."\">" . "Profesor de ciencias"."</option>"; break;          
                        case "Highschool Teacher":            echo "<option value=\"".$value->category_b."\">" . "Maestro de secundaria"."</option>"; break;      
                        case "Training/Seminar":              echo "<option value=\"".$value->category_b."\">" . "Capacitaci??n / Seminario"."</option>"; break;                                  
                        case "Translation":                   echo "<option value=\"".$value->category_b."\">" . "Traducci??n"."</option>"; break;                              
                        case "Influence Centers":             echo "<option value=\"".$value->category_b."\">" . "Centros de influencia"."</option>"; break;                                              
                        case "Video Production":              echo "<option value=\"".$value->category_b."\">" . "Producci??n de v??deo"."</option>"; break;                              
                        case "Youth Ministry":                echo "<option value=\"".$value->category_b."\">" . "Ministerio de J??venes"."</option>"; break;      
                     
                    } 
                }else{
                    echo "<option value=\"".$value->category_b."\">" . $value->category_b."</option>";  
                }
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
        
    }

    function getGreatAreaDropdown(){
        $data = json_decode(file_get_contents('php://input'), true);

        $model = $this->loadModel("call_model");
        $result = $model->getGreatAreaDropdown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "PT": $message = "??rea de atividade"; break;
            case "ES": $message = "??rea de actividad"; break;
            default:   $message = "Activity Area"; break;
        }

        echo count($result);

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                if(LANGUAGE == "PT"){
                    switch($value->category_a){
                        case 'Church':      echo "<option value=\"".$value->category_a."\">" . "Obra b??blica"."</option>"; break;
                        case 'Education':   echo "<option value=\"".$value->category_a."\">" . "Educa????o"."</option>"; break;
                        case 'Health:':     echo "<option value=\"".$value->category_a."\">" . "Sa??de"."</option>"; break;
                        case 'Heavy':       echo "<option value=\"".$value->category_a."\">" . "Servi??os gerais"."</option>"; break;
                        case 'Office':      echo "<option value=\"".$value->category_a."\">" . "Administrativo"."</option>"; break;
                        case 'Social Work': echo "<option value=\"".$value->category_a."\">" . "Servi??o social"."</option>"; break;
                        case 'Tech':        echo "<option value=\"".$value->category_a."\">" . "Servi??os especializados"."</option>"; break;
                    }                        
                }elseif(LANGUAGE == "ES"){
                    switch($value->category_a){
                        case 'Church':      echo "<option value=\"".$value->category_a."\">" . "Obra b??blica"."</option>"; break;
                        case 'Education':   echo "<option value=\"".$value->category_a."\">" . "Educaci??n"."</option>"; break;
                        case 'Health:':     echo "<option value=\"".$value->category_a."\">" . "Salud"."</option>"; break;
                        case 'Heavy':       echo "<option value=\"".$value->category_a."\">" . "Servicios generales"."</option>"; break;
                        case 'Office':      echo "<option value=\"".$value->category_a."\">" . "Administrativo"."</option>"; break;
                        case 'Social Work': echo "<option value=\"".$value->category_a."\">" . "Servicio social"."</option>"; break;
                        case 'Tech':        echo "<option value=\"".$value->category_a."\">" . "Servicios especializados"."</option>"; break;
                    } 
                }else{
                    switch($value->category_a){
                        case 'Church':      echo "<option value=\"".$value->category_a."\">" . "Biblical work"."</option>"; break;
                        case 'Education':   echo "<option value=\"".$value->category_a."\">" . "Education"."</option>"; break;
                        case 'Health:':     echo "<option value=\"".$value->category_a."\">" . "Health"."</option>"; break;
                        case 'Heavy':       echo "<option value=\"".$value->category_a."\">" . "General Services"."</option>"; break;
                        case 'Office':      echo "<option value=\"".$value->category_a."\">" . "Administrative"."</option>"; break;
                        case 'Social Work': echo "<option value=\"".$value->category_a."\">" . "Social service"."</option>"; break;
                        case 'Tech':        echo "<option value=\"".$value->category_a."\">" . "Specialized services"."</option>"; break;
                    }   
                }
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
        
    }

    function getCountryDropDown(){
        $data = json_decode(file_get_contents('php://input'), true);
        
        $model = $this->loadModel("call_model");
        $result = $model->getCountryDropDown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "EN": $message = "Country"; break;
            case "PT": $message = "Pa??s"; break;
            case "ES": $message = "Pa??s"; break;
        }
        // echo count($result);
        // echo $_POST["continent"];

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                echo "<option value=\"".$value->code."\">" . $value->translation."</option>";
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
        
    }

    function getContinentDropDown(){
        $data = json_decode(file_get_contents('php://input'), true);
        
        $model = $this->loadModel("call_model");
        $result = $model->getContinentDropDown(strtolower(LANGUAGE),$data["category_a"], $data["category_b"], $data["continent"], $data["country"], $data["marital"], $data["children"], $data["gender"]);
        $lang = strtolower(LANGUAGE);
        $message = "";
        $local_code = "";

        switch(LANGUAGE){
            case "PT": $message = "Todo o mundo"; break;
            case "ES": $message = "Todo el mundo"; break;
            default:   $message = "Entire world"; break;
        }

        if(count($result) > 0){
            echo "<option selected value=\"--\">".$message."</option>";
            foreach ($result as $key => $value){
                if(LANGUAGE == "PT"){
                    switch($value->continent){
                        case '10/40 Window':    echo "<option value=\"".$value->continent."\">" . "Janela 10/40"."</option>"; break;
                        case 'Africa':          echo "<option value=\"".$value->continent."\">" . "??frica"."</option>"; break;
                        case 'Antarctica':      echo "<option value=\"".$value->continent."\">" . "Ant??rtida"."</option>"; break;
                        case 'Asia':            echo "<option value=\"".$value->continent."\">" . "??sia"."</option>"; break;
                        case 'Central America': echo "<option value=\"".$value->continent."\">" . "Am??rica Central"."</option>"; break;
                        case 'Europe':          echo "<option value=\"".$value->continent."\">" . "Europa"."</option>"; break;
                        case 'North America':   echo "<option value=\"".$value->continent."\">" . "Am??rica do Norte"."</option>"; break;
                        case 'Oceania':         echo "<option value=\"".$value->continent."\">" . "Oceania"."</option>"; break;
                        case 'South America':   echo "<option value=\"".$value->continent."\">" . "Am??rica do Sul"."</option>"; break;
                    }                        
                }elseif(LANGUAGE == "ES"){
                    switch($value->continent){
                        case '10/40 Window':    echo "<option value=\"".$value->continent."\">" . "Ventana 10/40"."</option>"; break;
                        case 'Africa':          echo "<option value=\"".$value->continent."\">" . "??frica"."</option>"; break;
                        case 'Antarctica':      echo "<option value=\"".$value->continent."\">" . "Ant??rtida"."</option>"; break;
                        case 'Asia':            echo "<option value=\"".$value->continent."\">" . "Asia"."</option>"; break;
                        case 'Central America': echo "<option value=\"".$value->continent."\">" . "Centroam??rica"."</option>"; break;
                        case 'Europe':          echo "<option value=\"".$value->continent."\">" . "Europa"."</option>"; break;
                        case 'North America':   echo "<option value=\"".$value->continent."\">" . "Am??rica del norte"."</option>"; break;
                        case 'Oceania':         echo "<option value=\"".$value->continent."\">" . "Ocean??a"."</option>"; break;
                        case 'South America':   echo "<option value=\"".$value->continent."\">" . "Sudamerica"."</option>"; break;
                    } 
                }else{
                    echo "<option value=\"".$value->continent."\">" . $value->continent."</option>";
                }
            }
        }else{
            echo "<option selected value=\"--\"> -- </option>";
        }
        
    }
}
?>
