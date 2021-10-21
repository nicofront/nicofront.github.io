<?php
if(isset($_POST['correo'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "thomaslight@gmail.com";
    $email_subject = "Contacto Hivetire - ".$_POST['nombre'];
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['nombre']) ||
        !isset($_POST['asunto']) ||
        !isset($_POST['mensaje']) ||
        !isset($_POST['correo'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $nombre = $_POST['nombre']; // required
    $asunto = $_POST['asunto']; // required
    $mensaje = $_POST['mensaje']; // required
    $email_from = $_POST['correo']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Asunto: ".clean_string($asunto)."\n";
    $email_message .= "Correo: ".clean_string($email_from)."\n";
    $email_message .= "Mensaje: ".clean_string($mensaje)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$sent = @mail($email_to, $email_subject, $email_message, $headers);  

}
?>