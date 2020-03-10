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

    <title>Kepegawaian | Tambah Surat</title>

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
            <h1>Form <small>Tambah Surat</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Form</li>
            </ol>

            <?php include "notifikasi1.php"?>

          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">
			<h1>Surat Internal (A)</h1>
            <form method="post" action="suratinternal_prosestambah.php" role="form">

              <div class="form-group">
                <label>Nomor Surat</label>
                <input class="form-control" type="text" name="nomor_surat" placeholder="Masukkan..">
              </div>

			        <div class="form-group">
                <label>Tanggal Surat</label>
                <input class="form-control" type="date" name="tanggal">
              </div>

              <div class="form-group">
                <label>Perihal</label>
                <input class="form-control" type="text" name="perihal" placeholder="Masukkan..">
              </div>

              <div class="form-group">
                <label>Tujuan Surat</label>
                <input class="form-control" type="text" name="tujuan" placeholder="Masukkan..">
              </div>

              <button type="submit" class="btn btn-success">Tambah</button>
              <button type="reset" class="btn btn-warning">Reset</button>  

            </form>

          </div>
          <div class="col-lg-6">
            <h1>Surat Eksternal (B)</h1>

            <form method="post" action="surateksternal_prosestambah.php" role="form">

              <div class="form-group">
                <label>Nomor Surat</label>
                <input class="form-control" type="text" name="nomor_surat" placeholder="Masukkan..">
              </div>

			  <div class="form-group">
                <label>Tanggal Surat</label>
                <input class="form-control" type="date" name="tanggal">
              </div>

              <div class="form-group">
                <label>Perihal</label>
                <input class="form-control" type="text" name="perihal" placeholder="Masukkan..">
              </div>

              <div class="form-group">
                <label>Tujuan Surat</label>
                <input class="form-control" type="text" name="tujuan" placeholder="Masukkan..">
              </div>

              <button type="submit" class="btn btn-success">Tambah</button>
              <button type="reset" class="btn btn-warning">Reset</button>  

            </form>
            
          </div>
        </div><!-- /.row -->

      </div><br><br><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>