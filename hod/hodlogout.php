<?php
session_start();
if(isset($_SESSION["hod"]))
{
    session_destroy();
    $_SESSION["hod"] = "";
    header('location:hodloginpage.php');
}
else
{
    header('location:hodloginpage.php');
}

?>