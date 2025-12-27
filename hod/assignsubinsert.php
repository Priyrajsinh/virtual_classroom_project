<?php
include "include/connection.php";

if(isset($_POST['submit']))
{
	
	$branch = $_POST['fbranch'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$faculty = $_POST['faculty'];
	
	
	$cmd = "insert into assignedsubject(asbranch,assem,asubname,asubfaculty) values('$branch','$semester','$subject','$faculty')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Subject Assigned Successfully');</script>";
		echo "<script>location.href='displayassignsub.php';</script>";
	}
	else
	{
		echo "<script>alert('Subject Not Assigned');</script>";
		echo "<script>location.href='assignsub.php';</script>";
	}
}
?>
