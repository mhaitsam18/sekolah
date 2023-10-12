<?php 
    session_start();

    if (empty($_SESSION['login'])) {
        header("location: ../login.php");
        exit;
    }
    
    require '../koneksi/Informasi.php';
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

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Informasi</h6>
            </div>

            <div class="d-sm-flex align-items-center justify-content-between ml-4 mt-2 ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>Tambah Data
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $info = $informasi->read_info(); ?>
                            <?php $i = 1; ?>
                            <!--- Untuk melakukan pengulangan pada array --->
                            <?php foreach ($info as $row) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td><?= $row["judul"];?></td>
                                <td><?= $row["deskripsi"];?></td>
                                <td><?= $row["waktu"];?></td>
                                <td class="text-center">
                                    <a href="../koneksi/Informasi.php?delete_info=<?= $row["id"]; ?>" onclick="return confirm('Yakin akan menghapus?')" class=""><i class="fas fa-trash"></i></a>
                                    <a href="ubah-informasi.php?id=<?= $row["id"]; ?>" class=""><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!------------------------->

    </div>
    <!-- /.container-fluid -->

<?php include 'views/footer-informasi.php'; ?>

</html>