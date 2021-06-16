

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<!-- Mirrored from www.adventistvolunteers.org/LongTerm/ViewCall.aspx?SvcReqID=18049 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2017 12:03:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><!--[if lt IE 7]>
        <script type="text/javascript" src="../js/unitpngfix.js"></script>
<![endif]-->

<!--[if IE]>
<link rel="stylesheet" href="../css/ie.css" type="text/css" media="screen, projection" />
<![endif]-->


<!-- Piwik -->

<!-- End Piwik Code -->

<?php
//echo"<h1>Josué Corrêa</h1>";
header('Content-type: text/html; charset=utf-8');
    $lang = $_GET['lang'];
    $sr = $_GET['sr'];
    $servername = 'localhost';
    $username = 'avsbox';
    $password = 'wasliebstdu7?J';
    $dbname = 'avsbox_live';
    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Variáveis do cabeçalho
    $call_id_c;$sr_number_c;$date_pub_c;$pos_number_c;$pending_c;$available_c;$url_c;$call_org_c;$pos_types_c;$decision_c;$asap_c;
    $urgent_c;$cancel_date_c;$orientation_c;$stipend_c;$agreement_c;$u_dress_c;$currency_c;$expense_c;$terms_c;$visa_term_c;
    $inoc_term_c;$trv_vol_terms_c;$trv_sps_terms_c;$loc_trv_terms_c;$trv_ch_terms_c;$e_baggage_terms_c;$insur_terms_c;$accom_terms_c;
    $utilities_terms_c;$meals_terms_c;$stipend_terms_c;$other_terms_c;$additional_c;$lodging_c;$age_c;$children_c;$comment_c;
    $languages_c;$concentration_c;$educ_comm_c;$org_name_c;$union_c;$country_c;$supervisor_c;$add_info_c;$city_c;$pickup_c;$med_recon_c;
    $visa_type_c;$work_permit_c;$police_cl_c;$child_cl_c;$deadline_c;$trad_lan_c;$avs_c;$pagetitle_c;$pos_title_c;$status_c;
    $date_up_c;$filled_c;$requested_c;$desc_header_c;$coord_org_c;$service_len_c;$beg_date_c;$end_date_c;$duties_c;$orient_date_c;
    $interview_c;$a_dress_c;$gender_c;$marital_c;$restrictions_c;$txt_qual_c;$experience_c;$education_c;$skills_c;$fin_type_c;
    $responsibility_c;$visa_c;$visa_type;$inoc_c;$trv_vol_c;$trv_sps_c;$trv_ch_c;$finances_c;$loc_trv_c;$e_baggage_c;$insur_c;
    $accom_c;$utilities_c;$meals_c;$other_c;$raise_c;$viagem_c;$airport_c;$inoc2_c;$visa_cost_c;$v_who_c;$w_who_c;$hiv_cl_c;$papersto_c;
    $deadline_date_c;$trv_details_c;$txt_req_org_c;$division_c;$conference_c;$region_c;$title_c;$project_exp_c;$total_costs_c;
    // Variáveis do formulário
    $call_id_f;$sr_number_f;$date_pub_f;$pos_number_f;$pending_f;$available_f;$url_f;$call_org_f;$pos_types_f;$decision_f;$asap_f;
    $urgent_f;$cancel_date_f;$orientation_f;$stipend_f;$agreement_f;$u_dress_f;$currency_f;$expense_f;$terms_f;$visa_term_f;
    $inoc_term_f;$trv_vol_terms_f;$trv_sps_terms_f;$loc_trv_terms_f;$trv_ch_terms_f;$e_baggage_terms_f;$insur_terms_f;$accom_terms_f;
    $utilities_terms_f;$meals_terms_f;$stipend_terms_f;$other_terms_f;$additional_f;$lodging_f;$age_f;$children_f;$comment_f;
    $languages_f;$concentration_f;$educ_comm_f;$org_name_f;$union_f;$country_f;$supervisor_f;$add_info_f;$city_f;$pickup_f;$med_recon_f;
    $visa_type_f;$work_permit_f;$police_cl_f;$child_cl_f;$deadline_f;$trad_lan_f;$pos_title_f;$status_f;$date_up_f;
    $filled_f;$requested_f;$coord_org_f;$service_len_f;$beg_date_f;$end_date_f;$duties_f;$orient_date_f;$interview_f;$a_dress_f;
    $gender_f;$marital_f;$restrictions_f;$txt_qual_f;$experience_f;$education_f;$skills_f;$fin_type_f;$visa_c;$visa_type;$loc_trv_f;
    $inoc_f;$trv_vol_f;$trv_sps_f;$trv_ch_f;$e_baggage_f;$insur_f;$accom_f;$utilities_f;$meals_f;$other_f;$raise_f;$airport_f;
    $inoc2_f;$visa_cost_f;$v_who_f;$w_who_f;$hiv_cl_f;$papersto_f;$deadline_date_c;$trv_details_f;$division_f;$conference_f;$region_f;
    $title_f;$project_exp_f;$total_costs_f;

    if ($conn->connect_error){
        die("Falha na conexão: ".$conn->connect_error);
    }
        $sql_c = "SELECT * FROM `tb_headers` where trad_lan = '".$lang."';";
        $sql_f = "select ".
            "a.call_id 			as 'a.call_id',\n" .
            "a.call_type 		as 'a.call_type',\n" .
            "a.sr_number 		as 'a.sr_number',\n" .
            "a.status 			as 'a.status',\n" .
            "date_format(a.date_pub,(select date_for from tb_lang where cod_lang = a.trad_lan)) as 'a.date_pub',\n" .
            "date_format(a.date_up,(select date_for from tb_lang where cod_lang = a.trad_lan)) as 'a.date_up',\n" .
            "a.requested 		as 'a.requested',\n" .
            "a.pending 			as 'a.pending',\n" .
            "a.filled 			as 'a.filled',\n" .
            "a.available 		as 'a.available',\n" .
            "a.pos_title 		as 'a.pos_title',\n" .
            "a.url                      as 'a.url',\n" .
            "\n" .
            "b.call_org 		as 'b.call_org',\n" .
            "b.coord_org 		as 'b.coord_org',\n" .
            "b.pos_types 		as 'b.pos_types',\n" .
            "b.service_len 		as 'b.service_len',\n" .
            "b.decision 		as 'b.decision',\n" .
            "date_format(b.beg_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'b.beg_date',\n" .
            "b.asap 			as 'b.asap',\n" .
            "date_format(b.end_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'b.end_date',\n" .
            "b.urgent 			as 'b.urgent',\n" .
            "date_format(b.deadline_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'b.deadline_date',\n" .
            "date_format(b.cancel_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'b.cancel_date',\n" .
            "b.duties 			as 'b.duties',\n" .
            "b.orientation 		as 'b.orientation',\n" .
            "date_format(b.orient_date,(select date_for from tb_lang where cod_lang = b.trad_lan)) as 'b.orient_date',\n" .
            "b.stipend 			as 'b.stipend',\n" .
            "b.interview 		as 'b.interview',\n" .
            "b.agreement 		as 'b.agreement',\n" .
            "b.a_dress 			as 'b.a_dress',\n" .
            "b.u_dress 			as 'b.u_dress',\n" .
            "\n" .
            "c.currency 		as 'c.currency',\n" .
            "c.fin_type 		as 'c.fin_type',\n" .
            "c.visa 			as 'c.visa',\n" .
            "c.visa_term 		as 'c.visa_term',\n" .
            "c.inoc 			as 'c.inoc',\n" .
            "c.inoc_term 		as 'c.inoc_term',\n" .
            "c.trv_to_from_vol          as 'c.trv_to_from_vol',\n" .
            "c.trv_vol_terms            as 'c.trv_vol_terms',\n" .
            "c.trv_to_from_sps          as 'c.trv_to_from_sps',\n" .
            "c.trv_sps_terms            as 'c.trv_sps_terms',\n" .
            "c.loc_trv 			as 'c.loc_trv',\n" .
            "c.loc_trv_terms            as 'c.loc_trv_terms',\n" .
            "c.trv_children 		as 'c.trv_children',\n" .
            "c.trv_ch_terms 		as 'c.trv_ch_terms',\n" .
            "c.e_baggage 		as 'c.e_baggage',\n" .
            "c.e_baggage_terms          as 'c.e_baggage_terms',\n" .
            "c.insurance 		as 'c.insurance',\n" .
            "c.insur_terms 		as 'c.insur_terms',\n" .
            "c.accom 			as 'c.accom',\n" .
            "c.accom_terms 		as 'c.accom_terms',\n" .
            "c.utilities 		as 'c.utilities',\n" .
            "c.utilities_terms          as 'c.utilities_terms',\n" .
            "c.meals 			as 'c.meals',\n" .
            "c.meals_terms 		as 'c.meals_terms',\n" .
            "c.stipend 			as 'c.stipend',\n" .
            "c.stipend_terms            as 'c.stipend_terms',\n" .
            "c.other 			as 'c.other',\n" .
            "c.other_terms 		as 'c.other_terms',\n" .
            "c.raise 			as 'c.raise',\n" .
            "c.project_exp              as 'c.project_exp',\n" .
            "c.total_costs              as 'c.total_costs',\n" .
            "c.additional 		as 'c.additional',\n" .
            "\n" .
            "d.comment 			as 'd.comment',\n" .
            "d.lodging 			as 'd.lodging',\n" .
            "d.gender 			as 'd.gender',\n" .
            "d.age 			as 'd.age',\n" .
            "d.marital 			as 'd.marital',\n" .
            "d.children 		as 'd.children',\n" .
            "d.restrictions 		as 'd.restrictions',\n" .
            "\n" .
            "e.comment 			as 'e.comment',\n" .
            "e.experience 		as 'e.experience',\n" .
            "e.languages 		as 'e.languages',\n" .
            "e.education 		as 'e.education',\n" .
            "e.concentration            as 'e.concentration',\n" .
            "e.skills 			as 'e.skills',\n" .
            "e.educ_comm 		as 'e.educ_comm',\n" .
            "\n" .
            "f.org_name 		as 'f.org_name',\n" .
            "f.division 		as 'f.division',\n" .
            "f.union 			as 'f.union',\n" .
            "f.conference 		as 'f.conference',\n" .
            "f.country 			as 'f.country',\n" .
            "f.region 			as 'f.region',\n" .
            "f.supervisor 		as 'f.supervisor',\n" .
            "f.title 			as 'f.title',\n" .
            "f.add_info 		as 'f.add_info',\n" .
            "\n" .
            "g.city 			as 'g.city',\n" .
            "g.airport 			as 'g.airport',\n" .
            "g.pickup 			as 'g.pickup',\n" .
            "g.inoc 			as 'g.inoc',\n" .
            "g.med_recon 		as 'g.med_recon',\n" .
            "g.visa 			as 'g.visa',\n" .
            "g.visa_type 		as 'g.visa_type',\n" .
            "g.v_who_applies            as 'g.v_who_applies',\n" .
            "g.work_permit 		as 'g.work_permit',\n" .
            "g.w_who_applies            as 'g.w_who_applies',\n" .
            "g.police_cl 		as 'g.police_cl',\n" .
            "g.hiv_cl 			as 'g.hiv_cl',\n" .
            "g.child_cl 		as 'g.child_cl',\n" .
            "g.papersto 		as 'g.papersto',\n" .
            "date_format(g.deadline,(select date_for from tb_lang where cod_lang = g.trad_lan)) as 'g.deadline',\n" .
            "g.details  		as 'g.details'" .
            "\n" .
            "from tb_call a \n" .
            "join tb_description b on((a.sr_number = b.sr_number) and (a.trad_lan = b.trad_lan))\n" .
            "join tb_finances c on((a.sr_number = c.sr_number) and (a.trad_lan = c.trad_lan))\n" .
            "join tb_lodging d on((a.sr_number = d.sr_number) and (a.trad_lan = d.trad_lan))\n" .
            "join tb_qualifications e on((a.sr_number = e.sr_number) and (a.trad_lan = e.trad_lan))\n" .
            "join tb_req_org f on((a.sr_number = f.sr_number) and (a.trad_lan = f.trad_lan))\n" .
            "join tb_travel g on((a.sr_number = g.sr_number) and (a.trad_lan = g.trad_lan))\n" .
            "\n" .
            "where a.sr_number = '".$sr."' and a.trad_lan = \"".$lang."\"; \n" .
            "";
    $conn->query("SET NAMES 'utf8';");
    $result_f = ($conn->query($sql_f));
    $result_c = ($conn->query($sql_c));
	   
    if($result_c->num_rows > 0){
        while($row_c = $result_c->fetch_assoc()){
            $call_id_c        =   $row_c["a.call_id"];        $sr_number_c      =   $row_c["a.sr_number"];      $date_pub_c         =   $row_c["a.date_pub"];
            $pos_number_c     =   $row_c["a.pos_number"];     $pending_c        =   $row_c["a.pending"];        $available_c        =   $row_c["a.available"];
            $url_c            =   $row_c["a.url"];            $call_org_c       =   $row_c["b.call_org"];       $pos_types_c        =   $row_c["b.pos_types"];
            $decision_c       =   $row_c["b.decision"];       $asap_c           =   $row_c["b.asap"];           $urgent_c           =   $row_c["b.urgent"];
            $cancel_date_c    =   $row_c["b.cancel_date"];    $orientation_c    =   $row_c["b.orientation"];    $stipend_c          =   $row_c["b.stipend"];
            $agreement_c      =   $row_c["b.agreement"];      $u_dress_c        =   $row_c["b.u_dress"];        $currency_c         =   $row_c["c.currency"];
            $expense_c        =   $row_c["c.expense"];        $terms_c          =   $row_c["c.terms"];          $visa_term_c        =   $row_c["c.visa_term"];
            $inoc_term_c      =   $row_c["c.inoc_term"];      $trv_vol_terms_c  =   $row_c["c.trv_vol_terms"];  $trv_sps_terms_c    =   $row_c["c.trv_sps_terms"];
            $loc_trv_terms_c  =   $row_c["c.loc_trv_terms"];  $trv_ch_terms_c   =   $row_c["c.trv_ch_terms"];   $e_baggage_terms_c  =   $row_c["c.e_baggage_terms"];
            $insur_terms_c    =   $row_c["c.insur_terms"];    $accom_terms_c    =   $row_c["c.accom_terms"];    $utilities_terms_c  =   $row_c["c.utilities_terms"];
            $meals_terms_c    =   $row_c["c.meals_terms"];    $stipend_terms_c  =   $row_c["c.stipend_terms"];  $other_terms_c      =   $row_c["c.other_terms"];
            $additional_c     =   $row_c["c.additional"];     $lodging_c        =   $row_c["d.lodging"];        $age_c              =   $row_c["d.age"];
            $children_c       =   $row_c["d.children"];       $comment_c        =   $row_c["e.comment"];        $languages_c        =   $row_c["e.languages"];      
            $concentration_c  =   $row_c["e.concentration"];  $educ_comm_c      =   $row_c["e.educ_comm"];      $org_name_c         =   $row_c["f.org_name"];       
            $union_c          =   $row_c["f.union"];          $country_c        =   $row_c["f.country"];        $supervisor_c       =   $row_c["f.supervisor"];     
            $add_info_c       =   $row_c["f.add_info"];       $city_c           =   $row_c["g.city"];           $pickup_c           =   $row_c["g.pickup"];
            $med_recon_c      =   $row_c["g.med_recon"];      $visa_cost_c      =   $row_c["c.visa"];           $work_permit_c      =   $row_c["g.work_permit"];
            $police_cl_c      =   $row_c["g.police_cl"];      $child_cl_c       =   $row_c["g.child_cl"];       $deadline_c         =   $row_c["g.deadline"];
            $trad_lan_c       =   $row_c["trad_lan"];         $avs_c            =   $row_c["avs"];              $pagetitle_c        =   $row_c["a.comment"];
            $pos_title_c      =   $row_c["a.pos_title"];      $status_c         =   $row_c["a.status"];         $date_up_c          =   $row_c["a.date_up"];
            $filled_c         =   $row_c["a.filled"];         $requested_c      =   $row_c["a.requested"];      $desc_header_c      =   $row_c["b.desc_header"];
            $coord_org_c      =   $row_c["b.coord_org"];      $service_len_c    =   $row_c["b.service_len"];    $beg_date_c         =   $row_c["b.beg_date"];
            $end_date_c       =   $row_c["b.end_date"];       $duties_c         =   $row_c["b.duties"];         $orient_date_c      =   $row_c["b.orient_date"];
            $interview_c      =   $row_c["b.interview"];      $a_dress_c        =   $row_c["b.a_dress"];        $gender_c           =   $row_c["d.gender"];
            $marital_c        =   $row_c["d.marital"];        $txt_qual_c       =   $row_c["e.comment"];        $restrictions_c     =   $row_c["d.restrictions"];
            $experience_c     =   $row_c["e.experience"];     $education_c      =   $row_c["e.education"];      $skills_c           =   $row_c["e.skills"];
            $fin_type_c       =   $row_c["c.fin_type"];       $responsibility_c =   $row_c["c.responsibility"]; $visa_c             =   $row_c["g.visa"];
            $visa_type_c      =   $row_c["g.visa_type"];      $inoc_c           =   $row_c["c.inoc"];           $trv_vol_c          =   $row_c["c.trv_to_from_vol"];
            $trv_sps_c        =   $row_c["c.trv_to_from_sps"];$trv_ch_c         =   $row_c["c.trv_children"];   $finances_c         =   $row_c["c.finances"];
            $loc_trv_c        =   $row_c["c.loc_trv"];        $e_baggage_c      =   $row_c["c.e_baggage"];      $insur_c            =   $row_c["c.insurance"];
            $accom_c          =   $row_c["c.accom"];          $utilities_c      =   $row_c["c.utilities"];      $meals_c            =   $row_c["c.meals"];
            $other_c          =   $row_c["c.other"];          $raise_c          =   $row_c["c.raise"];          $viagem_c           =   $row_c["g.comment"];
            $airport_c        =   $row_c["g.airport"];        $inoc2_c          =   $row_c["g.inoc"];           $v_who_c            =   $row_c["g.v_who_applies"];
            $w_who_c          =   $row_c["g.w_who_applies"];  $hiv_cl_c         =   $row_c["g.hiv_cl"];         $papersto_c         =   $row_c["g.papersto"];
            $deadline_date_c  =   $row_c["b.deadline_date"];  $trv_details_c    =   $row_c["g.details"];        $txt_req_org_c      =   $row_c["f.comment"];
            $division_c       =   $row_c["f.division"];       $conference_c     =   $row_c["f.conference"];     $region_c           =   $row_c["f.region"];
            $title_c          =   $row_c["f.title"];          $project_exp_c    =   $row_c["c.project_exp"];    $total_costs_c      =   $row_c["c.total_costs"];
        }
    }
    if($result_f->num_rows > 0){
        while($row_f = $result_f->fetch_assoc()){
            $call_id_f        =   $row_f["a.call_id"];        $sr_number_f      =   $row_f["a.sr_number"];      $date_pub_f         =   $row_f["a.date_pub"];
            $pos_number_f     =   $row_f["a.pos_number"];     $pending_f        =   $row_f["a.pending"];        $available_f        =   $row_f["a.available"];
            $url_f            =   $row_f["a.url"];            $call_org_f       =   $row_f["b.call_org"];       $pos_types_f        =   $row_f["b.pos_types"];
            $decision_f       =   $row_f["b.decision"];       $asap_f           =   $row_f["b.asap"];           $urgent_f           =   $row_f["b.urgent"];
            $cancel_date_f    =   $row_f["b.cancel_date"];    $orientation_f    =   $row_f["b.orientation"];    $stipend_f          =   $row_f["b.stipend"];
            $agreement_f      =   $row_f["b.agreement"];      $u_dress_f        =   $row_f["b.u_dress"];        $currency_f         =   $row_f["c.currency"];
            $expense_f        =   $row_f["c.expense"];        $terms_f          =   $row_f["c.terms"];          $visa_term_f        =   $row_f["c.visa_term"];
            $inoc_term_f      =   $row_f["c.inoc_term"];      $trv_vol_terms_f  =   $row_f["c.trv_vol_terms"];  $trv_sps_terms_f    =   $row_f["c.trv_sps_terms"];
            $loc_trv_terms_f  =   $row_f["c.loc_trv_terms"];  $trv_ch_terms_f   =   $row_f["c.trv_ch_terms"];   $e_baggage_terms_f  =   $row_f["c.e_baggage_terms"];
            $insur_terms_f    =   $row_f["c.insur_terms"];    $accom_terms_f    =   $row_f["c.accom_terms"];    $utilities_terms_f  =   $row_f["c.utilities_terms"];
            $meals_terms_f    =   $row_f["c.meals_terms"];    $stipend_terms_f  =   $row_f["c.stipend_terms"];  $other_terms_f      =   $row_f["c.other_terms"];
            $additional_f     =   $row_f["c.additional"];     $lodging_f        =   $row_f["d.lodging"];        $age_f              =   $row_f["d.age"];
            $children_f       =   $row_f["d.children"];       $comment_f        =   $row_f["e.comment"];        $languages_f        =   $row_f["e.languages"];      
            $concentration_f  =   $row_f["e.concentration"];  $educ_comm_f      =   $row_f["e.educ_comm"];      $org_name_f         =   $row_f["f.org_name"];       
            $union_f          =   $row_f["f.union"];          $country_f        =   $row_f["f.country"];        $supervisor_f       =   $row_f["f.supervisor"];     
            $add_info_f       =   $row_f["f.add_info"];       $city_f           =   $row_f["g.city"];           $pickup_f           =   $row_f["g.pickup"];
            $med_recon_f      =   $row_f["g.med_recon"];      $visa_cost_f      =   $row_f["c.visa"];           $work_permit_f      =   $row_f["g.work_permit"];
            $police_cl_f      =   $row_f["g.police_cl"];      $child_cl_f       =   $row_f["g.child_cl"];       $deadline_f         =   $row_f["g.deadline"];
            $trad_lan_f       =   $row_f["trad_lan"];         $pos_title_f      =   $row_f["a.pos_title"];      $status_f           =   $row_f["a.status"];
            $filled_f         =   $row_f["a.filled"];         $requested_f      =   $row_f["a.requested"];      $service_len_f      =   $row_f["b.service_len"];
            $date_up_f        =   $row_f["a.date_up"];        $coord_org_f      =   $row_f["b.coord_org"];      $beg_date_f         =   $row_f["b.beg_date"];
            $end_date_f       =   $row_f["b.end_date"];       $duties_f         =   $row_f["b.duties"];         $orient_date_f      =   $row_f["b.orient_date"];
            $interview_f      =   $row_f["b.interview"];      $a_dress_f        =   $row_f["b.a_dress"];        $gender_f           =   $row_f["d.gender"];
            $marital_f        =   $row_f["d.marital"];        $txt_qual_f       =   $row_f["e.comment"];        $restrictions_f     =   $row_f["d.restrictions"];
            $experience_f     =   $row_f["e.experience"];     $education_f      =   $row_f["e.education"];      $skills_f           =   $row_f["e.skills"];
            $fin_type_f       =   $row_f["c.fin_type"];       $visa_f           =   $row_f["g.visa"];           $visa_type_f        =   $row_f["g.visa_type"];
            $inoc_f           =   $row_f["c.inoc"];           $trv_vol_f        =   $row_f["c.trv_to_from_vol"];
            $trv_sps_f        =   $row_f["c.trv_to_from_sps"];$trv_ch_f         =   $row_f["c.trv_children"];   $loc_trv_f          =   $row_f["c.loc_trv"];
            $e_baggage_f      =   $row_f["c.e_baggage"];      $insur_f          =   $row_f["c.insurance"];      $accom_f            =   $row_f["c.accom"];
            $utilities_f      =   $row_f["c.utilities"];      $meals_f          =   $row_f["c.meals"];          $other_f            =   $row_f["c.other"];
            $raise_f          =   $row_f["c.raise"];          $airport_f        =   $row_f["g.airport"];        $inoc2_f            =   $row_f["g.inoc"];
            $v_who_f          =   $row_f["g.v_who_applies"];  $w_who_f          =   $row_f["g.w_who_applies"];  $hiv_cl_f           =   $row_f["g.hiv_cl"];
            $papersto_f       =   $row_f["g.papersto"];       $deadline_date_f  =   $row_f["b.deadline_date"];  $trv_details_f      =   $row_f["g.details"];
            $division_f       =   $row_f["f.division"];       $conference_f     =   $row_f["f.conference"];     $region_f           =   $row_f["f.region"];
            $title_f          =   $row_f["f.title"];          $project_exp_f    =   $row_f["c.project_exp"];    $total_costs_f      =   $row_f["c.total_costs"];
        }
    }
    ?>

