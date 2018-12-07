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
  
  <img src="img/speakersnewdimensions/Shubha_Tole_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Shubha Tole" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Shubha Tole.</a>
    </h3>
    
  <h4> 
  Professor, Department of Biological Sciences, TIFR, Mumbai.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Prof. Shubha Tole obtained her BSc in Life Sciences and Biochemistry from St. Xavier's College, Mumbai  (1987).  Her MSc and PhD are from Caltech, USA.  She worked at the University of Chicago as a post-doctoral fellow, and then joined the Tata Institute in Mumbai, India as a faculty member in 1999.  
<br><br>
Tole has been awarded the Infosys prize for Life Sciences (2014), the Shanti Swarup Bhatnagar Award in 2010; the Research Award for Innovation in Neurosciences (RAIN) by the Society for Neuroscience in 2008, which is given for innovative work regardless of age or nationality.  She received the National Woman Bioscientist award by the Department of Biotechnology, Govt. of India (2008), the Swarnajayanti Fellowship (a prestigious young scientist award) by the Department of Science in Technology, Govt. of India (2005), and a Wellcome Trust Senior International Fellowship (1999), when she started her laboratory in Mumbai.  She is a fellow of the INSA, the IAS, and the NAS.
<br><br>
Tole has offered workshops on "Ethics in Science" at national and international fora.  She also actively engages in public outreach via workshops in schools and colleges, and encourages her students to do the same.  Shubha Tole also writes blogs to provide guidance and mentorship to younger colleagues.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
