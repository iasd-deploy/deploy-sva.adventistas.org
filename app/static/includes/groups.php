<?php 
header('Content-type: application/json');

require '/Users/josue/sites/sva/static/libraries/PHPMailer/src/Exception.php';
require '/Users/josue/sites/sva/static/libraries/PHPMailer/src/PHPMailer.php';
require '/Users/josue/sites/sva/static/libraries/PHPMailer/src/SMTP.php';

include("alert.php");

$msg_title 	= '<strong>'.$_POST["form_name"].' - '.$_POST["FormType"].'</strong';

$htmlContent = getMessage($_POST, $msg_title);

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "avsbox.dsa@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "wasliebstdu7?J";
//Set who the message is to be sent from
$mail->setFrom('avsbox.dsa@gmail.com', 'AVSbox');
//Set an alternative reply-to address
$mail->addReplyTo('voluntarios@adventistas.org', 'Serviço Voluntário Adventista');
//Set who the message is to be sent to
$mail->addAddress('avsbox.dsa@gmail.com', 'AVSbox');
$mail->addAddress($_POST["form_email"], $_POST["form_coord"]);
//Set the subject line
$mail->Subject = 'Novo projeto em grupo';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents($htmlContent), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
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

//send the message, check for errors
if (!$mail->send()) {
	$someJSON = '{"message":"Erro ao processar seu pedido. Por favor, entre em contato com o email: voluntarios@adventistas.org","status":"false"}';
// Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  echo json_encode($someArray);
    // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message sent!";
    $someJSON = '{"message":"Formulário enviado com sucesso! O coordenador do projeto receberá uma confirrmação por e-mail","status":"false"}';
// Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  echo json_encode($someArray);




    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}






?>