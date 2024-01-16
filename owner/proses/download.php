<?php
require('laporan.php');

require("../../koneksi.php");

$id = $_GET['id'];
$sql = "SELECT tb_transaksi.*,tb_outlet.nama_outlet,tb_member.member,tb_user.nama, tb_transaksi.id FROM `tb_transaksi` INNER JOIN tb_outlet ON tb_transaksi.id_outlet=tb_outlet.id INNER JOIN tb_member ON tb_transaksi.id_member=tb_member.id INNER JOIN tb_user ON tb_transaksi.id_user=tb_user.id WHERE tb_transaksi.id = '$id';";
$result = mysqli_query($koneksi,$sql);

$data_transaksi = mysqli_fetch_assoc($result);

// Buat instance dari class LaporanPDF
$pdf = new LaporanPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$heeader = ['asep'];

// Buat data yang akan ditampilkan di laporan

$data = array(
    array(
    'id_member' => $data_transaksi['member'],
    'id_outlet' => $data_transaksi['nama_outlet'],
    'tgl' => $data_transaksi['tgl'],
    'batas_waktu' => $data_transaksi["batas_waktu"],
    'tgl_bayar' => $data_transaksi['tgl_bayar'],
    'status' => $data_transaksi['status'],
    'dibayar' => $data_transaksi['dibayar'],
    'nominal' => $data_transaksi['nominal'],
    'id_user' => $data_transaksi['nama'],
),

);
// Tambahkan isi laporan dengan memanggil fungsi IsiLaporan
$pdf->IsiLaporan($data);

// Output laporan dalam format PDF
$pdf->Output();
?>