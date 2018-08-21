<!-- Navigation -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
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
				 else echo "<p>welcome".$_SESSION['id']."</p>";
				 ?>
			 </a>	
     </li>
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home</a>
      </li>
       <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        About Us
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="abt_xaviers.php">St. Xavier&apos;s College</a>
        <a class="dropdown-item" href="abt_creighton.php">Creighton University</a>
        <a class="dropdown-item" href="abt_conf.php">The Conference</a>
      </div>
    </li>

     <!-- Dropdown -->
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Venue
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Xavier&apos;s Map</a>
        <a class="dropdown-item" href="#">Mumbai Tour</a> 
        <a class="dropdown-item" href="#">How to arrive?</a>
      </div>
    </li>
    <!---------- 
      <li class="nav-item">
        <a class="nav-link" href="venue.php">Venue</a>
      </li>  
      -->
      <li class="nav-item">
        <a class="nav-link" href="speaker.php">Invited Speakers</a>
      </li>  
      <li class="nav-item">
	      <a class="nav-link" href="contact.php">Connect</a>
	  </li>
      <li class="nav-item" <?php echo $login_session; ?>>
		<a class="nav-link" href="logout.php">Logout</a>
	 </li>
    </ul>
  </div>  
</nav>
<br>

