<?php
session_start();
if(!isset($_SESSION['faculty']))
{
    header('location:facultylogin.php');
}
include "include/connection.php";
$cmd= "select * from leavenote";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<?php
include "include/link.php";
?>
<head>
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
include "include/nav.php";
include "include/sidebar.php";
?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Leave</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Leave</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">view Leave</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>Subject</th>
                    
					<th>Email</th>
					<th>Subject for Leave</th>
                    <th>Description/Reason</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Status</th>
					<th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                      <?php
					  $increment_lid=0;
                      while($row=mysqli_fetch_array($result))
                      {     
                          $status=$row['status'];           
                      ?>
                  <tr>
				    <?php  $lid=$row['lid']; ?>
                    <td><?php echo  ++$increment_lid?></td>
                    <td><?php echo $row['branch'];?></td>
                    <td><?php echo $row['semester'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['subject1'];?></td>
                    <td><?php echo $row['reason'];?></td>
					<td><?php echo $row['fdate'];?></td>
					<td><?php echo $row['todate'];?></td>
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
					<td>
                    <?php
                    if($status==0)
                    {
                        echo "<a href=approveLeave.php?lid=".$lid."><i class='fas fa-check'>&nbsp; Approve</i>  </a>";
                        echo "<a href=rejectLeave.php?lid=".$lid."><i class='fas fa-times'>&nbsp; Reject</i></a>";
                    }
                    elseif($status == 1)
                    {
                      echo "<a href=rejectLeave.php?lid=".$lid."><i class='fas fa-times'>&nbsp; Reject</i></a>";
                    }
                    else
                    {
                      echo "<a href=approveLeave.php?lid=".$lid."><i class='fas fa-check'>&nbsp; Approve</i></a>";
                    }
                    ?>
                    <a href="deleteleave.php?lid=<?php echo $lid;?>"><i class="fas fa-trash">&nbsp;Delete</i></a>
                   
                    </td>
                  </tr>
                  </tbody>
                  <?php
                      }
                   ?>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>Subject</th>
                    
					<th>Email</th>
					<th>Subject for Leave</th>
                    <th>Description/Reason</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Status</th>
					<th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->

<?php
include "include/script.php";

include "include/footer.php";
?>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- page script -->

</body>
</html>
