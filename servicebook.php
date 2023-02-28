<?php
$U_name=$_POST["U_name"];
$Confirm_Address=$_POST["Confirm_Address"];
$Issue_text=$_POST["Issue_text"];
$dt_book=$_POST["dt_book"];



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'demo');
$query= " INSERT INTO `service_book`(`U_name`, `Confirm_Address`, `Issue_text`, `dt_book`) VALUES ('$U_name','$Confirm_Address','$Issue_text','$dt_book')";
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