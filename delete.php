<?php

include 'connection.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="DELETE FROM users2 WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Deleted succesfully";
		header('location:display.php');
	}else{
		die(mysqli_error($conn));
	}
}



?>