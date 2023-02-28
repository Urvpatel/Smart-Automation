<?php
session_start();
if(session_destroy())
{
    header("location:demo2.php");
}
?>