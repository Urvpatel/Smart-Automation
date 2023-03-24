
<?php
require("panel_new.php");
?>
<?php
// require('demo_a.php');
$conn = mysqli_connect('localhost','root','','demo');


if(isset($_POST['register'])){


    $T_id=$_POST["T_id"];
    $name=$_POST["name"];
    $T_Address=$_POST["T_Address"];
    $T_email=$_POST["T_email"];
    $T_password=$_POST["T_password"];
    $cn_no=$_POST["cn_no"];
    $T_proof=$_POST["T_proof"];
    $register = $_POST["register"];

      if(empty($F_name) || empty($L_name) || empty($Username) || empty($Address_1) || empty($Email)){
         $message[] = 'please fill out all';
      }else{
        $query= " INSERT INTO tech (`T_id`, `name`, `T_address`, `T_email`, `cn_no`, `password`, `T_proof`) VALUES ('$T_id','$name','$T_Address','$T_email','$cn_no',
        '$T_password','$T_proof')";   
      $result = mysqli_query($conn,$query);
      if($result==TRUE){
         // move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   

}
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM technician WHERE id = $id");
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

      <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box">
         <input type="number" placeholder="enter product price" name="product_price" class="box">
         <input type="number" placeholder="enter quantity" name="product_quantity" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form> -->

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM technician");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr> <th>Image</th>
            <th>Tec_Id</th>
            <th>Technician name</th>
            <th>Technician Address</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <!-- <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td> -->
            <!-- <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td><?php echo $row['quantity']; ?></td> -->
            
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
              
               <a href="tech_a.php?delete=<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure you want to delete');"> <i class="fas fa-trash"></i> delete </a>
            
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>