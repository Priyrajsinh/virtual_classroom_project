<?php
session_start();
if(!isset($_SESSION['faculty']))
{
    header('location:facultylogin.php');
}


?>
<!DOCTYPE html>
<html>
<?php
include "include/link.php";
?>

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
                            <h1 class="m-0 text-dark">Add Notice</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">add notice</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Notice</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="POST" action="insertnotice.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Notice On:</label>
                    <input type="text" name="ntopic" class="form-control" id="exampleInputEmail1" placeholder="Enter Notice topic" required>
                  </div> 
                  <div class="form-group ">
                    <label for="inputEmail4">Notice Description</label>
                    <textarea  name="ndescription" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  </div>
                <!-- /.card-body -->
                <div class="form-group">
                  <button type="submit" name="notice_submit" class="btn btn-primary">Send Notice</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
    <?php
include "include/script.php";
include "include/footer.php";?>
</body>

</html>