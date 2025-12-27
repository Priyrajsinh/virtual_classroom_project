<?php
session_start();
if(!isset($_SESSION['student']))
{
    header('location:studentloginpage.php');
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Students</title>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studenthome.php">Home</a></li>
              <li class="breadcrumb-item active">Students </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid   -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
              include "include/connection.php";
              $cmd="select count(topic) from meeting_details";
              $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
              $row=mysqli_fetch_array($result);
              $total= $row[0];  
              echo"<h3>".$total."</h3>";
              mysqli_close($con);
              ?>

                <p>Total Meetings</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="viewmeeting.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
              include "include/connection.php";
              $cmd="select count(aname) from assignment";
              $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
              $row=mysqli_fetch_array($result);
              $total= $row[0];  
              echo"<h3>".$total."</h3>";
              mysqli_close($con);
              ?>

                <p>Assignments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="displayassignment.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
              include "include/connection.php";
              $cmd="select count(querry) from queries";
              $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
              $row=mysqli_fetch_array($result);
              $total= $row[0];  
              echo"<h3>".$total."</h3>";
              mysqli_close($con);
              ?>

                <p>Queries Asked</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="Viewquerry.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
              include "include/connection.php";
              $cmd="select count(ndescription) from add_notice";
              $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
              $row=mysqli_fetch_array($result);
              $total= $row[0];  
              echo"<h3>".$total."</h3>";
              mysqli_close($con);
              ?>

                <p>Notices</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="viewnotice.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
              include "include/connection.php";
              $cmd="select count(reason) from leavenote";
              $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
              $row=mysqli_fetch_array($result);
              $total= $row[0];  
              echo"<h3>".$total."</h3>";
              mysqli_close($con);
              ?>

                <p>Leave</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="viewleave.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
              include "include/connection.php";
              $cmd="select count(dname) from document";
              $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
              $row=mysqli_fetch_array($result);
              $total= $row[0];  
              echo"<h3>".$total."</h3>";
              mysqli_close($con);
              ?>

                <p>Documents</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="displaydocument.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		  
		  
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
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
