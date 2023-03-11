<?php
// require('demo_a.php');
$conn = mysqli_connect('localhost','root','','demo');


if(isset($_POST['register'])){


         $F_name=$_POST["F_name"];
         $L_name=$_POST["L_name"];
         $Username=$_POST["Username"];
         $Address_1=$_POST["Address_1"];
         $
         $Email=$_POST["Email"];
         $Gender=$_POST["Gender"];
         $Phn_no=$_POST["Phn_no"];
         $register = $_POST["register"];

      if(empty($F_name) || empty($L_name) || empty($Username) || empty($Address_1) || empty($Email)){
         $message[] = 'please fill out all';
      }else{
      $query = "INSERT INTO clnt_reg (`F_name`, `L_name`, `Username`, `Address_1`, `Email`, `Password`, `Gender`, `Phn_no`) VALUES ('$F_name',
      '$L_name','$Username','$Address_1','$Email','$Password','$Gender','$Phn_no')";      
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
   mysqli_query($conn, "DELETE FROM clnt_reg WHERE id = $id");
   header('location:clnta.php');
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
   <link rel="stylesheet" href="stylepn.css">

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

   $select = mysqli_query($conn, "SELECT * FROM clnt_reg");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Sr. no</th>
            <th>L_name</th>
            <th>F_name</th>
            <th>Username</th>
            <th>Address</th>
            <th>E_mail</th>
            <th>Gender</th>
            <th>Contact number</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <!-- <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td> -->
            <!-- <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td><?php echo $row['quantity']; ?></td> -->
            
                                          <td><?php echo $row['id'];?> &nbsp; </td>
                                          <td><?php echo $row['F_name'];?></td>
                                          <td><?php echo $row['L_name'];?></td>
                                            <td><?php echo $row['Username'];?></td>
                                            <td><?php echo $row['Address_1'];?></td>
                                            <td><?php echo $row['Email'];?></td>
                                            <td><?php echo $row['Gender'];?></td>
                                            <td><?php echo $row['Phn_no'];?></td>
            <td>
               <!-- <a href="admin_update.php?edit=<?php echo $row['Username']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a> -->
               <a href="clnta.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>