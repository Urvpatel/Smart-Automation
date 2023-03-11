

<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM solar");
            
            ?>


<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
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
			<button>Add to Cart</button>
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
