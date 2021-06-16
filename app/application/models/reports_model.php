<?php

class Reports_model extends Model {
	
	public function getListOfCalls_headers($lang){
            $result = $this->query(
                "select `a.call_id` 	as 'call_id',\n" .
                "       `a.call_type`   as 'call_type',\n" .
                "	`a.pos_title` 	as 'pos_title',\n" .
                "	`f.org_name`	as 'org_name',\n" .
                "	`a.available` 	as 'available',\n" .
                "       `f.country`     as 'country',\n" .
                "       `e.languages`	as 'languages',\n" .
                "       `b.beg_date`	as 'beg_date',\n" .
                "       `b.end_date`	as 'end_date',\n" .
                "        title,\n" .
                "        avs,\n" .
                "        search,\n" .
                "        search_tip,\n" .
                "        results,\n" .
                "        LT,\n" .
                "        ST\n" .
                "from tb_headers\n" .
                "where trad_lan like \"%".$lang."%\";");
            return $result;
	}
        public function getListOfCalls_fields($lang){
            $result = $this->query(
                "    select a.call_id 	as 'call_id',\n" .
                "           a.sr_number as 'sr_number',\n" .
                "           a.pos_title as 'pos_title',\n" .
                "           b.org_name	as 'org_name',\n" .
                "           a.available as 'available',\n" .
                "           b.country	as 'country',\n" .
                "           concat(c.languages,\".\")	as 'languages',\n" .
                "           date_format(d.beg_date,(select date_for from tb_lang where cod_lang = '".$lang."')) as 'beg_date',\n" .
                "           date_format(d.end_date,(select date_for from tb_lang where cod_lang = '".$lang."')) as 'end_date',\n" .
                "           a.call_type as 'call_type'\n" .
                "   from tb_call a \n" .
                "   join tb_req_org b \n" .
                "       on ((a.sr_number = b.sr_number) and (a.trad_lan = b.trad_lan))\n" .
                "   join tb_qualifications c\n" .
                "       on ((a.sr_number = c.sr_number) and (a.trad_lan = c.trad_lan))\n" .
                "   join tb_description d\n" .
                "       on ((a.sr_number = d.sr_number) and (a.trad_lan = d.trad_lan))\n" .
                "   where (a.call_id like \"%SAD-IN%\" or a.call_id not like \"%IN%\") \n" .
                "   and a.trad_lan like \"%".$lang."%\" and a.active = \"yes\";");
            return $result;
        }
        public function getSpecificCall_header($lang){
            $result = $this->query(
                "SELECT 
                    `tb_headers`.`a.call_id` AS 'acall_id',
                    `tb_headers`.`a.call_type` AS 'acall_type',
                    `tb_headers`.`a.sr_number` AS 'asr_number',
                    `tb_headers`.`a.status` AS 'astatus',
                    `tb_headers`.`a.date_pub` AS 'adate_pub',
                    `tb_headers`.`a.date_up` AS 'adate_up',
                    `tb_headers`.`a.pos_number` AS 'apos_number',
                    `tb_headers`.`a.requested` AS 'arequested',
                    `tb_headers`.`a.pending` AS 'apending',
                    `tb_headers`.`a.filled` AS 'afilled',
                    `tb_headers`.`a.available` AS 'aavailable',
                    `tb_headers`.`a.pos_title` AS 'apos_title',
                    `tb_headers`.`a.url` AS 'aurl',
                    `tb_headers`.`b.desc_header` AS 'bdesc_header',
                    `tb_headers`.`b.call_org` AS 'bcall_org',
                    `tb_headers`.`b.coord_org` AS 'bcoord_org',
                    `tb_headers`.`b.pos_types` AS 'bpos_types',
                    `tb_headers`.`b.service_len` AS 'bservice_len',
                    `tb_headers`.`b.decision` AS 'bdecision',
                    `tb_headers`.`b.beg_date` AS 'bbeg_date',
                    `tb_headers`.`b.asap` AS 'basap',
                    `tb_headers`.`b.end_date` AS 'bend_date',
                    `tb_headers`.`b.urgent` AS 'burgent',
                    `tb_headers`.`b.deadline_date` AS 'bdeadline_date',
                    `tb_headers`.`b.cancel_date` AS 'bcancel_date',
                    `tb_headers`.`b.duties` AS 'bduties',
                    `tb_headers`.`b.orientation` AS 'borientation',
                    `tb_headers`.`b.orient_date` AS 'borient_date',
                    `tb_headers`.`b.stipend` AS 'bstipend',
                    `tb_headers`.`b.interview` AS 'binterview',
                    `tb_headers`.`b.agreement` AS 'bagreement',
                    `tb_headers`.`b.a_dress` AS 'ba_dress',
                    `tb_headers`.`b.u_dress` AS 'bu_dress',
                    `tb_headers`.`c.finances` AS 'cfinances',
                    `tb_headers`.`c.currency` AS 'ccurrency',
                    `tb_headers`.`c.fin_type` AS 'cfin_type',
                    `tb_headers`.`c.expense` AS 'cexpense',
                    `tb_headers`.`c.responsibility` AS 'cresponsibility',
                    `tb_headers`.`c.terms` AS 'cterms',
                    `tb_headers`.`c.visa` AS 'cvisa',
                    `tb_headers`.`c.visa_term` AS 'cvisa_term',
                    `tb_headers`.`c.inoc` AS 'cinoc',
                    `tb_headers`.`c.inoc_term` AS 'cinoc_term',
                    `tb_headers`.`c.trv_to_from_vol` AS 'ctrv_to_from_vol',
                    `tb_headers`.`c.trv_vol_terms` AS 'ctrv_vol_terms',
                    `tb_headers`.`c.trv_to_from_sps` AS 'ctrv_to_from_sps',
                    `tb_headers`.`c.trv_sps_terms` AS 'ctrv_sps_terms',
                    `tb_headers`.`c.loc_trv` AS 'cloc_trv',
                    `tb_headers`.`c.loc_trv_terms` AS 'cloc_trv_terms',
                    `tb_headers`.`c.trv_children` AS 'ctrv_children',
                    `tb_headers`.`c.trv_ch_terms` AS 'ctrv_ch_terms',
                    `tb_headers`.`c.e_baggage` AS 'ce_baggage',
                    `tb_headers`.`c.e_baggage_terms` AS 'ce_baggage_terms',
                    `tb_headers`.`c.insurance` AS 'cinsurance',
                    `tb_headers`.`c.insur_terms` AS 'cinsur_terms',
                    `tb_headers`.`c.accom` AS 'caccom',
                    `tb_headers`.`c.accom_terms` AS 'caccom_terms',
                    `tb_headers`.`c.utilities` AS 'cutilities',
                    `tb_headers`.`c.utilities_terms` AS 'cutilities_terms',
                    `tb_headers`.`c.meals` AS 'cmeals',
                    `tb_headers`.`c.meals_terms` AS 'cmeals_terms',
                    `tb_headers`.`c.stipend` AS 'cstipend',
                    `tb_headers`.`c.stipend_terms` AS 'cstipend_terms',
                    `tb_headers`.`c.other` AS 'cother',
                    `tb_headers`.`c.other_terms` AS 'cother_terms',
                    `tb_headers`.`c.raise` AS 'craise',
                    `tb_headers`.`c.additional` AS 'cadditional',
                    `tb_headers`.`d.comment` AS 'dcomment',
                    `tb_headers`.`d.lodging` AS 'dlodging',
                    `tb_headers`.`d.gender` AS 'dgender',
                    `tb_headers`.`d.age` AS 'dage',
                    `tb_headers`.`d.marital` AS 'dmarital',
                    `tb_headers`.`d.children` AS 'dchildren',
                    `tb_headers`.`d.restrictions` AS 'drestrictions',
                    `tb_headers`.`e.comment` AS 'ecomment',
                    `tb_headers`.`e.experience` AS 'eexperience',
                    `tb_headers`.`e.languages` AS 'elanguages',
                    `tb_headers`.`e.education` AS 'eeducation',
                    `tb_headers`.`e.concentration` AS 'econcentration',
                    `tb_headers`.`e.skills` AS 'eskills',
                    `tb_headers`.`e.educ_comm` AS 'eeduc_comm',
                    `tb_headers`.`f.comment` AS 'fcomment',
                    `tb_headers`.`f.org_name` AS 'forg_name',
                    `tb_headers`.`f.division` AS 'fdivision',
                    `tb_headers`.`f.union` AS 'funion',
                    `tb_headers`.`f.conference` AS 'fconference',
                    `tb_headers`.`f.country` AS 'fcountry',
                    `tb_headers`.`f.region` AS 'fregion',
                    `tb_headers`.`f.supervisor` AS 'fsupervisor',
                    `tb_headers`.`f.title` AS 'ftitle',
                    `tb_headers`.`f.add_info` AS 'fadd_info',
                    `tb_headers`.`g.comment` AS 'gcomment',
                    `tb_headers`.`g.city` AS 'gcity',
                    `tb_headers`.`g.airport` AS 'gairport',
                    `tb_headers`.`g.pickup` AS 'gpickup',
                    `tb_headers`.`g.inoc` AS 'ginoc',
                    `tb_headers`.`g.med_recon` AS 'gmed_recon',
                    `tb_headers`.`g.visa` AS 'gvisa',
                    `tb_headers`.`g.visa_type` AS 'gvisa_type',
                    `tb_headers`.`g.v_who_applies` AS 'gv_who_applies',
                    `tb_headers`.`g.work_permit` AS 'gwork_permit',
                    `tb_headers`.`g.w_who_applies` AS 'gw_who_applies',
                    `tb_headers`.`g.police_cl` AS 'gpolice_cl',
                    `tb_headers`.`g.hiv_cl` AS 'ghiv_cl',
                    `tb_headers`.`g.child_cl` AS 'gchild_cl',
                    `tb_headers`.`g.papersto` AS 'gpapersto',
                    `tb_headers`.`g.deadline` AS 'gdeadline',
                    `tb_headers`.`g.details` AS 'gdetails',
                    `tb_headers`.`LT`,
                    `tb_headers`.`ST`,
                    `tb_headers`.`c.project_exp` as 'cproject_exp',
                    `tb_headers`.`c.total_costs` as 'ctotal_costs',
                    `tb_headers`.`callpage`,
                    `tb_headers`.`avs`
                FROM
                    `avsbox_live`.`tb_headers` where trad_lan = '".$lang."';");
            return $result;
        }
        public function getSpecificCall_fields($lang,$call_id){
            $result = $this->query(
                "select ".
                "a.call_id              as 'acall_id',\n" .
                "a.call_type 		as 'acall_type',\n" .
                "a.sr_number 		as 'asr_number',\n" .
                "a.status 		as 'astatus',\n" .
                "date_format(a.date_pub,(select date_for from tb_lang where cod_lang = a.trad_lan)) as 'adate_pub',\n" .
                "date_format(a.date_up,(select date_for from tb_lang where cod_lang = a.trad_lan)) as 'adate_up',\n" .
                "a.requested 		as 'arequested',\n" .
                "a.pending 		as 'apending',\n" .
                "a.filled 		as 'afilled',\n" .
                "a.available 		as 'aavailable',\n" .
                "a.pos_title 		as 'apos_title',\n" .
                "a.url                  as 'aurl',\n" .
                "\n" .
                "b.call_org 		as 'bcall_org',\n" .
                "b.coord_org 		as 'bcoord_org',\n" .
                "b.pos_types 		as 'bpos_types',\n" .
                "b.service_len 		as 'bservice_len',\n" .
                "b.decision 		as 'bdecision',\n" .
                "date_format(b.beg_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'bbeg_date',\n" .
                "b.asap 			as 'basap',\n" .
                "date_format(b.end_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'bend_date',\n" .
                "b.urgent 			as 'burgent',\n" .
                "date_format(b.deadline_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'bdeadline_date',\n" .
                "date_format(b.cancel_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'bcancel_date',\n" .
                "b.duties 			as 'bduties',\n" .
                "b.orientation 		as 'borientation',\n" .
                "date_format(b.orient_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'borient_date',\n" .
                "b.stipend 		as 'bstipend',\n" .
                "b.interview 		as 'binterview',\n" .
                "b.agreement 		as 'bagreement',\n" .
                "b.a_dress 		as 'ba_dress',\n" .
                "b.u_dress 		as 'bu_dress',\n" .
                "\n" .
                "c.currency 		as 'ccurrency',\n" .
                "c.fin_type 		as 'cfin_type',\n" .
                "c.visa 		as 'cvisa',\n" .
                "c.visa_term 		as 'cvisa_term',\n" .
                "c.inoc 		as 'cinoc',\n" .
                "c.inoc_term 		as 'cinoc_term',\n" .
                "c.trv_to_from_vol      as 'ctrv_to_from_vol',\n" .
                "c.trv_vol_terms        as 'ctrv_vol_terms',\n" .
                "c.trv_to_from_sps      as 'ctrv_to_from_sps',\n" .
                "c.trv_sps_terms        as 'ctrv_sps_terms',\n" .
                "c.loc_trv 		as 'cloc_trv',\n" .
                "c.loc_trv_terms        as 'cloc_trv_terms',\n" .
                "c.trv_children 	as 'ctrv_children',\n" .
                "c.trv_ch_terms 	as 'ctrv_ch_terms',\n" .
                "c.e_baggage 		as 'ce_baggage',\n" .
                "c.e_baggage_terms      as 'ce_baggage_terms',\n" .
                "c.insurance 		as 'cinsurance',\n" .
                "c.insur_terms 		as 'cinsur_terms',\n" .
                "c.accom 		as 'caccom',\n" .
                "c.accom_terms 		as 'caccom_terms',\n" .
                "c.utilities 		as 'cutilities',\n" .
                "c.utilities_terms      as 'cutilities_terms',\n" .
                "c.meals 		as 'cmeals',\n" .
                "c.meals_terms 		as 'cmeals_terms',\n" .
                "c.stipend 		as 'cstipend',\n" .
                "c.stipend_terms        as 'cstipend_terms',\n" .
                "c.other 		as 'cother',\n" .
                "c.other_terms 		as 'cother_terms',\n" .
                "c.raise 		as 'craise',\n" .
                "c.project_exp          as 'cproject_exp',\n" .
                "c.total_costs          as 'ctotal_costs',\n" .
                "c.additional 		as 'cadditional',\n" .
                "\n" .
                "d.comment 		as 'dcomment',\n" .
                "d.lodging 		as 'dlodging',\n" .
                "d.gender 		as 'dgender',\n" .
                "d.age 			as 'dage',\n" .
                "d.marital 		as 'dmarital',\n" .
                "d.children 		as 'dchildren',\n" .
                "d.restrictions 	as 'drestrictions',\n" .
                "\n" .
                "e.comment 		as 'ecomment',\n" .
                "e.experience 		as 'eexperience',\n" .
                "e.languages 		as 'elanguages',\n" .
                "e.education 		as 'eeducation',\n" .
                "e.concentration        as 'econcentration',\n" .
                "e.skills 		as 'eskills',\n" .
                "e.educ_comm 		as 'eeduc_comm',\n" .
                "\n" .
                "f.org_name 		as 'forg_name',\n" .
                "f.division 		as 'fdivision',\n" .
                "f.union 		as 'funion',\n" .
                "f.conference 		as 'fconference',\n" .
                "f.country 		as 'fcountry',\n" .
                "f.region 		as 'fregion',\n" .
                "f.supervisor 		as 'fsupervisor',\n" .
                "f.title 		as 'ftitle',\n" .
                "f.add_info 		as 'fadd_info',\n" .
                "\n" .
                "g.city 		as 'gcity',\n" .
                "g.airport 		as 'gairport',\n" .
                "g.pickup 		as 'gpickup',\n" .
                "g.inoc 		as 'ginoc',\n" .
                "g.med_recon 		as 'gmed_recon',\n" .
                "g.visa 		as 'gvisa',\n" .
                "g.visa_type 		as 'gvisa_type',\n" .
                "g.v_who_applies        as 'gv_who_applies',\n" .
                "g.work_permit 		as 'gwork_permit',\n" .
                "g.w_who_applies        as 'gw_who_applies',\n" .
                "g.police_cl 		as 'gpolice_cl',\n" .
                "g.hiv_cl 		as 'ghiv_cl',\n" .
                "g.child_cl 		as 'gchild_cl',\n" .
                "g.papersto 		as 'gpapersto',\n" .
                "date_format(g.deadline,(select date_for from tb_lang where cod_lang = g.trad_lan)) as 'gdeadline',\n" .
                "g.details  		as 'gdetails'" .
                "\n" .
                "from tb_call a \n" .
                "join tb_description b on((a.sr_number = b.sr_number) and (a.trad_lan = b.trad_lan))\n" .
                "join tb_finances c on((a.sr_number = c.sr_number) and (a.trad_lan = c.trad_lan))\n" .
                "join tb_lodging d on((a.sr_number = d.sr_number) and (a.trad_lan = d.trad_lan))\n" .
                "join tb_qualifications e on((a.sr_number = e.sr_number) and (a.trad_lan = e.trad_lan))\n" .
                "join tb_req_org f on((a.sr_number = f.sr_number) and (a.trad_lan = f.trad_lan))\n" .
                "join tb_travel g on((a.sr_number = g.sr_number) and (a.trad_lan = g.trad_lan))\n" .
                "\n" .
                "where a.sr_number = '".$call_id."' and a.trad_lan = \"".$lang."\"; \n");
            return $result;
        }
}
?>
