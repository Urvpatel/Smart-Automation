<?php 
require("panel_new.php");
?>
<?php

$conn = mysqli_connect('localhost','root','','demo');


if(isset($_POST['add_client'])){

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
      $insert = "INSERT INTO client(firstname, lastname, username, address,email,password,phone,gender) VALUES('$client_fname', '$client_lname', '$usrnme', '$addr','$eml','$pswd','$clnt_phone','$gender')";
      $upload = mysqli_query($conn,$insert);
     
      if($upload==true){
        
         $message[] = 'new Client added successfully';
      }else{
         
         $message[] = 'could not add the Client';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM client WHERE id = $id");
   header('location:client_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>client page</title>

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

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new Client</h3>
        
					
         <input type="text" id="username" placeholder="enter client First Name" name="client_fname" class="box">
         <input type="text" id="username" placeholder="enter client Last Name" name="client_lname" class="box">
         <input type="text" id="username" placeholder="enter client Username" name="usrnme" class="box">
         <input type="text" id="username" placeholder="Address" name="addr" class="box">
         <input type="email" id="username" placeholder="Email" name="eml" class="box">
         Male<input type="radio" name="gender" id="malerd" value="Male"required class="box">
         Female<input type="radio" name="gender" id="malerd" value="Female"required class="box">
         <input type="text" id="username" placeholder="Password" name="pswd" class="box">
         <input type="text" placeholder="Enter Your Phone Number" pattern="[0-9]{1}[0-9]{9}" title="Please enter 10 digit phone number"name="clnt_phone" id="contact-phone" onkeyup="validatePhone()" class="box">
         <span id="phone-error"></span>
        
         
         
         
         <input type="submit" class="btn" name="add_client" value="Add Client">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM client");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>First Name</th>
            <th>Last name</th>
            <th>Username</th>
            <th>address</th>
            <th>email</th>
            <th>password</th>
            <th>phone number</th>
            <th>gender</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
           
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            
            <td>
               <a href="client_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="client_page.php?delete=<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure you want to delete');"> <i class="fas fa-trash"></i> delete </a>
            
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>