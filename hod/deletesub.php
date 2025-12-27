<?php
include "include/connection.php";
$subid=$_GET['subid'];

$cmd="delete from subject where subid='$subid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Subject Deleted Successfully');</script>";
		echo "<script>location.href='displaysubject.php';</script>";
	}
	else
	{
		echo "<script>alert('Subject Not Deleted');</script>";
		echo "<script>location.href='displaysubject.php';</script>";
	}

?>

