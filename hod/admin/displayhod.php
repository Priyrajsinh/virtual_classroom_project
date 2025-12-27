<?php
 
SESSION_START();

include "include/connection.php";
$cmd="select * from hod";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
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
            <h1>Manage HOD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Manage HOD</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">All HOD Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>HOD Code</th>
					<th>HOD Branch</th>
					<th>HOD Email</th>
					<th>HOD Password</th>
					<th>HOD Name</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php
							while($row=mysqli_fetch_array($result))
							{
						?>
							<td><?php echo $row['hcode']; ?></td>
							<td><?php echo $row['hbranch']; ?></td>
							<td><?php echo $row['hmail']; ?></td>
							<td><?php echo $row['hpass']; ?></td>
							<td><?php echo $row['hname']; ?></td>
							<td><a href="edithod.php?hcode=<?php echo $row['hcode'];?>">Edit</a></td>
							<td><a onClick="javascript: return confirm('Are you sure? You want to delete..');" href="deletehod.php?hcode=<?php echo $row['hcode'];?>">Delete</a></td>
							
						</tr>
						<?php
							}
						?>			  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>HOD Code</th>
					<th>HOD Branch</th>
					<th>HOD Email</th>
					<th>HOD Password</th>
					<th>HOD Name</th>
					<th>Update</th>
					<th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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
