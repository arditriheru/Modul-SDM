<?php include "../session-start.php";?>
<?php 
  include '../koneksi.php';
  $id_admin = $_GET['id_admin'];
  $no = 1;
  $data = mysqli_query($koneksi,"select * from admin where id_admin='$id_admin';");
  while($d = mysqli_fetch_array($data)){
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
            <h1>Tabel <small>User</small></h1>
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li><a href="pegawai_tampil.php"><i class="fa fa-user"></i> User</a></li>
              <li class="active"><i class="fa fa-edit"></i> Detail</li>
            </ol>
            <?php include "../notifikasi1.php"?>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-6">
            <form method="post" action="user_prosesedit.php?id_admin=<?php echo $d['id_admin']; ?>" role="form">
              <div class="form-group">
                <label>Unit</label>
                <select class="form-control" type="text" name="unit">
                  <option>SDM</option>
                  <option>Manajemen</option>
                </select>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" 
                value="<?php echo $d['username']; ?>">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" 
                value="<?php echo $d['password']; ?>">
              </div>
	              <button type="submit" class="btn btn-success">Edit</button>
	              <button type="reset" class="btn btn-warning">Reset</button>  
              </div>
            </form>
          </div>
        </div><!-- /.row -->
              <?php 
                }
              ?>
      </div><br><br><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>