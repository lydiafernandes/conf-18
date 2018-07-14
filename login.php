
 <?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);

include 'dbh.php';
print_r($_POST);

$uid = $_POST['username'];
$pwd = $_POST['password'];

echo $uid."<br>";
echo $pwd;

$sql = "SELECT * FROM user WHERE USERNAME='$uid' AND PWD='$pwd'";
$result = $conn->query($sql);

if(!$row = mysqli_fetch_array($result))
{
    echo "Your username or password is incorrect!";
    header("location:welcome.php");
}
else{
    //echo "You are logged in!";
    //create a variable called superglobal
    $_SESSION['id']=$row['id'];
   // $_SESSION['login_user']=$row['USERNAME'];
    echo $_SESSION['id'];
    header("location:welcome.php");
}

?>

<?php

/*
ini_set("display_errors", 1);
error_reporting(E_ALL);

include 'dbh.php';
session_start();
print_r($_POST);

//$username = $_POST['username'];
//$pwd = $_POST['pwd'];


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

    echo $myusername;
    echo "<br>".$mypassword;

    $sql = "SELECT id FROM user WHERE USERNAME = '$myusername' and PWD = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location:xav_mum_conf/welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }*/

   
?>