<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "testing before";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
 

//include('phpmailer/PHPMailerAutoload.php');
echo "<br> testing after <br>";
   if(isset($_POST['submit']))
    {
        echo "<br> data has come in<br>";
        $name = $_POST['frm_name'];
        $email_from = $_POST['frm_email'];
        $email_to = "isc150@xaviers.edu";
        $subject = $_POST['frm_subject'];
        $msg = $_POST['frm_msg'];

        //creating an instance of PHPMailer
        $mail = new PHPMailer();

        //set a host
        $mail->Host = "smtp.gmail.com";

        //enable SMTP
        $mail->isSMTP();
        $mail->SMTPDebug=2;

        //set login details for gmail account
        $mail->SMTPAuth=true;
        $mail->Username='isc150@xaviers.edu';
        $mail->Passsword='Isc1501819';

        //set type protection
        $mqil->SMTPSecure = "ssl";

        //set a port
        $mail->Port=25; //465

        //set subject
        $mail->Subject=$subject;
        $mail->isHTML(true);

        //set body
        $mail->Body="this is $msg";

        //set who is sending the email
        $mail->setFrom($email_to, $name);

        //set where we are sending the mail (recepients)
        $mail->sendEmailTo($email_to);


        //send an email
        if($mail->send())
        {
            echo "mail is sent";
        }
        else 
           echo "Something went wrong".$mail->ErrorInfo;



      /*  $mail_to = "isc150@xaviers.edu";
        $headers = "From: ".$email_from;
        $txt = "You have received an email from ". $name.".\n\n".$msg;

        if (mail($mail_to, $subject, $txt, $headers)){
            echo "Mail sennt";
        }
        header("Location: contact.php?mailsend");
    }
    else
    {
        echo "Something went wrong";
        //header("Location: contact.php);
    }*/
    }

?>