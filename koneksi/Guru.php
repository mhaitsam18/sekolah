<?php 

/**
 * 
 */
class Guru {

	private $conn;

	function __construct(){
		$servername	= "localhost"; 
		$username	= "root"; 
		$password	= ""; 
		$db 		= "pendataan";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}
	
	public function create_guru(){
		$target_dir     = "../foto/foto-guru/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nip = htmlspecialchars($_POST['nip']);
			$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
			$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
			$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
			$alamat = htmlspecialchars($_POST['alamat']);
			$pendidikan = htmlspecialchars($_POST['pendidikan']);
			$mengajar = htmlspecialchars($_POST['mengajar']);

			$sql = "INSERT INTO data_guru (foto, nip, nama_lengkap,  jenis_kelamin, tanggal_lahir, alamat, pendidikan, mengajar) 
				VALUES ('$target_file', '$nip', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', 
				'$alamat', '$pendidikan', '$mengajar')";

			$result = $this->conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='../admin/data-guru.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	public function read_guru(){
		$sql = "SELECT * FROM data_guru";
		return $this->conn->query($sql);
	}

	public function update_guru(){

	}

	public function delete_guru($id_guru){
		$sql = "DELETE FROM data_guru WHERE id_guru = $id_guru";
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		} else {
			echo "<script> alert('Data gagal dihapus');</script>";
		}
		echo "<script> location='../admin/data-guru.php'; </script>";
	}

	public function detail_guru($id_guru){
    	$sql = "SELECT * FROM data_guru WHERE id_guru = $id_guru";
		return $this->conn->query($sql);
	}
	
}

$guru = new Guru();
	
	if (isset($_GET['create_guru'])) {
		$guru->create_guru();
	}

	if (isset($_GET['delete_guru'])) {
		$guru->delete_guru($_GET['delete_guru']);
	}

 ?>