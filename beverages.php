<?php 
session_start();

	$conn = mysqli_connect("localhost", "root", "", "group_project"); 
	if (isset($_POST["add_to_cart"])) {
	 	// code...
	 	if (isset($_SESSION['shopping_cart'])) {
	 		// code...
	 		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
	 		if (!in_array($_GET["id"], $item_array_id)) {
	 			// code...
	 			$count = count($_SESSION["shopping_cart"]);
	 			$item_array = array(
	 			'item_id'	=>	$_GET["id"],
	 			'item_name'	=>	$_POST["hidden_name"],
	 			'item_price'	=>	$_POST["hidden_price"],
	 			'item_quantity'	=>	$_POST["quantity"]
	 		);
	 			$_SESSION["shopping_cart"][$count] = $item_array;
	 		}
	 		else{
	 			echo '<script>alert("Item already added")</script>';
	 			echo'<script>window.location="beverages.php"</script>';
	 		}

	 	}else{
	 		$item_array = array(
	 			'item_id'	=>	$_GET["id"],
	 			'item_name'	=>	$_POST["hidden_name"],
	 			'item_price'	=>	$_POST["hidden_price"],
	 			'item_quantity'	=>	$_POST["quantity"]
	 		);

	 		$_SESSION['shopping_cart'][0] = $item_array;
	 	}
	 } 

if(isset($_GET["action"])){

	if($_GET["action"] == "delete"){

		foreach($_SESSION["shopping_cart"] as $keys => $values){

			if($values["item_id"] == $_GET["id"]){
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item removed")</script>';
				echo '<script>window.location="beverages.php"</script>';
			}
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 
	
         <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->
            <link rel="stylesheet" type="text/css" href="style.css">
           <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
          
      </head>  
	<title>Snacks</title>
</head>
<body>
<div><h1>Kula Chap Chap</h1>
<nav class="nb">
		<ul class="ul">
			<li><a href="index.php">Home</a></li>
			<li><a href="snacks.php">Snacks</a></li>		
			<li><a href="beverages.php">Beverages</a></li>
			<li><a href="food.html">Food</a></li>
			<li class="right"><a href="logout.php">Log Out</a></li>
			
		</ul>
	</nav>
	</div>


	<h2>Beverage Menu</h2>

<div class="container">

	<div class="item">
	<?php 
	$query = "SELECT * FROM snacks WHERE id = 8";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// code...
		while ($row = mysqli_fetch_array($result)) {
			// code...
			?>
			
				
				<form method="post" action="snacks.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<img src="water.jpg">
					
					<br><caption class="caption">Water <br>30/= </caption>
					<div>
						<input type="number" name="quantity" class="form-control" value="0">
					</div>
										
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					<input type="submit" name="add_to_cart" value="add to cart" class="submit">
				

					
				</form>
			
			



			<?php

		}
	}
	 ?>
</div>




	<div class="item">
	<?php 
	$query = "SELECT * FROM snacks WHERE id = 9";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// code...
		while ($row = mysqli_fetch_array($result)) {
			// code...
			?>
			
				<form method="post" action="snacks.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<img src="juice.webp">
					
					<br><caption>Juice <br>50/= </caption>
					<div>
						<input type="number" name="quantity" class="form-control" value="0">
					</div>
					
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					<input type="submit" name="add_to_cart" value="add to cart" class="submit">
				

					
				</form>
		
	



			<?php

		}
	}
	 ?>
	 </div>		


	 	<div class="item">
	<?php 
	$query = "SELECT * FROM snacks WHERE id = 10";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// code...
		while ($row = mysqli_fetch_array($result)) {
			// code...
			?>
			
				<form method="post" action="snacks.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<img src="softdrink.webp">
					
					<br><caption>Soft Drink <br>100/= </caption>
					<div>
						<input type="number" name="quantity" class="form-control" value="0">
					</div>
					
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					<input type="submit" name="add_to_cart" value="add to cart" class="submit">
				

					
				</form>
		
	



			<?php

		}
	}
	 ?>
	 </div>	



	 	<div class="item">
	<?php 
	$query = "SELECT * FROM snacks WHERE id = 11";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// code...
		while ($row = mysqli_fetch_array($result)) {
			// code...
			?>
			
				<form method="post" action="snacks.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<img src="yoghurt.webp">
					
					<br><caption>Yoghurt <br>150/= </caption>
					<div>
						<input type="number" name="quantity" class="form-control" value="0">
					</div>
					
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					<input type="submit" name="add_to_cart" value="add to cart" class="submit">
				

					
				</form>
		
	



			<?php

		}
	}
	 ?>
	 </div>	




	 	<div class="item">
	<?php 
	$query = "SELECT * FROM snacks WHERE id = 12";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// code...
		while ($row = mysqli_fetch_array($result)) {
			// code...
			?>
			
				<form method="post" action="snacks.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<img src="milkshake.jpg">
					
					<br><caption>Milkshake <br>200/= </caption>
					<div>
						<input type="number" name="quantity" class="form-control" value="0">
					</div>
					
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					<input type="submit" name="add_to_cart" value="add to cart" class="submit">
				

					
				</form>
		
	



			<?php

		}
	}
	 ?>
	 </div>	





	 	<div class="item">
	<?php 
	$query = "SELECT * FROM snacks WHERE id = 13";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// code...
		while ($row = mysqli_fetch_array($result)) {
			// code...
			?>
			
				<form method="post" action="snacks.php?action=add&id=<?php echo $row["id"]; ?>">
					
					<img src="smoothie.jpg">
					
					<br><caption>Smoothie <br>120/= </caption>
					<div>
						<input type="number" name="quantity" class="form-control" value="0">
					</div>
					
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					<input type="submit" name="add_to_cart" value="add to cart" class="submit">
				

					
				</form>
		
	



			<?php

		}
	}
	 ?>
	 </div>	





</div>

	 <div style="clear: both;"></div>
	 <br>
	 <h3>Order details</h3>
	 <div class="table-responsive">
	 	<table class="table-bordered">
	 		<tr>
	 			<th width="40%">Item Name</th>
	 			<th width="10%">Quantity</th>
	 			<th width="20%">Price</th>
	 			<th width="15%">Total</th>
	 			<th width="5%">Action</th>
	 		</tr>
	 		<?php
	 		if(!empty($_SESSION["shopping_cart"])){

	 			$total = 0;
	 			foreach ($_SESSION["shopping_cart"] as $keys => $values) {
	 				// code...

	 				?>
	 				<tr>
	 					<td><?php echo $values["item_name"]; ?></td>
	 					<td><?php echo $values["item_quantity"]; ?></td>
	 					<td>$ <?php echo $values["item_price"]; ?></td>
	 					<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
	 					<td><a href="snacks.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a> </td>
	 				</tr>
	 				<?php
	 					$total = $total + ($values["item_quantity"] * $values["item_price"]);
	 			}
	 			?>
	 			<tr>
	 				<td colspan="3" align="right">Total</td>
	 				<td align="right">$ <?php echo number_format($total, 2); ?></td>
	 			</tr>
	 			<?php
	 		}
	 		?>
	 	</table>
</div>




</body>
</html>