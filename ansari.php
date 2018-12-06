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
  
  <img src="img/speakersnewdimensions/Aseem_Ansari_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Ajit Anerao" width="50%" height="50%">

   <h3 class="margin">
      <a name="top">Dr. Aseem Ansari </a>
    </h3>
  <h4> Professor of Chemical Genomics and Synthetic Biology at University of Wisconsin-Madison
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Aseem Zoe Ansari is a Professor of Chemical Genomics and Synthetic Biology at University of Wisconsin-Madison 
     <a href="https://biochem.wisc.edu/faculty/ansari">(https://biochem.wisc.edu/faculty/ansari)</a> 
     <br> 
Professor Ansari received his B.Sc. from St. Xavier’s in Chemistry and Zoology and his Ph.D. from Northwestern University in Chicago. Aseem was a Helen Hay Whitney Fellow at Harvard University with Mark Ptashne and a visiting scholar with Richard Young at MIT. The Ansari group designs synthetic gene switches to control stem cell fate. Integrating chemistry, genomics, molecular medicine and bioinformatics, the Ansari group has recently created a designer gene switch that can find and fix the diseased gene that causes an incurable neuronal disease (Friedreich’s ataxia). The design strategy permits the precision-targeting of other genes whose malfunction causes a wide array of diseases.
    
    <br>

Professor Ansari is also the co-founder of the prestigious Khorana Program (2008) and the S.N. Bose Scholars Program (2013). He also Founded WINstep Forward, a non-profit focused on promoting science, technology and innovation partnerships between US and India (www.winstepforward.org). Recent WINstep initiatives include the Khorana Tech Transfer Program (2013), Sci-ROI (2015), YIM@C (2016), and Young Entrepreneurs’ Summit (YES 2018).      

  <br>
  
Professor Ansari has received a few honours and awards over his career, including: CAREER award from the U.S. National Science Foundation (NSF), Research Excellence Award from the W. M. Keck Foundation, Basil O'Connor Starter Scholar Award from the March of Dimes Foundation, Fellowship from the Japan Society for Promotion of Science (JSPS), Resident Tutorship at Winthrop House from Harvard, First prize for graduate research from Sigma Xi Research society and his most cherished honour is standing first in Chemistry and Zoology class (B.Sc.) at St. Xavier’s College.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
