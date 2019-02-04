-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 09:56 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bar_gtx`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_bpw`
--

CREATE TABLE `hasil_bpw` (
  `id` int(11) NOT NULL,
  `tanggal_hasil` date NOT NULL,
  `no_inisial_benang` int(11) NOT NULL,
  `jenis_benang` varchar(50) NOT NULL,
  `jenis_celup` varchar(50) NOT NULL,
  `no_mixing` varchar(50) NOT NULL,
  `no_party` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `panjang_penarikan` int(11) NOT NULL,
  `no_id` varchar(50) NOT NULL,
  `no_box` varchar(50) NOT NULL,
  `jumlah_cones` int(11) NOT NULL,
  `kilogram` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_bpw`
--

INSERT INTO `hasil_bpw` (`id`, `tanggal_hasil`, `no_inisial_benang`, `jenis_benang`, `jenis_celup`, `no_mixing`, `no_party`, `shift`, `panjang_penarikan`, `no_id`, `no_box`, `jumlah_cones`, `kilogram`) VALUES
(1, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5', '3', 2, 1),
(2, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5', '3', 2, 2),
(3, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 001', '3', 2, 1),
(4, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 002', '3', 2, 2),
(5, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 001', '3', 2, 1),
(6, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 002', '3', 2, 2),
(7, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 001', '3', 2, 1),
(8, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 002', '3', 2, 2),
(9, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 001', '3', 2, 1),
(10, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 002', '3', 2, 2),
(11, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 001', '3', 2, 1),
(12, '2019-01-29', 12, 'Argentina', 'Celup_satu', '0', '2', 'A', 2, '5 002', '3', 2, 2),
(13, '2019-01-29', 12, 'Brazil', 'Celup_tiga', '0', '2', 'A', 1, 'AAA 001', '2', 2, 1),
(14, '2019-01-29', 12, 'Brazil', 'Celup_tiga', '0', '2', 'A', 1, 'AAA 002', '2', 2, 4),
(15, '2019-01-29', 12, 'Argentina', 'Celup_tiga', '0', '1', 'A', 2, 'AAA 001', '2', 2, 14),
(16, '2019-01-29', 12, 'Argentina', 'Celup_tiga', '0', '1', 'A', 2, 'AAA 002', '2', 2, 14),
(17, '2019-01-29', 12, 'Brazil', 'Celup_empat', '12', '2', 'C', 2, 'AAA 001', '4', 2, 55),
(18, '2019-01-29', 12, 'Brazil', 'Celup_empat', '12', '2', 'C', 2, 'AAA 002', '4', 2, 55),
(19, '2019-01-30', 12, 'Argentina', 'indonesia', '2', '44', 'C', 14, 'BBB 001', '2', 4, 130),
(20, '2019-01-30', 12, 'Argentina', 'indonesia', '2', '44', 'C', 14, 'BBB 002', '2', 4, 130),
(21, '2019-01-30', 12, 'Argentina', 'indonesia', '2', '44', 'C', 14, 'BBB 003', '2', 4, 130),
(22, '2019-01-30', 12, 'Argentina', 'indonesia', '2', '44', 'C', 14, 'BBB 004', '2', 4, 130),
(23, '2019-02-01', 12, 'Argentina', 'indonesia', 'bebas', '44', 'B', 12, 'BBB 003', '2', 2, 44),
(24, '2019-02-01', 12, 'Argentina', 'indonesia', 'bebas', '44', 'B', 12, 'BBB 004', '2', 2, 44),
(25, '2019-02-20', 12, 'Brazil', 'indonesia', 'bebas', '44', 'B', 2, 'CCC 123', '2', 2, 16),
(26, '2019-02-20', 12, 'Brazil', 'indonesia', 'bebas', '44', 'B', 2, 'CCC 321', '2', 2, 16),
(27, '2019-02-02', 12, 'Argentina', 'indonesia', 'ines', '44', 'A', 444, 'DDD 123', '3', 3, 12),
(28, '2019-02-02', 12, 'Argentina', 'indonesia', 'ines', '44', 'A', 444, 'DDD 321', '3', 3, 12),
(29, '2019-02-02', 12, 'Argentina', 'indonesia', 'ines', '44', 'A', 444, 'DDD 444', '3', 3, 12),
(30, '2019-02-02', 12, 'India', 'indonesia', 'ines', '44', 'A', 22, 'DDD 001', '2', 2, 122),
(31, '2019-02-02', 12, 'India', 'indonesia', 'ines', '44', 'A', 22, 'DDD 321', '2', 2, 122),
(32, '2019-02-16', 2, 'Amerika', 'indonesia', 'baruna', '44', 'C', 3, 'DDD 1695', '2', 2, 44),
(33, '2019-02-16', 2, 'Amerika', 'indonesia', 'baruna', '44', 'C', 3, 'DDD 1695', '2', 2, 44),
(34, '2019-02-16', 2, 'Amerika', 'indonesia', 'baruna', '44', 'C', 3, 'CCC 001', '2', 2, 13),
(35, '2019-02-16', 2, 'Amerika', 'indonesia', 'baruna', '44', 'C', 3, 'CCC 234', '2', 2, 13),
(36, '2019-02-16', 2, 'Argentina', 'indonesia', 'bebas', '44', 'U', 22, 'EEE 144', '1', 2, 1000),
(37, '2019-02-16', 2, 'Argentina', 'indonesia', 'bebas', '44', 'U', 22, 'EEE 341', '1', 2, 1000),
(38, '2019-02-02', 12, 'India', 'indonesia', 'baruna', '44', 'C', 12, 'EEE 001', '2', 2, 44),
(39, '2019-02-02', 12, 'India', 'indonesia', 'baruna', '44', 'C', 12, 'EEE 1695', '2', 2, 44),
(40, '2019-02-02', 1442, 'Argentina', 'indonesia', 'baruna', '44', 'A', 144, 'EEE 12', '2', 4, 27),
(41, '2019-02-02', 1442, 'Argentina', 'indonesia', 'baruna', '44', 'A', 144, 'EEE 123', '2', 4, 27),
(42, '2019-02-02', 1442, 'Argentina', 'indonesia', 'baruna', '44', 'A', 144, 'EEE 1234', '2', 4, 27),
(43, '2019-02-02', 1442, 'Argentina', 'indonesia', 'baruna', '44', 'A', 144, 'EEE 12345', '2', 4, 27),
(44, '2019-02-02', 12, 'India', 'indonesia', 'bebas', '44', 'B', -2, 'EEE 13', '3', 3, 134),
(45, '2019-02-02', 12, 'India', 'indonesia', 'bebas', '44', 'B', -2, 'EEE 14', '3', 3, 134),
(46, '2019-02-02', 12, 'India', 'indonesia', 'bebas', '44', 'B', -2, 'EEE 15', '3', 3, 134),
(47, '2019-02-28', 12, 'Argentina', 'indonesia', '2', '44', 'A', 2, 'EEE 001', '3', 2, 155),
(48, '2019-02-28', 12, 'Argentina', 'indonesia', '2', '44', 'A', 2, 'EEE 002', '3', 2, 155),
(49, '2019-02-28', 23, 'Amerika', 'indonesia', 'baruna', '44', 'C', 133, 'EEE 12', '2', 2, 144),
(50, '2019-02-28', 23, 'Amerika', 'indonesia', 'baruna', '44', 'C', 133, 'EEE 123', '2', 2, 144),
(51, '2019-02-02', 2, 'Argentina', 'indonesia', 'bebas', '44', 'A', 22, 'Array 001', '2', 2, 234),
(52, '2019-02-02', 2, 'Argentina', 'indonesia', 'bebas', '44', 'A', 22, 'Array 123', '2', 2, 234),
(53, '2019-02-02', 12, 'Argentina', 'indonesia', '12', '44', 'A', 14, 'EEE 133', '23', 1, 2),
(54, '2019-02-02', 3, 'Brazil', 'indonesia', '4', '5', 'C', 5, 'FFF 001', '4', 2, 16),
(55, '2019-02-02', 3, 'Brazil', 'indonesia', '4', '5', 'C', 5, 'FFF 002', '4', 2, 16),
(56, '2019-02-02', 3, 'Brazil', 'indonesia', '4', '5', 'C', 5, 'FFF 1', '4', 2, 16),
(57, '2019-02-02', 3, 'Brazil', 'indonesia', '4', '5', 'C', 5, 'FFF 2', '4', 2, 16),
(58, '2019-02-02', 12, 'Brazil', 'indonesia', 'suzuki', '42', 'A', 39, 'Ecstar 001', '29', 2, 81),
(59, '2019-02-02', 12, 'Brazil', 'indonesia', 'suzuki', '42', 'A', 39, 'Ecstar 002', '29', 2, 81),
(60, '2019-02-28', 12, 'India', 'indonesia', '12', '169583', 'A', 12, 'GGG 111', '2', 2, 12),
(61, '2019-02-28', 12, 'India', 'indonesia', '12', '169583', 'A', 12, 'GGG 222', '2', 2, 12),
(62, '2019-02-04', 12, 'Argentina', 'indonesia', 'baruna', '14', 'C', 12, 'HHH 001', '1', 2, 12),
(63, '2019-02-04', 12, 'Argentina', 'indonesia', 'baruna', '14', 'C', 12, 'HHH 002', '1', 2, 12),
(64, '2019-02-04', 12, 'Argentina', 'indonesia', 'baruna', '31', 'B', 2, 'GRANDTEX 3311', '555', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_benang`
--

CREATE TABLE `jenis_benang` (
  `id` int(11) NOT NULL,
  `jenis_benang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_benang`
--

INSERT INTO `jenis_benang` (`id`, `jenis_benang`) VALUES
(1, 'Amerika'),
(2, 'India'),
(3, 'Brazil'),
(4, 'Argentina');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_celup`
--

CREATE TABLE `jenis_celup` (
  `id` int(11) NOT NULL,
  `jenis_celup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_celup`
--

INSERT INTO `jenis_celup` (`id`, `jenis_celup`) VALUES
(1, 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `jenis_benang` varchar(50) NOT NULL,
  `no_mixing` varchar(50) NOT NULL,
  `jumlah_cones` int(11) NOT NULL,
  `jumlah_kilogram` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `tanggal_terima`, `jenis_benang`, `no_mixing`, `jumlah_cones`, `jumlah_kilogram`) VALUES
(3, '2019-01-29', 'Amerika', '14', 4, 45),
(4, '2019-01-29', 'Brazil', '3', 4, 145),
(5, '2019-01-29', 'India', '7', 1, 51),
(6, '2019-01-29', 'Argentina', '61', 3, 95),
(7, '2019-01-29', 'Amerika', '14', 4, 44),
(8, '2019-01-29', 'Argentina', '14', 4, 55),
(9, '2019-01-30', 'India', '12', 2, 12),
(10, '2019-02-02', 'Argentina', '12', 2, 2),
(11, '2019-02-02', 'India', 'ines', 2, 44),
(12, '2019-02-04', 'India', 'gtx', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `no_inisial_benang` varchar(50) NOT NULL,
  `jenis_benang` varchar(50) NOT NULL,
  `jenis_celup` varchar(50) NOT NULL,
  `no_box` varchar(50) NOT NULL,
  `no_party` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `panjang_penarikan` varchar(50) NOT NULL,
  `no_mixing` varchar(50) NOT NULL,
  `no_id` varchar(11) NOT NULL,
  `jumlah_cones` varchar(50) NOT NULL,
  `kilogram` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal_pengeluaran`, `tujuan`, `no_inisial_benang`, `jenis_benang`, `jenis_celup`, `no_box`, `no_party`, `shift`, `panjang_penarikan`, `no_mixing`, `no_id`, `jumlah_cones`, `kilogram`) VALUES
(8, '2019-01-31', '2', '12', 'Brazil', 'Celup_empat', '4', '2', 'C', '2', '12', '0', '2', 55),
(9, '2019-01-31', '2', '12', 'Brazil', 'Celup_empat', '4', '2', 'C', '2', '12', 'AAA 001', '2', 55),
(10, '2019-01-31', 'gudang', '12', 'Argentina', 'indonesia', '2', '44', 'C', '14', '2', 'BBB 004', '4', 130),
(11, '2019-02-02', 'gudang', '23', 'Amerika', 'indonesia', '2', '44', 'C', '133', 'baruna', 'EEE 12', '2', 144),
(12, '2019-02-02', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 001', '2', 81),
(13, '2019-02-28', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 001', '2', 81),
(16, '2019-02-04', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 002', '2', 81),
(17, '2019-02-04', 'gudang', '12', 'India', 'indonesia', '2', '44', 'A', '22', 'ines', 'DDD 001', '2', 122),
(18, '2019-02-04', 'gudang', '12', 'India', 'indonesia', '2', '44', 'A', '22', 'ines', 'DDD 321', '2', 122),
(20, '2019-02-04', 'gudang', '12', 'India', 'indonesia', '2', '44', 'A', '22', 'ines', 'DDD 321', '2', 122),
(21, '2019-02-04', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 002', '2', 81),
(22, '2019-02-28', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 001', '2', 81),
(23, '2019-02-05', 'gudang', '12', 'India', 'indonesia', '3', '44', 'B', '-2', 'bebas', 'EEE 13', '3', 134),
(24, '2019-02-05', 'gudang', '12', 'India', 'indonesia', '3', '44', 'B', '-2', 'bebas', 'EEE 14', '3', 134),
(25, '2019-02-05', 'gudang', '12', 'India', 'indonesia', '3', '44', 'B', '-2', 'bebas', 'EEE 15', '3', 134),
(26, '2019-02-11', 'gudang', '12', 'Argentina', 'indonesia', '555', '31', 'B', '2', 'baruna', 'GRANDTEX 33', '1', 16),
(27, '2019-02-04', 'gudang', '12', 'India', 'indonesia', '2', '169583', 'A', '12', '12', 'GGG 111', '2', 12),
(28, '2019-02-05', 'gudang', '2', 'Amerika', 'indonesia', '2', '44', 'C', '3', 'baruna', 'DDD 1695', '2', 44),
(29, '2019-02-05', 'gudang', '2', 'Amerika', 'indonesia', '2', '44', 'C', '3', 'baruna', 'DDD 1695', '2', 44),
(30, '2019-02-04', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 001', '2', 81),
(31, '2019-02-04', 'gudang', '12', 'Brazil', 'indonesia', '29', '42', 'A', '39', 'suzuki', 'Ecstar 002', '2', 81),
(32, '2019-02-05', 'gudang', '12', 'India', 'indonesia', '3', '44', 'B', '-2', 'bebas', 'EEE 13', '3', 134),
(33, '2019-02-05', 'gudang', '12', 'India', 'indonesia', '3', '44', 'B', '-2', 'bebas', 'EEE 14', '3', 134),
(34, '2019-02-05', 'gudang', '12', 'Brazil', 'Celup_tiga', '2', '2', 'A', '1', '0', 'AAA 001', '2', 1),
(35, '2019-02-05', 'gudang', '2', 'Amerika', 'indonesia', '2', '44', 'C', '3', 'baruna', 'CCC 001', '2', 13),
(36, '2019-02-04', 'gudang', '12', 'Brazil', 'Celup_empat', '4', '2', 'C', '2', '12', 'AAA 001', '2', 55),
(37, '2019-02-04', 'gudang', '12', 'Brazil', 'Celup_empat', '4', '2', 'C', '2', '12', 'AAA 002', '2', 55),
(38, '2019-02-04', 'gudang', '12', 'Argentina', 'indonesia', '555', '31', 'B', '2', 'baruna', 'GRANDTEX 33', '1', 16),
(39, '2019-02-05', 'gudang', '50', 'AUSTRALIA', 'Celup Empat', '12', '123', 'A', '50', '2', '13', '2', 100),
(40, '2019-02-22', 'gudang', '12', 'India', 'indonesia', '2', '44', 'C', '12', 'baruna', 'EEE 001', '2', 44),
(41, '2019-02-22', 'gudang', '12', 'India', 'indonesia', '2', '44', 'C', '12', 'baruna', 'EEE 1695', '2', 44),
(42, '2019-02-28', 'gudang', '12', 'Brazil', 'indonesia', '2', '44', 'B', '2', 'bebas', 'CCC 123', '2', 16),
(43, '2019-02-28', 'gudang', '12', 'Brazil', 'indonesia', '2', '44', 'B', '2', 'bebas', 'CCC 321', '2', 16);

--
-- Triggers `pengeluaran`
--
DELIMITER $$
CREATE TRIGGER `jual` AFTER INSERT ON `pengeluaran` FOR EACH ROW BEGIN
INSERT INTO tabel_stok SET jenis_benang=NEW.jenis_benang,no_inisial_benang=-NEW.no_inisial_benang,no_box=NEW.no_box,no_party=NEW.no_Party,panjang_penarikan=NEW.panjang_penarikan,jumlah_cones=NEW.jumlah_cones,kilogram=NEW.kilogram ON DUPLICATE KEY UPDATE no_inisial_benang=no_inisial_benang=no_inisial_benang-NEW.no_inisial_benang,no_box=no_box=NEW.no_box,no_party=NEW.no_party,panjang_penarikan=NEW.panjang_penarikan,jumlah_cones=NEW.jumlah_cones,kilogram=NEW.kilogram;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_stok`
--

CREATE TABLE `tabel_stok` (
  `tanggal_hasil` date NOT NULL,
  `jenis_benang` varchar(50) NOT NULL,
  `jenis_celup` varchar(50) NOT NULL,
  `no_mixing` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `no_inisial_benang` int(11) NOT NULL,
  `no_box` varchar(50) NOT NULL,
  `no_party` varchar(50) NOT NULL,
  `panjang_penarikan` int(11) NOT NULL,
  `no_id` varchar(50) NOT NULL,
  `jumlah_cones` int(11) NOT NULL,
  `kilogram` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_stok`
--

INSERT INTO `tabel_stok` (`tanggal_hasil`, `jenis_benang`, `jenis_celup`, `no_mixing`, `shift`, `no_inisial_benang`, `no_box`, `no_party`, `panjang_penarikan`, `no_id`, `jumlah_cones`, `kilogram`) VALUES
('0000-00-00', 'India', '', '', '', 12, '', '', 0, '', 0, 0),
('0000-00-00', 'Brazil', '', '', '', 12, '', '', 0, '', 0, 0),
('0000-00-00', 'Brazil', '', '', '', 12, '29', '', 0, '', 0, 0),
('0000-00-00', 'India', '', '', '', 12, '3', '44', -2, '', 3, 0),
('0000-00-00', 'India', '', '', '', 12, '3', '44', -2, '', 3, 0),
('0000-00-00', 'India', '', '', '', 12, '3', '44', -2, '', 3, 0),
('0000-00-00', 'Argentina', '', '', '', 12, '555', '31', 2, '', 1, 0),
('0000-00-00', 'India', '', '', '', 12, '2', '169583', 12, '', 2, 0),
('0000-00-00', 'Amerika', '', '', '', 2, '2', '44', 3, '', 2, 0),
('0000-00-00', 'Amerika', '', '', '', 2, '2', '44', 3, '', 2, 0),
('0000-00-00', 'Brazil', '', '', '', 12, '29', '42', 39, '', 2, 81),
('0000-00-00', 'Brazil', '', '', '', 12, '29', '42', 39, '', 2, 81),
('0000-00-00', 'India', '', '', '', 12, '3', '44', -2, '', 3, -134),
('0000-00-00', 'India', '', '', '', 12, '3', '44', -2, '', 3, -134),
('0000-00-00', 'Brazil', '', '', '', 12, '2', '2', 1, '', 2, -1),
('0000-00-00', 'Amerika', '', '', '', 2, '2', '44', 3, '', 2, -13),
('0000-00-00', 'Brazil', '', '', '', 12, '4', '2', 2, '', 2, 55),
('0000-00-00', 'Brazil', '', '', '', 12, '4', '2', 2, '', 2, 55),
('0000-00-00', 'Argentina', '', '', '', -12, '555', '31', 2, '', 1, 16),
('0000-00-00', 'AUSTRALIA', '', '', '', -50, '12', '123', 50, '', 2, 100),
('0000-00-00', 'India', '', '', '', -12, '2', '44', 12, '', 2, 44),
('0000-00-00', 'India', '', '', '', -12, '2', '44', 12, '', 2, 44),
('0000-00-00', 'Brazil', '', '', '', -12, '2', '44', 2, '', 2, 16),
('0000-00-00', 'Brazil', '', '', '', -12, '2', '44', 2, '', 2, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_bpw`
--
ALTER TABLE `hasil_bpw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_benang`
--
ALTER TABLE `jenis_benang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_celup`
--
ALTER TABLE `jenis_celup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_bpw`
--
ALTER TABLE `hasil_bpw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `jenis_benang`
--
ALTER TABLE `jenis_benang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_celup`
--
ALTER TABLE `jenis_celup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
