<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		/*if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !is_numeric($fname) && !is_numeric($lname){*/
				//save to database
				$user_id = random_num(20);
				$sql = "INSERT INTO users(user_id,fname,lname,email,password) VALUES ('$user_id','$fname','$lname','$email','$password')";
				$result = mysqli_query($conn, $sql);

				if ($result) {
					// code...
					header("Location: login.php");
				}

				
				
		else{
			echo "Please enter the correct information!";
		}
	}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>sign up</title>
 </head>
 <body>
 	
 	<style type="text/css">
 		#text{
 			height: 25px;
 			border-radius: 5px;
 			padding: 4px;
 			border: solid thin #aaa;
 		}

 		#button{
 			padding: 10px;
 			width: 100px;
 			color: white;
 			background-color: lightblue;
 			border: none;
 		}

 		#box{
 			background-color: grey;
 			margin: auto;
 			width: 300px;
 			padding: 20px;
 		}
 	</style>

 	<div id="box">
 		
 		<form method="post">
 			<div style="font-size: 20px; margin: 10px; color: white;">Sign up</div>
 			<input id="text" type="text" name="fname" placeholder="firstname"><br><br>
 			<input id="text" type="text" name="lname" placeholder="lastname"><br><br>
 			<input id="text" type="email" name="email" placeholder="email"><br><br>
 			<input id="text" type="password" name="password" placeholder="password"><br><br>
 			<input id="text" type="password" name="cpassword" placeholder="confirm password"><br><br>
 			<input id="button" type="submit" name="sign up"><br><br>
 			<a href="login.php">login</a>
 		</form>

 	</div>
 </body>
 </html>