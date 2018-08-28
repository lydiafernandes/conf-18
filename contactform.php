<?php
echo "testing before";
//require "phpmailer/PHPMailerAutoload.php";
include_once('phpmailer/PHPMailerAutoload.php');
echo "testing";
   if(isset($_POST['submit']))
    {
        echo "data has come in";
        $name = $_POST['frm_name'];
        $email_from = $_POST['frm_email'];
        $email_to = "isc150@xaviers.edu";
        $subject = $_POST['frm_subject'];
        $msg = $_POST['frm_msg'];

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