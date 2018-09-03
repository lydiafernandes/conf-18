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
  
  <img src="img/speakersnewdimensions/Praveen_Vemula_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Praveen Vemula" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Praveen Vemula Ph.D.</a>
    </h3>
  <h4> Senior Research Career Scientist at the Veterans Administration (VA),
	Director of the Musculoskeletal Disease Center at the VA Loma Linda Healthcare Systems,
	Professor of Medicine, Orthopedics and Biochemistry at Loma Linda University, California
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
			Dr. Subburaman Mohan, Ph.D., is a well-established scientist in skeletal biology research with an international reputation and has published nearly 400 papers in scientific journals with high impact factors. Dr. Mohan’s research interests during the past three decades have focused on the discovery of novel genes and evaluation of the functions of genes that are relevant to the acquisition, maintenance, and loss of bone and cartilage using various molecular genetics and biochemical approaches. Dr. Mohan has made seminal contributions to the field of growth hormone/insulin-like growth factor (IGF) actions on bone. He discovered of two novel IGF binding proteins and elucidated their role in the musculoskeletal system. His current research funded by VA and NIH is centered around genetic regulation of peak bone mass, molecular pathways for thyroid hormone and hypoxia signaling in endochondral ossification, epigenetic mechanisms of vitamin C deficiency-induced skeletal fractures and long-term consequences of mild traumatic brain injury on bone. Dr. Mohan is a well funded investigator and is a recipient of a number of professional awards. He has been a member or is a current member of the Editorial Board of several scientific journals, scientific organizing committees, and grant review panels.
     
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
