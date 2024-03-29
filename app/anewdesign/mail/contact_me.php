<?php
// Check for empty fields
if(empty($_POST['firstName'])      ||
if(empty($_POST['lastName'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$firstName = strip_tags(htmlspecialchars($_POST['firstName']));
$lastName = strip_tags(htmlspecialchars($_POST['lastName']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'info@cloudpeaklaw.com'; 
$email_subject = "Website Contact Form:  $firstName $lastName";
$email_body = "You have received a new message from Cloud Peak Law website contact form.\n\n"."Here are the details:\n\nName: $firstName $lastName\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@cloudpeaklaw.com\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
