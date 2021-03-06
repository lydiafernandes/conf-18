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
  
  <img src="img/speakersnewdimensions/Basavaraj_Nanjwade_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Basavaraj Nanjwade" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Basavaraj Nanjwade</a>
    </h3>
  <h4> Principal Scientist 
Trroy Life Sciences Pvt Ltd
C-14 KSSIDC Industrial Area, New Town Yelahanka,
Bengaluru, Karanataka, India.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Dr. Basavaraj K. Nanjwade is the Principal Scientist at Trroy Life Sciences Pvt Ltd. BENGALURU, Karanataka, India. His international experience includes various programs, contributions and participation in different countries for diverse fields of study. His research interests is reflected in his wide range of publications in various national and international journals. 
<br><br>
His significant areas of research interest include Nanomedicine, NanoBiotechnology, NanoPharmaceuticals and NanoBiopharmaceuticals.
<br><br>
Dr. Nanjwade has published international books & has over 167 publications at both national and international levels and is recognized as an esteemed mentor to Ph. D. students. Dr. Nanjwade has a Professional Membership at IPA, APTI, AAPS, CRS, FIP.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
