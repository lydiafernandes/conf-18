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
  
  <img src="img/speakersnewdimensions/Swati_Patankar_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Swati Patankar" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Swati Patankar</a>
    </h3>
  <h4> Professor,                         
Department of Biosciences & Bioengineering,
Indian Institute of Technology Bombay,Powai.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Swati Patankar is currently recognized as the Professor in the Department of Biosciences & Bioengineering at Indian Institute of Technology Bombay, Powai. She is a Visiting scientist at Harvard School of Public Health, Boston. She’s also the Dean (International Relations) at IIT, Bombay.
<br><br>
Prof. Patankar received her B. Sc. In Life Sciences/ Biochemistry from St. Xavier’s College, Mumbai, in 1989 and gained a Ph. D.in Molecular Microbiology from Tufts University, Boston. She was Postdoctoral fellow for Immunology & Infectious Diseases at Harvard School of Public Health, Boston.
<br><br>
She has been honored with an academic Award for Excellence in Teaching (2012) & Prof. S. P. Sukhatme Award for Excellence in Teaching (2016), conferred by the Indian Institute of Technology.
<br><br>
She has been a part of over 29 conference proceedings and about 46 of her manuscripts have been recognized and published in Journals of International repute. From 2001 to 2004, Swati Patankar was an Invited member of World Health Organization (WHO) TDR Working Group on Genomes to Drugs.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
