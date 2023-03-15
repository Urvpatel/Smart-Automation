<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM acescont");
            ?>


<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
		<h1> <i> ACCESS CONTROLS </i></h1>
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
	<!--	<section class="product">
			<img src="fds.jpeg" alt="Product 2" height="475" width="350">
			<h2>Face Detection System</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

		<section class="product">
        <img src="c.jpeg" alt="Product 3" height="475" width="350" >
			<h2>Card</S></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
			</section> -->
					
			<?php
			}
			?>
	</main>
</body>
</html>
