<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$subjectid=$_POST['subid'];
	$subjectcode = $_POST['subcode'];
	$subjectname = $_POST['subname'];	
	$cmd="update subject set subcode='$subjectcode', subname='$subjectname ' where subid='$subjectid'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Subject Updated Successfully');</script>";
		echo "<script>location.href='displaysubject.php';</script>";
	}
	else
	{
		echo "<script>alert('Subject Not Updated');</script>";
		echo "<script>location.href='displaysubject.php';</script>";
	}
}
?>