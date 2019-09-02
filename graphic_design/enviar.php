<?php
$Nombre = $_POST['nome'];
$Email = $_POST['email'];
$Telefono = $_POST['telf'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $Nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "Su telefono es: " . $Telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaxe'] . " \r\n";
$mensaje .= "Enviado el " . date("d/m/y \a \l\a\s H:i:s ");

$para = 'hola@ellagrimal.com';
$asunto = 'Contacto desde la web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header( 'Location: http://www.ellagrimal.com/graphic_design/gracias.html' )
?>