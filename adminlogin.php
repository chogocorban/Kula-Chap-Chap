<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$password = $_POST['password'];

		/*if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !is_numeric($fname) && !is_numeric($lname){*/
				//read from database
				
				$sql = "SELECT * FROM admin WHERE name = '$name' LIMIT 1";
				$result = mysqli_query($conn, $sql);

				if ($result) {
					if ($result && mysqli_num_rows($result) > 0) {
			// code...
						$user_data = mysqli_fetch_assoc($result);
						
						if($user_data['password'] === $password){
							$_SESSION['id'] = $user_data['id'];
							header("Location: display.php");
							die;
						}
					}
				}
				echo "Wrong email or password!";		
				
	}



 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
 	<title>login</title>
 </head>
 <body>
<h1>Kula Chap Chap</h1> 
 	<div class="loginform">
 		
 		<form method="post">
 			<div style="font-size: 20px; margin: 10px; color: white;">Login</div>
 			<input id="text" type="text" name="name" placeholder="Username"><br><br>
 			<input id="text" type="password" name="password" placeholder="Password"><br><br>
 			<input id="button" type="submit" name="login" value="Log In"><br><br>
 			<p>Are you a normal user? Log in <a href="login.php">Here</a></p>   
 		</form>

 	</div>
 </body>
 </html>