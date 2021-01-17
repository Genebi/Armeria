<?php 

		$nombre = $_POST['nombre'];
		$telefono = $_POST['tel'];
		$email 	  = $_POST['email'];
		$mensaje  = $_POST['mensaje'];

		if (empty($nombre) || empty($telefono) || empty($email) || empty($mensaje)){

			echo "Ha ocurrido un error";

		} else {

			$to = "jando_16@hotmail.com";
			$message .= "\n\nNombre: ".$nombre."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;
			$headers = 'From: '.$email.' ('.$nombre.')';
			
			mail($to, $subject, $message, $headers);
		}

?>