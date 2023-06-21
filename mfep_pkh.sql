-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2021 pada 08.28
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfep_radio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(55) NOT NULL,
  `admin_tempat` varchar(100) NOT NULL,
  `admin_lahir` date NOT NULL,
  `admin_notelp` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_jk` varchar(10) NOT NULL,
  `admin_username` varchar(55) NOT NULL,
  `admin_password` varchar(55) NOT NULL,
  `admin_alamat` text NOT NULL,
  `admin_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_tempat`, `admin_lahir`, `admin_notelp`, `admin_email`, `admin_jk`, `admin_username`, `admin_password`, `admin_alamat`, `admin_foto`) VALUES
(7, 'admin', '', '0000-00-00', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'ronaldo.jpg'),
(12, 'Putra Evans', '', '0000-00-00', '', '', '', 'putra', '5e0c5a0bf82decdd43b2150b622c66c5', '', 'images.png'),
(18, 'zxczxc', '', '0000-00-00', '', '', '', 'zxczxc', 'ecb97ffafc1798cd2f67fcbc37226761', '', 'avatar5.png'),
(21, 'asd', 'asd', '2020-12-19', '40', 'asd@gmail.com', '', 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd', '51f6fb256629fc755b8870c801092942.png'),
(22, 'asd', 'a', '2019-04-17', '1', 'asd@gmail.com', 'Perempuan', 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', '1.jpg'),
(23, 'Praesentium et fugit', 'Ad illo facilis atqu', '1974-11-10', '76', 'nofu@mailinator.com', 'Perempuan', 'ledysevipy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Explicabo Blanditii', '51f6fb256629fc755b8870c801092942.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(100) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_tgl` date NOT NULL,
  `berita_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_tgl`, `berita_gambar`) VALUES
(1, 'SELEKSI MAHASISWA BARU STMIK INDONESIA', 'STMIK Indonesia Padang melakukan seleksi mahasiswa baru tahun ajaran 2020/2021 jalur beasiswa Hafizh Qurâ€™an. STMIK Indonesia memberikan beasiswa kepada mahasiswa di antaranya beasiswa Hafizh Qurâ€™an, Bidikmisi, PPA, Bank Nagari,serta prestasi akademik dan non akademik. Sa', '2020-07-09', '923220ab478374d13a9fd3ef28acf88d.jpg'),
(2, 'WEBINAR NASIONAL STMIK INDONESIA PADANG', 'STMIK Indonesia Padang hadir memberikan sharing ilmu dalam kegiatan seminar nasional secara online pada hari/tanggal Sabtu/ 27 Juni 2020, pukul 09.00 - selesai dengan tema â€œProspek dan peluang kerja lulusan IT di Era New Normal Covid-19.â€  WEBINAR ini bertuj', '2020-06-23', '04dde6e541c347544ff300d8fee89528.jpg'),
(3, 'ACARA WEBINAR NASIONAL STMIK INDONESIA PADANG', 'Sabtu, 27 Juni 2020. STMIK Indonesia Padang mengadakan acara webinar nasional yang bertemakan \"Prospek dan Peluang Kerja Lulusan IT di Era New Normal Covid19\". . . Acara ini berlangsung dari pukul 09.00 wib, yang ditayangkan langsung lewat media Zoom dan Youtube.', '2020-06-29', '4d74e0a956be4b26a87b4c4d3bc5e6ed.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `kriteria_nama` varchar(100) NOT NULL,
  `kriteria_bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_bobot`) VALUES
