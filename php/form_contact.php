<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['phone_no'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
  con telefono " . $telefono . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['Message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'starpromord@gmail.com';
$asunto = 'Solicitud de informaci&oacute;n';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("location: formulario.html");
?>