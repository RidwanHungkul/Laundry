<?php
// Pastikan id terkirim melalui parameter GET
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sertakan file koneksi ke database
    include '../../koneksi.php';

    // Ambil nilai id dari parameter GET
    $id = $_GET['id'];

    // Query hapus data
    $query = "DELETE FROM tb_user WHERE id = $id";

    // Eksekusi query
    if ($koneksi->query($query) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    // Tutup koneksi database
    $koneksi->close();
} else {
    echo "ID tidak valid.";
}

// Redirect kembali ke halaman utama setelah menghapus data
header("Location: ../pengguna.php");
exit();
?>
