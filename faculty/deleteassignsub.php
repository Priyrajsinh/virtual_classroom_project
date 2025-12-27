<?php
include "include/connection.php";
$asid=$_GET['asid'];

$cmd="delete from assignedsubject where asid='$asid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('AssignedSubject Deleted Successfully');</script>";
		echo "<script>location.href='displayassignsub.php';</script>";
	}
	else
	{
		echo "<script>alert('AssignedSubject Not Deleted');</script>";
		echo "<script>location.href='displayassignsub.php';</script>";
	}

?>

