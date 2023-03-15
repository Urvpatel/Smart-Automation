<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM auto");
            
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
	<h1> <i> Automation Device </i></h1>
	</header>
    <main>
	<?php
					while($row = mysqli_fetch_assoc($slct)){
              ?>
		<section class="product">
		<img src="uploaded_img/<?php echo $row['image']; ?>" height="169" width="300" alt="Product 1" >
		<h2><?php echo $row["name"];?></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<form action="" method="post">
			<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" />
					</form>
		</section>
	<?php /*	<section class="auto">
			<img src="pro1.png" alt="Product 2"  height="474px" width="355px">
			<h2>Micro Controller</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

		<section class="auto">
			<img src="lighting.png" alt="Product 3"  height="474px" width="355px">
			<h2>Lighting Modules</S></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
			</section>

			<section class="auto">
				<img src="fc.jpeg" alt="Product 4"  height="474px" width="355px" >
				<h2>Fan controllers </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

				
			<section class="auto">
				<img src="cm.jpeg" alt="Product 5" height="474px" width="355px" >
				<h2>Curtain modules </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

				
			<section class="auto">
				<img src="os.jpeg" alt="Product 6"  height="400px" width="300px">
				<h2>Occupancy sensors</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

				
			<section class="auto">
				<img src="md.jpeg.crdownload" alt="Product 7" height="474px" width="355px">
				<h2>Motion Detectors</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

			
				<section class="auto">
					<img src="im.png" alt="Product 8" height="474px" width="355px">
					<h2>Interface Modules</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
					<button>Add to Cart</button>
					</section>	

					
			<section class="auto">
				<img src="ACIM.jpeg" alt="Product 9" height="474px" width="355px">
				<h2>AC Interface Modules</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>


				
			<section class="auto">
				<img src="ira.jpeg" alt="Product 10" height="400px" width="355px">
				<h2>IRA Meters</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section> */ 
				
            }
        ?>
	</main>
</body>
</html>
