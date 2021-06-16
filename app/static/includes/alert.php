<?php

function getMessage($var, $msg_title){
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

        <th align="center" colspan="2" border-style="hidden">Dados básicos do projeto</th>
        <tr>
        <td>Nome do projeto</td><td>'.      $var["form_name"].'</td>
        </tr>
        <tr>
        <td>Data do projeto</td><td><strong>De:</strong> '.    $var["start"].' <strong>Até:</strong> '.$var["end"].'</td>
        </tr>
        <tr>
        <td>Divisão</td><td>'.          $var["form_division"].'</td>
        </tr>
        <tr>
        <td>União</td><td>'.          $var["form_union"].'</td>
        </tr>
        <tr>
        <td>Associação</td><td>'.       $var["form_conference"].'</td>
        </tr>
        <tr>
        <td>Distrito</td><td>'.         $var["form_district"].'</td>
        </tr>
        <tr>
        <td>Instituição realizadora</td><td>'.  $var["form_inst"].'</td>
        </tr>
        <tr>
        <td>Tipo de projeto</td><td>'.      $var["typeProject"].'</td>

        </tr>
        <th align="center" colspan="2" border="0">Dados do coordenador</th>
        <tr>
        <td>Nome do coordenador</td><td>'.    $var["form_coord"].'</td>
        </tr>
        <tr>
        <td>Telefone do coordenador</td><td>'.  $var["form_phone"].'</td>
        </tr>
        <tr>
        <td>Email do coordenador</td><td>'.   $var["form_email"].'</td>
        </tr>
        
        <th align="center" colspan="2" border="0">Dados do anfitrião</th>
        <tr>
        <td>Nome do anfitrião</td><td>'.    $var["form_coord2"].'</td>
        </tr>
        <tr>
        <td>Telefone do anfitrião</td><td>'.  $var["form_phone2"].'</td>
        </tr>
        <tr>
        <td>Email do anfitrião</td><td>'.   $var["form_email2"].'</td>
        </tr>

        <th align="center" colspan="2" border="0">Documentação</th>
        <tr>
        <td>Preparação Send Me?</td><td>'.    $var["SMOption"].'</td>
        </tr>
        <tr>
        <td>Termos preenchidos</td><td>'.   $var["box1"].', '.$var["box2"].', '.$var["box3"].', '.$var["box4"].'</td>
        </tr>
        <tr>
        <td>Número de não-adventistas</td><td>'.$var["form_qtd"].'</td>
        </tr>
        <tr>
        <td>Número do voto da comissão</td><td>'.$var["form_vote"].'</td>
        </tr>
        <tr>
        <td>Observações</td><td>'.        $var["form_message"].'</td>
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
}









?>