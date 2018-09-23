<!DOCTYPE html>
<HTML>
    <head>
        <title> Scientific Board </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <script>
    // Accordian Action
var action = 'click';
var speed = "500";


$(document).ready(function(){

// Question handler
  $('li.q').on(action, function(){

    // gets next element
    // opens .a of selected question
    $(this).next().slideToggle(speed)
    
    // selects all other answers and slides up any open answer
    .siblings('li.a').slideUp();
  
    // Grab img from clicked question
    var img = $(this).children('img');

    // remove Rotate class from all images except the active
    $('img').not(img).removeClass('rotate');

    // toggle rotate class
    img.toggleClass('rotate');

  });

});


  </script>
    <style>
        .faq li { padding: 20px; }

.faq li.q {
  background: #4FC2E;
  font-weight: bold;
  font-size: 120%;
  border-bottom: 1px #ddd solid;
  cursor: pointer;
}

.faq li.a {
  background: #3BB0D6;
  display: none;
  color:#fff;
}

.rotate {
  -moz-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
</style>
       
</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->

<ul class="faq">

    <li class="q">
        <img src="img/arrow.png"> 
        Question 1
    </li>
    <li class="a">Answer 1</li>

<!-- -------------End of Q1------------------------------ -->

    <li class="q">
        <img src="img/arrow.png"> 
        Question 2
    </li>
    <li class="a">Answer 2</li>

<!-- -------------End of Q2------------------------------ -->

    <li class="q">
        <img src="img/arrow.png"> 
        Question 3
    </li>
    <li class="a">Answer 3</li>

<!-- -------------End of Q3------------------------------ -->
</ul>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>