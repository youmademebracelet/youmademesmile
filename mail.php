<html>
<head>
</head>
<body>
<?php 
$to = "youmademe17@gmail.com";
$subject = "One dot";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent ="From: $name \n Message: $message";
$mailheader = "From: $email \r\n";
User-Agent: youmademebracelet

$retval = (mail($subject, $formcontent, $mailheader) 

	if( $retval == true ) {echo "<p>Thank you!</p>"} 
		else { echo("<p>Something went wrong, please try again.</p>");
		}
}
?>
</body>
</html>