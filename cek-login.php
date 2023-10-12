<?php
	
	$conn = new mysqli("localhost", "root", "", "pendataan"); 

	// $username = mysqli_escape_string($koneksi, $_POST['username']);
	// $pass = md5($_POST['password']);
	// $password = mysqli_escape_string($koneksi, $pass);

	if($level == "Kepala Sekolah") {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$level = $_POST['level'];

		$sql = "SELECT * FROM akun_kepsek WHERE username=LOWER('$username') AND password='$password';";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if (!empty($row)) {
			$_SESSION["login"] = true;
			echo "<script> location= 'dashboard.php'; </script>";
		} else{
			echo "<script> alert('Username / Password salah!') </script>";
		}
	} elseif ($level == "Admin") {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$level = $_POST['level'];

		$sql = "SELECT * FROM akun_admin WHERE username=LOWER('$username') AND password='$password';";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if (!empty($row)) {
			$_SESSION["login"] = true;
			echo "<script> location= 'admin/dashboard.php'; </script>";
		} else{
			echo "<script> alert('Username / Password salah!') </script>";
		}
	} elseif ($level == "Guru") {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$level = $_POST['level'];

		$sql = "SELECT * FROM akun_kepsek WHERE username=LOWER('$username') AND password='$password';";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if (!empty($row)) {
			$_SESSION["login"] = true;
			echo "<script> location= 'dashboard.php'; </script>";
		} else{
			echo "<script> alert('Username / Password salah!') </script>";
		}
	}

 ?>