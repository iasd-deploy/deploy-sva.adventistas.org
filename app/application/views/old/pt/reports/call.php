<?php
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
    
    if(count($result_c) > 0){
        foreach($result_c as $key => $value){
            $call_id_c        =   $value->a.call_id;        $sr_number_c      =   $value->a.sr_number;      $date_pub_c         =   $value->a.date_pub;
            $pos_number_c     =   $value->a.pos_number;     $pending_c        =   $value->a.pending;        $available_c        =   $value->a.available;
            $url_c            =   $value->a.url;            $call_org_c       =   $value->b.call_org;       $pos_types_c        =   $value->b.pos_types;
            $decision_c       =   $value->b.decision;       $asap_c           =   $value->b.asap;           $urgent_c           =   $value->b.urgent;
            $cancel_date_c    =   $value->b.cancel_date;    $orientation_c    =   $value->b.orientation;    $stipend_c          =   $value->b.stipend;
            $agreement_c      =   $value->b.agreement;      $u_dress_c        =   $value->b.u_dress;        $currency_c         =   $value->c.currency;
            $expense_c        =   $value->c.expense;        $terms_c          =   $value->c.terms;          $visa_term_c        =   $value->c.visa_term;
            $inoc_term_c      =   $value->c.inoc_term;      $trv_vol_terms_c  =   $value->c.trv_vol_terms;  $trv_sps_terms_c    =   $value->c.trv_sps_terms;
            $loc_trv_terms_c  =   $value->c.loc_trv_terms;  $trv_ch_terms_c   =   $value->c.trv_ch_terms;   $e_baggage_terms_c  =   $value->c.e_baggage_terms;
            $insur_terms_c    =   $value->c.insur_terms;    $accom_terms_c    =   $value->c.accom_terms;    $utilities_terms_c  =   $value->c.utilities_terms;
            $meals_terms_c    =   $value->c.meals_terms;    $stipend_terms_c  =   $value->c.stipend_terms;  $other_terms_c      =   $value->c.other_terms;
            $additional_c     =   $value->c.additional;     $lodging_c        =   $value->d.lodging;        $age_c              =   $value->d.age;
            $children_c       =   $value->d.children;       $comment_c        =   $value->e.comment;        $languages_c        =   $value->e.languages;      
            $concentration_c  =   $value->e.concentration;  $educ_comm_c      =   $value->e.educ_comm;      $org_name_c         =   $value->f.org_name;       
            $union_c          =   $value->f.union;          $country_c        =   $value->f.country;        $supervisor_c       =   $value->f.supervisor;     
            $add_info_c       =   $value->f.add_info;       $city_c           =   $value->g.city;           $pickup_c           =   $value->g.pickup;
            $med_recon_c      =   $value->g.med_recon;      $visa_cost_c      =   $value->c.visa;           $work_permit_c      =   $value->g.work_permit;
            $police_cl_c      =   $value->g.police_cl;      $child_cl_c       =   $value->g.child_cl;       $deadline_c         =   $value->g.deadline;
            $trad_lan_c       =   $value->trad_lan;         $avs_c            =   $value->avs;              $pagetitle_c        =   $value->a.comment;
            $pos_title_c      =   $value->a.pos_title;      $status_c         =   $value->a.status;         $date_up_c          =   $value->a.date_up;
            $filled_c         =   $value->a.filled;         $requested_c      =   $value->a.requested;      $desc_header_c      =   $value->b.desc_header;
            $coord_org_c      =   $value->b.coord_org;      $service_len_c    =   $value->b.service_len;    $beg_date_c         =   $value->b.beg_date;
            $end_date_c       =   $value->b.end_date;       $duties_c         =   $value->b.duties;         $orient_date_c      =   $value->b.orient_date;
            $interview_c      =   $value->b.interview;      $a_dress_c        =   $value->b.a_dress;        $gender_c           =   $value->d.gender;
            $marital_c        =   $value->d.marital;        $txt_qual_c       =   $value->e.comment;        $restrictions_c     =   $value->d.restrictions;
            $experience_c     =   $value->e.experience;     $education_c      =   $value->e.education;      $skills_c           =   $value->e.skills;
            $fin_type_c       =   $value->c.fin_type;       $responsibility_c =   $value->c.responsibility; $visa_c             =   $value->g.visa;
            $visa_type_c      =   $value->g.visa_type;      $inoc_c           =   $value->c.inoc;           $trv_vol_c          =   $value->c.trv_to_from_vol;
            $trv_sps_c        =   $value->c.trv_to_from_sps;$trv_ch_c         =   $value->c.trv_children;   $finances_c         =   $value->c.finances;
            $loc_trv_c        =   $value->c.loc_trv;        $e_baggage_c      =   $value->c.e_baggage;      $insur_c            =   $value->c.insurance;
            $accom_c          =   $value->c.accom;          $utilities_c      =   $value->c.utilities;      $meals_c            =   $value->c.meals;
            $other_c          =   $value->c.other;          $raise_c          =   $value->c.raise;          $viagem_c           =   $value->g.comment;
            $airport_c        =   $value->g.airport;        $inoc2_c          =   $value->g.inoc;           $v_who_c            =   $value->g.v_who_applies;
            $w_who_c          =   $value->g.w_who_applies;  $hiv_cl_c         =   $value->g.hiv_cl;         $papersto_c         =   $value->g.papersto;
            $deadline_date_c  =   $value->b.deadline_date;  $trv_details_c    =   $value->g.details;        $txt_req_org_c      =   $value->f.comment;
            $division_c       =   $value->f.division;       $conference_c     =   $value->f.conference;     $region_c           =   $value->f.region;
            $title_c          =   $value->f.title;          $project_exp_c    =   $value->c.project_exp;    $total_costs_c      =   $value->c.total_costs;
        }
    }
    if(count($result_f) > 0){
        foreach($result_f as $key => $value){
            $call_id_f        =   $value->acall_id;        $sr_number_f      =   $value->asr_number;      $date_pub_f         =   $value->adate_pub;
            $pos_number_f     =   $value->apos_number;     $pending_f        =   $value->apending;        $available_f        =   $value->aavailable;
            $url_f            =   $value->aurl;            $call_org_f       =   $value->bcall_org;       $pos_types_f        =   $value->bpos_types;
            $decision_f       =   $value->bdecision;       $asap_f           =   $value->basap;           $urgent_f           =   $value->burgent;
            $cancel_date_f    =   $value->bcancel_date;    $orientation_f    =   $value->borientation;    $stipend_f          =   $value->bstipend;
            $agreement_f      =   $value->bagreement;      $u_dress_f        =   $value->bu_dress;        $currency_f         =   $value->ccurrency;
            $expense_f        =   $value->cexpense;        $terms_f          =   $value->cterms;          $visa_term_f        =   $value->cvisa_term;
            $inoc_term_f      =   $value->cinoc_term;      $trv_vol_terms_f  =   $value->ctrv_vol_terms;  $trv_sps_terms_f    =   $value->ctrv_sps_terms;
            $loc_trv_terms_f  =   $value->cloc_trv_terms;  $trv_ch_terms_f   =   $value->ctrv_ch_terms;   $e_baggage_terms_f  =   $value->ce_baggage_terms;
            $insur_terms_f    =   $value->cinsur_terms;    $accom_terms_f    =   $value->caccom_terms;    $utilities_terms_f  =   $value->cutilities_terms;
            $meals_terms_f    =   $value->cmeals_terms;    $stipend_terms_f  =   $value->cstipend_terms;  $other_terms_f      =   $value->cother_terms;
            $additional_f     =   $value->cadditional;     $lodging_f        =   $value->dlodging;        $age_f              =   $value->dage;
            $children_f       =   $value->dchildren;       $comment_f        =   $value->ecomment;        $languages_f        =   $value->elanguages;      
            $concentration_f  =   $value->econcentration;  $educ_comm_f      =   $value->eeduc_comm;      $org_name_f         =   $value->forg_name;       
            $union_f          =   $value->funion;          $country_f        =   $value->fcountry;        $supervisor_f       =   $value->fsupervisor;     
            $add_info_f       =   $value->fadd_info;       $city_f           =   $value->gcity;           $pickup_f           =   $value->gpickup;
            $med_recon_f      =   $value->gmed_recon;      $visa_cost_f      =   $value->cvisa;           $work_permit_f      =   $value->gwork_permit;
            $police_cl_f      =   $value->gpolice_cl;      $child_cl_f       =   $value->gchild_cl;       $deadline_f         =   $value->gdeadline;
            $trad_lan_f       =   $value->trad_lan;         $pos_title_f      =   $value->apos_title;      $status_f           =   $value->astatus;
            $filled_f         =   $value->afilled;         $requested_f      =   $value->arequested;      $service_len_f      =   $value->bservice_len;
            $date_up_f        =   $value->adate_up;        $coord_org_f      =   $value->bcoord_org;      $beg_date_f         =   $value->bbeg_date;
            $end_date_f       =   $value->bend_date;       $duties_f         =   $value->bduties;         $orient_date_f      =   $value->borient_date;
            $interview_f      =   $value->binterview;      $a_dress_f        =   $value->ba_dress;        $gender_f           =   $value->dgender;
            $marital_f        =   $value->dmarital;        $txt_qual_f       =   $value->ecomment;        $restrictions_f     =   $value->drestrictions;
            $experience_f     =   $value->eexperience;     $education_f      =   $value->eeducation;      $skills_f           =   $value->eskills;
            $fin_type_f       =   $value->cfin_type;       $visa_f           =   $value->gvisa;           $visa_type_f        =   $value->gvisa_type;
            $inoc_f           =   $value->cinoc;           $trv_vol_f        =   $value->ctrv_to_from_vol;
            $trv_sps_f        =   $value->ctrv_to_from_sps;$trv_ch_f         =   $value->ctrv_children;   $loc_trv_f          =   $value->cloc_trv;
            $e_baggage_f      =   $value->ce_baggage;      $insur_f          =   $value->cinsurance;      $accom_f            =   $value->caccom;
            $utilities_f      =   $value->cutilities;      $meals_f          =   $value->cmeals;          $other_f            =   $value->cother;
            $raise_f          =   $value->craise;          $airport_f        =   $value->gairport;        $inoc2_f            =   $value->ginoc;
            $v_who_f          =   $value->gv_who_applies;  $w_who_f          =   $value->gw_who_applies;  $hiv_cl_f           =   $value->ghiv_cl;
            $papersto_f       =   $value->gpapersto;       $deadline_date_f  =   $value->bdeadline_date;  $trv_details_f      =   $value->gdetails;
            $division_f       =   $value->fdivision;       $conference_f     =   $value->fconference;     $region_f           =   $value->fregion;
            $title_f          =   $value->ftitle;          $project_exp_f    =   $value->cproject_exp;    $total_costs_f      =   $value->ctotal_costs;
        }
    }
    ?>

