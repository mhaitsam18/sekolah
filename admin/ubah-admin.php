<?php 
    session_start();

    if (empty($_SESSION['login'])) {
        header("location: ../login.php");
        exit;
    }
    
    require 'function.php';

    $id_admin = $_GET["id_admin"];
    
    $admin = query("SELECT * FROM data_admin WHERE id_admin = $id_admin");
    
    // cek button submit
    if(isset($_POST['submit'])){

        // cek data berhasil diubah atau tidak
        if (ubahAdmin($_POST) > 0) {
            echo "
                <script>
                    alert('berhasil diubah');
                    document.location.href = '../admin/data-admin.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('gagal diubah');
                    document.location.href = '../admin/data-admin.php';
                </script>";
        }
    }
    // $conn = new mysqli("localhost", "root", "", "pendataan"); 

    // $id_admin = $_GET['id_admin'];
    // $sql = "SELECT * FROM data_admin WHERE id_admin = $id_admin";
    // $result = $conn->query($sql);
    // while ($row=$result->fetch_assoc()) {
    //     $nip = $row['nip'];
    //     $nama_lengkap = $row['nama_lengkap'];
    //     $email = $row['email'];
    //     $jenis_kelamin = $row['jenis_kelamin'];
    //     $alamat = $row['alamat'];
    //     $pendidikan = $row['pendidikan'];
    //     $foto = $row['foto'];

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
                        <h6 class="font-weight-bold text-primary" style="margin-bottom: -5px;">Ubah Data Admin</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="nip">NIP</label>
                                            <input type="text" name="nip" class="form-control" id="nip" placeholder="Masukkan nip" value="<?= $admin['nip'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukkan nama lengkap" value="<?= $admin['nama_lengkap'] ?>">
                                        </div>
                                    </div>
                                    <?php if ($admin['jenis_kelamin']=="Laki-laki"): ?>
                                    <div class="form-group">                       
                                        <label for="nama">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input" id="lk" value="Laki-laki" checked="">
                                            <label class="form-check-label" for="lk">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input" id="pr" value="Perempuan">
                                            <label class="form-check-label" for="pr">Perempuan</label>
                                        </div>
                                    </div>
                                    <?php else : ?>
                                    <div class="form-group">                       
                                        <label for="nama">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input" id="lk" value="Laki-laki">
                                            <label class="form-check-label" for="lk">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input" id="pr" value="Perempuan" checked="">
                                            <label class="form-check-label" for="pr">Perempuan</label>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" value="<?= $admin['alamat'] ?>"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" value="<?= $admin['email'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pendidikan">Pendidikan Terakhir</label>
                                            <input type="text" name="pendidikan" class="form-control" id="Pendidikan" placeholder="Masukkan pendidikan terakhir" value="<?= $admin['pendidikan'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <img width="100" height="100" src="<?= $admin["foto"] ?>" alt="..." class="img-fluid">
                                        <input type="file" name="foto" class="form-control mt-2">
                                    </div>
                                <a href="data-admin.php" class="btn btn-danger btn-sm">Batal</a>
                                <button type="submit" name="submit" class="btn btn-success btn-sm">Ubah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                	
		                    <!-- <div class="text-left">
	                            <?php if ($admin['jenis_kelamin']=="Laki-laki"): ?>
	                                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
	                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
	                            <?php else: ?>
	                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
	                                <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
	                            <?php endif ?>
                        	</div><br> -->
		                    

        <!------------------------->

    </div>
    <!-- /.container-fluid -->

<?php include 'views/footer-admin.php'; ?>

</html>
