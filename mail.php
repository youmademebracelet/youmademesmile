<?php 
if(isset($_POST["submit"])) {
$to= "youmademe17@gmail.com";
$name = $POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$subject = "One dot";
$mailheader = "From: $email \r\n";
}
if (mail($subject, $formcontent, $mailheader) {echo "<p>Thank you!</P>"} 
		else { echo("<p>Something went wrong, please try again.</p>");
		}
}
?>