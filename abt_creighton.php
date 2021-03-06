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
body{
    background-color:#DCDCDC;
}
.image:hover {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}

</style>


</head>
<body> 
    <!-- include the nav bar -->


<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->

<div class="row" style="border:none; background:#DCDCDC;">
		<div class="col-sm-6 col-md-6 col-xs-6">
         	<img src="img/abt_us_images/Creighton_University2.jpg" class="img-fluid" style="width:100%; 
            height:100%; margin-left:-15px;" />
		</div>
		<div class="col-sm-6 col-md-6 col-xs-6">  
			<h3>Creighton University</h3>
			<p style="color:#03225C; padding:10px;">Creighton is a <strong>Jesuit </strong> comprehensive university 
            committed to excellence in its selected undergraduate, graduate and professional programs.
            Creighton University, located in <strong> Omaha, NE, USA,</strong> is a supportive community of 
            students, faculty and staff thriving in an environment that stimulates critical 
            and creative thinking while providing ethical perspectives for dealing with an
            increasingly complex world.
            </p>
		</div>
	</div>
<!-- ---------------------------------------- -->
    <div class="row" style="border:none; background:#DCDCDC;">
		
		<div class="col-sm-5 col-md-5 col-xs-5">  
			<h3>Service to others and Academic excellence.....</h3>
			<p style="color:#03225C; padding-top:15px; margin-left:10px;">
            This University, in keeping with the Jesuit traditions, provides a 
            place where students learn to become leaders through service to others and contribute
            something meaningful to the world. Creighton University has earned the top spot in
             U.S.News &amp; World Report magazine’s college ranking for the Midwest Regional 
             Universities. It has earned <strong> No. 1 Ranking in America’s Best Colleges&apos; </strong>
             edition for the 15th year in a row.
        </p>
		</div>

        <div class="col-sm-7 col-md-7 col-xs-7">
			<img class="image" src="img/abt_us_images/CreightonUniv_Church1.jpg" class="img-fluid" style="width:100%; height:100%;" />
		</div>
	</div>
<!-- ---------------------------------------- -->
    <div class="row" style="border:none; background:#DCDCDC;">
		
    <div class="col-sm-5 col-md-5 col-xs-5">
			<img class="image" src="img/abt_us_images/Creighton_University3.jpg" class="img-fluid rounded" 
            style="width:100%; height:100" />
		</div>
		<div class="col-sm-7 col-md-7 col-xs-7">  
			<h3>Creighton School of Medicine</h3>
			<p style="color:#03225C;">
            The <strong> mission </strong> of the Creighton School of Medicine is to improve the human well-being with 
        a diverse body of students, faculty and staff who provide excellence in educating 
        students, physicians and the public, advancing knowledge and providing comprehensive 
        patient care. The Department of Clinical and Translational Science (CTS) at Creighton
         University School of Medicine is instituted to support advance education, 
         provide <strong> collaboration and research </strong>in clinical and translational science. 
         Our goal is to establish Creighton as a nationally and internationally renowned 
         research institution for cutting-edge multidisciplinary translational research programs.
          CTS strives to improve the future of health care and bring about an era of personalized 
          medicine while advancing science and applying new discoveries to patient care. 
          The Department of CTS fosters an extremely conducive environment where learners are 
          mentored to become exceptional scientists/physicians and emerge as independent
           investigators.
            </p>
		</div>

       
	</div>
<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>