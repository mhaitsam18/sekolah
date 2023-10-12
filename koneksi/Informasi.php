<?php 

/**
 * 
 */
class Informasi {

	private $conn;

	function __construct(){
		$servername	= "localhost"; 
		$username	= "root"; 
		$password	= ""; 
		$db 		= "pendataan";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}

	public function create_info(){
		$judul = htmlspecialchars($_POST['judul']);
		$deskripsi = htmlspecialchars($_POST['deskripsi']);
		$waktu = htmlspecialchars($_POST['waktu']);

		$sql = "INSERT INTO informasi (judul, deskripsi, waktu) VALUES ('$judul', '$deskripsi', '$waktu')";
		$result = $this->conn->query($sql);
		if($result == true){
			echo "<script> alert('Informasi berhasil ditambahkan');</script>";
		} else {
			echo "<script> alert('gagal');</script>";

		}
		echo "<script> location='../admin/informasi.php'; </script>";
	}
	
	public function read_info(){
		$sql = "SELECT * FROM informasi";
		return $this->conn->query($sql);
	}

	public function delete_info($id){
		$sql = "DELETE FROM informasi WHERE id = $id";
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		} else {
			echo "<script> alert('Data gagal dihapus');</script>";
		}
		echo "<script> location='../admin/informasi.php'; </script>";
	}
	
}

$informasi = new Informasi();

	if (isset($_GET['create_info'])) {
		$informasi->create_info();
	}

	if (isset($_GET['delete_info'])) {
		$informasi->delete_info($_GET['delete_info']);
	}	

 ?>