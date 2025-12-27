	  <!-- Main Sidebar Container -->
	  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	    <!-- Brand Logo -->
	    <a href="index3.html" class="brand-link">
	      <img src="dist/img/download.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	      <span class="brand-text font-weight-light">Virtual Classroom</span>
	    </a>

	    <!-- Sidebar -->
	    <div class="sidebar">
	      <!-- Sidebar user panel (optional) -->
	      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
	        <div class="image">
	          <img src="dist/img/pp.jfif" class="img-circle elevation-2" alt="User Image">
	        </div>
	        <div class="info">
	          <a href="#" class="d-block"><?php
                                        echo $_SESSION['username']; ?></a>
	        </div>
	      </div>

	      <!-- Sidebar Menu -->
	      <nav class="mt-2">
	        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
	          <li class="nav-item has-treeview menu-open">
	            <a href="adminhome.php" class="nav-link active">
	              <i class="nav-icon fas fa-tachometer-alt"></i>
	              <p>
	                Dashboard
	                <i class="right fas fa-angle-left"></i>
	              </p>
	            </a>

	          </li>



	          <li class="nav-item has-treeview">
	            <a href="#" class="nav-link">
	              <i class="nav-icon fas fa-chart-pie"></i>
	              <p>
	                Branch
	                <i class="right fas fa-angle-left"></i>
	              </p>
	            </a>
	            <ul class="nav nav-treeview">
	              <li class="nav-item">
	                <a href="addbranch.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Add Branch</p>
	                </a>
	              </li>
	              <li class="nav-item">
	                <a href="displaybranch.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Manage Branch</p>
	                </a>
	              </li>

	            </ul>
	          </li>

	          <li class="nav-item has-treeview">
	            <a href="#" class="nav-link">
	              <i class="nav-icon fas fa-edit"></i>
	              <p>
	                Semester
	                <i class="fas fa-angle-left right"></i>
	              </p>
	            </a>
	            <ul class="nav nav-treeview">
	              <li class="nav-item">
	                <a href="addsem.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Add Semester</p>
	                </a>
	              </li>
	              <li class="nav-item">
	                <a href="displaysem.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Manage Semester</p>
	                </a>
	              </li>


	            </ul>
	          </li>

	          <li class="nav-item has-treeview">
	            <a href="#" class="nav-link">
	              <i class="nav-icon fas fa-edit"></i>
	              <p>
	                HOD
	                <i class="fas fa-angle-left right"></i>
	              </p>
	            </a>
	            <ul class="nav nav-treeview">
	              <li class="nav-item">
	                <a href="addhod.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Add HOD</p>
	                </a>
	              </li>
	              <li class="nav-item">
	                <a href="displayhod.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Manage HOD</p>
	                </a>
	              </li>


	            </ul>
	          </li>

	          <li class="nav-item has-treeview">
	            <a href="#" class="nav-link">
	              <i class="nav-icon fas fa-table"></i>
	              <p>
	                Faculty
	                <i class="fas fa-angle-left right"></i>
	              </p>
	            </a>
	            <ul class="nav nav-treeview">
	              <li class="nav-item">
	                <a href="addfaculty.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Add Faculty</p>
	                </a>
	              </li>
	              <li class="nav-item">
	                <a href="displayfaculty.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Manage Faculty</p>
	                </a>
	              </li>

	            </ul>
	          </li>
	          <li class="nav-header">Students</li>

	          </li>

	          <li class="nav-item has-treeview">
	            <a href="#" class="nav-link">
	              <i class="nav-icon far fa-envelope"></i>
	              <p>
	                Students
	                <i class="fas fa-angle-left right"></i>
	              </p>
	            </a>
	            <ul class="nav nav-treeview">
	              <li class="nav-item">
	                <a href="addstudents.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Add Students</p>
	                </a>
	              </li>
	              <li class="nav-item">
	                <a href="displaystudents.php" class="nav-link">
	                  <i class="far fa-circle nav-icon"></i>
	                  <p>Manage Students</p>
	                </a>
	              </li>

	            </ul>
	          </li>




	        </ul>
	      </nav> 
	      <!-- /.sidebar-menu -->


	    </div>
	    <!-- /.sidebar -->
	  </aside>