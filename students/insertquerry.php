<?php
include "include/connection.php";

if(isset($_POST['submit']))
{
	
	$branch = $_POST['branch'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$faculty = $_POST['faculty'];
    $querry = $_POST['querry'];
	
	
	$cmd = "insert into queries(branch,semester,subject,faculty,querry) values('$branch','$semester','$subject','$faculty','$querry')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Querry Uploaded Successfully');</script>";
		echo "<script>location.href='askquerry.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in uploading Querry');</script>";
		echo "<script>location.href='askquerry.php';</script>";
	}
}
?>
