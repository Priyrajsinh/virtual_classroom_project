<?php
SESSION_START();
include"include/connection.php";
$bid=$_GET['bid'];
$cmd="select * from branch where bid='$bid'";
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
            <h1>Update Branch</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Update Branch</li>
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
                <h3 class="card-title">Update Branch</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action = "updatebranch.php">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Branch ID :</label>
                    <input type="text" name ="bid" value="<?php echo $row['bid']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Branch Code" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Branch Code :</label>
                    <input type="text" name ="bcode" value="<?php echo $row['bcode']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Branch Code" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Branch Name :</label>
                    <div class="input-group">
                      <div class="custom-file">
					  <input type="text" name ="bname" value="<?php echo $row['bname']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Branch Code" required>

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
