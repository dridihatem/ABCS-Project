<?php
error_reporting(0);
require 'PHPmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.dridihatem.com';                 // Specify main and backup server
$mail->Port = 465;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@dridihatem.com';                // SMTP username
$mail->Password = 'metallica@123##';                  // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@dridihatem.com';
$mail->FromName = 'Hatem';
$mail->AddAddress('dridihatem@gmail.com', 'Josh Adams');  // Add a recipient
$mail->AddAddress('dridihatem@gmail.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}

echo 'Message has been sent';
?>