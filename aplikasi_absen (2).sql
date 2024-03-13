-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 11:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_absensi`
--

CREATE TABLE `tabel_absensi` (
  `id_absensi` varchar(10) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_absensi`
--

INSERT INTO `tabel_absensi` (`id_absensi`, `id_karyawan`, `nama_karyawan`, `keterangan`) VALUES
('1346536387', '3908572347', 'Parhan Adjie Anggara', 'Absen untuk hari ini'),
('4861861681', '5643861868', 'Albert Tesla', 'Absen untuk hari ini...'),
('5313168318', '1234567890', 'Dexter Al-Akshan', 'Absen untuk hari ini!');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `umur` varchar(11) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `jabatan`, `jenis_kelamin`, `alamat`, `umur`, `agama`, `email`, `no_hp`) VALUES
('1234567890', 'Dexter Al-Akshan', 'Assessor	', 'Pria', '8342 Akenocho Uede, Hokuto, Yamanashi 408-0204, Japan	', '45', 'Buddha', 'japanmantappu@gmail.com', '0812462672343'),
('3908572347', 'Parhan Adjie Anggara', 'Cloud Engineer	', 'Pria', 'South 13th Street and 18th Avenue, Newark, NJ 07103, United States	', '23', 'Islam', 'asomtingjr@gmail.com', '081389734781'),
('5643861868', 'Albert Tesla', 'Pre-Sales ', 'Pria', 'PNG, Telikom Rumana, Kumul Ave, Port Moresby 295, Papua New Guinea', '33', 'Hindu', 'sainsserubro@gmail.com', '081631834316');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengguna`
--

CREATE TABLE `tabel_pengguna` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pengguna`
--

INSERT INTO `tabel_pengguna` (`id_karyawan`, `nama_karyawan`, `username`, `password`, `level`) VALUES
('0892761823', 'Fathi Annaqi', 'Facchi', 'Icaa2002_', 'admin'),
('1346541123', 'Roro Hera Kidul', 'pantai selatan punya nih boss', 'kidulasik', 'admin'),
('3908572347', 'Parhan Adjie Anggara', 'parhan gaul nih boss', 'asomtingjr', 'user'),
('6813638974', 'Annisa', 'Icaa', 'Fcch2002_', 'user'),
('8739287597', 'Parhan Hidayat', 'serah', 'dhamarganteng', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  ADD CONSTRAINT `tabel_absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tabel_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