<title>
	<?php echo $avs_c." - ".$pagetitle_c; ?>
</title></head>

<body>
<noscript>
<!-- Piwik Image Tracker-->
<!-- End Piwik -->
</noscript>

<form name="aspnetForm" method="post" action="https://www.adventistvolunteers.org/LongTerm/ViewCall.aspx?SvcReqID=18049" id="aspnetForm">

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3881FF16" />
</div>
<div id="container-outer">
<div id="ctl00_pnlHeader">
	
	<div id="head-sub">
    	<div id="topNav" class="centerNav">
        	
        </div>
        <div class="clear"></div>
        <div id="sectionLinks-sub">

	
</div>
        <div class="clear"></div>
        <div id="sectionTitle" class="centerNav">
            <ul>
                <br>
                    
                </br>

<li><a href=".html">SVA|</a></li>

<li><?php echo $pagetitle_c ?></li>

</ul>
        </div>
        <div class="clear"></div>      
        <div id="subNav" class="centerNav">
</div>     
  </div>

</div>  
    <div id="content">
<div class="clear"></div>
<table width="100%" class="HighlightTable">
	<tr>
		<td width="100%" colspan="2" align="center">
		    <table width="100%" border="0" style="font-size: 14px;">
              <tr>
                <td><?php echo $pos_title_c ?>: <strong><?php echo $pos_title_f ?></strong></td>
                <td align="right"><?php echo $call_id_c ?>: <strong><?php echo $call_id_f ?></strong></td>
              </tr>
              <tr>
                <td><?php echo $sr_number_c ?>: <strong><?php echo $sr_number_f ?></strong></td>
                <td align="right"><?php echo $date_pub_c ?>:<strong> <?php echo $date_pub_f ?></strong></td>
              </tr>
              <tr>
                <td><?php echo $status_c ?>: <strong><?php echo $status_f ?></strong></td>
                <td align="right"><?php echo $date_up_c ?>: <strong><?php echo $date_up_f ?></strong></td>
              </tr>
            </table>
		    <table> 
              <tr>
                <td><?php echo $pos_number_c ?>:</td>
                <td><u><?php echo $requested_c ?></u></td>
                <td><u><?php echo $pending_c ?></u></td>
                <td><u><?php echo $filled_c ?></u></td>
                <td><strong><u><?php echo $available_c ?></u></strong></td>
              </tr>
              <tr align="center">
                <td>&nbsp;</td>
                <td><?php echo $requested_f ?></td>
                <td><?php echo $pending_f ?></td>
                <td><?php echo $filled_f ?></td>
                <td><strong><?php echo $available_f ?></strong></td>
              </tr>
           </table></td>
	</tr>
