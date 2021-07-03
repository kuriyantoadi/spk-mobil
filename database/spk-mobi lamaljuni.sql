-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 13.55
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
-- Struktur dari tabel `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Teknik Komunikasi Dan Elektro'),
(2, 'Teknologi Industri Dan Informatika');

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
-- Struktur dari tabel `progdi`
--

CREATE TABLE IF NOT EXISTS `progdi` (
  `id_progdi` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultas` int(11) NOT NULL,
  `nama_progdi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_progdi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `progdi`
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
-- Struktur dari tabel `tb_analisa`
--

CREATE TABLE IF NOT EXISTS `tb_analisa` (
  `id_analisa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nilainya` varchar(11) NOT NULL,
  PRIMARY KEY (`id_analisa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tb_analisa`
--

INSERT INTO `tb_analisa` (`id_analisa`, `id_kriteria`, `id_mobil`, `nilainya`) VALUES
(1, 1, 1, '2'),
(2, 2, 1, '3'),
(3, 3, 1, '3'),
(4, 4, 1, '3'),
(5, 7, 1, '2'),
(6, 9, 1, '2'),
(7, 1, 2, '2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `atribut`, `bobot_nilai`, `nama_kriteria`) VALUES
(1, 'cost', '4', 'Harga'),
(2, 'benefit', '4', 'Tahun Produksi'),
(3, 'cost', '4', 'Kilometer'),
(4, 'benefit', '3', 'Eksterior'),
(7, 'benefit', '4', 'Interior'),
(9, 'benefit', '3', 'Kapasitas Penumpang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mobil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `nama_mobil`) VALUES
(1, 'Xenia'),
(2, 'Toyota Fortuner G TRD'),
(3, 'Honda HR -V Prestige'),
(4, 'Honda Brio Rs');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_nilai_kriteria`
--

INSERT INTO `tb_nilai_kriteria` (`id_tkriteria`, `id_kriteria`, `keterangan`, `nkriteria`) VALUES
(5, 9, '4 Kursi', '3'),
(6, 9, '2 Kursi', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
