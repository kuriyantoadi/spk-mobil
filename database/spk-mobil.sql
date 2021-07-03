-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2021 pada 07.28
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `spk-mobil`
--
CREATE DATABASE IF NOT EXISTS `spk-mobil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spk-mobil`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemilik` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tipeharga` varchar(50) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `gambar4` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `kamar`
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
(12, 14, 'putri', 'Kos/kost putri/siswi/mahasiswi/karyawati "Wisma Sakinah"\r\n\r\nKomplek GOR Purwokerto. Strategis, dekat dgn Unsoed/Unsud, Al Irsyad, sentra kuliner GOR. Lingkungan asri, aman, nyaman.', '500000', 'bulan', 'sakinah1.jpg', 'sakinah3.jpg', 'sakinah4.jpg', 'sakinah2.jpg', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `password_asli` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('admin','pemilik','user') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `user`, `password`, `password_asli`, `nama`, `alamat`, `no_telepon`, `email`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'administrator', '', '', '', 'admin'),
(2, 'avit', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'avit', 'purwokerto', '085726345645', 'avita.rinovita@gmail', 'user'),
(10, '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', '2', '2', '2', '2@1', 'admin'),
(11, 'agus', '1', 'agus', 'Ahmad Suba Hasan, SE1', 'serang1', '11081', 'serang@email1', 'pemilik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_analisa`
--

CREATE TABLE IF NOT EXISTS `tb_analisa` (
  `id_analisa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nilainya` varchar(11) NOT NULL,
  PRIMARY KEY (`id_analisa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `tb_analisa`
--

INSERT INTO `tb_analisa` (`id_analisa`, `id_kriteria`, `id_mobil`, `nilainya`) VALUES
(1, 1, 1, '2'),
(2, 2, 1, '3'),
(3, 3, 1, '1'),
(4, 4, 1, '4'),
(5, 5, 1, '3'),
(6, 6, 1, '4'),
(7, 1, 2, '3'),
(8, 2, 2, '4'),
(9, 3, 2, '2'),
(10, 4, 2, '3'),
(11, 5, 2, '3'),
(12, 6, 2, '3'),
(13, 1, 3, '3'),
(14, 2, 3, '4'),
(15, 3, 3, '2'),
(16, 4, 3, '2'),
(17, 5, 3, '3'),
(18, 6, 3, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `atribut` varchar(50) NOT NULL,
  `bobot_nilai` varchar(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `atribut`, `bobot_nilai`, `nama_kriteria`) VALUES
(1, 'cost', '3', 'Harga'),
(2, 'benefit', '4', 'Tahun Produksi'),
(3, 'cost', '4', 'Kilometer'),
(4, 'benefit', '2', 'Kapasitas Silinder'),
(5, 'benefit', '4', 'Eksterior'),
(6, 'benefit', '2', 'Kapasitas Penumpang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mobil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `nama_mobil`) VALUES
(1, 'Toyota Fortuner G TRD'),
(2, 'Honda HR-V Prestige'),
(3, 'Honda Brio RS'),
(4, 'Honda Jazz RS'),
(5, 'Honda Mobilio RS'),
(6, 'Toyota Rush TRD Sportivo'),
(7, 'Honda Freed E'),
(8, 'Suzuki Ertiga GL'),
(9, 'Toyota Innova G'),
(10, 'Mitsubihi Pajero Sport SUV'),
(11, 'Toyota Rush G'),
(12, 'Toyota Avanza G'),
(13, 'Honda City E'),
(14, 'Toyota Yaris S'),
(15, 'Mercedes-Benz C200'),
(16, 'Mitsubishi Xpander '),
(17, 'Daihatsu Terios R'),
(18, 'Honda Accord'),
(19, 'Honda Brio E'),
(20, 'Toyota Avanza E'),
(21, 'Nissan Grand Livina'),
(22, 'Mercedes-Benz C250');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_nilai_kriteria` (
  `id_tkriteria` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nkriteria` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tkriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `tb_nilai_kriteria`
--

INSERT INTO `tb_nilai_kriteria` (`id_tkriteria`, `id_kriteria`, `keterangan`, `nkriteria`) VALUES
(1, 1, '451.000.000 â€“ 650.000.000', '1'),
(2, 1, '251.000.000 â€“ 450.000.000', '2'),
(3, 1, '100.000.000 â€“ 250.000.000', '3'),
(4, 1, '< 100.000.000', '4'),
(5, 2, '2011 â€“ 2021', '4'),
(6, 2, '2006 â€“ 2010', '3'),
(7, 2, '2000 â€“ 2005', '2'),
(8, 2, '< 2000', '1'),
(9, 3, '101.000 â€“ 400.000', '1'),
(10, 3, '51.000 â€“ 100.000', '2'),
(11, 3, '15.000 â€“ 50.000', '3'),
(12, 3, '< 15.000', '4'),
(13, 5, 'Sangat Baik', '4'),
(14, 5, 'Baik', '3'),
(15, 5, 'Cukup', '2'),
(16, 5, 'Tidak Baik', '1'),
(17, 4, '2001â€“3500', '4'),
(18, 4, '1501â€“2000', '3'),
(19, 4, '1.001â€“ 1500', '2'),
(20, 4, '<1000', '1'),
(21, 6, '7', '4'),
(22, 6, '5', '3'),
(23, 6, '4', '2'),
(24, 6, '2', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