</table>
<table width="100%" class="defaultbordertable">
	<tr>
		<td colspan="2" class="subtitlerow"><?php echo $desc_header_c ?></td>
	</tr>
	<tr>
		<td width="50%" align="left">
			<table>
				<tr>
					<td><?php echo $country_c ?>:</td>
					<td><strong><?php echo $country_f ?> </strong></td>
				</tr>
				<tr>
					<td><?php echo $call_org_c ?>:</td>
					<td><strong><?php echo $call_org_f ?></strong></td>
				</tr>
                           <tr>
					<td><?php echo $coord_org_c ?>:</td>
					<td><strong><?php echo $coord_org_f ?></strong></td>
				</tr>
				
				<tr>
				  <td><?php echo $pos_types_c ?>: </td>
				  <td>
				     <strong><?php echo $pos_types_f ?></strong>
                  </td>
			  </tr>
				<tr>
                  <td><?php echo $service_len_c ?>:</td>
                  <td><strong>
                      <?php echo $service_len_f ?>
                      </strong></td>
			  </tr>
				<tr>
                  <td nowrap="nowrap"><?php echo $decision_c ?>:&nbsp;&nbsp;</td>
				  <td nowrap="nowrap"><strong><?php echo $decision_f ?></strong></td>
			  </tr>
			</table>		</td>
		<td width="50%">
			<table>
				<tr>
					<td><?php echo $beg_date_c ?>:</td>
					<td><strong>
                                            <?php echo $beg_date_f ?>&nbsp;</strong>
							<br><div align="left" style="color:red"><?php echo $asap_f?></div>
	
                                            					</td>
				</tr>
				<tr>
					<td><?php echo $end_date_c ?>:</td>
					<td><strong><?php echo $end_date_f ?></strong></td>
				</tr>
				<tr>
                  <td><?php echo $urgent_c ?> </td>
				  <td><strong><?php echo $urgent_f ?></strong></td>
			  </tr>
				<tr>
                  <td><?php echo $deadline_date_c ?>: <strong></strong> </td>
				  <td><strong><?php echo $deadline_datef ?></strong></td>
			  </tr>
				<tr>
				  <td><?php echo $cancel_date_c ?>: </td>
				  <td><strong><?php echo $cancel_date_f ?></strong></td>
			  </tr>
			</table>		</td>
	</tr>
	<tr>
		<td colspan="2">
			<table>
				<tr>
					<td valign="top"><?php echo $duties_c ?>:&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><strong><?php echo $duties_f ?></strong></td>
				</tr>
			</table>		</td>
	</tr>
	<tr>
	  <td><table>
	    <tr>
          <td><?php echo $orientation_c ?></td>
	      <td><strong><?php echo $orientation_f ?></strong></td>
        </tr>
	    <tr>
          <td><?php echo $stipend_c ?>&nbsp; </td>
	      <td><strong><?php echo $stipend_f ?></strong></td>
        </tr>
        
      </table></td>
      <td><table border="0">
        <tr>
          <td><?php echo $orient_date_c ?>:</td>
          <td><strong><?php echo $orient_date_f ?></strong></td>
        </tr>
        

      </table></td>
  </tr>
	<tr>
	  <td colspan="2"><table>

        <tr>
          <td nowrap="nowrap"><?php echo $interview_c ?> </td>
          <td><strong><?php echo $interview_f ?></strong></td>
        </tr>
        <tr>
          <td><?php echo $agreement_c ?>&nbsp;</td>
          <td><strong><?php echo $agreement_f ?></strong></td>
        </tr>
      </table></td>
  </tr>
	<tr>
      <td colspan="2"><table>
          <tr>
            <td><?php echo $a_dress_c ?>:</td>
            <td><strong><?php echo $a_dress_f ?> </strong></td>
          </tr>
          <tr>
            <td><?php echo $u_dress_c ?>:&nbsp;</td>
            <td><strong><?php echo $u_dress_f ?></strong></td>
          </tr>
      </table></td>
  </tr>
