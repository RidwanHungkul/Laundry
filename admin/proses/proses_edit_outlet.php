<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the 'id' parameter is set and is a valid integer
    $outletId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Validate other form fields if needed

    // Retrieve updated values from the form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    // Update the outlet in the database
    $updateSql = "UPDATE tb_outlet SET nama_outlet = '$nama', alamat = '$alamat', tlp='$tlp' WHERE id = $outletId";

    if (mysqli_query($koneksi, $updateSql)) {
        echo "Outlet updated successfully!";
        // Redirect to the page where you display the outlets or any other appropriate page
        header("Location: ../outlet.php");
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