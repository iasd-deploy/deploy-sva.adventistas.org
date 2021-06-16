<?php

class Events extends Controller {
	
	function index()
	{
		die();
		$template = $this->loadView('events/main');
		$template->render();
	}


    
}

?>
