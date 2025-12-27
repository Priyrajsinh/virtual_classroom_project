<?php
SESSION_START();
$user=$_SESSION["student"];
if(!isset($_SESSION["student"]))
{
    header('location:studentloginpage.php');
}
include "include/connection.php";

$cmd1="select * from students where stmail='$user'";
$result1= mysqli_query($con,$cmd1) or die(mysqli_error($con));
$row=mysqli_fetch_array($result1);
$sname=$row['stname'];
//echo "<script>alert('$sname');</script>";

$cmd="select * from assignmentsubmitted where sname='$sname'";
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
            <h1>Manage Assignment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Assignment</li>
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
                <h3 class="card-title">All Assignments	 Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
	<th>Assignment ID</th>			  
	<th>Branch</th>
	<th>Semester</th>
	<th>Student Name</th>
	<th>Subject</th>
	<th>Assignment Name</th>
	<th>Submitted Assignment File</th>
	<th>Status</th>
	
	
</tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php
					$increment_aid=0;
	while($row=mysqli_fetch_array($result))
	{
    $file=$row['afilename'];
	$status=$row['status'];
?>
	<?php  $aid=$row['aid']; ?>
    <td><?php echo  ++$increment_aid?></td>
	
	<td><?php echo $row['branch']; ?></td>
	<td><?php echo $row['semester']; ?></td>
	<td><?php echo $row['sname']; ?></td>
	<td><?php echo $row['subject']; ?></td>
	<td><?php echo $row['aname']; ?></td>
	<td><a href="../faculty/assignment/<?php echo $file;?>" target="_blank"><?php echo $row['afilename']; ?></a></td>
	<?php
                    if($status==0)
                    {
                        echo "<td>Pending</td>";
                    }
                    elseif($status == 1)
                    {
                        echo "<td>Approved</td>";
                    }
                    else
                    {
                        echo "<td>Rejected</td>";
                    }
                    ?>
					
  


	
</tr>
<?php
	}
?>
                  
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
				    <th>Assignment ID</th>
                    <th>Branch</th>
					<th>Semester</th>
					<th>Student Name</th>
					<th>Subject</th>
					<th>Assignment Name</th>
					<th>Submitted Assignment File</th>
					<th>Status</th>
					
					
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
