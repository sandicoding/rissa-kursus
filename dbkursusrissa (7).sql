-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 04:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkursusrissa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `idkontak` int(11) NOT NULL,
  `idtamu` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pesanuser` text NOT NULL,
  `pesanadmin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`idkontak`, `idtamu`, `username`, `pesanuser`, `pesanadmin`) VALUES
(1, 1, 'Akram', 'Mau tanya admin, Lokasi RMHR hanya di bandung saja ya?', ''),
(2, 1, 'Akram', '', 'Hallo kak, iya untuk saat ini lokasi RMHR baru di bandung saja.');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `idkursus` int(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`idkursus`, `tipe`, `bidang`, `harga`, `gambar`) VALUES
(1, 'Seni Musik', 'Vokal', -500000, 'vokal.png'),
(2, 'Seni Musik', 'Drum', 525000, 'drum.png'),
(3, 'Seni Musik', 'Gitar', 525000, 'gitar.png'),
(4, 'Seni Musik', 'Piano', 525000, 'piano.png'),
(5, 'Seni Musik', 'Bass', 525000, 'bass.png'),
(6, 'Seni Musik', 'Biola', 525000, 'biola.png'),
(7, 'Seni Tari', 'Line Dance', 525000, 'dance.png'),
(8, 'Seni Musik', 'Gambang', 525000, '97e42a82fc7911961d3ca55f54d1372c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `norek` varchar(15) NOT NULL,
  `namarek` varchar(50) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpesan`, `nama`, `harga`, `bank`, `norek`, `namarek`, `gambar`) VALUES
(1, 'Muhammad Akram Ali Shihab', 525000, 'BCA', '5500099528', 'Muhammad Akram', 'Screenshoot_20210724-143746_BCA mobile.jpeg'),
(2, 'Wiby Rio Aldianto', 525000, 'BCA', '1371418011', 'Wiby Rio Aldianto', 'bukti transfer wiby.jpeg'),
(3, 'Lora Oktoviani', 525000, 'BCA', '6970279017', 'Lora Oktoviani', 'transfer - lora drum.jpeg'),
(4, 'Indra Wijaya', 525000, 'BCA', '1371293944', 'Indra Wijaya', 'bukti trf indra.jpeg'),
(5, 'Marta Loren', 525000, 'BCA', '1611329003', 'Marta', 'marta transfer.jpeg'),
(6, 'Fanny G', 525000, 'BCA', '3070022957', 'Fanny G', 'fanny line dance.jpeg'),
(7, 'Rianti Li', 525000, 'BCA', '8710029238', 'Rianti Li', 'rianti bukti trf.jpeg'),
(8, 'Lahami Khrisna Parana', 525000, 'BCA', '7480158304', 'Lahami Khrisna Parana', 'bukti transfer Lahami.jpeg'),
(9, 'Reska Sartika', 525000, 'BCA', '8470145626', 'Reska Sartika', 'bukti trf reska.jpeg'),
(10, 'Elben', 525000, 'BCA', '6970279022', 'Elben', 'elben bukti trf.jpeg'),
(12, 'popy', 525000, 'BCA', '11111111', 'popyy', '1540447745_25-10-2018_14.jpg'),
(14, 'Rissa Gunawan', 525000, 'Mandiri', '292388329', 'Rissa', '1540447745_25-10-2018_14.jpg'),
(23, 'Rissa Gunawan', 525000, 'BCA', '121312321', 'Rissa Gunawan', '97e42a82fc7911961d3ca55f54d1372c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idpesan` int(11) NOT NULL,
  `idkursus` int(10) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `idtamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(95) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idpesan`, `idkursus`, `tipe`, `bidang`, `harga`, `idtamu`, `nama`, `alamat`, `telepon`, `status`, `created_at`) VALUES
