<?php
//session_start();
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
<?php include("includes/navigation1.php");?>
<!-- -------------------------------- -->
<!--- Invited Speakers -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"><a name="top">Our Esteemed Speakers </a></h1>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div  class="container-fluid padding">

	<!-- ROW 1 begins -------------------------------------- -->

		<div class="row padding">

			<!-- ROW 1 - FIRST CARD APPEARS HERE -->
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/speakersnewdimensions/dk_agarwal.png">
					<div class="card-body">
						<h4 class="card-title"> Dr. Devendra K. Agrawal  </h4>
						<p class="card-text"> Ph.D. (Biochem), Ph.D. (Med. Sciences), MBA, MS (ITM), FAAAAI, FAHA, FAPS, FIACS
							Professor and Chairman
							Department of Clinical &amp; Translational Science, USA

                    	</p>
						<a href="dka.php" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>

		<!-- ROW 1 - SECOND CARD APPEARS HERE -->
			<div class="col-md-4">
				<div class="card">
				<img class="card-img-top" src="img/speakersnewdimensions/Daniel_Wilson_New.png">
					<div class="card-body">
						<h4 class="card-title"> Dr. Daniel R. Wilson, M.D., Ph.D. </h4>
						<p class="card-text"> A pioneer in Evolutionary Neuroscience, Currently he is the President of Western University of Health Sciences, Pomona, California USA.</p>
						<a href="wilson.php" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>

		<!-- ROW 1 - THIRD CARD APPEARS HERE -->
			<div class="col-md-4">
				<div class="card">
				<img class="card-img-top" src="img/Ramesh_Goyal.png">
					<div class="card-body">
						<h4 class="card-title"> Dr. Ramesh K. Goyal </h4>
						<p class="card-text"> Member of Task Force, Committee for Herbal Group, 
							Indian Council of Medical research ,Member,
					 		Indian Pharmacopoeia Commission, CDSCO, Govt. of India.

                    	</p>
						<a href="goyal.php" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>

		</div>

	<!-- ROW 1 ends ---------------------------------------->

</div>
<!-- -------------------------------------------------->

<!--- Connect-->
<?php include("includes/footer.php");?>

</body>
</html>