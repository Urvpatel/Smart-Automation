<?php
$F_name=$_POST["F_name"];
$L_name=$_POST["L_name"];
$Username=$_POST["Username"];
$Address_1=$_POST["Address_1"];
$Email=$_POST["Email"];
$Password=$_POST["Password"];
$Gender=$_POST["Gender"];
$Phn_no=$_POST["Phn_no"];


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'demo');
$query= "INSERT INTO clnt_reg (`F_name`, `L_name`, `Username`, `Address_1`, `Email`, `Password`, `Gender`, `Phn_no`) VALUES ('$F_name',
'$L_name','$Username','$Address_1','$Email','$Password','$Gender','$Phn_no')";
$result= mysqli_query($con,$query);
if ($result==TRUE)
{
    echo "successful";
}
else
{
    echo "Error";
}
?>