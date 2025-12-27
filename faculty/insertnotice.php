<?php
include "include/connection.php";
if(isset($_POST['notice_submit']))
{
    $ntopic=$_POST['ntopic'];
    $ndescription=$_POST['ndescription'];

    $cmd="insert into add_notice(ntopic,ndescription) values('$ntopic','$ndescription')";
    $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Add Notice Sucessfully');</script>";
		echo "<script>location.href='viewnotice.php';</script>";
    }
    else
    {
        echo "<script>alert('Add Notice Fail);</script>";
		echo "<script>location.href='viewnotice.php';</script>";
    }
}

?>