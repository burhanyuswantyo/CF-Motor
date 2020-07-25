-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2020 pada 18.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cf_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kode` varchar(3) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `gejala`) VALUES
(1, 'G1', 'Tenaga mesin berkurang'),
(2, 'G2', 'Keluar asap putih pada knalpot'),
(3, 'G3', 'Suara kasar pada cyinder mesin'),
(4, 'G4', 'Getaran mesin sangat terasa'),
(5, 'G5', 'Suara berisik ketika gas di RPM rendah'),
(6, 'G6', 'Mesin brebet ketika dipacu'),
(7, 'G7', 'Mesin tersendat - sendat ketika berjalan'),
(8, 'G8', 'Suara kasar pada mesin bagian kiri'),
(9, 'G9', 'Motor tidak spontan saat akan berjalan'),
(10, 'G10', 'Sulit melakukan perpindahan gigi'),
(11, 'G11', 'Pedal transmisi lose'),
(12, 'G12', 'Pedal tidak mau berpindah transmisi (naik dan turun)'),
(13, 'G13', 'Gas tidak stationer'),
(14, 'G14', 'Keluar asap hitam pada knalpot'),
(15, 'G15', 'Boros BBM'),
(16, 'G16', 'Oli mesin cepat berkurang'),
(17, 'G17', 'Lampu indikator pada spedometer berkedip'),
(18, 'G18', 'Tampilan suhu mesin pada spedometer tidak stabil'),
(19, 'G19', 'Gas motor tidak stabil'),
(20, 'G20', 'Mesin susah dihidupkan'),
(21, 'G21', 'Tidak ada percikan api pada busi'),
(22, 'G22', 'Mesin meledak - meledak ketika berjalan'),
(23, 'G23', 'Percikan api pada busi berwarna kemerahan'),
(24, 'G24', 'Mesin mati tiba - tiba ketika sedang berjalan'),
(25, 'G25', 'Mesin brebet di RPM tinggi'),
(26, 'G26', 'Percikan busi pendek'),
(27, 'G27', 'Busi sering mati'),
(28, 'G28', 'Kelistrikan motor mati'),
(29, 'G29', 'Bohlam lampu sering mati'),
(30, 'G30', 'Aki cepat soak'),
(31, 'G31', 'Mesin tiba - tiba mati saat dihidupkan'),
(32, 'G32', 'Lampu indikator pada spedometer mati'),
(33, 'G33', 'Starter motor tidak berfungsi'),
(34, 'G34', 'Lampu menyala redup'),
(35, 'G35', 'Klakson bersuara pelan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `kode` varchar(3) NOT NULL,
  `kerusakan` text NOT NULL,
  `kepercayaan` float NOT NULL,
  `solusi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `kode`, `kerusakan`, `kepercayaan`, `solusi`, `created_at`) VALUES
