<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "group_project";

if (!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	// code...
	die("failed to connect!");
}


 ?>