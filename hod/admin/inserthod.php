<?php
include "include/connection.php";
if(isset($_POST['submit']))
{
	
	$hcode = $_POST['hcode'];
	$hbranch = $_POST['hbranch'];
	$hmail = $_POST['hmail'];
	$hpass = $_POST['hpass'];
	$hname = $_POST['hname'];	
	
	$cmd = "insert into hod(hcode,hbranch,hmail,hpass,hname) values('$hcode','$hbranch','$hmail','$hpass','$hname')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		echo "<script>alert('HOD Inserted Successfully');</script>";
		echo "<script>location.href='displayhod.php';</script>";
	}
	else
	{
		echo "<script>alert('HOD Not Inserted');</script>";
		echo "<script>location.href='addhod.php';</script>";
	}
}
?>