(1, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:44:21'),
(2, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:45:25'),
(3, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:46:07'),
(4, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:46:43'),
(5, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:47:55'),
(6, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:48:39'),
(7, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:49:08'),
(8, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:49:24'),
(9, 'K4', 'Kopling', 0.0000000000000111022, '', '2020-07-25 14:50:10'),
(10, 'K2', 'Stang seher', -9, '', '2020-07-25 14:50:57'),
(11, 'K10', 'ECU', -20, '', '2020-07-25 14:51:16'),
(12, 'K2', 'Stang seher', -30, '', '2020-07-25 14:51:45'),
(13, 'K2', 'Stang seher', -30, '', '2020-07-25 14:52:37'),
(14, 'K2', 'Stang seher', -30, '', '2020-07-25 14:56:39'),
(15, 'K2', 'Stang seher', -30, '', '2020-07-25 15:01:16'),
(16, 'K2', 'Stang seher', -30, '', '2020-07-25 15:06:52'),
(17, 'K2', 'Stang seher', -30, '', '2020-07-25 15:24:48'),
(18, 'K2', 'Stang seher', -30, '', '2020-07-25 15:26:11'),
(19, 'K3', 'Rantai keteng', 70, '', '2020-07-25 15:38:51'),
(20, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:21:53'),
(21, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:02'),
(22, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:03'),
(23, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:04'),
(24, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:05'),
(25, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:05'),
(26, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:05'),
(27, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:05'),
(28, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:06'),
(29, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:06'),
(30, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:06'),
(31, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:06'),
(32, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:06'),
(33, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:06'),
(34, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:07'),
(35, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:07'),
(36, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:07'),
(37, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:07'),
(38, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:07'),
(39, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:07'),
(40, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:08'),
(41, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:08'),
(42, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:08'),
(43, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:08'),
(44, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:08'),
(45, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:09'),
(46, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:09'),
(47, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:09'),
(48, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:22:47'),
(49, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:23:00'),
(50, 'K3', 'Rantai keteng', 70, '', '2020-07-25 16:23:39'),
(51, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:24:18'),
(52, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:25:16'),
(53, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:25:26'),
(54, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:25:40'),
(55, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:25:58'),
(56, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:26:03'),
(57, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:26:08'),
(58, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:26:13'),
(59, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:26:35'),
(60, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:26:46'),
(61, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:27:07'),
(62, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:27:14'),
(63, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:27:21'),
(64, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '', '2020-07-25 16:27:30'),
(65, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:30:03'),
(66, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:30:51'),
(67, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:31:46'),
(68, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:32:20'),
(69, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:32:26'),
(70, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:32:48'),
(71, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:34:31'),
(72, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:35:29'),
(73, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:35:38'),
(74, 'K1', 'Piston, head cylinder, dan blok cylinder', 80, '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n', '2020-07-25 16:35:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id` int(11) NOT NULL,
  `kode` varchar(3) NOT NULL,
  `kerusakan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id`, `kode`, `kerusakan`, `solusi`) VALUES
(1, 'K1', 'Piston, head cylinder, dan blok cylinder', '- Periksa kondisi ring piston apakah bekerja dengan normal, jika tidak normal maka ganti ring piston\r\n\r\n- Periksa kondisi blok silinder apakah terjadi goresan pada dinding blok silinder, jika terjadi goresan maka ganti blok silinder, piston beserta ring piston\r\n\r\n- Periksa kekendoran setelan klep, jika terlalu kendor maka setelan klep di kencangkan lagi\r\n'),
(2, 'K2', 'Stang seher', 'Stang seher yang sudah longgar/oblak akan membuat getaran yang lebih, jika ini terjadi wajib mengganti stang seher dengan yang baru\r\n'),
(3, 'K3', 'Rantai keteng', '- Periksa kondisi rantai keteng, jika rantai keteng kaku maka ganti dengan yang baru\r\n- Periksa kondisi tensioner rantai keteng, jika sudah tidak dapat mengencangkan rantai maka ganti dengan yang baru\r\n'),
(4, 'K4', 'Kopling', '- Periksa kondisi kampas kopling, jika kampas kopling sudah habis/tipis maka ganti dengan yang baru\r\n- Periksa kondisi kekerasan per kopling, jika per kopling sudah lembek maka ganti yang baru\r\n'),
(5, 'K5', 'Transmisi', 'Melakukan turun mesin untuk memeriksa kondisi transmisi, jika ada part yang rusak maka ganti dengan yang baru\r\n'),
(6, 'K6', 'Klep', 'Periksa kondisi klep ketika tertutup, jika klep ada penyok dan tidak tertutup rapat maka ganti dengan yang baru\r\n'),
(7, 'K7', 'Injector', '- Periksa kondisi injektor, jika semprotan tersumbat maka bersihkan dengan alat injector cleaner\r\n- Periksa Kondisi injektor, jika mati total ganti injektor dengan yang baru\r\n'),
(8, 'K8', 'Busi', 'Ganti busi dengan yang baru\r\n'),
(9, 'K9', 'Koil', 'Ganti koil dengan yang baru\r\n'),
(10, 'K10', 'ECU', 'Ganti ECU dengan yang baru\r\n'),
(11, 'K11', 'Spul', '- Periksa kondisi kabel spul yang mengarah ke pengisian aki, jika ada kabel yang putus/lemah maka ganti kabelnya\r\n- Periksa kondisi spul, jika kondisi tembaga sudah tidak baik maka ganti spul atau gulung ulang tembaga\r\n'),
(12, 'K12', 'Kiprok', '- Periksa kondisi kiprok ketika mesin hidup, jika kiprok tidak mengeluarkan panas maka ganti kiprok\r\n- Jika kondisi kiprok baru masih sama gejalanya maka periksa bagian spul\r\n'),
(13, 'K13', 'Aki', '- Periksa kondisi daya aki, jika sudah lemah maka ganti aki baru/di cas\r\n- Jika kondisi aki baru masih sama gejalanya maka periksa bagian kiprok\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `kerusakan_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`id`, `kerusakan_id`, `gejala_id`, `mb`, `md`) VALUES
(1, 1, 1, 0.7, 0.2),
(2, 1, 2, 0.8, 0.1),
(3, 1, 3, 0.9, 0.1),
(4, 2, 1, 0.7, 0.4),
(5, 2, 4, 0.8, 0.1),
(6, 2, 5, 0.9, 0.7),
(7, 2, 6, 0.3, 0.5),
(8, 3, 1, 0.8, 0.1),
(9, 3, 7, 0.7, 0.5),
(10, 3, 8, 0.8, 0.4),
(11, 4, 1, 0.6, 0.2),
(12, 4, 9, 0.6, 0.5),
(13, 4, 10, 0.8, 0.9),
(14, 5, 10, 0.8, 0.5),
(15, 5, 11, 0.6, 0.7),
(16, 5, 12, 0.8, 0.4),
(17, 6, 13, 0.5, 0.4),
(18, 6, 14, 0.8, 0.6),
(19, 6, 15, 0.5, 0.7),
(20, 6, 16, 0.8, 0.9),
(21, 7, 17, 0.8, 0.4),
(22, 7, 18, 0.7, 0.3),
(23, 7, 19, 0.8, 0.7),
(24, 7, 15, 0.8, 0.9),
(25, 8, 20, 0.8, 0.7),
(26, 8, 21, 0.5, 0.8),
(27, 8, 22, 0.8, 0.9),
(28, 9, 20, 0.8, 0.5),
(29, 9, 23, 0.5, 0.6),
(30, 9, 24, 0.9, 0.7),
(31, 10, 20, 0.8, 0.5),
(32, 10, 25, 0.7, 0.9),
(33, 10, 26, 0.8, 0.6),
(34, 10, 27, 0.9, 0.7),
(35, 11, 20, 0.8, 0.6),
(36, 11, 28, 0.9, 0.4),
(37, 12, 29, 0.8, 0.4),
(38, 12, 30, 0.7, 0.7),
(39, 12, 31, 0.8, 0.8),
(40, 13, 32, 0.8, 0.8),
(41, 13, 33, 0.8, 0.9),
(42, 13, 34, 0.9, 0.5),
(43, 13, 35, 0.8, 0.7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `kerusakan_id` (`kerusakan_id`);

--
-- Indeks untuk tabel `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`kerusakan_id`) REFERENCES `kerusakan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
