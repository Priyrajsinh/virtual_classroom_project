<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$bid=$_POST['bid'];
	$branchcode = $_POST['bcode'];
	$branchname = $_POST['bname'];	
	$cmd="update branch set bcode='$branchcode', bname='$branchname ' where bid='$bid'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Branch Updated Successfully');</script>";
		echo "<script>location.href='displaybranch.php';</script>";
	}
	else
	{
		echo "<script>alert('Branch Not Updated');</script>";
		echo "<script>location.href='displaybranch.php';</script>";
	}
}
?>