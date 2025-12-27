	  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="studenthome.php" class="brand-link">
      <img src="dist/img/download.png" alt="STUDENTS Logo" class="brand-image img-circle elevation-3"
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
		  echo $_SESSION['student']; ?></a>
        </div>
      </div>
	
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
		    
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="studenthome.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Lecture
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="viewmeeting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lecture Details</p>
                </a>
              </li>
              
              
            </ul>
          </li>
            
         
          
         
          
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Assignment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewassignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Assignment</p>
                </a>
              </li>
			  
			   <li class="nav-item">
                <a href="viewsubassignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Submitted Assignment</p>
                </a>
              </li>
             
              
              
            </ul>
          </li>
		  
         
          
          
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Queries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="askquerry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asks Queries</p>
                </a>
              </li>
              
             
            </ul>
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Viewquerry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Queries</p>
                </a>
              </li>
              
             
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Notice
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewnotice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Notice</p>
                </a>
              </li>
              
             
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Leave
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="applyleave.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apply for leave </p>
                </a>
				<a href="viewleave.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Leave </p>
                </a>
              </li>
              
             
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Upload Documents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adddocument.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Document</p>
                </a>
				<a href="displaydocument.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Document</p>
                
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