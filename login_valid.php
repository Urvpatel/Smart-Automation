<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"demo");
if(isset($_POST['login']))
{
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $sql = "SELECT * FROM clnt_reg WHERE Username='".$Username."' AND Password='".$Password."' limit 1";

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