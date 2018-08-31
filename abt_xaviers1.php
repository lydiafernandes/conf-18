<?php
//session_start();
//inlcude 'session.php';
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    
  <style>
  .column {
    float: left;
    width: 33.33%;
    padding: 0px 5px 0px;
    margin:0px;
}

</style>


</head>
<body> 
    <!-- include the nav bar -->


<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->

<div class="row" style="border:none; background:white;">
		<div class="col-sm-5 col-md-5 col-xs-5">
			<img src="img/abt_us_images/xaviers_chapel.jpg" class="img-fluid" style="width:100%; height:100%; margin-left:-15px;" />
		</div>
		<div class="col-sm-7 col-md-7 col-xs-7">  
			<h3>Hello World</h3>
			<p style="font-size:10px; color:#03225C;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa.</p>
		</div>
	</div>
<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>