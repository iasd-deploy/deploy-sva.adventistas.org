<?php

class View {

	private $pageVars = array();
	private $template;

	public function __construct($template)
	{
		global $config, $langData;
		if($config["load_language"] == "views"){
			$this->template = APP_DIR .'views/'.strtolower(LANGUAGE).'/'. $template .'.php';
		}else{
			$this->template = APP_DIR .'views/'. $template .'.php';
		}
	}

	public function set($var, $val)
	{
		$this->pageVars[$var] = $val;
	}

	public function render()
	{
		global $config; 
		extract($this->pageVars);

		ob_start();
		require($this->template);
		echo ob_get_clean();
	}
    
}

?>