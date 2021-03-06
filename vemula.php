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
  <h4> Faculty at the Institute for Stem Cell Biology and Regenerative Medicine(inStem),
   Bangalore, India.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     After obtaining Ph.D. from Indian Institute of Science in 2005, he
received postdoctoral training at The City College of New York and Harvard–MIT Division of
Health Sciences and Technology at Harvard Medical School in affiliation with Brigham and
Women’s Hospital. In 2009, the Ewing Marion Kauffman Foundation selected him as an
entrepreneur fellow through whom he received formal training in translational research and
entrepreneurship. <br><br>
Dr. Vemula is interested in the fields of biomaterials and chemical biology programs. In
biomaterials, he is interested in drug delivery and gene delivery; in chemical biology he is
interested in small molecular drug discovery. Overall he is intersted translation science. He has
published >60 peer-reviewed papers and has given 80 national and international invited lectures
and has 20 issued or pending patents. Several technologies developed by his team have formed
the foundation for multiple products on the market. Based on the technologies he developed, two
biotech companies were formed, Skintifique and Alivio Therapeutics. Two more startups are being
formed.<br><br>
Vemula’s work has been discussed in hundreds of newspapers, online websites, television
newscasts, and radio shows around the world including The New York Times, CNN, ABC News,
NBC, Boston Globe, LA Times, BBC, Discovery, National Geographic, The Hindu, The Times of
India, Deccan Herald and many more.
     
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
