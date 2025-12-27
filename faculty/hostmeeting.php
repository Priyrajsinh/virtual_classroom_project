<?php
session_start();

$username=$_SESSION['faculty'];
//echo $faculty;
		
include "include/connection.php";

$cmd ="select * from faculty where fmail='$username'";
$result =mysqli_query($con,$cmd) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);

$faculty=$row['fname'];

$cmd1="select * from assignedsubject where asubfaculty='$faculty'";
$result1 =mysqli_query($con,$cmd1) or die(mysqli_error($con));
$row1=mysqli_fetch_array($result1);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Virtual Classroom | Faculty</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
      var countryId = $("#txtStartDate").val();
    alert(countryId);
    });
    
    
});
</script>
  <?php
  include "include/link.php";
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 <?php
 include "include/nav.php";
 ?>
<?php
 include "include/sidebar.php";
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Meeting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Meeting</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Meeting</h3>
				
				
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action ="create-meeting.php">
                <div class="card-body">
                  
				  
                  <div class="form-group">
                    <label for="exampleInputFile">Meeting Topic:</label>
                    <div class="input-group">
                      <div class="custom-file">
						<input type="text" name="subname" class="form-control" required>
                      </div>
                    
                    </div>
                  </div>
				  
				   <div class="form-group">
				   <label for="exampleInputFile">Select Time:</label>	
                   
                    <div class="input-group">
                      <div class="input-group date form_datetime" id="StartDate">
                      <input type="datetime-local" onchange="checkDate()" class="form-control input-lg" placeholder="From"  name="SDate" id="txtStartDate" required /> 
                     </div>
                    
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="createmeeting" name="submit" class="btn btn-primary">Create Meeting</button>
				  <button type="reset" name="reset" class="btn btn-danger">Clear</button>

                </div>
              </form>
            </div>
            <!-- /.card -->
      <!-- /.card -->

    </section>
	 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include "include/footer.php";
  ?>
<script>
 function checkDate() {
   var selectedText = document.getElementById('txtStartDate').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
    alert("Date must be in the future");
	location.href='hostmeeting.php';
   }
 }
</script>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
include "include/script.php";
?>

</body>
</html>
