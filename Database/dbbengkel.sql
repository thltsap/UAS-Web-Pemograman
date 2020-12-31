-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 09.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking`
--

CREATE TABLE `boking` (
  `idboking` int(50) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nomorhp` int(20) NOT NULL,
  `jenismobil` varchar(225) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `boking`
--

INSERT INTO `boking` (`idboking`, `nama`, `email`, `nomorhp`, `jenismobil`, `paket`, `alamat`) VALUES
(1, 'Rizky Saputra', 'saputra22@gmail.com', 2147483647, 'Toyota Avanza', '1.Paket Hemat', 'JL.Saturnus No.3D'),
(7, 'Galih Pramono', 'Galihhh@yahoo.com', 876543521, 'Suzuki Swift', '2.Paket Combo', 'JL.Mawar No.22A'),
(8, 'Dilan', 'Dylann22@gmail.com', 2147483647, 'Honda Jazz', '2.Paket Standard', 'JL.Anggrek '),
(9, 'Hana Diaondara', 'Hana23@gmail.com', 876543521, 'Honda Brio', '3.Paket Komplit', 'Jl.IndahRaya no.22A'),
(10, 'Leon Aryo Dion', 'Leonnnn@yahoo.com', 876753451, 'Nissan Juke', '1.Paket Hemat', 'JL.PerumJaya no.1C'),
(11, 'Arnio Deogre', 'ArnioDE@gmail.com', 2147483647, 'Toyota Fortuner', '3.Paket Super', 'JL.GreenVillage No.21D'),
(12, 'Rina Saputri', 'rinasaputri76@gmail.com', 2147483647, 'Daihatsu Sigra', '1.Paket Reguler', 'JL.Roka no. 3D'),
(13, 'Clara Romania', 'ClaraaaaRom@gmail.com', 2147483647, 'Toyota Rush', '2.Paket Combo', 'JL.PerumPembataan No.2G '),
(14, 'Dion Anodrana', 'anodrana8877@yahoo.com', 2147483647, 'Honda Mobilio', '3.Paket Super', 'JL.Sakura No.11C'),
(15, 'Rita Kamirana', 'kaminaranrina39@gmail.com', 838673423, 'Suzuki Ertiga', '3.Paket Komplit', 'JL.Sankurinag No.2E'),
(16, 'Irma Lyndrana', 'irmalyndrana@gmail.com', 2147483647, 'Toyota Innova', '1.Paket Hemat', 'JL.August No.27E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id_cu` int(11) NOT NULL,
  `nama_visit` varchar(100) DEFAULT NULL,
  `email_visit` varchar(120) DEFAULT NULL,
  `telp_visit` char(16) DEFAULT NULL,
  `pesan` longtext DEFAULT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id_cu`, `nama_visit`, `email_visit`, `telp_visit`, `pesan`, `tgl_posting`, `status`) VALUES
(10, 'Rizky', 'saputra22@gmail.com', '0983468903', 'iya\r\n', '2020-12-31 06:19:27', NULL),
(11, 'Hana', 'Boina@gmail.com', '38428749291', 'Good Work', '2020-12-31 08:15:03', NULL),
(12, 'Bima', 'Bimbim99@gmail.com', '0818367156', 'Kualitas bagus', '2020-12-31 08:15:33', NULL),
(13, 'Aryo', 'ryoAr23@yahoo.com', '09387768721', 'Petugas Berpengalaman dan Ramah', '2020-12-31 08:16:19', NULL),
(14, 'Kiavan', 'Kyaaaanm@gmail.com', '0893827846', 'Murahhhhh!!!!!!', '2020-12-31 08:17:02', NULL),
(15, 'Bunga', 'Bungaaanggrek@gmail.com', '080385873', 'Tempat nyaman', '2020-12-31 08:17:46', NULL),
(16, 'Gilang', 'Gialngaaann@gmail.com', '08747647622', 'Good Job', '2020-12-31 08:18:13', NULL),
(17, 'Rina', 'Rinanaarin598@yahoo.co.id', '0384987362', 'Kinerja baguss!!!', '2020-12-31 08:18:45', NULL),
(18, 'Joey', 'joeyyna12221@gmail.com', '08843762647', 'Harga Bersahabat!!', '2020-12-31 08:19:18', NULL),
(19, 'Robby', 'sirobbi5109@yahoo.com', '08847725674', 'Mobil Jadi bersih ', '2020-12-31 08:19:47', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(50) NOT NULL,
  `merk` varchar(225) NOT NULL,
  `jenisproduk` varchar(225) NOT NULL,
  `namaproduk` varchar(225) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `merk`, `jenisproduk`, `namaproduk`, `harga`) VALUES
(1, 'Bridgestone', 'Ban Mobil', 'Alenza001', 1200000),
(2, 'GForce', 'Minyak rem', 'GForce Brake Fluid DOT 3', 60000),
(3, 'Castrol', 'Oli Mesin', 'Castrol Magnatec SAE 10W-40', 360000),
(4, 'GT Radial', 'Ban Mobil', 'GT Radial Champiro ECO 195/60 R15', 780000),
(5, 'Eneos', 'Oli Mesin', 'Eneos CVT Fluid Asia 1L', 150000),
(6, 'Yuasa', 'Aki Mobil', 'Yuasa N-50Z MF', 1335000),
(7, 'GForce', 'Aki Mobil', 'GForce N50Z', 890000),
(8, 'Honda', 'Oli Rem', 'Honda Genuine Parts Minyak Rem 50 ml', 20000),
(9, 'Hankook', 'Ban Mobil', 'Hankook Ventus v2 Concept 2 h457 215/50 R17', 713000),
(10, 'Fastron', 'Aki Mobil', 'Fastron Gold SAE 4L', 421000),
(11, 'Amaron', 'Aki Mobil', 'Amaron Pro Din (45 Ah)', 1300000),
(12, 'Toyo', 'Ban Mobil', 'Toyo Tires Nano Energy 3 195/65 R15', 832000),
(13, 'BBS', 'Velg Mobil', 'BBS RS GT Ring 16 Silver', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `nama_Depan` varchar(225) NOT NULL,
  `nama_Belakang` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `signup`
--

INSERT INTO `signup` (`id`, `nama_Depan`, `nama_Belakang`, `email`, `password`, `alamat`) VALUES
(1, 'Aliv', 'Putri', 'aliv0099@gmail.com', 'aliv112233', 'Jl.Mawar No.23A'),
(2, 'Bagus', 'Lexi', 'gusbagus@gmail.com', 'gusqwew123', 'Jl.Sentosa No.2C'),
(3, 'Annnisa', 'Zahra', 'Zahrakuskus@yahoo.com', 'Alammu123', 'Jl.Batuah No.12D'),
(4, 'Aisyah', 'Zahwa', 'zahawawa@gmial.com', 'wawazahra', 'Jl.Belimbing No.1'),
(5, 'Amar', 'Pramudiya', 'amarmar34@gmail.com', 'marmar556677', 'Jl.Tol No.2F'),
(6, 'Aldiansyah', 'Putra', 'Aldi08@gmail.com', 'qwerty2343', 'Jl.Tol No.2F'),
(7, 'Intan', 'Ayu', 'AyuIntan@gmail.com', 'ayuayu809', 'Jl.Violet No.7D'),
(8, 'Akbar', 'Setyan', 'setyani@gmail.com', 'akbar.com', 'Jl.Neptunus No.1D'),
(9, 'Fahrul', 'Anwar', 'Anwarr34@gmail.com', 'fahrul2907', 'Jl.Biola No.9A'),
(10, 'Rafa', 'Ikhsan', 'rafaikhsan1@gmail.com', 'kuakui23angka', 'Jl.Bulan No.15F'),
(17, 'Amiza', 'Citra', 'AmizaCit67@yahoo.com', 'amizazahfira123', 'JL.Matahari No.13C'),
(18, 'Hana', 'Citra', 'Hana23@gmail.com', 'Hanaku123', 'JL.Kamboja No.12A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Hana', 'ee11cbb19052e40b07aac0ca060c23ee'),
(3, 'Agung', 'ee11cbb19052e40b07aac0ca060c23ee'),
(4, 'Rio', 'ee11cbb19052e40b07aac0ca060c23ee'),
(5, 'Faiz', 'ee11cbb19052e40b07aac0ca060c23ee'),
(6, 'Farel', 'ee11cbb19052e40b07aac0ca060c23ee'),
(7, 'Bima', 'ee11cbb19052e40b07aac0ca060c23ee'),
(8, 'Dion', 'ee11cbb19052e40b07aac0ca060c23ee'),
(9, 'Alea', 'ee11cbb19052e40b07aac0ca060c23ee'),
(10, 'Giondra', 'ee11cbb19052e40b07aac0ca060c23ee'),
(11, 'Cleon', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`idboking`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_cu`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indeks untuk tabel `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `boking`
--
ALTER TABLE `boking`
  MODIFY `idboking` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_cu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
