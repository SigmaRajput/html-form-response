<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// SMTP settings for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'gomadppvtltd@gmail.com'; // Your Gmail email address
// $mail->Password = 'your_'; // Your Gmail password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Sender and recipient
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('gomadpvtltd@gmail.com'); // Your Gmail email address

// Email content
$mail->isHTML(false);
$mail->Subject = 'Contact Form Submission';
$mail->Body = $_POST['message'];

// Send the email
if ($mail->send()) {
    echo 'Message sent!';
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
?>
