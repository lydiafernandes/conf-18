<?php

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require_once "vendor/autoload.php";

$mail = new PHPMailer;

echo "<br> testing after <br>";
   if(isset($_POST['submit']))
    {
        echo "<br> data has come in<br>";
        $name = $_POST['frm_name'];
        $email_from = $_POST['frm_email'];
        $email_to = "isc150@xaviers.edu";
        $subject = $_POST['frm_subject'];
        $msg = $_POST['frm_msg'];
    }
    else {
        echo "<br> data was not captured";
    }

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "isc150@xaviers.edu";                 
$mail->Password = "Isc1501819";//my mail password                      
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From =$email_from;
$mail->FromName = $name; //"Lydia Fernandes";

$mail->addAddress("isc150@xaviers.edu", "Recepient Name: Science Conference");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML = </i>".$msg;
$mail->AltBody = "This is the plain text version of the email content";

if(!($mail->send())) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
    header("location: http://www.xaviersmumbaiconf.org/contact.php");
} 
  //  echo "Message has been sent successfully";
    header("location: http://www.xaviersmumbaiconf.org/contact.php");

?>