<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$formcontent="De: $name \n Mensage: $message";
$recipient = "zsolt.palfi20@gmail.com";
$subject = "Cliente";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>