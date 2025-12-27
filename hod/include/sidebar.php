	  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="hodhome.php" class="brand-link">
      <img src="dist/img/download.png" alt="HOD Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
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
			//session_start();  
		  echo $_SESSION['hod']; ?></a>
        </div>
      </div>
	
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="hodhome.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                HOD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          
            
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Subject
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addsub.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="displaysubject.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Subject</p>
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
          <li class="nav-header">Assign Subject</li>
          
          </li>
          
          <li class="nav-item has-treeview">
            <a href="assignsub.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Assign Subject
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assignsub.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="displayassignsub.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Assigned Subject</p>
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