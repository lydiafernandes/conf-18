<?php
//session_start();


?>
<!DOCTYPE html>
<HTML>
    <head>
        <title> Contact Us </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" type="text/css" href="css/style_contact.css"> 
       

        <style>
            :link{
                color:white;
            }
            visited{ color:white}
            :hover{
                color:white;
            }
            :active{
                color:white;
            }
        </style>
</head>
<body> 
    <!-- includee the nav bar -->
<?php include("includes/navigation1.php");?>

    <div class="container contact-form">
            <h1> Write to us @</h1>
            <hr>
            <div class="row">

          

            <div class="col-md-6">

                <p><a href="mailto:isc150@xaviers.edu">Email: isc150@xaviers.edu</a></p>
                <address> 5, Mahapalika Marg, Mumbai, 400001 </address>
                
                <p>Contact: 022 2262 0661</p>
            </div> <!-- end of col-md-6 -->

            

          </div> <!-- end of row class-->

        </div> <!-- end of container class--> 

        <!--- Connect -->
<?php include("includes/footer.php");?>
</body>
</HTML>