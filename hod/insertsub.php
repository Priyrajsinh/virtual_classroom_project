<?php
include "include/connection.php";

if(isset($_GET['submit']))
{
	
	$subjectcode = $_GET['subcode'];
	$subjectname = $_GET['subname'];	
	
	$cmd = "insert into subject(subcode,subname) values('$subjectcode','$subjectname')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Subject Inserted Successfully');</script>";
		echo "<script>location.href='displaysubject.php';</script>";
	}
	else
	{
		echo "<script>alert('Subject Not Inserted');</script>";
		echo "<script>location.href='addsub.php';</script>";
	}
}
?>
