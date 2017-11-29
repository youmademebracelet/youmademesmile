<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "youmademe17@gmail.com";
$subject = "Two dots";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader, $phone) or die("Error!");
echo "Thank You!";
?>