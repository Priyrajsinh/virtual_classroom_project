<?php
include "include/connection.php";
$aid=$_GET['aid'];

$cmd="delete from assignmentsubmitted where aid='$aid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Assignment Deleted Successfully');</script>";
		echo "<script>location.href='viewsubassignment.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in deleting Assignment');</script>";
		echo "<script>location.href='viewsubassignment.php';</script>";
	}

?>

