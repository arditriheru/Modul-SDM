<?php 
// koneksi database
include '../koneksi.php';
// menangkap data id yang di kirim dari url
$id_admin = $_GET['id_admin'];
// menghapus data dari database
mysqli_query($koneksi,"delete from admin where id_admin='$id_admin'");
// mengalihkan halaman kembali ke index.php
header("location:user_tampil");
?>