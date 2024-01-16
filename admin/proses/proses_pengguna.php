<?php 

include("../../koneksi.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $id_outlet = $_POST['id_outlet'];
    $role = $_POST['role']; 

    $query = "INSERT INTO tb_user (nama, username, password, id_outlet, role) VALUES ('$nama', '$username', '$hashed_password', '$id_outlet', '$role')";

    if (mysqli_query($koneksi, $query)) {
        header("location:../pengguna.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}

?>