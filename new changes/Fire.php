<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM fire");
            
            ?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
		<h1> <i> Fire Detection  </i></h1>
	</header>
	

	<main>
		

		<?php
		while($row = mysqli_fetch_assoc($slct)){
  ?>
<section class="product">
<img src="uploaded_img/<?php echo $row['image']; ?>" height="169" width="300"alt="Product 1">
<h2><?php echo $row["name"];?></h2>
			
			<p>Continuous Monitoring system, Alarm Unit with 85 dB Alarm Signal.Optical Wireless smoke detector/Sensor/ Fault Signal warning</p>
			<button>Add to Cart</button>
		</section>

    <?php /*   <section class="product">
			<img src="sd.jpeg" alt="Product 2" height="500" width="390">
			<h2>Smoke Detectors</h2>
			<p>Notifies the occupant of any Fire emergency situation- Helps in evacuating the homes or office buildings</p>
			<button>Add to Cart</button>
		</section>

        <section class="product">
			<img src="hd.jpeg" alt="Product 2" height="500" width="390">
			<h2>Heat Detectors</h2>
			<p>heat detector is a fire alarm device designed to respond when the convected thermal energy of a fire increases the temperature of a heat sensitive element.</p>
			<button>Add to Cart</button>
		</section>


        <section class="product">
			<img src="fh.jpeg" alt="Product 2" height="500" width="390">
			<h2>Fire Hydrant </h2>
			<p>Material :-Single Landing Valve Hydrant valve (Stainless Steel)Class A and Blank cap material made of PVC Plastic</p>
			<button>Add to Cart</button>
		</section>

        <section class="product">
			<img src="fe.jpeg" alt="Product 2" height="500" width="390">
			<h2>Fire Extinguisher</h2>
			<p>Heavy duty fire extinguisher is ideal for home offices and small businesses, and fights wood, fabric, paper, flammable liquid, and electrical fires</p>
			<button>Add to Cart</button>
		</section>
*/

		}
		?>
        

        
		
	</main>
</body>
</html>
