<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$studentscode= $_POST['stcode'];
	$studentsbranch = $_POST['fbranch'];
	$studentsemail = $_POST['stmail'];
	$studentspassword = $_POST['stpass'];
	$studentsname = $_POST['stname'];	
	$cmd="update students set stbranch='$studentsbranch',stmail='$studentsemail',stpass='$studentspassword', stname='$studentsname' where stcode='$studentscode'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Student Updated Successfully');</script>";
	echo "<script>location.href='displaystudents.php';</script>";
	}
	else
	{
		echo "<script>alert('Student Not Updated');</script>";
		echo "<script>location.href='displaystudents.php';</script>";
	}
}
?>