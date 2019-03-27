<?php

if (isset($_POST["from"])) {
    
   
    $to      = 'mbasurto@empresainteligente.com';
	$name = $_POST["name"];
	$subject = 'GEB - ' . $name . ' ha dejado un mensaje';
	$message = $_POST["message"];

	$email = $_POST["email"];

	$headers = 'From: webmaster@grupob.com' . "\r\n" .
	    'Reply-To: ' . $email . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	header("Location: http://grupoempresarialb.com/successmsg.html");
	die();

    }
  }

?> 