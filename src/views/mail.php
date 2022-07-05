<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "msraza.02@gmail.com";
$subject = "Mail From M Saim Raza";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@msr.com" . "\r\n" .
    "CC: msraza.002@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:Preview.vue");
