<?php
    session_start();

    if(isset($_SESSION["login2"])){
        header("location: ../data-kelas2.php");
        exit;
    }

    require '../function.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Siswa</title>

    <!-- Custom fonts for this template -->
    <link href="style/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="style/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><i>Smart <br>School</i></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="data-kelas1.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Siswa</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../data-kepsek.php">Data Kepala Sekolah</a>
                        <a class="collapse-item" href="../data-admin.php">Data Admin</a>
                        <a class="collapse-item" href="../data-guru.php">Data Guru</a>
                        <a class="collapse-item" href="../data-staff.php">Data Staff</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../kontak.php">
                    <i class="fa fa-info-circle"></i>
                    <span>Kontak</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang, Guru</span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!------------------------->

                <div class="card" style="box-shadow: 0 2px 4px rgba(0,0,0,0.6);"> 
                <div class="card-header"> 
                    <ul class="nav nav-tabs card-header-tabs"> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="data-kelas1.php">Kelas 1</a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link active" href="data-kelas2.php">Kelas 2</a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="data-kelas3.php">Kelas 3</a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="data-kelas4.php">Kelas 4</a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="data-kelas5.php">Kelas 5</a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="data-kelas6.php">Kelas 6</a> 
                        </li>
                    </ul> 
                </div>

                <div class="d-sm-flex align-items-center justify-content-between ml-4 mt-2">
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
                                            <th class="text-center">NIS</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <!--- Untuk melakukan pengulangan pada array --->
                                        
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td>12345</td>
                                            <td>Idham Firhanudin</td>
                                            <td class="text-center">
                                                <a href="detail-guru.php?id_guru=<?= $row["id_guru"]; ?>" class=""><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                      <?php $i++; ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                </div> 
                </div>

                    <!------------------------->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include '../../footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Kode Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div>
                        <input type="text" name="nama_kelas" class="form-control"  placeholder="Masukkan nama kelas" required autocomplete="off">
                    </div><br>
                    <div>
                        <input type="password" name="kode" class="form-control"  placeholder="Masukkan kode" required autocomplete="off">
                    </div><br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="login" class="btn btn-success">Konfirmasi</button>
                </form>

                <?php 
                    if (isset($_POST['login'])) {
                    $nama_kelas = ($_POST['nama_kelas']);
                    $kode = ($_POST['kode']);

                    $sql = "SELECT * FROM kode_kelas WHERE nama_kelas=LOWER('$nama_kelas') AND kode='$kode';";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();

                    if (!empty($row)) {
                        $_SESSION["login2"] = true;
                        echo "<script> alert('Berhasil') </script>";
                        echo "<script> location= '../data-kelas2.php'; </script>";
                    } else{
                        echo "<script> alert('Anda salah memasukkan nama kelas / kode kelas!') </script>";
                    }
                }
                 ?>
            </div>
        </div>
        <div class="modal-footer"></div>
        </div>
    </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin akan logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="style/vendor/jquery/jquery.min.js"></script>
    <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="style/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="style/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="style/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="style/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="style/js/demo/datatables-demo.js"></script>

</body>

</html>