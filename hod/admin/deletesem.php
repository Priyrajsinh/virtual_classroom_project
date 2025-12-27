<?php
include "include/connection.php";
$sid=$_GET['sid'];

$cmd="delete from semester where sid='$sid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Semester Deleted Successfully');</script>";
		echo "<script>location.href='displaysem.php';</script>";
	}
	else
	{
		echo "<script>alert('Semester Not Deleted');</script>";
		echo "<script>location.href='displaysem.php';</script>";
	}

?>

