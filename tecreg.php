<?php
$T_id=$_POST["T_id"];
$name=$_POST["name"];
$T_Address=$_POST["T_Address"];
$T_email=$_POST["T_email"];
$T_password=$_POST["T_password"];
$cn_no=$_POST["cn_no"];
$T_proof=$_POST["T_proof"];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'demo');
$query= " INSERT INTO tech (`T_id`, `name`, `T_address`, `T_email`, `cn_no`, `password`, `T_proof`) VALUES ('$T_id','$name','$T_Address','$T_email','$cn_no',
'$T_password','$T_proof')";
$result= mysqli_query($con,$query);
if ($result==TRUE)
{
    echo "successful";
}
else{
    echo "Error";
}
?>