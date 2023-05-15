<?php

$con = mysqli_connect("", "", "", "");

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
