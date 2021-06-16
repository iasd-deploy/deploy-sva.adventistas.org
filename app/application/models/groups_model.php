<?php

class Groups_model extends Model {
    
        public function getHeaders($lang){
            $result = $this->query("select 
                `a.call_id` as 'call_id', 
                `a.pos_title` as 'pos_title', 
                `a.date_up` as 'date_up', 
                `b.desc_header` as 'desc_header', 
                `b.beg_date` as 'beg_date', 
                `b.end_date` as 'end_date', 
                `b.urgent` as 'urgent', 
                `b.service_len` as 'service_len', 
                `b.duties` as 'duties',
                `b.stipend` as 'stipend', 
                `b.interview` as 'interview', 
                `b.a_dress` as 'a_dress', 
                `b.u_dress` as 'u_dress', 
                `d.lodging` as 'lodging', 
                `d.gender` as 'gender', 
                `d.age` as 'age', 
                `d.marital` as 'marital', 
                `d.children` as'children',
                `e.experience` as 'experience', 
                `e.languages` as 'languages', 
                `e.skills` as 'skills', 
                `c.currency` as 'currency', 
                `c.fin_type` as 'fin_type', 
                `c.stipend` as 'stipend', 
                `c.raise` as 'raise', 
                `c.additional` as 'additional',
                `g.city` as 'city', 
                `g.airport` as 'airport', 
                `g.pickup` as 'pickup', 
                `g.visa` as 'visa', 
                `g.visa_type` as 'visa_type', 
                `f.org_name` as 'org_name', 
                `f.division` as 'division', 
                `f.country` as 'country', 
                `f.add_info` as 'add_info',
                `callpage` as 'callpage',
                `avs` as 'avs'
                from tb_headers where trad_lan = \"".$lang."\" ;");
            return $result;
        }
	
	public function getOrgList($lang,$org_code){
            $result = $this->query("select * from organizations where parent = '".$org_code."';");
            return $result;
	}

    public function getOrg($lang,$org_code){
            $result = $this->query("select * from organizations where code = '".$org_code."';");
            $text = "";
            if(count($result) > 0){
                foreach ($result as $key => $value){
                    if($lang == "pt" && $value->code_pt !== NULL){
                        $text = $value->$lang." (".$value->code_pt.")";
                    }elseif($lang == "es" && $value->code_es !== NULL){
                        $text = $value->$lang." (".$value->code_es.")";
                    }else{
                        $text = $value->$lang." (".$value->code.")";
                    }
                }
            }
            return $text;
    }
}

?>
