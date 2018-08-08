<!-- Navigation -->
<nav class="navbar nav-bar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="img/logo.png"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarResponsive">

			<span class="navbar-toggler-icon">
			
			</span>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
				<a class="nav-link" href="#">
				<?php
				 /*if(!isset($_SESSION['id'])){ 
				  echo "<p> U are not logged in <p>";
				 }*/
				 if($_SESSION['id'] != 1) 
						 {
							 echo "<p> YOU are not logged in!</p>";
							 header("Location:/");
						 }
				 else echo "<p>welcome".$_SESSION['id'];
				 ?>
				 </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="home" href="welcome.php">Home</a>
				</li>
			
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="venue.php">Venue</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">Advisory Committee</a>
				</li>
		
		
				<li class="nav-item">
					<a class="nav-link" href="#">Registration</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="speaker.php">Invited Speakers</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="#">Sponsorship &amp; Exhibition</a>
				</li>

				
				<li class="nav-item">
					<a class="nav-link" href="#">Our Partners</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Connect</a>
				</li>

				<li class="nav-item" <?php echo $login_session; ?>>
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div> <!-- end of menu -->
	</div>
</nav>
