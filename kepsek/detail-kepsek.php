<?php 
    require '../koneksi/Kepsek.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Kepala Sekolah</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Detail Data Kepala Sekolah</h1>

                    
                    <div class="card-deck" style="box-shadow: 0 2px 4px rgba(0,0,0,0.6);">
                        <div class="col-md-10 col-sm-10 mb-3">
                            <div class="card-body">

                            <table class="table table-borderless" align="center">
                                <tbody>
                                    <?php $ks = $kepsek->read_kepsek(); ?>
                                    <?php foreach ($ks as $row) : ?>
                                    <tr>
                                        <td>NIP</td>
                                        <td>:</td>
                                        <td><?= $row["nip"];?></td>
                                        <td rowspan="4"><img width="200" height="200" src="<?= $row["foto"] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td><?= $row["nama_lengkap"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td><?= $row["jenis_kelamin"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= $row["tanggal_lahir"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= $row["alamat"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan</td>
                                        <td>:</td>
                                        <td><?= $row["pendidikan"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?= $row["email"];?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telp</td>
                                        <td>:</td>
                                        <td><?= $row["no_hp"];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="3">
                                            <a href="dashboard.php" class="btn btn-outline-dark"> Edit</a>
                                            <a href="dashboard.php" class="btn btn-outline-dark"> Kembali</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
            
                    <!------------------------->

                </div>
                <!-- /.container-fluid -->

<?php include 'views/footer.php'; ?>

</html>