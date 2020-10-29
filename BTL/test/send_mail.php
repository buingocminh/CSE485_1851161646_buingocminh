<?php
include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/Exception.php";
include "PHPMailer-master/src/OAuth.php";
include "PHPMailer-master/src/POP3.php";
include "PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str_body = substr(str_shuffle($permitted_chars), 0, 7); 
    $_SESSION['code'] = $str_body;

    $mail = new PHPMailer(true);                               // Passing 'true' enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'dungkey220@gmail.com';                 // SMTP username
        $mail->Password = 'uvkagupvoojwkpog';                           // SMTP password
        $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, 'ssl' also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        //Recipients
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('dungkey220@gmail.com', '1231');                // Gửi mail tới Mail Server
        $mail->addAddress("hoangn047@gmail.com");               // Gửi mail tới mail người nhận
        //$mail->addReplyTo('ceo.vietpro@gmail.com', 'Information');
        // $mail->addCC('quantri.vietproshop@gmail.com'); //gui cho nguoi thu hai ben quan tri
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Xác nhận mail từ Nguyễn văn dũng ';
        $mail->Body    = "Em chào thầy";
        $mail->AltBody = '1';
        $mail->send();
        echo'gửi mail thành công';
    }catch(Exception $e){
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
?>