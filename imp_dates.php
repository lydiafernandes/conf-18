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

.wrapper { 
  height: 100%;
  width: 100%;
  left:0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
background: linear-gradient(124deg, #ff2400, #e81d1d, #e8b71d, #e3e81d, #1de840, #1ddde8, #2b1de8, #dd00f3, #dd00f3);
background-size: 1800% 1800%;

-webkit-animation: rainbow 18s ease infinite;
-z-animation: rainbow 18s ease infinite;
-o-animation: rainbow 18s ease infinite;
  animation: rainbow 18s ease infinite;}

@-webkit-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
@-moz-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
@-o-keyframes rainbow {
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
}
@keyframes rainbow { 
    0%{background-position:0% 82%}
    50%{background-position:100% 19%}
    100%{background-position:0% 82%}
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
    <div class="col-2 wrapper">&nbsp;</div>
    <div class="col-8 bg-warning">

       <p class="date_title"> Till, 10<sup>th</sup> Nov. 2018: </p> 
        <p class="date_content"> Early Bird Registration as Audience and for Abstract Submission. </p>
    </div>
    <div class="col-2 bg-success">&nbsp;</div>
  </div>

    <div class="row">
        <div class="col-2 bg-success">&nbsp;</div>
         <div class="col-8 bg-warning">
         <p class="date_title"> 20<sup>th</sup> Nov. 2018: </p>
         <p class="date_content"> Last date for Abstract Submission </p>
        </div>
        <div class="col-2 bg-success">&nbsp;</div>
  </div>

    <div class="row">
        <div class="col-2 bg-success">&nbsp;</div>
         <div class="col-8 bg-warning">
         <p class="date_title"> <b> 9<sup>th</sup> Jan. 2019 </b> to <b> 11 <sup>th</sup> Jan. 2019: </b></p>
         <p class="date_content">Conference </p>
        </div>
        <div class="col-2 bg-success">&nbsp;</div>
  </div>


</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>