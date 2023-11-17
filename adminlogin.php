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
 	<title>login</title>
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
 			<div style="font-size: 20px; margin: 10px; color: white;">Login</div>
 			<input id="text" type="text" name="name" placeholder="username"><br><br>
 			<input id="text" type="password" name="password" placeholder="password"><br><br>
 			<input id="button" type="submit" name="login"><br><br>
 			<a href="login.php">User login</a>
 		</form>

 	</div>
 </body>
 </html>