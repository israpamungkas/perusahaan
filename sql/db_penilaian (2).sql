-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 11:43 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penilaian`
--
CREATE DATABASE IF NOT EXISTS `db_penilaian` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_penilaian`;

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `id_agama` varchar(10) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `agama`, `status`) VALUES
('000000001', 'Islam', 1),
('000000002', 'Kristen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hmp_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_hmp_kriteria` (
  `jenis_id` int(11) NOT NULL AUTO_INCREMENT,
  `min` decimal(18,3) NOT NULL,
  `maks` decimal(18,3) NOT NULL,
  `himpunan` varchar(70) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `jenis_nilai` decimal(11,0) NOT NULL,
  PRIMARY KEY (`jenis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_hmp_kriteria`
--

INSERT INTO `tb_hmp_kriteria` (`jenis_id`, `min`, `maks`, `himpunan`, `keterangan`, `jenis_nilai`) VALUES
(0, '0.000', '0.000', '0', 'Belum di nilai', '0'),
(1, '0.001', '1.499', 'SK < 1.500', 'Sangat Kurang', '1'),
(2, '1.500', '2.999', 'K : 1.500-2.999', 'Kurang', '2'),
(3, '3.000', '3.749', 'C : 3.000-3.749', 'Cukup', '3'),
(4, '3.750', '4.499', 'B : 3.750-4.500', 'Baik', '4'),
(5, '4.500', '5.026', 'SB : > 4.500', 'Sangat Baik', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_surat`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_surat` (
  `jenis_id` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_surat` char(20) NOT NULL,
  PRIMARY KEY (`jenis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`jenis_id`, `jenis_surat`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kantor`
--

CREATE TABLE IF NOT EXISTS `tb_kantor` (
  `id_kantor` int(10) NOT NULL AUTO_INCREMENT,
  `kantor` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_kantor`
--

INSERT INTO `tb_kantor` (`id_kantor`, `kantor`) VALUES
(1, 'Head Office'),
(2, 'Central Kitchen'),
(3, 'Nannys Pavilon'),
(4, 'Porto'),
(5, 'Torigen'),
(6, 'Sushi Tora');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `tgl_msk` date NOT NULL,
  `jobs` varchar(25) NOT NULL,
  `office` varchar(20) NOT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `dateinput` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `gaji` longtext NOT NULL,
  PRIMARY KEY (`id_karyawan`),
  KEY `dateinput` (`dateinput`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama`, `tgl_msk`, `jobs`, `office`, `ket`, `dateinput`, `gaji`) VALUES
(3, 'Riana Yunianti', '2010-12-08', 'Admin Purchase', 'ck', '', '2018-05-23 01:30:21', '2700000'),
(4, 'Kurniawan', '2010-12-08', 'Finance', 'Head Office', '', '2018-05-23 01:30:29', '2500000'),
(5, 'Septian', '2015-12-01', 'Head Produksi', 'Head Office', '', '2018-05-23 01:30:33', '4000000'),
(6, 'Susi Susanti', '2018-01-04', 'Admin', 'Head Office', '', '2018-05-23 01:30:37', '3300000'),
(7, 'Yulis', '2017-10-10', 'Admin', 'Head Office', '', '2018-05-23 01:30:41', '3000000'),
(10, 'Diandra Putri', '2018-04-08', 'Finance', 'Head Office', '', '2018-05-22 16:33:19', '3000000'),
(11, 'Joko Susilo', '2017-04-01', 'Driver', 'ck', '', '2018-05-26 07:59:43', '3000000'),
(13, 'Purusotama', '2018-05-01', 'IT', 'Head Office', NULL, '2018-05-26 09:19:10', '3400000'),
(14, 'Irfan', '1970-01-01', 'IT', 'Head Office', NULL, NULL, '4000000'),
(15, 'Dwi Rizki', '2018-04-23', 'Desainer', 'Head Office', NULL, NULL, '3500000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
  `id_kriteria` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `khusus` decimal(30,3) NOT NULL,
  `umum` decimal(30,3) NOT NULL,
  `kehadiran` decimal(30,3) NOT NULL,
  `hukuman` decimal(30,3) NOT NULL,
  `jumlah_skala` decimal(30,3) NOT NULL,
  `jumlah_vektor` decimal(30,3) NOT NULL,
  `bobot` decimal(30,3) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama`, `khusus`, `umum`, `kehadiran`, `hukuman`, `jumlah_skala`, `jumlah_vektor`, `bobot`) VALUES
(1, 'khusus', '1.000', '2.000', '5.000', '7.000', '0.000', '0.000', '0.000'),
(2, 'umum', '0.500', '1.000', '3.000', '5.000', '0.000', '0.000', '0.000'),
(3, 'kehadiran', '0.200', '0.333', '1.000', '3.000', '0.000', '0.000', '0.000'),
(4, 'hukuman', '0.143', '0.200', '0.333', '1.000', '0.000', '0.000', '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria_khusus`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria_khusus` (
  `id_kriteria` int(30) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `pengetahuan` decimal(30,3) NOT NULL,
  `ketelitian` decimal(30,3) NOT NULL,
  `keputusan` decimal(30,3) NOT NULL,
  `tanggung_jwb` decimal(30,3) NOT NULL,
  `hasil_kerjaan` decimal(30,3) NOT NULL,
  `jumlah_skala` decimal(30,3) NOT NULL,
  `jumlah_vektor` decimal(30,3) NOT NULL,
  `bobot` decimal(30,3) NOT NULL,
  `bobot_akhir` decimal(30,3) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_kriteria_khusus`
--

INSERT INTO `tb_kriteria_khusus` (`id_kriteria`, `nama`, `pengetahuan`, `ketelitian`, `keputusan`, `tanggung_jwb`, `hasil_kerjaan`, `jumlah_skala`, `jumlah_vektor`, `bobot`, `bobot_akhir`) VALUES
(1, 'pengetahuan', '1.000', '5.000', '5.000', '5.000', '5.000', '0.000', '0.000', '0.000', '0.000'),
(2, 'ketelitian', '0.200', '1.000', '1.000', '0.200', '0.200', '0.000', '0.000', '0.000', '0.000'),
(3, 'keputusan', '0.200', '1.000', '1.000', '0.200', '0.200', '0.000', '0.000', '0.000', '0.000'),
(4, 'tanggung jawab', '1.000', '5.000', '5.000', '1.000', '0.100', '0.000', '0.000', '0.000', '0.000'),
(5, 'hasil kerjaan', '1.000', '5.000', '5.000', '1.000', '1.000', '0.000', '0.000', '0.000', '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE IF NOT EXISTS `tb_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'General Manager'),
(3, 'Manager'),
(4, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE IF NOT EXISTS `tb_penilaian` (
  `id_penilaian` int(30) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(30) NOT NULL,
  `jenis_id1` int(30) NOT NULL,
  `jenis_id2` int(30) NOT NULL,
  `jenis_id3` int(30) NOT NULL,
  `jenis_id4` int(30) NOT NULL,
  `jenis_id5` int(30) NOT NULL,
  `jenis_id6` int(30) NOT NULL,
  `jenis_id7` int(30) NOT NULL,
  `jenis_id8` int(30) NOT NULL,
  `jenis_id9` int(30) NOT NULL,
  `jenis_id10` int(30) NOT NULL,
  `jenis_id11` int(30) NOT NULL,
  `jenis_id12` int(30) NOT NULL,
  `jenis_id13` int(30) NOT NULL,
  `jenis_id14` int(30) NOT NULL,
  `jenis_id15` int(30) NOT NULL,
  `jenis_id16` int(30) NOT NULL,
  `jml_id` decimal(30,3) NOT NULL,
  `jenis_id` int(30) NOT NULL,
  PRIMARY KEY (`id_penilaian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `id_karyawan`, `jenis_id1`, `jenis_id2`, `jenis_id3`, `jenis_id4`, `jenis_id5`, `jenis_id6`, `jenis_id7`, `jenis_id8`, `jenis_id9`, `jenis_id10`, `jenis_id11`, `jenis_id12`, `jenis_id13`, `jenis_id14`, `jenis_id15`, `jenis_id16`, `jml_id`, `jenis_id`) VALUES
(1, 10, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.755', 3),
(2, 11, 5, 5, 5, 5, 5, 5, 1, 5, 5, 4, 3, 3, 5, 5, 5, 5, '4.721', 3),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000', 1),
(4, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000', 1),
(5, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000', 1),
(6, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keluar` (
  `surat_id` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_id` int(5) NOT NULL,
  `no_surat` char(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `untuk` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`surat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `jenis_id`, `no_surat`, `tgl_surat`, `untuk`, `perihal`, `ket`) VALUES
(1, 1, '900', '0000-00-00', 'iwan', 'hut', 'Keterangan\r\n'),
(3, 2, '03', '0000-00-00', 'gubernur jabar', 'hut bandung', 'ket bandung'),
(4, 1, '111111', '2015-11-18', 'abi', 'hut ciamis', 'keterangan'),
(5, 1, '900', '2017-10-17', 'dadang', 'hahaha', 'ket'),
(6, 7, 'asasasa', '2011-11-11', '1212', '21212', '12121');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_karyawan`, `nama`, `email`, `password`, `level`) VALUES
(1, 0, 'israpamungkas', 'israpamungkas@gmail.com', '12345', 1),
(2, 0, 'selvi okta', 'selviokta@gmail.com', '12345', 2),
(3, 0, 'Lidwina Yahya', 'lidwinayah@gmail.com', '12345', 3),
(4, 0, 'idelia', 'ideliacan@gmail.com', '12345', 3),
(5, 0, 'Billy Yonathan', 'billy.yonathan@gmail.com', '12345', 3),
(6, 0, 'Adhi', 'adhinugroho17@gmail.com', '12345', 3),
(7, 0, 'Riyan Adi Permana', 'riyanadip@gmail.com', '12345', 3),
(9, 0, 'zulkifly', 'zulkifly@gmail.com', '12345', 2),
(10, 10, 'Fresilia Astiania', 'fastiania@gmail.com', '12345', 4),
(11, 11, 'Joko Susilo', 'jokosusilo@gmail.com', '12345', 4),
(12, 13, 'Purusotama', 'purusotama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4),
(13, 14, 'Irfan', 'irfanrizki@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4),
(14, 15, 'Dwi Rizki', 'dwirizki@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
