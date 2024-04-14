<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = 'info@chichiluxuriousapartments.com';

$email_subject = 'New Visitor Message.';

$email_body =   "User Name: $name. \n". 
                "User Email: $visitor_email. \n".
                "WhatsApp/Contact: $number. \n". 
                "User Message: $message. \n".

$to = 'chichiluxuriousapartments@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: success.html");
?>