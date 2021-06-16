<?php 
$config['base_url'] = '//sva.adventistas.org/'; // Base URL including trailing slash (e.g. http://localhost/)
$config["base_cdn"] = '//sva.adventistas.org/static/';

$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = $_ENV["DB_HOST"]; // Database host (e.g. localhost)
$config['db_name'] = $_ENV["DB_NAME"]; // Database name
//$config['db_username'] = 'avsbox'; // Database username
//$config['db_password'] = 'wasliebstdu7?J'; // Database password
$config['db_username'] = $_ENV["DB_USER"]; // Database username
$config['db_password'] = $_ENV["DB_PASSWORD"]; // Database password

//Languages
$config["load_language"] = "files";
$config["available_langs"] = array("es" => "Spanish", "pt" => "Portugues", "en" => "English", "de" => "German", "fr" => "French");
?>
