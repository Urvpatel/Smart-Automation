<?php
require("panel_new.php");
?>

<?php

$conn = mysqli_connect('localhost','root','','demo');


if(isset($_POST['add_product'])){
   $tec_id=$_POST['tec_id'];
   $product_name = $_POST['product_name'];
  
   $tec_add=$_POST['tec_add'];
   $tec_email=$_POST['tec_email'];
   
   $tec_phone=$_POST['tec_phone'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($tec_id) || empty($tec_add) || empty($tec_email) || empty($product_image) || empty($tec_phone)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO technician(id,name, address,email,phone, image) VALUES( '$tec_id','$product_name','$tec_add','$tec_email','$tec_phone','$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new Technician added successfully';
      }else{
         $message[] = 'could not add the Technician';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM technician WHERE id = $id");
   header('location:technician_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Technician page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="stylepn.css">
   <script src="p.js"></script>

   <title>SIGN UP</title>
<style>
    #phone-error{
         color: red;
         }
</style>

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

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new technician</h3>
         <input type="text" id="username" placeholder="Add Technician Name" name="product_name" class="box">
         <input type="text" id="username" placeholder="Add Technician Id" name="tec_id" class="box">
         <input type="text" id="username" placeholder="Add Technician Address" name="tec_add" class="box">
         <input type="email" placeholder="Add Technician Email" name="tec_email" class="box">
         
         <input type="number" placeholder="Enter Your Phone Number" name="tec_phone"class="box">
         
         
         <input type="file" id="file" placeholder="Proof"  onchange="return fileValidation()" name="product_image" class="box">
         
         <input type="submit" class="btn" name="add_product" value="add technician">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM technician");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Image</th>
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
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
               <a href="technician_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="technician_page.php?delete=<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure you want to delete');"> <i class="fas fa-trash"></i> delete </a>
            
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>