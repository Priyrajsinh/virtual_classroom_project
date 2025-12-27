<?php
include "include/connection.php";
$stcode=$_GET['stcode'];

$cmd="delete from students where stcode='$stcode'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)  
	{
		echo "<script>alert('Students Deleted Successfully');</script>";
		echo "<script>location.href='displaystudents.php';</script>";
	}
	else
	{
		echo "<script>alert('Students Not Deleted');</script>";
		echo "<script>location.href='displaystudents.php';</script>";
	}

?>

