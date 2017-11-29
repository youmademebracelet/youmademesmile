<html>
<head>
</head>
<body>
<?php 
$to= "youmademe17@gmail.com";
$subject = "One dot";
$name = $GET['name'];
$email = $GET['email'];
$message = $GET['message'];
$formcontent="From: $name \n Message: $message";
$mailheader = "From: $email \r\n";

$retval = (mail($subject, $formcontent, $mailheader) 

	if( $retval == true ) {echo "<p>Thank you!</p>"} 
		else { echo("<p>Something went wrong, please try again.</p>");
		}
}
?>
</body>
</html>