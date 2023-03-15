<?php

$Username=$_POST["Username"];
$Password=$_POST["Password"];


session_start();
if(isset($_SESSION['Username']))
{
    echo "<h1>hello</h1>";
    // echo"<a href='demo_a.php'></a>";
    ?>
    <script>
    window.location.href='home_c.php'
    </script>;
    <?php
    echo"<a href='Logout.php'>Logout</a>";
}
else
{
    if($_POST['Username']==$Username && $_POST['Password']==$Password)
    {
        $_SESSION['Username']=$Username;

        echo "<script>location.href='demo_a.php'</script><br>";
        echo"<a href='Logout.php'>Logout</a>";
    }
    else
    {
        echo "<script>alert('username or password invalid')</script>";
        echo "<script>location.href='login.html'</script>";
    }
}
?>