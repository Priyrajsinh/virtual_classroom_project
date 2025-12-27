<?php
session_start();
if(!isset($_SESSION['student']))
{
    header('location:studentlogin.php');
}

include "include/connection.php";
$cmd="select * from add_notice";
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
            <h1 class="m-0 text-dark">View Notice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable of Notice</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Notice id</th>
                    <th>Notice Topic</th>
                    <th>Notice Description</th>
                    

                  </tr>
                  </thead>

                  <tbody>
                      <?php
                      while($row=mysqli_fetch_array($result))
                      {                
                      ?>
                  <tr>
                    <td><?php echo $nid=$row['nid'];?></td>
                    <td><?php echo $row['ntopic'];?></td>
                     <td><?php echo $row['ndescription'];?></td>
                    
                  </tr>
                  </tbody>
                  <?php
                      }
                   ?>
                  <tfoot>
                  <tr>
                    <th>Notice id</th>
                    <th>Notice Topic</th>
                    <th>Notice Description</th>
                    
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

include "invlude/footer.php";
?>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- page script -->

</body>
</html>
