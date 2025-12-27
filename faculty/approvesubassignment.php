<?php
include "include/connection.php";
$aid=$_GET['aid'];
$status=1;
$cmd="update assignmentsubmitted set status='$status' where aid='$aid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Submitted Assignment Approved Successfuly');</script>";
		echo "<script>location.href='viewsubassignment.php';</script>";
    }
    else
    {
        echo "<script>alert('Submitted Assignment Not Approved');</script>";
		echo "<script>location.href='viewsubassignment.php';</script>";
    }
?>