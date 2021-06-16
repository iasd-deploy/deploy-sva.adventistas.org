<?php

class Volunteers extends Controller {
	
	function index()
	{
		//$template = $this->loadView('main_view');
		//$template->render();
	}

	function testimonies($testimony = null){
		if($testimony == null){
			$template = $this->loadView('volunteers/testimonies');
		}else{
			$template = $this->loadView('volunteers/testimony'.$testimony);
		}
		
		$template->render();
	}

	function life(){

		$template = $this->loadView('volunteers/life');
		$template->render();

	}

	function bevolunteer(){
		$template = $this->loadView('volunteers/bevolunteer');
		$template->render();
	}




    
}

?>
