<?php

class Login extends Controller {
	
	function index()
	{
		$template = $this->loadView('login/main');
		$template->render();
	}

	



    
}

?>
