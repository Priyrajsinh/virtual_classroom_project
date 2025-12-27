<?php
include "include/connection.php";
$aid=$_GET['aid'];
$status=2;
$cmd="update assignmentsubmitted set status='$status' where aid='$aid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Submitted Assignment Rejected Successfuly');</script>";
		echo "<script>location.href='viewsubassignment.php';</script>";
    }
    else
    {
        echo "<script>alert('Error while rejecting Submitted Assignment');</script>";
		echo "<script>location.href='viewsubassignment.php';</script>";
    }
?>