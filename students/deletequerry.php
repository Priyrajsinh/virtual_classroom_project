<?php
include "include/connection.php";
$qid=$_GET['qid'];

$cmd="delete from queries where qid='$qid'";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
if($result)
	{
		echo "<script>alert('Querry Deleted Successfully...');</script>";
		echo "<script>location.href='viewquerry.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in deleting Querry...');</script>";
		echo "<script>location.href='viewquerry.php';</script>";
	}

?>

