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
     Foster Casimir Gonsalves is currently the Vice President of Drug Development and Strategy, 
     Rgenix, Inc. – New York. He was Vice President, Preclinical Development, Rgenix, Inc. from 2013-16.
     <br><br> 
At Rgenix, Dr. Foster is in-charge of Product development strategy of immune-oncology and cancer metabolism pipeline at a NYC-based biotech, in Market analysis, forecasting and product planning to support clinical development strategy for oncology indications and in Partnering discussions with potential pharma/biotech partners.He is responsible for all clinical pharmacokinetics and biomarker data analytics and data management, planning and manage IND-enabling DMPK and toxicology studies and IND-filing with the FDA.
<br><br> 
Dr. Foster has successfully strategized and obtained orphan designations for 3 independent indications from the Office of Orphan Drug Products
<br><br>
Mr. Foster has held the position of Managing Consultant at Easton Associates - New York, NY, from 2012 to 2013. 
<br><br>
He secured B.Sc. in Microbiology & Biochemistry from <strong>St. Xavier’s College, University of Mumbai, India.</strong>
 Followed by a Ph.D. in Molecular & Cell Biology from <strong>University of California, Berkeley. </strong>
 He did his  Post-Doctoral Fellowship from <strong> NYU School of Medicine-</strong> Cancer Institute – New York, NY. Dr. Foster has identified and has been granted patents on
  3 lead compounds for Wnt inhibition, which formed the basis of a <strong>$250K award by the New York
   City Investment Fund. </strong> Mr. Foster Gonsalves has been honored the Kimmel Foundation Postdoctoral Fellowship. Dr. Foster also holds a degree in Master of Public Health, Health Policy and Management From Columbia University Mailman School of Public Health. His Publications, patents and awards are available on request.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
