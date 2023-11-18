<?php
session_start();

include 'connection.php';
include 'functions.php';
$admin_data = check_admLogin($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
	<title>View</title>
</head>
<body>
<h1>Manage User Accounts</h1>

  <button > <a href="display.php">View Accounts</a></button>
 	<button > <a href="user.php">Add user</a></button>
 	<button > <a href="admlogout.php">Log out</a></button>

 	<table class="tableclass">

    <tr>
      <th width="10%">Id</th>
      <th width="15%">Name</th>
      <th width="35%">Email</th>
      <th width="5%">Password</th>
      <th></th>
      <th>Action</th>

    </tr>
 
    <?php

    $sql = "SELECT * FROM users2";
    $result= mysqli_query($conn,$sql);
   if ($result) {
   	// code...
   	while ($row=mysqli_fetch_assoc($result)) {
   		// code...
   		$id=$row['id'];
   		$name=$row['name'];
   		$email=$row['email'];
   		$password=$row['password'];
   		echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>;
      <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a> </button>
      </td>
      </tr>';

      

   	}

   }

    ?>

   


</body>
</html>