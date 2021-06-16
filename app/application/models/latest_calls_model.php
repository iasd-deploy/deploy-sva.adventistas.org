<?php

class Latest_calls_model extends Model {
	
	public function getLatestCalls($lang)
	{
		
		$query = "select * from calls where trad_lan = '".$lang."' limit 6;";
                $result = $this->query($query);
		return $result;
	}

}

?>