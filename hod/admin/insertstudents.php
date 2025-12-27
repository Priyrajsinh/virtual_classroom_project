<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
	
	$stcode = $_POST['stcode'];
	$stbranch = $_POST['stbranch'];
	$stmail = $_POST['stmail'];
	$stpass = $_POST['stpass'];
	$stname = $_POST['stname'];	
	
	$cmd = "insert into students(stcode,stbranch,stmail,stpass,stname) values('$stcode','$stbranch','$stmail','$stpass','$stname')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Students Inserted Successfully');</script>";
		echo "<script>location.href='displaystudents.php';</script>";
	}
	else
	{
		echo "<script>alert('Students Not Inserted');</script>";
		echo "<script>location.href='addstudents.php';</script>";
	}
}
?>
