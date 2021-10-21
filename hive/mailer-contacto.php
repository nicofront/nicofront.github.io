<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';

	require 'vendor/Autoload.php';

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	function died($error) {
	    echo "We are very sorry, but there were errors found with the form you submitted. ";
	    die();
	}

	// Configuracion
	$correobase = "your-email@gmail.com";
	$password = "your-gmail-password";
	$correobase = "thomaslight@gmail.com";
	$password = "year40xx";

	if(!isset($_POST['nombre']) ||
	    !isset($_POST['asunto']) ||
	    !isset($_POST['mensaje']) ||
	    !isset($_POST['correo'])) {
	    died('We are sorry, but there appears to be a problem with the form you submitted.');       
	}

	// Seteando variables
	$nombre = $_POST['nombre'];
	$mensaje = $_POST['mensaje'];
	$asunto = $_POST['asunto'];
	$correo = $_POST['correo'];

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = "smtp";

	$mail->SMTPDebug  = 1;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = $correobase;
	$mail->Password   = $password;

	$mail->IsHTML(true);
	$mail->AddAddress("thomaslight@gmail.com", "Hivetire");
	$mail->SetFrom("thomaslight@gmail.com", "Hivetire");
	$mail->AddReplyTo($correo, $nombre);
	$mail->Subject = "[Contacto] ".$nombre." - ".$asunto;

	$content = clean_string($mensaje);

	$mail->MsgHTML($content); 
	if(!$mail->Send()) {
	  echo "Error while sending Email.";
	  var_dump($mail);
	} else {
	  echo "Email sent successfully";
	}
?>