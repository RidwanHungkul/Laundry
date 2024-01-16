<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../dashboard/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dashboard/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../dashboard/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../dashboard/plugins/summernote/summernote-bs4.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi Cucian</title>
    <!-- Tautan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
            </ul>
            </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <div>
                    <img src="../../dashboard/dist/img/L.jpg" alt="laundry Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                </div>
                <span class="brand-text font-weight-light"><b>L</b>aundry</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-chart-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../outlet.php" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>
                                    Outlet
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
            <a href="../pengguna.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../paket.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-box"></i>
              <p>
                Paket
              </p>
            </a>
          </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Input
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview menu-open active">
                                <li class="nav-item">
                                    <a href="add_cucian.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cucian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_member.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_outlet.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Outlet</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_paket.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Paket</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_pengguna.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengguna</p>
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
        <div class="content-wraper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 d-flex">
                            <h1 class="m-0" style="position:absolute; left:40%">Input Outlet</h1>
                        </div>
                    </div>
                </div>
            </div>

                <section class="content">
                <form action="../proses/proses_outlet.php" method="POST" style="width:78%; margin-left:20%; margin-top:20px;">
                    <div class="form-group">
                        <label for="nama">Nama Outlet:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_telpon">Nomor Telepon:</label>
                        <input type="tel" class="form-control" name="no_telpon" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </section>
            </div>
        </div>
    <!-- Tautan Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../../dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../dashboard/plugins/moment/moment.min.js"></script>
<script src="../../dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dashboard/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dashboard/dist/js/pages/dashboard.js"></script>
</body>
</html>
