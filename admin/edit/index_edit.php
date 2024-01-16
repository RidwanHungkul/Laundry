<?php 
include '../../koneksi.php';

$id = $_GET['id'];

$sql = "SELECT tb_transaksi.*,tb_outlet.nama_outlet,tb_member.member FROM `tb_transaksi` INNER JOIN tb_outlet ON tb_transaksi.id_outlet=tb_outlet.id INNER JOIN tb_member ON tb_transaksi.id_member=tb_member.id ";
$result = mysqli_query($koneksi,$sql);
$sql6 = "SELECT tb_transaksi.*,tb_outlet.nama_outlet,tb_member.member FROM `tb_transaksi` INNER JOIN tb_outlet ON tb_transaksi.id_outlet=tb_outlet.id INNER JOIN tb_member ON tb_transaksi.id_member=tb_member.id  WHERE tb_transaksi.id='$id'";
$result6 = mysqli_query($koneksi,$sql6);
$sql2 = "SELECT * FROM tb_transaksi";
$result2 = mysqli_query($koneksi,$sql2);
$sql3 = "SELECT * FROM tb_transaksi WHERE status='pencucian'";
$result3 = mysqli_query($koneksi,$sql3);
$sql4 = "SELECT * FROM tb_transaksi WHERE status='pengeringan'";
$result4 = mysqli_query($koneksi,$sql4);
$sql5 = "SELECT * FROM tb_transaksi WHERE status='selesai'";
$result5 = mysqli_query($koneksi,$sql5);

// var_dump(mysqli_fetch_assoc($result6));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Laundry</title>

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
    <a onclick="return confirm('Apakah Anda yakin ingin keluar?')" href="login.php" style="position:relative; left:85%;"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 25px;"></i></a>
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
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
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
            <a href="#" class="nav-link">
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
                <a href="add_outlet.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Outlet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($result2)?></h3>

                <p>Jumlah Pesanan</p>
              </div>
              <div class="icon">
                <i style="font-size: 50px; display:flex; top:24%;" class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($result3)?></h3>

                <p>Pencucian</p>
              </div>
              <div class="icon">
                <i style="font-size: 50px; display:flex; top:24%;" class="fa-solid fa-shirt"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="color:white !important">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($result4)?></h3>

                <p>Pengeringan</p>
              </div>
              <div class="icon">
                <i style="font-size: 50px; display:flex; top:24%;" class="fa-solid fa-wind"></i>
              </div>
              <a href="#" style="color:white !important" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo mysqli_num_rows($result5)?></h3>

                <p>Selesai</p>
              </div>
              <div class="icon">
                <i style="font-size: 50px; display:flex; top:24%;" class="fa-solid fa-check"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <a href="../index.php"><button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></a>
                </div>
                <?php 
                if($result6){
                  $row = mysqli_fetch_assoc($result6) ;
                ?>
                <form action="../proses/proses_edit.php?id=<?=$row['id'] ?>" method="post">
                  <div class="modal-body">
                    <!-- Isi formulir edit di sini -->
                    <div class="form_group">
                      <p>Member : <?=$row['member'] ?></p>
                    </div>
                        <div class="form-group">
                            <label for="nama">Status:</label>
                            <select class="form-control" name="status" value=<?=$row['status'] ?>>
                                <option value="" <?=($row['status'] == '') ? 'selected' : ''?>>Pilih</option>
                                <option value="pencucian" <?=($row['status'] == 'pencucian') ? 'selected' : ''?>>Pencucian</option>
                                <option value="pengeringan" <?=($row['status'] == 'pengeringan') ? 'selected' : ''?>>Pengeringan</option>
                                <option value="selesai" <?=($row['status'] == 'selesai') ? 'selected' : ''?>>Selesai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Keterangan:</label>
                            <select class="form-control" name="dibayar" value=<?=$row['dibayar']?> >
                               <option value="" <?=($row['dibayar'] == '') ? 'selected' : ''?>>Pilih</option>
                                <option value="dibayar" <?=($row['dibayar'] == 'dibayar') ? 'selected' : ''?>>Lunas</option>
                                <option value="belum_dibayar" <?=($row['dibayar'] == 'belum_dibayar') ? 'selected' : ''?>>Belum Lunas</option>
                            </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="../index.php"><button type="button" class="btn btn-secondary">Tutup</button></a>
                  </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>

        <?php 
        //echo password_hash("122", PASSWORD_BCRYPT);
        ?>

        <!-- Tabel Detail -->
        <table class="table">
    <?php 
        echo   "<thead class='thead-light'><tr><th>Outlet</th><th>Member</th><th>Tanggal</th><th>Batas Waktu</th><th>Status</th><th>Keterangan</th><th>Aksi</th></th></tr></thead><tbody>";
    if ($result->num_rows > 0) {
      // while ($ruw = $result3->fetch_assoc()) {
      //   mysqli_data_seek($result,0);
      // while ($riw = $result2->fetch_assoc()) {
      //   mysqli_data_seek($result,0);
        while ($row = $result->fetch_assoc()) {
          
          echo "<tr>";
              echo "<td>" . $row["nama_outlet"] . "</td>";
              echo "<td>" . $row["member"] . "</td>";
              echo "<td>" . $row["tgl"] . "</td>";
              echo "<td>" . $row["batas_waktu"] . "</td>";
              echo "<td>" . $row["status"] . "</td>";
              echo "<td>" . $row["dibayar"] . "</td>";
              echo "<td>
                      <a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>
                    </td>";
              // echo "<td>
              //         <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'>Hapus</a>
              //       </td>";
            
          //   }
          // }
          echo "</tr>";
              }
        echo "</tbody></table>";
    } else {
        echo "Tidak ada data ditemukan.";
    }       
    ?>
</table>



    </section>
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
<!-- AdminLTE ../../dashboard demo (This is only for demo purposes) -->
<script src="../../dashboard/dist/js/pages/../../dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk menampilkan modal secara otomatis -->
    <script>
        $(document).ready(function(){
            $('#editModal').modal('show');
        });
    </script>
</body>
</html>
