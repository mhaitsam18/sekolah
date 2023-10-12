<?php 
    require '../koneksi/Staff.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Staff</title>

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
                            <h6 class="m-0 font-weight-bold text-primary">Data Staff</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Posisi</th>
                                            <th class="text-center">No Telp</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $stf = $staff->read_staff(); ?>
                                        <?php $i = 1; ?>
                                        <!--- Untuk melakukan pengulangan pada array --->
                                        <?php foreach ($stf as $row) : ?>
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= $row["nama_lengkap"];?></td>
                                            <td><?= $row["jenis_kelamin"];?></td>
                                            <td><?= $row["alamat"];?></td>
                                            <td><?= $row["posisi"];?></td>
                                            <td><?= $row["no_telp"];?></td>
                                            <td><img src="<?= $row['foto']; ?>"></td>
                                            <td class="text-center">
                                                <a href="hapus-data-staff.php?id_staff=<?= $row["id_staff"]; ?>" class=""><i class="fas fa-trash"></i></a>
                                                <a href="ubah-data-staff.php?id_staff=<?= $row["id_staff"]; ?>" class=""><i class="fas fa-edit"></i></a>
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

<?php include 'views/footer.php'; ?>

</html>