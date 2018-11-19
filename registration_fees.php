<!DOCTYPE html>
<HTML>
    <head>
        <title> Registration </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

         <!-- this file is included in the externa file -->
        
        <link rel="stylesheet" type="text/css" href="css/style_schedule.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
		<style>
			.center_cell{
				text-align:center;
			}


/* Strikethrough */

.strikethrough {
	display: inline-block;
	position: relative;
	transition: all 0.5s cubic-bezier(.55, 0, .1, 1);
}

.strikethrough:after {
	content: '';
	position: absolute;
	display: block;
	width: 100%;
	height: 2px;
	box-shadow: 0 1px rgba(255,255,255,0.6);
	margin-top: -0.7em;
	background: black;
	transform-origin: center left;
	animation: strikethrough 1s 0.5s cubic-bezier(.55, 0, .1, 1) 1;
	transition: transform 0.5s cubic-bezier(.55, 0, .1, 1);
}


/* Little hover effect */

.strikethrough:hover {
	color: rgba(200,0,0,1);
	background: rgba(255, 189, 182, 0.3);
}

.strikethrough:hover:after {
	transform: scaleX(0);
	transform-origin: center right;
}




/* Keyframes for initial animation */

@keyframes strikethrough {
	from {
		transform: scaleX(0);
	}
	to {
		transform: scaleX(1);
	}
}

		</style>
		
		
</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>

<!-- Tabs -->
<section id="tabs">
	<div class="container">
		<h3 class="section-title">
            From Health to Well being: An Interdisciplinary approach from Fundamental  
             Sciences to Translational Medicine
        </h3>

        <h4 class="section-title">
            Venue: St. Xavier’s College, Mumbai (India) <br>
            9<sup>th</sup> -11<sup>th</sup> January 2019
        </h4>
		

		<div class="row">
            <div class="table-responsive">
                <table class="table table-dark table-hover">


                    <thead>
                        <tr class="table-active">
                            <th colspan = 6 class= "center_cell">Registration Fees</th>
                        </tr>
                        <tr>
                            <th>Sr. No.</th>
                            <th class= "center_cell">Category</th>
                            <th colspan = 2 class= "center_cell">Indian (in rupees)
                             <i class="fa fa-rupee" style="font-size:24px"></i>
                             </th>
                            <th colspan = 2 class= "center_cell">International (in dollars) $</th>
                        </tr>
                        <tr>
                           <th></th>
                           <th></th>
                           <th class= "center_cell">On or<br>Before<br>10<sup>th</sup> Nov 2018</th>
                           <th class= "center_cell">After<span style="color:yellow; font-size:22px;">#</span> <br/>10<sup>th</sup> Nov 2018</th>
                           <th class= "center_cell">On or<br>Before<br>10<sup>th</sup> Nov 2018</th>
                           <th class= "center_cell">After<span style="color:yellow; font-size:22px;">#</span> <br/>10<sup>th</sup> Nov 2018</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Authors<span style="color:#36a7e9; font-size:22px;">#</span> <br>(Academicians/Scientists/Practitioners)</td>
                            <td class= "center_cell">3500/-</td>
                            <td class= "center_cell">4000/-</td>
                            <td class= "center_cell">250/-</td>
                            <td class= "center_cell">275/-</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Authors<span style="color:#36a7e9;font-size:22px;">#</span><br>(Masters/Ph.D candidates)</td>
                            <td class= "center_cell">2500/-</td>
                            <td class= "center_cell">3000/-</td>
                            <td class= "center_cell">200/-</td>
                            <td class= "center_cell">225/-</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Industry Experts</td>
                            <td class= "center_cell">6000/-</td>
                            <td class= "center_cell">7000/-</td>
                            <td class= "center_cell">300/-</td>
                            <td class= "center_cell">325/-</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Attendee /Audience<br>(Non-authors)</td>
                            <td class= "center_cell">2000/</td>
                            <td class= "center_cell">2500/-</td>
                            <td class= "center_cell">150/-</td>
                            <td class= "center_cell">160/-</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Attendee /Audience<br>(Under-Grad./Post Grad. Students)</td>
                            <td class= "center_cell">1200/-</td>
                            <td class= "center_cell">1500/-</td>
                            <td class= "center_cell">50/-</td>
                            <td class= "center_cell">70/-</td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div> <!-- end of row -->

        <div class="row">

        <div class="col-sm-2">&nbsp; </div>
        <div class="col-sm-8"><h3>
            <p><b><ul>Kindly note: (Date Extended) </ul></b><br>
            <span style="color:yellow; font-size:30px"><sup>#</sup></span> No abstract submissions will 
            be accepted post <b> <span class="strikethrough"> 20th Nov 2018 </span> (extended to) 3rd Dec. 2018 </b>, while <b><i> Registration </i></b>
            as Audience / Attendee will still remain <b><i>open</i></b>
            </p>
            

            <p><span style="color:#36a7e9; font-size:30px"><sup>#</sup></span>The decision for the submitted abstract qualifying to be
            an Oral Paper presentation or Poster presentation, will be conveyed by email. 
            </p>

             </h3>
        </div>

        <div class="col-sm-2">&nbsp; </div>

        </div><!-- end of row -->
	</div>
</section>


<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>