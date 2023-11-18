<?php 

function check_login($conn){

	if (isset($_SESSION['id'])) {
		// code...

		$id = $_SESSION['id'];
		$query = "SELECT * FROM users2 WHERE id = '$id' limit 1";
		$result = mysqli_query($conn,$query);
		if ($result && mysqli_num_rows($result) > 0) {
			// code...
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
header("Location: login.php");
die;

	
}

function check_admLogin($conn){

	if (isset($_SESSION['id'])) {
		// code...

		$id = $_SESSION['id'];
		$query = "SELECT * FROM admin WHERE id = '$id'";
		$result = mysqli_query($conn,$query);
		if ($result && mysqli_num_rows($result) > 0) {
			// code...
			$admin_data = mysqli_fetch_assoc($result);
			return $admin_data;
		}
	}

	//redirect to login
header("Location: adminlogin.php");
die;

	
}


