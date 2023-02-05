<?php
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $con=mysqli_connect("localhost","root","");

    mysqli_select_db($con,'urv_093');

   $sql= ("INSERT INTO log(Username, Password) VALUES ('[$Username]','[$Password]')");

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