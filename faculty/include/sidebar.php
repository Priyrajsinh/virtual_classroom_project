	  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="facultyhome.php" class="brand-link">
      <img src="dist/img/download.png" alt="Faculty Logo" class="brand-image img-circle elevation-3"
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
			//session_start()  ;							
		  echo $_SESSION['faculty']; ?></a>
        </div>
      </div>
	
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="facultyhome.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Faculty
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          
            
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Assignment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addassignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Assignment </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="displayassignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Assignment</p>
                </a>
				
				<li class="nav-item">
                <a href="viewsubassignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Submitted Assignments</p>
                </a>
				</li>
				
				<li class="nav-item">
                <a href="pendingassignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Submitted Assignments</p>
                </a>
				
              </li>
				
              </li>
              
            </ul>
          </li>
		  
         
         
		  
		  
		  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Meeting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="hostmeeting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" viewmeeting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Meeting</p>
                </a>
              </li>
              
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Queries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewquerry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Queries</p>
                </a>
              </li>
              
              
            </ul>
          </li>
		  
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Notice
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addnotice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Notice</p>
                </a>
				<a href="viewnotice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Notice</p>
                </a>
              </li>
              
              
            </ul>
          </li>
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Leave
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewleave.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approve Leave</p>
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