<?php
$con = mysqli_connect("localhost","root","","foods");

if(!$con)
{
	echo '<script>alert("error in database connection");</script>';
}

if(isset($_GET['submit']))
{
	$firstname = $_GET['fname'];
	$lastname = $_GET['lname'];
    $country = $_GET['country'];
    $subject = $_GET['subject'];

	
    $cmd ="insert into contactus (fname,lname,country,subject) values('$firstname','$lastname','$country','$subject')";
    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
		
        echo "<script>alert('Thank you for your feedback');</script>";
        echo "<script>location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Error in Database');</script>";
		echo"<script>location.href='contactus.html';</script>";
    }

}
	
?>

