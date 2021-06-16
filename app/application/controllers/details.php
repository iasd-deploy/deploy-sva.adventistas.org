<?php

class Details extends Controller {
	
	function index()
	{
		$call_details_model = $this->loadModel("call_details_model");
		$result_f = $call_details_model->getCallDetails(strtolower(LANGUAGE),$sr);
                $result_c = $call_details_model->getHeaders(strtolower(LANGUAGE));

		$template = $this->loadView('details/main');
		$template->set("result_f", $result_f);
                $template->set("result_c", $result_c);
		$template->render();
	}


    
}

?>
