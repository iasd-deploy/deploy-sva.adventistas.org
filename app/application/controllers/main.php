<?php

class Main extends Controller {
	
	function index()
	{
            $latest_calls_model = $this->loadModel("latest_calls_model");
            $latest_calls = $latest_calls_model->getLatestCalls(strtolower(LANGUAGE));
            $template = $this->loadView('main_view');
            $template->set("latest_calls", $latest_calls);
            $template->render();
	}

	function test(){
		$template = $this->loadView("test_main");
		$template->render();
	}
    
}

?>