</table>
<table width="100%" class="defaultbordertable">
	<tr>
		<td colspan="2"><span class="subtitlerow"><?php echo $lodging_c ?></span> &nbsp;&nbsp;<em><?php echo $comment_f ?></em></td>
	</tr>
	<TR>
	  <TD colspan="2"><table border="0">
	    <tr>
          <td><?php echo $lodging_c ?>:&nbsp;&nbsp; </td>
	      <td><strong><?php echo $lodging_f ?> </strong></td>
        </tr>

      </table></TD>
  </TR>
	<TR>
	  <TD width="50%">
			<table>
				<tr>
					<td><?php echo $gender_c ?>:</td>
					<td><strong><?php echo $gender_f ?></strong></td>
				</tr>
				<tr>
                  <td><?php echo $age_c ?></td>
				  <td><strong><?php echo $age_f ?> </strong></td>
			  </tr>
			</table>      </TD>
		<td width="50%">
			<table>
				
				<tr>
                  <td><?php echo $marital_c ?>:</td>
				  <td><strong><?php echo $marital_f ?></strong></td>
			  </tr>
				<tr>
                  <td><?php echo $children_c ?>:</td>
				  <td><strong><?php echo $children_f ?></strong></td>
			  </tr>
			</table>		</td>
	</TR>
	<tr>
      <td colspan="2"><table border="0">
          <tr>
            <td><?php echo $restrictions_c ?>: </td>
            <td><strong><?php echo $restrictions_f ?></strong></td>
          </tr>
      </table></td>
  </tr>
