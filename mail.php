<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$to= "youmademe17@gmail.com";
$subject = "One dot";
$mailheader = "From: $email \r\n";
if ($POST['submit']){
	if (mail($recipient, $subject, $formcontent, $mailheader, $phone)) {echo 'Thank you!'} 
		else { echo 'Somethign went wrong, please try again.';
		}
}
?>