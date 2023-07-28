<?php
require 'mail/PHPMailerAutoload.php';

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new PHPMailer;
$mail-> isSMTP();


// $mail->SMTPDebug = 4;                               // Enable verbose debug output

// $mail->SMTPOptions = array (
//     'ssl' => array(
//     'verify_peer' => false,
//     'verify_peer_name' => false,
//     'allow_self_signed' => true
//     )
//     );                                     // Set mailer to use SMTP
$mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@sivasakthiglassandplywoods.com';                 // SMTP username
$mail->Password = 'Sthree@2023';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('no-reply@sivasakthiglassandplywoods.com', 'Sivasakthi Glass and Plywood');
$mail->addAddress('admin@sivasakthiglassandplywoods.com');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'mail from Sivasakthi Glass and Plywood website';
$mail->Body    = " Name: {$name}<br>
Email: {$email}<br>
Mobile Number: {$mobile}</br>
Subject: {$suubject}<br>
Message: {$message}";
// $masil->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Refresh:1, url=redirect.php");
    exit();
}  
?>