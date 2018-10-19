<?php
//session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);

include 'dbh.php';

// initializing variables
$head = "";
$t1 = "";
$f1 = "";

$errors = array(); 

// REGISTER USER
if (isset($_POST['abs_sub'])) {
	// receive all input values from the form
	$head = mysqli_real_escape_string($conn, $_POST['head']);
	$t1 = mysqli_real_escape_string($conn, $_POST['t1']);
	$f1 = mysqli_real_escape_string($conn, $_POST['f1']);
}


echo $head; echo "<br>";
  echo $t1;  echo "<br>";
  echo $f1;  echo "<br>";
?>

<!DOCTYPE html>


<head>
  <title>Abstract Submission</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- popper.js is recommended for bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- fontawesome will allow us to create icons in tde input sections -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

  <!-- downlading a font awesome for creating an icon in tde login-->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- tdis file is included in tde externa file -->
  <link rel="stylesheet" type="text/css" href="style.css"> 
  <link rel="stylesheet" type="text/css" href="css/style_index.css"> 
<script src="main.js"></script>
</head>

<body>

	<!--<div class="modal-dialog text-center">-->
  	<!-- should occupy 2/3rd of tde screen for above 576 px screen sm stands for small screen-->
  	<!-- main-section is for styling -->
		<div class="col-sm-8 main-section"> 
			<div class="modal-content">
  			
				<div class="col-12 user-img"> <!-- it will utilize all 12 columns -->
					<img src="img/logo_college197x197.png">
				</div>
				
				<form class="col-12" method="post" action="register.php">
				
				<legend>
					<p> <font color="white"><h4>GENERAL GUIDELINES FOR ABSTRACT SUBMISSION</h4></p>
				</legend>
				
				Before you begin<br>
1. Abstract should be concise (between 400 to 700 words) giving only the highlights of research work. <br>
2. Graphs, figures or tables are NOT PERMITTED in the abstract. <br>
3. Keywords are to be mentioned at the end of abstract. <br> 
4. The authors must accept sole responsibility for the statements in their submitted abstract. 
 The conference committee will use the submitted abstract as such for the proceedings and will not be
 responsible for any errors in the abstract. <br>
5. Abstracts may be submitted for oral or poster presentation. However, the scientific review 
committee will decide the acceptance of oral presentation based on the quality and scientific
 relevance of the study. <br> 
6. The corresponding authors of accepted abstracts will receive confirmation of the
 abstract acceptances. <br>
7. All abstracts will be assigned an identification number which 
should be used for all communications about an abstract.
	
	<legend>
		<p> <font color="white">	<h4> Abstract </h4></p>
	</legend>
	<div class="form-group">
		<textarea rows="5" class="form-control" >
		</textarea>
	</div>
	<table>
		<tr>
			<td>
				Keywords:
			</td>
			<td>
				<div class="form-group">
					<input type="text" name="k1" class="form-control" >
				</div>
			</td>
			<td>
				,
			</td>
			<td>
				<div class="form-group">
					<input type="text" name="k2" class="form-control" >
				</div>
			</td>
			<td>
				,
			</td>
			<td>
				<div class="form-group">
					<input type="text" name="k3" class="form-control" >
				</div>
			</td>
			<td>
				,
			</td>
			<td>
				<div class="form-group">
					<input type="text" name="k4" class="form-control">
				</div>
			</td>
			<td>
				,
			</td>
			<td>
				<div class="form-group">
					<input type="text" name="k5" class="form-control" >
				</div>
			</td>
		</tr>
	</table>	
	<table>
		<button type="submit" class="btn" name="abs_sub">
			<i class="fas fa-sign-in-alt"> </i> Submit 
		</button>
	</table>					
				</form>
			</div>
		</div>
		
	<!--</div>-->
</body>
</html>