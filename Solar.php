

<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM solar");
            
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
		<h1> <i> Solar </i></h1>
	</header>
	

	<main>
	<?php
					while($row = mysqli_fetch_assoc($slct)){
              ?>
		<section class="product">
			<img src="uploaded_img/<?php echo $row['image']; ?>" height="169" width="300"alt="Product 1">
		<h2><?php echo $row["name"];?></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			
			<form action="" method="post">
			<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" />
					</form>
		</section>
	<!--	<section class="product">
			<img src="si.jpeg" alt="Product 2" height="500" width="390">
			<h2>Solar Inverter</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

        <section class="product">
			<img src="fap.jpeg" alt="Product 2" height="500" width="390">
			<h2>Fire Detection Panels</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

        <section class="product">
			<img src="sd.jpeg" alt="Product 2" height="500" width="390">
			<h2>Smoke Detectors</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

        <section class="product">
			<img src="hd.jpeg" alt="Product 2" height="500" width="390">
			<h2>Heat Detectors</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>


        <section class="product">
			<img src="fh.jpeg" alt="Product 2" height="500" width="390">
			<h2>Fire Hydrant </h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

        <section class="product">
			<img src="fe.jpeg" alt="Product 2" height="500" width="390">
			<h2>Fire Extinguisher</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section> -->
<?php
        
	}
        ?>
        
		
	</main>
</body>
</html>
