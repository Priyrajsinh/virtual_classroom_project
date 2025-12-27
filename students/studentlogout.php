<?php
session_start();
if(isset($_SESSION["student"]))
{
    session_destroy();
    $_SESSION["student"] = "";
    header('location:studentloginpage.php');
}
else
{
    header('location:studentloginpage.php');
}

?>