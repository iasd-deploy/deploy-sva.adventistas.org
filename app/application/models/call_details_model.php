<?php

class Call_details_model extends Model {
    
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
	
	public function getCallDetails($lang,$call_id){
            $result = $this->query("select a.call_id, a.pos_title, 
                date_format(a.date_up,(select date_for from tb_lang where cod_lang = 'pt')) as 'date_up', 
                date_format(b.beg_date,(select date_for from tb_lang where cod_lang = 'pt')) as 'beg_date', 
                date_format(b.end_date,(select date_for from tb_lang where cod_lang = 'pt')) as 'end_date', 
                b.urgent, b.service_len, b.duties, b.stipend as \"b_stipend\", b.interview, b.a_dress, b.u_dress, 
                c.lodging, c.gender, c.age, c.marital, c.children, d.experience, concat(d.languages,\".\") as languages, d.skills, e.currency, 
                e.fin_type, e.stipend_terms as \"e_stipend\", e.raise, e.additional, f.city, f.airport, f.pickup, f.visa, 
                f.visa_type, f.lat, f.lng, g.org_name, g.division, g.country, g.add_info, h.category 
                from tb_call a 
                join tb_description b 
                on(a.sr_number= b.sr_number and a.trad_lan = b.trad_lan) 
                join tb_lodging c 
                on(a.sr_number = c.sr_number and a.trad_lan = c.trad_lan) 
                join tb_qualifications d 
                on(a.sr_number = d.sr_number and a.trad_lan = d.trad_lan) 
                join tb_finances e 
                on(a.sr_number = e.sr_number and a.trad_lan = e.trad_lan) 
                join tb_travel f 
                on(a.sr_number = f.sr_number and a.trad_lan = f.trad_lan) 
                join tb_req_org g 
                on(a.sr_number = g.sr_number and a.trad_lan = g.trad_lan) 
                join (
                select sr_number,
                    if( pos_types like \"Academic%\",                   \"Academic\",
                    if( pos_types like \"Accounting%\",                 \"Accounting/Business\",
                    if( pos_types like \"Administration%\",             \"Administration\",
                    if( pos_types like \"ADRA%\",                       \"Social Work\",
                    if( pos_types like \"Agriculture%\",                \"Agriculture\",
                    if( pos_types like \"Chaplain%\",                   \"Chaplain\",
                    if( pos_types like \"Church%\",                     \"Church/Evangelism\",
                    if( pos_types like \"Cleaning%\",                   \"Cleaning\",
                    if( pos_types like \"Communications%\",             \"Communications\",
                    if( pos_types like \"Computer%\",                   \"Computer/Website\",
                    if( pos_types like \"Construction%\",               \"Construction\",
                    if( pos_types like \"Coordinator%\",                \"Coordinator\",
                    if( pos_types like \"Counselor%\",                  \"Counselor\",
                    if( pos_types like \"Dean%\",                       \"Dean\",
                    if( pos_types like \"Dental%\",                     \"Dental\",
                    if( pos_types like \"Engineer%\",                   \"Engineer\",
                    if( pos_types like \"Event%\",                      \"Event Organizer\",
                    if( pos_types like \"Graphic%\",                    \"Graphic Design\",
                    if( pos_types like \"Librarian%\",                  \"Librarian\",
                    if( pos_types like \"Maintenance%\",                \"Maintenance\",
                    if( pos_types like \"Maintenance - Custodial%\",    \"Custodial\",
                    if( pos_types like \"Maintenance - Electrician%\",  \"Electrician\",
                    if( pos_types like \"Maintenance - Mechanic%\",     \"Mechanic\",
                    if( pos_types like \"Maintenance - Plumber%\",      \"Plumber\",
                    if( pos_types like \"Marketing%\",                  \"Marketing\",
                    if( pos_types like \"Medical%\",                    \"Medical\",
                    if( pos_types like \"Nursing%\",                    \"Nursing\",
                    if( pos_types like \"Nutritionist%\",               \"Nutritionist\",
                    if( pos_types like \"Office%\",                     \"Office\",
                    if( pos_types like \"Orphanage%\",                  \"Orphanage\",
                    if( pos_types like \"Pastor%\",                     \"Pastor/Evangelist\",
                    if( pos_types like \"Physical%\",                   \"Physio Therapist\",
                    if( pos_types like \"Pilot%\",                      \"Pilot\",
                    if( pos_types like \"Principal%\",                  \"Principal\",
                    if( pos_types like \"Secretarial%\",                \"Secretarial\",
                    if( pos_types like \"Software%\",                   \"Software Development\",
                    if( pos_types like \"Speech%\",                     \"Speech Therapy/Pathologist\",
                    if( pos_types like \"Teaching – Bible/Religion%\",  \"Religion Teacher\",
                    if( pos_types like \"Teaching – College%\",         \"College Teacher\",
                    if( pos_types like \"Teaching – Computer%\",        \"Computer Teacher\",
                    if( pos_types like \"Teaching – Elementary%\",      \"Elementary Teacher\",
                    if( pos_types like \"Teaching – English/Religion%\",\"English Teacher\",
                    if( pos_types like \"Teaching – ESL%\",             \"ESL Teacher\",
                    if( pos_types like \"Teaching – History%\",         \"History Teacher\",
                    if( pos_types like \"Teaching – Kindergarten%\",    \"Kindergarten Teacher\",
                    if( pos_types like \"Teaching – Math%\",            \"Math Teacher\",
                    if( pos_types like \"Teaching – Music%\",           \"Music Teacher\",
                    if( pos_types like \"Teaching – Other%\",           \"Other Teacher\",
                    if( pos_types like \"Teaching – PE%\",              \"PE Teacher\",
                    if( pos_types like \"Teaching – Science%\",         \"Science Teacher\",
                    if( pos_types like \"Teaching – Secondary%\",       \"Highschool Teacher\",
                    if( pos_types like \"Training%\",                   \"Training/Seminar\",
                    if( pos_types like \"Translation%\",                \"Translation\",
                    if( pos_types like \"Urban%\",                      \"Influence Centers\",
                    if( pos_types like \"Video Production%\",           \"Video Production\",
                    if( pos_types like \"Youth Ministry%\",             \"Youth Ministry\", 
                                                                        \"Other\"
                        ))))))))))))))))))))))))))))))))))))))))))))))))))))))))
                        as category

                from tb_description where trad_lan = \"en\") as h
                on(a.sr_number = h.sr_number)
                where a.trad_lan = '".$lang."' and a.sr_number = '".$call_id."';");
            return $result;
	}
}

?>
