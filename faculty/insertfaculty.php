<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
	
	$fcode = $_POST['fcode'];
	$fbranch = $_POST['fbranch'];
	$fmail = $_POST['fmail'];
	$fpass = $_POST['fpass'];
	$fname = $_POST['fname'];	
	
	$cmd = "insert into faculty(fcode,fbranch,fmail,fpass,fname) values('$fcode','$fbranch','$fmail','$fpass','$fname')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('Faculty Inserted Successfully');</script>";
		echo "<script>location.href='displayfaculty.php';</script>";
	}
	else
	{
		echo "<script>alert('Faculty Not Inserted');</script>";
		echo "<script>location.href='addfaculty.php';</script>";
	}
}
?>
