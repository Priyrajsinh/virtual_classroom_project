<?php
SESSION_START();
include"include/connection.php";
$sid=$_GET['sid'];
$cmd="select * from semester where sid='$sid'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Virtual Classroom | Dashboard</title>
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
            <h1>Update Semester</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Update Semester</li>
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
                <h3 class="card-title">Update Semester</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action = "updatesem.php">
                <div class="card-body">
				<div class="form-group">
                    <label for="exampleInputPassword1">Semester ID :</label>
                    <input type="text" name="sid" value="<?php echo $row['sid']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Semester Code" readonly>
                  </div>
				<div class="form-group">
                    <label for="exampleInputPassword1">Semester Code :</label>
                    <input type="text" name="scode" value="<?php echo $row['scode']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Semester Code" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Semester Name :</label>
                    <div class="input-group">
                      <div class="custom-file">
					  <input type="text" name ="sname" value="<?php echo $row['sname']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Semester Name" required>

                      </div>
                    
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" value = "update" class="btn btn-primary">Update</button>
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
