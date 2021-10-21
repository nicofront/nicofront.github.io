<?php
if(isset($_POST['correo'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "thomaslight@gmail.com";
    $email_subject = "Demo Hivetire - ".$_POST['nombre'];
 
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
 
    $nombre = $_POST['nombre']; // required
    $apellido = $_POST['apellido']; // required
    $pais = $_POST['pais']; // required
    $telefono = $_POST['telefono']; // required
    $email_from = $_POST['correo']; // required
    $empresa = $_POST['empresa']; // required
    $cargo = $_POST['cargo']; // required
    $tempresa = $_POST['tipoempresa']; // required
    $cvehiculos = $_POST['cantidadvehiculos']; // required
 
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
    $email_message .= "Apellido: ".clean_string($apellido)."\n";
    $email_message .= "Pais: ".clean_string($pais)."\n";
    $email_message .= "Correo: ".clean_string($email_from)."\n";
    $email_message .= "Telefono: ".clean_string($telefono)."\n";
    $email_message .= "Empresa: ".clean_string($empresa)."\n";
    $email_message .= "Cargo: ".clean_string($cargo)."\n";
    $email_message .= "Tipo Empresa: ".clean_string($tempresa)."\n";
    $email_message .= "Cantidad Vehiculos: ".clean_string($cvehiculos)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$sent = @mail($email_to, $email_subject, $email_message, $headers);  

}
?>