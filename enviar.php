<?php
	
	$nombre = $_POST["name2"];
	$correo = $_POST["mail2"];
	$consulta = $_POST["message2"];


	$header = 'From: ' . $correo . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Mensaje enviado por " . $nombre . " \r\n";
	$mensaje .= "Su e-mail es: " . $correo . " \r\n";
	$mensaje .= "Mensaje: " . $consulta . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = "contacto@dribyte.cl";
	$asunto = "Contacto desde formulario dribyte.cl";

	$estado = mail($para, $asunto, utf8_decode($mensaje), $header);
	if ($estado) {
		header("Location: index.html?estado=1");
	}
	else{
		header("Location: index.html?estado=0");
	}

	


?>