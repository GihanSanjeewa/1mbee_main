<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings                
     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.1mbee.lk';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '1mbeewebmail@1mbee.lk';                     //SMTP username
    $mail->Password   = '2023shakthi';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                   

    //Recipients
    $mail->setFrom = $_POST["Email"];
    $mail->addAddress('1mbeewebmail@1mbee.lk', '1MBEE Softwere');     //Add a recipient

    $mail->addReplyTo('1mbeewebmail@1mbee.lk', 'Information');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST["Full_Name"];
    $mail->Body    = $_POST["message"];
    $mail -> Body = $_POST["Phone_Number"];
    $mail -> Body = $_POST["Email"];

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}