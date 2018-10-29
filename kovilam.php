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
  
  <img src="img/speakersnewdimensions/Oormila_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Oormila Kovilam" width="50%" height="50%">

   <h3 class="margin">
      <a name="top">Dr. Oormila Kovilam</a>
    </h3>
  <h4> Amita Health, Chicago Illinois, USA
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->

     Dr. Oormila Kovilam completed her medical school and post graduation education in Kasturba medical
      college, Manipal India. She furthered her scientific training for basic Science research at 
      Columbia university in New York and underwent extensive clinical training in the field of 
      Internal medicine, OBGYN, Critical care and a fellowship in Maternal fetal medicine in various
       prestigious universities including Mount Sianai New york and University of Cincinnati Ohio. 
       She worked in the field of academics and clinical Medicine and was a mentor to several students both graduates and postgraduates in the field of Obstetrics and gynecology.She was one of the investigators for several NIH funded research projects in Diabetes in pregnancy and various other projects associated with High risk pregnancies.She has several publication to her credit in peer reviewed journals.
<br> She has been recognized with several awards for her contributions in clinical organizations, research teaching and mentorship.
<br> She has been named the "Go to Person that sees projects through completion and the glue that holds the team together".Her current research interest includes diabetes in pregnancy, multifetal gestation,
and fetal programming of adult diseases. 

     
     
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
