<?php 
include("../../koneksi.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['outlet'];
    $jenis_paket = $_POST['jenis_paket'];
    $nama_paket= $_POST['nama_paket'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO tb_paket (id_outlet, jenis, nama_paket, harga) VALUES ('$nama', '$jenis_paket', '$nama_paket', '$harga')";

    if (mysqli_query($koneksi, $query)) {
        header("location:../paket.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}

?>