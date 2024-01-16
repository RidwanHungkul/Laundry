<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that the 'id' parameter is set and is a valid integer
    $user = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Validate other form fields if needed

    // Retrieve updated values from the form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $role = $_POST['role'];

    // Update the outlet in the database
    $updateSql = "UPDATE tb_user SET nama = '$nama', username = '$username' , password='$hashed_password', role='$role' WHERE id = $user";

    if (mysqli_query($koneksi, $updateSql)) {
        echo "updated successfully!";
        // Redirect to the page where you display the outlets or any other appropriate page
        header("Location: ../pengguna.php");
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