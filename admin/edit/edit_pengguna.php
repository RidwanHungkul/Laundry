<?php 
include '../../koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_user WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengguna</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <?php $data = mysqli_fetch_assoc($result); ?>
    <div class="body mx-auto border p-4 col-md-6"> <!-- Menambahkan class 'border' dan 'p-4' untuk memberikan padding -->
    <h2>Edit Pengguna</h2>
      <form action="../proses/proses_edit_pengguna.php?id=<?= $data['id'] ?>" method="post">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" value="<?= $data['password']?>">
        </div>
        <div class="form-group">
          <label for="role">Role:</label>
          <select class="form-control" name="role" required>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
          </select>
        </div>
        <div class="footer text-center"> <!-- Menambahkan class 'text-center' untuk membuat footer terpusat -->
          <a href="../pengguna.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Include Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


