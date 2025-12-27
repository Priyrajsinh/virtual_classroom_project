<?php
session_start();
if(isset($_SESSION["username"]))
{
    session_destroy();
    $_SESSION["username"] = "";
    header('location:loginpage.php');
}
else
{
    header('location:loginpage.php');
}

?>