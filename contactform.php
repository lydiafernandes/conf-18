<?php
echo "testing before";

include_once('phpmailer/PHPMailerAutoload.php');
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
        $mail->Port=465;

        //$set subject
        $mail->Subject="$subject";
        $mail->isHTML(true);

        $mail->Body="this is $msg";


        $mail->setFrom($email_from, $name);

        //set where we are sending the mail
        $mail->sendEmailTo($mail_to);

        if($mail->send())
        {
            echo "mailis sent";
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