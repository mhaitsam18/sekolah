<?php 
session_start();
/**
 * 
 */
class Admin{
	
	private $conn;

	function __construct(){
		$servername	= "localhost"; 
		$username	= "root"; 
		$password	= ""; 
		$db 		= "pendataan";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}

	public function login(){
		$email = htmlspecialchars($_POST['email']);
		$password = md5($_POST['password']);
		$sql      = "SELECT * FROM data_admin WHERE email=LOWER('$email') AND password='$password';";
        $result   = $this->conn->query($sql);
        $row   = $result->fetch_assoc();
        if ($row > 0) {
            $_SESSION['login'] = $email;
        	header("location: ../admin/dashboard.php");
        } else{
			echo "<script> alert('Username atau Password salah');</script>";
            echo "<script> location= '../login.php'; </script>";
        }
	}

	public function cek_username_nip(){
		$email = htmlspecialchars($_POST['email']);
		$nip = htmlspecialchars($_POST['nip']);
		$sql      = "SELECT * FROM data_admin WHERE email=LOWER('$email') AND nip='$nip';";
        $result   = $this->conn->query($sql);
        $row   = $result->fetch_assoc();
        if ($row > 0) {
        	$_SESSION['id_admin'] = $row['id_admin'];
        	$_SESSION['pertanyaan_1'] = $row['pertanyaan_1']; 
        	$_SESSION['pertanyaan_2'] = $row['pertanyaan_2'];
        	$_SESSION['ubah_password'] = 'ubah_password';
        	header("location: ../pertanyaan.php");
        } else{
			echo "<script> alert('Username atau NIP tidak cocok');</script>";
            echo "<script> location= '../lupa_password.php'; </script>";
        }
	}

	public function cek_jawaban(){
		$jawaban_2 = md5($_POST['jawaban_2']);
		$jawaban_1 = md5($_POST['jawaban_1']);
		$id_admin = htmlspecialchars($_POST['id_admin']);
		$sql      = "SELECT * FROM data_admin WHERE jawaban_1= '$jawaban_1' AND jawaban_2= '$jawaban_2' AND id_admin=$id_admin;";
        $result   = $this->conn->query($sql);
        $row   = $result->fetch_assoc();
        if ($row > 0) {
        	$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        	header("location: ../ubah_password.php");
        } else{
			echo "<script> alert('Jawaban Salah, silahkan hubungi operator');</script>";
            echo "<script> location= '../pertanyaan.php'; </script>";
        }
	}

	public function ubah_password(){
		$password = md5($_POST['password']);
		$konfirmasi = md5($_POST['konfirmasi']);
		$id_admin = $_SESSION['id_admin'];
		if ($password == $konfirmasi) {
			$sql      = "UPDATE data_admin SET `password`='$password' WHERE id_admin = '$id_admin'";
	        $result   = $this->conn->query($sql);
	        if ($result == true) {
	        	unset($_SESSION['nama_lengkap']);
	        	unset($_SESSION['pertanyaan_1']);
	        	unset($_SESSION['pertanyaan_2']);
	        	unset($_SESSION['id_admin']);
	        	unset($_SESSION['ubah_password']);
				echo "<script> alert('Password berhasil diubah');</script>";
	            echo "<script> location= '../login.php'; </script>";
	        } else{
				echo "<script> alert('Password gagal diubah');</script>";
	            echo "<script> location= '../ubah_password.php'; </script>";
	        }
		} else{
			echo "<script> alert('Pastikan Password dan Konfirmasi Password Anda sama!');</script>";
            echo "<script> location= '../ubah_password.php'; </script>";
		}
	}

