<?php
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "your_email@gmail.com"); // Set your Gmail address

// Set authentication details
$email = "your_email@gmail.com";
$password = "your_gmail_password";

// Additional headers
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully to ' . $to;
} else {
    echo 'Failed to send email.';
}

?>