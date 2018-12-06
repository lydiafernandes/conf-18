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
  
  <img src="img/speakersnewdimensions/Anil_Kumar_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Anil Kumar" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Anil Kumar.</a>
    </h3>
  <h4> Scientist Sree Chitra Tirunal Institute for Medical Sciences and Technology, 
  Biomedical Technology Wing,Thiruvananthapuram, Kerala, India
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Anil Kumar PR is Scientist E and Head of Division of Tissue Culture, Sree Chitra Tirunal Institute for Medical Sciences and Technology, which is situated in Kerela, India. He’s also the Visiting Scientist at Wake Forest Institute for Regenerative Medicine, North Carolina, USA. Mr. Kumar graduated from University of Kerala with a B.Ed in Natural Sciences in 1998 and M. Sc in Biotechnology, followed by Ph. D. in Tissue engineering.
<br><br>
Mr. Kumar has held key positions as Honorary Research Fellow at the National University of Singapore, also, has been the Project Scientist at Sree Chitra Tirunal Institute for Medical Sciences and Technology. He has broad experience in the field of tissue culture and is currently occupied with 3D BioPrinting of tissues, Development and Evaluation of BioInk for 3D BioPrinting. He has been recognized as the Ph.D. guide and Faculty for the courses MTech.
<br><br>
In 2009, Mr. Kumar was honored with DST-IIPA Gold Medal by the Department of Science and Technology, India. In 2005, he was awarded the Young Scientist Award by the Kerala Science Congress, followed by the Bajpa- Saha Award by the Society of Biomaterials and Artificial Organs, India. Society for Applied Biotechnology recognized him to be the Young Bioengineer, 2011. He has been the recipient of the Medi Biotech Award (2014), by the Society for Educational and Scientific Research.
<br><br>
Mr. Kumar is an esteemed Life member of the Society for Tissue Engineering and Regenerative Medicine, India.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
