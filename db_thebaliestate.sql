-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 05.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thebaliestate`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_tanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_wc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_produk` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_agen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_agen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `buktipembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `id_pemilik`, `judul`, `jenis_property`, `sertifikat`, `imb`, `lokasi`, `luas`, `surat_tanah`, `jml_kamar`, `jml_wc`, `ket_produk`, `foto`, `status`, `harga`, `id_agen`, `status_agen`, `buktipembayaran`, `tanggal`) VALUES
(4, '10', 'Di jual Karna gak keurus bro', '1', 'ada', 'ada', 'Kuta Utara', '100', 'Ada', '2', '3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1623686980.png', 'Di Jual', '100000000000000', '8', '2', '1624025846.png', '2021-06-18'),
(5, '10', 'Di jual Karna gak keurus coy', '1', 'ada', 'ada', 'Kuta Utara', '100', 'Ada', '3', '2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut l', '1623733470.png', 'Di Jual', '100000000000000', '8', '2', '1624025982.png', '2021-06-18'),
(6, '10', 'Di jual Karna gak keurus coy 2', '1', 'ada', 'ada', 'Kuta Utara', '100', 'Ada', '3', '2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut l', '1623733470.png', 'Di Jual', '100000000000000', '8', '1', '', '0000-00-00'),
(7, '10', 'Di jual Karna gak keurus coy 3', '1', 'ada', 'ada', 'Kuta Utara', '100', 'Ada', '3', '2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut l', '1623733470.png', 'Di Jual', '100000000000000', '8', '1', '', '0000-00-00'),
(8, '10', 'Di jual Karna gak keurus bro', '1', 'ada', 'ada', 'Kuta Utara', '100', 'Ada', '2', '3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1623686980.png', 'Di Jual', '10', '8', '2', '1623732564.png', '2021-06-18'),
(9, '10', 'Di jual Karna gak keurus bro', '1', 'ada', 'ada', 'Kuta Utara', '100', 'Ada', '2', '3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1623686980.png', 'Di Jual', '10000', '8', '2', '1623732564.png', '2021-06-18'),
(10, '15', 'Dujual Rumah warisan', '1', 'ada', 'ada', 'Kuta Utara', '300 x 300 ', 'Ada', '4', '4', 'rumah ini sangatlah kami sayangi tetapi kebutuhan mengalahkan semuanya', '1624207815.jpg', 'Di Jual', '10000000000', '8', '1', '', '0000-00-00'),
(11, '15', 'Jual Rumah Mewah', '1', 'ada', 'ada', 'Sulawesi', '600 x 900 ', 'Ada', '4', '4', 'rumah ini sangatlah kami sayangi tetapi kebutuhan mengalahkan semuanya', '1624208087.jpg', 'Di Jual', '100000000000000', '15', '0', '', '0000-00-00'),
(12, '15', 'Jual Rumah Mewah di kuta', '1', 'ada', 'ada', 'legian kuta', '300 x 300 ', 'Ada', '4', '4', 'rumah ini ada di pesisirpantai legian yang dimana langsung ketemu dengan pantai dan melihat indahnya pantai legian', '1624208603.jpg', 'Di Jual', '100000000000000', '13', '1', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `no_nik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `laporan_penjualan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `alamat`, `no_tlp`, `umur`, `no_nik`, `email`, `password`, `image`, `level`, `status`, `laporan_penjualan`) VALUES
(8, 'Agus Yudi', 'agusyudi', 'dalung', '6281236246911', 20, '192093719248101010', 'smkagus8@gmail.com', '01c3c766ce47082b1b130daedd347ffd', '1624209731.png', '1', '1', ''),
(9, 'admin', 'admin', 'dalung', '6281236246911', 0, '', 'admin@estate.com', '0192023a7bbd73250516f069df18b500', '', '0', '1', ''),
(10, 'Kariasih', 'karia', 'denpasar', '081236246911', 20, '192093719248101010', 'karia@gmail.com', '9850533f8f0b1068217e3165cc775c60', '', '2', '1', ''),
(12, 'bayu', 'bayu', 'dalung', '975934678978', 0, '', 'bayu@gmail.com', '92360c2c392c85b23f38c188996f8d74', '1624209780.png', '1', '1', ''),
(13, 'Andi', 'andi', 'Denpasar Timur ', '6282124924610', 0, '', 'andi@gmail.com', '03339dc0dff443f15c254baccde9bece', '1624209757.png', '1', '1', ''),
(14, 'Chici', 'chici', 'Sanur', '6281344288794', 0, '', 'chichi@gmail.com', '03339dc0dff443f15c254baccde9bece', '1624209968.png', '1', '1', ''),
(15, 'Suwin', 'suwin', 'tabanan', '6285935234585', 0, '', 'suwindratama@gmail.com', 'faeb758c69474e6cc4e809768886750c', '', '2', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
