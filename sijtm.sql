-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jan 2024 pada 02.53
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijtm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditas`
--

CREATE TABLE `akreditas` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akreditas`
--

INSERT INTO `akreditas` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(7, NULL, 'app/akreditas/7-1704190040-FHoMr.png', '2023-12-05 07:47:45', '2024-01-02 03:07:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosenprof`
--

CREATE TABLE `dosenprof` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` bigint DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosenprof`
--

INSERT INTO `dosenprof` (`id`, `nama`, `nip`, `foto`, `bidang`, `email`, `created_at`, `updated_at`) VALUES
(11, 'Epriyandi, S.T., M.T.', 198401052021211003, 'app/dosenprof/11-1704180067-dDjYF.png', 'Tenaga Pengajar', NULL, '2024-01-01 11:35:51', '2024-01-02 00:21:07'),
(12, 'Helanianto, S.T.,M.T', 197805112021211003, 'app/dosenprof/12-1704180095-3U6jV.png', 'Tenaga Pengajar', NULL, '2024-01-01 11:37:32', '2024-01-02 00:21:35'),
(13, 'Ismael Marjuki, S.T., M.T.', 197705052021211007, 'app/dosenprof/13-1704180115-F5PjI.png', 'Tenaga Pengajar', NULL, '2024-01-01 23:07:13', '2024-01-02 00:21:55'),
(14, 'Asep Ruchiyat, S.T., M.T.', 19780510200801055, 'app/dosenprof/14-1704180143-DI9QB.png', 'Tenaga Pengajar', NULL, '2024-01-01 23:08:31', '2024-01-02 00:22:23'),
(15, 'Yusuf, S.ST., M.T.', 198601252018031001, 'app/dosenprof/15-1704180031-4bHmH.png', 'Tenaga Pengajar', NULL, '2024-01-01 23:17:59', '2024-01-02 00:20:31'),
(16, 'Betti Ses Eka Polonia, S.Pd., M.Pd.', 199201062019032015, 'app/dosenprof/16-1704180176-3CbNH.png', 'Tenaga Pengajar', NULL, '2024-01-01 23:19:24', '2024-01-02 00:22:56'),
(17, 'Lusia Romana, S.IP.', 19820601201602198, 'app/dosenprof/17-1704180198-AMdpX.png', 'Tenaga Pengajar', NULL, '2024-01-01 23:20:59', '2024-01-02 00:23:18'),
(18, 'Muh Anhar, S.T., M.T.', 197407222021211005, 'app/dosenprof/18-1704180216-2dj6p.png', 'Tenaga Pengajar', NULL, '2024-01-01 23:22:36', '2024-01-02 00:23:36'),
(19, 'Hairian Rahmadi, S.T.,M.T', 19790910200801058, 'app/dosenprof/19-1704179492-zfexR.jpg', 'Tenaga Pengajar', NULL, '2024-01-01 23:59:35', '2024-01-02 00:11:32'),
(20, 'Dewi Nurmayasari, M.Pd.', 198707222022032004, 'app/dosenprof/20-1704179467-a7QZd.jpg', 'Tenaga Pengajar', NULL, '2024-01-02 00:00:44', '2024-01-02 00:11:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(10, 'Jurusan Teknik Mesin Siap Terapkan Project Based Learning', 'app/kegiatan/-1704185693-pZc2f.jpg', 'Kamis 14 April 2022, bertempat di ruang rapat Direktur dilaksanakan rapat evaluasi penerapan Project Based Learning pada program studi Teknik Informatika dan Agroindustri. Kegiatan dihadiri Direktur, Wakil Direktur, Ketua Jurusan Teknik Informatika, Ketua Jurusan Teknik Mesin, Koordinator Program studi Agroindustri dan dosen yang hadir pada kegiatan di Politeknik Negeri Batam.  Direktur menyampaikan bahwa Project Based Learning merupakan bagian dari Perjanjian Kinerja pada sasaran strategi ketiga dan Indikator Kinerja Utama (IKU) ke 3.2, dengan PBL dapat dilakukan bauran hardskill dan Softskill dan akan mendorong produktivitas Dosen baik Penelitian, PKM dan HAKI  Endang menyatakan bahwa penerapan PBL pada program studi Teknik Informatika dan Prodi Agroindustri telah mempertimbangkan unsur manajemen 5 M (Men, Money, Materials,  Machines dan Methods) dan pihaknya telah mendorong dan mengambil Langkah dalam mendotong perencanaan, pengorganisasian, pengarahan dan pengawasan PBL , PBL menurut Endang dapat mendorong Branding dan produktivitas Kerjasama. Pada kesempatan ini juga program studi Teknik mesin menyatakan akan menerapkan PBL mulai semester gasal TA 2022/2023 yang diterapkan secara bertahap sehingga Endang berharap tahun ini terdapat tiga program studi yang menerapkan PBL yaitu Teknik informatika, Agroindustri dan Teknik mesin.', '2024-01-02 01:54:53', '2024-01-02 01:54:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int NOT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `semester`, `foto`, `created_at`, `updated_at`) VALUES
(10, 'Semester 1', 'app/kurikulum/-1704187159-MGJeD.png', '2024-01-02 02:19:19', '2024-01-02 02:19:19'),
(11, 'Semester 2', 'app/kurikulum/-1704187239-fOFtn.png', '2024-01-02 02:20:39', '2024-01-02 02:20:39'),
(16, 'Semester 3', 'app/kurikulum/-1704194976-ffgsE.png', '2024-01-02 04:29:36', '2024-01-02 04:29:36'),
(18, 'Semester 4', 'app/kurikulum/-1704195037-1VLRH.png', '2024-01-02 04:30:37', '2024-01-02 04:30:37'),
(19, 'Semester 5', 'app/kurikulum/-1704195063-QcZ9i.png', '2024-01-02 04:31:03', '2024-01-02 04:31:03'),
(20, 'semester 6', 'app/kurikulum/-1704195089-Z7WPj.png', '2024-01-02 04:31:29', '2024-01-02 04:31:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'q', NULL, '2023-11-17 04:12:51', '2023-11-17 04:14:19'),
(7, 'p', 'anya.jpg', '2023-11-22 08:20:35', '2023-11-22 08:20:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinanprof`
--

CREATE TABLE `pimpinanprof` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` bigint DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pimpinanprof`
--

INSERT INTO `pimpinanprof` (`id`, `nama`, `nip`, `jabatan`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(12, 'Epriyandi, S.T., M.T.', 198401052021211003, 'Ketua Jurusan', NULL, 'app/pimpinanprof/12-1704180250-QmwMn.png', '2024-01-01 10:37:49', '2024-01-02 00:24:10'),
(13, 'Helanianto, S.T.,M.T', 197805112021211003, 'Sekretaris Jurusan', NULL, 'app/pimpinanprof/13-1704180259-fdEyF.png', '2024-01-01 10:56:49', '2024-01-02 00:24:19'),
(14, 'Ismael Marjuki, S.T., M.T.', 197705052021211007, 'Koordinator Prodi', NULL, 'app/pimpinanprof/14-1704180269-9hV8E.png', '2024-01-01 11:34:07', '2024-01-02 00:24:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `foto`, `created_at`, `updated_at`) VALUES
(1206, 'ceker mercon', 'ceker pedas dengan bumbu meresap', 12000, 'https://static.promediateknologi.id/crop/0x107:1080x891/750x500/webp/photo/2022/08/12/1743347891.jpg', '2023-11-09 21:35:02', '2023-11-09 21:35:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangkelas`
--

CREATE TABLE `ruangkelas` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangkelas`
--

INSERT INTO `ruangkelas` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(30, 'Kelas I/II A', 'app/ruangkelas/30-1704134971-cnxgd.jpg', '2023-12-05 03:20:50', '2024-01-01 11:49:31'),
(31, 'Kelas I/II B', 'app/ruangkelas/31-1704135015-FNZut.jpg', '2023-12-06 00:14:07', '2024-01-01 11:50:16'),
(34, 'Kelas III/IV A', 'app/ruangkelas/-1704185302-QkNx7.jpg', '2024-01-02 01:48:23', '2024-01-02 01:48:23'),
(35, 'Kelas III/IV B', 'app/ruangkelas/-1704185326-7WjdD.jpg', '2024-01-02 01:48:46', '2024-01-02 01:48:46'),
(36, 'Ruangan 15', 'app/ruangkelas/-1704185439-GIT9F.jpg', '2024-01-02 01:50:39', '2024-01-02 01:50:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruanglab`
--

CREATE TABLE `ruanglab` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruanglab`
--

INSERT INTO `ruanglab` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(12, 'Laboratorium Uji Bahan', 'app/ruanglab/12-1704135117-j7rDe.jpg', '2023-12-06 02:24:55', '2024-01-01 11:51:57'),
(14, 'Bengkel', 'app/ruanglab/-1702440285-ubkBa.jpg', '2023-12-12 21:04:45', '2023-12-12 21:04:45'),
(15, 'Laboratorium Penumatic dan Hidrolic', 'app/ruanglab/-1704135190-7wrtz.jpg', '2024-01-01 11:53:10', '2024-01-01 11:53:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf`
--

CREATE TABLE `staf` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` bigint DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staf`
--

INSERT INTO `staf` (`id`, `nama`, `nip`, `posisi`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(10, 'Lusia Romana, S.IP.', 19820601201602198, 'Pengelola layanan akademik Prodi', NULL, 'app/staf/10-1704180299-B61LD.png', '2024-01-01 11:44:04', '2024-01-02 00:24:59'),
(11, 'Halimansyah, A.Md.', 198904242021211002, 'PLP', NULL, 'app/staf/11-1704180332-nT57G.png', '2024-01-01 11:44:48', '2024-01-02 00:25:32'),
(12, 'Arman, A.Md.', 19860410201502153, 'PLP', NULL, 'app/staf/12-1704180345-95M2M.png', '2024-01-02 00:04:58', '2024-01-02 00:25:45'),
(13, 'Mustapa, A. Md.', 19860710201204118, 'PLP', NULL, 'app/staf/13-1704179297-fQieX.jpg', '2024-01-02 00:06:28', '2024-01-02 00:08:17'),
(14, 'M. Iwan Toro, A.Md.', 198907052021211002, 'PLP', NULL, 'app/staf/14-1704179275-YmLho.jpg', '2024-01-02 00:07:28', '2024-01-02 00:07:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'hayayey@gmail.com', 'aya', 'yaya', '$2y$10$DgqymuYT2oTRCumCMkFsvO8Ta9VGZay3njSyT3bJ1MDblaH2Op0Ty', NULL, '2023-11-14 06:52:42', '2024-01-01 10:13:04'),
(11, 'abdul@gmail.com', 'abdul', 'abdulrohim', '$2y$10$8KaCG0S/ibdcWJmVZNIPz.aNA3l2.CihS7DoBH/WdyPVrq8JQE/FK', NULL, '2023-12-14 19:31:14', '2024-01-01 10:13:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akreditas`
--
ALTER TABLE `akreditas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosenprof`
--
ALTER TABLE `dosenprof`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pimpinanprof`
--
ALTER TABLE `pimpinanprof`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangkelas`
--
ALTER TABLE `ruangkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruanglab`
--
ALTER TABLE `ruanglab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staf`
--
ALTER TABLE `staf`
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
-- AUTO_INCREMENT untuk tabel `akreditas`
--
ALTER TABLE `akreditas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dosenprof`
--
ALTER TABLE `dosenprof`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pimpinanprof`
--
ALTER TABLE `pimpinanprof`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1210;

--
-- AUTO_INCREMENT untuk tabel `ruangkelas`
--
ALTER TABLE `ruangkelas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `ruanglab`
--
ALTER TABLE `ruanglab`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
