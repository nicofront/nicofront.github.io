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
	$correobase = "thomaslight@gmail.com";
	$password = "year40xx";

	if(!isset($_POST['nombre']) ||
	    !isset($_POST['apellido']) ||
	    !isset($_POST['pais']) ||
	    !isset($_POST['telefono']) ||
	    !isset($_POST['empresa']) ||
	    !isset($_POST['cargo']) ||
	    !isset($_POST['tipoempresa']) ||
	    !isset($_POST['cantidadvehiculos']) ||
	    !isset($_POST['correo'])) {
	    died('We are sorry, but there appears to be a problem with the form you submitted.');       
	}

	// Seteando variables
	$nombre = $_POST['nombre']." ".$_POST['apellido'];
	$asunto = "Solicitud Demo";
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$pais = $_POST['pais'];
	$empresa = $_POST['empresa'];
	$cargo = $_POST['cargo'];
	$tipoempresa = $_POST['tipoempresa'];
	$cantidadvehiculos = $_POST['cantidadvehiculos'];

	$mensaje = "<b>Nombre:</b> ".$nombre."<br>";
	$mensaje .= "<b>País:</b> ".$pais."<br>";
	$mensaje .= "<b>Empresa:</b> ".$empresa."<br>";
	$mensaje .= "<b>Cargo:</b> ".$cargo."<br>";
	$mensaje .= "<b>Tipo de Empresa:</b> ".$tipoempresa."<br>";
	$mensaje .= "<b>Cantidad de Vehículos:</b> ".$cantidadvehiculos."<br>";
	$mensaje .= "<b>Teléfono:</b> ".$telefono;

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
	$mail->Subject = "[Demo] ".$nombre." - ".$asunto;

	$content = clean_string($mensaje);

	$mail->MsgHTML($content); 
	if(!$mail->Send()) {
	  echo "Error while sending Email.";
	  var_dump($mail);
	} else {
	  echo "Email sent successfully";
	}
?>