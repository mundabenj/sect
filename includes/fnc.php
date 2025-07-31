<?php

function checkUserLoggedIn() {

    // Check if the user is logged in
    if (!isset($_SESSION['consort'])) {
        header("Location: signin.php?error=not_logged_in");
        exit;
    }

    }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function SendMail($to, $subject, $message) {

require '../plugins/PHPMailer/vendor/autoload.php';
    $mail = new PHPMailer(true);

    // Set mailer to use SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bbitalex@gmail.com';
    $mail->Password = 'lbxd hxbb sgde aknq';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Recipients
    $mail->setFrom('bbitalex@gmail.com', 'Alex Okama');
    $mail->addAddress($to);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    if (!$mail->send()) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } else {
        echo "Message has been sent";
    }
}