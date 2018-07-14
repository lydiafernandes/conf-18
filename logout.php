<?php
session_start();
ini_set("display_errors", 1);
error_reporting(E_ALL);
//session_destroy
unset($_SESSION['id']);

//session_destroy();

if(isset($_SESSION['id']))
{
    echo "Still logged in";
}
else {
    echo "Loged out succesfully!";
    header("Location:/");
}

?>
