<?php

session_start();
 
if(isset($_SESSION['Username']))
{
    session_destroy();
    echo "<script>location.href='login.html'</script>";
}
else{
    echo "<script>location.href='login.html'</script>";

}
    // unset($_SESSION['USER_LOGIN']);
    // unset($_SESSION['Username']);
    // unset($_SESSION['Password']);
    // echo '<script>alert("Logged Out");
    // window.location.href="home_nav.php";
    // </script>';
    // die();
?>