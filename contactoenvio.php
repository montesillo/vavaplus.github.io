
	<?php

if (isset($_POST['enviar'])) {
	$to='montesillo25@gmail.com';
	$subject='el sujeto';
	$message='hola';
	$cabecera='From: montes2577@gmail.com'."\r\n".
				'Reply-To: montes2577@gmail.com'."\r\n".
				'X-Mailer: PHP/'. phpversion();
if (mail($to, $subject, $message, $cabecera)) {
	echo "Enviado";
}else{
	echo "No enviado";
}

	
	}
//admin@wampserver.invalid
?>
