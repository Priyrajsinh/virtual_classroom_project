<?php 
SESSION_START();
include "include/connection.php";
$cmd="select * from branch";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
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
            <h1>Add Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Add Students</li>
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
                <h3 class="card-title">Add Students</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action = "insertstudents.php">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Students Code :</label>
                    <input type="text" name ="stcode" class="form-control" id="exampleInputPassword1" placeholder="Enter Students Code" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">Student Branch :</label>
							<select name="fbranch" class="form-control">
							<option value="">--Select Branch--</option>
							<?php
							while($row=mysqli_fetch_array($result))
							{
							echo "<option value='".$row['bname']."'>".$row['bname']."</option>";
							}
							?>
						</select>
				</div>
				  <div class="form-group">
                    <label for="exampleInputEmail1"> Students Email address</label>
                    <input type="email" name="stmail" class="form-control" id="exampleInputEmail1" placeholder="Enter Students email" required>
                  </div>

					<div class="form-group">
                    <label for="exampleInputEmail1"> Password</label>
                    <input type="password" name="stpass" class="form-control" id="exa	mpleInputEmail1" placeholder="Enter Students Password" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Students Name :</label>
                    <div class="input-group">
                      <div class="custom-file">
					  <input type="text" name ="stname" class="form-control" id="exampleInputPassword1" placeholder="Enter Students Name" required>

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
