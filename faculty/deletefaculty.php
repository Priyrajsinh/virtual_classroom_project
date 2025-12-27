<?php
include "include/connection.php";
$fcode=$_GET['fcode'];

$cmd="delete from faculty where fcode='$fcode'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Faculty Deleted Successfully');</script>";
		echo "<script>location.href='displayfaculty.php';</script>";
	}
	else
	{
		echo "<script>alert('Faculty Not Deleted');</script>";
		echo "<script>location.href='displayfaculty.php';</script>";
	}

?>

