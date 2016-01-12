<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alexandre@pixeline.be';                 // SMTP username
$mail->Password = 'bDMUEuWn1H4r3FCGQjyO-g';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('delphinetravanca@gmail.com');
$mail->addAddress($email);     

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Newsletter';
$mail->Body    = '<a href="http://delphinegregoire.be/php/mailinglist/confirm.php?id='.$uniqid.'">Confirmer votre adresse email.</a></b>';
$mail->AltBody = 'Pour confirmer votre adresse mail, rendez-vous à cette adresse : http://delphinegregoire.be/mailinglist/confirm.php?id='.$uniqid;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}