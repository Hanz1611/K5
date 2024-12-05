-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2024 at 01:37 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectk5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(2, 'kelompok5', 'TPLP019', 'Kelompok 5');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Sumbawa', 20000),
(2, 'Jakarta', 30000),
(3, 'Surabaya', 100000),
(4, 'Bandung', 80000),
(5, 'Medan', 150000),
(6, 'Yogyakarta', 90000),
(7, 'Makassar', 200000),
(8, 'Denpasar', 180000),
(9, 'Palembang', 110000),
(10, 'Semarang', 85000),
(11, 'Balikpapan', 170000),
(12, 'Malang', 95000),
(13, 'Padang', 120000),
(14, 'Pekanbaru', 130000),
(15, 'Pontianak', 160000),
(16, 'Samarinda', 190000),
(17, 'Tasikmalaya', 87000),
(18, 'Banjarmasin', 140000),
(19, 'Batam', 180000),
(20, 'Bandar Lampung', 100000),
(21, 'Serang', 75000),
(22, 'Solo', 89000),
(23, 'Kupang', 210000),
(24, 'Manado', 230000),
(25, 'Ambon', 250000),
(26, 'Jayapura', 300000),
(27, 'Bengkulu', 115000),
(28, 'Gorontalo', 220000),
(29, 'Ternate', 240000),
(30, 'Tarakan', 195000),
(31, 'Mataram', 175000),
(32, 'Pematangsiantar', 125000),
(33, 'Banda Aceh', 150000),
(34, 'Langsa', 140000),
(35, 'Lhokseumawe', 145000),
(36, 'Sabang', 160000),
(37, 'Subulussalam', 130000),
(38, 'Medan', 150000),
(39, 'Binjai', 145000),
(40, 'Tebing Tinggi', 140000),
(41, 'Pematangsiantar', 130000),
(42, 'Sibolga', 135000),
(43, 'Padang', 100000),
(44, 'Bukittinggi', 105000),
(45, 'Pariaman', 95000),
(46, 'Payakumbuh', 95000),
(47, 'Solok', 90000),
(48, 'Pekanbaru', 110000),
(49, 'Dumai', 120000),
(50, 'Selatpanjang', 115000),
(51, 'Batam', 140000),
(52, 'Tanjungpinang', 130000),
(53, 'Karimun', 125000),
(54, 'Jambi', 95000),
(55, 'Sungai Penuh', 85000),
(56, 'Palembang', 90000),
(57, 'Lubuklinggau', 95000),
(58, 'Prabumulih', 85000),
(59, 'Pagaralam', 85000),
(60, 'Bengkulu', 85000),
(61, 'Bandar Lampung', 70000),
(62, 'Metro', 65000),
(63, 'Pangkalpinang', 85000),
(64, 'Tanjung Pandan', 80000),
(65, 'Serang', 30000),
(66, 'Tangerang', 25000),
(67, 'Cilegon', 35000),
(68, 'Pandeglang', 40000),
(69, 'Bandung', 70000),
(70, 'Bekasi', 40000),
(71, 'Bogor', 35000),
(72, 'Depok', 30000),
(73, 'Sukabumi', 60000),
(74, 'Cirebon', 50000),
(75, 'Semarang', 60000),
(76, 'Solo', 45000),
(77, 'Magelang', 50000),
(78, 'Tegal', 50000),
(79, 'Purwokerto', 55000),
(80, 'Salatiga', 48000),
(81, 'Yogyakarta', 60000),
(82, 'Surabaya', 80000),
(83, 'Malang', 50000),
(84, 'Kediri', 55000),
(85, 'Madiun', 55000),
(86, 'Probolinggo', 60000),
(87, 'Banyuwangi', 65000),
(88, 'Denpasar', 100000),
(89, 'Singaraja', 95000),
(90, 'Mataram', 100000),
(91, 'Bima', 120000),
(92, 'Dompu', 115000),
(93, 'Kupang', 140000),
(94, 'Ende', 125000),
(95, 'Maumere', 130000),
(96, 'Waingapu', 135000),
(97, 'Labuan Bajo', 140000),
(98, 'Pontianak', 120000),
(99, 'Singkawang', 110000),
(100, 'Palangka Raya', 115000),
(101, 'Sampit', 110000),
(102, 'Pangkalan Bun', 120000),
(103, 'Banjarmasin', 130000),
(104, 'Banjarbaru', 125000),
(105, 'Martapura', 120000),
(106, 'Samarinda', 125000),
(107, 'Balikpapan', 130000),
(108, 'Bontang', 135000),
(109, 'Tarakan', 120000),
(110, 'Tanjung Selor', 125000),
(111, 'Manado', 135000),
(112, 'Bitung', 130000),
(113, 'Tomohon', 125000),
(114, 'Palu', 130000),
(115, 'Poso', 125000),
(116, 'Luwuk', 140000),
(117, 'Makassar', 120000),
(118, 'Parepare', 115000),
(119, 'Palopo', 110000),
(120, 'Kendari', 125000),
(121, 'Baubau', 130000),
(122, 'Gorontalo', 130000),
(123, 'Ambon', 140000),
(124, 'Tual', 145000),
(125, 'Ternate', 135000),
(126, 'Tidore', 130000),
(127, 'Jayapura', 150000),
(128, 'Merauke', 155000),
(129, 'Biak', 145000),
(130, 'Manokwari', 140000),
(131, 'Sorong', 145000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamt_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamt_pelanggan`) VALUES
(5, '07TPLP019@gmail.com', 'TPLP019', 'Mahasiswa/i019', '1234572', 'Unpam'),
(6, 'dosenunpam@mail.com', 'TPLP019', 'Rengga Erlangga', '0123456', 'Unpam');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `id_ongkir` int NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int NOT NULL,
  `alamt_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamt_pengiriman`) VALUES
(11, 112, 113, '2024-12-06', 1, 'jakarta', 30000, 'Jakarta selatan 16320');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int NOT NULL,
  `id_pembelian` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `berat` int NOT NULL,
  `subberat` int NOT NULL,
  `subharga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 2, 3, '', 0, 0, 0, 0),
