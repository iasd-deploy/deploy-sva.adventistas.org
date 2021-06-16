<?php

class Call_model extends Model {

        public function getFilteredCards($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                select 
                         sr_number,
                         pos_title, 
                         available,
                         idgender as gender,
                         service_len,
                         duties,
                         country,
                         org_name,
                         stipend,
                         stipend_terms
                 from calls '.                  
                'where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' trad_lan = "'.$lang.'";';
                //echo($query);
                $result = $this->query($query);
                return $result;
        }

        public function getFilteredCardsCount($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = 'select 
                        count(*) as count
                from 
                        calls
                  
                where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                        trad_lan = "'.$lang.'"; ';

                $result = $this->query($query);
                return $result;
        }

        public function getChildrenDropDown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                  select 
                        idchildren as code,
                        children as translation
                        from 
                                calls
                    where 
                ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                        trad_lan = "'.$lang.'" 
                        group by idchildren, children order by children asc; ';

                $result = $this->query($query);
                return $result;
        }

        public function getSexDropDown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                  select 
                        idgender as code,
                        gender as translation
                        from 
                                calls
                    where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                        trad_lan = "'.$lang.'" 
                        group by idgender, gender order by idgender asc; ';

                $result = $this->query($query);
                return $result;
        }

        public function getMaritalDropdown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                  select 
                        idmarital as code,
                        marital as translation
                        from 
                                calls
                    where ';


                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                        trad_lan = "'.$lang.'" 
                        group by idmarital, marital order by idmarital asc; ';
                $result = $this->query($query);
                return $result;
        }

        public function getSpecificAreaDropdown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                  select 
                        category_b
                        from 
                                calls
                    where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                         trad_lan = "'.$lang.'" 
                        group by category_b order by category_b asc; ';

                $result = $this->query($query);
                return $result;
        }

        public function getGreatAreaDropdown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                 select 
                        category_a
                        from 
                                calls
                    where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                        trad_lan = "'.$lang.'" 
                        group by category_a order by category_a asc; ';

                $result = $this->query($query);
                return $result;
        }

        public function getCountryDropDown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                 select 
                        idcountry as code,
                        country as translation
                        from 
                                calls
                    where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                         trad_lan = "'.$lang.'" 
                        group by idcountry, country order by idcountry, country asc;  ';
                $result = $this->query($query);
                return $result;
        }


        public function getAllFilters($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
          // select o.continent
          // from tb_call a 
          // inner join tb_req_org g on (a.trad_lan = g.trad_lan and a.sr_number = g.sr_number) 
          // inner join tb_req_org n on (n.sr_number = g.sr_number and n.trad_lan = "en") 
          // left join tb_country o on (n.country = o.name_en) where a.trad_lan = "pt" and a.active = "yes" 
          
          
          $query = '
            select 
              o.continent as continent,
              category_a(i.pos_types) as category_a,
              (l.marital) as marital_code,
              e.marital as translation_marital,
              (l.gender) as gender_code,
              e.gender as translation_gender,
              (l.children) as children_code,
              e.children as translation_children
            from tb_call a 
                inner join tb_description b on (a.trad_lan = b.trad_lan and a.sr_number = b.sr_number) 
                inner join tb_description i on (i.sr_number = b.sr_number and i.trad_lan = "en") 
                inner join tb_req_org g on (a.trad_lan = g.trad_lan and a.sr_number = g.sr_number) 
                inner join tb_lodging e on (a.trad_lan = e.trad_lan and a.sr_number = e.sr_number) 
                inner join tb_lodging l on (l.sr_number = e.sr_number and l.trad_lan = "en") 
                inner join tb_req_org n on (n.sr_number = g.sr_number and n.trad_lan = "en") 
                left join tb_country o on (n.country = o.name_en)
              
              where ';

          if($category_a != ""){
            $query = $query . ' category_a(i.pos_types) = "'.$category_a.'" and ';
          }
          if($category_b != ""){
            $query = $query . ' category_b(i.pos_types) = "'.$category_b.'" and ';
          }
          if($continent != ""){
            $query = $query . ' o.continent = "'.$continent.'" and ';
          }
          if($country != ""){
            $query = $query . ' n.country = "'.$country.'" and ';
          }
          if($marital != ""){
            $query = $query . ' (l.marital = "'.$marital.'" or l.marital = "either") and ';
          }
          if($children != ""){
            $query = $query . ' l.children = "'.$children.'" and ';
          }
          if($gender != ""){
            $query = $query . ' (l.gender = "'.$gender.'" or l.gender = "either") and ';
          }
          $query = $query . ' 
                  a.trad_lan = "'.$lang.'" and
                  a.active = "yes";  ';
          $result = $this->query($query);
          return $result;    
  }

        public function getContinentDropDown($lang, $category_a, $category_b, $continent, $country, $marital, $children, $gender){
                $query = '
                  select 
                        continent
                        from 
                                calls
                    where ';

                if($category_a != ""){
                  $query = $query . ' category_a = "'.$category_a.'" and ';
                }
                if($category_b != ""){
                  $query = $query . ' category_b = "'.$category_b.'" and ';
                }
                if($continent != ""){
                  $query = $query . ' continent = "'.$continent.'" and ';
                }
                if($country != ""){
                  $query = $query . ' idcountry = "'.$country.'" and ';
                }
                if($marital != ""){
                  $query = $query . ' (idmarital = "'.$marital.'" or idmarital = "either") and ';
                }
                if($children != ""){
                  $query = $query . ' idchildren = "'.$children.'" and ';
                }
                if($gender != ""){
                  $query = $query . ' (idgender = "'.$gender.'" or idgender = "either") and ';
                }
                $query = $query . ' 
                trad_lan = "'.$lang.'" 
                     
                group by continent order by continent asc;  ';

                $result = $this->query($query);
                return $result;    
        }
	
	public function getCalls($lang)
	{

                $result = $this->query('SELECT
                        a.url,
                        a.call_type,
                        a.sr_number, 
                        a.pos_title, 
                        d.org_name, 
                        d.division, 
                        d.country, 
                        b.lat, 
                        b.lng,
                        c.details,
                        c.LT,
                        c.ST,
                        e.id_emoji,
                        h.category_a,
                        i.category_b
                        from tb_call a left join tb_travel b on(a.sr_number = b.sr_number and a.trad_lan = b.trad_lan) 
                        left join tb_req_org d on (a.sr_number = d.sr_number and a.trad_lan = d.trad_lan) 
                        left join tb_headers c on (a.trad_lan = c.trad_lan)
                        left join tb_country e on ((select country from tb_req_org where sr_number = a.sr_number and trad_lan = "en") = e.name_en)
                        join (
                                select sr_number,                     
                                        if( pos_types like "Academic%",                      "Education",                     
                    if( pos_types like "Accounting%",                    "Office",                     
                    if( pos_types like "Administration%",                "Office",                     
                    if( pos_types like "ADRA%",                          "Social Work",                     
                    if( pos_types like "Agriculture%",                   "Heavy",                     
                    if( pos_types like "Chaplain%",                      "Church",                     
                    if( pos_types like "Church%",                        "Church",                     
                    if( pos_types like "Cleaning%",                      "Heavy",                     
                    if( pos_types like "Communications%",                "Tech",                     
                    if( pos_types like "Computer%",                      "Tech",                     
                    if( pos_types like "Construction%",                  "Heavy",                     
                    if( pos_types like "Coordinator%",                   "Office",                     
                    if( pos_types like "Counselor%",                     "Church",                     
                    if( pos_types like "Dean%",                          "Church",                     
                    if( pos_types like "Dental%",                        "Health",                     
                    if( pos_types like "Engineer%",                      "Heavy",                     
                    if( pos_types like "Event%",                         "Office",                     
                    if( pos_types like "Graphic%",                       "Tech",                     
                    if( pos_types like "Librarian%",                     "Education",                     
                    if( pos_types like "Maintenance%",                   "Heavy",                     
                    if( pos_types like "Maintenance - Custodial%",       "Heavy",                     
                    if( pos_types like "Maintenance - Electrician%",     "Heavy",                     
                    if( pos_types like "Maintenance - Mechanic%",        "Heavy",                     
                    if( pos_types like "Maintenance - Plumber%",         "Heavy",                     
                    if( pos_types like "Marketing%",                     "Office",                     
                    if( pos_types like "Medical%",                       "Health",                     
                    if( pos_types like "Nursing%",                       "Health",                     
                    if( pos_types like "Nutritionist%",                  "Health",                     
                    if( pos_types like "Office%",                        "Office",                     
                    if( pos_types like "Orphanage%",                     "Social Work",                     
                    if( pos_types like "Pastor%",                        "Church",                     
                    if( pos_types like "Physical%",                      "Health",                     
                    if( pos_types like "Pilot%",                         "Heavy",                     
                    if( pos_types like "Principal%",                     "Education",                     
                    if( pos_types like "Secretarial%",                   "Office",                     
                    if( pos_types like "Software%",                      "Tech",                     
                    if( pos_types like "Speech%",                        "Health",                     
                    if( pos_types like "Teaching – Bible/Religion%",     "Education",                     
                    if( pos_types like "Teaching – College%",            "Education",                     
                    if( pos_types like "Teaching – Computer%",           "Education",                     
                    if( pos_types like "Teaching – Elementary%",         "Education",                     
                    if( pos_types like "Teaching – English/Religion%",   "Education",                     
                    if( pos_types like "Teaching – ESL%",                "Education",                     
                    if( pos_types like "Teaching – History%",            "Education",                     
                    if( pos_types like "Teaching – Kindergarten%",       "Education",                     
                    if( pos_types like "Teaching – Math%",               "Education",                     
                    if( pos_types like "Teaching – Music%",              "Education",                     
                    if( pos_types like "Teaching – Other%",              "Education",                     
                    if( pos_types like "Teaching – PE%",                 "Education",                     
                    if( pos_types like "Teaching – Science%",            "Education",                     
                    if( pos_types like "Teaching – Secondary%",          "Education",                     
                    if( pos_types like "Training%",                      "Education",                     
                    if( pos_types like "Translation%",                   "Office",                     
                    if( pos_types like "Urban%",                         "Social Work",                     
                    if( pos_types like "Video Production%",              "Tech",                     
                    if( pos_types like "Youth Ministry%",                "Church",                                                                             
                                                "Other"                         ))))))))))))))))))))))))))))))))))))))))))))))))))))))))                         
                        as category_a                 
                        from tb_description where trad_lan = "en") as h                 
                                                        on(a.sr_number = h.sr_number) 
                                join (                 
                                                select sr_number,                     
                                                        if( pos_types like "Academic%",                      "Academic",                     
                            if( pos_types like "Accounting%",                    "Accounting/Business",                     
                            if( pos_types like "Administration%",                "Administration",                     
                            if( pos_types like "ADRA%",                          "Social Work",                     
                            if( pos_types like "Agriculture%",                   "Agriculture",                    
                            if( pos_types like "Chaplain%",                      "Chaplain",                    
                            if( pos_types like "Church%",                        "Church/Evangelism",                    
                            if( pos_types like "Cleaning%",                      "Cleaning",                   
                            if( pos_types like "Communications%",                "Communications",                    
                            if( pos_types like "Computer%",                      "Computer/Website",                  
                            if( pos_types like "Construction%",                  "Construction",                
                            if( pos_types like "Coordinator%",                   "Coordinator",                   
                            if( pos_types like "Counselor%",                     "Counselor",                  
                            if( pos_types like "Dean%",                          "Dean",                 
                            if( pos_types like "Dental%",                        "Dental",                    
                            if( pos_types like "Engineer%",                      "Engineer",                
                            if( pos_types like "Event%",                         "Event Organizer",              
                            if( pos_types like "Graphic%",                       "Graphic Design",                  
                            if( pos_types like "Librarian%",                     "Librarian",                 
                            if( pos_types like "Maintenance%",                   "Maintenance",              
                            if( pos_types like "Maintenance - Custodial%",       "Custodial",               
                            if( pos_types like "Maintenance - Electrician%",     "Electrician",                
                            if( pos_types like "Maintenance - Mechanic%",        "Mechanic",                
                            if( pos_types like "Maintenance - Plumber%",         "Plumber",                   
                            if( pos_types like "Marketing%",                     "Marketing",                
                            if( pos_types like "Medical%",                       "Medical",                
                            if( pos_types like "Nursing%",                       "Nursing",                   
                            if( pos_types like "Nutritionist%",                  "Nutritionist",                   
                            if( pos_types like "Office%",                        "Office",                  
                            if( pos_types like "Orphanage%",                     "Orphanage",               
                            if( pos_types like "Pastor%",                        "Pastor/Evangelist",               
                            if( pos_types like "Physical%",                      "Physio Therapist",                 
                            if( pos_types like "Pilot%",                         "Pilot",                   
                            if( pos_types like "Principal%",                     "Principal",                 
                            if( pos_types like "Secretarial%",                   "Secretarial",            
                            if( pos_types like "Software%",                      "Software Development",            
                            if( pos_types like "Speech%",                        "Speech Therapy/Pathologist",          
                            if( pos_types like "Teaching – Bible/Religion%",     "Religion Teacher",              
                            if( pos_types like "Teaching – College%",            "College Teacher",                  
                            if( pos_types like "Teaching – Computer%",           "Computer Teacher",           
                            if( pos_types like "Teaching – Elementary%",         "Elementary Teacher",         
                            if( pos_types like "Teaching – English/Religion%",   "English Teacher",             
                            if( pos_types like "Teaching – ESL%",                "ESL Teacher",               
                            if( pos_types like "Teaching – History%",            "History Teacher",          
                            if( pos_types like "Teaching – Kindergarten%",       "Kindergarten Teacher",        
                            if( pos_types like "Teaching – Math%",               "Math Teacher",              
                            if( pos_types like "Teaching – Music%",              "Music Teacher",            
                            if( pos_types like "Teaching – Other%",              "Other Teacher",             
                            if( pos_types like "Teaching – PE%",                 "PE Teacher",                  
                            if( pos_types like "Teaching – Science%",            "Science Teacher",       
                            if( pos_types like "Teaching – Secondary%",          "Highschool Teacher",
                            if( pos_types like "Training%",                      "Training/Seminar",               
                            if( pos_types like "Translation%",                   "Translation",                
                            if( pos_types like "Urban%",                         "Influence Centers",              
                            if( pos_types like "Video Production%",              "Video Production",        
                            if( pos_types like "Youth Ministry%",                "Youth Ministry",                                                   
                            "Other"                         ))))))))))))))))))))))))))))))))))))))))))))))))))))))))                        
                                                                as category_b                 
                                from tb_description where trad_lan = "en") as i                 
                                                                        on(a.sr_number = i.sr_number) 
                        
                        
                        
                        
                        where (a.call_id like "%SAD-IN%" or a.call_id not like "%IN%") and lat != "" and lng != ""
                        and a.trad_lan like "%'.$lang.'" and a.active = "yes"');





		// $result = $this->query('SELECT
  //                       a.url,
  //                       a.call_type,
  //                       a.sr_number, 
  //                       a.pos_title, 
  //                       d.org_name, 
  //                       d.division, 
  //                       d.country, 
  //                       b.lat, 
  //                       b.lng,
  //                       c.details,
  //                       c.LT,
  //                       c.ST,
  //                       e.id_emoji
  //                       from tb_call a left join tb_travel b on(a.sr_number = b.sr_number and a.trad_lan = b.trad_lan) 
  //                       left join tb_req_org d on (a.sr_number = d.sr_number and a.trad_lan = d.trad_lan) 
  //                       left join tb_headers c on (a.trad_lan = c.trad_lan)
  //                       left join tb_country e on ((select country from tb_req_org where sr_number = a.sr_number and trad_lan = "en") = e.name_en)
  //                       where (a.call_id like "%SAD-IN%" or a.call_id not like "%IN%") and lat != "" and lng != ""
  //                       and a.trad_lan like "%'.$lang.'" and a.active = "yes"');
		return $result;
                
	}

}

?>
