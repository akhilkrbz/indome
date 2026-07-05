<?php
	
/* Email Address */	
$to = '';

/* Subject */
$subject = 'Indome Furnitures Newsletter Form';

/* Headers */
$headers = 'From: Indome Furnitures' . "\r\n" .
    'Reply-To: indome@indome.com' . "\r\n";

$email = $_POST['newsletter-email'];
$name = $_POST['newsletter-name'];

if(isset($email) && !empty($email)){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$message = !empty($name) ? 'Name: '.$name.', Email: '.$email : 'Email: '.$email;
		echo mail($to, $subject, $message, $headers);
	}else{
		echo 2;
	}
	
}

?>