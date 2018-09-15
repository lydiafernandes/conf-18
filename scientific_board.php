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
        Dr. Shubha Tole (TIFR)
    </li>
    <li class="a">Shubha Tole is an Indian neuroscientist, Professor and Principal Investigator at
     the Tata Institute of Fundamental Research in Mumbai, India. Her research involves investigating
      the development and evolution of the mammalian brain, and she has won many accolades for her work.
      <a href="http://www.tifr.res.in/~dbs/faculty/S_Tole.html" class="btn btn-outline-secondary">See Profile</a>
    </li>

<!-- -------------End of Q1------------------------------ -->

    <li class="q">
        <img src="img/arrow.png"> 
         Dr. Sushil Mujumdar (TIFR)
    </li>
    <li class="a">
        Sushil Mujumdar completed his PhD in 2001 from the Raman Research Institute, Bangalore in the field of 
        light propagation in passive and active random media. He followed up with post doctoral research in 
        coherent random lasing and near-field optics in LENS, Florence, University of Alberta, Canada, and 
        ETH, Zurich. He has now set up a programme on Nanooptics and Mesoscopic Optics in TIFR, Mumbai.
        <a href="http://www.tifr.res.in/~mujumdar/index.html" class="btn btn-outline-secondary">See Profile</a>
    </li>

<!-- -------------End of Q2------------------------------ -->

    <li class="q">
        <img src="img/arrow.png"> 
        Dr. Nandita Mangalore (St. Xavier&apos;s College - Autonomous, Mumbai.)
    </li>
    <li class="a">Head, Department ofLifesciences &amp; Biochemistry <br>
    <a href="http://xaviers.edu/main/index.php/lifesciences-and-biochemistry" class="btn btn-outline-secondary">Read More</a>
    
    </li>

<!-- -------------End of Q3------------------------------ -->
<li class="q">
        <img src="img/arrow.png"> 
        Dr. Madhuri Hambarde (St. Xavier&apos;s College - Autonomous, Mumbai.)
    </li>
    <li class="a">Department of Zoology / Faculty 
    <a href="http://xaviers.edu/main/index.php/zoology" class="btn btn-outline-secondary">Read More</a>
    
    </li>

<!-- -------------End of Q4------------------------------ -->
<li class="q">
        <img src="img/arrow.png"> 
        Dr. Finsoh Thankam (Creighton University)
    </li>
    <li class="a"> Department of Biomedical Sciences / Faculty <br>
    Dr. Finosh has expertise in Biotechnology, Cancer Research and Molecular Biology.
    <a href="https://www.researchgate.net/profile/Finosh_G_T" class="btn btn-outline-secondary">See Profile</a>
    
    </li>

<!-- -------------End of Q5------------------------------ -->
<li class="q">
        <img src="img/arrow.png"> 
        Dr. Smita Krishnan  (St. Xavier&apos;s College - Autonomous, Mumbai.)
    </li>
    <li class="a">Head, Department of Zoology <br>
    <a href="http://xaviers.edu/main/index.php/zoology" class="btn btn-outline-secondary">Read More</a>
    </li>

<!-- -------------End of Q6------------------------------ -->
<li class="q">
        <img src="img/arrow.png"> 
        Ms. Miriam Stewart  (St. Xavier&apos;s College - Autonomous, Mumbai.)
    </li>
    <li class="a">Head, Department of Microbiology
    <a href="http://xaviers.edu/main/index.php/microbiology1" class="btn btn-outline-secondary">Read More</a>
   
    </li>

<!-- -------------End of Q7------------------------------ -->
<!-- li class="q">
        <img src="img/arrow.png"> 
        Dr. Nandita Mangalore
    </li>
    <li class="a">Answer 3</li>

<!-- -------------End of Q8------------------------------ -->

</ul>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>