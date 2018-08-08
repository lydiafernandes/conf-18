<?php
session_start();
//inlcude 'session.php';
?>
<!DOCTYPE html>
<HTML>
    <head>
        <title> About Us </title>
        <meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <!-- this file is included in the external file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
       
        <style>
        body {
              position: relative;
            }
        ul.nav-pills {
                       top: 20%;
      position: fixed;
  }
  div.col-8 div {
      height: 50%;
  }


#section1{
  background-color:#96d900;
}
  #section2{
      
  }
  </style>


</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1"> 
    <!-- include the nav bar -->
    <?php include("includes/navigation.php");?>

<!-- -------------------------------------------------->
<div class="container-fluid">
  <!-- contains all the sections -->
  <div class="row"> 
    <!-- contains all the navigation menu -->
    <nav class="col-sm-3 col-4" id="myScrollspy">

      <ul class="nav nav-pills flex-column">
        
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Creighton University</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#section2">St. Xavier's College</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#section3">Conference Schedule</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Section4</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section41">Link 1</a>
            <a class="dropdown-item" href="#section42">Link 2</a>
          </div>
        </li>

      </ul>
    </nav>
    <div class="col-sm-9 col-8">
      <div id="section1" class="bg-success container">    
        <h1>Creighton University</h1>
         <img src="img/creighton_ovrview.jpg" class="img-fluid float-left rounded" width="304"
         height="236" alt="image of creighton" title="Aerial view of Creighton University">

         <img src="img/new_creighton_campus.png" class="img-fluid rounded" style="margin:0px 5px 20px;"
          width="304" height="236" alt="image of creighton" title="Campus of Creighton University">
         
         <img src="img/CreightonUniv_Church.jpg" class="img-fluid float-right rounded" width="304"
         height="236" alt="image of creighton" title="Church view of Creighton University">
         <p>
            Creighton is a Jesuit comprehensive university committed to 
            excellence in its selected undergraduate, graduate and professional programs.
            Creighton University, located in Omaha, NE, USA, is a supportive community of 
            students, faculty and staff thriving in an environment that stimulates critical 
            and creative thinking while providing ethical perspectives for dealing with an
            increasingly complex world.
            This University, in keeping with the Jesuit traditions, provides a 
            place where stuents learn to become leaders through service to others and contribute
            something meaningful to the world. Creighton University has earned the top spot in U.S.News &
            World Report magazine’s college ranking for the Midwest Regional Universities. It has earned
            No. 1 Ranking in America’s Best Colleges” edition for the 15th year in a row.
            </p>
            <p>
        The mission of the Creighton School of Medicine is to improve the human well-being with 
        a diverse body of students, faculty and staff who provide excellence in educating 
        students, physicians and the public, advancing knowledge and providing comprehensive 
        patient care. The Department of Clinical and Translational Science (CTS) at Creighton
         University School of Medicine is instituted to support advance education, 
         provide collaboration and research in clinical and translational science. 
         Our goal is to establish Creighton as a nationally and internationally renowned 
         research institution for cutting-edge multidisciplinary translational research programs.
          CTS strives to improve the future of health care and bring about an era of personalized 
          medicine while advancing science and applying new discoveries to patient care. 
          The Department of CTS fosters an extremely conducive environment where learners are 
          mentored to become exceptional scientists/physicians and emerge as independent
           investigators.

        </p>
      </div>
      <div id="section2" class="bg-warning"> 
        <h1>St. Xavier's College-Autonomous, Mumbai</h1>
        <p>St. Xaviers’s College  founded in 1869 by ‘Society of Jesus’, is a premier Jesuit 
            Institution, known for its academic excellence and commitment towards humanity 
            with its ethos based on the ‘magis’ - striving for ‘the more’. 
        </p>
            
            <img src="img/sxc_lib.jpg" class="img-fluid float-left" alt="xaviers library" width="304" height="275">
            <img src="img/sxc_chapel.jpg" alt="xavier chapel" class="img-fluid" style="margin-left:10px; margin-right:10px;" width="304" height="275">
            <img src="img/new_sxc_eco.png" class="img-fluid float-right" alt="xaviers quad" width="304" height="275"> 
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
      <div id="section3" class="bg-secondary">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41" class="bg-danger">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section42" class="bg-info">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div> <!-- end of row div --> 
</div> <!-- end of main div -->

<!-- -------------------------------------------------->

<!--- Connect-->
<?php include("includes/footer.php");?>

</body>
</html>