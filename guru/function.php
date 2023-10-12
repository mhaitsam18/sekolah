<?php 
	// koneksi ke database
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

	function query2($query){
		global $conn;
		// ambil data dari tabel admin / query data admin
		$result = mysqli_query($conn, $query);

		
		
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


	//----------------------------------------------------------------------------//
	//									Tambah Data					 			  //
	//----------------------------------------------------------------------------//

	function tambahKepsek($data){
		global $conn;

		$target_dir     = "../foto/foto-kepsek/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nip = htmlspecialchars($data['nip']);
			$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
			$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
			$tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
			$alamat = htmlspecialchars($data['alamat']);
			$pendidikan = htmlspecialchars($data['pendidikan']);
			$email = htmlspecialchars($data['email']);
			$no_hp = htmlspecialchars($data['no_hp']);

			$sql = "INSERT INTO data_kepsek (nip, nama_lengkap,  jenis_kelamin, tanggal_lahir, alamat, pendidikan, email, no_hp, foto) 
				VALUES ('$nip', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', 
				'$alamat', '$pendidikan', '$email', '$no_hp', '$target_file')";

			$result = $conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='data-kepsek.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	function tambahGuru($data){
		global $conn;

		$target_dir     = "../foto/foto-guru/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nip = htmlspecialchars($data['nip']);
			$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
			$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
			$tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
			$alamat = htmlspecialchars($data['alamat']);
			$pendidikan = htmlspecialchars($data['pendidikan']);
			$mengajar = htmlspecialchars($data['mengajar']);

			$sql = "INSERT INTO data_guru (foto, nip, nama_lengkap,  jenis_kelamin, tanggal_lahir, alamat, pendidikan, mengajar) 
				VALUES ('$target_file', '$nip', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', 
				'$alamat', '$pendidikan', '$mengajar')";

			$result = $conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='data-guru.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	function tambahAdmin($data){
		global $conn;

		$target_dir     = "../foto/foto-admin/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nip = htmlspecialchars($data['nip']);
			$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
			$email = htmlspecialchars($data['email']);
			$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
			$alamat = htmlspecialchars($data['alamat']);
			$pendidikan = htmlspecialchars($data['pendidikan']);

			$sql = "INSERT INTO data_admin (foto, nip, nama_lengkap, email, jenis_kelamin, alamat, pendidikan) 
				VALUES ('$target_file', '$nip', '$nama_lengkap', '$email', '$jenis_kelamin', '$alamat', 
				'$pendidikan')";

			$result = $conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='data-admin.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	function tambahStaff($data){
		global $conn;

		$target_dir     = "../foto/foto-staff/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
			$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
			$alamat = htmlspecialchars($data['alamat']);
			$posisi = htmlspecialchars($data['posisi']);
			$no_telp = htmlspecialchars($data['no_telp']);

			$sql = "INSERT INTO data_staff 
					VALUES ('', '$nama_lengkap', '$jenis_kelamin', '$alamat', '$posisi' '$no_telp', 
							'$target_file')";

			$result = $conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='data-staff.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	function tambahInfo($data){
		global $conn;

		$judul = htmlspecialchars($data['judul']);
		$deskripsi = htmlspecialchars($data['deskripsi']);
		$waktu = htmlspecialchars($data['waktu']);

		$query = "INSERT INTO informasi VALUES ('', '$judul', '$deskripsi', '$waktu')";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function tambahSiswa1($data){
		global $conn;

		$target_dir     = "../foto/foto-siswa-kelas1/"; // Untuk Foto
		$file_name      = basename($_FILES["foto"]["name"]); // Untuk Foto
		$target_file    = $target_dir . $file_name; // Untuk Foto
		$imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto

		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nis = htmlspecialchars($data['nis']);
			$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
			$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
			$alamat = htmlspecialchars($data['alamat']);
			$no_telp = htmlspecialchars($data['no_telp']);

			$sql = "INSERT INTO data_kelas1 (foto, nis, nama_lengkap, jenis_kelamin, alamat, no_telp) 
					VALUES ('$target_file', '$nis', '$nama_lengkap', '$jenis_kelamin', '$alamat',
					'$no_telp')";

			$result = $conn->query($sql);
				if ($result == true) {
					echo "<script> alert('berhasil');</script>";
					echo "<script> location='data-kelas1.php'; </script>";
				} else {
					echo "<script> alert('gagal');</script>";
				}

		} else {
			echo "<script> alert('Gagal');</script>";
		}
	}

	//----------------------------------------------------------------------------//
	//									Hapus Data					 			  //
	//----------------------------------------------------------------------------//

	// $id menerima id dari halaman hapus
	function hapusAdmin($id_admin){
		global $conn;

		// query hapus data
		mysqli_query($conn, "DELETE FROM data_admin WHERE id_admin = $id_admin");
		return mysqli_affected_rows($conn);
	}

	function hapusKepsek($id_kepsek){
		global $conn;

		// query hapus data
		mysqli_query($conn, "DELETE FROM data_kepsek WHERE id_kepsek = $id_kepsek");
		return mysqli_affected_rows($conn);
	}

	function hapusGuru($id_guru){
		global $conn;

		// query hapus data
		mysqli_query($conn, "DELETE FROM data_guru WHERE id_guru = $id_guru");
		return mysqli_affected_rows($conn);
	}

	function hapusInfo($id){
		global $conn;

		// query hapus data
		mysqli_query($conn, "DELETE FROM informasi WHERE id = $id");
		return mysqli_affected_rows($conn);
	}


	//----------------------------------------------------------------------------//
	//									Ubah Data					 			  //
	//----------------------------------------------------------------------------//

	// nama $data bebas mau menamakan apa saja, mau $post. itu menunjukan sebuah data, untuk menampung data post
	function ubahadmin($data){
		global $conn;

		$id = $data["id"];

		$foto = htmlspecialchars($data['foto']);
		$nip = htmlspecialchars($data['nip']);
		$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
		$email = htmlspecialchars($data['email']);
		$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
		$alamat = htmlspecialchars($data['alamat']);
		$pendidikan = htmlspecialchars($data['pendidikan']);

		// query update data
		$query = "UPDATE admin SET 
		foto = '$foto', nip = '$nip', nama_lengkap = '$nama_lengkap', email = '$email',
		jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', pendidikan = '$pendidikan' WHERE id = $id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function ubahguru($data){
		global $conn;

		$id = $data["id"];

		$foto = ($data['foto']);
		$nip = htmlspecialchars($data['nip']);
		$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
		$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
		$tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
		$alamat = htmlspecialchars($data['alamat']);
		$pendidikan = htmlspecialchars($data['pendidikan']);
		$mengajar = htmlspecialchars($data['mengajar']);

		// query update data
		$query = "UPDATE data_guru SET 
		foto = '$foto', nip = '$nip', nama_lengkap = '$nama_lengkap', jenis_kelamin = '$jenis_kelamin', 
		tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', pendidikan = '$pendidikan', mengajar = '$mengajar'  WHERE id = $id";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
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


	//----------------------------------------------------------------------------//
	//									Cari Data					 			  //
	//----------------------------------------------------------------------------//

	function cariadmin($keyword){
		global $conn;

		$query = "SELECT * FROM admin 
					WHERE 
				nama_lengkap LIKE '%$keyword%' OR 
				nip LIKE '%$keyword%'
				";

		$result = mysqli_query($conn, $query);

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		// mengembalikan nilai
		return $rows;
	}

	function cariguru($keyword){
		global $conn;

		$query = "SELECT * FROM data_guru 
					WHERE 
				nama_lengkap LIKE '%$keyword%' OR 
				nip LIKE '%$keyword%'
				";

		$result = mysqli_query($conn, $query);

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		// mengembalikan nilai
		return $rows;
	}

	function cariInfo($keyword){
		global $conn;

		$query = "SELECT * FROM informasi 
					WHERE 
				judul LIKE '%$keyword%'";

		$result = mysqli_query($conn, $query);

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		// mengembalikan nilai
		return $rows;
	}


	//----------------------------------------------------------------------------//
	//									Upload   					 			  //
	//----------------------------------------------------------------------------//

	function upload(){
		$namafile = $_FILES['foto']['name'];
		$ukuranfile = $_FILES['foto']['size'];
		$error = $_FILES['foto']['error'];
		$tmpName = $_FILES['foto']['tmp_name'];

		// cek apakah tidak ada gambar yang diupload
		if($error === 4){
			echo "<script>
					alert('pilih gambar terlebih dahulu!');
				</script>";

			return false;
		}

		// cek apakah yang diupload adalah gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namafile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "<script>
					alert('yang anda upload bukan gambar!');
				</script>";

			return false;
		}

		// lolos pengecekan, gambar siap diupload
		move_uploaded_file($tmpName, 'img/ . $namafile');

		return $namafile;
	}

 ?>