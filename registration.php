<?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);

require 'dbh.php';

// initializing variables
$title = "";
$fname = "";
$lname = "";
$email = "";
$code = "";
$mobile = "";
$category = "";
$university = "";
$city = "";
$state = "";
$country = "";
$purpose = "";

$errors = array(); 

// connect to the database
//$conn = mysqli_connect('localhost', 'root', '', 'sci_fi_db');
//$conn= mysqli_connect('localhost', 'root', '', 'sci_fi_db') or die("Error connecting to database: ".mysql_error());

// REGISTER USER
if (isset($_POST['regis_user'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $code = mysqli_real_escape_string($conn, $_POST['code']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $university = mysqli_real_escape_string($conn, $_POST['university']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $state = mysqli_real_escape_string($conn, $_POST['state']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
	if(isset($_POST['purpose'])) {
	$purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
	}
  echo $title;
  echo $fname;
  echo $lname;
  echo $email;
  echo $code;
  echo $mobile;
  echo $category;
  echo $university;
  echo $city;
  echo $country;
  echo $state;
  echo $purpose;
  echo "<br>";

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($title)) { array_push($errors, "Designation/Title is required"); }
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($code)) { array_push($errors, "Country code is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile No. is required"); }
  if (empty($category)) { array_push($errors, "Category is required"); }
  if (empty($university)) { array_push($errors, "Name of Company/University/College is required"); }
  if (empty($city)) { array_push($errors, "Name of city is required"); }
  if (empty($state)) { array_push($errors, "Name state is required"); }
  if (empty($country)) { array_push($errors, "Name country is required"); }
  if (empty($purpose)) { array_push($errors, "Purpose is required"); }
 
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM tbl_registrations WHERE email='$email'";

  //" ... WHERE PartNumber = '" . mysqli_escape_string($conn,$partid) . "';"
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
    else echo "error occurred";
  
	
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO tbl_registrations (title, fname, lname, email, c_code, number, category, university, city, state, country, purpose) 
  			 VALUES('$title', '$fname', '$lname', '$email', '$code', '$mobile', '$category', '$university', '$city', '$state', '$country', '$purpose')";
			  //$query = "INSERT INTO trial (fname, lname, email) 
  			  //VALUES('$fname', '$lname', '$email', '$code', '$mobile', '$category', '$university', '$city', '$state', '$country', '$purpose',)";
  	mysqli_query($conn, $query) or die ("wrong query");
  	header('location: success.php');
  }
 
}

?>