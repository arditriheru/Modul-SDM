<?php 
// koneksi database
include '../koneksi.php';
// menangkap data id yang di kirim dari url
$id_petugas = $_GET['id_petugas'];
// menghapus data dari database
mysqli_query($koneksi,"delete from psdi_petugas where id_petugas='$id_petugas'");
// mengalihkan halaman kembali ke index.php
header("location:pegawai-tampil");
?>