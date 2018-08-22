<?php

    if(isset([$_POST['submit']))
    {
        $name = $_POST['frm_name'];
        $email_from = $_POST['frm_email'];
        $subject = $_POST['frm_subject'];
        $msg = $_POST['frm_msg'];

        $mail_to = "isc150@xaviers.edu";
        $headers = "From: ".$email_from;
        $txt = "You have received an email from ". $name.".\n\n".$msg;

        mail($mail_to, $subject, $txt, $headers);
        header("Location: contact.php?mailsend");
    }
    else
    {
        echo "Something went wrong";
        //header("Location: contact.php);
    }

?>