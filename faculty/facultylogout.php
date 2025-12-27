<?php
session_start();
if(isset($_SESSION["faculty"]))
{
    session_destroy();
    $_SESSION["faculty"] = "";
    header('location:facultyloginpage.php');
}
else
{
    header('location:facultyloginpage.php');
}

?>