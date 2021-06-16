<?php

function pip()
{
	global $config;
	global $langData;

    // Set our defaults
	$controller = $config['default_controller'];
	$action = 'index';
	$url = '';
	
	// Get request url and script url
	$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
	$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

	// Get our url path and trim the / of the left and the right
	if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');

	// Split the url into segments
	$segments = explode('/', $url);

	//Setting languages
	
	$langs = array_keys($config["available_langs"]);
	define('CURRENT_PAGE','');

	if(in_array($segments[0], $langs)){
		define('LANGUAGE', strtoupper($segments[0]));

		if($config["load_language"] == "files"){
			//Language
			include(APP_DIR. 'views/languages/'.$segments[0].'.php');
			$config["lang"] = $langData;
			//Gets the current page for the language selector at the menu

			if(end($segments) == $segments[0]){
				define('CURRENT_PAGE','');
					}
			else{
				define('CURRENT_PAGE', substr($url, 3));
			}
		}
		array_shift($segments);

	}else{
		$lang_browser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if (strpos($url, 'SR') !== false && strlen($url) < 8) {
			header("Location: ".BASE_URL.$lang_browser."/calls/details/".$url);
			die();
		}
		if($lang_browser == "pt" or $lang_browser == "es" or $lang_browser == "en"){
			define('LANGUAGE', strtoupper($lang_browser));
			if($config["load_language"] == "files"){
				//Language
				include (APP_DIR. 'views/languages/'.$lang_browser.'.php');
				$config["lang"] = $langData;
			}
		}else{
			define('LANGUAGE', "EN");
			if($config["load_language"] == "files"){
				//Language
				include (APP_DIR. 'views/languages/'.'en'.'.php');
				$config["lang"] = $langData;
			}
		}
	}

	// Do our default checks
	if(isset($segments[0]) && $segments[0] != '') $controller = $segments[0];
	if(isset($segments[1]) && $segments[1] != '') $action = $segments[1];

	// Get our controller file
	$path = APP_DIR . 'controllers/' . $controller . '.php';
	if(file_exists($path)){
		require_once($path);
	} else {
		//Verificar como directorio
		if(isset($segments[0]) && $segments[0] != '') $directory = $segments[0];
		if(isset($segments[1]) && $segments[1] != '') $controller = $segments[1];
		if(!isset($segments[2])){
			$action = "index";
		}else{
			if(isset($segments[2]) && $segments[2] != '') $action = $segments[2];
		}

		$path = APP_DIR . 'controllers/' . $directory."/".$controller . '.php';
		
		if(file_exists($path)){
			require_once($path);
		}else{
			$controller = $config['error_controller'];
			require_once(APP_DIR . 'controllers/' . $controller . '.php');	
		}
	}

    // Check the action existsasd
	if(!method_exists($controller, $action)){
		$controller = $config['error_controller'];
		require_once(APP_DIR . 'controllers/' . $controller . '.php');
		$action = 'index';
	}
	
	// Create object and call method
	$obj = new $controller;
	die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
}

?>
