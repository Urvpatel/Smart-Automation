<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM security");
            
            ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
		<h1> <i> SECURITY </i></h1>
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
		<!-- <section class="product">
			<img src="vdp.jpeg" alt="Product 2" height="470" width="355">
			<h2>Video Door Phones</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

		<section class="product">
			<img src="ias.jpeg" alt="Product 3" height="470" width="355">
			<h2>Intrusiom Alarm System</S></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
			</section>

			<section class="product">
				<img src="idp.jpeg" alt="Product 4">
				<h2>Intrusion Alarm Panels</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section> -->

				<?php
        
	}
        ?>	
			
	</main>
</body>
</html>
