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
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