	public function create_admin(){
		$target_dir     = "../foto/foto-admin/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nip = htmlspecialchars($_POST['nip']);
			$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
			$email = htmlspecialchars($_POST['email']);
			$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
			$alamat = htmlspecialchars($_POST['alamat']);
			$pendidikan = htmlspecialchars($_POST['pendidikan']);
			$password = md5($_POST['password']);
			$pertanyaan_1 = htmlspecialchars($_POST['pertanyaan_1']);
			$pertanyaan_2 = htmlspecialchars($_POST['pertanyaan_2']);
			$jawaban_1 = md5($_POST['jawaban_1']);
			$jawaban_2 = md5($_POST['jawaban_2']);

			$sql = "INSERT INTO data_admin (foto, nip, nama_lengkap, email, jenis_kelamin, alamat, pendidikan, password, pertanyaan_1, pertanyaan_2, jawaban_1, jawaban_2) 
				VALUES ('$target_file', '$nip', '$nama_lengkap', '$email', '$jenis_kelamin', '$alamat', 
				'$pendidikan', '$password', '$pertanyaan_1', '$pertanyaan_2', '$jawaban_1', '$jawaban_2')";
			$result = $this->conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='../admin/data-admin.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	public function read_admin(){
		$sql = "SELECT * FROM data_admin";
		return $this->conn->query($sql);
	}

	public function getUpdate_admin(){
		$sql = "SELECT * FROM data_admin WHERE id_admin = $id_admin";
		$result = $this->conn->query($sql);
		$row = $result->fetch_assoc();
		echo json_encode($row);
	}

	public function update_admin($id_admin){
		$nip = htmlspecialchars($_POST['nip']);
		$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
		$email = htmlspecialchars($_POST['email']);
		$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
		$alamat = htmlspecialchars($_POST['alamat']);
		$pendidikan = htmlspecialchars($_POST['pendidikan']);

		if(!empty($_FILES['foto']['name'])) {
			$target_dir     = "../foto/foto-admin/"; 
			$file_name      = basename($_FILES["foto"]["name"]); 
			$target_file    = $target_dir . $file_name; 
			$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
			$sql = "";
			if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
				$sql = "UPDATE data_admin SET foto = '$target_file', nip = '$nip', 
						nama_lengkap = '$nama_lengkap', email = '$email', 
						jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
						pendidikan = '$pendidikan' WHERE id_admin = '$id_admin'";
			} else {
				echo "<script> alert('Gambar gagal diubah');</script>";
			}
		} else {
			$sql = "UPDATE data_admin SET nip = '$nip', 
				nama_lengkap = '$nama_lengkap', email = '$email', 
				jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
				pendidikan = '$pendidikan' WHERE id_admin = '$id_admin'";
		}
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('berhasil');</script>";
			echo "<script> location='../admin/data-admin.php'; </script>";
		} else {
			echo "<script> alert('gagal');</script>";
		}
	}

	public function delete_admin($id_admin){
		$sql = "DELETE FROM data_admin WHERE id_admin = $id_admin";
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		} else {
			echo "<script> alert('Data gagal dihapus');</script>";
		}
		echo "<script> location='../admin/data-admin.php'; </script>";
	}

	public function detail_admin($id_admin){
    	$sql = "SELECT * FROM data_admin WHERE id_admin = $id_admin";
		return $this->conn->query($sql);
	}
}

$admin = new Admin();

	if (isset($_GET['login'])) {
		$admin->login();
	}
	if(isset($_GET['create_admin'])) {
		$admin->create_admin();
	}
	if (isset($_GET['getUpdate_admin'])) {
		$admin->getUpdate_admin();
	}
	if(isset($_GET['update_admin'])) {
		$admin->update_admin($_GET['update_admin']);
	}
	if(isset($_GET['delete_admin'])) {
		$admin->delete_admin($_GET['delete_admin']);
	}
	if(isset($_GET['cek_username_nip'])) {
		$admin->cek_username_nip();
	}
	if(isset($_GET['cek_jawaban'])) {
		$admin->cek_jawaban();
	}
	if(isset($_GET['ubah_password'])) {
		$admin->ubah_password();
	}
	

	// ------------------------------------------------------------- //

	

 ?>