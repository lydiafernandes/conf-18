<!DOCTYPE html>
<HTML>
    <head>
        <title> Contact Us </title>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- popper.js is recommended for bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        


        <!-- this file is included in the externa file -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" type="text/css" href="css/style_index.css"> 


</head>
<body> 
    <!-- include the nav bar -->
<?php include("includes/navigation1.php");?>


<!-- -------------------------------------------------->

<!-- main-section is for styling -->
<div class="col-sm-8 main-section"> 
			<div class="modal-content">
  			
				<div class="col-12 user-img"> <!-- it will utilize all 12 columns -->
					<img src="img/logo_college197x197.png">
				</div>
				
				<form class="col-12" method="post" action="registration.php">
				
				<legend>
					<p> <font color="white"><h4>Personal Details</h4></p>
				</legend>
				<table>
							
					<tr>
						<td>
							<div class="form-group" >
								<select class="form-control" name="title" value="<?php echo $title; ?>">
									<option value="" hidden> Designation/Title </option>
									<option value="Miss">Miss</option>
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms.">Ms.</option>
									<option value="Prof.">Prof.</option>
									<option value="Dr.">Dr.</option>
									<option value="Asst. Prof. Dr.">Asst. Prof. Dr.</option>
									<option value="Assoc. Prof. Dr.">Assoc. Prof. Dr.</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>">
							</div>
						</td>
						
						
						<td>
							<div class="form-group">
								<input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>">
							</div>
						</td>
					</tr>
				
					<tr>
						<td>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
							</div>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						
						<td>
							<div class="form-group">
								<input type="text" name="code" class="form-control" placeholder="Country Code" value="<?php echo $code; ?>">
							</div>
							
						</td>
						<td>
							<div class="form-group">
								<input type="phone" name="mobile" class="form-control" placeholder="Number" value="<?php echo $mobile; ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<select class="form-control" name="category" value="<?php echo $category; ?>">
									<option value="" hidden> Category </option>
									<option value="Student">Student</option>
									<option value="Faculty">Faculty</option>
									<option value="Industry">Industry</option>
								</select>
							</div>
						</td>
					</tr>
				</table>
				
				<legend>
				<p> <font color="white">	<h4> Affiliated Company/University/College </h4></p>
				</legend>
					
				<table>
					<tr>
						<td>
							
							<div class="form-group">
								<input type="text" name="university" class="form-control" placeholder="Company/University" value="<?php echo $university; ?>">
							</div>
						</td>
					</tr>
				
					<tr>
						<td>
							<div class="form-group">
								<input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $city; ?>">
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" name="state" class="form-control" placeholder="State" value="<?php echo $state; ?>">
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo $country; ?>">
							</div>
						</td>
					</tr>
					
					<tr>
						<td>
							<p> <font color="white"><label> Registration for: <label></p>
						
							<input type="radio" name="purpose" value="Oral">Oral Presentation <br>
						
							<input type="radio" name="purpose" value="Poster">Poster <br>
						
							<input type="radio" name="purpose" value="Audience">Audience
						</td>
					</tr>
				</table>
				<table>
							
						<button type="submit" class="btn" name="regis_user">
  						<i class="fas fa-sign-in-alt"> </i> Proceed to Pay 
  				</button>
					
				</table>				
				
				</form>
			</div>
		</div>
	<!--</div>-->
<!--- Connect-->

<?php include("includes/footer.php");?>
</body>
</html>