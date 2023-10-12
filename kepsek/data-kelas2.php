<?php 
    //require 'function.php';

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

<?php include 'views/footer.php'; ?>

</html>