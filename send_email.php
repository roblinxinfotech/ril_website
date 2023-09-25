<?php

echo"<pre>"; print_r($_POST); exit;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data

    echo"<pre>"; print_r($_POST); exit;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Recipient's email address
    $to_email = "chetan.dodiya@roblinx.com";

    // Subject of the email
    $subject = "Message from $name";

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    $mail_sent = mail($to_email, $subject, $email_message, $headers);

    if ($mail_sent) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    // Handle GET requests or direct access to the script
    echo "Invalid request.";
}
?>