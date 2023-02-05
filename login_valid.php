<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"project");
if(isset($_POST['login']))
{
    $Username=$_POST['Username'];
    $Password_C=$_POST['Password_C'];
    $sql = "SELECT * FROM clnt_reg WHERE Username='".$Username."' AND Password_C='".$Password_C."' limit 1";

   $result = mysqli_query($con,$sql);
   $user = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)==1)
    {
        echo "Login Done";
    }
    else
    {
        echo "Login Fail";
    }
}
?>