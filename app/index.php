<?php
/*
 * PIP v0.5.3
 */

//Start the Session
session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');
// Includes
require_once(APP_DIR .'config/config.php');
require_once(ROOT_DIR .'system/model.php');
require_once(ROOT_DIR .'system/view.php');
require_once(ROOT_DIR .'system/controller.php');
require_once(ROOT_DIR .'system/pip.php');
global $config;
global $langData;
// Define base URL

define('BASE_URL', $config['base_url']);
define('BASE_CDN', $config['base_cdn']);

pip();


?>
