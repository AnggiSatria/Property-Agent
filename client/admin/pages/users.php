<?php
// require "../../server/function/users.php";
// include '/laragon/www/server/config/config.php';
include '/laragon/www/server/crud/index.php';

$users = getAllData('users');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin CARIKOST | LIST USERS</title>
    <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   <!-- Navbar -->
    <?php include "/laragon/www/client/admin/components/navbar.php"?>
      <!-- /.navbar -->

     <?php include "/laragon/www/client/admin/components/sidebar.php" ?>
    <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">List Users</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Users</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                     <th>Status</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = $users->fetch_assoc()): ?>
                                <tr>
                                    <td><img src="<?php echo $row['url_path']; ?>" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;"></td>
                                    <td><?php echo $row['full_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['user_type']; ?></td>
                                    <td>
                                      <?php echo $row['phone']; ?>
                                    </td>
                                        <td>
                                        <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include "/laragon/www/client/admin/components/footer.php"?>
</div>
<script src="admin/plugins/jquery/jquery.min.js"></script>
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>
