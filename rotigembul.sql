-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 00.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotigembul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(9) NOT NULL,
  `no` int(9) NOT NULL,
  `kode` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `no`, `kode`, `nama`, `no_telp`, `email`, `alamat`, `username`, `password`, `updated_at`) VALUES
(26, 1, 200, 'adit', 232, 'kentod@gmail.com', 'adas', 'asda', '131', '2023-05-30 00:07:29'),
(28, 45454, 32, 'udib', 877, 'udin@gmail.com', 'asda', 'udin', '', '2023-05-30 00:05:54'),
(29, 123, 11, 'petot', 4343, 'petot@gmail.com', '123', 'petot', '', '2023-05-30 00:07:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemesanan`
--

CREATE TABLE `data_pemesanan` (
  `id` int(11) NOT NULL,
  `no` int(9) NOT NULL,
  `kode` int(9) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `jml_beli` int(9) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `total` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pemesanan`
--

INSERT INTO `data_pemesanan` (`id`, `no`, `kode`, `no_telp`, `jml_beli`, `detail`, `tgl_pesan`, `total`, `updated_at`) VALUES
(4, 123, 123, 123, 123, 'satu', '2023-05-11', '123', '2023-05-30 16:57:51'),
(5, 1234, 1234, 1234, 1234, 'sdasd', '2023-05-11', '1234', '2023-05-30 16:59:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produk`
--

CREATE TABLE `data_produk` (
  `id` int(9) NOT NULL,
  `kode` int(9) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` int(9) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_produk`
--

INSERT INTO `data_produk` (`id`, `kode`, `produk`, `harga`, `stok`, `foto`) VALUES
(20, 1, 'Sweetbul Chocomathine', '17000', 5, 'public/images/apx5YcBUio4DFBL4COM7uR3boPl6yzTqXg4cMLZ8.jpg'),
(21, 2, 'Keju Susu', '17000', 5, 'public/images/sVIaRul27tYPGLzgeWgBKbfReu6m6e9XGUHSstXo.jpg'),
(22, 3, 'Original', '10000', 5, 'public/images/YESWgZtrLCaaPhs6EiODn1P87vf7yTkCmR3Bxd9t.jpg'),
(23, 4, 'Tiramisu', '16000', 5, 'public/images/2wm5x1Qe09hJe9h61um25V2L52DSJiTRL2lPu8Ew.jpg'),
(24, 5, 'Oreo Cheese', '17000', 5, 'public/images/lpphKMzke6zVhWvJ1gsEsxD3ChRgwZ1NhgaMCLNU.jpg'),
(25, 6, 'Sweetbul Coklat Keju', '16000', 5, 'public/images/ncFt9DmsYN1NoTsOSEtMgxMMCQwXGZT1oRqV8YPR.jpg'),
(26, 7, 'Sweetbul Coklat Kacang', '16000', 5, 'public/images/Bp9qNdKetvq7OMqknfuIF8IaY0XzEfu3PCwUjoNp.jpg'),
(27, 8, 'Sweetbul GreenTea', '12000', 5, 'public/images/g4tuefOWsCPhgQnJjQr2znm2hy4I3tiBakArGvw4.jpg'),
(28, 9, 'Sweetbul Abon Saou', '18000', 5, 'public/images/9cka92BIBa3LSgloLCa2k3fmFoIKjUxxW2ytIwxs.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'adit', 'adit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
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
-- AUTO_INCREMENT untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
