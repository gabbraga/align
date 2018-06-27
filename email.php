<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

$name = $_POST['name'] ?: 'name error';
$email = $_POST['email'] ?: 'email error';
$body = $_POST['body'] ?: 'body error';
$message = 'Name: '.$name.'<br>From: '.$email.'<br>Body:<br>'.$body;


//Import PHPMailer classes into the global namespace
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'a2plcpnl0435.prod.iad2.secureserver.net';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 25;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = "none";
//Whether to use SMTP authentication
$mail->SMTPAuth = false;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "";
//Password to use for SMTP authentication
$mail->Password = "";
//Set who the message is to be sent from
$mail->setFrom('service@alignhomehealthcare.ca', 'Align Customer');
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAddress('service@alignhomehealthcare.ca', 'Align Services');
//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';
// Set email format to HTML
$mail->isHTML(true);                                  
$mail->Subject = 'Here is the subject';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>