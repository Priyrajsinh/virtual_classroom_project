<?php
include "include/connection.php";
$lid=$_GET['lid'];
$status=2;
$cmd="update leavenote set status='$status' where lid='$lid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Leave Request Rejected Successfuly');</script>";
		echo "<script>location.href='viewLeave.php';</script>";
    }
    else
    {
        echo "<script>alert('Error while rejecting');</script>";
		echo "<script>location.href='viewLeave.php';</script>";
    }
?>