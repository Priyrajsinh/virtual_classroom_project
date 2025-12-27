<?php
session_start();
if(isset($_SESSION["admin"]))
{
    session_destroy();
    $_SESSION["admin"] = "";
    header('location:loginpage.php');
}
else
{
    header('location:loginpage.php');
}

?>