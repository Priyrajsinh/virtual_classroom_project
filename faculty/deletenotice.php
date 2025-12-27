<?php
include "include/connection.php";
$nid=$_GET['nid'];
$cmd="delete from add_notice where nid='$nid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
        if($result)
        {
            echo "<script>alert('Notice Deleted Successfuly');</script>";
            echo "<script>location.href='viewnotice.php';</script>";
        }
        else
        {
            echo "<script>alert('Notice is Not Deleted');</script>";
            echo "<script>location.href='viewnotice.php';</script>";
        }


?>