<title>
	<?php echo $avs_c." - ".$pagetitle_c; ?>
</title>

<body>

<li><a href=".html">SVA|</a></li>

<li><?php echo $pagetitle_c ?></li>

<table style="width:100%">
	<tr>
		<td width="100%" colspan="2" align="center">
		    <table width="100%" border="0" style="font-size: 14px;">
              <tr>
                <td><strong><?php echo $pos_title_c ?>:</strong> <?php echo $pos_title_f ?></td>
                <td align="right"><strong><?php echo $call_id_c ?>: </strong><?php echo $call_id_f ?></td>
              </tr>
              <tr>
                <td><strong><?php echo $sr_number_c ?>:</strong> <?php echo $sr_number_f ?></td>
                <td align="right"><strong><?php echo $date_pub_c ?>: </strong><?php echo $date_pub_f ?></td>
              </tr>
              <tr>
                <td><strong><?php echo $status_c ?>:</strong> <?php echo $status_f ?></td>
                <td align="right"><strong><?php echo $date_up_c ?>:</strong> <?php echo $date_up_f ?></td>
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
					<td><strong><?php echo $country_c ?>:</strong></td>
					<td><?php echo $country_f ?> </td>
				</tr>
				<tr>
					<td><strong><?php echo $call_org_c ?>:</strong></td>
					<td><?php echo $call_org_f ?></td>
				</tr>
                           <tr>
					<td><strong><?php echo $coord_org_c ?>:</strong></td>
					<td><?php echo $coord_org_f ?></td>
				</tr>
				
				<tr>
				  <td><strong><?php echo $pos_types_c ?>:</strong> </td>
				  <td>
				     <?php echo $pos_types_f ?>
                  </td>
			  </tr>
				<tr>
                  <td><strong><?php echo $service_len_c ?>:</strong></td>
                  <td>
                      <?php echo $service_len_f ?>
                      </td>
			  </tr>
				<tr>
                  <td nowrap="nowrap"><strong><?php echo $decision_c ?>:&nbsp;&nbsp;</strong></td>
				  <td nowrap="nowrap"><?php echo $decision_f ?></td>
			  </tr>
			</table>		</td>
		<td width="50%">
			<table>
				<tr>
					<td><strong><?php echo $beg_date_c ?>:</strong></td>
					<td>
                                            <?php echo $beg_date_f ?>&nbsp;
							<br><div align="left" style="color:red"><?php echo $asap_f?></div>
	
                                            					</td>
				</tr>
				<tr>
					<td><strong><?php echo $end_date_c ?>:</strong></td>
					<td><?php echo $end_date_f ?></td>
				</tr>
				<tr>
                  <td><strong><?php echo $urgent_c ?> </strong></td>
				  <td><?php echo $urgent_f ?></td>
			  </tr>
				<tr>
                  <td><strong><?php echo $deadline_date_c ?>: </strong> </td>
				  <td><?php echo $deadline_datef ?></td>
			  </tr>
				<tr>
				  <td><strong><?php echo $cancel_date_c ?>:</strong> </td>
				  <td><?php echo $cancel_date_f ?></td>
			  </tr>
			</table>		</td>
	</tr>
	<tr>
		<td colspan="2">
			<table>
				<tr>
					<td valign="top"><strong><?php echo $duties_c ?>:&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
					<td><?php echo $duties_f ?></td>
				</tr>
			</table>		</td>
	</tr>
	<tr>
	  <td><table>
	    <tr>
          <td><strong><?php echo $orientation_c ?></strong></td>
	      <td><?php echo $orientation_f ?></td>
        </tr>
	    <tr>
          <td><strong><?php echo $stipend_c ?>&nbsp; </strong></td>
	      <td><?php echo $stipend_f ?></td>
        </tr>
        
      </table></td>
      <td><table border="0">
        <tr>
          <td><strong><?php echo $orient_date_c ?>:</strong></td>
          <td><?php echo $orient_date_f ?></td>
        </tr>
        

      </table></td>
  </tr>
	<tr>
	  <td colspan="2"><table>

        <tr>
          <td nowrap="nowrap"><strong><?php echo $interview_c ?> </strong></td>
          <td><?php echo $interview_f ?></td>
        </tr>
        <tr>
          <td><strong><?php echo $agreement_c ?>&nbsp;</strong></td>
          <td><?php echo $agreement_f ?></td>
        </tr>
      </table></td>
  </tr>
	<tr>
      <td colspan="2"><table>
          <tr>
            <td><strong><?php echo $a_dress_c ?>:</strong></td>
            <td><?php echo $a_dress_f ?> </td>
          </tr>
          <tr>
            <td><strong><?php echo $u_dress_c ?>:&nbsp;</strong></td>
            <td><?php echo $u_dress_f ?></td>
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
          <td><strong><?php echo $lodging_c ?>:&nbsp;&nbsp; </strong></td>
	      <td><?php echo $lodging_f ?> </td>
        </tr>

      </table></TD>
  </TR>
	<TR>
	  <TD width="50%">
			<table>
				<tr>
					<td><strong><?php echo $gender_c ?>:</strong></td>
					<td><?php echo $gender_f ?></td>
				</tr>
				<tr>
                  <td><strong><?php echo $age_c ?></strong></td>
				  <td><?php echo $age_f ?> </td>
			  </tr>
			</table>      </TD>
		<td width="50%">
			<table>
				
				<tr>
                  <td><strong><?php echo $marital_c ?>:</strong></td>
				  <td><?php echo $marital_f ?></td>
			  </tr>
				<tr>
                  <td><strong><?php echo $children_c ?>:</strong></td>
				  <td><?php echo $children_f ?></td>
			  </tr>
			</table>		</td>
	</TR>
	<tr>
      <td colspan="2"><table border="0">
          <tr>
            <td><strong><?php echo $restrictions_c ?>: </strong></td>
            <td><?php echo $restrictions_f ?></td>
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
          <td><strong><?php echo $experience_c ?>:&nbsp;&nbsp; </strong></td>
          <td><?php echo $experience_f ?></td>
        </tr>
        <tr>
          <td><strong><?php echo $languages_c ?>:&nbsp;</strong></td>
          <td> <?php echo $languages_f ?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="50%" colspan="2"><table border="0">
      <tr>
        <td colspan="2">   </td>
      </tr>
      <tr>
        <td><strong><?php echo $education_c ?>:&nbsp;</strong></td>
        <td><?php echo $education_f ?></td>
      </tr>
      
      
      
      <tr>
        <td><strong><?php echo $concentration_c ?>:&nbsp;</strong></td>
        <td><?php echo $concentration_f ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $skills_c ?>:&nbsp;</strong></td>
        <td><?php echo $skills_f ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $educ_comm_c ?>:&nbsp;</strong></td>
        <td><?php echo $educ_comm_f ?></td>
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
                        <strong>
                        <?php echo $currency_c ?>:</td>
                        </strong>
                    <td>
                            <?php echo $currency_f ?>
                    </td>
                </tr>                
                <tr>
                    <td><strong>
                            
                        <?php echo $fin_type_c ?>:</td>
                    </strong>
                    <td>
                        <?php echo $fin_type_f ?>
                        
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
                                <strong>
                                <?php echo $visa_cost_c ?>&nbsp;&nbsp;</td>
                            </strong>
                            <td>
                                
                                    <?php echo $visa_cost_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                    <?php echo $visa_term_f ?>
                                                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $inoc_c ?>&nbsp;&nbsp;</td>
                            </strong>
                            <td>
                                
                                    <?php echo $inoc_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $inoc_term_f ?>   
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $trv_vol_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $trv_vol_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $trv_vol_terms_f ?>   
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $trv_sps_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                    <?php echo $trv_sps_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $trv_sps_terms_f ?>   
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $loc_trv_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $loc_trv_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $loc_trv_terms_f ?>    
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $trv_ch_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $trv_ch_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $trv_ch_terms_f ?>    
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $e_baggage_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $e_baggage_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $e_baggage_terms_f ?>    
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $insur_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $insur_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $insur_terms_f ?>
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $accom_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $accom_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $accom_terms_f ?>    
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $utilities_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $utilities_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $utilities_terms_f ?>    
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <strong>
                                <?php echo $meals_c ?>&nbsp;&nbsp;</td>
                                </strong>
                            <td>
                                
                                <?php echo $meals_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $meals_terms_f ?>   
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td><strong>
                                <?php echo $stipend_c ?>&nbsp;&nbsp;</td>
                            </strong>
                            <td>
                                
                                <?php echo $stipend_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $stipend_terms_f ?>
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
                        <tr>
                            <td><strong>
                                <?php echo $other_c ?>&nbsp;&nbsp;</td>
                            </strong>
                            <td>
                                
                                <?php echo $other_f ?>
                                 &nbsp; </td>
                            <td>
                                
                                <?php echo $other_terms_f ?>
                                
                                    &nbsp;
                            </td>
                        </tr>
                    
            </table>
            <div id="ctl00_cphBody_ctlSvcReqView_Panel1">
	
            <table border="0">
                <tr>
                    <td>
                        <strong>
                        <?php echo $raise_c ?>:</td>
                        </strong>
                    <td>
                        
                        <?php echo $raise_f ?>  
                        
                    </td>
                </tr>
            </table>
            
