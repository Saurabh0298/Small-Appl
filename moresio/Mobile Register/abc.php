<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'Connect.php';

if(isset($_POST['submit']))
{


$mailto=$_POST['$mailto'];
$mailsub=$_POST['mailsub'];
$mail_msg=$_POST['mail_msg'];
$e=$_POST['e'];
//Load Composer's autoloader
require 'PHPMailer-master/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'email';                 // SMTP username
    $mail->Password = 'pword';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('email', 'pword');
    $mail->addAddress('email', 'name');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '$mailsub';
    $mail->Body    = '$maill_msg';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send())
    {
        echo'Message is not send';
    }
    else
    {
        echo'Message is send';
    }
}