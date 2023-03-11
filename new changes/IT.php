<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM it");
            
            ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="productA.css">
</head>
<body>
	<header>
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
			<button>Add to Cart</button>
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
