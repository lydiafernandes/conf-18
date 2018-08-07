<?php
session_start();
//inlcude 'session.php';
?>
<!DOCTYPE html>
<HTML>
    <head>
        <title> About Us </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the external file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
       
        <style>
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-8 div {
      height: 500px;
  }
  </style>


</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20%"> 
    <!-- include the nav bar -->
<?php include("includes/navigation.php");?>

<!-- -------------------------------------------------->
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Creighton University</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">St. Xavier's College</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Conference Schedule</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section41">Link 1</a>
            <a class="dropdown-item" href="#section42">Link 2</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8">
      <div id="section1" class="bg-success">    
        <h1>Creighton University</h1>
        <p>
            Creighton is a Jesuit comprehensive university committed to 
            excellence in its selected undergraduate, graduate and professional programs.
            Creighton University, located in Omaha, NE, USA, is a supportive community of 
            students, faculty and staff thriving in an environment that stimulates critical 
            and creative thinking while providing ethical perspectives for dealing with an
            increasingly complex world.
            This University, in keeping with the Jesuit traditions, provides a 
            place where stuents learn to become leaders through service to others and contribute
            something meaningful to the world. Creighton University has earned the top spot in U.S.News &
            World Report magazine’s college ranking for the Midwest Regional Universities. It has earned
            No. 1 Ranking in America’s Best Colleges” edition for the 15th year in a row.
        </p>
      </div>
      <div id="section2" class="bg-warning"> 
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>        
      <div id="section3" class="bg-secondary">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41" class="bg-danger">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section42" class="bg-info">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>

<!-- -------------------------------------------------->

<!--- Connect-->
<?php include("includes/footer.php");?>

</body>
</html>