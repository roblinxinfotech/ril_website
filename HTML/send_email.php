<?php

http://php.net/smtp
SMTP = localhost; 
http://php.net/smtp-port;
smtp_port = 25;

// Sender's email address
$from_email = "chetan.dodiya@roblinx.com";

// Recipient's email address
$to_email = "rinkesh.vadadoriya@roblinx.com";

// Subject of the email
$subject = "Data from PHP Form";

// Data you want to send in the email
$data = "Name: John Doe\n";
$data .= "Email: john.doe@example.com\n";
$data .= "Message: This is a test message from PHP.";

// Additional headers
$headers = "From: $from_email\r\n";
$headers .= "Reply-To: $from_email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
$mail_sent = mail($to_email, $subject, $data, $headers);

if ($mail_sent) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>