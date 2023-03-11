<?php
// require('demo_a.php');
$conn = mysqli_connect('localhost','root','','demo');

if(isset($_POST['add_product'])){


    $T_id=$_POST["T_id"];
    $Service_Id=$_POST["Service_Id"];
    $Service_date=$_POST["Service_date"];
    $Feedback=$_POST["Feedback"];
    $Cost=$_POST["Cost"];

   if(empty($F_name) || empty($L_name) || empty($Username) || empty($Address_1) || empty($Email)){
      $message[] = 'please fill out all';
   }else{
    $query = " INSERT INTO `clnt`(`T_id`, `Service_Id`, `Service_date`, `Feedback`, `Cost`) VALUES 
    ('$T_id','$Service_Id','$Service_date','$Feedback','$Cost')";  
      $result = mysqli_query($conn,$query);
      if($result==TRUE){
         // move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'register successfully';
      }else{
         $message[] = 'registration could not be done';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM clnt WHERE id = $id");
   header('location:clnt_acka.php');
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

   $select = mysqli_query($conn, "SELECT * FROM clnt ");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>                          <th> Sr no </th>
                                        <th> T_id  </th>
                                        <th> Service_Id  </th>
                                        <th> Service_date </th>
                                        <th> Feedback </th>
                                        <th> Cost </th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
                                          <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['T_id'];?></td>
                                            <td><?php echo $row['Service_Id'];?></td>
                                            <td><?php echo $row['Service_date'];?></td>
                                            <td><?php echo $row['Feedback'];?></td>
                                            <td><?php echo $row['Cost'];?></td>
            <td>
               <!-- <a href="admin_update.php?edit=<?php echo $row['Username']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a> -->
               <a href="clnt_acka.php?delete=<?php echo $row['id']; ?>" class="btn" name="delete"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>
</div>

</body>
</html>