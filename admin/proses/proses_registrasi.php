<?php
// Pastikan file koneksi.php sesuai dengan konfigurasi database Anda
include '../../koneksi.php';



// Periksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO tb_member (member, jenis_kelamin, alamat, tlp)
     VALUES ('$nama', '$jeniskelamin', '$alamat', '$telpon')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("location:../index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}
?>
