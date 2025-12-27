<?php
include "include/connection.php";

if(isset($_POST['submit']))
{
	//$target_file="assignment/";
	$branch = $_POST['branch'];
	$semester = $_POST['semester'];
	$subject = $_POST['subject'];
	$aname = $_POST['aname'];
	$afilename = $_FILES["afile"]["name"];	
	
    $tempname = $_FILES["afile"]["tmp_name"];    
    $folder = "assignment/".$afilename;	  
	//echo $filename;
	$cmd = "insert into assignmentsubmitted(branch,semester,subject,aname,afilename) values('$branch','$semester','$subject','$aname','$afilename ')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
		}
		echo "<script>alert('Assignment Uploaded Successfully');</script>";
		echo "<script>location.href='viewassignment.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in uploading Assignment');</script>";
		echo "<script>location.href='viewassignment.php';</script>";
	}
	
}
?>
