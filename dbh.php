<?php

$conn = mysqli_connect("localhost","scicondb","Ke0P3M!_him6","scicondb");

echo "<p>Praise the Lord</p>";
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error);
}
else echo "<p>You are now connected to database</p>";
?>
