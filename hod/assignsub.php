<?php
SESSION_START();
include "include/connection.php";

$cmd="select * from subject";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

$cmd1="select * from faculty";
$result1=mysqli_query($con,$cmd1) or die(mysqli_error($con));

$cmd2="select * from branch";
$result2=mysqli_query($con,$cmd2) or die(mysqli_error($con));

$cmd3="select * from semester";
$result3=mysqli_query($con,$cmd3) or die(mysqli_error($con));

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
            <h1>Assign Subject</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Assign Subject</li>
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
                <h3 class="card-title">Assign Subject</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action ="assignsubinsert.php">
                <div class="card-body">
                  
				  <div class="form-group">
                    <label for="exampleInputFile">Select Branch :</label>
                    <div class="input-group">
                      <div class="custom-file">
						<select name="fbranch" class="form-control">
							<option value="">--Select Branch--</option>
							<?php
							while($row2=mysqli_fetch_array($result2))
							{
							echo "<option value='".$row2['bname']."'>".$row2['bname']."</option>";
							}
							?>
						</select>
                      </div>
                    
                    </div>
					</div>
				  <div class="form-group">
                    <label for="exampleInputFile">Select Semester :</label>
                    <div class="input-group">
                      <div class="custom-file">
						<select name="semester" class="form-control">
							<option value="">--Select Semester--</option>
							<?php
							while($row3=mysqli_fetch_array($result3))
							{
							echo "<option value=".$row3['scode'].">".$row3['sname']."</option>";
							}
							?>
						</select>
                      </div>
                    </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Subject :</label>
					<select name="subject" class="form-control">
					<option value="">--Select Subject--</option>
					<?php
					while($row=mysqli_fetch_array($result))
					{
					echo "<option value=".$row['subname'].">".$row['subname']."</option>";
					}
					?>
					</select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Select Faculty :</label>
                    <div class="input-group">
                      <div class="custom-file">
						<select name="faculty" class="form-control">
							<option value="">--Select Faculty--</option>
							<?php
							while($row1=mysqli_fetch_array($result1))
							{
							echo "<option value=".$row1['fname'].">".$row1['fname']."</option>";
							}
							?>
						</select>
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
