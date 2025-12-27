<?php
include "include/connection.php";

if(isset($_POST['submit']))
{
	
	$branch = $_POST['branch'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$faculty = $_POST['faculty'];
	$email = $_POST['email'];
    $subject1 = $_POST['subject1'];
	$reason = $_POST['reason'];
	$fdate = $_POST['fdate'];
	$todate = $_POST['todate'];
	
	
	$cmd = "insert into leavenote(branch,semester,subject,faculty,email,subject1,reason,fdate,todate) values('$branch','$semester','$subject','$faculty','$email','$subject1','$reason','$fdate','$todate')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Leave Submitted Successfully');</script>";
		echo "<script>location.href='viewleave.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in Submitting Leave');</script>";
		echo "<script>location.href='applyleave.php';</script>";
	}
}
?>
