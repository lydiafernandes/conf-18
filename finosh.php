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
  
  <img src="img/speakersnewdimensions/Finosh_thankam_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Finosh Thankam" width="50%" height="50%">

   <h3 class="margin">
      <a name="top">Dr. Finosh Thankam (Creighton University)</a>
    </h3>
  <h4>  Senior Post Doctoral researcher, Dept. of Clinical and Translational sciences and Dept. of Surgery, Creighton University School of Medicine.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Finosh G Thankam is presently the Senior Post Doctoral researcher, Dept. of Clinical and Translational sciences and Dept. of Surgery, 
     Creighton University School of Medicine. He received his PhD in Biomaterials Science from SCTIMST, 
     India for his thesis based on cardiac tissue engineering. His research interests at Creighton 
     focuses on understanding the pathological mechanisms underlying musculoskeletal disorders 
     especially tendinopathies. His research findings has thrown light to understand the sterile inflammatory mechanisms that results in the alteration of tendon tissue extracellular matrix, migration and differentiation of various stem cell populations and mitochondrial dysfunction. The translational potential of exosome biology and tendon tissue engineering are another dimension of his research. In addition, he is also studying molecular mechanisms of incisional hernia formation, stem cell migration following traumatic brain injury and pathological aspects of cardio vascular disease. Finosh has authored more than 30 publications in international peer reviewed journals and a book chapter. He is presently the reviewer of several international journals.         <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
