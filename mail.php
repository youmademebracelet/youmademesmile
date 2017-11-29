<?php 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$formcontent="From: $name \n Message: $message";
$admin_email= "youmademe17@gmail.com";
$subject = "One dot";
$mailheader = "From: $email \r\n";
if ($REQUEST['submit']){
	if (mail(($subject, $formcontent, $mailheader)) {echo 'Thank you!'} 
		else { echo 'Somethign went wrong, please try again.';
		}
}
?>