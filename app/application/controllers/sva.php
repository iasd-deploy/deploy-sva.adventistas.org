<?php

class Sva extends Controller {
	
	function index()
	{
		//$template = $this->loadView('main_view');
		//$template->render();
	}

	function about($ancla=null){
		
		$template = $this->loadView('sva/about');
		$template->set("ancla", $ancla);
		$template->set("current","about");
		$template->render();
	}


	function contacts(){
		$template = $this->loadView('sva/contact');
		$template->render();
	}





    
}

?>
