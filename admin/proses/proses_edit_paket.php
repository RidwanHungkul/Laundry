<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the 'id' parameter is set and is a valid integer
    $paketId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Validate other form fields if needed

    // Retrieve updated values from the form
    $nama = $_POST['outlet'];
    $jenis_paket = $_POST['jenis_paket'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];

    // Update the outlet in the database
    $updateSql = "UPDATE tb_paket SET id_outlet = '$nama', jenis = '$jenis_paket', nama_paket='$nama_paket', harga='$harga' WHERE id = '$paketId'";

    if (mysqli_query($koneksi, $updateSql)) {
        echo "Outlet updated successfully!";
        // Redirect to the page where you display the outlets or any other appropriate page
        header("Location: ../paket.php");
        exit();
    } else {
        echo "Error updating outlet: " . mysqli_error($koneksi);
    }
} else {
    // If the request is not a POST request, redirect to an error page or handle it accordingly
    //header("Location: error.php");
    exit();
}
?>