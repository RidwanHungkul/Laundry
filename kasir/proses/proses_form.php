<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari formulir
    $outlet = $_POST["outlet"];
    $kasir = $_POST["kasir"];
    $pelanggan = $_POST["pelanggan"];
    $tanggal = $_POST["tanggal"];
    $batas_waktu = $_POST["batas_waktu"];
    $tgl_bayar = $_POST["tgl_bayar"];
    $berat_cucian = $_POST["berat_cucian"];
    $status = $_POST["status"];
    $keterangan = $_POST["keterangan"];
    $nominal = $_POST ["total"];

    // Lakukan kueri SQL untuk menyimpan data ke database
    $query = "INSERT INTO tb_transaksi (id_outlet, id_user, id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, nominal)
              VALUES ('$outlet', '$kasir', '$pelanggan', '$tanggal', '$batas_waktu', '$tgl_bayar', '$status', '$keterangan', '$nominal')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: ../index.php");
exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Metode HTTP tidak diizinkan.";
}
?>
