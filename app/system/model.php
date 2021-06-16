<?php

class Model {

	private $connection;
	public $mysqli;

	public function __construct()
	{
		global $config;
		/*
		$this->connection = mysql_pconnect($config['db_host'], $config['db_username'], $config['db_password']) or die('MySQL Error: '. mysql_error());
		mysql_select_db($config['db_name'], $this->connection);
		*/

		$this->mysqli = new mysqli($config['db_host'], $config['db_username'], $config['db_password'],$config['db_name']);

		if ($this->mysqli->connect_errno) {
    		echo "Fallo al contenctar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
		}


	}

	public function escapeString($string)
	{
		return mysql_real_escape_string($string);
	}

	public function escapeArray($array)
	{
	    array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function to_date($val)
	{
	    return date('Y-m-d', $val);
	}
	
	public function to_time($val)
	{
	    return date('H:i:s', $val);
	}
	
	public function to_datetime($val)
	{
	    return date('Y-m-d H:i:s', $val);
	}
	
	public function query($qry)
	{
		$this->mysqli->set_charset("utf8");
		$result = $this->mysqli->query($qry);
		if(!$result){
			return $this->mysqli->error;
		}
		
		$resultObjects = array();
		
		while($row = $result->fetch_object()) $resultObjects[] = $row;
		//$result->close();
		return $resultObjects;
	}

	public function execute($qry)
	{
		$this->mysqli->set_charset("utf8");
		$exec = $this->mysqli->query($qry);// or die('MySQL Error: '. mysql_error());
		return $exec;
	}
    
	public function validEmail($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	public function validInt($int){
		return ( preg_match( '/^\d*$/'  , $int) == 1 );
	}

	public function validNotNull($str){
		return !empty($str);
	}

	
	

	public function last_id(){
		return $this->mysqli->insert_id;
	}

   




    
}
?>
