<?php

include 'connection.php';


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>View</title>
</head>
<body>


 <div class="container">
 	<button class="btn btn-primary"> <a href="user.php" class="text-light">Add user</a></button>

 	<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
 

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
      <td>'.$password.'</td>';
      <td>
     <button><a href="">Update</a></button>
    <button> <a href="">Delete</a> </button>
      </td>
      </tr>;'

      

   	}

   }

    ?>

    <td>
    <button> <a href="">Update</a></button>
    <button> <a href="">Delete</a> </button>
    </td>

  </tbody>
</table>
 	
 </div>
</body>
</html>