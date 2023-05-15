<?php

//$con = mysqli_connect("localhost", "csci430", "jagpal08", "chicoSchool");
$con = mysqli_connect("localhost", "csci430", "jagpal08", "chicoSchool");

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>