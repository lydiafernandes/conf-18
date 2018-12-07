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
  
  <img src="img/speakersnewdimensions/Andras_Varro_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Professor Andras Varro" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Professor Andras Varro</a>
    </h3>
  <h4> Szeged Medical University, Hungary
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Andras Varro graduated from the Szeged Medical University (Hungary) with an M.D. degree in 1978. He obtained his PhD degree in 1987. In 1998 he received the D.Sc. degree from the Hungarian Academy of Sciences. Between 1978 and 1990 he worked at The Cardiovascular Department of the Institute for Drug Research in Budapest and he was involved in various research projects applying in vivo and in vitro pharmacological methods to develop cardiotonic and antiarrhythmic drugs. Between 1991 and 2001 he was working at the Department of Pharmacology and Pharmacotherapy at the University of Szeged, Hungary with professor Julius Gy. Papp and András Varró succeeded him as chairman of the department in 2001. He was appointed as vice rector of the University of Szeged in 2011 supervising science and innovation. During his career, he spent 5 years in the USA, at the Kranner Institute of Cardiology, Indiana University with professor Borys Surawicz, and at the Department of Pharmacology and Cell Biophysics, University of Cincinnati, Ohio with professors Arnold Schwartz and David Lathtrop. He also spent more than 1 year (1991-1992) in the United Kingdom at the Department of Veterinary Preclinical Sciences, University of Liverpool, with professor David Eisner. His major research interests include physiology and pharmacology of cardiac potassium channels, cellular mechanisms of arrhythmias, antiarrhythmic and proarrhythmic drug actions. His research also focuses the genetical causes of LQT syndromes involving cellular (gene transfer) techniques and experimental in vivo (transgen models rabbit LQT approaches. His most important scientific achievements were contributing to the elucidation of the cellular mode of action of amiodarone (Eur. J. Pharmacol. 1985; 112:419), the role of the slow delayed rectifier potassium current (IKs) in cardiac repolarization and repolarization reserve (J Physiol, 2000; 523:67., Circulation, 2005; 112:1392.), characterization of the native human transmembrane potassium currents (Cardivasc Res, 1998; 40:508, 2001; 49:790.), and elucidation of the possible antiarrhythmic effect of the sodium calcium exchanger (NCX) (Br J Pharmacol. 2004; 143:827; Br J Pharmacol 2013;170:768)
<br><br>
Between 1998 and 2002 he served as an editor for the British Journal of Pharmacology and since 2013 he is editor of Cardiovascular Research and since 2017 J Molecular and Cellular Cardiology. He published more than 300 full length papers and 9 book chapters in English language which earned 7276 independent citations and resulted H index= 53. He was also involved in the development of several new cardioactive drugs which resulted 8 patent applications.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
