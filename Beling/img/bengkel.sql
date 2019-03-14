-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 02:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_web`
--

CREATE TABLE `admin_web` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kata_sandi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_web`
--

INSERT INTO `admin_web` (`id_admin`, `username`, `kata_sandi`, `email`, `no_hp`) VALUES
(1, 'ade', '$2y$10$mDsm7YwErg4UtO18wdgvYO4s9azoKCChCCnXEkostGj', '', ''),
(2, 'admin', 'admin', '', ''),
(3, 'rizal', '$2y$10$5wxfAevFXEh7gi5zTYMsdeTXcqazx62PwE33PT2yMSv', '', ''),
(4, '', '12345', '1', 'jiwanrizal@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `bengkel`
--

CREATE TABLE `bengkel` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_kategori` char(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_kategori`, `nama`) VALUES
('K01', 'Mesin'),
('K02', 'Rem'),
('K03', 'Transmisi &Kopling'),
('K04', 'Sistem Bahan Bakar');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_order`
--

CREATE TABLE `daftar_order` (
  `kode_order` varchar(25) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tanggal_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `nama_produk` text NOT NULL,
  `jumbel` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_order`
--

INSERT INTO `daftar_order` (`kode_order`, `namalengkap`, `tanggal_order`, `jam_order`, `nama_produk`, `jumbel`, `total`, `status`) VALUES
('20181221051216', 'jiwan', '2018-12-21', '05:12:21', 'cakram', 1, 20000, 'Lunas'),
('20181221054346', 'jiwan', '2018-12-21', '05:43:53', 'cakram', 1, 20000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalku`
--

CREATE TABLE `jadwalku` (
  `jadwal_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jadwalku`
--

INSERT INTO `jadwalku` (`jadwal_id`, `date`, `title`, `description`, `username`) VALUES
(2, '2018-12-24 14:02:22', 'ukhkj', 'hjh', 'vino'),
(3, '2018-12-26 14:13:15', '1345', 'qwertyi', 'vino');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `kode_order` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `jumlah_transfer` varchar(50) NOT NULL,
  `alamat_kirim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`kode_order`, `tanggal`, `nama_pemilik`, `nama_bank`, `jumlah_transfer`, `alamat_kirim`) VALUES
