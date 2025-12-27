<?php
include "include/connection.php";
$cmd="select * from branch";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
?>

<?php
include "include/connection.php";
// define variables and set to empty values
  $fnameErr = $lnameErr = $enoErr  = $mobileErr = $emailErr = $passErr  = $genderErr = $branchErr= "";
  $fname = $lname = $eno = $mob = $email = $pass = $gender = $branch= "";
  if(isset($_POST['stusubmit']))
  {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
    // catch all value
    $sfname=mysqli_real_escape_string($con,$_POST['sfname']);
    $slname=mysqli_real_escape_string($con,$_POST['slname']);
    $semail=mysqli_real_escape_string($con,$_POST['semail']);
    $spass=mysqli_real_escape_string($con,$_POST['spass']);
    $seno=mysqli_real_escape_string($con,$_POST['seno']);
    $smob=mysqli_real_escape_string($con,$_POST['smob']);
    $sbranch=mysqli_real_escape_string($con,$_POST['sbranch']);
    $sgender=mysqli_real_escape_string($con,$_POST['sgender']);

    // php validation

    if (empty($sfname)) {
    $fnameErr = "Fiest Name is required";
    } 
    else {
      $fname = test_input($sfname);
      // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
     }
    }
    if (empty($slname)) {
    $lnameErr = "Last Name is required";
    } 
    else {
      $lname = test_input($slname);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
     }
    }
    if (empty($seno)) {
    $enoErr = "Enrollment No. is required";
    } 
    else {
      $eno = test_input($seno);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[0-9]{12}$/",$eno)) {
      $mobileErr = "Only 12 digits are allowed";
      }
    }

    if (empty($smob)) {
    $mobileErr = "Mobile is required";
    } 
    else {
     $mob = test_input($smob);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[6789][0-9]{9}$/",$mob)) {
      $mobileErr = "Only 10 digits are allowed";
     }
    }

    if (empty($semail)) {
    $emailErr = "Email is required";
    } 
    else {
      $email = test_input($semail);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      }
    }
    if (empty($spass)) {
     $passErr = "Password is required";
    } 
    else {
     $pass = test_input($spass);
    }

    if (empty($sgender)) {
      $genderErr = "Branch is required";
    } 
    else {
      $gender = test_input($sgender);
    }

    if (empty($sbranch)) {
      $branchErr = "Branch is required";
    } 
    else {
      $branch = test_input($sbranch);
    }
    if($fnameErr =="" && $lnameErr =="" && $enoErr  =="" && $mobileErr =="" && $emailErr =="" && $passErr  =="" && $genderErr =="" && $branchErr =="")
    {
        $cmd="insert into sreg(sfname,slname,seno,semail,spass,smob,sgender,sbranch) values('$fname','$lname','$eno','$email','$pass','$mob','$gender','$branch')";
        $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
        if($result)
        {
            echo "<script>alert('Registration Sucessfully');</script>";
            echo "<script>location.href='slogin.php';</script>";
        }
        else
        {
            echo "<script>alert('Error in Registration');</script>";
            echo "<script>location.href='sreg.php';</script>";
        }
    }
        
  }
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    input:invalid{
        border:2px dashed red;
    }
    input:valid{
        border :2px solid green;
    }
    .error {color: #FF0000;}
    </style>
    <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.sfname.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.sfname.focus() ;
            return false;
         }
         if( document.myForm.slname.value == "" ) {
            alert( "Please provide your last name!" );
            document.myForm.slname.focus() ;
            return false;
         }
         if( document.myForm.semail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.semail.focus() ;
            return false;
         }
         if( document.myForm.spass.value == "" ) {
            alert( "Please provide your Password!" );
            document.myForm.spass.focus() ;
            return false;
         }        
          if( document.myForm.seno.value == "" ||document.myForm.seno.value.length != 12 ) {
            
            alert( "Please provide valid enrollment number." );
            document.myForm.seno.focus() ;
            return false;
         }
         if( document.myForm.smob.value == "" ||document.myForm.smob.value.length != 10 ) {
            
            alert( "Please provide valid mobile number." );
            document.myForm.fmob.focus() ;
            return false;
         }
         if( document.myForm.sgender.value == "" ) {
            alert( "Please provide your Qualifiation!" );
            document.myForm.sgender.focus() ;
            return false;
         }
         if( document.myForm.sbranch.value == "" ) {
            alert( "Please select your branch!" );
            document.myForm.sbranch.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
  <?php
include "include/link.php";?>
</head>
<body class="hold-transition login-page">
<div>
  <div class="login-logo">
    <a href="#"><b>Student</b>  Registration</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body">
      <p class="login-box-msg"><h4><center>sign up to start your session </center></h4></p>

      <form method="POST" action="" id="myForm"  name="myForm" onsubmit = "return(validate());">
        <div class="input-group mb-2">
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Firstname <span class="error">*</span></label>
                    <input type="text" name="sfname" class="form-control" id="inputEmail4" placeholder="firstname" pattern="[a-zA-Z ]{3,20}" value="<?php if(isset($_POST['sfname'])){echo $_POST['sfname'];}?>" required>
                    <span class="error"><?php echo $fnameErr;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name<span class="error">*</span></label>
                    <input type="text" name="slname" class="form-control" id="inputPassword4" placeholder="lastname" pattern="[a-zA-Z]{3,20}" value="<?php if(isset($_POST['slname'])){echo $_POST['slname'];}?>" required>
                    <span class="error"><?php echo $fnameErr;?></span>             
                </div>
            </div>
        </div>
        <div class="form-row">
                 <div class="form-group col-md-6">
                    <label for="inputEmail4">Enrollment No.<span class="error">*</span></label>
                    <input type="text" name="seno" class="form-control" id="inputEmail4" placeholder="enrollment no" maxlength="12" pattern="[0-9]{12}" value="<?php if(isset($_POST['seno'])){echo $_POST['seno'];}?>" required>
                    <span class="error"><?php echo $fnameErr;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile No<span class="error">*</span></label>
                    <input type="text" name="smob" class="form-control" id="inputPassword4" placeholder="mobile no." maxlength="10" pattern="[6789][0-9]{9}" value="<?php if(isset($_POST['smob'])){echo $_POST['smob'];}?>" required>
                    <span class="error"><?php echo $fnameErr;?></span>
                </div>
        </div>
        <div class="input-group mb-2">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email<span class="error">*</span></label>
                    <input type="email" name="semail" class="form-control" id="inputEmail4" placeholder="Email" value="<?php if(isset($_POST['semail'])){echo $_POST['semail'];}?>" required>
                    <span class="error"><?php echo $fnameErr;?></span>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Password<span class="error">*</span></label>
                    <input type="password" name="spass" class="form-control" id="inputPassword4" placeholder="Password" value="<?php if(isset($_POST['spass'])){echo $_POST['spass'];}?>" required>
                    <span class="error"><?php echo $fnameErr;?></span>
                </div>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Gender:<span class="error">*</span></label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                           <input type="radio" class="form-check-input" name="sgender" value="male">Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sgender" value="female">Female
                        </label>
                    </div>
                </div>
          </div>
           
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputState">Branch<span class="error">*</span></label>
                    <select name="sbranch" class="form-control" required>
                    <option value="">--Select--</option>
                    <?php
                        while($row=mysqli_fetch_array($result))
                        {
                            //$bid=$row['b_id'];
                            $bname=$row['b_name'];
                    ?>
                    <option value="<?php echo $bname;?>"><?php echo $bname;?></option>
                    
                    <?php
                        }
                        ?>
                        </select>
                </div>
            </div>
            
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
          <center>
            <button type="submit" name="stusubmit" value="submit" class="btn btn-primary ">Sign In</button>
            <button type="reset" name="cancel"  value="cancel" class="btn btn-primary ">Reset</button>
            </center>
            </div>
          <!-- /.col -->
        </div>
        
      </form>
      
      
      <!-- /.social-auth-links -->
      <p class="mb-2">
      <center><a href="slogin.php" class="text-center">If already have an account </a></center>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<?php
  include "include/script.php";
  ?>
</body>
</html>
