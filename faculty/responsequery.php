<?php
session_start();

$username=$_SESSION['faculty'];
//echo $faculty;
		
include "include/connection.php";

$qid=$_GET['qid'];
$cmd="select * from queries where qid='$qid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Virtual Classroom | Faculty</title>
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
            <h1>Response</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Response</li>
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
                <h3 class="card-title">Response</h3>
				
				
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action ="responsequery1.php" enctype="multipart/form-data">
                <div class="card-body">
                  
				  <div class="form-group">
                    <label for="exampleInputFile">Select Branch :</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="text" name ="branch" value="<?php echo $row['branch']; ?>" class="form-control" id="exampleInputPassword1" readonly placeholder="Enter Faculty Code">
                      </div>
                    
                    </div>
					</div>
				  <div class="form-group">
                    <label for="exampleInputFile">Select Semester :</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="text" name ="semester" value="<?php echo $row['semester']; ?>" class="form-control" id="exampleInputPassword1" readonly placeholder="Enter Faculty Code">
                      </div>
                    </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Subject :</label>
                    <input type="text" name ="subject" value="<?php echo $row['subject']; ?>" class="form-control" id="exampleInputPassword1" readonly placeholder="Enter Faculty Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Faculty :</label>
                    <input type="text" name ="subject" value="<?php echo $row['faculty']; ?>" class="form-control" id="exampleInputPassword1" readonly placeholder="Enter Faculty Code">
                  </div>
                 
				  
				   <div class="form-group">
				   <label for="exampleInputFile">Your Response:</label>	
                   
                    <div class="input-group">
                      <div class="custom-file">
					  					  
					  <input type="text" name="resquery"  class="form-control" required>
                      </div>
                    
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value = "add" class="btn btn-primary">Submit</button>
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