('20181221051216', '2018-12-20', '20000', 'MANDIRI', '20000', 'KLLK'),
('20181221054346', '2018-12-25', '20000', 'MANDIRI', '10000', 'Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsul` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jawaban` varchar(225) DEFAULT NULL,
  `admin` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsul`, `username`, `tanggal`, `deskripsi`, `kategori`, `jawaban`, `admin`) VALUES
(1, 'jiwan', '2018-12-20', ' Hmm', 'Mesin', 'Testing', 'admin'),
(2, 'jiwan', '0000-00-00', ' Hmmmm', 'Mesin', 'Apa seh?', 'jiwan'),
(3, 'vino', '2018-12-20', ' mesin eror', 'Mesin', 'beli baru', 'vino'),
(4, 'fahrizal', '2018-12-20', ' Motor mogok', 'Mesin', 'Batuk', 'fahrizal');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id_model` char(3) NOT NULL,
  `id_motor` char(3) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `montir`
--

CREATE TABLE `montir` (
  `id_montir` int(11) NOT NULL,
  `nama_montir` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `montir`
--

INSERT INTO `montir` (`id_montir`, `nama_montir`, `no_hp`, `email`, `foto`) VALUES
(3, 'Custom', '-', '-', '-'),
(4, 'Joni', '085129182192', 'jiwanrizal@yahoo.com', 'testimonial-1.jpg'),
(5, 'Hoirul', '08271927192', 'jiwanrizal@yahoo.com', 'testimonial-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` char(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `nama`) VALUES
('H01', 'Honda'),
('Y01', 'Yamaha'),
('H02', 'Honda(Matic)'),
('Y02', 'Yamaha(Matic)'),
('H03', 'Honda(Bebek)'),
('Y03', 'Yamaha(Bebek)');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `keluhan` text NOT NULL,
  `total_bayar` varchar(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `jenis_perbaiki` varchar(50) NOT NULL,
  `nama_montir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `merk`, `alamat`, `no_hp`, `tanggal`, `jam`, `keluhan`, `total_bayar`, `kondisi`, `jenis_perbaiki`, `nama_montir`) VALUES
(34, 'fahrizal', 'Honda', 'Banyuwangi', '085933009120', '0000-00-00', '00:00:00', 'Bobrok', '0', 'Perbaikan Selesai', 'jalan', 'Joni'),
(35, 'admin', 'Honda', '', '655', '2018-12-02', '03:05:00', 'macet', '0', 'Perbaikan Selesai', 'bengkel', 'Custom'),
(36, 'fahrizal', 'Honda', 'knlkas', '1', '2018-12-10', '02:00:00', ' m ,', '0', 'Perbaikan Selesai', 'rumah', 'Hoirul');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `kode_order` varchar(25) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `telepon_pembeli` varchar(15) NOT NULL,
  `alamat_pembeli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`kode_order`, `nama_pembeli`, `email_pembeli`, `telepon_pembeli`, `alamat_pembeli`) VALUES
('20181118101300', 'Zizah', 'jiwanrizal@yahoo.com', '087654345321', 'BWI'),
('20181127012124', 'Jiwan', 'jiwanrizal@yahoo.com', '087654345321', 'banw'),
('20181127012124', 'jiwan', 'jnajsc', '09', 'dsc'),
('20181129124320', 'Jiwan', 'jiwanrizal@yahoo.com', '087654345321', 'bwi'),
('20181204085608', 'Jiwan', 'jiwanrizal@yahoo.com', '087654345321', 'BWI'),
('20181207092328', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'BWI'),
('20181207092600', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'BWI'),
('20181208105758', 'HME', 'jiwanrizal@yahoo.com', '087654345321', 'BANYUWANGI'),
('20181208110444', 'asd', 'jiwanrizal@yahoo.com', '213', 'sda'),
('20181208110444', 'asd', 'jiwanrizal@yahoo.com', '213', 'sda'),
('20181208111048', 'Hm', 'jiwanrizal@yahoo.com', '1321424', 'ad'),
('20181208015305', 'ks', 'jiwanrizal@yahoo.com', '087654345321', 'bai'),
('20181208015334', 'mls', 'jiwanrizal@yahoo.com', '087654345321', 'bi'),
('20181208015334', 'mls', 'jiwanrizal@yahoo.com', '087654345321', 'bi'),
('20181208063555', 'as', 'jiwanrizal@yahoo.com', '087654345321', 'ji'),
('20181208095936', 'OI', 'jiwanrizal@yahoo.com', '087654345321', 'ji'),
('20181209122254', 'wqs', 'jiwanrizal@yahoo.com', '087654345321', 'kn'),
('20181209122510', 'ji', 'jiwanrizal@yahoo.com', '087654345321', 's'),
('20181209122615', 'jias', 'jiwanrizal@yahoo.com', '087654345321', 's'),
('20181209122802', 'jij', 'jiwanrizal@yahoo.com', '087654345321', 'jns'),
('20181209122802', 'jij', 'jiwanrizal@yahoo.com', '087654345321', 'jns'),
('20181209123931', 'sad', 'jiwanrizal@yahoo.com', '087654345321', 'sq'),
('20181209123931', 'sad', 'jiwanrizal@yahoo.com', '087654345321', 'sq'),
('20181209124203', 'fnkw1', 'jiwanrizal@yahoo.com', '087654345321', 'kn'),
('20181209010606', 'ks', 'jiwanrizal@yahoo.com', '087654345321', 'jnj'),
('20181209010606', 'ks', 'jiwanrizal@yahoo.com', '087654345321', 'jnj'),
('20181209010606', 'ks', 'jiwanrizal@yahoo.com', '087654345321', 'jnj'),
('20181209010606', 'ks', 'jiwanrizal@yahoo.com', '087654345321', 'jnj'),
('20181209011038', 'jkn', 'jiwanrizal@yahoo.com', '087654345321', 'k;m'),
('20181209011038', 'jkn', 'jiwanrizal@yahoo.com', '087654345321', 'k;m'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209011335', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'jhkj'),
('20181209014341', 'jnsal', 'jiwanrizal@yahoo.com', '087654345321', 'sa'),
('20181209014552', 'jiwan', 'jiwanrizal@yahoo.com', '087654345321', 's'),
('20181209014804', 'ndsl', 'jiwanrizal@yahoo.com', '087654345321', 'jn'),
('20181209102414', 'ji', 'jiwanrizal@yahoo.com', '087654345321', 'kn'),
('20181209102849', 'NKN', 'jiwanrizal@yahoo.com', '087654345321', 'KNK'),
('20181209103117', 'Jiwan', 'jiwanrizal@yahoo.com', '087654345321', 'hhk'),
('20181209114038', 'bjb', 'jiwanrizal@yahoo.com', '087654345321', 's'),
('20181209115403', 'q', 'jiwanrizal@yahoo.com', '087654345321', 's'),
('20181209120132', 'jnj', 'jiwanrizal@yahoo.com', '087654345321', 'nknj'),
('20181209120132', 'jnj', 'jiwanrizal@yahoo.com', '087654345321', 'nknj'),
('20181209120132', 'jnj', 'jiwanrizal@yahoo.com', '087654345321', 'nknj'),
('20181209121027', 'hhj', 'jiwanrizal@yahoo.com', '087654345321', 'jbj'),
('20181209121027', 'hhj', 'jiwanrizal@yahoo.com', '087654345321', 'jbj'),
('20181209121522', 'jjk', 'jiwanrizal@yahoo.com', '087654345321', 'jhj'),
('20181209121855', 'jk', 'jiwanrizal@yahoo.com', '087654345321', 'bh'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122459', 'jjkn', 'jiwanrizal@yahoo.com', '087654345321', 'knkj'),
('20181209122756', 'kmkl', 'jiwanrizal@yahoo.com', '087654345321', 'jn'),
('20181209123436', 'hhb', 'jiwanrizal@yahoo.com', '087654345321', 'bjk'),
('20181210053318', 'njax', 'jiwanrizal@yahoo.com', '087654345321', 'jkk'),
('20181211012855', 'huk', 'jiwanrizal@yahoo.com', '087654345321', 'jbjk'),
('20181211014957', 'sdfa', 'jiwanrizal@yahoo.com', '087654345321', 'sad'),
('20181212100424', 'jkl', 'jiwanrizal@yahoo.com', '087654345321', 'uhjk'),
('20181212100450', 'lnk`', 'jiwanrizal@yahoo.com', '087654345321', 'hjkm'),
('20181212100535', 'nlk', 'jiwanrizal@yahoo.com', '087654345321', 'hvj'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181212111106', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181213100315', 'njkans', 'jiwanrizal@yahoo.com', '087654345321', 'jb'),
('20181213100635', 'Abi', 'jiwanrizal@yahoo.com', '087654345321', 'sq'),
('20181213101140', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'ww'),
('20181213101746', 'ad', 'jiwanrizal@yahoo.com', '087654345321', 'sx'),
('20181213011451', 'Aji', 'jiwanrizal@yahoo.com', '087654345321', 'hbj'),
('20181216114505', 'FahrizalAzi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181216114505', 'FahrizalAzi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181216114505', 'FahrizalAzi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181216114505', 'FahrizalAzi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181216114505', 'FahrizalAzi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217030125', 'FahrizalAzi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217030715', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217090804', 'Azi', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217115800', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217115907', 'Aji', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217115907', 'Aji', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181217065248', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181218121240', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181218121809', 'bagus ardiansyah', 'banggarocker@gmail.com', '214710', 'testing'),
('20181219082351', 'Fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Bwi'),
('20181219082505', 'Oi', 'jiwanrizal@yahoo.com', '087654345321', 'Tetew'),
('20181219035616', 'fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181220124512', 'jiwan', 'jiwanrizal@yahoo.com', '085736586636', 'Banyuwangi'),
('20181220125115', 'jiwan', 'jiwanrizal@yahoo.com', '085736586636', 'Banyuwangi'),
('20181220075458', 'fahrizal', 'jiwanrizal@yahoo.com', '089', 'klmk'),
('20181220100932', 'fahrizal', 'jiwanrizal@yahoo.com', '879813798', 'Banyuwangi'),
('20181221023132', 'fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181221023418', 'fahrizal', 'jiwanrizal@yahoo.com', '087654345321', 'Banyuwangi'),
('20181221040048', 'fahrizal', 'jiwanrizal@yahoo.com', '10000', 'Banyuwangi'),
('20181221040431', 'fahrizal', 'jiwanrizal@yahoo.com', '10000', 'Hm'),
('20181221040951', 'fahrizal', 'jiwanrizal@yahoo.com', '123', 'knlk'),
('20181221045205', 'fahrizal', 'jiwanrizal@yahoo.com', '99', 'Banyuwangi'),
('20181221045531', 'jiwan', 'jiwanrizal@yahoo.com', '085736586636', 'Banyuwangi'),
('20181221051216', 'jiwan', 'jiwanrizal@yahoo.com', '085736586636', 'Banyuwangi'),
('20181221054346', 'jiwan', 'jiwanrizal@yahoo.com', '085736586636', 'Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `perbaiki`
--

CREATE TABLE `perbaiki` (
  `id_perbaiki` int(11) NOT NULL,
  `jenis_perbaiki` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbaiki`
--

INSERT INTO `perbaiki` (`id_perbaiki`, `jenis_perbaiki`) VALUES
(1, 'rumah'),
(2, 'jalan'),
(3, 'bengkel');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `stok` varchar(3) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `category`, `nama_produk`, `gambar`, `deskripsi`, `harga`, `stok`, `views`) VALUES
(359, 'Honda', 'Sistem Bahan Bakar', 'Boom', '3361619258.jpg', 'Wenank', 10000, '6', 21),
(361, 'Honda', 'Rem', 'cakram', 'artem-bali-569862-unsplash.jpg', 'Cakram ini sangat rekomendasi', 20000, '7', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_order` varchar(25) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_order`, `nama_pembeli`, `name`, `quantity`, `totalx`) VALUES
('20181209014341', 'jnsal', '', 0, 0),
('20181209014552', 'jiwan', '', 0, 0),
('20181209014804', 'ndsl', '', 0, 0),
('20181209102414', 'ji', '', 0, 0),
('20181209102849', 'NKN', '', 0, 0),
('20181209103117', 'Jiwan', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trans_servis`
--

CREATE TABLE `trans_servis` (
  `id_trans` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `total_bayar` varchar(225) NOT NULL,
  `jum_tf` int(11) NOT NULL,
  `bukti_tf` varchar(64) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_servis`
--

INSERT INTO `trans_servis` (`id_trans`, `username`, `total_bayar`, `jum_tf`, `bukti_tf`, `kondisi`) VALUES
(28, 'fahrizal', '10_kali_servis(Rp.190.000)', 100000, 'about-vision.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `trik`
--

CREATE TABLE `trik` (
  `id_trik` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trik`
--

INSERT INTO `trik` (`id_trik`, `judul`, `gambar`, `deskripsi`) VALUES
(3, 'Cara merawat aki', '3361619258.jpg', 'Cara merawat aki yang benar yaitu dengan mengecek setiap saat'),
(4, 'Cara Mengganti Oli', 'Ganti-Oli.jpg', 'Langkah pertama yang harus dilakukan adalah\r\n1. Membeli Oli');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `no_hp`, `kondisi`) VALUES
(4, 'fahrizal', 'abcdefg', 'jiwanrizal@yahoo.com', '0', ''),
(7, 'jiwan', '12345', 'jiwanrizal@yahoo.com', '085736586636', ''),
(10, 'boy', '12345', 'jiwanrizal@yahoo.com', '085736586636', ''),
(11, 'bang', '12345', 'jiwanrizal@yahoo.com', '0', 'Kosong'),
(12, 'vino', '12345', 'vino@gmail.com', 'Kosong', ''),
(13, 'affan', '123', 'affan@gmail.com', 'Kosong', '1212345675678');

-- --------------------------------------------------------

--
-- Table structure for table `user_servis`
--

CREATE TABLE `user_servis` (
  `id_servis` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_servis`
--

INSERT INTO `user_servis` (`id_servis`, `username`, `no_hp`, `alamat`, `merk`, `pilihan`, `jumlah`, `tanggal`) VALUES
(11, 'jiwan', '085933009120', 'Banyuwangi', 'Honda', 'Servis/1 minggu', '5_kali_servis(Rp.100.000)', '2018-12-31'),
(14, 'fahrizal', '085933009120', 'Banyuwangi', 'Honda', 'Servis/3 minggu', '10_kali_servis(Rp.190.000)', '2018-12-31'),
(15, 'vino', '089653126712', 'gebang', 'Honda', 'Servis/1 minggu', '10_kali_servis(Rp.190.000)', '2018-12-24'),
(16, 'vino', '089653126712', 'gebang', 'Yamaha', 'Servis/3 minggu', '5_kali_servis(Rp.100.000)', '2018-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_web`
--
ALTER TABLE `admin_web`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `jadwalku`
--
ALTER TABLE `jadwalku`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`kode_order`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsul`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id_model`),
  ADD KEY `id_motor` (`id_motor`);

--
-- Indexes for table `montir`
--
ALTER TABLE `montir`
  ADD PRIMARY KEY (`id_montir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `perbaiki`
--
ALTER TABLE `perbaiki`
  ADD PRIMARY KEY (`id_perbaiki`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `trans_servis`
--
ALTER TABLE `trans_servis`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `trik`
--
ALTER TABLE `trik`
  ADD PRIMARY KEY (`id_trik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_servis`
--
ALTER TABLE `user_servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_web`
--
ALTER TABLE `admin_web`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalku`
--
ALTER TABLE `jadwalku`
  MODIFY `jadwal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `montir`
--
ALTER TABLE `montir`
  MODIFY `id_montir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `perbaiki`
--
ALTER TABLE `perbaiki`
  MODIFY `id_perbaiki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans_servis`
--
ALTER TABLE `trans_servis`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trik`
--
ALTER TABLE `trik`
  MODIFY `id_trik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_servis`
--
ALTER TABLE `user_servis`
  MODIFY `id_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
