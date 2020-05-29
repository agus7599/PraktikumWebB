-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2020 pada 07.41
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `kategori` varchar(32) NOT NULL,
  `rak` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `tahun`, `penulis`, `ISBN`, `pic`, `kategori`, `rak`, `stok`) VALUES
(1, 'Pergulatan Jepang dalam modernisasi pendidikan', 1993, 'Michio Nagai', '9795116592', '1.jpg', 'Sejarah', 1, 11),
(9, '7 In 1 Pemrograman Web Untuk Pemula', 2020, 'Rohi Abdulloh', '978-602-04-91', 'img1.jpg', 'Komputer', 2, 19),
(10, 'Perang Korea', 2020, 'Michael Wicaksono', '978-623-00-15', 'img2.jpg', 'Sejarah', 1, 15),
(11, 'Akuaponik: Integrated Farming yang Semakin Populer', 2019, 'Yuli Andriani & Zahidah', '978-623-224-0', 'img3.jpg', 'Pertanian', 2, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('mohon','dipinjam','dikembalikan','batal') NOT NULL DEFAULT 'mohon'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjam`, `id_buku`, `id_user`, `tgl_ambil`, `tgl_kembali`, `status`) VALUES
(2, 1, 5, '2020-05-27', '2020-05-29', 'dikembalikan'),
(4, 9, 7, '2020-05-29', '2020-06-05', 'dikembalikan'),
(5, 9, 7, '2020-05-28', '2020-06-05', 'dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('suadmin','user','admin','nonaktif') NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `email`, `password`, `role`, `picture`) VALUES
(1, 'Super', 'superadmin@gmail.com', 'super', 'suadmin', ''),
(2, 'Ilkom-Unud', 'ilkom@unud.ac.id', 'csunud', 'admin', ''),
(7, 'Wira', 'wrx2001@gmail.com', '12345', 'user', 'subaru (2).JPG'),
(8, 'Agus', 'lancer@gmail.com', 'qwerty', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
