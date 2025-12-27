<?php
include "include/connection.php";
if(isset($_POST['update']))
	{
	$Assigned_Subject_ID=$_POST['asid'];
	$branch = $_POST['fbranch'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$faculty = $_POST['faculty'];	
	$cmd="update assignedsubject set asbranch='$branch', assem='$semester',asubname='$subject',asubfaculty='$faculty' where asid='$Assigned_Subject_ID'";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('AssignedSubject Updated Successfully');</script>";
		echo "<script>location.href='displayassignsub.php';</script>";
	}
	else
	{
		echo "<script>alert('AssignedSubject Not Updated');</script>";
		echo "<script>location.href='displayassignsub.php';</script>";
	}
}
?>