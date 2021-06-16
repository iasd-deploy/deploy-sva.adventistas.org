<?php 
$config['base_url'] = $_ENV["BASE_URL"]; // Base URL including trailing slash (e.g. http://localhost/)
$config["base_cdn"] = $_ENV["BASE_CDN"];

$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = $_ENV["MYSQL_HOST"].":".$_ENV["MYSQL_PORT"]; // Database host (e.g. localhost)
$config['db_name'] = $_ENV["MYSQL_DB_NAME"]; // Database name
//$config['db_username'] = 'avsbox'; // Database username
//$config['db_password'] = 'wasliebstdu7?J'; // Database password
$config['db_username'] = $_ENV["MYSQL_USER"]; // Database username
$config['db_password'] = $_ENV["MYSQL_PWD"]; // Database password

//Languages
$config["load_language"] = "files";
$config["available_langs"] = array("es" => "Spanish", "pt" => "Portugues", "en" => "English", "de" => "German", "fr" => "French");
?>
