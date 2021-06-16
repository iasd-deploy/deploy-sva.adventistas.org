<?php

class Groups extends Controller {
	
	function index()
	{
		$current_page = '/groups';
		$groups_model = $this->loadModel("groups_model");
		$divisions = $groups_model->getOrgList(strtolower(LANGUAGE),"GC");
		$unions = $groups_model->getOrgList(strtolower(LANGUAGE),"SAD");

		$template = $this->loadView('groups/main');
		$template->set("divisions", $divisions);
		$template->set("unions", $unions);
		$template->render();
	}

	function orgs($code){
		echo $current_page;
		$model = $this->loadModel("groups_model");
		$result = $model->getOrgList(strtolower(LANGUAGE),$code);
		$lang = strtolower(LANGUAGE);
		$message = "";
		$local_code = "";

		switch(LANGUAGE){
			case "EN": $message = "Please select an option"; break;
			case "PT": $message = "Selecione uma opção"; break;
			case "ES": $message = "Seleccione una opcion"; break;
		}

		if(count($result) > 0){
			echo "<option selected value=\"--\">".$message."</option>";
			foreach ($result as $key => $value){
				if(LANGUAGE == "PT" && $value->code_pt !== NULL){
					echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code_pt.")" . "</option>";
				}elseif(LANGUAGE == "ES" && $value->code_es !== NULL){
					echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code_es.")" . "</option>";
				}else{
					echo "<option value=\"".$value->code."\">" . $value->$lang." (".$value->code.")" . "</option>";
				}
			}
		}else{
			echo "<option selected value=\"--\"> -- </option>";
		}
		
	}

	function send(){		 
		header('Content-type: application/json');
		if($_POST == NULL){
			echo "Nohing to send";
		}else{
			try {
			    $model = $this->loadModel("groups_model");
				$alert_model = $this->loadModel("alert_model");
				$lang = strtolower($_POST["language"]);
				$division 	= $model->getOrg($lang,$_POST["form_division"]);
				$division2 	= $model->getOrg($lang,$_POST["form_division2"]);
				$union2		= $model->getOrg($lang,$_POST["form_union2"]);
				$union 		= $model->getOrg($lang,$_POST["form_union"]);
				$conference2= $model->getOrg($lang,$_POST["form_conference2"]);
				$conference = $model->getOrg($lang,$_POST["form_conference"]);
				
				$_POST["form_division"] 	= $division;
				$_POST["form_division2"] 	= $division2;
				$_POST["form_union"] 		= $union;
				$_POST["form_conference"] 	= $conference;
				$_POST["form_union2"] 		= $union2;
				$_POST["form_conference2"] 	= $conference2;
				//echo "!!!!";
				$msg_title 	= '<strong>'.$_POST["form_name"].' - '.$_POST["form_inst"].'</strong';
				$htmlContent = $alert_model->getMessage($_POST, $msg_title, $lang);
				//$htmlContent = "AAA";
				//echo $htmlContent;
				require '/Users/josue/sites/sva/static/libraries/PHPMailer/src/Exception.php';
			  	require '/Users/josue/sites/sva/static/libraries/PHPMailer/src/PHPMailer.php';
			 	require '/Users/josue/sites/sva/static/libraries/PHPMailer/src/SMTP.php';
			 	require('/Users/josue/sites/sva/application/views/languages/'.$lang.'.php');
			 	$mail = new PHPMailer\PHPMailer\PHPMailer(true);
				//use PHPMailer\PHPMailer\PHPMailer;
				//$mail = new PHPMailer;
				$mail->CharSet = 'UTF-8';
				$mail->Encoding = 'base64';
				$mail->isSMTP();
				$mail->SMTPDebug = 0;
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = "avsbox.dsa@gmail.com";
				$mail->Password = "wasliebstdu7?J";
				$mail->setFrom('voluntarios@adventistas.org', $langData["HEADER"]["title"]);
				$mail->addReplyTo('voluntarios@adventistas.org', $langData["HEADER"]["title"]);
				$mail->addBcc('avsbox.dsa@gmail.com', 'AVSbox');
				$mail->addAddress($_POST["form_email"], $_POST["form_coord"]);
				$mail->Subject = $langData["GROUPS"]["FORM"]["EMAIL"]["NEWPROJECT"];
				$mail->msgHTML(file_get_contents($htmlContent), __DIR__);
				$mail->AltBody = '...';
				$mail->Body = $htmlContent;

				if (isset($_FILES['form_attachment1']) &&
					$_FILES['form_attachment1']['error'] == UPLOAD_ERR_OK) {
					$mail->AddAttachment($_FILES['form_attachment1']['tmp_name'],
					$_FILES['form_attachment1']['name']);

				}

				if (isset($_FILES['form_attachment2']) &&
					$_FILES['form_attachment2']['error'] == UPLOAD_ERR_OK) {
					$mail->AddAttachment($_FILES['form_attachment2']['tmp_name'],
					$_FILES['form_attachment2']['name']);
				}

				if (!$mail->send()) {
					$someJSON = '{"message":"Erro ao processar seu pedido. Por favor, entre em contato com o email: voluntarios@adventistas.org","status":"false"}';
					$someArray = json_decode($someJSON, true);
					echo json_encode($someArray);
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					$return_message = '';
					if($_POST["reach"] == "national"){
						$return_message = $langData["GROUPS"]["FORM"]["EMAIL"]["NATMSG"];
					}elseif($_POST["reach"] == "international"){
						$return_message = $langData["GROUPS"]["FORM"]["EMAIL"]["INTERNATMSG"];
					}else{
						$return_message = $langData["GROUPS"]["FORM"]["EMAIL"]["ALTERMSG"];
					}
					$someJSON = '{"message":"'.$return_message.'","status":"false"}';
					$someArray = json_decode($someJSON, true);
					echo json_encode($someArray);
				}
			} catch (\Exception $e) {
			    $someJSON = '{"message":"Error: <strong>'."Mailer Error: " . $mail->ErrorInfo.'<strong>","status":"false"}';
				$someArray = json_decode($someJSON, true);
				echo json_encode($someArray);
				//echo "Mailer Error: " . $mail->ErrorInfo;
			}
		}
	}

}

?>
