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
  
  <img src="img/speakersnewdimensions/Dhanisha_Jhaveri_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Dhanisha Jhaveri" width="50%" height="50%">

   <h3 class="margin">
      <a name="top">Dr. Dhanisha Jhaveri </a>
    </h3>
  <h4>Senior Research Fellow
Mater Research Institute-University of Queensland Faculty of Medicine & Queensland Brain Institute
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
     Dr Dhanisha Jhaveri holds a joint appointment at Mater Research and the Queensland Brain Institute (QBI), Univeristy of Queensland and is a Mater Foundation Senior Research Fellow. She leads a research program investigating the fundamental mechanisms that drive the renewal of neurons in the adult brain, with the goal of harnessing this form of neural plasticity to relieve the emotional and cognitive burdens associated with chronic stress and neuropsychiatric disorders. 
<br><br>
Dhanisha received her PhD from the Tata Institute of Fundamental Research (TIFR), India, under the supervision of Professor Veronica Rodrigues, where she unravelled the molecular mechanisms that wire the olfactory axons in the fly (Drosophila) brain.  In recognition of her doctoral work she was awarded the Indian National Science Academy medal for Young Scientist of the Year in 2003. Fascinated by the discovery that the production of new neurons continues in the adult brain, she then joined the laboratory of Professor Perry Bartlett at the Queensland Brain Institute as a Human Frontiers Science Program Postdoctoral Fellow. She has made major discoveries that have transformed our understanding of the regulation and roles of neural stem cells in the adult brain. Her work uncovered that a subclass clinical antidepressants directly activates neural stem cells in the hippocampus, a brain region implicated in regulating mood and cognitive functions. She also pioneered the development of a new cell sorting protocol to purify neural stem cells which revealed presence of distinct stem cell populations in this brain region. More recently, she co-led a study which demonstrated that the basolateral amygdala (BLA) also harbour resident neural stem cells that proliferate and generate new, functional neurons which survive and integrate into the local circuitry.
<br><br>
Her research program seeks to (i) understand mechanisms that drive the production and integration of new neurons in the adult brain and (ii) investigate functions of adult-born neurons in the regulation of emotion and cognitive processes in health and disease.  Long-term goals of her laboratory are to uncover new mechanisms that are central to neurogenic regulation and learn how new neurons impact neural circuits and behaviour and translate these principles to better understand and ultimately treat cognitive and mood-related deficits associated with anxiety and depression. Her group has developed as well as utilised a combination of innovative and multi-modal approaches including sophisticated mouse genetic models, in vivo lineage tracing using viral vectors, flow cytomtery, cell culture, transcriptomics, high-resolution confocal microscopy, cognitive- and mood-related behavioural tests to address these questions.
<br><br>
Dhanisha’s research has resulted in multiple publications, successful grant funding, and an Australian patent, and has led to numerous invitations to speak at national and international meetings. She is passionate about mentoring young investigators and believes that quality mentorship is a vital ingredient for scientific success.

            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
