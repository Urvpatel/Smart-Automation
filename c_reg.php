<?php
    $F_Name_C=$_POST['F_Name_C'];
    $L_Name_C=$_POST['L_Name_C'];
    $Username=$_POST['Username'];
    $Address_C=$_POST['Address_C'];
    $Email_C=$_POST['Email_C'];
    $Password_C=$_POST['Password_C'];
    $Gender_C=$_POST['Gender_C'];
    $Cont_C=$_POST['Cont_C'];
    $con=mysqli_connect("localhost","root","");

    mysqli_select_db($con,'project');

    $sql="INSERT INTO clnt_reg(F_Name_C,L_Name_C,Username,Address_C,Email_C,Password_C,Gender_C,Cont_C)VALUES('$F_Name_C','$L_Name_C','$Username','$Address_C','$Email_C',
    '$Password_C','$Gender_C','$Cont_C')";

   $result=mysqli_query($con,$sql);
    if ($result==TRUE)
    {
        echo "done";
    }
    else
    {
        echo "not";
    }
?>
