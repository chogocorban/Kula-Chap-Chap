<?php 
//session_start();

	include 'connection.php';
	
	//$user_data = check_login($conn);

	if (isset($_POST['submit'])) {
		// code...
		$name=$_POST['name'] ;
		$email=$_POST['email']; 
		$password= $_POST['password'];

		$sql= "INSERT INTO users2(name,email,password) VALUES('$name','$email','$password')";
		$result= mysqli_query($conn,$sql);
		if ($result) {
			// code...
			echo "Data inserted succesfully";
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title></title>
</head>
<body>

<div class="content">
	
		<form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  	</div>

  	  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  	</div>
 
 	 <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  	</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


</div>

</body>
</html>