-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 18.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfep_pkh`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_tempat`, `admin_lahir`, `admin_notelp`, `admin_email`, `admin_jk`, `admin_username`, `admin_password`, `admin_alamat`, `admin_foto`) VALUES
(7, 'admin', '', '0000-00-00', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'ronaldo.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `kriteria_bobot` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_bobot`) VALUES
(1, 'Ibu Hamil', '0.17'),
(2, 'Anak Usia Dini', '0.17'),
(3, 'Anak SD', '0.06'),
(4, 'Anak SMP', '0.11'),
(5, 'Anak SMA', '0.15'),
(6, 'Disabilitas Berat', '0.17'),
(7, 'Lanjut Usia', '0.17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normalisasi`
--

CREATE TABLE `tbl_normalisasi` (
  `normalisasi_id` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nilai_ibu_hamil` decimal(10,2) NOT NULL,
  `nilai_usia_dini` decimal(10,2) NOT NULL,
  `nilai_sd` decimal(10,2) NOT NULL,
  `nilai_smp` decimal(10,2) NOT NULL,
  `nilai_sma` decimal(10,2) NOT NULL,
  `nilai_disabilitas` decimal(10,2) NOT NULL,
  `nilai_lanjut_usia` decimal(10,2) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_normalisasi`
--

INSERT INTO `tbl_normalisasi` (`normalisasi_id`, `id_penduduk`, `nilai_ibu_hamil`, `nilai_usia_dini`, `nilai_sd`, `nilai_smp`, `nilai_sma`, `nilai_disabilitas`, `nilai_lanjut_usia`, `tgl_input`) VALUES
(87, 42, '0.00', '10.00', '10.00', '10.00', '0.00', '10.00', '10.00', '2023-06-22 15:57:59'),
(88, 41, '10.00', '0.00', '0.00', '10.00', '0.00', '0.00', '10.00', '2023-06-22 15:58:24'),
(89, 40, '0.00', '0.00', '10.00', '0.00', '10.00', '10.00', '0.00', '2023-06-22 15:58:54'),
(90, 39, '10.00', '10.00', '0.00', '10.00', '0.00', '0.00', '10.00', '2023-06-22 15:59:19'),
(91, 38, '0.00', '10.00', '10.00', '0.00', '10.00', '0.00', '10.00', '2023-06-22 15:59:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `jk_penduduk` varchar(15) NOT NULL,
  `alamat_penduduk` text NOT NULL,
  `nohp_penduduk` varchar(13) NOT NULL,
  `email_penduduk` varchar(50) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `nama_penduduk`, `jk_penduduk`, `alamat_penduduk`, `nohp_penduduk`, `email_penduduk`, `tgl_input`) VALUES
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
(42, 'Pitto Mansiang', 'Laki-Laki', 'Padang', '082345748594', 'pitto@gmail.com', '2020-11-02 09:47:14'),
(48, 'tes', 'Perempuan ', 'tes', '11', 'aa', '2023-06-22 02:21:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `nilai_id` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `ibu_hamil` varchar(20) NOT NULL,
  `anak_usia_dini` varchar(20) NOT NULL,
  `anak_sd` varchar(20) NOT NULL,
  `anak_smp` varchar(20) NOT NULL,
  `anak_sma` varchar(20) NOT NULL,
  `disabilitas_berat` varchar(20) NOT NULL,
  `lanjut_usia` varchar(20) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`nilai_id`, `id_penduduk`, `ibu_hamil`, `anak_usia_dini`, `anak_sd`, `anak_smp`, `anak_sma`, `disabilitas_berat`, `lanjut_usia`, `tgl_input`) VALUES
(85, 42, 'tidak ada', 'ada', 'ada', 'ada', 'tidak ada', 'ada', 'ada', '2023-06-22 15:57:59'),
(86, 41, 'ada', 'tidak ada', 'tidak ada', 'ada', 'tidak ada', 'tidak ada', 'ada', '2023-06-22 15:58:24'),
(87, 40, 'tidak ada', 'tidak ada', 'ada', 'tidak ada', 'ada', 'ada', 'tidak ada', '2023-06-22 15:58:54'),
(88, 39, 'ada', 'ada', 'tidak ada', 'ada', 'tidak ada', 'tidak ada', 'ada', '2023-06-22 15:59:19'),
(89, 38, 'tidak ada', 'ada', 'ada', 'tidak ada', 'ada', 'tidak ada', 'ada', '2023-06-22 15:59:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `rank_id` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nilai_preferensi` float NOT NULL,
  `nilai_ev` float NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indeks untuk tabel `tbl_normalisasi`
--
ALTER TABLE `tbl_normalisasi`
  ADD PRIMARY KEY (`normalisasi_id`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`nilai_id`);

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
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_normalisasi`
--
ALTER TABLE `tbl_normalisasi`
  MODIFY `normalisasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `tbl_rank`
--
ALTER TABLE `tbl_rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
