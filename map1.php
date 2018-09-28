<!DOCTYPE html>
<HTML>
    <head>
        <title> Locate Venue On Map </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
	<script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        
       
        <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->
<div id = "map"></div>
	  <script>
         
         // Creating a map object
         var map = new L.map('map').setView([18.9430, 72.8315],17);
         
         // Creating a Layer object
         L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
		 
		 L.marker([18.9430, 72.8315]).addTo(map).bindPopup("St. Xavier's College").openPopup();
         
      </script>

<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>