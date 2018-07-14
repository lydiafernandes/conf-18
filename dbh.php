<?php

$conn = mysqli_connect("localhost","root","root","sci_fi_DB");

echo "<p>Praise the Lord</p>";
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error);
}
else echo "<p>You are now connected to database</p>";
?>
