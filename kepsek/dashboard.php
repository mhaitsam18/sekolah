<?php 
    $conn = mysqli_connect("localhost", "root", "", "pendataan");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Kepala Sekolah</title>

    <link rel="icon" type="image/png" href="../style/tutwuri.jpeg">

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

                    <?php 
                        $query1 = $conn->query("SELECT * FROM data_admin");
                        $query2 = $conn->query("SELECT * FROM data_guru");
                        $query3 = $conn->query("SELECT * FROM data_kepsek");
                        $query4 = $conn->query("SELECT * FROM data_staff");

                        $jumlahAdmin = mysqli_num_rows($query1);
                        $jumlahGuru = mysqli_num_rows($query2);
                        $jumlahKepsek = mysqli_num_rows($query3);
                        $jumlahStaff = mysqli_num_rows($query4);
                    ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Data Admin Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAdmin ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="data-admin.php" class="card-link text-dark">Lihat <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Data Guru Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Guru</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahGuru ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="data-guru.php" class="card-link text-dark">Lihat <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Data Siswa Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Siswa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="data-kelas1.php" class="card-link text-dark">Lihat <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Data Staff Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Staff</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahStaff ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="data-staff.php" class="card-link text-dark">Lihat <i class="fas fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------------------->

                </div>
                <!-- /.container-fluid -->

<?php include 'views/footer.php'; ?>

</html>