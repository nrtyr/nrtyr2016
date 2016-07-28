<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES utf8");


if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtDirecc']) && !empty($_POST['txtDirecc']) &&
	isset($_POST['txtTelefono']) && !empty($_POST['txtTelefono']) &&
	isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo']) &&
	isset($_POST['txtNPro']) && !empty($_POST['txtNPro']) &&
	isset($_POST['txtTexto']) && !empty($_POST['txtTexto'])) {

// Salida del Correo

	$email_to = "sistemas@nicolasromero.mx, uippenr@nicolasromero.mx";
	$email_subject = "Consulta Ciudadana";

// Salida del Correo

//Contenido del Correo

	$email_message = "Plan de Desarrollo Municipal de Nicolás Romero:\n\n";
	$email_message .= "Nombre: " . $_POST['txtNombre'] ."\n";
	$email_message .= "Dirección: " . $_POST['txtDirecc'] ."\n";
	$email_message .= "Teléfono: " . $_POST['txtTelefono'] . "\n";
	$email_message .= "Correo: " . $_POST['txtCorreo'] . "\n";
	$email_message .= "Nombre del Proyecto: " . $_POST['txtNPro'] . "\n";
	$email_message .= "Proyecto: " . $_POST['txtTexto'] . "\n";


//Contenido del Correo

	
	// El header_ Transforma todo en español UTF8
 	$header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
	// Ahora se envía el e-mail usando la función mail() de PHP
	@mail($email_to, $email_subject, $email_message, $header_);


	echo "<script> alert('Datos Guardados!'); </script>";
	echo "<script> window.location='form.php'; </script>";

}else{
	echo "<script> alert('Favor de llenar todos los campos!'); </script>";
	echo "<script> window.location='form.php'; </script>";
}

 ?>

