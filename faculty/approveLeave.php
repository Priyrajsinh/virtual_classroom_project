<?php
include "include/connection.php";
$lid=$_GET['lid'];
$status=1;
$cmd="update leavenote set status='$status' where lid='$lid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Leave Request Approved Successfuly');</script>";
		echo "<script>location.href='viewLeave.php';</script>";
    }
    else
    {
        echo "<script>alert('Leave Request Not Approved');</script>";
		echo "<script>location.href='viewLeave.php';</script>";
    }
?>