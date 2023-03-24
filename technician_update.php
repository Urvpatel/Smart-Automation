<?php
$conn = mysqli_connect('localhost','root','','demo');


$id = $_GET['edit'];


if(isset($_POST['update_product'])){

    $product_name = $_POST['product_name'];
    $tec_id=$_POST['tec_id'];
    $tec_add=$_POST['tec_add'];
    $tec_email=$_POST['tec_email'];
    
    $tec_phone=$_POST['tec_phone'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;
 
    if(empty($product_name) || empty($tec_id) || empty($tec_add) || empty($tec_email) || empty($product_image) || empty($tec_phone)){
       $message[] = 'please fill out all';
    }else{
        $update_data = "UPDATE technician SET name='$product_name', id='$tec_id', image='$product_image',address='$tec_add',email='$tec_email',phone='$tec_phone' WHERE id = '$id'";
        $upload = mysqli_query($conn, $update_data);
        
        if($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            header('location:technician_page.php');
         }else{
            $$message[] = 'please fill out all!'; 
         }
   
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM technician WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update technician</h3>
      
         <input type="text" id="username" placeholder="Add Technician Name" name="product_name" class="box">
         <input type="text" id="username" placeholder="Add Technician Id" name="tec_id" class="box">
         <input type="text" id="username" placeholder="Add Technician Address" name="tec_add" class="box">
         <input type="email" placeholder="Add Technician Email" name="tec_email" class="box">
         
         <input type="number"  placeholder="Enter Your Phone Number" name="tec_phone" class="box">
         
         <input type="file" id="file" placeholder="Proof"  onchange="return fileValidation()" name="product_image" class="box">
      <input type="submit" value="update technician" name="update_product" class="btn">
      <a href="technician_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>