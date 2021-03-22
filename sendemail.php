<?php if(isset($_POST["username"])){
	// Read the form values
	$success = false;
	$userName = isset( $_POST['username'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['username'] ) : "";
	$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
	$message = isset( $_POST['contact_message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['contact_message'] ) : "";

	//Headers
	$to = "leandro2fisiu@gmail.com"; // Please insert your email here
    $subject = 'Contactanos';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	//body message
		$message = "Nombre: ". $userName . "<br>
	Correo: ". $senderEmail . "<br>
	Mensaje: " . $message . "";

	//Email Send Function
    $send_email = mail($to, $subject, $message, $headers);

    echo ($send_email) ? '<div class="success">El correo electrónico ha sido enviado con éxito.</div>' : 'Error: No se ha enviado el correo electrónico.';
} else {
	echo '<div class="failed">Error al enviar su correo electrónico.</div>';
}
?>
