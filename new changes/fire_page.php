

<?php

$conn = mysqli_connect('localhost','root','','pure');


if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_quantity=$_POST['product_quantity'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_quantity)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO fire(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM fire WHERE id = $id");
   header('location:fire_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin.css">
   <script src="p.js"></script>

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form id="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <select id="myList" class="box">
									<option value="">Add Products</option>
									<option value="admin_page.php">Add Product To Home Page </option>
									<option value="auto_page.php">Auto Products</option>
									<option value="audio_page.php">Audio Products</option>
									<option value="solar_page.php">Solar Products</option>
									<option value="security_page.php">Security Products</option>
									<option value="AC_page.php">Access Controls Products</option>
                           <option value="fire_page.php">Fire Detection Products</option>
                           <option value="IT_page.php">Intrusion Detection Products</option>
								  </select>
								  <script>
								 function redirectToSelectedPage() {
									var selectedValue = document.getElementById("myList").value;
									window.location.href = selectedValue;
								  }
								  document.getElementById("myList").addEventListener("change", redirectToSelectedPage);
								  </script>
         <input type="text" id="username" placeholder="enter product name" name="product_name" class="box">
         <input type="number" min="1" placeholder="enter product price" name="product_price" onkeyup="validNumber(this.value)" class="box">
         <input type="number" min="1" max="1000" placeholder="enter quantity" name="product_quantity" class="box">
         <input type="file" id="file"  onchange="return fileValidation()" name="product_image" class="box">
         
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM fire");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th>Quantity</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?> Rs/-</td>
            <td><?php echo $row['quantity']; ?></td>
            <td>
               <a href="fire_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="fire_page.php?delete=<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure you want to delete');"> <i class="fas fa-trash"></i> delete </a>
            
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>