<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the 'id' parameter is set and is a valid integer
    $cucian = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Validate other form fields if needed

    // Retrieve updated values from the form
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    

    // Update the outlet in the database
    $updateSql = "UPDATE tb_transaksi SET status = '$status', dibayar = '$dibayar' WHERE id = $cucian";

    if (mysqli_query($koneksi, $updateSql)) {
        echo "updated successfully!";
        // Redirect to the page where you display the outlets or any other appropriate page
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error updating: " . mysqli_error($koneksi);
    }
} else {
    // If the request is not a POST request, redirect to an error page or handle it accordingly
    //header("Location: error.php");
    exit();
}
?>