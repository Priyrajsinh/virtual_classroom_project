<?php
SESSION_START();
include"include/connection.php";
$hcode=$_GET['hcode'];
$cmd="select * from hod where hcode='$hcode'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$cmd1="select * from branch";
$result1= mysqli_query($con,$cmd1) or die(mysqli_error($con));
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
            <h1>Update HOD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Update HOD</li>
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
                <h3 class="card-title">Update HOD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action = "updatehod.php">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">HOD Code :</label>
                    <input type="text" name ="hcode" value="<?php echo $row['hcode']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter HOD Code" readonly>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">HOD Branch :</label>
							<select name="fbranch" class="form-control">
							<option value="">--Select Branch--</option>
							<?php
							while($row1=mysqli_fetch_array($result1))
							{
							echo "<option value='".$row1['bname']."'>".$row1['bname']."</option>";
							}
							?>
						</select>
				</div>
				  <div class="form-group">
                    <label for="exampleInputEmail1"> HOD Email address</label>
                    <input type="email" name="hmail" value="<?php echo $row['hmail']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter HOD email" required>
                  </div>

					<div class="form-group">
                    <label for="exampleInputEmail1"> Password</label>
                    <input type="password" name="hpass" value="<?php echo $row['hpass']; ?>" class="form-control" id="exa	mpleInputEmail1" placeholder="Enter HOD Password" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">HOD Name :</label>
                    <div class="input-group">
                      <div class="custom-file">
					  <input type="text" name ="hname" value="<?php echo $row['hname']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter HOD Name" required>
					
                      </div>
					 
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" value = "Update" class="btn btn-primary">Update</button>
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
