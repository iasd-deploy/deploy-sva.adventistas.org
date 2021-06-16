<?php

class MissionChurchs extends Controller {
	
	function index()
	{
		die();
		$template = $this->loadView('missionchurchs/main');
		$template->render();
	}


    
}

?>
