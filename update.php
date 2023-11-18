<?php 
session_start();
include 'connection.php';
include'functions.php';
$admin_data = check_admLogin($conn);

	
	$id=$_GET['updateid'];
	$sql="SELECT * FROM users2 WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
	//$user_data = check_login($conn);

	if (isset($_POST['submit'])) {
		// code...
		$name=$_POST['name'] ;
		$email=$_POST['email']; 
		$password= $_POST['password'];

		$sql= "UPDATE users2 SET id=$id,name='$name',email='$email',password='$password' WHERE id=$id";
		$result= mysqli_query($conn,$sql);
		if ($result) {
			// code...
			//echo "Data updated succesfully";
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
	<title>Update User Account</title>
</head>
<body>
<h1>Update User Profile</h1>
 <button > <a href="display.php">View Accounts</a></button>
 	<button > <a href="user.php">Add user</a></button>
 	<button > <a href="admlogout.php">Log out</a></button>
	
<div class="loginform">

		<form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?> >
  	</div>

  	  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?> >
  	</div>
 
 	 <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?> >
  	</div>

  <input type="submit" name="submit" value="Update Profile">
</form>


</div>

</body>
</html>