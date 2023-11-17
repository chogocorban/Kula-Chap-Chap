<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($conn);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My webstie</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
 </head>
 <body>
 	<div><h1>Kula Chap Chap</h1>
<nav class="nb">
		<ul class="ul">
			<li><a href="index.php">Home</a></li>
			<li><a href="snacks.php">Snacks</a></li>		
			<li><a href="beverages.php">Beverages</a></li>
			<li><a href="food.php">Food</a></li>
			<li class="right"><a href="logout.php">Log Out</a></li>
			
		</ul>
	</nav>
	</div>


	<h2>Categories</h2>

	<div  class="categorygallery">
		<div class="categoryimg">
		<a href="snacks.php">
		<img src="snacks.webp" alt="snacks">
		</a>
		<caption>Snacks</caption>
		</div>
	<div class="categoryimg">
	<a href="beverages.php">
	<img src="beverages.jpg" alt="beverages">
	</a>
	<caption>Beverages</caption>
	</div>
	<div class="categoryimg">
		<a href="food.php">
		<img src="food.webp" alt="food">
		</a>
		<caption>Food</caption>
	</div>
	
	
	</div>
 </body>
 </html>