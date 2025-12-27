<?php
SESSION_START();
if(!isset($_SESSION['faculty']))
{
    header('location:facultylogin.php');
}
include "include/connection.php";
$cmd="select * from assignmentsubmitted";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));

$cmd1="select * from students where astatus='0'";
$result1= mysqli_query($con,$cmd1) or die(mysqli_error($con));
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
            <h1>Pending Assignment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Pending Assignment</li>
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
                <h3 class="card-title">All Pending Assignments Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
	<th>ID</th>		  
	<th>Branch</th>	
	<th>Student Name</th>
	<th>Student Email</th>	
	<th>Status</th>
	
	
</tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php
					$increment_aid=0;
	while($row=mysqli_fetch_array($result1))
	{
    //$file=$row['afilename'];
	$status=$row['astatus'];
?>
	<!--<?php  $aid=$row['aid']; ?> -->
    <td><?php echo  ++$increment_aid?></td>
	
	<td><?php echo $row['stbranch']; ?></td>
	<td><?php echo $row['stname']; ?></td>
	<td><?php echo $row['stmail']; ?></td>
	
	<!--<td><a href="../faculty/assignment/<?php echo $file;?>" target="_blank"><?php echo $row['afilename']; ?></a></td> -->
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
				    <th>ID</th>		  
	<th>Branch</th>	
	<th>Student Name</th>
	<th>Student Email</th>	
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
