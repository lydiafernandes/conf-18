<?php
session_start();
//inlcude 'session.php';
?>
<!DOCTYPE html>
<HTML>
    <head>
        <title> Contact Us </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    
  <style>
  .column {
    float: left;
    width: 33.33%;
    padding: 0px 5px 0px;
    margin:0px;
}

</style>


</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->
<div id="section2" class="bg-warning container inner_row "> 
        <h1>St. Xavier's College-Autonomous, Mumbai</h1>
        <p>St. Xaviers’s College  founded in 1869 by ‘Society of Jesus’, is a premier Jesuit 
            Institution, known for its academic excellence and commitment towards humanity 
            with its ethos based on the ‘magis’ - striving for ‘the more’. 
        </p>
            <div class="column">
                 <img src="img/abt_us_images/sxc_lib1.png" class="img-fluid" 
                 alt="xaviers library" style="width:100%;">
            </div>

            <div class="column">
                 <img src="img/abt_us_images/sxc_chapel1.png" alt="xavier chapel" class="img-fluid" 
                 style="width:100%;">
            </div>

            <div class="column">
                <img src="img/abt_us_images/sxc_quad_eco1.png" class="img-fluid" 
                  alt="xaviers quad" style="width:100%;">
            </div> 
        <p>
            Nestled in a locale of exquisite Victorian Gothic style architectural splendor of 
            artistic sophistication, the college campus stands on a strategic road named 
            ‘Mahapalika Marg’ connecting Dhobi Talao to Victoria Terminus, now known as 
            Chatrapati Shivaji Maharaj Terminus (CSMT). 
            All the elegant structures on Mahapalika Marg overlook the ‘Esplanade’ or ‘Azad Maidan’. 

        </p>
        <p>
            The students and faculty at our campus strive to thrive in an academic environment
             envisaging  creative freedom, critical thinking with a commitment to principles of 
             social justice, equal opportunities by imbibing the essence of inclusive education.
              The college campus symbolises a homogeneity merging traditional concepts with 
              modern technological advancements. It keeps up with the ever complex environment
               of the present world through its various centres such as Blatter Herbarium, 
               Heras Institute of Indian History and Culture, Caius Laboratory for 
               Interdisciplinary Research, Nadkarny Sacasa Research Laboratory (NSRL),
                Xavier’s Research Centre for Visually Challenged (XRCVC), Department of
                 Inter-Religious Studies (DIRS) and the Xavier’s Visual Arts Studio (XVAS) 
                 on the campus.
        </p>
      </div>        
           

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>