(1, 'Absensi', 0.1),
(2, 'Sikap Kerja', 0.15),
(3, 'Kemampuan Komunikasi', 0.3),
(4, 'Pemilihan Lagu', 0.15),
(5, 'Audience/Pendengar', 0.2),
(6, 'Masa Kerja', 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masakerja`
--

CREATE TABLE `tbl_masakerja` (
  `kerja_id` int(11) NOT NULL,
  `masa_kerja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_masakerja`
--

INSERT INTO `tbl_masakerja` (`kerja_id`, `masa_kerja`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normalisasi`
--

CREATE TABLE `tbl_normalisasi` (
  `normalisasi_id` int(11) NOT NULL,
  `penyiar_id` int(11) NOT NULL,
  `nor_absensi` varchar(100) NOT NULL,
  `nor_sikap` varchar(100) NOT NULL,
  `nor_komunikasi` varchar(100) NOT NULL,
  `nor_lagu` varchar(100) NOT NULL,
  `nor_pendengar` varchar(100) NOT NULL,
  `nor_masakerja` int(50) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_normalisasi`
--

INSERT INTO `tbl_normalisasi` (`normalisasi_id`, `penyiar_id`, `nor_absensi`, `nor_sikap`, `nor_komunikasi`, `nor_lagu`, `nor_pendengar`, `nor_masakerja`, `tgl_input`) VALUES
(61, 27, '4', '3', '4', '4', '2', 5, '2021-03-09 07:16:24'),
(62, 28, '1', '3', '2', '1', '2', 4, '2021-03-09 07:17:05'),
(63, 29, '3', '3', '3', '1', '2', 3, '2021-03-09 07:17:42'),
(64, 30, '3', '3', '2', '1', '2', 3, '2021-03-09 07:21:06'),
(65, 31, '4', '4', '3', '2', '2', 3, '2021-03-09 07:21:50'),
(66, 32, '4', '4', '3', '3', '2', 3, '2021-03-09 07:22:36'),
(67, 33, '1', '3', '4', '4', '2', 3, '2021-03-09 07:23:21'),
(68, 34, '4', '4', '2', '1', '2', 1, '2021-03-09 07:23:55'),
(69, 35, '1', '3', '3', '3', '2', 2, '2021-03-09 07:24:53'),
(70, 36, '4', '4', '2', '1', '2', 1, '2021-03-09 07:25:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `nilai_id` int(11) NOT NULL,
  `penyiar_id` int(11) NOT NULL,
  `absensi` varchar(100) NOT NULL,
  `sikap` float NOT NULL,
  `komunikasi` float NOT NULL,
  `lagu` varchar(100) NOT NULL,
  `pendengar` varchar(100) NOT NULL,
  `masa_kerja` varchar(50) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`nilai_id`, `penyiar_id`, `absensi`, `sikap`, `komunikasi`, `lagu`, `pendengar`, `masa_kerja`, `tgl_input`) VALUES
(59, 27, '96', 83.7, 100, '100', '48', '19', '2021-03-09 07:16:24'),
(60, 28, '30', 84.7, 64, '40', '12', '12', '2021-03-09 07:17:05'),
(61, 29, '90', 85, 67, '42', '17', '6', '2021-03-09 07:17:42'),
(62, 30, '90', 82.7, 61, '35', '15', '8', '2021-03-09 07:21:06'),
(63, 31, '99', 91.7, 70, '55', '46', '6', '2021-03-09 07:21:50'),
(64, 32, '100', 91, 73, '60', '10', '9', '2021-03-09 07:22:35'),
(65, 33, '10', 83.3, 100, '100', '12', '10', '2021-03-09 07:23:20'),
(66, 34, '98', 91, 60, '32', '12', '2', '2021-03-09 07:23:55'),
(67, 35, '25', 83.3, 73, '61', '9', '5', '2021-03-09 07:24:53'),
(68, 36, '100', 91.3, 64, '43', '20', '2', '2021-03-09 07:25:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyiar`
--

CREATE TABLE `tbl_penyiar` (
  `penyiar_id` int(11) NOT NULL,
  `penyiar_nama` varchar(100) NOT NULL,
  `penyiar_jk` varchar(15) NOT NULL,
  `penyiar_alamat` text NOT NULL,
  `penyiar_nohp` varchar(13) NOT NULL,
  `penyiar_email` varchar(50) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penyiar`
--

INSERT INTO `tbl_penyiar` (`penyiar_id`, `penyiar_nama`, `penyiar_jk`, `penyiar_alamat`, `penyiar_nohp`, `penyiar_email`, `tgl_input`) VALUES
(27, 'Malin Deman', 'Laki-Laki', 'Padang', '0867375937549', 'malin@gmail.com', '2020-11-02 09:38:43'),
(28, 'Aziz Rusli', 'Laki-Laki', 'Padang', '081273846289', 'aziz@gmail.com', '2020-11-02 09:39:07'),
(29, 'Nuri Lenggogeni', 'Perempuan', 'Padang', '08335846238', 'nuri@gmail.com', '2020-11-02 09:39:30'),
(30, 'Tya Ambun Suri', 'Perempuan', 'Padang', '0834435345345', 'tya@gmail.com', '2020-11-02 09:40:29'),
(31, 'Nilam Sari', 'Perempuan', 'Padang', '0823475849379', 'nilam@gmail.com', '2020-11-02 09:41:07'),
(32, 'Vanny Osega', 'Perempuan', 'Padang', '082314584024', 'vanny@gmail.com', '2020-11-02 09:41:44'),
(33, 'Nouval Palala', 'Laki-Laki', 'Padang', '082375739583', 'nouval@gmail.com', '2020-11-02 09:42:10'),
(34, 'Opy Yuristia', 'Perempuan', 'Padang', '082345679054', 'opy@gmail.com', '2020-11-02 09:42:58'),
(35, 'Rosa Candrima', 'Perempuan', 'Padang', '081285737473', 'rosa@gmail.com', '2020-11-02 09:43:25'),
(36, 'Ari Fauzan', 'Laki-Laki', 'Padang', '082342356832', 'ari@gmail.com', '2020-11-02 09:43:51'),
(37, 'Siti Maisyaroh', 'Perempuan', 'Padang', '083248583848', 'siti@gmail.com', '2020-11-02 09:44:19'),
(38, 'Nana Kemala', 'Perempuan', 'Padang', '081223457483', 'nana@gmail.com', '2020-11-02 09:44:46'),
(39, 'Resty Kinanti', 'Perempuan', 'Padang', '082323434343', 'resty@gmail.com', '2020-11-02 09:45:11'),
(40, 'Akbar Koto', 'Laki-Laki', 'Padang', '082344534568', 'akbar@gmail.com', '2020-11-02 09:45:43'),
(41, 'Uci Nur’aini', 'Perempuan', 'Padang', '082375748923', 'uci@gmail.com', '2020-11-02 09:46:38'),
(42, 'Pitto Mansiang', 'Laki-Laki', 'Padang', '082345748594', 'pitto@gmail.com', '2020-11-02 09:47:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `rank_id` int(11) NOT NULL,
  `penyiar_id` int(11) NOT NULL,
  `nilai_preferensi` float NOT NULL,
  `nilai_ev` float NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rank`
--

INSERT INTO `tbl_rank` (`rank_id`, `penyiar_id`, `nilai_preferensi`, `nilai_ev`, `tgl_input`) VALUES
(160, 17, 0, 2.5, '2020-10-24 07:44:29'),
(161, 18, 0, 2.3, '2020-10-24 07:44:29'),
(306, 43, 0.78, 3.9, '2020-11-08 10:10:32'),
(371, 27, 0.591667, 3.55, '2021-03-09 07:26:45'),
(372, 28, 0.35, 2.1, '2021-03-09 07:26:45'),
(373, 29, 0.416667, 2.5, '2021-03-09 07:26:45'),
(374, 30, 0.366667, 2.2, '2021-03-09 07:26:45'),
(375, 31, 0.483333, 2.9, '2021-03-09 07:26:45'),
(376, 32, 0.508333, 3.05, '2021-03-09 07:26:45'),
(377, 33, 0.508333, 3.05, '2021-03-09 07:26:45'),
(378, 34, 0.375, 2.25, '2021-03-09 07:26:45'),
(379, 35, 0.416667, 2.5, '2021-03-09 07:26:45'),
(380, 36, 0.375, 2.25, '2021-03-09 07:26:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indeks untuk tabel `tbl_masakerja`
--
ALTER TABLE `tbl_masakerja`
  ADD PRIMARY KEY (`kerja_id`);

--
-- Indeks untuk tabel `tbl_normalisasi`
--
ALTER TABLE `tbl_normalisasi`
  ADD PRIMARY KEY (`normalisasi_id`);

--
-- Indeks untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indeks untuk tabel `tbl_penyiar`
--
ALTER TABLE `tbl_penyiar`
  ADD PRIMARY KEY (`penyiar_id`);

--
-- Indeks untuk tabel `tbl_rank`
--
ALTER TABLE `tbl_rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_masakerja`
--
ALTER TABLE `tbl_masakerja`
  MODIFY `kerja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_normalisasi`
--
ALTER TABLE `tbl_normalisasi`
  MODIFY `normalisasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tbl_penyiar`
--
ALTER TABLE `tbl_penyiar`
  MODIFY `penyiar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tbl_rank`
--
ALTER TABLE `tbl_rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
