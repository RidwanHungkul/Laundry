<?php 
include '../../koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_outlet WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Outlet</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 border p-4 mx-auto">
        <h2>Edit Outlet</h2>
        <?php $data = mysqli_fetch_assoc($result); ?>
        <div class="modal-body">
          <form action="../proses/proses_edit_outlet.php?id=<?= $data['id'] ?>" method="post">
            <div class="form-group">
              <label for="namaOutlet">Nama Outlet:</label>
              <input type="text" class="form-control" id="namaOutlet" name="nama" value="<?= $data['nama_outlet'] ?>">
            </div>
            <div class="form-group">
              <label for="alamatOutlet">Alamat Outlet:</label>
              <textarea class="form-control" id="alamatOutlet" name="alamat"><?= $data['alamat'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="tlpOutlet">Telepon Outlet:</label>
              <input type="int" class="form-control" id="tlpOutlet" name="tlp" value="<?= $data['tlp']?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="../outlet.php" style="text-decoration:none; color:white">Close</a></button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
