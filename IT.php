<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM it");
            
            if(isset($_POST['add_to_cart'])){

				$hidden_name = $_POST['hidden_name'];
				$hidden_price = $_POST['hidden_price'];
				$hidden_img = $_POST['hidden_img'];
				$product_quantity = 1;
			 
				$select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$hidden_name'");
			 
				if(mysqli_num_rows($select_cart) > 0){
					echo '<script>alert("Product already in the cart")</script>';
				   $message[] = 'product already added to cart';
				}else{
				   $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$hidden_name', '$hidden_price', '$hidden_img', '$product_quantity')");
				   $message[] = 'product added to cart succesfully';
				}
			 
			 }
			 
			 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
	<?php include 'header1.php'; ?>
		<h1> <i> Intrusion Detection Systems</i></h1>
	</header>
	

	<main>

	<?php
		while($row = mysqli_fetch_assoc($slct)){
  ?>
<section class="product">
<img src="uploaded_img/<?php echo $row['image']; ?>" height="169" width="300"alt="Product 1">
<h2><?php echo $row["name"];?></h2>
			<p>An intrusion detection system (IDS) is an application that monitors network traffic and searches for known threats and suspicious or malicious activity. The IDS sends alerts to IT and security teams when it detects any security risks and threats.</p>
			
			<form action="" method="post">
			<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" />
					</form>
			</section>

		<?php	/*		<section class="product">
				<img src="idp.jpeg" alt="Product 4">
				<h2>Intrusion Alarm Panels</h2>
				<p>Intrusion alarms sometimes referred to as burglar alarms work with a network of motion detectors, door and window sensors integrated with a control panel. </p>
				<button>Add to Cart</button>
				</section>*/

		}
		?>
			
	</main>
</body>
</html>
