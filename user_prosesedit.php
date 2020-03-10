<?php 
// koneksi database
include '../koneksi.php';
// menangkap data yang di kirim dari form
$id_admin 	= $_GET['id_admin'];
$unit		= $_POST['unit'];
$username 	= $_POST['username'];
$password 	= $_POST['password'];
// update data ke database
mysqli_query($koneksi,"update admin set username='$username', password='$password', unit='$unit' where id_admin='$id_admin'");
// mengalihkan halaman kembali ke index.php
header("location:user_tampil.php");
?>