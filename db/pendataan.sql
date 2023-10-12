-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 04:06 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pertanyaan_1` varchar(255) NOT NULL,
  `jawaban_1` varchar(255) NOT NULL,
  `pertanyaan_2` varchar(255) NOT NULL,
  `jawaban_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `nama`, `username`, `password`, `pertanyaan_1`, `jawaban_1`, `pertanyaan_2`, `jawaban_2`) VALUES
(1, 'Idham Firhanudin', 'idham@student.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', ''),
(2, 'Tes', 'tes@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `akun_kepsek`
--

CREATE TABLE `akun_kepsek` (
  `id` int(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_kepsek`
--

INSERT INTO `akun_kepsek` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Idham Firhanudin', 'kepsek@gmail.com', 'a2ed32cae296647110b3dbbf60c3f445'),
(2, 'Tes', 'tes@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pertanyaan_1` varchar(255) NOT NULL,
  `jawaban_1` varchar(255) NOT NULL,
  `pertanyaan_2` varchar(255) NOT NULL,
  `jawaban_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `foto`, `nip`, `nama_lengkap`, `email`, `jenis_kelamin`, `alamat`, `pendidikan`, `password`, `pertanyaan_1`, `jawaban_1`, `pertanyaan_2`, `jawaban_2`) VALUES
(2, '../foto/foto-admin/IMG_20190124_175221_543.jpg', '6701194085', 'Idham Firhanudin', 'bebas@gmail.com', 'Laki-laki', 'Kuningan', 'D3 Sistem Informasi', '', '', '', '', ''),
(10, '../foto/foto-admin/IMG_20190124_175221_543.jpg', '12345', 'Tes', 'tes@gmail.com', 'Laki-laki', 'Jakarta', 'D3 Sistem Informasi', '', '', '', '', ''),
(15, '', '567890', 'wkwk', 'wkwk@gmail.com', 'Perempuan', 'Sulawesi', 'D3 Sistem Informasi', '', '', '', '', ''),
(19, '../foto-admin/FB_IMG_1560597124707.jpg', '1', 'a', 'a@gmail.com', 'Laki-laki', 'a', 'a', '', '', '', '', ''),
(25, '../foto/foto-admin/tiedye.jpeg', '1', 'cek', 'cek@gmail.com', 'Laki-laki', 'tgr', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', ''),
(26, '../foto/foto-admin/VIRTUAL BACKGROUND KULIAH UMUM.', '12345', 'asda', 'asda@gmail.com', 'Perempuan', 'kota', 's1', '202cb962ac59075b964b07152d234b70', 'Apa warna favorit Anda?', 'db29d3667469cec98ff59e7c51e74a44', 'Siapa tokoh idola Anda?', '741f023eb07df6abd2171c56e16db860');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(20) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `mengajar` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `foto`, `nip`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `pendidikan`, `mengajar`, `username`, `password`) VALUES
(10, 'foto-guru/IMG_20190124_175221_543.jpg', '6701194085', 'Idham Firhanudin', 'Laki-laki', '2001-03-02', 'Kuningan', 'D3 Sistem Informasi', 'Kelas 6', '', ''),
(11, 'foto-guru/FB_IMG_1560597124707.jpg', '11111111111', 'Bambang', 'Laki-laki', '2001-03-28', 'Cirebon', 'S1 Matematika', 'Kelas 5', '', ''),
(12, 'foto-guru/FB_IMG_1555857167519.jpg', '2222222222', 'Ibnu Khoerul', 'Laki-laki', '2020-11-10', 'Bogor', 'D3 Manajemen', 'Kelas 4', '', ''),
(13, 'foto-guru/FB_IMG_1543998652402.jpg', '3333333333', 'Nadia Firdaya', 'Perempuan', '2020-11-10', 'Kuningan', 'S1 Matematika', 'Kelas 3', '', ''),
(14, 'foto-guru/FB_IMG_1555857167519.jpg', '4444444444', 'Tes', 'Perempuan', '2020-11-10', 'Jakarta', 'S1 Pendidikan Bahasa', 'Kelas 1', '', ''),
(15, 'foto-guru/IMG-20191203-WA0039.jpg', '5555555555', 'Aang', 'Laki-laki', '2020-11-10', 'Kuningan', 'S1 Pendidikan Olahra', 'Olahraga', '', ''),
(16, '../foto-guru/IMG-20191203-WA0039.jpg', '111', 'aang', 'Laki-laki', '2020-11-13', 'a', 'a', 'a', '', ''),
(18, '../foto-guru/IMG-20191203-WA0039.jpg', 'c', 'c', 'Laki-laki', '2020-11-17', 'c', 'c', 'c', '', ''),
(19, '../foto-guru/FB_IMG_1555857167519.jpg', 'y', 'y', 'Perempuan', '2020-11-14', 'y', 'y', 'y', '', ''),
(23, '../foto/foto-guru/1.jpg', '8989', 'bn', 'Perempuan', '2020-11-20', 'nm', 'nm', 'nm', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas1`
--

CREATE TABLE `data_kelas1` (
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kelas1`
--

INSERT INTO `data_kelas1` (`id_siswa`, `id_mapel`, `foto`, `nis`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(2, 1, '', '6701194085', 'Idham Firhanudin', 'Laki-laki', 'Kuningan', '085603306568');

-- --------------------------------------------------------

--
-- Table structure for table `data_kepsek`
--

CREATE TABLE `data_kepsek` (
  `id_kepsek` int(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kepsek`
--

INSERT INTO `data_kepsek` (`id_kepsek`, `nip`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `pendidikan`, `email`, `no_hp`, `foto`) VALUES
(4, '6701194085', 'Idham Firhanudin', 'Laki-laki', '2001-03-02', 'Kuningan', 'D3 Sistem Informasi', 'idhamfirhanudin001@gmail.com', '085603306568', '../foto/foto-kepsek/5c887e2155073.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_staff`
--

CREATE TABLE `data_staff` (
  `id_staff` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_staff`
--

INSERT INTO `data_staff` (`id_staff`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `posisi`, `no_telp`, `foto`) VALUES
(1, 'Bambang', 'Laki-laki', 'Cibingbin', 'supir', '0821', '');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `deskripsi`, `waktu`) VALUES
(1, 'UAS', 'dilaksanakan desember', '2020-12-24'),
(2, 'UTS', 'dilaksanakan november', '2020-11-02'),
(4, 'Maulid nabi', 'dilaksanakan disekolah', '2020-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `kode_kelas`
--

CREATE TABLE `kode_kelas` (
  `id_kode` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `kode` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_kelas`
--

INSERT INTO `kode_kelas` (`id_kode`, `nama_kelas`, `kode`) VALUES
(1, 'Kelas 1', 'K1_123'),
(2, 'Kelas 2', 'K2_123');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kelas1`
--

CREATE TABLE `mapel_kelas1` (
  `id_mapel` int(20) NOT NULL,
  `mtk` int(5) NOT NULL,
  `bindo` int(5) NOT NULL,
  `na` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel_kelas1`
--

INSERT INTO `mapel_kelas1` (`id_mapel`, `mtk`, `bindo`, `na`) VALUES
(1, 80, 80, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_kepsek`
--
ALTER TABLE `akun_kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `data_kelas1`
--
ALTER TABLE `data_kelas1`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `fk_mapel` (`id_mapel`);

--
-- Indexes for table `data_kepsek`
--
ALTER TABLE `data_kepsek`
  ADD PRIMARY KEY (`id_kepsek`);

--
-- Indexes for table `data_staff`
--
ALTER TABLE `data_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_kelas`
--
ALTER TABLE `kode_kelas`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `mapel_kelas1`
--
ALTER TABLE `mapel_kelas1`
  ADD PRIMARY KEY (`id_mapel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `akun_kepsek`
--
ALTER TABLE `akun_kepsek`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_kelas1`
--
ALTER TABLE `data_kelas1`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_kepsek`
--
ALTER TABLE `data_kepsek`
  MODIFY `id_kepsek` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_staff`
--
ALTER TABLE `data_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kode_kelas`
--
ALTER TABLE `kode_kelas`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mapel_kelas1`
--
ALTER TABLE `mapel_kelas1`
  MODIFY `id_mapel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kelas1`
--
ALTER TABLE `data_kelas1`
  ADD CONSTRAINT `fk_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel_kelas1` (`id_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
