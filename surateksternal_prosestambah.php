<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nomor_surat = $_POST['nomor_surat'];
$tanggal = $_POST['tanggal'];
$perihal = $_POST['perihal'];
$tujuan = $_POST['tujuan'];

// menginput data ke database
mysqli_query($koneksi,"insert into surat_eksternal values('','$nomor_surat','$tanggal','$perihal','$tujuan')");

// mengalihkan halaman kembali ke index.php
header("location:surat_tambah.php");

?>