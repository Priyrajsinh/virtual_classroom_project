<?php
include "include/connection.php";

if(isset($_POST['submit']))
{
	//$target_file="assignment/";
	
	$documentname = $_POST['documentname'];
	$filename = $_FILES["dfile"]["name"];	
	
    $tempname = $_FILES["dfile"]["tmp_name"];    
    $folder = "document/".$filename;	  
	//echo $filename;
	$cmd = "insert into document(dname,dfilename) values('$documentname','$filename')";
	$result = mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Document uploaded successfully";
        }else{
            $msg = "Failed to upload Document";
		}
		echo "<script>alert('Document Uploaded Successfully');</script>";
		echo "<script>location.href='displaydocument.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in uploading Document');</script>";
		echo "<script>location.href='adddocument.php';</script>";
	}
	
}
?>
