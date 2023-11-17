<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My webstie</title>
 </head>
 <body>
 	<a href="logout.php">logout</a>
 	<h1>This is the index page</h1>
 	<p>hello user</p>
 	<a href="snacks.php">snacks</a>
 </body>
 </html>