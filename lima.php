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
  
  <img src="img/speakersnewdimensions/Luis_Lima_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Melchior Lima" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Melchior Luiz Lima M.D. MSc. Ph.D.</a>
    </h3>
  <h4> A Professor of Cardiovascular Institute “São Francisco de Assis”
					and Cardiovascular Surgeon, Center of Cardiovascular Surgery &amp; Heart
				    Transplantation, Meridional Hospital, Cariacica, ES, Brazil.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  


Titular Member &amp; Member of the Deliberative Council of the Brazilian Society of Cardiovascular Surgery.
<br>
Philosophy Doctor - Federal University of São Paulo, Brazil (2015). 
<br>
Philosophy Doctor - Cardiovascular Institute  “São Francisco de Assis”, Belo Horizonte, MG, Brazil (2011). 

 <br>
Master of Science - Cardiovascular Institute “São Francisco de Assis”, Belo Horizonte, MG, Brazil (2010).
<br>
Post-Graduation (Medical Residency) - “Real and Benemérita Sociedade Portuguesa de Beneficência”, São Joaquim Hospital, São Paulo, SP, Brazil (1991). 
<br>
Graduation (Medicine) - School of Sciences of “Santa Casa de Misericórdia de Vitória”, Vitória, ES, Brazil (1988).
<br>
Cardiovascular Surgeon research program collaborator of the Department of Physiological Sciences, Federal University of “Espírito Santo”,
Vitoria, ES, Brazil. Researcher on vascular reactivity, myocardial protection and dysfunction of cardiac mitochondrial subpopulations in heart failure.
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
