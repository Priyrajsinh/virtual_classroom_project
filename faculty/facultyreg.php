<?php
include "include/connection.php";
if(isset($_POST['fsubmit']))
{
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
    // define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $passErr = $mobileErr = $qualErr = $branchErr= "";
$fname = $lname = $email = $pass = $mob = $qual = $branch= "";

// catch all value
$ffname=mysqli_real_escape_string($con,$_POST['ffname']);    
$flname=mysqli_real_escape_string($con,$_POST['flname']);
$fmob=mysqli_real_escape_string($con,$_POST['fmob']);
$femail=mysqli_real_escape_string($con,$_POST['femail']);
$fpass=mysqli_real_escape_string($con,$_POST['fpass']);
$fqual=mysqli_real_escape_string($con,$_POST['fqual']);
$fbranch=mysqli_real_escape_string($con,$_POST['fbranch']);

// php validation

  if (empty($ffname)) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($ffname);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($flname)) {
    $lnameErr = "Name is required";
  } else {
    $lname = test_input($flname);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($fmob)) {
    $mobileErr = "Mobile is required";
  } else {
    $mob = test_input($fmob);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[6789][0-9]{9}$/",$mob)) {
      $mobileErr = "Only 10 digits are allowed";
    }
  }
  
  if (empty($femail)) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($femail);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


if (empty($fpass)) {
  $passErr = "Password is required";
} else {
  $pass = test_input($fpass);
}

if (empty($fqual)) {
    $qualErr = "Qualification is required";
  } else {
    $qual = test_input($fqual);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$qual)) {
      $qualErr = "Only letters and white space allowed";
    }
  }

  if (empty($fbranch)) {
    $branchErr = "Branch is required";
  } else {
    $branch = test_input($fbranch);
  }
    
  
    $cmd="insert into faculty_details(ffname,flname,fmob,femail,fpass,fqual,fbranch) values('$fname','$lname','$mob','$email','$pass','$qual','$branch')";
    $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Registration Sucessfully');</script>";
		echo "<script>location.href='login.php';</script>";
    }
    else
    {
        echo "<script>alert('Error in Registration');</script>";
		echo "<script>location.href='freg.php';</script>";
    }
}

?>