</table>
<table width="100%" class="defaultbordertable">
  <tr>
    <td colspan="2"><span class="subtitlerow"><?php echo $txt_qual_c ?></span> &nbsp;&nbsp;<em><?php echo $txt_qual_f ?></em></td>
  </tr>
  <tr>
    <td colspan="2"><table border="0">
        <tr>
          <td><?php echo $experience_c ?>:&nbsp;&nbsp; </td>
          <td><strong><?php echo $experience_f ?></strong></td>
        </tr>
        <tr>
          <td><?php echo $languages_c ?>:&nbsp;</td>
          <td> <strong><?php echo $languages_f ?></strong></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="50%" colspan="2"><table border="0">
      <tr>
        <td colspan="2">   </td>
      </tr>
      <tr>
        <td><?php echo $education_c ?>:&nbsp;</td>
        <td><strong><?php echo $education_f ?></strong></td>
      </tr>
      
      
      
      <tr>
        <td><?php echo $concentration_c ?>:&nbsp;</td>
        <td><strong><?php echo $concentration_f ?></strong></td>
      </tr>
      <tr>
        <td><?php echo $skills_c ?>:&nbsp;</td>
        <td><strong><?php echo $skills_f ?></strong></td>
      </tr>
      <tr>
        <td><?php echo $educ_comm_c ?>:&nbsp;</td>
        <td><strong><?php echo $educ_comm_f ?></strong></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<table width="100%" class="defaultbordertable">
    <tr>
        <td colspan="2" class="subtitlerow">
            <?php echo $finances_c ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <table border="0">
                <tr>
                    <td>
                        <?php echo $currency_c ?>:</td>
                    <td>
                        <strong>
                            <?php echo $currency_f ?>
                        </strong>
                    </td>
                </tr>                
                <tr>
                    <td>
                        <?php echo $fin_type_c ?>:</td>
                    <td>
                        <strong>
                            <?php echo $fin_type_f ?>
                        </strong>
                    </td>
                </tr>
            </table>
            <table>
                <tr style="text-decoration: underline;">
                    <td >
                        <?php echo $expense_c ?></td>
                    <td >
                        <?php echo $responsibility_c ?></td>
                    <td>
                        <?php echo $terms_c ?></td>
                </tr>
                
                        <tr>
                            <td>
                                <?php echo $visa_cost_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                    <?php echo $visa_cost_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                    <?php echo $visa_term_f ?>
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $inoc_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                    <?php echo $inoc_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $inoc_term_f ?>   
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $trv_vol_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $trv_vol_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $trv_vol_terms_f ?>   
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $trv_sps_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                    <?php echo $trv_sps_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $trv_sps_terms_f ?>   
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $loc_trv_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $loc_trv_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $loc_trv_terms_f ?>    
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $trv_ch_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $trv_ch_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $trv_ch_terms_f ?>    
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $e_baggage_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $e_baggage_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $e_baggage_terms_f ?>    
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $insur_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $insur_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $insur_terms_f ?>
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $accom_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $accom_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $accom_terms_f ?>    
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $utilities_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $utilities_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $utilities_terms_f ?>    
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $meals_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $meals_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $meals_terms_f ?>   
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $stipend_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $stipend_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $stipend_terms_f ?>
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php echo $other_c ?>&nbsp;&nbsp;</td>
                            <td>
                                <strong>
                                <?php echo $other_f ?>
                                </strong> &nbsp; </td>
                            <td>
                                <strong>
                                <?php echo $other_terms_f ?>
                                </strong>
                                    &nbsp;
                            </td>
                        </tr>
                    
            </table>
            <div id="ctl00_cphBody_ctlSvcReqView_Panel1">
	
            <table border="0">
                <tr>
                    <td>
                        <?php echo $raise_c ?>:</td>
                    <td>
                        <strong>
                        <?php echo $raise_f ?>  
                        </strong>
                    </td>
                </tr>
            </table>
            
