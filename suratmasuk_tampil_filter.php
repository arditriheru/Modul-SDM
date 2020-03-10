<?php 
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.php'); }
else { $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kepegawaian | RSKIA Rachmi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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
            <h1>Tabel <small>Surat Masuk</small></h1>
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Surat Masuk</li>
            </ol>

            <?php include "notifikasi1.php"?>

          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">
            <form method="post" action="suratmasuk_tampil.php" role="form">
              <div class="form-group">
                <label>Dari Tanggal</label>
                <input class="form-control" type="date" name="tanggal_awal">
              </div>
          </div>
          <div class="col-lg-6">
              <div class="form-group">
                <label>Sampai Tanggal</label>
                <input class="form-control" type="date" name="tanggal_akhir">
              </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
          <div align="center" class="col-lg-12">
            <button type="submit" class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
      </div><!-- /.row -->
          </form>

      </div><br><br><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>