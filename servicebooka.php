<?php 
require("panel_new.php");
?>
<?php
$conn = mysqli_connect('localhost','root','','demo');


if(isset($_POST['add_product'])){


    $U_name=$_POST["U_name"];
    $Confirm_Address=$_POST["Confirm_Address"];
    $Issue_text=$_POST["Issue_text"];
    $dt_book=$_POST["dt_book"];

   if(empty($F_name) || empty($L_name) || empty($Username) || empty($Address_1) || empty($Email)){
      $message[] = 'please fill out all';
   }else{
    $query = " INSERT INTO `service_book`(`U_name`, `Confirm_Address`, `Issue_text`, `dt_book`) VALUES ('$U_name','$Confirm_Address','$Issue_text','$dt_book')";
  
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
    mysqli_query($conn, "DELETE FROM service_book WHERE id = $id");
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

   $select = mysqli_query($conn, "SELECT * FROM service_book ");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
                                        <th> User Name  </th>
                                        <th> Confirm Address </th>
                                        <th> Product issue </th>
                                        <th> Booking Date  </th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <!-- <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td> -->
            <!-- <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td><?php echo $row['quantity']; ?></td> -->
                                            <td><?php echo $row['U_name'];?> &nbsp; </td>
                                            <td><?php echo $row['Confirm_Address'];?> &nbsp;</td>
                                            <td><?php echo $row['Issue_text'];?> &nbsp; </td>
                                            <td><?php echo $row['dt_book'];?> &nbsp; </td>
            <td>
               <!-- <a href="admin_update.php?edit=<?php echo $row['Username']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a> -->
               <a href="servicebooka.php?delete=<?php echo $row['id']; ?>" class="btn"  onclick="return confirm('Are you sure you want to Delete');"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>
</div>

</body>
</html>