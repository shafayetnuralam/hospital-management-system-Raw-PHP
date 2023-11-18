<?php
// Create connection
$con=mysqli_connect("localhost","starview_parma","vqNP5skZmaODBNeT","starview_hospital");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>