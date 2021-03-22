<?php if(isset($_POST["email"])){
	// Read the form values
	$success = false;
	$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";

	//Headers
	$to = "leandro2fisi@gmail.com"; // Please insert your email here
    $subject = 'Suscribete';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	//body message
	$message = "Correo: ". $senderEmail . "";

	//Email Send Function
    $send_email = mail($to, $subject, $message, $headers);

    echo ($send_email) ? '<div class="success">Exito! Recibiras notificaciones.</div>' : 'Error:correo no suscrito.';
} else {
	echo '<div class="failed">Error al enviar correo electrónico.</div>';
}
?>
