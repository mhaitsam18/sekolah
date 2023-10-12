<?php 

/**
 * 
 */
class Staff {

	private $conn;

	function __construct(){
		$servername	= "localhost"; 
		$username	= "root"; 
		$password	= ""; 
		$db 		= "pendataan";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}
	
	public function read_staff(){
		$sql = "SELECT * FROM data_staff";
		return $this->conn->query($sql);
	}

}

$staff = new Staff();
 ?>