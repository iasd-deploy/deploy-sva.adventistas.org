<?php

class Schools extends Controller {
	
	// function index()
	// {
	// 	$template = $this->loadView('schools/main');
	// 	$template->render();
	// }

	function index()
	{
		$current_page = '/schools';
		$groups_model = $this->loadModel("groups_model");
		$divisions = $groups_model->getOrgList(strtolower(LANGUAGE),"GC");
		$unions = $groups_model->getOrgList(strtolower(LANGUAGE),"SAD");
		$schools_model = $this->loadModel("schools_model");


		$auxlang = "";
		if(strtolower(LANGUAGE) != "en"){
			$auxlang = "_".strtolower(LANGUAGE);
		}
		$schools = $schools_model->getSchools($auxlang);


		$template = $this->loadView('schools/main');
		$template->set("divisions", $divisions);
		$template->set("unions", $unions);
		$template->set("schools", $schools);
		$template->set("current", "schools");
		$template->render();
	}

	function orgs($code){
		echo $current_page;
		$model = $this->loadModel("groups_model");
		$result = $model->getOrgList(strtolower(LANGUAGE),$code);
		$lang = strtolower(LANGUAGE);
		$message = "";
		$local_code = "";

		switch(LANGUAGE){
			case "EN": $message = "Please select an option"; break;
			case "PT": $message = "Selecione uma opção"; break;
			case "ES": $message = "Seleccione una opcion"; break;
		}

		if(count($result) > 0){
			echo "<option selected value=\"--\">".$message."</option>";
			foreach ($result as $key => $value){
				if(LANGUAGE == "PT" && $value->code_pt !== NULL){
					echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code_pt.")" . "</option>";
				}elseif(LANGUAGE == "ES" && $value->code_es !== NULL){
					echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code_es.")" . "</option>";
				}else{
					echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code.")" . "</option>";
				}
			}
		}else{
			echo "<option selected value=\"--\"> -- </option>";
		}
		
	}

	function dropdown($union){
		if($union == '' or $union == 'base' or $union == null){
			$this->getAll();
		}else{
			$this->getFiltered($union);
		}
	}

	function getAll(){
		$model = $this->loadModel("schools_model");
		$auxlang = "";
		if(strtolower(LANGUAGE) != "en"){
			$auxlang = "_".strtolower(LANGUAGE);
		}
		$result = $model->getSchools($auxlang, $union);
		if(count($result) == 0){
			$this->notfound($union);
		}else{
			$this->list($result);
		}
	}

	function getFiltered($union){
		$model = $this->loadModel("schools_model");
		$auxlang = "";
		if(strtolower(LANGUAGE) != "en"){
			$auxlang = "_".strtolower(LANGUAGE);
		}
		$result = $model->getSchoolsByUnion($auxlang, $union);
		if(count($result) == 0){
			$this->notfound($union);
		}else{
			$this->list($result);
		}
	}

	function list($result){
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
		                    <?php if($value->telefone2 != "" and $value->telefone2 != null){ ?>
	                          <tr><td><i class="fa fa-phone"></i></td><td class="text-left"><?php echo $value->telefone2 ?></td></tr>
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
	function notfound($union){

// exit(echo BASE_CDN."images/schools/"."not-found_".strtolower(LANGUAGE)."png");

		$model = $this->loadModel("schools_model");
		$result = $model->getEmail($union);
		$text = "";
		$button = "";
		switch(strtolower(LANGUAGE)){
			case 'en': $text = "A new Send Me Mission School<br>is coming soon"; $button = "Contact the Union AVS"; break;
			case 'es': $text = "Próximamente una nueva<br>Escuela de Misión Send Me!"; $button = "Hablar con el SVA de la Unión"; break;
			case 'pt': $text = "Em breve mais uma<br>Escola de Missão Send Me!"; $button = "Falar com o SVA da União"; break;
		}
		?>

			<div class="row">
				<style>
					/* Centered text */
					.centered {
					  position: absolute;
					  top: 50%;
					  left: 40%;
					  transform: translate(-50%, -50%);
					}
				</style>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
					<div>
					  <img src="<?php echo BASE_CDN."images/schools/"."board2.png";?>" alt="" alt="" class="img-responsive img-fullwidth">
					  
					  <div class="centered text-white text-center">
					  	<p class="text-center" style="font-size:2.2vh;"><?php echo $text; ?><br>
					  	<a class="btn btn-dark btn-sm" style="font-size:2.2vh;" href="<?php echo "mailto:".$result; ?>"><?php echo $button; ?></a>
					  </div>
					
					</div>
				</div>
				</div>
			</div>

		<?php
	}
}
?>