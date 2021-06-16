<?php

class Resources extends Controller {
	
	function index()
	{
		$template = $this->loadView('resources/main');
		$template->render();
	}


    
}

?>
