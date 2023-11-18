<?php 
session_start();

	include 'connection.php';
	include 'functions.php';
	
	$admin_data = check_admLogin($conn);

	if (isset($_POST['submit'])) {
		// code...
		$name=$_POST['name'] ;
		$email=$_POST['email']; 
		$password= $_POST['password'];

		$sql= "INSERT INTO users2(name,email,password) VALUES('$name','$email','$password')";
		$result= mysqli_query($conn,$sql);
		if ($result) {
			// code...
			//echo "Data inserted succesfully";
			header('location: display.php');
		}else{
			die(mysqli_error($conn));	
		}
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
 	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
	<title>Add User</title>
</head>
<body>
	<h1>Add User Account</h1>

	 <button > <a href="display.php">View Accounts</a></button>
 	<button > <a href="user.php">Add user</a></button>
 	<button > <a href="admlogout.php">Log out</a></button>

<div class="loginform">
	
		<form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off">
  	</div>

  	  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
  	</div>
 
 	 <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
  	</div>

  <input type="submit" name="submit" value="Add User">
</form>


</div>

</body>
</html>