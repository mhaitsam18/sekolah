<?php 
    session_start();

    if (empty($_SESSION['login'])) {
        header("location: ../login.php");
        exit;
    }
    
    require '../koneksi/Admin.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Admin</title>

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<?php include 'views/header.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!------------------------->

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <marquee class="font-weight-bold text-primary style="margin-bottom: -5px;">Detail Data Admin - SDN 2 Ciangir</marquee>
                    </div>
                    <div class="row">
                        <?php $adm = $admin->detail_admin($_GET['id_admin']); ?>
                        <?php foreach ($adm as $row) : ?>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="text-center">    
                                    <img src="<?= $row["foto"] ?>" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                                    <h5 class="card-title mt-3"><?= $row["nama_lengkap"];?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h6 class="font-weight-bold text-dark">NIP</h6>
                                        <small><?= $row['nip']; ?></small>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="font-weight-bold text-dark">Jenis Kelamin</h6>
                                        <small><?= $row['jenis_kelamin']; ?></small>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="font-weight-bold text-dark">Alamat</h6>
                                        <small><?= $row['alamat']; ?></small>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="font-weight-bold text-dark">Email</h6>
                                        <small><?= $row['email']; ?></small>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="font-weight-bold text-dark">Pendidikan Terakhir</h6>
                                        <small><?= $row['pendidikan']; ?></small>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-danger btn-sm mt-3"><i class="fas fa-trash-alt"> Hapus</i></a>
                                <a href="ubah-admin.php?id_admin=<?= $row['id_admin'] ?>" class="btn btn-warning btn-sm mt-3"><i class="fas fa-user-edit"> Edit</i></a>
                                <a href="data-admin.php" class="btn btn-light btn-sm mt-3">Kembali</i></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
            
        <!------------------------->

    </div>
    <!-- /.container-fluid -->

<?php include 'views/footer-admin.php'; ?>

</html>