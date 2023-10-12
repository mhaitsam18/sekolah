<?php 

/**
 * 
 */
class Kepsek {

	private $conn;

	function __construct(){
		$servername	= "localhost"; 
		$username	= "root"; 
		$password	= ""; 
		$db 		= "pendataan";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}
	
	public function create_kepsek(){

	}

	public function read_kepsek(){
		$sql = "SELECT * FROM data_kepsek";
		return $this->conn->query($sql);
	}

	public function update_kepsek(){

	}

	public function delete_kepsek(){

	}

	public function detail_kepsek($id_kepsek){
		$sql = "SELECT * FROM data_kepsek WHERE id_kepsek = $id_kepsek";
		return $this->conn->query($sql);
	}
}

$kepsek = new Kepsek();

 ?>