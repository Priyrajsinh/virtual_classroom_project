<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$sid=$_POST['sid'];
	$semestercode = $_POST['scode'];
	$semestername = $_POST['sname'];	
	$cmd="update semester set scode='$semestercode', sname='$semestername ' where sid='$sid'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Semester Updated Successfully');</script>";
		echo "<script>location.href='displaysem.php';</script>";
	}
	else
	{
		echo "<script>alert('Semester Not Updated');</script>";
		echo "<script>location.href='displaysem.php';</script>";
	}
}
?>