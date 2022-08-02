-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2022 pada 17.30
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama_lengkap`, `alamat`) VALUES
(1, '36839227654', 'Andika Tulus Pangestu', 'Tegal, Jawa Tengah'),
(2, '36839227987', 'Mariana Grande', 'Brebes, Jawa Tengah'),
(6, '36839227890', 'Ronaldo Nazario', 'Purwokerto, Jawa Tengah'),
(7, '36839227876', 'Ricardo Kaka', 'Surabaya, Jawa Timur'),
(8, '36839227865', 'Javier Zanneti', 'Bandung, Jawa Barat'),
(9, '36839227432', 'Neymar Junior Da Silva', 'Brebes, Jawa Tengah'),
(10, '36839227111', 'Lionel Andreas Messi', 'Sleman, Yogyakarta'),
(11, '36839227332', 'Kylian Mbappe', 'Malang, Jawa Timur'),
(12, '36839227889', 'Stefano Lilipaly', 'Samarinda, Kalimantan Timur'),
(13, '3683922779', 'Nadeo Argawinata', 'Kediri, Jawa Timur'),
(14, '36839227680', 'Elkan Baggot', 'Madura, Jawa Timur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
