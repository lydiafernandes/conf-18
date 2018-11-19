<!DOCTYPE html>
<HTML>
    <head>
        <title> Important Dates </title>
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
        <link href='https://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'>
<style>
.my_content {
    font-family: 'Electrolize';
}

.date_title{
    font-size:36px;
    text-decoration:underline;
}
.date_content{
    font-size:28px;
}



/* Strikethrough */

.strikethrough {
	display: inline-block;
	position: relative;
	transition: all 0.5s cubic-bezier(.55, 0, .1, 1);
}

.strikethrough:after {
	content: '';
	position: absolute;
	display: block;
	width: 100%;
	height: 2px;
	box-shadow: 0 1px rgba(255,255,255,0.6);
	margin-top: -0.7em;
	background: black;
	transform-origin: center left;
	animation: strikethrough 1s 0.5s cubic-bezier(.55, 0, .1, 1) 1;
	transition: transform 0.5s cubic-bezier(.55, 0, .1, 1);
}


/* Little hover effect */

.strikethrough:hover {
	color: rgba(200,0,0,1);
	background: rgba(255, 189, 182, 0.3);
}

.strikethrough:hover:after {
	transform: scaleX(0);
	transform-origin: center right;
}


/* Keyframes for initial animation */

@keyframes strikethrough {
	from {
		transform: scaleX(0);
	}
	to {
		transform: scaleX(1);
	}
}

</style>

</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->
<div class="container-fluid my_content">
  <h1 style="text-align:center">Important Dates </h1>
  
  
  <div class="row">
    
    <div class="col-8 bg-warning">

       <p class="date_title"> Till, 10<sup>th</sup> Nov. 2018: </p> 
        <p class="date_content"> Early Bird Registration as Audience and for Abstract Submission. </p>
    </div>
    <div class="col-4 bg-success">&nbsp;</div>
  </div>

    <div class="row">
        <div class="col-2 bg-success">&nbsp;</div>
         <div class="col-8 bg-warning">
         <p class="date_title"> 
            <span class="strikethrough"> 20<sup>th</sup> Nov. 2018: </span> 
            <br> Now Extended: 3 <sup> rd </sup> Dec. 2018
         </p>
         <p class="date_content"> Last date for Abstract Submission </p>
        </div>
        <div class="col-2 bg-success">&nbsp;</div>
  </div>

    <div class="row">
        <div class="col-4 bg-success">&nbsp;</div>
         <div class="col-8 bg-warning">
         <p class="date_title"> <b> 9<sup>th</sup> Jan. 2019 </b> to <b> 11 <sup>th</sup> Jan. 2019: </b></p>
         <p class="date_content">Conference </p>
        </div>
  </div>


</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>