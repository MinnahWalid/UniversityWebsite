<?php
$name = $_POST['mame'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['massage'];


$emil_from = 'info@osamahabib.com'
$email_subject = 'mew from subnission'
$email_body = "user name: $name.\n"
               "user email: $visitor_email.\n"
               "user subject: $subject.\n"
               "user message: $message.\n;


$to = 'avinash6252@gmail.com'

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,email_subject,email_body,headers);

header{"Location: contact.html"};
?>
