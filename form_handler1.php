<?php
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$id_type = $_POST['id_type'];
$id_number = $_POST['id_number'];
$nationality = $_POST['nationality'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$number_adults = $_POST['number_adults'];
$number_children = $_POST['number_children'];
$duration = $_POST['duration'];
$date = $_POST['date'];

$email_from = 'info@chichiluxuriousapartments.com';

$email_subject = 'Someone want to book an apartment. \nBooking Details.';

$email_body =   "User Name: $fName $lName. \n". 
                "User Email: $visitor_email. \n".
                "Nationality: $nationality. \n".
                "ID Type: $id_type. \n". 
                "ID Number: $id_number. \n". 
                "WhatsApp/Contact: $number. \n". 
                "Number of Adults: $number_adults. \n".
                "Number of Children: $number_children. \n".
                "Duration: $duration. \n".
                "Date: $date. \n".



$to = 'chichiluxuriousapartments@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: success.html");
?>