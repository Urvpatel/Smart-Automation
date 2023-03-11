<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM auto");
            
            ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
		<h1> <I> AUTOMATION DEVICES </I></h1>
	</header>
    <main>
	<?php
					while($row = mysqli_fetch_assoc($slct)){
              ?>
		<section class="product">
		<img src="uploaded_img/<?php echo $row['image']; ?>" height="169" width="300" alt="Product 1" >
		<h2><?php echo $row["name"];?></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
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