(1, 5, 'Seni Musik', 'Bass', 525000, 1, 'Muhammad Akram Ali Shihab', 'Perumahan Tanah tinggi Residence, Blok C.31', '081286334605', 'Berhasil', '2021-07-24 07:33:14'),
(2, 3, 'Seni Musik', 'Gitar', 525000, 2, 'Wiby Rio Aldianto', 'Jl.Nanggerang, 004/004 No.68', '085692836133', 'Berhasil', '2021-07-24 08:54:23'),
(3, 2, 'Seni Musik', 'Drum', 525000, 3, 'Lora Oktoviani', 'Jl. Kartini Raya No.57 ', '085770048180', 'Berhasil', '2021-07-24 09:42:21'),
(4, 4, 'Seni Musik', 'Piano', 525000, 4, 'Indra Wijaya', 'Jl. damai raya kp. pulo 06/08 no.40', '082297246175', 'Berhasil', '2021-07-24 09:49:10'),
(5, 1, 'Seni Musik', 'Vokal', 525000, 5, 'Marta Loren', 'Apartmen Grand Kartini Hall A', ' 085694830022', 'Berhasil', '2021-07-24 09:56:47'),
(6, 7, 'Seni Tari', 'Line Dance', 525000, 6, 'Fanny G', 'Apartmen gunung sahari pademangan', '081219500094', 'Berhasil', '2021-07-24 10:14:19'),
(7, 1, 'Seni Musik', 'Vokal', 525000, 7, 'Rianti Li', 'Apartemen Serpong Green View Unit 1625', '085888240688', 'Berhasil', '2021-07-24 10:18:38'),
(8, 3, 'Seni Musik', 'Gitar', 525000, 8, 'Lahami Khrisna Parana', 'Jl. Supratman No.57, Cihapit', '081573008438', 'Berhasil', '2021-07-24 10:25:37'),
(9, 6, 'Seni Musik', 'Biola', 525000, 9, 'Reska Sartika', 'Jl. Pademangan 4, gang 22 No.17', '085886188003', 'Berhasil', '2021-07-24 10:34:16'),
(10, 6, 'Seni Musik', 'Biola', 525000, 10, 'Elben', 'Jl. Kebon jeruk 20B', '085714352499', 'Berhasil', '2021-07-24 10:43:52'),
(12, 1, 'Seni Musik', 'Vokal', 525000, 12, 'popy', 'jlmfdf', '00000', 'Berhasil', '2021-08-12 06:42:30'),
(13, 2, 'Seni Musik', 'Drum', 525000, 13, 'bobi', 'jl. buana', '08129381389', 'Berhasil', '2021-08-13 07:59:55'),
(14, 2, 'Seni Musik', 'Drum', 525000, 11, 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'Berhasil', '2021-08-18 09:32:36'),
(22, 1, 'Seni Musik', 'Vokal', 525000, 11, 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'Pending...', '2021-09-05 16:02:35'),
(23, 1, 'Seni Musik', 'Vokal', 525000, 11, 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'Pending...', '2021-09-10 09:45:12'),
(24, 5, 'Seni Musik', 'Bass', 525000, 17, 'unpam', 'jl. pamulang', '081298397478', 'Pending...', '2021-10-06 12:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `idtamu` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(95) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`idtamu`, `username`, `email`, `nama`, `alamat`, `telepon`, `password`, `foto`) VALUES
(1, 'Akram', 'muhammadakram8192@gmail.com', 'Muhammad Akram Ali Shihab', 'Perumahan Tanah tinggi Residence, Blok C.31', '081286334605', '24e1f0a4a5eb9f0aa1c9a55695215ba0', ''),
(2, 'Riowiby', 'wibyrioaldianto@gmail.com', 'Wiby Rio Aldianto', 'Jl.Nanggerang, 004/004 No.68', '085692836133', '1b4b260ca0649792d38800c89a0131ec', ''),
(3, 'Loraokto', 'lora.okto@gmail.com', 'Lora Oktoviani', 'Jl. Kartini Raya No.57 ', '085770048180', '32f7f3f57d444a36636963d6f9b9359a', ''),
(4, 'Indrawija', 'indraja30@gmail.com', 'Indra Wijaya', 'Jl. damai raya kp. pulo 06/08 no.40', '082297246175', 'd151522c10f18ae9638738e89c5f36da', ''),
(5, 'Martaloren', 'am.martaloren@gmail.com', 'Marta Loren', 'Apartmen Grand Kartini Hall A', ' 085694830022', '550810219ef138f792db1c37ada64a9f', ''),
(6, 'Fanny', 'fanny08@gmail.com', 'Fanny G', 'Apartmen gunung sahari pademangan', '081219500094', 'e041a5668df220b865149bad86135938', ''),
(7, 'Rianti', 'rianti29@gmail.com', 'Rianti Li', 'Apartemen Serpong Green View Unit 1625', '085888240688', 'b2cb539782dc88f0a7237156f1d601aa', ''),
(8, 'Lahami', 'Lahamiroesli82@gmail.com', 'Lahami Khrisna Parana', 'Jl. Supratman No.57, Cihapit', '081573008438', 'bffbdd9d1fcfcdc0cd3dc918d152c791', ''),
(9, 'Reska', 'reskasartika2222@gmail.com', 'Reska Sartika', 'Jl. Pademangan 4, gang 22 No.17', '085886188003', '0601c6de29fafee583fb0eae0d375c1e', ''),
(10, 'Elben', 'elbencalson01@gmail.com', 'Elben', 'Jl. Kebon jeruk 20B', '085714352499', 'c1a958d73928687cfbce55a6b39f7bee', ''),
(11, 'Rissa', 'Rissagunawan01@gmail.com', 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'a8e355dfb5efef8b630eb13d45165b32', 'WhatsApp Image 2021-07-02 at 17.11.30.jpeg'),
(12, 'popy', 'popy@gmail.com', 'popy', 'jlmfdf', '00000', '4297f44b13955235245b2497399d7a93', ''),
(13, 'bobi', 'bobi@gmail.com', 'bobi', 'jl. buana', '08129381389', 'f48bce50349f2af456a78c8888d8c785', ''),
(14, 'haris', 'haris@gmail.com', 'haris ', 'Jl. haris', '0812982938', 'a724fe728a2b49d3f41a0c2120eb7780', ''),
(16, 'papa', 'papa@gmail.com', 'papa', 'jl. papa', '08123123123', '4297f44b13955235245b2497399d7a93', ''),
(17, 'unpam', 'unpam@gmail.com', 'unpam', 'jl. pamulang', '081298397478', 'ac3918d01aeb2fd3a3e800c1ffdde525', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_seni`
--

CREATE TABLE `tb_jenis_seni` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kursus`
--

CREATE TABLE `tb_kursus` (
  `idkursus` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `bidang` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajar`
--

CREATE TABLE `tb_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `bidang` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkontak`),
  ADD KEY `fk_admin` (`username`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`idkursus`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `fk_kursus` (`idkursus`),
  ADD KEY `fk_tamu` (`idtamu`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`idtamu`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_seni`
--
ALTER TABLE `tb_jenis_seni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`idkursus`);

--
-- Indexes for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `idtamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenis_seni`
--
ALTER TABLE `tb_jenis_seni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  MODIFY `idkursus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_kursus` FOREIGN KEY (`idkursus`) REFERENCES `kursus` (`idkursus`),
  ADD CONSTRAINT `fk_tamu` FOREIGN KEY (`idtamu`) REFERENCES `tamu` (`idtamu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
