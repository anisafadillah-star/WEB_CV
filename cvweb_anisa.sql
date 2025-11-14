-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2025 at 11:02 AM
-- Server version: 12.0.2-MariaDB-log
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvweb_anisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `freelance` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `ttl`, `umur`, `email`, `telepon`, `kota`, `pendidikan`, `freelance`, `deskripsi`, `instagram`, `linkedin`, `github`, `alamat`, `posisi`, `foto`) VALUES
(1, 'Anisa Fadillah Maulana', 'Sukabumi, 31 Desember 2004', 20, 'anisafadillahm@gmail.com', '085872116666', 'Sukabumi', 'S1 Informatika', 'Tersedia', 'Saya mahasiswi semester 5 jurusan Informatika yang memiliki ketertarikan di bidang pengembangan web dan mobile. Saya senang mempelajari framework seperti CodeIgniter, Laravel, dan React, serta membuat project pribadi untuk mengasah kemampuan saya.', 'https://www.instagram.com/ansaaa_fm__?igsh=MXJibzJscGthcGNvYg==', 'https://www.linkedin.com/in/anisa-fadillah-maulana-293947386?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://github.com/dashboard', 'jln.sukasari No.04, Kab.Sukabumi, Jawa Barat', NULL, 'profil1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'anisa', 'anisafm059@ummi.ac.id', 'tugas', 'senin praktik jarkom dan mikro', '2025-11-08 06:21:25'),
(2, 'anisa', 'anisafm059@ummi.ac.id', 'tugas', 'tidak senin uts', '2025-11-08 09:41:31'),
(3, 'anisa', 'anisafm059@ummi.ac.id', 'tugas', 'kerjain tugas\r\n', '2025-11-12 07:22:12'),
(7, 'anisa', 'anisafm059@ummi.ac.id', 'tugas', 'alhamdulilah', '2025-11-14 11:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `sekolah`, `jurusan`, `tahun_mulai`, `tahun_selesai`, `created_at`) VALUES
(1, 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023', '2027', '2025-11-12 08:10:06'),
(2, 'SMA Negri 1 Cikembar', 'MIPA', '2021', '2023', '2025-11-12 08:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `instansi` varchar(150) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `instansi`, `deskripsi`, `tahun_mulai`, `tahun_selesai`, `created_at`) VALUES
(2, 'Panitia Saintek Spark 2023 – Divisi Publikasi, Dokumentasi, dan Desain (PDD)', 'Fakultas Sains dan Teknologi, Universitas Muhammadiyah Sukabumi', 'Bertanggung jawab membuat desain publikasi dan dokumentasi kegiatan Saintek Spark 2023, termasuk poster dan konten media sosial.', '2023', '2023', '2025-11-12 10:50:36'),
(3, 'Panitia RTL Angkatan 2023 – Divisi Logistik', 'Program Studi Teknik Informatika, Universitas Muhammadiyah Sukabumi', 'Mengelola kebutuhan perlengkapan acara dan membantu koordinasi peralatan selama kegiatan RTL angkatan.', '2023', '2023', '2025-11-12 10:50:36'),
(4, 'Panitia HARTIK 2024 – Divisi Konsumsi', 'Program Studi Teknik Informatika, Universitas Muhammadiyah Sukabumi', 'Bertanggung jawab dalam penyediaan konsumsi untuk panitia dan peserta selama kegiatan HARTIK berlangsung.', '2024', '2024', '2025-11-12 10:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(4, 'Aplikasi To-Do List “SATU HARI LAGI”', 'Aplikasi Android berbasis Java untuk mencatat dan mengatur daftar tugas harian. Dibuat secara berkelompok sebagai proyek UAS mata kuliah Pemrograman Mobile Dasar semester 4.', 'satuharilagi.jpg', NULL, '2025-11-12 18:14:21', '2025-11-12 18:14:21'),
(5, 'Proyek Simulasi Jaringan Cisco Packet Tracer', 'Simulasi topologi jaringan sekolah dengan konfigurasi router, switch, dan PC menggunakan Cisco Packet Tracer. Dikerjakan sebagai proyek UAS mata kuliah Jaringan Komputer semester 4.', 'gambar1.jpg', NULL, '2025-11-12 18:14:21', '2025-11-12 18:14:21'),
(6, 'Proyek Arduino Palang Parkir Otomatis', 'Proyek kelompok menggunakan Arduino UNO untuk membuat sistem palang parkir otomatis berbasis sensor ultrasonik dan servo motor. Dikerjakan pada mata kuliah Sistem Digital semester 2.', 'palangparkir.jpg', NULL, '2025-11-12 18:14:21', '2025-11-12 18:14:21'),
(7, 'Website Sekolah Cerdas Belajar', 'Website sekolah dengan fitur login multi-role (admin, guru, siswa) serta pengelolaan nilai siswa. Dibuat bersama kelas sebagai proyek UAS mata kuliah Pemrograman Web semester 3.', 'cerdasbelajar.jpg', NULL, '2025-11-12 18:14:21', '2025-11-12 18:14:21'),
(8, 'Website Perpustakaan Online', 'Membangun sistem perpustakaan berbasis web mulai dari perancangan database hingga tampilan antarmuka. Fitur mencakup manajemen buku, peminjaman, pengembalian, dan halaman admin. Proyek ini dikerjakan pada mata kuliah Pemrograman Web semester 4.', 'webPerpustakaan.jpg', NULL, '2025-11-14 17:48:07', '2025-11-14 17:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 80, '2025-11-12 13:54:27', NULL),
(2, 'CSS', 60, '2025-11-12 13:54:27', NULL),
(3, 'JavaScript', 60, '2025-11-12 13:54:27', NULL),
(4, 'PHP', 70, '2025-11-12 13:54:27', NULL),
(5, 'CodeIgniter 4', 70, '2025-11-12 13:54:27', NULL),
(6, 'Bootstrap 5', 70, '2025-11-12 13:54:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `job_title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Anisa Fadillah M', 'Mahasiswi Informatika | Web Developer', 'Saya seorang mahasiswi yang fokus di bidang pengembangan website menggunakan framework modern seperti CodeIgniter dan Bootstrap 5.', 'profil.jpg', '2025-11-12 13:54:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
