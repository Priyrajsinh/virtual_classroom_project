<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$hodcode = $_POST['hcode'];
	$hodbranch = $_POST['hbranch'];
	$hodemail = $_POST['hmail'];
	$hodpassword = $_POST['hpass'];
	$hodname = $_POST['hname'];	
	$cmd="update hod set hbranch='$hodbranch',hmail='$hodemail',hpass='$hodpassword', hname='$hodname ' where hcode='$hodcode'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('HOD Updated Successfully');</script>";
		echo "<script>location.href='displayhod.php';</script>";
	}
	else
	{
		echo "<script>alert('HOD Not Updated');</script>";
		echo "<script>location.href='displayhod.php';</script>";
	}
}
?>