<!DOCTYPE html>
<HTML>
    <head>
        <title> Invited Speaker </title>
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
  
  <img src="img/speakersnewdimensions/Daniel_Wilson_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Daniel Wilson" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Daniel R. Wilson, M.D., Ph.D.</a>
    </h3>
  <h4> A pioneer in Evolutionary Neuroscience, Currently he is the President of Western University of Health Sciences, Pomona, California USA.</h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
    
    Yale (BA Anthropology), Iowa (MD), McLean Hospital & Harvard Medical School (Internship, Residency & Fellowships), Case Western (Diploma Leadership), and Cambridge (PhD  Biological Anthropology).  
  
Some 350 formal scholarly communications and Principle Investigator on more than 40 grants and Co-I or Consultant on some 40 other studies.    
  
Directed Neuropsychiatry at McLean Hospital & Harvard Medical School from 1987-92.  From 1994 to 2000, served as Medical Director of the largest state hospital in Ohio. University of Cincinnati Professor of Psychiatry and Medical Director of the University Institute for Medicine & Law.  Creighton University Chairman of Psychiatry and Professor of Psychiatry, Neurology, and Anthropology 2000-2012.

Pioneer in Evolutionary Neuroscience as President of the American Neuropsychiatric Association and Founding Chair of the World Psychiatric Association Section on Evolutionary Psychiatry. 
  
From 2012 to 2016 Vice President for Health Affairs & Dean of the University of Florida Health Science Center-Jacksonville. Supervised academic, clinical, and research activities in the Schools of Medicine, Nursing, and Pharmacy based at a 700 bed hospital all with a combined budget of $800M and some 6,000 employees, including a 750 faculty and resident practice spanning 51 sites in Florida and Georgia.   
  
Now President of Western University of Health Sciences with graduate colleges of Medicine, Nursing, Pharmacy, Veterinary Medicine, Dentistry, Podiatry, Optometry, Health Professions and Biomedical Sciences — the most comprehensive health sciences university in the United States. 
<a href="#top" class="btn btn-outline-secondary">Top</a>
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