</div>
            <div id="ctl00_cphBody_ctlSvcReqView_pnlAddtionalBenefits">
	
            <table border="0">
                <tr>
                    <td>
                        <?php echo $additional_c ?>:</td>
                    <td>
                        <strong>
                        <?php echo $additional_f ?>
                        </strong></td>
                    
                </tr>
                
<!--                to add-->
                <tr>
                    <td>
                        <?php echo $project_exp_c ?>:</td>
                    <td>
                        <strong>
                        <?php echo $project_exp_f ?>
                        </strong></td>
                    
                </tr>
                
                <tr>
                    <td>
                        <?php echo $total_costs_c ?>:</td>
                    <td>
                        <strong>
                        <?php echo $total_costs_f ?>
                        </strong></td>
                    
                </tr>
<!--                to add-->
                
                
                
                
                
                
                
                
                
                
            </table>
</div>
            
            
        </td>
    </tr>
</table>
<table width="100%" class="defaultbordertable">
	<tr>
		<td colspan="2" class="subtitlerow"><?php echo $viagem_c ?> </td>
	</tr>
	<tr>
		<td width="50%" valign=top>
			<table>
			  <tr>
                <td><?php echo $city_c ?>:</td>
			    <td><strong><?php echo $city_f ?></strong></td>
		      </tr>
			</table>		</td>
		<td width="50%" valign="top"><table border="0">
		  <tr>
            <td><?php echo $airport_c ?>:</td>
		    <td><strong><?php echo $airport_f ?></strong></td>
	      </tr>
          
        </table></td>
	</tr>
	<tr>
	  <TD colSpan="2"><table border="0">
	    <tr>
          <td><?php echo $pickup_c ?>:</td>
	      <td><strong><?php echo $pickup_f ?></strong></td>
        </tr>
        
      </table></TD>
  </tr>
	<tr>
	  <TD colSpan="2"><table border="0">
	    <tr>
          <td><?php echo $inoc2_c ?> </td>
	      <td><strong><?php echo $inoc2_f ?></strong></td>
        </tr>
	    <tr>
          <td><?php echo $med_recon_c ?>: </td>
	      <td><strong><?php echo $med_recon_f ?></strong></td>
        </tr>
        
      </table></TD>
  </tr>
	<tr>
	  <TD colspan="2"><table width="100%" border="0">
        <tr>
          <td width="0%" nowrap="nowrap"><?php echo $visa_c ?></td>
          <td nowrap="nowrap"><strong><?php echo $visa_f ?></strong></td>
          <td nowrap="nowrap"><?php echo $visa_type_c ?>:</td>
          <td width="100%"><strong><?php echo $visa_type_f ?></strong></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td nowrap="nowrap">&nbsp;</td>
          <td nowrap="nowrap"><?php echo $v_who_c ?>:</td>
          <td><strong><?php echo $v_who_f ?></strong></td>
        </tr>
        <tr>
          <td nowrap="nowrap"><?php echo $work_permit_c ?></td>
          <td nowrap="nowrap"><strong><?php echo $work_permit_f ?>&nbsp;</strong></td>
          <td nowrap="nowrap"><?php echo $w_who_c ?>: </td>
          <td><strong><?php echo $w_who_f ?></strong></td>
        </tr>
        
      </table></TD>
  </tr>
	<tr>
	  <TD colspan="2"><table border="0">
	    
	    <tr>
          <td><?php echo $police_cl_c ?>:</td>
	      <td><strong><?php echo $police_cl_f ?></strong></td>
        </tr>
	    <tr>
          <td><?php echo $hiv_cl_c ?>:</td>
	      <td><strong><?php echo $hiv_cl_f ?></strong></td>
        </tr>
	    <tr>
          <td><?php echo $child_cl_c ?>:&nbsp;&nbsp; </td>
	      <td><strong><?php echo $child_cl_f ?></strong></td>
        </tr>

      </table></TD>
  </tr>
	
	<tr>
	  <TD colSpan="2"><table border="0">
	    
	    <tr>
          <td><?php echo $papersto_c ?>:</td>
	      <td><strong><?php echo $papersto_f ?></strong></td>
        </tr>
        <tr>
          <td><?php echo $deadline_c ?>:</td>
          <td><strong><?php echo $deadline_f ?></strong></td>
        </tr>
      </table>      
      </TD>
  </tr>
	
	<tr>
		<TD colSpan="2">
			<table>
				<tr>
					<td><?php echo $trv_details_c ?>:</td>
					<td><STRONG><?php echo $trv_details_f ?></STRONG></td>
				</tr>
			</table>		</TD>
	</tr>

