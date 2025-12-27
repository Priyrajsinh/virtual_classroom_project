<?php
session_start();
$con = mysqli_connect("localhost","root","","vc");

if(!$con)
{
	echo '<script>alert("error in database connection");</script>';
}

if(isset($_POST['submit']))
{
	$captcha = $_POST["captcha"];
	if($_SESSION['CAPTCHA_CODE'] == $captcha)
	{
	$student = $_POST['uname'];
	$password = $_POST['password'];

	
    $cmd = "select * from students where stmail='$student' and stpass='$password'";

    $result = mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    if($count >= 1)
    {
		$_SESSION["student"]=$student;
        echo "<script>alert('Login Successfully');</script>";
        echo "<script>location.href='studenthome.php';</script>";
    }
    else
    {
        echo "<script>alert('Wrong username or password');</script>";
		echo"<script>location.href='studentloginpage.php';</script>";
    }
}
else{
	  echo "<script>alert('Enter Valid CAPTCHA CODE ');</script>";
		echo"<script>location.href='studentloginpage.php';</script>";
		}

}
	
?>

