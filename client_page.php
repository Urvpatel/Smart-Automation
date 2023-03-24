<?php 
require("panel_new.php");
?>
<?php

$conn = mysqli_connect('localhost','root','','demo');


if(isset($_POST['add_client'])){

   $F_name = $_POST['F_name'];
   $L_name = $_POST['L_name'];
   $Username=$_POST['Username'];
   $Address_1=$_POST['Address_1'];
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];
   $Phn_no=$_POST['Phn_no'];
  $Gender=$_POST['Gender'];

   if(empty($F_name) || empty($L_name) || empty($Username) || empty($Address_1) || empty($Email) || empty($Password) || empty($Gender) || empty($Phn_no)){
      $message[] = 'please fill out all';

   }else{
      // $insert = "INSERT INTO client(firstname, lastname, username, address,email,password,phone,gender) VALUES('$client_fname', '$client_lname', '$usrnme', '$addr','$eml','$pswd','$clnt_phone','$gender')";
      $query= "INSERT INTO clnt_reg (`F_name`, `L_name`, `Username`, `Address_1`, `Email`, `Password`, `Gender`, `Phn_no`) VALUES ('$F_name',
'$L_name','$Username','$Address_1','$Email','$Password','$Gender','$Phn_no')";
      $upload = mysqli_query($conn,$query);
     
      if($upload==true){
        
         $message[] = 'new Client added successfully';
      }else{
         
         $message[] = 'could not add the Client';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM clnt_reg WHERE id = $id");
  
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
        
					
         <input type="text" id="username" placeholder="enter client First Name" name="F_name" class="box">
         <input type="text" id="username" placeholder="enter client Last Name" name="L_name" class="box">
         <input type="text" id="username" placeholder="enter client Username" name="Username" class="box">
         <input type="text" id="username" placeholder="Address" name="Address_1" class="box">
         <input type="email" id="username" placeholder="Email" name="Email" class="box">
         Male<input type="radio" name="Gender" id="malerd" value="Male"required class="box">
         Female<input type="radio" name="Gender" id="malerd" value="Female"required class="box">
         <input type="text" id="username" placeholder="Password" name="Password" class="box">
         <input type="text" placeholder="Enter Your Phone Number" pattern="[0-9]{1}[0-9]{9}" title="Please enter 10 digit phone number"name="Phn_no" id="contact-phone" onkeyup="validatePhone()" class="box">
         <span id="phone-error"></span>
        
         
         
         
         <input type="submit" class="btn" name="add_client" value="Add Client">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM clnt_reg");
   
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
           
            <td><?php echo $row['F_name']; ?></td>
            <td><?php echo $row['L_name']; ?></td>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['Address_1']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Password']; ?></td>
            <td><?php echo $row['Phn_no']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            
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