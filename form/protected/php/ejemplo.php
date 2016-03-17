<?php 

require_once('AttachMailer.php'); 

$mailer = new AttachMailer("correo@correo.com", "sistemas@nicolasromero.mx", "asunto", "hello contenido del mensaje");
$mailer->attachFile("ok.pdf");
$mailer->send() ? "Enviado": "Problema al enviar";


 ?>