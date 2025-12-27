<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$facultycode= $_POST['fcode'];
	$facultybranch = $_POST['fbranch'];
	$facultyemail = $_POST['fmail'];
	$facultypassword = $_POST['fpass'];
	$facultyname = $_POST['fname'];	
	$cmd="update faculty set fbranch='$facultybranch',fmail='$facultyemail',fpass='$facultypassword', fname='$facultyname' where fcode='$facultycode'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Faculty Updated Successfully');</script>";
	echo "<script>location.href='displayfaculty.php';</script>";
	}
	else
	{
		echo "<script>alert('Faculty Not Updated');</script>";
		echo "<script>location.href='displayfaculty.php';</script>";
	}
}
?>