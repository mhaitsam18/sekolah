<?php 
session_start();
    if (!empty($_SESSION['login'])){
        header("location: admin/dashboard.php");
        exit;
    }

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
    

    <title>Login</title>

    <link rel="icon" type="image/png" href="../style/tutwuri.jpeg">


    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                    	<h3 class="text-center font-weight-light my-4">Login Admin</h3><hr>
                        <form method="post" action="koneksi/Admin.php?login">
                            <div class="form-group">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <div class="input-group">
                                	<div class="input-group-prepend">
                                		<div class="input-group-text"> <i class="fas fa-user"></i> </div>
                                	</div>
	                                <input class="form-control py-4" id="inputUsername" type="email" placeholder="Masukkan email anda" name="email" />
	                            </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <div class="input-group">
                                	<div class="input-group-prepend">
                                		<div class="input-group-text"> <i class="fas fa-key"></i> </div>
                                	</div>
	                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Masukkan password anda" name="password" />
	                            </div>
                            </div>
                            <!-- <div class="form-group">
                            	<label>Login sebagai</label>
                                <select class="form-control" name="level">
                                	<option disabled selected>--Pilih Kategori--</option>
                                	<option value="Kepala Sekolah">Kepala Sekolah</option>
                                	<option value="Admin">Admin</option>
                                	<option value="Guru">Guru</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                    <label class="custom-control-label" for="rememberPasswordCheck">Ingat password</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="lupa_password.php">Lupa Password?</a>
                                <button class="btn btn-primary" type="submit" name="submit">Login</button>
                                
                            </div>
                        </form>
                    </div>
                    <!-- <div class="card-footer text-center">
                        <div class="small"><a href="#">Tambah akun <i class="fas fa-arrow-right"></i></a></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>