<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebars</title>
</head>
<body>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>


          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/client/admin/" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                </ul>
              </li>
                <li class="nav-item">
                        <a href="/client/admin/pages/users.php" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
              <li class="nav-item">
                        <a href="/client/admin/pages/location.php" class="nav-link">
                            <i class="nav-icon fas fa-map-marker-alt"></i>
                            <p>Locations</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/client/admin/pages/property.php" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Properties</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/client/admin/pages/invoices.php" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice"></i>
                            <p>Invoices</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/client/admin/pages/job-titles.php" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>Job Titles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/client/admin/pages/owners.php" class="nav-link">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>Owners</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/client/admin/pages/agents.php" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>Agents</p>
                        </a>
                    </li>
            </ul>
          </nav>
      
        </div>

      </aside>
    
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
