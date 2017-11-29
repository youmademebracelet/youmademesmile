<?php 
if(isset($_POST["submit"])) {
$recipient= "youmademe17@gmail.com";
$name = $POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$subject = "One dot";
$mailheader = "From: $email \r\n";
}
if ($POST['submit']){
	if (mail($subject, $formcontent, $mailheader) {echo 'Thank you!'} 
		else { echo 'Somethign went wrong, please try again.';
		}
}
?>