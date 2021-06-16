<?php

class alert_model extends Model {
//require('/Users/josue/sites/sva/application/views/languages/en.php');

  public function getMessage($var, $msg_title, $lang){


    require('/Users/josue/sites/sva/application/views/languages/'.$lang.'.php');
//$test = $langData["GROUPS"]["FORM"]["GROUP2"]["TITLE"];

    $terms = '';
    $project_types = '';
    $sendme = '';
    $reach = '';

    if($var["box1"] == "true"){
        $terms = $terms.$langData["GROUPS"]["FORM"]["EMAIL"]["box1"].'<br>';
    }
    if($var["box2"] == "true"){
        $terms = $terms.$langData["GROUPS"]["FORM"]["EMAIL"]["box2"].'<br>';
    }
    if($var["box3"] == "true"){
        $terms = $terms.$langData["GROUPS"]["FORM"]["EMAIL"]["box3"].'<br>';
    }
    if($var["box4"] == "true"){
        $terms = $terms.$langData["GROUPS"]["FORM"]["EMAIL"]["box4"].'<br>';
    }

    if($var["tp1"] == "true"){
        $project_types = $project_types . '<i class="fa fa-arrow-circle-o-down"></i>'. $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE1"] . "<br>";
    }
    if($var["tp2"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE2"] . "<br>";
    }
    if($var["tp3"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE3"] . "<br>";
    }
    if($var["tp4"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE4"] . "<br>";
    }
    if($var["tp5"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE5"] . "<br>";
    }
    if($var["tp6"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE6"] . "<br>";
    }
    if($var["tp7"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE7"] . "<br>";
    }
    if($var["tp8"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE8"] . "<br>";
    }
    if($var["tp9"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE9"] . "<br>";
    }
    if($var["tp10"] == "true"){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["EMAIL"]["TYPE10"] . "<br>";
    }

    if($var["tp11"] == "true" or $var["tp12"] != ""){
        $project_types = $project_types . $langData["GROUPS"]["FORM"]["GROUP2"]["OTHER"]." ".
        "<strong>".$var["tp12"]."</strong>". "<br>";
    }

    if($var["SMOption"] == "true"){
        $sendme = $langData["GROUPS"]["FORM"]["EMAIL"]["YES"];
    }elseif($var["SMOption"] == "false"){
        $sendme = $langData["GROUPS"]["FORM"]["EMAIL"]["NO"];
    }

    if($var["reach"] == "national"){
        $reach = $langData["GROUPS"]["FORM"]["EMAIL"]["SCOPE1"];
    }elseif($var["reach"] == "international"){
        $reach = $langData["GROUPS"]["FORM"]["EMAIL"]["SCOPE2"];
    }

    $msg_text = 
    '<style>
    table.tabledata td {
      border: 1px solid #dddddd;
      padding: 8px;
    }
    table.tabledata {
      border-collapse: collapse;
    }


    </style>

    <table class="tabledata" style="width:100%">

    
    <th align="center" colspan="2" border-style="hidden"><hr>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TITLE1"].'<hr></th>


    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["SCOPE0"].'</td>
    <td>'.$reach.'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["PROJECT_NAME"].'</td>
    <td>'.$var["form_name"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["PROJECT_DAYS"].'</td>
    <td>'.$var["form_days"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["DATES0"].'</td>
    <td><strong>'.$langData["GROUPS"]["FORM"]["EMAIL"]["DATES1"].'</strong> '.$var["start"].' <strong>'.$langData["GROUPS"]["FORM"]["EMAIL"]["DATES2"].'</strong> '.$var["end"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["INSTITUTION"].'</td>
    <td>'.$var["form_inst"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TYPE0"].'</td>
    <td>'.$project_types.'</td>
    </tr>

    <th align="center" colspan="2" border="0"><hr>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TITLE2"].'<hr></th>

    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["DIVISION"].'</td>
    <td>'.$var["form_division2"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["UNION"].'</td>
    <td>'.$var["form_union2"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["CONFERENCE"].'</td>
    <td>'.$var["form_conference2"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["CITY"].'</td>
    <td>'.$var["form_district2"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["COORD_NAME"].'</td>
    <td>'.$var["form_coord"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["COORD_PHONE"].'</td>
    <td>'.$var["form_phone"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["COORD_EMAIL"].'</td>
    <td>'.$var["form_email"].'</td>
    </tr>

    <th align="center" colspan="2" border="0"><hr>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TITLE3"].'<hr></th>

    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["DIVISION"].'</td>
    <td>'.$var["form_division"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["UNION"].'</td>
    <td>'.$var["form_union"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["CONFERENCE"].'</td>
    <td>'.$var["form_conference"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["CITY"].'</td>
    <td>'.$var["form_district"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["HOST_NAME"].'</td>
    <td>'.$var["form_coord2"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["HOST_PHONE"].'</td>
    <td>'.$var["form_phone2"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["HOST_EMAIL"].'</td>
    <td>'.$var["form_email2"].'</td>
    </tr>

    <th align="center" colspan="2" border="0"><hr>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TITLE4"].'<hr></th>
    
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["SENDME"].'</td>
    <td>'.$sendme.'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TERMS"].'</td>
    <td>'.$terms.'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["NONSDA"].'</td>
    <td>'.$var["form_qtd"].'</td>
    </tr>

    <th align="center" colspan="2" border="0"><hr>'.$langData["GROUPS"]["FORM"]["EMAIL"]["TITLE5"].'<hr></th>

    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["VOTE_NUMBER"].'</td>
    <td>'.$var["form_vote"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["VOTE_PLACE"].'</td>
    <td>'.$var["form_vote_inst"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["PAYMENT"].'</td>
    <td>'.$var["form_payment_inst"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["AVSCOORD"].'</td>
    <td>'.$var["form_sva_coord"].'</td>
    </tr>
    <tr>
    <td>'.$langData["GROUPS"]["FORM"]["EMAIL"]["NOTE"].'</td>
    <td>'.$var["form_message"].'</td>
    </tr>

    </table>';



    return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" style="font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
    <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Alerts e.g. approaching your limit</title>


    <style type="text/css">
    img {
      max-width: 100%;
    }
    body {
      -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;
    }
    body {
      background-color: #f6f6f6;
    }
    @media only screen and (max-width: 640px) {
      body {
        padding: 0 !important;
      }
      h1 {
        font-weight: 800 !important; margin: 20px 0 5px !important;
      }
      h2 {
        font-weight: 800 !important; margin: 20px 0 5px !important;
      }
      h3 {
        font-weight: 800 !important; margin: 20px 0 5px !important;
      }
      h4 {
        font-weight: 800 !important; margin: 20px 0 5px !important;
      }
      h1 {
        font-size: 22px !important;
      }
      h2 {
        font-size: 18px !important;
      }
      h3 {
        font-size: 16px !important;
      }
      .container {
        padding: 0 !important; width: 100% !important;
      }
      .content {
        padding: 0 !important;
      }
      .content-wrap {
        padding: 10px !important;
      }
      .invoice {
        width: 100% !important;
      }
    }
    </style>
    </head>

    <body itemscope itemtype="http://schema.org/EmailMessage" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">

    <table class="body-wrap" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
    <td class="container" width="800" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 800px !important; clear: both !important; margin: 0 auto;" valign="top">
    <div class="content" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 800px; display: block; margin: 0 auto; padding: 20px;">
    <table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="alert alert-warning" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #FF9F00; margin: 0; padding: 20px;" align="center" bgcolor="#FF9F00" valign="top">
    '.$msg_title.'
    </td>
    </tr><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-wrap" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><tr style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
    '.$msg_text.'
    </td>
    </tr></table></td>
    </tr></table><div class="footer" style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">



    </div></div>
    </td>
    <td style="font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
    </tr></table></body>
    </html>';

    //return $config["lang"]["GROUPS"]["FORM"]["GROUP1"]["NAME"];
  }


}

?>