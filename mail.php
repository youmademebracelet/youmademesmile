<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$admin_email = "youmademe17@gmail.com";
$subject = "One dot";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader, $phone) or die("Error!");
echo "Thank You!";
?>