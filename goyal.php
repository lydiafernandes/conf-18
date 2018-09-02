<!DOCTYPE html>
<HTML>
    <head>
        <title> Invited Speaker</title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        
        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        
        <script type="text/javascript">
             $(document).ready(function(){

                 $("img").fadeIn(4000);
                 
               $("button").click(function(){
                $("p").slideToggle("slow");
            });
         });
        </script>
<!-- this file is included in the externa file -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.margin {margin-bottom: 45px;}

  .bg-1 { 
      background-color: #DCDCDC; /* Grey */
      color: #000000;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }

  pre{
      color:#ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  </style>
</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  
  <img src="img/Ramesh_Goyal.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Ramesh Goyal" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Ramesh K. Goyal</a>
    </h3>
  <h4> Member of Task Force, Committee for Herbal Group, 
					Indian Council of Medical research ,Member,
					 Indian Pharmacopoeia Commission, CDSCO, Govt. of India.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     Prof. Ramesh K. Goyal, Vice Chancellor of the First University of Pharmacy in India: 
	Delhi Pharmaceutical Sciences and Research University. He has been previously Vice-Chancellor
	 of the Maharaja Sayajirao University of Baroda, Executive Director (Research & strategies)
	  at V ClinBio Labs., Chennai, Director (Pharmacology) at NMIMS University, 
	  Mumbai; Director ISF College of Pharmacy,  Moga, Punjab and Professor at L. M. College of
	   Pharmacy, Ahmedabad. 
	   <br>
	   Dr Goyal has three patents, 18 books, 26 book chapters, over 312 full papers (‘h’ index 40),
	    over 550 abstracts published in National and International journals. 
		He has guided 44 Ph.D. and 179 M. Pharm. students. He is the recipient of 65 awards,
		 including Best Pharmacy Teacher and Best Pharmaceutical Research Scientist from APTI 
		 and Life Time Achievement & Distinguished Service Awards from International Academy of 
		 Cardiovascular Sciences, Canada (IACS). <br>

He has over 40 years of experience in Teaching and Research particularly in Cardiovascular
 Pharmacology & Diabetes. He has been the Chairman of CRC of AICTE, Bhopal. 
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
