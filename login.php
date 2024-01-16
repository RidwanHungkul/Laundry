<?php
include 'koneksi.php';

//echo password_hash('123', PASSWORD_BCRYPT);
// Proses login
session_start();

if(isset($_POST['login'])){
    // dd($_POST);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $admin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");
    
    if($data = mysqli_fetch_assoc($admin)){
      if(password_verify($password, $data['password'])){
        $_SESSION['username'] = $data['username'];
        
        if($data['role'] == 'admin'){
          $_SESSION['id'] = $data['id'];
          $_SESSION['role'] = $data['role'];
          header('location: admin/index.php');
        }
        elseif($data['role'] == 'kasir'){
          $_SESSION['id'] = $data['id_outlet'];
          $_SESSION['role'] = $data['role'];
          header('location: kasir/index.php');
        }
        elseif($data['role'] == 'owner'){
          $_SESSION['role'] = $data['role'];
          header('location: owner/index.php');
        }
        //header('location: admin/index.php');
      } else {
        echo "username dan password salah";
      }
    } else {
      echo "akun tidak ada";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline ">
    <div class="card-header text-center">
      <h1>Laundry</h1>
    </div>
    <div class="card-body">

      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mb-3" style="margin:0 auto;">
            <button type="submit" class="btn btn-primary btn-block" name='login'>Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>
