<?php include "../session-start.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kepegawaian | RSKIA Rachmi</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <nav>
    <div id="wrapper">
      <?php include "menu.php"; ?>   
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Form <small>Tambah Pegawai</small></h1>
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Form Pegawai</li>
            </ol>
            <?php include "../notifikasi1.php"?>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-6">
            <form method="post" action="pegawai_prosestambah.php" role="form">
              <div class="form-group">
                <label>No.Absen</label>
                <input class="form-control" type="text" name="nik" placeholder="Nomor Absen Pegawai">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="nama_user" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl_lahir">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" type="text" name="sex">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6">
            	<div class="form-group">
                <label>Masuk</label>
                <input class="form-control" type="date" name="tanggal_masuk">
              </div>
              <div class="form-group">
                <label>Keluar</label>
                <input class="form-control" type="date" name="tanggal_keluar">
              </div>
              <div class="form-group">
                <label>Status Bekerja</label>
                <select class="form-control" type="text" name="status">
                  <option>FT</option>
                  <option>PT</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nomor SIP</label>
                <input class="form-control" type="text" name="nomor_sip" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Nomor STR</label>
                <input class="form-control" type="text" name="nomor_str" placeholder="Masukkan..">
              </div>
              <div class="form-group">
                <label>Unit</label>
                <select class="form-control" type="text" name="id_unit">
                  <option>Direktur</option>
                  <option>Dokter Spesialis</option>
                  <option>Dokter Umum</option>
                  <option>Tenaga Medis</option>
                  <option>Pegawai Non Medis</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control" type="text" name="dokter">
				    <option value = "">---Pilihan---</option>
				    <?php
				    include '../koneksi.php';
				    $data = mysqli_query($koneksi,"SELECT * FROM psdi_jabatan;");
					while($d = mysqli_fetch_array($data)){
				      echo "<option value='{".$d['nama_jabatan']."}'></option>";
				    }
				    ?>
      			</select>
              </div>
              <button type="submit" class="btn btn-success">Tambah</button>
              <button type="reset" class="btn btn-warning">Reset</button>  
            </form>
          </div>
        </div><!-- /.row -->
      </div><br><br><?php include "../copyright.php";?><br><br><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>