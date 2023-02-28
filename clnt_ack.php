<?php
$T_id=$_POST["T_id"];
$Service_Id=$_POST["Service_Id"];
$Service_date=$_POST["Service_date"];
$Feedback=$_POST["Feedback"];
$Cost=$_POST["Cost"];


$con = mysqli_connect('localhost','root',);
 mysqli_select_db($con,'demo');
$query= " INSERT INTO `clnt`(`T_id`, `Service_Id`, `Service_date`, `Feedback`, `Cost`) VALUES 
('T_id','$Service_Id','$Service_date','$Feedback','$Cost')";
$result= mysqli_query($con,$query);
if ($result===TRUE)
{
    echo "successful";
}
else{
    echo "Error";
}
?>