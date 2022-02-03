<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'francisco.goonzalez99@gmail.com';                     //SMTP username
    $mail->Password   = '150819MyF';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `
    
    /* Chgaucho@hotmail.com Chgaucho@hotmail.com */
    /* CHRISTIAN RINCON */
    //Recipients
    $mail->setFrom('francisco.goonzalez99@gmail.com', 'SHHH!');
    $mail->addAddress('Chgaucho@hotmail.com', 'SHHH!'); /* adry_ada@live.com.ar  */   //Add a recipient
   /*  $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'francisco.goonzalez99@gmail.com';//jesus.xeneixe@gmail.com auroralopez9627@gmail.com
    $mail->Body    = '<h1>LA 8 SE ACTIVO</h1>';
    $mail->AltBody = '<h1>¡SE ACTIVO LA 8!</h1>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>