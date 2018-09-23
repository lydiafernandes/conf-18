<!Doctype html>
<HTML>
<HEAD>
    <TITLE> SUCCESS </TITLE>
</HEAD>
<BODY>
<?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);

include 'dbh.php';

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
  
  $user_check_query = "SELECT * FROM tbl_registrations";

  $result = $conn->query($user_check_query);
  
  //$user = mysqli_fetch_assoc($result);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</BODY>
</HTML>