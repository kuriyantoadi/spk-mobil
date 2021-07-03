-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2021 at 04:47 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Teknik Komunikasi Dan Elektro'),
(2, 'Teknologi Industri Dan Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tipeharga` varchar(50) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `gambar4` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_pemilik`, `tipe`, `deskripsi`, `harga`, `tipeharga`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `status`) VALUES
(1, 2, 'putri', 'Kamar kos dengan beralamat di jalan di panjaitan gg karang baru III no 199 purwokerto banyumas jawa tengah ', '500000', 'bulan', '20180502_122736 (FILEminimizer).jpg', '20180502_123310 (FILEminimizer).jpg', '20180502_123403 (FILEminimizer).jpg', '20180502_123424 (FILEminimizer).jpg', 'y'),
(2, 1, 'putri', 'hunian kamar kos putri yang beralamat di jl di panjaitan gang karang baru ii no 63 purwokerto kabupaten banyumas jawa tengah ', '500000', 'bulan', '20180502_124414 (FILEminimizer).jpg', '20180502_124531 (FILEminimizer).jpg', '20180502_124615 (FILEminimizer).jpg', '20180502_124740 (FILEminimizer).jpg', 'y'),
(3, 3, 'putri', 'hunian kos khusus putri yang beralamat di jl di panjaitan purwokerto kabupaten banyumas jawa tengah ', '350000', 'bulan', '20180502_122324 (FILEminimizer).jpg', '20180502_122144 (FILEminimizer).jpg', '20180502_122210 (FILEminimizer).jpg', '20180502_122210 (FILEminimizer).jpg', 'y'),
(4, 4, 'campur', 'hunian kos untuk putra dan putri yang terletak di jl di panjaitan purwokerto kabupaten banyumas jawa tengah dna bertepatan di depan telkom purwokerto', '450000', 'bulan', '20180502_121206 (FILEminimizer).jpg', '20180502_120915 (FILEminimizer).jpg', '20180502_121033 (FILEminimizer).jpg', '20180502_120926 (FILEminimizer).jpg', 'y'),
(5, 5, 'putra', 'hunian kos untuk putra yang terletak di jl di panjaitan yang terdekat di kampus telkom purwokerto ', '400000', 'bulan', '20180502_125521 (FILEminimizer).jpg', '20180502_125542 (FILEminimizer).jpg', '20180502_125513 (FILEminimizer).jpg', '20180502_125640 (FILEminimizer).jpg', 'y'),
(6, 8, 'putri', 'Kost putri nyaman, bersih, dan aman.\r\n\r\nKamar furnished (ranjang, sprei, bantal, meja, kursi, AC, lemari, lampu, gorden, keranjang laundry, tempat sampah)\r\n\r\nKamar mandi dalam dilengkapi dengan air panas\r\n\r\nFree high speed wifi 24 jam\r\n\r\nFree TV cable', '1000000', 'bulan', '1495496555131966296_large.JPG', '1495496555672900354_large.JPG', '1495496555779341800_large.JPG', '149549655423510486_large.JPG', 'y'),
(7, 9, 'putri', 'Kost Putri Kamaratih\r\nkost khusus untuk wanita, baik Pekerja maupun mahasiswi\r\nlokasi dekat dengan RS Margono, Kampus II UMP di Sokaraja.', '750000', 'bulan', '14670796941038464028_large.jpg', '14670796901452830263_large.jpg', '146707969014528302631_large.jpg', '1467079693520531942_large.jpg', 'y'),
(8, 10, 'putra', 'kos YASMIN, terima kos cowok/putra di purwokerto. Fasilitas:kamar mandi dalam, aman, ada parkiran motor,\r\nAlamat: jl.puteran, belakang apt.anugrah berkoh, dari bunderan air mancur berkoh ke arah margono, sebelum apt.anugrah ada gang masuk 5m, ada warung makan padang sebelahnya ada gang kecil masuk 5m.', '400000', 'bulan', '1457538976859000817.jpg', '1457538976267953663.jpg', '1457538976919188111.jpg', '145753897687839443.jpg', 'y'),
(9, 11, 'putri', 'Disewakan kamar kost murah meriah, nyaman, fasilitas lengkap. Lokasi sangat dekat dengan Universitas Jenderal Soedirman UNSOED Purwokerto\r\nJl. Ahmad Djaelani Karangwangkal Purwokerto Utara', '300000', 'bulan', '145753909477321110.jpg', '14575392871197920773.jpg', '14575393761227180067.jpg', '145753909477321110.jpg', 'y'),
(10, 12, 'putri', 'TERIMA KOST PUTRI ARSYILA (dekat Fakultas Kedokteran UNSOED Purwokerto)  Dekat RS Margono Soekarjo (Â± 5menit), 10 menit dari terminal Purwokerto, 15 menit dari Pusat Kota Purwokerto.', '800000', 'bulan', '_1_.jpg', '_4_.jpg', '_2_.jpg', '_3_.jpg', 'y'),
(11, 13, 'putri', 'terima kost putri bersih dan nyaman fasiltas lengkap di dalam kamar ada kipas angin meja belajar dan lemari pakaian dan tempat tidur.fasilitas bersama ada ruang tamu, ruang santai ada tv dan kulkas,dan ada dapur beserta kompor dan gas. dan ada jemuran pakaian.', '450000', 'bulan', 'reno1.jpg', 'reno2.jpg', 'reno4.jpg', 'reno3.jpg', 'y'),
(12, 14, 'putri', 'Kos/kost putri/siswi/mahasiswi/karyawati \"Wisma Sakinah\"\r\n\r\nKomplek GOR Purwokerto. Strategis, dekat dgn Unsoed/Unsud, Al Irsyad, sentra kuliner GOR. Lingkungan asri, aman, nyaman.', '500000', 'bulan', 'sakinah1.jpg', 'sakinah3.jpg', 'sakinah4.jpg', 'sakinah2.jpg', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `password_asli` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('admin','pemilik','user') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `user`, `password`, `password_asli`, `nama`, `alamat`, `no_telepon`, `email`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'administrator', '', '', '', 'admin'),
(2, 'avit', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'avit', 'purwokerto', '085726345645', 'avita.rinovita@gmail', 'user'),
(10, '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', '2', '2', '2', '2@1', 'admin'),
(11, 'agus', '1', 'agus', 'Ahmad Suba Hasan, SE1', 'serang1', '11081', 'serang@email1', 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `progdi`
--

CREATE TABLE `progdi` (
  `id_progdi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_progdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progdi`
--

INSERT INTO `progdi` (`id_progdi`, `id_fakultas`, `nama_progdi`) VALUES
(1, 1, 'D3 Teknik Telekomunikasi'),
(2, 1, 'S1 Teknik Telekomunikasi '),
(3, 1, 'S1 Teknik Elektro'),
(4, 2, 'S1 Teknik Informatika'),
(5, 2, 'S1 Software Engineering'),
(6, 2, 'S1 Sistem Informasi'),
(7, 2, 'S1 Teknik Industri'),
(8, 2, 'S1 Desain Komunikasi Visual');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternative`
--

CREATE TABLE `tb_alternative` (
  `id_alternative` int(11) NOT NULL,
  `nama_alternative` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternative`
--

INSERT INTO `tb_alternative` (`id_alternative`, `nama_alternative`) VALUES
(19, 'new Avanza G'),
(20, 'Xenia E'),
(21, 'Vios'),
(22, 'new Avanza Veloz'),
(23, 'Agya G');

-- --------------------------------------------------------

--
-- Table structure for table `tb_analisa`
--

CREATE TABLE `tb_analisa` (
  `id_analisa` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nilainya` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_analisa`
--

INSERT INTO `tb_analisa` (`id_analisa`, `id_kriteria`, `id_mobil`, `nilainya`) VALUES
(1, 1, 1, '3'),
(2, 2, 1, '2'),
(3, 3, 1, '3'),
(4, 4, 1, '2'),
(5, 5, 1, '2'),
(6, 6, 1, '2'),
(7, 1, 2, '5'),
(8, 2, 2, '4'),
(9, 3, 2, '5'),
(10, 4, 2, '4'),
(11, 5, 2, '4'),
(12, 6, 2, '4'),
(13, 1, 3, '5'),
(14, 2, 3, '2'),
(15, 3, 3, '3'),
(16, 4, 3, '2'),
(17, 5, 3, '4'),
(18, 6, 3, '3'),
(19, 1, 4, '3'),
(20, 2, 4, '2'),
(21, 3, 4, '3'),
(22, 4, 4, '2'),
(23, 5, 4, '2'),
(24, 6, 4, '4'),
(26, 1, 5, '5'),
(27, 2, 5, '2'),
(28, 3, 5, '3'),
(29, 4, 5, '3'),
(30, 5, 5, '3'),
(31, 6, 5, '4'),
(32, 1, 8, '5'),
(33, 2, 8, '2'),
(34, 3, 8, '4'),
(35, 4, 8, '2'),
(36, 5, 8, '2'),
(37, 6, 8, '4'),
(38, 1, 9, '4'),
(39, 2, 9, '2'),
(40, 3, 9, '2'),
(41, 4, 9, '2'),
(42, 5, 9, '2'),
(43, 6, 9, '3'),
(44, 1, 10, '4'),
(45, 2, 10, '2'),
(46, 3, 10, '2'),
(47, 4, 10, '2'),
(48, 5, 10, '2'),
(49, 6, 10, '2'),
(50, 1, 11, '5'),
(51, 2, 11, '3'),
(52, 3, 11, '2'),
(53, 4, 11, '3'),
(54, 5, 11, '2'),
(55, 6, 11, '2'),
(56, 1, 12, '5'),
(57, 2, 12, '2'),
(58, 3, 12, '3'),
(59, 4, 12, '4'),
(60, 5, 12, '2'),
(61, 6, 12, '2'),
(63, 1, 13, '5'),
(64, 2, 13, '2'),
(65, 3, 13, '3'),
(66, 4, 13, '5'),
(67, 5, 13, '2'),
(68, 6, 13, '2'),
(69, 1, 14, '3'),
(70, 2, 14, '2'),
(71, 3, 14, '2'),
(72, 4, 14, '2'),
(73, 5, 14, '2'),
(74, 6, 14, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `atribut` varchar(50) NOT NULL,
  `bobot_nilai` varchar(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `atribut`, `bobot_nilai`, `nama_kriteria`) VALUES
(6, 'benefit', '1', 'tahun');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `nama_mobil`) VALUES
(1, 'Wisma Lensa'),
(2, 'Jasmine Kost'),
(3, 'Greenhouse'),
(4, 'ZINK Kost'),
(5, 'Kos Bu Tia'),
(8, 'Kost Putri Eksklusif'),
(9, 'Kos Putri Kamaratih'),
(10, 'Kos Yasmin'),
(11, 'Kos Putri Ahmad'),
(12, 'Kos Putri Arsyila'),
(13, 'Wisma Ketapang'),
(14, 'Wisma Sakinah'),
(18, 'dita kos');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_kriteria`
--

CREATE TABLE `tb_nilai_kriteria` (
  `id_tkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nkriteria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai_kriteria`
--

INSERT INTO `tb_nilai_kriteria` (`id_tkriteria`, `id_kriteria`, `keterangan`, `nkriteria`) VALUES
(1, 6, 'a', '1'),
(2, 6, '2019', '3'),
(3, 6, '2019', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `progdi`
--
ALTER TABLE `progdi`
  ADD PRIMARY KEY (`id_progdi`);

--
-- Indexes for table `tb_alternative`
--
ALTER TABLE `tb_alternative`
  ADD PRIMARY KEY (`id_alternative`);

--
-- Indexes for table `tb_analisa`
--
ALTER TABLE `tb_analisa`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  ADD PRIMARY KEY (`id_tkriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `progdi`
--
ALTER TABLE `progdi`
  MODIFY `id_progdi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_alternative`
--
ALTER TABLE `tb_alternative`
  MODIFY `id_alternative` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_analisa`
--
ALTER TABLE `tb_analisa`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  MODIFY `id_tkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
