<?php
include "include/connection.php";
$lid=$_GET['lid'];

$cmd="delete from leavenote where lid='$lid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Leave Deleted Successfully...');</script>";
		echo "<script>location.href='viewleave.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in deleting Leave...');</script>";
		echo "<script>location.href='viewleave.php';</script>";
	}

?>

