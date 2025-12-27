<?php
include "include/connection.php";
$bid=$_GET['bid'];

$cmd="delete from branch where bid='$bid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Branch Deleted Successfully');</script>";
		echo "<script>location.href='displaybranch.php';</script>";
	}
	else
	{
		echo "<script>alert('Branch Not Deleted');</script>";
		echo "<script>location.href='displaybranch.php';</script>";
	}

?>

