
<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM audio");
            
            ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
		<h1> <i> AUDIO VISUALS </i></h1>
	</header>
	

	<main>
	<?php
					while($row = mysqli_fetch_assoc($slct)){
              ?>
		<section class="product">
		<img src="uploaded_img/<?php echo $row['image']; ?>" height="169" width="300"alt="Product 1">
		<h2><?php echo $row["name"];?></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>
		<?php
		/*
		<section class="product">
			<img src="pro.jpeg" alt="Product 2">
			<h2>Projectors</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

		<section class="product">
			<img src="SC.jpeg" alt="Product 3">
			<h2>Sound Bar</S></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
			</section>

			<section class="product">
				<img src="ht1.jpeg" alt="Product 4">
				<h2>Home Theatre System</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

				
			<section class="product">
				<img src="pas.jpeg" alt="Product 5">
				<h2>Public Address System </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>
				*/	
            }
        ?>
	</main>
</body>
</html>
