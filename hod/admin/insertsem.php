<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
	
	$scode = $_POST['scode'];
	$sname = $_POST['sname'];	
	
	$cmd = "insert into semester(scode,sname) values('$scode','$sname')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Semester Inserted Successfully');</script>";
		echo "<script>location.href='displaysem.php';</script>";
	}
	else
	{
		echo "<script>alert('Semester Not Inserted');</script>";
		echo "<script>location.href='addsem.php';</script>";
	}
}
?>
