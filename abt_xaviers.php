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

img:hover {
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
			<img src="img/abt_us_images/xaviers_firstquad.jpg" class="img-fluid" style="width:100%; 
            height:100%; margin-left:-15px;" />
		</div>
		<div class="col-sm-6 col-md-6 col-xs-6">  
			<h3>St. Xavier's College-Autonomous, Mumbai</h3>
			<p style="color:#03225C; padding:10px;">St. Xavier&apos;s College  founded in 1869 by ‘Society of Jesus’, is a premier Jesuit 
            Institution, known for its academic excellence and commitment towards humanity 
            with its ethos based on the ‘magis’ - striving for ‘the more’. It is the unique Jesuit concept of 
            always striving <strong>to be more </strong> and <strong> do more </strong>; of always seeking to 
            grow in learning, in faith and in <strong>service to others.</strong>
            </p>
		</div>
	</div>
<!-- ---------------------------------------- -->
    <div class="row" style="border:none; background:#DCDCDC;">
		
		<div class="col-sm-5 col-md-5 col-xs-5">  
			<h3>The Victorian Gothic style....</h3>
			<p style="color:#03225C; padding-top:15px; margin-left:10px;">Nestled in a locale of exquisite Victorian Gothic style architectural splendor of 
            artistic sophistication, the college campus stands on a strategic road named 
            ‘Mahapalika Marg’ connecting Dhobi Talao to <strong> Victoria Terminus</strong>, now known as 
            <strong>Chatrapati Shivaji Maharaj Terminus (CSMT)</strong>. 
            All the elegant structures on Mahapalika Marg overlook the <strong>‘Esplanade’ </strong> or
             <strong>‘Azad Maidan’.</strong> 
            </p>
		</div>

        <div class="col-sm-7 col-md-7 col-xs-7">
			<img src="img/abt_us_images/xaviers_chapel.jpg" class="img-fluid" style="width:100%; height:100%;" />
		</div>
	</div>
<!-- ---------------------------------------- -->
    <div class="row" style="border:none; background:#DCDCDC;">
		
    <div class="col-sm-5 col-md-5 col-xs-5">
			<img src="img/abt_us_images/xaviers_foyer.jpg" class="img-fluid rounded" 
            style="width:100%; height:100" />
		</div>
		<div class="col-sm-7 col-md-7 col-xs-7">  
			<h3>Being Inclusive...</h3>
			<p style="color:#03225C;">The students and faculty at our campus strive to thrive in an 
            academic environment envisaging  creative freedom, critical thinking with a commitment to
             principles of social justice, equal opportunities by imbibing the essence of inclusive
              education. The college campus symbolises a homogeneity merging traditional concepts 
              with modern technological advancements. It keeps up with the ever complex environment
               of the present world through its various centres such as Blatter Herbarium, 
               Heras Institute of Indian History and Culture, Caius Laboratory for Interdisciplinary 
               Research, Nadkarny Sacasa Research Laboratory (NSRL), Xavier’s Resource Centre 
               for Visually Challenged (XRCVC), Department of Inter-Religious Studies (DIRS) and the
                Xavier’s Visual Arts Studio (XVAS) on the campus.
            </p>
		</div>

       
	</div>
<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>