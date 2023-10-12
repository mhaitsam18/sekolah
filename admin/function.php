<?php 

	$conn = mysqli_connect("localhost", "root", "", "pendataan");

	function query($query){
		global $conn;
		// ambil data dari tabel admin / query data admin
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) == 1) {
			return mysqli_fetch_assoc($result);
		}
		
		// array kosong/wadah kosong 
		$rows = [];
		// mengambil data admin dari object result
		while ($row = mysqli_fetch_assoc($result)) {
			//menambahkan elemen baru diakhir tiap array
			$rows[] = $row;
		}
		// mengembalikan nilai
		return $rows;
	}

	function ubahAdmin($data){
		global $conn;

		$id_admin = $data["id_admin"];

		$nip = htmlspecialchars($data['nip']);
		$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
		$email = htmlspecialchars($data['email']);
		$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
		$alamat = htmlspecialchars($data['alamat']);
		$pendidikan = htmlspecialchars($data['pendidikan']);

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
		$result = $conn->query($sql);
		if ($result == true) {
			echo "<script> alert('berhasil');</script>";
			echo "<script> location='data-admin.php'; </script>";
		} else {
			echo "<script> alert('gagal');</script>";
		}	
	}

	function ubahInfo($data){
		global $conn;

		$id = $data["id"];

		$judul = htmlspecialchars($data['judul']);
		$deskripsi = htmlspecialchars($data['deskripsi']);
		$waktu = htmlspecialchars($data['waktu']);

		$query = "UPDATE informasi SET
				  judul = '$judul', deskripsi = '$deskripsi', waktu = '$waktu' WHERE id = $id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

 ?>