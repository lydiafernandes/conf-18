<?php
//session_start();
//inlcude 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>St. Xavier's College Conference-150 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include("includes/navigation1.php");?>


<!-- Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/webpage3.jpg" alt="First slide">
      <div class="carousel-caption">
        <h1 class="display-2">X150 <br> The Conference</h1>
        <h3> Celebrating 150 Glorious years</h3>
        <button type="button" class="btn btn-outline-light btn-lg"> Take a Tour</button>
        <button type="button" class="btn btn-primary btn-lg">SIGN-UP</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/new_graduation_day.png" alt="Second slide">
      <div class="carousel-caption">
      		<!-- Display the countdown timer in an element -->
<h1 class="display-2" id="demo">
</h1>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 9, 2019 10:30:15").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + " d " + hours + " h " + minutes + " m " + seconds + " s ";

	/*document.getElementById("days").innerHTML = days + " d ";
	document.getElementById("hrs").innerHTML = hours + " h ";
	document.getElementById("mins").innerHTML = minutes + " m ";
	document.getElementById("sec").innerHTML = seconds + " s ";*/


  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

      </div>
    </div>
   <div class="carousel-item">
      <a href="https://www.creighton.edu/"><img class="d-block w-100" src="img/creighton_ovrview.jpg" alt="fourth slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!--- Jumbotron -->

<div class="container-fluid">
	<div class="row Jumbotron">
		<div class="col-12">
		<!-- 
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10"> 
		-->
		<!--
				<p class="lead" style="text-align:center">This calls for a celebration.

We're celebrating our sesquicentennial across 2018–19. The year-long commemoration, 
which begins during the joyous christmas week Dec, 2018, 
leading up to the 150th anniversary of the college.
</p>
<p class="lead" style="text-align:center">
The occasion is a time for all of us at St. Xavier &apos;s College to reflect on our
 past — and look forward to our future of maintaining the momentum for 
 Excellence in Education. 
				</p>

				-->
		</div>
		<!--
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"> <button type="button" class="btn btn-outline-secondary btn-lg">
					webhosting
				</button>
			</a>
		</div>
		-->
	</div>

</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		
		<div class="col-12" style="margin-top:0px">
			<h1 class="display-4" style="background-color:#999999;"> From Health to Well Being:  <br>
			An Interdisciplinary approach from Fundamental Sciences to 
			Translational Medicine
</h1>
		</div>
		<hr>

		<div class="col-12">
			<p class="lead">
			Under the auspices of both St. Xavier&apos;s College, Mumbai, India and 
			Creighton University, Omaha, NE, USA, our 1<sup>st</sup> joint International
			 Conference entitled “From Health to Well Being:
			   An Interdisciplinary approach from Fundamental Sciences to 
			  Translational Medicine” will be held at the iconic campus 
			  of St. Xavier&apos;s College, Mumbai, India from <strong>09 –11 January 2019</strong>.  
			</p>
		</div>
	</div>
</div>
<!--- Three Column Section -->

<div class="container-fluid" padding></div>
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<a href="http://xaviers.edu/main/" target="_blank" border="0">
			<img src="img/logo_college197x197.png">
		</a>
		<!-- <i class="fas fa-code"></i>
		<h3> HTML5 </h3> -->
		<p>St. Xavier&apos;s College - Autonomous, Mumbai</p>
	</div>
<!-- space for third logo -->
	<div class="col-sm-12 col-md-4">
<!--
		<i class="fas fa-bold"></i>
		<h3> BOOTSTRAP </h3>
		<p>Built with the latest version of BOOTSTRAP, BOOTSTRAP 4,</p>
		-->
	</div>
	

	<div class="col-xs-12 col-sm-6 col-md-4">
		<a href="https://www.creighton.edu/" target="_blank" border="0">
			<img src="img/197px-Creighton_University_seal.png">
		</a>
		<!--
		<i class="fas fa-css3"></i>
		<h3> CSS3 </h3> 
		<p>Built with the latest version of CSS, CSS3,</p>
		-->
		<p>Creighton University, Omaha, NE, USA</p>
		
	</div>
	<hr class="my-4">
</div>
<!--- Two Column Section -->

<div class="container-fluid">
	<div class="row padding">
		
		<div class="col-md-12 col-lg-6">
			<h2> If you attend the X150 Conference.....</h2>
			<p> 
			This conference aims to provide a premier international forum bringing many eminent international and national scientists 
			with diverse expertise under one platform to highlight unique approaches and present recent 
			novel findings at the fundamental as well as biological, cellular, and molecular level to 
			address core questions in the pathophysiology of a disease process. 
			</p>
			<p>

			A major
			 focus will be on a translational approach for a rapid and smooth interface between preclinical and clinical specialties/professionals. Thus, 
			 the conference comprises of talks, formal panel discussions, interactions with 
			 St. Xavier’s students and faculty, poster sessions including social events in Mumbai, India.		
			</p>
			<!-- p>															
				With our roots in biology, we are able to confront the most pressing diseases of our time, gaining insights into their underlying mechanisms in order to uncover the novel therapeutic opportunities.
			</p -->

			<br>
			<a href="#" class="btn btn-primary"> Learn More </a>
		</div>
		<div class="col-md-12 col-lg-6">
			<img src="img/desk.png" class="img-fluid" style="width:100%">
		</div>
	</div>
</div>

<hr class="my-4">


<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>


<!--- Two Column Section 
<div class="container-fluid">
	<div class="row padding">
		
		<div class="col-md-12 col-lg-6">
			<h2> 150 Years of Excellence in Education</h2>
			<p> 
				Blatter Herbarium was started at the end of the 19th century. By 1918 a very large number of plants were gathered by Fr. E. Blatter, S.J., his associates and students. The Herbarium was named after Fr. Blatter in 1941. It contains the largest collection of plants in Western India.  It provides facilities for the study of Plant Systematics and has a well-stocked library on Systematic Botany. The Herbarium has received the Sir Ratan Tata Trust Grant for upgradation and digitization of the plant database. Dr. Rajendra Shinde is the present Director.
			</p>
			<p>

				Caius Laboratory for Inter-Disciplinary Research (1947) was established to carry out drug research and was named after Fr. J. F. Caius, S.J. It was restructured and equipped with new instruments. It functions as a research and coordination centre for all the Science Departments. In this Lab a strain of Streptomyces was identified. It has been supported by grants from industry and from UGC, UNDP, et al. Dr. Priya Sundarrajan is the Director.
			</p>
		

			
		</div>
		<div class="col-lg-6">
			<img src="img/bootstrap2.png" class="img-fluid">
		</div>
	</div>
</div>
--> 

<!--- Connect -->
<?php include("includes/footer.php");?>

</body>
</html>













