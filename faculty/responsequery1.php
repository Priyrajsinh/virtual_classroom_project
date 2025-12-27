<?php
include "include/connection.php";

if(isset($_POST['submit']))
{
	//$target_file="assignment/";
	$branch = $_POST['branch'];
	$semester = $_POST['semester'];
    $faculty = $_POST['subject'];
	$subject = $_POST['faculty'];
    $resquery = $_POST['resquery'];
	
	$cmd = "insert into queries(branch,semester,subject,faculty,resquery) values('$branch','$semester','$subject','$faculty','$resquery')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Response Uploaded Successfully');</script>";
		echo "<script>location.href='viewquerry.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in uploading Response');</script>";
		echo "<script>location.href='viewquerry.php';</script>";
	}
	
}
?>
