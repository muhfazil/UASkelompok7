-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jul 2020 pada 16.35
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datainput`
--

CREATE TABLE IF NOT EXISTS `datainput` (
`id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `bidang_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datainput`
--

INSERT INTO `datainput` (`id`, `nama_lengkap`, `alamat`, `nama_provinsi`, `email`, `no_hp`, `bidang_keahlian`) VALUES
(4, 'kris', 'jakarta', 'DKI Jakarta', 'thono@gmail.com', '0887666566', ' mabok'),
(8, '', '', 'DKI Jakarta', '', '', ''),
(9, 'gilang', 'cianjur', 'Jawa Barat', 'gilang@gmail.com', '085667888999', 'teknisi'),
(10, 'mardian', 'cianjur', 'Jawa Barat', 'gilang@yahoo.com', '099898989', 'anying'),
(11, 'fatah', 'tai', 'DKI Jakarta', 'yaya@gmia', '12', 'dsvs'),
(12, 'gilang', 'cianjur', 'Jawa Barat', 'gilang@gmail.com', '0877576666', 'it');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_provinsi`
--

CREATE TABLE IF NOT EXISTS `nama_provinsi` (
`id` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nama_provinsi`
--

INSERT INTO `nama_provinsi` (`id`, `nama_provinsi`) VALUES
(1, 'jawa Barat'),
(2, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'kristianus', 'kris@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datainput`
--
ALTER TABLE `datainput`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_provinsi`
--
ALTER TABLE `nama_provinsi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datainput`
--
ALTER TABLE `datainput`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nama_provinsi`
--
ALTER TABLE `nama_provinsi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
