<?php
session_start();

$username=$_SESSION['student'];
//echo $username;
		
include "include/connection.php";
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
            <h1>Document</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Document</li>
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
                <h3 class="card-title">Upload Document</h3>
				
				
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action ="insertdocument.php" enctype="multipart/form-data">
                <div class="card-body">
                  
				 
				  
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Document Name:</label>
                    <div class="input-group">
                      <div class="custom-file">
						<input type="text" name="documentname" class="form-control">
                      </div>
                    
                    </div>
                  </div>
				  
				   <div class="form-group">
				   <label for="exampleInputFile">Select File:</label>	
                   
                    <div class="input-group">
                      <div class="custom-file">
					  					  
					  <input type="file" name="dfile"  class="form-control">
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
