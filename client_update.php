<?php

$conn = mysqli_connect('localhost','root','','demo');


$id = $_GET['edit'];

if(isset($_POST['update_client'])){

   $client_fname = $_POST['client_fname'];
   $client_lname = $_POST['client_lname'];
   $usrnme=$_POST['usrnme'];
   $addr=$_POST['addr'];
   $eml=$_POST['eml'];
   $pswd=$_POST['pswd'];
   $clnt_phone=$_POST['clnt_phone'];
  $gender=$_POST['gender'];

   if(empty($client_fname) || empty($client_lname) || empty($usrnme) || empty($addr) || empty($eml) || empty($pswd) || empty($gender) || empty($clnt_phone)){
      $message[] = 'please fill out all'; 
   }else{

      $update_data = "UPDATE client SET firstname='$client_fname', lastname='$client_lname', username='$usrnme', address='$addr', email='$eml', password='$pswd', phone='$clnt_phone',gender='$gender'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload==true){
         header('location:client_page.php');
      }else{
         $message[] = 'please fill out all!'; 
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
   <link rel="stylesheet" href="stylepn.css">
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
      
      $select = mysqli_query($conn, "SELECT * FROM client WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" id="username" placeholder="enter client First Name" name="client_fname" class="box">
         <input type="text" id="username" placeholder="enter client Last Name" name="client_lname" class="box">
         <input type="text" id="username" placeholder="enter client Username" name="usrnme" class="box">
         <input type="text" id="username" placeholder="Address" name="addr" class="box">
         <input type="email" id="username" placeholder="Email" name="eml" class="box">
         Male<input type="radio" name="gender" id="malerd" value="Male"required class="box">
         Female<input type="radio" name="gender" id="malerd" value="Female"required class="box">
         <input type="text" id="username" placeholder="Password" name="pswd" class="box">
         <input type="text" placeholder="Enter Your Phone Number" pattern="[6-9]{1}[0-9]{9}" title="Please enter 10 digit phone number"name="clnt_phone" id="contact-phone" onkeyup="validatePhone()" class="box">
         <span id="phone-error"></span>
      <input type="submit" value="update client" name="update_client" onclick="return confirm('Are you sure you want to Update');" class="btn">
      <a href="client_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>