</table>
<table width="100%" class="defaultbordertable">
  <tr>
    <td colspan="2" class="subtitlerow"><?php echo $txt_req_org_c ?> </td>
  </tr>
  <tr>
    <td width="50%"><table>
      <tr>
        <td><?php echo $org_name_c ?>:</td>
        <td><strong><?php echo $org_name_f ?></strong></td>
      </tr>
      <tr>
        <td nowrap="nowrap"><?php echo $division_c ?>: </td>
        <td><strong><?php echo $division_f ?></strong></td>
      </tr>
      <tr>
        <td nowrap="nowrap"><?php echo $union_c ?>:</td>
        <td><strong><?php echo $union_f ?></strong></td>
      </tr>
      <tr>
        <td nowrap="nowrap"><?php echo $conference_c ?>: </td>
        <td><strong><?php echo $conference_f ?></strong></td>
      </tr>
      <tr>
        <td><?php echo $country_c ?>:</td>
        <td><strong><?php echo $country_f ?></strong></td>
      </tr>
      <tr>
        <td><?php echo $region_c ?>:</td>
        <td><strong><?php echo $region_f ?></strong></td>
      </tr>
    </table></td>
    
  </tr>
  
</table>
<table width="100%" class="defaultbordertable">
	<tr>
		<td colspan="2" class="subtitlerow"><?php echo $supervisor_c ?></td>
	</tr>
	<tr>
		<td width=50% valign=top>
			<table>	
				<TR>
					<TD><?php echo $supervisor_c ?>:</td>
					<td><strong><?php echo $supervisor_f ?></strong></TD>
				</tr>
				
			</table>		</td>
		<td width=50% valign=top>
			<table>
				<tr>
					<TD><?php echo $title_c ?>:</td>
					<td><STRONG><?php echo $title_f ?></STRONG></TD>
				</tr>
				
			</table>		
		</td>
	</TR>
</TABLE>
		
<table width="100%" class="defaultbordertable">
  <tr>
    <td colspan="2" class="subtitlerow"><?php echo $add_info_c ?> </td>
  </tr>
  <tr>
    <td colspan="2"><strong><?php echo $add_info_f ?></strong></td>
  </tr>
</table>



<table class="defaultbordertable"  width="100%" >

<tr style="font-size:smaller">
					<td>
						<?php echo $url_c ?>:  <a href=<?php echo $url_f ?>><strong><?php echo $url_f ?></strong></td></a>
				</tr>
</table>




</div>
</form>
<div id="ctl00_pnlFooter">
	

    <div id="foot-sub">
	<div class="clear"></div> 
    	
    	
        
        
  </div>
</div>
  <div class="centerNav" id="footerNav">
      	




</div>

</div>

</body>


<!-- Mirrored from www.adventistvolunteers.org/LongTerm/ViewCall.aspx?SvcReqID=18049 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2017 12:03:54 GMT -->
</html>

