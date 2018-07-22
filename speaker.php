<?php
session_start();
//inlcude 'session.php';
?>
<!DOCTYPE html>
<HTML>
    <head>
        <title> Invited Speakers </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 


</head>
<body> 
    <!-- includee the nav bar -->
<?php include("includes/navigation.php");?>
<!-- -------------------------------- -->
<!--- Invited Speakers -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Our Esteemed Invited Speakers </h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div  class="container-fluid padding">
	<div class="row padding">

		<!-- FIRST CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" width="763" height="602" src="img/Rajmohan.jpg">
				<div class="card-body">
					<h4 class="card-title"> Dr. Rajmohan</h4>
					<p class="card-text"> He is the Principal of the College with 20+ years of teaching experience.</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- SECOND CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/roy_pereira.png">
				<div class="card-body">
					<h4 class="card-title"> Fr. Roy Pereira S.J. </h4>
					<p class="card-text"> He is the Vice Principal of the College with 20+ years of teaching experience.</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- THIRD CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/principal_agnelo_menezes.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Agnelo Menezes </h4>
					<p class="card-text"> He is the Principal of the College with 20+ years of teaching experience.</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

	</div>
	<div class="row padding">

		<!-- ROW 2-FIRST CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/nandita_mangalore.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Nandita Mangalore</h4>
					<p class="card-text"> Head of Dept. Life Science at St. Xavier&apos;s College with 20+ years of teaching experience.</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!-- ROW 2 - SECOND CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/roy_pereira.png">
				<div class="card-body">
					<h4 class="card-title"> Fr. Roy Pereira S.J. </h4>
					<p class="card-text"> He is the Vice Principal of the College with 20+ years of teaching experience.</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<!--ROW 2- THIRD CARD APPEARS HERE -->
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/new_alex.png">
				<div class="card-body">
					<h4 class="card-title"> Dr. Alex C Varghese </h4>
					<p class="card-text"> Scientific  Director <br>
                                           ASTRA Fertility Group,<br>
                                           <b>Web:</b> 
                                           <a href="www.lifeinvitro.com"> www.lifeinvitro.com</a>

                    </p>
					<a href="#alex" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

	</div>

</div>

<div class="container">
    <h1> <a name="alex">Dr. Alex </a>C Varghese Ph.D.</h1>
    <p class="card-text">
    <pre>
    Scientific  Director
    ASTRA Fertility Group
    4303 Village Centre Crt.
    Mississauga, ON
    L4Z 1S2, Canada
    tel: 905.949.6999
    Email: alexcv2008@gmail.com
    Web:<a href="www.lifeinvitro.com"> www.lifeinvitro.com</a>
    </pre>
    Alex C Varghese is presently the Scientific Director, Astra Fertility Group of IVF Centre at Mississauga, Ontario, Canada and also hold the position of Laboratory Director at CRAFT Hospital and research centre, Kerala, India.  He received his PhD in Biochemistry from University of Calcutta, India for his thesis based on ART. He was a Post Doctoral Research Fellow  at the Center for Reproductive Medicine, Cleveland Clinic Foundation, USA. He is active in clinical embryology since 1997 and has initiated many successful training programs in ART and helped in designing and setting up of many IVF units in rural and urban India and neighboring countries. In the year 2010 he founded the educational web platform for IVF professionals- www.lifeinvitro.com which is now popular in 165 countries. Alex has authored over 30 manuscripts and edited 8 books in assisted reproduction, including the popular and bestselling “Practical Manual of in vitro fertilization: Advanced methods and novel devices”. Alex’s research interests are in assisted reproductive technology, in particular, in understanding the molecular and environmental causes and prevention of male infertility, probiotics in fertility, microbiome in health and disease associated with reproduction and developing stress-free, automated embryo culture systems for In Vitro Fertilization. 
<br><br>He is an executive committee member of special group in Andrology of Canadian Fertility
 and Andrology Society (CFAS) and Chairman-Scientific Committee of 7th International
  Congress of Academy of Clinical embryologists, Goa, India (www.acegoa2018.com)
</p>


</div>
<!-- ------------------------------------------------  -->
<!--- Connect -->
<?php include("includes/footer.php");?>

</body>
</html>