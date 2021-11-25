<?php

header("X-XSS-Protection: 0");

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$to = 'info@cikoakoconstructions.com';
$from = "From: noreply@cikoakoconstructions.com";

$subject = "Inquiry";

$content = 'Name: '.$name."\n"
.'Email: '.$email."\n"
.'Message: '.$message."\n";

mail($to,$subject,$content,$from);


$msg = 'Thank you for contacting Ciko & Ako Construction Limited.';
include('contact.php');
exit;


?>