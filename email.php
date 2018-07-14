<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */



//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    
//Load Composer's autoloader
//require 'vendor/autoload.php';

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


//if submit was clicked. verifies user didn't just browse to /email.php
if (isset($_POST['submit'])) {
    
    $name = $_POST['name'] ?: 'Name Error';
    $email = $_POST['email'] ?: 'E-mail Error';
    $body = $_POST['body'] ?: 'Message Error';
    
    $message = 'GENERAL INQUIRY<br><br>Name: '.$name.'<br>From: '.$email.'<br><br>Message:<br>'.$body;
    
    if (isset($_POST['num'])) {
        $phone = $_POST['num'] ?: 'No Telephone Number';
    }
    
    if (isset($_POST['location'])) {
        $location = $_POST['location'] ?: 'Location Error';
    }
    
    if ((isset($_POST['location'])) and (isset($_POST['num']))) {
        $message = 'SERVICE REQUEST<br><br>Name: '.$name.'<br>From: '.$email.'<br>Phone: '.$phone.'<br><strong>Location: </strong>'.$location.'<br><br>Message:<br>'.$body;
    }

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    
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
    //$mail->addAddress('service@alignhomehealthcare.ca', 'Align Services');
    $mail->addAddress('gbraga@uwo.ca', 'Align Services');
    
    //Set the subject line
    $mail->Subject = 'PHPMailer GMail SMTP test';
    
    // Set email format to HTML
    $mail->isHTML(true);                                  
    $mail->Subject = 'Customer Inquiry - Align';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    //send the message, check for errors
    if (!$mail->send()) {
        header('Location: /index.html');
    } else {
        header('Location: /index.html');
    }

}
?>
