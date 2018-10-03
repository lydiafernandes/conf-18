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
  
  <img src="img/speakersnewdimensions/Alex_New.png" class="img-responsive rounded margin"
   style="display:inline" alt="pic of Dr. Alex C Varghese" width="50%" height="50%">

   <h3 class="margin">
      <a name="top"> Dr. Alex C. Varghese</a>
    </h3>
  <h4> Scientific  Director, 
	ASTRA Fertility Group
   
  </h4>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    
  <h3 class="margin">
  <button type="button" class="btn btn-outline-light btn-lg">Read more</button>
  </h3>
    
     <p style="display:none;">  
     <!-- speaker content goes here -->
			Alex C Varghese is presently the Scientific Director, Astra Fertility Group of IVF Centre at Mississauga, Ontario, Canada and also hold the position of Laboratory Director at CRAFT Hospital and research centre, Kerala, India. He received his PhD in Biochemistry from University of Calcutta, India for his thesis based on ART. He was a Post Doctoral Research Fellow at the Center for Reproductive Medicine, Cleveland Clinic Foundation, USA. He is active in clinical embryology since 1997 and has initiated many successful training programs in ART and helped in designing and setting up of many IVF units in rural and urban India and neighboring countries. In the year 2010 he founded the educational web platform for IVF professionals- www.lifeinvitro.com which is now popular in 165 countries. Alex has authored over 30 manuscripts and edited 8 books in assisted reproduction, including the popular and bestselling “Practical Manual of in vitro fertilization: Advanced methods and novel devices”. Alex’s research interests are in assisted reproductive technology, in particular, in understanding the molecular and environmental causes and prevention of male infertility, probiotics in fertility, microbiome in health and disease associated with reproduction and developing stress-free, automated embryo culture systems for In Vitro Fertilization. 

He is an executive committee member of special group in Andrology of Canadian Fertility and Andrology Society (CFAS) and Chairman-Scientific Committee of 7th International Congress of Academy of Clinical embryologists, Goa, India (www.acegoa2018.com)
    <br>Email: alexcv2008@gmail.com, 
    Web: www.lifeinvitro.com
            <a href="#top" class="btn btn-outline-light btn-lg">Top</a>
    
        </p>

</div>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>