</div>
            <div id="ctl00_cphBody_ctlSvcReqView_pnlAddtionalBenefits">
	
            <table border="0">
                <tr>
                    <td><strong>
                        <?php echo $additional_c ?>:</td>
                    </strong>
                    <td>
                        
                        <?php echo $additional_f ?>
                        </td>
                    
                </tr>
                
<!--                to add-->
                <tr>
                    <td><strong>
                        <?php echo $project_exp_c ?>:</td>
                    </strong><td>
                        
                        <?php echo $project_exp_f ?>
                        </td>
                    
                </tr>
                
                <tr>
                    <td><strong>
                        <?php echo $total_costs_c ?>:</strong></td>
                    <td>
                        
                        <?php echo $total_costs_f ?>
                        </td>
                    
                </tr>

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
                <td><strong><?php echo $city_c ?>:</strong></td>
			    <td><?php echo $city_f ?></td>
		      </tr>
			</table>		</td>
		<td width="50%" valign="top"><table border="0">
		  <tr>
            <td><strong><?php echo $airport_c ?>:</strong></td>
		    <td><?php echo $airport_f ?></td>
	      </tr>
          
        </table></td>
	</tr>
	<tr>
	  <TD colSpan="2"><table border="0">
	    <tr>
          <td><strong><?php echo $pickup_c ?>:</strong></td>
	      <td><?php echo $pickup_f ?></td>
        </tr>
        
      </table></TD>
  </tr>
	<tr>
	  <TD colSpan="2"><table border="0">
	    <tr>
          <td><strong><?php echo $inoc2_c ?> </strong></td>
	      <td><?php echo $inoc2_f ?></td>
        </tr>
	    <tr>
          <td><strong><?php echo $med_recon_c ?>: </strong></td>
	      <td><?php echo $med_recon_f ?></td>
        </tr>
        
      </table></TD>
  </tr>
	<tr>
	  <TD colspan="2"><table width="100%" border="0">
        <tr>
          <td width="0%" nowrap="nowrap"><strong><?php echo $visa_c ?></strong></td>
          <td nowrap="nowrap"><?php echo $visa_f ?></td>
          <td nowrap="nowrap"><strong><?php echo $visa_type_c ?>:</strong></td>
          <td width="100%"><?php echo $visa_type_f ?></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td nowrap="nowrap">&nbsp;</td>
          <td nowrap="nowrap"><strong><?php echo $v_who_c ?>:</strong></td>
          <td><?php echo $v_who_f ?></td>
        </tr>
        <tr>
          <td nowrap="nowrap"><strong><?php echo $work_permit_c ?></strong></td>
          <td nowrap="nowrap"><?php echo $work_permit_f ?>&nbsp;</td>
          <td nowrap="nowrap"><strong><?php echo $w_who_c ?>: </strong></td>
          <td><?php echo $w_who_f ?></td>
        </tr>
        
      </table></TD>
  </tr>
	<tr>
	  <TD colspan="2"><table border="0">
	    
	    <tr>
          <td><strong><?php echo $police_cl_c ?>:</strong></td>
	      <td><?php echo $police_cl_f ?></td>
        </tr>
	    <tr>
          <td><strong><?php echo $hiv_cl_c ?>:</strong></td>
	      <td><?php echo $hiv_cl_f ?></td>
        </tr>
	    <tr>
          <td><strong><?php echo $child_cl_c ?>:&nbsp;&nbsp; </strong></td>
	      <td><?php echo $child_cl_f ?></td>
        </tr>

      </table></TD>
  </tr>
	
	<tr>
	  <TD colSpan="2"><table border="0">
	    
	    <tr>
          <td><strong><?php echo $papersto_c ?>:</strong></td>
	      <td><?php echo $papersto_f ?></td>
        </tr>
        <tr>
          <td><strong><?php echo $deadline_c ?>:</strong></td>
          <td><?php echo $deadline_f ?></td>
        </tr>
      </table>      
      </TD>
  </tr>
	
	<tr>
		<TD colSpan="2">
			<table>
				<tr>
					<td><STRONG><?php echo $trv_details_c ?>:</STRONG></td>
					<td><?php echo $trv_details_f ?></td>
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
        <td><strong><?php echo $org_name_c ?>:</strong></td>
        <td><?php echo $org_name_f ?></td>
      </tr>
      <tr>
        <td nowrap="nowrap"><strong><?php echo $division_c ?>: </strong></td>
        <td><?php echo $division_f ?></td>
      </tr>
      <tr>
        <td nowrap="nowrap"><strong><?php echo $union_c ?>:</strong></td>
        <td><?php echo $union_f ?></td>
      </tr>
      <tr>
        <td nowrap="nowrap"><strong><?php echo $conference_c ?>: </strong></td>
        <td><?php echo $conference_f ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $country_c ?>:</strong></td>
        <td><?php echo $country_f ?></td>
      </tr>
      <tr>
        <td><strong><?php echo $region_c ?>:</strong></td>
        <td><?php echo $region_f ?></td>
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
					<TD><strong><?php echo $supervisor_c ?>:</strong></td>
					<td><?php echo $supervisor_f ?></TD>
				</tr>
				
			</table>		</td>
		<td width=50% valign=top>
			<table>
				<tr>
					<TD><STRONG><?php echo $title_c ?>:</STRONG></td>
					<td><?php echo $title_f ?></TD>
				</tr>
				
			</table>		
		</td>
	</TR>
</TABLE>
		
<table width="100%" class="defaultbordertable">
  <tr>
    <td colspan="2" class="subtitlerow"><strong><?php echo $add_info_c ?> </strong></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $add_info_f ?></td>
  </tr>
</table>



<table class="defaultbordertable"  width="100%" >

<tr style="font-size:smaller">
					<td>
						<?php echo $url_c ?>:  <a href=<?php echo $url_f ?>><strong><?php echo $url_f ?></strong></td></a>
				</tr>
</table>




</div>

 
</div>

</body>


<!-- Mirrored from www.adventistvolunteers.org/LongTerm/ViewCall.aspx?SvcReqID=18049 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2017 12:03:54 GMT -->
