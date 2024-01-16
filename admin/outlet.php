<?php 
include '../koneksi.php';
session_start();

if(!$_SESSION["id"]){
  header("Location:../login.php");
}

$sql = "SELECT * FROM tb_outlet";
$result = mysqli_query($koneksi, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Outlet Laundry</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../dashboard/index3.html" class="nav-link">Home</a>
      </li>
    </ul>
       <a onclick="return confirm('Apakah Anda yakin ingin keluar?')" href="../logout.php" style="position:relative; left:85%;"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 25px;"></i></a>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <div>
      <img src="../dashboard/dist/img/L.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      </div>
      <span class="brand-text font-weight-light"><b>L</b>aundry</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="outlet.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-shop"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pengguna.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="paket.php" class="nav-link">
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
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input/add_cucian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cucian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="input/add_registrasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="input/add_outlet.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Outlet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="input/add_paket.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="input/add_pengguna.php" class="nav-link">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Outlet Laundry</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class="content">
  <div class="container-fluid">
    <h5 class="mb-2">Cabang Outlet Laundry</h5>

    <div class="row">
      <?php 
        $counter = 1; // Counter untuk menentukan ID
        while($data=mysqli_fetch_assoc($result)) :
          mysqli_field_seek($result,0);
          $kelasCSS = ($counter % 2 === 1) ? 'bg-primary' : 'bg-danger'; // Logika untuk menentukan kelas CSS
      ?>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <!-- Icon Outlet -->
          <span class="info-box-icon <?= $kelasCSS ?>" style="height:70px"><i class="nav-icon fas fa-solid fa-shop"></i></span>

          <div class="info-box-content">
            <!-- Nama Outlet -->
            <span class="info-box-text"><?= $data['nama_outlet'] ?></span>
            <!-- Alamat Outlet -->
            <span class="info-box-number"><?= $data['alamat'] ?></span>
          <div class="aksi d-flex" style="margin-left:60px">

            <!-- Tombol Edit -->
            <a href="edit/edit_outlet.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm mr-1">Edit</a>
        
            <!-- Tombol Hapus -->
            <a href="delete/delete_outlet.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
          </div>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <?php 
        $counter++; // Tambahkan counter setiap kali iterasi
        endwhile 
      ?>
    </div>
    <!-- /.row -->
  </div>
</section>


  </div>
</div><!-- /.container-fluid -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">Laundry.io</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dashboard/dist/js/demo.js"></script>
</body>
</html>
