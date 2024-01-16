<?php 
include("../../koneksi.php");

$id = $_GET['id'];
$sql = "SELECT * FROM tb_paket WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

$sql1 = "SELECT * FROM tb_outlet";
$result1 = mysqli_query($koneksi, $sql1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Paket</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <?php $data = mysqli_fetch_assoc($result); ?>
    <div class="body mx-auto border p-4 col-md-6"> <!-- Menambahkan class 'border' dan 'p-4' untuk memberikan padding -->
    <h2>Edit Paket</h2>
      <form action="../proses/proses_edit_paket.php?id=<?= $id ?>" method="post">
        <div class="form-group">
          <?php
                    // Tampilkan opsi dalam formulir
                    if ($result1) {
                        echo "<div class='form-group'>";
                        echo "<label for='outlet'>Outlet:</label>";
                        echo "<select class='form-control' name='outlet' required>";

                        while ($row = mysqli_fetch_assoc($result1)) {
                            $nama_outlet = $row['nama_outlet'];
                            $id_outlet = $row['id'];
                            echo "<option value='$id_outlet'>$nama_outlet</option>";
                        }

                        echo "</select>";
                        echo "</div>";
                    } else {
                        echo "Gagal mengambil data outlet.";
                    }
                    ?>
        </div>
        <div class="form-group">
          <label for="jenis_paket">Jenis Paket:</label>
                        <select name="jenis_paket" class="form-control">
                            <option value="kiloan">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option value="bed_cover">Bed Cover</option>
                            <option value="kaos">Kaos</option>

                        </select>
        </div>
        <div class="form-group">
          <label for="nama_paket">Nama Paket:</label>
          <input type="text" class="form-control" name="nama_paket" value="<?= $data['nama_paket']?>">
        </div>
        <div class="form-group">
          <label for="harga">Harga:</label>
          <input type="text" class="form-control" name="harga" value="<?= $data['harga']?>">
        </div>
        <div class="footer text-center"> <!-- Menambahkan class 'text-center' untuk membuat footer terpusat -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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