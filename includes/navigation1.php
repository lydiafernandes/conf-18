<!-- Navigation -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="margin-botton:0px;">
  <a class="navbar-brand" href="img/logo_black_bgrnd.png" target="_blank" border="0">
   <img src="img/logo_grey_bgrnd.jpg" alt="Logo of science conference" style="margin:0px;">
  </a>
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
			/*	 if($_SESSION['id'] != 1) 
						 {
							 echo "<p> YOU are not logged in!</p>";
							 header("Location:/");
						 }
				 else echo "<p>welcome".$_SESSION['id']."</p>";*/
				 ?>
			 </a>	
     </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
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
        Organizing Committee
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="org_com.php">Patrons &amp; Heads</a>
        
        <a class="dropdown-item" href="advisory_board.php">Advisory Board</a> 

        <a class="dropdown-item" href="scientific_board.php">Scientific Board</a>
        
      </div>
    </li>
    <!---------- 

	     <!-- <a class="nav-link" href="org_com.php">Organizing Committee</a>
	  </li -->
     <!-- Dropdown -->
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Venue
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="map1.php">How to reach?</a>
        <a class="dropdown-item" href="venue.php">Xavier&apos;s Map</a>
        <a class="dropdown-item" href="files/ISC_hotels.xlsx"> Accomodation Suggestions </a>
        <a class="dropdown-item" target="_blank" href="https://www.maharashtratourism.gov.in/maharashtra/mumbai-darshan-tour">Mumbai Tour</a> 
        
      </div>
    </li>
    <!---------- 
      <li class="nav-item">
        <a class="nav-link" href="venue.php">Venue</a>
      </li>  
      -->
      <li class="nav-item">
        <a class="nav-link" href="speaker1.php">Invited Speakers</a>
      </li>  
      <li class="nav-item">
	      <a class="nav-link" href="contact_new.php">Connect</a>
	  </li>
      <!-- li class="nav-item" <?php echo $login_session; ?>>
		<a class="nav-link" href="logout.php">Logout</a>
	 </li -->
    </ul>
  </div>  
</nav>
<br>

