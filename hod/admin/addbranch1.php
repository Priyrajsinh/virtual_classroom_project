<?php
include "include/connection.php";

if(isset($_GET['submit']))
{
	
	$branchcode = $_GET['bcode'];
	$branchname = $_GET['bname'];	
	
	$cmd = "insert into branch(bcode,bname) values('$branchcode','$branchname')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Branch Inserted Successfully');</script>";
		echo "<script>location.href='displaybranch.php';</script>";
	}
	else
	{
		echo "<script>alert('Branch Not Inserted');</script>";
		echo "<script>location.href='addbranch.php';</script>";
	}
}
?>
