<?php
include "include/connection.php";
$hcode=$_GET['hcode'];

$cmd="delete from hod where hcode='$hcode'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('HOD Deleted Successfully');</script>";
		echo "<script>location.href='displayhod.php';</script>";
	}
	else
	{
		echo "<script>alert('HOD Not Deleted');</script>";
		echo "<script>location.href='displayhod.php';</script>";
	}

?>

