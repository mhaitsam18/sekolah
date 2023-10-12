</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include '../footer.php'; ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div>
                        <input type="file" name="foto" class="form-control" required>
                    </div><br>
                    <div>
                        <input type="text" name="nama_lengkap" class="form-control"  placeholder="Masukkan nama lengkap" required  autocomplete="off">
                    </div><br>
                    <div class="text-left">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </div><br>
                    <div>
                        <input type="text" name="alamat" class="form-control"  placeholder="Masukkan alamat" required  autocomplete="off">
                    </div><br>
                    <div>
                        <input type="text" name="posisi" class="form-control"  placeholder="Masukkan posisi" required  autocomplete="off">
                    </div><br>
                    <div>
                        <input type="text" name="no_telp" class="form-control"  placeholder="Masukkan no telepon" required  autocomplete="off">
                    </div><br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                </form>

                <?php 
                if (isset($_POST['submit'])) {
                        $foto = $_POST['foto'];
                        $nama_lengkap = $_POST['nama_lengkap'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $alamat = $_POST['alamat'];
                        $posisi = $_POST['posisi'];
                        $no_telp = $_POST['no_telp'];
                        $sql = "INSERT INTO data_staff(nama_lengkap, jenis_kelamin, alamat, posisi, no_telp, foto) VALUES ('$nama_lengkap', '$jenis_kelamin', '$alamat', '$posisi', '$no_telp', $foto)";
                        $result = $conn->query($sql);
                        echo "<script> alert('Data berhasil ditambahkan');</script>";
                        echo "<script> location='data-staff.php'; </script>";
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
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

</body>