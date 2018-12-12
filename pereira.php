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
  
  <img src="img/speakersnewdimensions/Roy_Pereira_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. (Fr.) Roy Pereira, S.J." width="50%" height="50%">

   <h3 class="margin">
      <a name="top">Dr. (Fr.) Roy Pereira, S.J.</a>
    </h3>
  <h4>  Provost/Vice Principal Academics, Head, Dept. of Chemistry, St. Xavier&apos;s  College.
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Dr. Roy Pereira, S.J. is currently the Provost/Vice-Principal (Academics) and Head of the Department of Chemistry at St. Xavier’s College (Autonomous), Mumbai. He has been teaching here since 1993. In 2012, he began an innovative programme in Neuroscience. He was awarded two research fellowships, spending the fall semester 2016 at Berkeley Campus and the spring semester 2017 at St. Louis University U.S.A. He is currently researching into the effects of cell phones, internet usage and social media on the brain for which he was invited by Google Headquarters in December 2016 to speak to their employees. His research also involves the understanding of the Mind-Body Link, the effect of meditation on health outcomes, the placebo effect, neuro feedback and ways of dealing with stress in our lives. In this connection he was invited by Harvard University in January 2017. He has Masters Degrees in Chemistry, Philosophy and Theology. His fundamental research question deals with Consciousness from both a Neuroscience and a Quantum perspective. His presentations are interactive and he strives to explain complex concepts from Neuroscience in easy-to-understand ways through the use of multimedia, music and the piano. Dr. Roy Pereira has been the Convener for an International Conference, “Chemistry Cutting Edge titled: Nano, Green and Beyond” funded by DBT, DST and UGC in the year January 2014.
<br><br>
Dr. Roy Pereira is the administrative head of various prestigious committees and is a key member of several Governing bodies of several educational institutions throughout Mumbai. He has been invited as plenary speaker to deliver public lectures, present papers related to neuroscience at various National conferences held within India and at International platform around the globe. 
<br><br>
Dr. Roy Pereira has been a devout believer of social welfare for the under-privileged and has been at the helm of activities related to this cause. Apart from this, he gives ‘Motivational Talks’ for young students and scientists. He has various research publications on his name and has authored several books.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
