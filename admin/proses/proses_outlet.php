<?php 
include("../../koneksi.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['no_telpon'];

    $query = "INSERT INTO tb_outlet (nama_outlet, alamat, tlp) VALUES ('$nama', '$alamat', '$tlp')";

    if (mysqli_query($koneksi, $query)) {
        header("location:../outlet.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}

?>