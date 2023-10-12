<?php 
    session_start();

    if (empty($_SESSION['login'])) {
        header("location: ../login.php");
        exit;
    }
    
    require 'function.php';

    $id = $_GET["id"];
    
    $info = query("SELECT * FROM informasi WHERE id = $id");
    
    // cek button submit
    if(isset($_POST['submit'])){

        // cek data berhasil diubah atau tidak
        if (ubahInfo($_POST) > 0) {
            echo "
                <script>
                    alert('berhasil diubah');
                    document.location.href = 'informasi.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('gagal diubah');
                    document.location.href = 'informasi.php';
                </script>";
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Informasi</title>

    <!-- Custom fonts for this template -->
    <link href="tampilan/style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="tampilan/style/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="tampilan/style/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<?php include 'tampilan/header.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!------------------------->

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Admin</h1>
        </div>

        <div class="card-body">
		      <form method="post" action="" enctype="multipart/form-data">
		          <div>
		              <input type="text" name="judul" class="form-control"  placeholder="Masukkan judul" required autocomplete="off" value="<?= $info['judul']; ?>">
		          </div><br>
		          <div>
		              <input type="text" name="deskripsi" class="form-control"  placeholder="Masukkan deskripsi" required autocomplete="off" value="<?= $info['deskripsi']; ?>">
		          </div><br>
		          <div>
		              <input type="date" name="waktu" class="form-control"  placeholder="Masukkan waktu" required autocomplete="off" value="<?= $info['waktu'] ?>">
		          </div><br>
		          <a href="data-admin.php" class="btn btn-secondary">Batal</a>
		          <button type="submit" name="submit" class="btn btn-success">Simpan</button>
		      </form>
		  </div>

        <!------------------------->

    </div>
    <!-- /.container-fluid -->

<?php include 'tampilan/footer-informasi.php'; ?>

</html>