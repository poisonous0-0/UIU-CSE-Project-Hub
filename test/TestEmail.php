<?php
$to = "mhossainsaki@gmail.com, mhossain212133@bscse.uiu.ac.bd, maazbd.pc@gmail.com"; // Replace with recipient's email addresses separated by commas
$subject = "Test Email"; // Replace with email subject
$message = "You can do it"; // Replace with email message

$sender_name = "UIU CSE Project Show"; // Replace with sender's name
$sender_email = "mhossainsaki@outlook.com"; // Replace with sender's email address

$headers = "From: $sender_name <$sender_email>\r\n"; // Include sender's name and email address

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}5
?>