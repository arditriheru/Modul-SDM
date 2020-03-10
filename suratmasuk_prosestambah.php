<?php 
// koneksi database
include '../koneksi.php';
// menangkap data yang di kirim dari form
$nomor_surat = $_POST['nomor_surat'];
$tanggal = $_POST['tanggal'];
$perihal = $_POST['perihal'];
$tujuan = $_POST['tujuan'];
$asal = $_POST['asal'];
// menginput data ke database
mysqli_query($koneksi,"insert into surat_masuk values('','$nomor_surat','$tanggal','$perihal','$tujuan',
	'$asal')");
// mengalihkan halaman kembali ke index.php
header("location:suratmasuk_tambah.php");
?>