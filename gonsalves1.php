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
  
  <img src="img/speakersnewdimensions/Foster_Gonsalves_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Foster Gonsalves" width="50%" height="50%">

   <h3 class="margin">
      <a name="top">Dr. Foster Casimir Gonsalves</a>
    </h3>
  <h4>  VP of Drug Development and Strategy, Rgenix, USA
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Foster currently heads translational development of Rgenix’s pipeline and leads the implementation of the biomarker 
     and diagnostic strategy. He is also a key member of the corporate strategy team where he supports 
     product and portfolio planning. 
     <br><br>
     Before coming to Rgenix, Foster was a Management
      Consultant with the Life Sciences Practice of Navigant Consulting/Easton Associates 
      where he served clients in the pharmaceutical, biotech, private equity and medical devices sectors.
      <br><br>
      As a consultant, Foster helped his clients address key issues in generating market forecasts and 
      product valuation, portfolio optimization and life cycle management for both early stage and
       marketed products. Foster was previously a Postdoctoral Fellow at the NYU Cancer Institute where
     he was awarded the Kimmel Foundation Fellowship to study and develop novel modulators of the 
     Wnt-signaling pathway. 
     
     <br><br>Foster received his Ph.D. in Molecular and Cell Biology from the University of 
     California at Berkeley, an M.P.H in Health Policy and Management from Columbia University Mailman 
     School of Public Health and a B.Sc. with Honors in Microbiology and Biochemistry 
     from <strong> St. Xavier’s College, Mumbai, India.</strong>
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
