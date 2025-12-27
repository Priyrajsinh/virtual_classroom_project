<?php
include "include/connection.php";
$did=$_GET['did'];

$cmd="delete from document where did='$did'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Document Deleted Successfully');</script>";
		echo "<script>location.href='displaydocument.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in deleting Document');</script>";
		echo "<script>location.href='displaydocument.php';</script>";
	}

?>