(2, 1, 2, 2, '', 0, 0, 0, 0),
(3, 0, 4, 2, '', 0, 0, 0, 0),
(4, 7, 4, 2, '', 0, 0, 0, 0),
(5, 8, 4, 2, '', 0, 0, 0, 0),
(6, 9, 4, 2, '', 0, 0, 0, 0),
(7, 10, 5, 1, '', 0, 0, 0, 0),
(8, 10, 4, 1, '', 0, 0, 0, 0),
(9, 13, 5, 1, '', 0, 0, 0, 0),
(10, 13, 6, 1, '', 0, 0, 0, 0),
(11, 14, 4, 1, '', 0, 0, 0, 0),
(12, 14, 5, 1, '', 0, 0, 0, 0),
(13, 17, 4, 1, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int NOT NULL,
  `berat_produk` int NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(15, 'Sepatu', 1000000, 1000, 'P1.jpeg', 'Sepatu Gucci Asli		  '),
(16, 'Kemeja', 100000, 50, 'kemeja.jpg', '<p>Kemeja Pria Casual Formal - Pilihan Warna Stylish & Bahan Premium</p>\r\n<p>Material Premium: Terbuat dari bahan katun berkualitas tinggi, lembut di kulit, menyerap keringat, dan nyaman digunakan sepanjang hari.</p>\r\n<p>Desain Modern: Potongan slim fit (atau regular fit) untuk tampilan rapi dan modis, cocok untuk gaya casual maupun formal.</p>\r\n<p>Detail Elegan: Dilengkapi dengan kancing kuat dan rapi, jahitan halus, serta kerah yang presisi.</p>\r\n<p>Pilihan Warna & Ukuran: Tersedia dalam berbagai warna netral hingga cerah dan ukuran S hingga XXL, sesuai kebutuhan Anda.</p>\r\n<p>Mudah Dipadukan: Cocok dipadukan dengan celana jeans, chino, atau celana bahan untuk berbagai aktivitas.</p>\r\n<p>Bahan: 100% Katun (atau bahan lain sesuai produk)</p>\r\n<p>Model: Lengan panjang/pendek</p>\r\n<p>Ukuran: (S, M, L, XL, XXL) - Lihat tabel ukuran untuk detail lebih lanjut</p>\r\n<p>Warna: (Warna tersedia, misalnya: Putih, Hitam, Biru Navy, Abu-abu)</p>\r\n<p>Perawatan: Cuci dengan tangan atau mesin menggunakan air dingin, setrika dengan suhu rendah.</p>\r\n\r\n'),
(17, 'Tas Gucci', 2000000, 100, 'P2.jpeg', 'Tas Gucci Asli'),
(18, 'Selimut Gucci', 2500000, 75, 'selimut.jpeg', 'Selimut Gucci Asli		  '),
(19, 'Sendal Gucci', 1500000, 100, 'Sendal.jpg', 'Sendal Gucci Asli		  '),
(20, 'Sepatu Pria Biasa', 150000, 100, 'sepatu300.jpg', 'Sepatu Olahraga Pria		  ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
