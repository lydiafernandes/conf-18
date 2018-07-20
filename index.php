<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Conference Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- popper.js is recommended for bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- fontawesome will allow us to create icons in the input sections -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

  <!-- downlading a font awesome for creating an icon in the login-->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- this file is included in the externa file -->
  <link rel="stylesheet" type="text/css" href="css/style_index.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css"> 

<script src="main.js"></script>
</head>
<body>

  <div class="modal-dialog text-center">
  	<!-- should occupy 2/3rd of the screen for above 576 px screen sm stands for small screen-->
  	<!-- main-section is for styling -->
  	<div class="col-sm-8 main-section"> 
  		<div class="modal-content">
  			
  			<div class="col-12 user-img"> <!-- it will utilize all 12 columns -->
  				<img src="img/logo_college.jpg">
  			</div>

  			<form class="col-12" method="post" action="login.php">
  				
  				<div class="form-group">
  					<input type="text" name="email" class="form-control" placeholder="Enter Email">
  				</div>

  				<div class="form-group">
  					<input type="password" name="password" class="form-control" placeholder="Enter Password">
			  </div> 
				 

  				<button type="submit" class="btn">
  						<i class="fas fa-sign-in-alt"> </i> Login 
  				</button>

  			</form>
            <?php
            /*if (!isset($_SESSION[‘id’])) {
                die(header(“Location: index.php”));
            }
            else echo "<p> You are not logged in!</p>";*/
            ?>
  			<div class="col-12 forgot">
				  <a href="#"> Forgot Password? </a>

  			</div>
  		</div> <!-- end of modal-content -->

  	</div> <!-- end of main-section -->
  </div> <!-- end of modal-dialog -->
</body>
</html>
























