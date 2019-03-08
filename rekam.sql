-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 11:21 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekam`
--
CREATE DATABASE IF NOT EXISTS `rekam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rekam`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagian_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_bagian_karyawan` (
  `id_bk` int(100) NOT NULL AUTO_INCREMENT,
  `nama_bk` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_bagian_karyawan`
--

INSERT INTO `tb_bagian_karyawan` (`id_bk`, `nama_bk`) VALUES
(1, 'Tempat Praktek'),
(2, 'Laboratorium'),
(3, 'Swetha'),
(4, 'Apotek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan_karyawan` (
  `id_jk` int(100) NOT NULL AUTO_INCREMENT,
  `level_jk` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_jabatan_karyawan`
--

INSERT INTO `tb_jabatan_karyawan` (`id_jk`, `level_jk`) VALUES
(1, 'Sekretaris'),
(2, 'Dokter'),
(3, 'Perawat'),
(4, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kelamin` (
  `id_jkl` int(100) NOT NULL AUTO_INCREMENT,
  `nama_jkl` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jkl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id_jkl`, `nama_jkl`) VALUES
(1, 'Laki - Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id_k` int(100) NOT NULL AUTO_INCREMENT,
  `username_k` varchar(100) NOT NULL,
  `password_k` varchar(100) NOT NULL,
  `nama_k` varchar(100) NOT NULL,
  `id_level_k` int(100) NOT NULL,
  `id_bagian_k` int(100) NOT NULL,
  `admin_input_k` varchar(100) NOT NULL,
  `tanggal_input_k` date NOT NULL,
  `jam_input_k` time NOT NULL,
  PRIMARY KEY (`id_k`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_k`, `username_k`, `password_k`, `nama_k`, `id_level_k`, `id_bagian_k`, `admin_input_k`, `tanggal_input_k`, `jam_input_k`) VALUES
(1, 'rina', 'rina', 'Rina', 1, 1, 'rina', '2018-08-06', '23:00:00'),
(2, 'rudi', 'rudi', 'Rudi', 2, 1, 'rina', '2018-08-07', '01:00:00'),
(3, 'ayu', 'ayu', 'Ayu', 4, 1, 'rina', '2018-08-07', '02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `id_p` int(100) NOT NULL AUTO_INCREMENT,
  `nama_p` varchar(100) NOT NULL,
  `umur_p` int(100) NOT NULL,
  `id_jkl_p` int(100) NOT NULL,
  `tempat_lahir_p` varchar(100) NOT NULL,
  `tanggal_lahir_p` date NOT NULL,
  `alamat_p` text NOT NULL,
  `admin_input_p` varchar(100) NOT NULL,
  `tanggal_input_p` date NOT NULL,
  `jam_input_p` time NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_p`, `nama_p`, `umur_p`, `id_jkl_p`, `tempat_lahir_p`, `tanggal_lahir_p`, `alamat_p`, `admin_input_p`, `tanggal_input_p`, `jam_input_p`) VALUES
(1, 'Ferdy Budi Setiawan', 50, 1, 'Kediri', '1968-05-01', 'Jalan Kaki', 'rina', '2018-08-06', '23:50:31'),
(2, 'Egen Endo Lermatin', 43, 1, 'Surabaya', '1975-09-01', 'Jalan Sehat', 'rina', '2018-08-07', '01:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id_pby` int(100) NOT NULL AUTO_INCREMENT,
  `id_pks_pby` int(100) NOT NULL,
  `id_p_pby` int(100) NOT NULL,
  `harga_periksa_pby` int(100) NOT NULL,
  `harga_resep_pby` int(100) NOT NULL,
  `total_harga_pby` int(100) NOT NULL,
  `admin_input_pby` varchar(100) NOT NULL,
  `tanggal_input_pby` date NOT NULL,
  `jam_input_pby` time NOT NULL,
  PRIMARY KEY (`id_pby`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pby`, `id_pks_pby`, `id_p_pby`, `harga_periksa_pby`, `harga_resep_pby`, `total_harga_pby`, `admin_input_pby`, `tanggal_input_pby`, `jam_input_pby`) VALUES
(1, 1, 1, 50000, 70000, 120000, 'ayu', '2018-08-07', '06:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `tb_pemeriksaan` (
  `id_pks` int(100) NOT NULL AUTO_INCREMENT,
  `id_p_pks` int(100) NOT NULL,
  `keluhan_pks` text NOT NULL,
  `tindakan_pks` text NOT NULL,
  `resep_pks` text NOT NULL,
  `status_pks` int(100) NOT NULL,
  `admin_input_pks` varchar(100) NOT NULL,
  `tanggal_input_pks` date NOT NULL,
  `jam_input_pks` time NOT NULL,
  PRIMARY KEY (`id_pks`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pks`, `id_p_pks`, `keluhan_pks`, `tindakan_pks`, `resep_pks`, `status_pks`, `admin_input_pks`, `tanggal_input_pks`, `jam_input_pks`) VALUES
(1, 1, 'aa', 'ss', 'dd', 1, 'rina', '2018-08-07', '01:21:03'),
(2, 2, '', '', '', 0, 'rina', '2018-08-07', '01:40:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
