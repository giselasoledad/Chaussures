<?php
// Replace this with your own email address
$to = 'chaussurescalzados@gmail.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   $contact_message = trim(stripslashes($_POST['message']));
   
   
	if ($subject == '') { $subject = "Contact Form Submission"; }

   // Set Message
   date_default_timezone_set('America/Argentina/Buenos_Aires');
   $time = time();
   $fecha = date("d-m-y");
   $hora = date("h:i A");
   

   $message .= "Nombre: " . $name . "<br />";
	$message .= "Email: " . $email . "<br />";
   $message .= "Mensaje: <br />";
   $message .= nl2br($contact_message);
   $message .= "<br /> ----------------------- <br /> Este email fue enviado desde la pagina " .url();
   $message .= "<br />Fecha de envio: ".$fecha;
   $message.=  "<br />Hora de envio: ".$hora;

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   ini_set("sendmail_from", $to); // for windows server
   $mail = mail($to, $subject, $message, $headers);

	if ($mail) { echo "OK"; }
   else { echo "Algo salio mal, intente de nuevo por favor"; }

}

?>