<?php include "../session-start.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard - SDM</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Add custom CSS here -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="chartjs/Chart.js"></script>
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
            <h1>Dashboard <small>SDM</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>  
            <?php include "../notifikasi1.php"?>
          </div>
        </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <?php include '../koneksi.php'; ?>
        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                  	<?php
						include '../koneksi.php';
					    $data = mysqli_query($koneksi,
					    "SELECT COUNT(*) AS jml_pegawai
              FROM pegawai
              WHERE status_bekerja='Aktif'");
					    while($d = mysqli_fetch_array($data)){
					?>
                    <p class="announcement-heading"><?php echo $d['jml_pegawai']; ?></p>
                    <p class="announcement-text">Pegawai Aktif</p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-user-md fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                  	<?php
						include '../koneksi.php';
					    $data = mysqli_query($koneksi,
					    "SELECT COUNT(*)
					    AS jml_tetap
					    FROM pegawai
					    WHERE status_kepegawaian = 'tetap'");
					    while($d = mysqli_fetch_array($data)){
					?>
                    <p class="announcement-heading"><?php echo $d['jml_tetap']; ?></p>
                    <p class="announcement-text">Pegawai Tetap</p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-user-md fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                  	<?php
						include '../koneksi.php';
					    $data = mysqli_query($koneksi,
					    "SELECT COUNT(*)
					    AS jml_medis
					    FROM pegawai
					    WHERE jabatan = 'Tenaga Medis'");
					    while($d = mysqli_fetch_array($data)){
					?>
                    <p class="announcement-heading"><?php echo $d['jml_medis']; ?></p>
                    <p class="announcement-text">Tenaga Medis</p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-stethoscope fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                  	<?php
						include '../koneksi.php';
					    $data = mysqli_query($koneksi,
					    "SELECT COUNT(*)
					    AS jml_nonmedis
					    FROM pegawai
					    WHERE jabatan = 'Pegawai Non Medis'");
					    while($d = mysqli_fetch_array($data)){
					?>
                    <p class="announcement-heading"><?php echo $d['jml_nonmedis']; ?></p>
                    <p class="announcement-text">Dokter Umum</p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
<div class="row">
    <?php include 'diagram_statuskerja.php'; ?>
    <?php include 'diagram_jeniskelamin.php'; ?>
</div><br><br><!----- /row ------>
    <div class="row">
    <?php include 'diagram_jabatan.php'; ?>
   </div><!----- /row ------>
<br><br><?php include "../copyright.php";?>
      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="../js/morris/chart-data-morris.js"></script>
    <script src="../js/tablesorter/jquery.tablesorter.js"></script>
    <script src="../js/tablesorter/tables.js"></script>
  </body>
</html>
