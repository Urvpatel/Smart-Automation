<?php
            $conn = mysqli_connect('localhost','root','','pure');
          
            $slct = mysqli_query($conn, "SELECT * FROM products");
            
            if(isset($_POST['add_to_cart'])){

				$hidden_name = $_POST['hidden_name'];
				$hidden_price = $_POST['hidden_price'];
				$hidden_img = $_POST['hidden_img'];
				$product_quantity = 1;
			 
				$select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$hidden_name'");
			 
				if(mysqli_num_rows($select_cart) > 0){
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
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<header>
		<h1> <i> PRODUCTS </i></h1>

	</header>
	
	<h2 class="blog-sidebar-title"></h2>
	<hr />

	<!-- <a href="auto.html" >Auto</a>
	<a href="AVI.html"><p class="blog-sidebar-list" ><b> <span class="list-icon"></span> Audio</b></p></a>
	<a href="Security.html"><p class="blog-sidebar-list"><b><span class="list-icon"></span> Security</b></p></a>
	<a href="Solar.html"><p class="blog-sidebar-list"><b><span class="list-icon"></span> Solar</b></p></a>
	<a href="AC.html"><p class="blog-sidebar-list"><b><span class="list-icon"></span> Access Control</b></p></a>
    
	<div>&nbsp;</div>
					<div>&nbsp;</div>
				 -->
<!-- <div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Recent Articles</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">Article</h3>
						<h3 class="t-op">Views</h3>
						<h3 class="t-op">Comments</h3>
						<h3 class="t-op">Status</h3>
					</div>

					<div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl">Article 73</h3>
							<h3 class="t-op-nextlvl">2.9k</h3>
							<h3 class="t-op-nextlvl">210</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 72</h3>
							<h3 class="t-op-nextlvl">1.5k</h3>
							<h3 class="t-op-nextlvl">360</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 71</h3>
							<h3 class="t-op-nextlvl">1.1k</h3>
							<h3 class="t-op-nextlvl">150</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 70</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">420</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 69</h3>
							<h3 class="t-op-nextlvl">2.6k</h3>
							<h3 class="t-op-nextlvl">190</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 68</h3>
							<h3 class="t-op-nextlvl">1.9k</h3>
							<h3 class="t-op-nextlvl">390</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 67</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">580</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 66</h3>
							<h3 class="t-op-nextlvl">3.6k</h3>
							<h3 class="t-op-nextlvl">160</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 65</h3>
							<h3 class="t-op-nextlvl">1.3k</h3>
							<h3 class="t-op-nextlvl">220</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

					</div> 
				</div>
				<!-END  <div class="col-lg-3 blog-form">-->

					<!-- <div class="box box1">
						<div class="text">
							<h2 class="topic-heading">60.5k</h2>
							<h2 class="topic">Article Views</h2>
						</div>
	
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
							alt="Views">
					</div>
	
					<div class="box box2">
						<div class="text">
							<h2 class="topic-heading">150</h2>
							<h2 class="topic">Likes</h2>
						</div>
	
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
					</div>
	
					<div class="box box3">
						<div class="text">
							<h2 class="topic-heading">320</h2>
							<h2 class="topic">Comments</h2>
						</div>
	
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
							alt="comments">
					</div>
	
					<div class="box box4">
						<div class="text">
							<h2 class="topic-heading">70</h2>
							<h2 class="topic">Published</h2>
						</div> -->
	<main>
		
	<div class="main">

<div class="box-container">

	 <div class="box box1">
		


		<div class="text">
		<a href="autoweb.php" class="topic"> <h1 > <i> Auto  </i>  </h1>
	</a> 
			
		</div>

		
	</div>

	<div class="box box2">
		<div class="text">
		<a href="Security.php" class="topic">  <h1> <i> Security </i> </h1> </a> 
			
		</div>


	</div>

	<div class="box box3">
		<div class="text">
		<a href="AVI.php" class="topic"> <h1> <i> Audio & Visuals </i> </h1> </a>
		</div>

		
	</div>

	<div class="box box4">
		<div class="text">
		<a href="AC.php" class="topic"><h1> <i> Access Control </i> </h1> </a>
		
			
		</div> 
	</div>

	<div class="box box5">
		<div class="text">
		<a href="Solar.php" class="topic"> <h1> <i> Solar </i> </h1>  </a>
		
			
		</div> 
	</div>

	<div class="box box6">
		<div class="text">
		<a href="Fire.php" class="topic"> <h1> <i> Fire </i> </h1>  </a>
		
			
		</div> 
	</div>

	<div class="box box7">
		<div class="text">
		<a href="IT.php" class="topic"><h1> <i> Intrusion Detection </i> </h1> </a>
		
			
		</div> 
	</div>
</div>
</div>
<?php
					while($row = mysqli_fetch_assoc($slct)){
              ?>
		<section class="product">
		<img src="uploaded_img/<?php echo $row['image']; ?>" alt="Product 1">
			<h2><?php echo $row["name"];?></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<form action="" method="post">
			<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" />
					</form>
		</section>
	<?php /*	<section class="product">
			<img src="bio1.jpeg" alt="Product 2">
			<h2>Fingerprint aunthentication Device</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
		</section>

		<section class="product">
			<img src="solar.jpeg" alt="Product 3">
			<h2>Solar Panels</S></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
			<button>Add to Cart</button>
			</section>

			<section class="product">
				<img src="ht.jpeg" alt="Product 4">
				<h2>Audio And Visual</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

				
			<section class="product">
				<img src="fd.jpeg" alt="Product 5">
				<h2>Fire Detection System </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section>

				
			<section class="product">
				<img src="door.jpeg" alt="Product 6">
				<h2>Video Door Phone</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet euismod elit a lacinia.</p>
				<button>Add to Cart</button>
				</section> */ ?>
				<?php
            }
        ?>
		<a class="scroll-to-top rounded" href="#page-top">
				<span class="fa fa-angle-up"><br>TOP</span>
			</a>
	</main>
</body>
</html>
