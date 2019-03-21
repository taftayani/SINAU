-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 04:36 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinauyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirms`
--

CREATE TABLE `confirms` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `shcedule_id` int(10) UNSIGNED NOT NULL,
  `student` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packet` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_les` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu konfirmasi...',
  `pay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Dibayar',
  `stat_pay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum terdapat bukti pembayaran',
  `friends` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_file` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT 'nul',
  `score` int(5) DEFAULT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'nul'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confirms`
--

INSERT INTO `confirms` (`id`, `teacher_id`, `user_id`, `subject_id`, `shcedule_id`, `student`, `packet`, `address_les`, `created_at`, `updated_at`, `Status`, `pay`, `stat_pay`, `friends`, `friends2`, `friends3`, `friends4`, `test_file`, `score`, `link_video`) VALUES
(16, 78, 54, 29, 16, NULL, '100.000', 'tes gasssss', '2019-02-13 09:08:10', '2019-03-21 08:23:12', 'Pesanan Diterima', 'storage/Pembayaran/Screen Shot 2019-02-10 at 21.19.52.png', 'Pembayaran Sudah Diterima', 'tes', 'aj', NULL, NULL, 'storage/Soal/Screen Shot 2019-03-19 at 16.40.55.png', NULL, 'https://www.youtube.com/watch?v=zLAhRiUeJ8E'),
(17, 78, 55, 28, 15, NULL, '100.000', 'tes', '2019-02-25 00:00:08', '2019-02-25 00:00:44', 'Pesanan Diterima', 'Belum Dibayar', 'Belum terdapat bukti pembayaran', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 78, 56, 27, 15, NULL, '150.000', 'haji bardan', '2019-02-28 17:16:37', '2019-02-28 17:19:00', 'Pesanan Diterima', 'storage/Pembayaran/FIRST_DAY_OF_SCHOOL_JULY_18_EEZY_04 (1).png', 'Pembayaran Sudah Diterima', NULL, 'Mia', 'Sanny', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajarans`
--

CREATE TABLE `mata_pelajarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `mata_pelajaran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajarans`
--

INSERT INTO `mata_pelajarans` (`id`, `mata_pelajaran`, `created_at`, `updated_at`, `description`, `teacher_id`) VALUES
(27, 'matematika', '2019-02-13 07:01:54', '2019-02-13 07:01:54', NULL, 78),
(28, 'Biologi', '2019-02-13 07:01:54', '2019-02-13 07:01:54', NULL, 78),
(29, 'kimia', '2019-02-13 07:01:54', '2019-02-13 07:01:54', NULL, 78);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_28_143611_create_surveys_table', 1),
(4, '2018_01_11_130800__update_table', 2),
(5, '2018_03_21_235829_create_teaches_table', 3),
(6, '2018_10_13_161435_create_teachers_table', 4),
(7, '2018_10_18_060632_create_mata_pelajarans_table', 5),
(8, '2018_10_19_070016_update_field_table', 6),
(9, '2018_10_23_154206_create_update_table_teacher', 7),
(10, '2018_10_24_112246_update_users_add_column', 8),
(11, '2018_10_24_113058_update_field_table_subjects', 9),
(12, '2018_10_24_113509_create_teacher_files_table', 10),
(13, '2018_10_24_113924_create_teacher_subjects_table', 11),
(14, '2018_10_24_114201_create_shcedules_table', 12),
(15, '2018_11_03_174721_update_table_matpel', 13),
(16, '2018_11_06_140851_upadate_table_schedule', 14),
(17, '2018_11_07_130117_update_teacher_table', 15),
(18, '2018_11_12_142158_create_confirms_table', 16),
(19, '2018_11_13_103253_create_table_confirms', 17),
(20, '2018_11_25_114027_create_verifikasis_table', 18),
(21, '2018_12_02_135046_create_stats_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('taftayani_breda@yahoo.co.id', '$2y$10$Wh323SApe7zOf5ltv18Que19UmAtFrymfbXNPMYZWfgvOfyCnipAa', '2018-02-13 07:43:26'),
('karina@mail.com', '$2y$10$G2QEkx/lQLI8ReZRQ1.7Y.2XhV.4oEv6k56qDKIn9O31T9WYbV0KO', '2018-03-26 06:21:51'),
('taftayani123@gmail.com', '$2y$10$wqMhghXVyxrK9Ei.XLFSlOBlMFnSnv/sd4nfrnVd1vUt9DCKq2DLW', '2018-11-06 00:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `shcedules`
--

CREATE TABLE `shcedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Senin',
  `time_les` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'isi dulu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shcedules`
--

INSERT INTO `shcedules` (`id`, `day`, `time_les`, `created_at`, `updated_at`, `teacher_id`) VALUES
(15, 'Rabu', '13.00-14.30', '2019-02-13 07:02:03', '2019-02-13 07:02:03', 78),
(16, 'Selasa', '13.00-14.30', '2019-02-13 07:26:15', '2019-02-13 07:26:15', 78),
(17, 'Selasa', '08.30-10.00', '2019-02-13 07:51:50', '2019-02-13 07:51:50', 78);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `confirm_id` int(10) UNSIGNED NOT NULL,
  `date_les` date NOT NULL,
  `mention` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prove` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `confirm_id`, `date_les`, `mention`, `created_at`, `updated_at`, `prove`) VALUES
(1, 16, '2019-03-13', 'tes', '2019-03-12 07:27:42', '2019-03-12 07:27:42', ''),
(2, 16, '2019-03-15', 'saat ini latihan soal', '2019-03-12 07:38:03', '2019-03-12 07:38:03', ''),
(3, 16, '2019-03-13', 'masukin foto', '2019-03-12 08:03:42', '2019-03-12 08:03:42', 'storage/Pembayaran/Screen Shot 2019-03-12 at 10.54.28.png'),
(4, 16, '2019-03-16', 'masuin 22222', '2019-03-12 08:08:37', '2019-03-12 08:08:37', 'storage/Bukti Belajar/Screen Shot 2019-03-08 at 10.46.46.png'),
(5, 16, '2019-03-14', 'masukin foto', '2019-03-12 09:01:53', '2019-03-12 09:01:53', 'storage/Bukti Belajar/Screen Shot 2019-03-06 at 14.38.54.png');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_depan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggapan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `nama_depan`, `nama_belakang`, `email`, `tanggapan`, `created_at`, `updated_at`) VALUES
(1, 'breda', 'taftayani', 'breda@gmail.com', 'bagus', '2017-12-29 04:23:12', '2017-12-29 04:23:12'),
(2, 'breda', 'taftayani', 'breda@gmail.com', 'bagus', '2017-12-29 04:24:59', '2017-12-29 04:24:59'),
(3, 'dinda', 'yuthia', 'dinda@mail.com', 'keren', '2017-12-29 04:25:43', '2017-12-29 04:25:43'),
(4, 'dinda', 'yuthia', 'dinda@mail.com', 'keren', '2017-12-29 04:27:44', '2017-12-29 04:27:44'),
(5, 'Styx', 'Sittidae', 'wira_twinz7@yahoo.com', 'Good day! Behold is  a good news offering for you.  Just click on the link below to qualify. http://bit.ly/2yqqF19', '2018-12-09 16:50:05', '2018-12-09 16:50:05'),
(6, 'JoshuaAcura', 'JoshuaAcura', 'marcus.vandijk@cityisamverkan.se', 'Hy there,  Good news ! an amazingoffers \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2PtRcAk', '2018-12-13 17:15:52', '2018-12-13 17:15:52'),
(7, 'Thomasstumb', 'Thomasstumb', 'ancamdu@gmail.com', 'Hey Good news ! an importantoffers \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2UyXAd9', '2018-12-17 22:30:15', '2018-12-17 22:30:15'),
(8, 'Shanemaync', 'Shanemaync', 'christophe.debourmont@gmail.com', 'Hi an importantoffer \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2rLS2Pe', '2018-12-23 03:08:20', '2018-12-23 03:08:20'),
(9, 'Mathewson', 'Luganda', '1982neenee@gmail.com', 'Good man! Look at a good bonus - A pleasant surprise of $/€ 1600 welcome bonus.  Are you in?  http://bit.ly/2J90HDh', '2018-12-26 13:37:53', '2018-12-26 13:37:53'),
(10, 'Rafaelrab', 'Rafaelrab', 'gianpaolofrau@gmail.com', 'Look what we have for you! niceoffers \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2QMal67', '2018-12-26 14:53:17', '2018-12-26 14:53:17'),
(11, 'DannyQuore', 'DannyQuore', 'beautyuniquereception@gmail.com', 'an importantoffers \r\n Just click on the link below to qualify  \r\n \r\nhttp://bit.ly/2EUnEKq', '2018-12-30 08:01:43', '2018-12-30 08:01:43'),
(12, 'Brianbed', 'Brianbed', 'gueritconstructions@gmail.com', 'Hey Good news ! a fineoffering \r\n Just click on the link below to qualify  \r\n \r\nhttps://drive.google.com/file/d/1Wi4dOeGGwLhvjB1n6Sju_nlczAH-OvJY/preview', '2019-01-04 00:26:08', '2019-01-04 00:26:08'),
(13, 'MiltonClora', 'MiltonClora', 'shano161@gmail.com', 'an leadinginstead of the ease being \r\n Are you in?  \r\n \r\n \r\nhttps://drive.google.com/file/d/1oCGEOYfoqrPmadY-beJk_vYZs131dEWE/preview', '2019-01-07 16:54:40', '2019-01-07 16:54:40'),
(14, 'Donaldganny', 'Donaldganny', 'mi121coach@gmail.com', 'Hey seriousoblation \r\n To controlled click on the connector routine of  \r\n \r\n \r\nhttps://drive.google.com/file/d/1zVHYKKfLozJ2e7IUFWDy-xWmg_9DcgBB/preview', '2019-01-11 07:04:45', '2019-01-11 07:04:45'),
(15, 'Zacharyroath', 'Zacharyroath', 'brianchapman35@gmail.com', 'Hey a sufficientloosely arise b naval way despatch \r\n Righteous click \r\n \r\n \r\nhttp://ityo.ru', '2019-01-14 22:00:30', '2019-01-14 22:00:30'),
(16, 'HowardViome', 'HowardViome', 'gwaunhomes@gmail.com', 'Hey Look what we get for you! a virtuousoffer \r\n Are you in?  \r\nhttp://bit.ly/2T1ieBm', '2019-01-20 22:10:07', '2019-01-20 22:10:07'),
(17, 'Riordan', 'viole', '19sanya89@hotmail.com', 'Hello! Behold is  an important news - 500+ top quality slots, roulette and blackjack games to choose from.  To qualify click on the link below. http://bit.ly/2J7Hv97', '2019-01-21 19:28:49', '2019-01-21 19:28:49'),
(18, 'Gregoryelumb', 'Gregoryelumb', 'cisssltd@gmail.com', 'Look what we possess for you! an excitingoffers \r\n To moderate click on the together below  \r\nhttp://servicerubin.ru', '2019-01-24 04:10:39', '2019-01-24 04:10:39'),
(19, 'Dennistag', 'Dennistag', 'example3@gmail.com', 'Hi What we accept here is , an stimulatingoffers \r\n Well-founded click \r\nhttp://bit.ly/2S0dzTe', '2019-01-27 13:49:14', '2019-01-27 13:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `verifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `ktp`, `npwp`, `pendidikan`, `resume`, `created_at`, `updated_at`, `user_id`, `verifikasi`) VALUES
(78, '12345678', '9028282999192', 'keprof', 'saya mengajar, dengan alasan adalah. karena ilmu yang saya miliki ingin dimiliki oleh orang lain juga', '2019-02-13 06:55:55', '2019-02-13 07:03:51', 53, 'Akun Sudah Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_files`
--

CREATE TABLE `teacher_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_files`
--

INSERT INTO `teacher_files` (`id`, `teacher_id`, `file`, `created_at`, `updated_at`) VALUES
(44, 78, 'storage/Files/Screen Shot 2019-02-06 at 15.43.23.png', '2019-02-13 07:02:17', '2019-02-13 07:02:17'),
(45, 78, 'storage/Files/Screen Shot 2019-02-10 at 21.19.49.png', '2019-02-13 07:02:26', '2019-02-13 07:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subjects`
--

CREATE TABLE `teacher_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `max_student` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_depan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/profile.ico',
  `phone` int(14) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `role` enum('admin','teacher','student') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Male'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `foto`, `phone`, `address`, `birthday`, `role`, `gender`) VALUES
(38, 'Admin', 'Sinau Yo', 'admin.sinau@gmail.com', '$2y$10$NJ7rNYBLE.S3WJqaUZrn7ezlCvmaKD7gdk/Iii5rTGHhFTQ7E1oIq', 'DJmCPNUoLc6mT872mL8DRtupdSJqupIbbNpMsugaVsrXM0JBpnilXCgPdLWs', '2018-11-14 02:07:46', '2018-11-14 02:07:46', 'img/profile.ico', NULL, NULL, NULL, 'admin', 'Male'),
(39, 'Muhammad', 'Breda Taftayani', 'taftayani123@gmail.com', '$2y$10$NntPrsBCuLocR9zVlNHQF.o7jUAHY65yXvXk0WsaGp8Tzj67RJwAW', 'izTJrPfjEdDbFWPFFHJ0yfslinosIpZsB5VyhgydG04FgLSkkIZydZX7QIye', '2018-12-09 08:13:19', '2018-12-09 08:14:01', 'storage/images/3x4 foto.jpg', 817935555, 'JL. Kampung Melayu Besar Kebon Baru Tebet', '1997-09-09', 'student', 'Male'),
(40, 'Rangga', 'Ayesha', 'rangga.ayesha@yahoo.com', '$2y$10$kFX/JjFrWLVSIYR3KpNgvumtGZifbjnRAZnp4TbpVeHORWCD9P5F.', '4LWUus4mrWCOUMTziKzIwrhuWPzNd0pg8VlXk9cjcg9G3RFaT1UlwPnJAdmL', '2018-12-09 08:25:33', '2018-12-09 08:27:04', 'storage/images/46523761_2338316012863441_8786856566188933120_n.jpg', 2147483647, 'Jl. Mayang Sari 1 C/18', '1997-04-25', 'student', 'Male'),
(41, 'syabatra', 'hasaid', 'syabat@mail.com', '$2y$10$WQrCfEutCS1yzbyyyILcvu8YFP45kOdT6TnmRBOZ5fMliwULCP/AW', 'gB4RtNWL1FXCYQ8lTgXWNS8HyKzetDSE18eHqOMnsx9AG967eXZXPJl0Oaua', '2018-12-10 18:50:22', '2018-12-10 18:50:51', 'storage/images/question.png', 2147483647, 'bandung', '1986-06-10', 'student', 'Male'),
(42, 'Dewi', 'Arman', 'dewi@gmail.com', '$2y$10$tOAFIHxkxVc6cqjwFrZUnOyGg4vxk8MRzreV9ZGRgY6wjzg.U/sJ6', '4FUkjcymkFD8KmdrwHsLcwKOyJdptrJCEGixyLaPOIMyRBtBdjZpskHnaXon', '2018-12-10 19:05:57', '2018-12-10 19:06:42', 'storage/images/images (3).jpeg', 2147483647, 'JL. Haji Bardan 2, Buah Batu bandung', '2018-12-12', 'student', 'Male'),
(43, 'Agus', 'BGUS', 'agus@gmail.com', '$2y$10$vgzKsP2meyIS0dV3qYUd3ewUykMkSm2HX62FSHA/gREQo6AaUkVNi', 'cQZwgtotgchwwe7CPHfeNEpjw6NF6GyLRxDzyeUGKEsV02eWSLeKqhlyzUwE', '2018-12-10 19:16:08', '2018-12-10 19:20:00', 'storage/images/image.png', 9292992, 'JL. Kampung Melayu Besar', '1999-07-23', 'student', 'Male'),
(44, 'Sahrul', 'Evendi', 'sahrul@gmail.com', '$2y$10$YdBf1BEaZh2eVtEb5kMz4OQ833XA9g52Ciz6ih.nRhnU.D6bjlplK', 'jAKElmSqOUuhfzx5vBee8eUrMXSOFWOEze3bavXEna56jAgPojdCqtJRdffe', '2018-12-10 19:17:13', '2018-12-10 19:17:42', 'storage/images/coffee-beans (1).png', 2147483647, 'Jalan Sukabirus No. 5', '2004-10-13', 'student', 'Male'),
(45, 'hafiz', 'afandi', 'afandihafiz@yahoo.co.id', '$2y$10$QIQOW7FPzD1WJaLgrKVhn.ACu8y21icQXAXLQYCweeHR3U3ckOMUW', NULL, '2018-12-11 05:37:55', '2018-12-11 05:37:55', 'img/profile.ico', 2147483647, 'sukabirus', '1996-10-20', 'student', 'Male'),
(46, 'alwy', 'fadly', 'alwyfadly28@gmail.com', '$2y$10$Pb4BCQnyZzqVj3oqRweMeurTuJog7e/5kBQHVYp3yLK4.yjpQnvUq', 'KkFkAjcABXL87TbZWBTgIXPUG8KivdmDBpNod5CIBGJnr6Z1YHC6ckmlPcqj', '2018-12-11 05:46:23', '2018-12-11 05:46:23', 'img/profile.ico', 2147483647, 'PBB', '1997-12-28', 'student', 'Male'),
(47, 'Satria Refdi', 'Ardiguna', 'ardiguna20@gmail.com', '$2y$10$ZDqlAq57j20D95/p5V72JOmFTowFGMnPv8W2HtygltVjfH5la/vma', NULL, '2018-12-11 05:51:14', '2018-12-11 05:51:47', 'storage/images/23346.png', 2147483647, 'Jl. Telekomunikasi No. 01', '1998-05-20', 'student', 'Male'),
(48, 'Venessa', 'Visintry', 'vvisintry@gmail.com', '$2y$10$81YoKSd1hlJhBfkNuJS0peJiuaYB8T7x22ENTMhXx.XuhFnlqeIIa', NULL, '2018-12-11 06:00:21', '2018-12-11 06:00:21', 'img/profile.ico', 2147483647, 'Ujungbatu', '1997-03-20', 'student', 'Female'),
(53, 'tes', 'Breda', 'tes@gmail.com', '$2y$10$GCuZFyoJO5HT8og.IMIw6OOgGNO1RgmQoxNIH/uz3Eyehed9cdyD2', 'Vf3kn1auXP8i0D3EBJK4QL5Ma1awz5I7I3wcbbrlkJW0cP0tKZE8B5nHr7yJ', '2019-02-07 06:24:27', '2019-02-13 07:00:47', 'storage/images/Screen Shot 2019-02-01 at 16.56.40.png', 9292929, 'JL. Haji Bardan 2, Buah Batu bandung', '2019-02-08', 'student', 'Male'),
(54, 'Mbred', 'Mbrut', 'tes2@gmail.com', '$2y$10$SlR7aJu0W.FHp3wnzr.d4.8/AYCSWYf/UEvkJU9Nk0tuIGzGXJfNu', 'FpA8jyTGkNoGs4OXRB4qiAywlArvzB5Ed2ykSY0UuA7InEHTkobpbeL1UZ8b', '2019-02-13 07:04:10', '2019-02-13 07:04:37', 'storage/images/Screen Shot 2019-02-10 at 21.20.11.png', 929292992, 'JL. Haji Bardan 2, Buah Batu bandung', '2019-02-14', 'student', 'Male'),
(55, 'Rangga', 'Ayesha', 'rangga@yahoo.co.id', '$2y$10$aHTWXtk9owcekDWJRkKaIewjXVQlf2uhiW5UbDBmQc4GAtNfx1MMS', 'U1nhu8Nl1oiDqbv9zww5EEpAECqfvLqgnQRAdqyzfzkUrl2kthgs5WO7Koao', '2019-02-24 23:51:38', '2019-02-24 23:53:59', 'storage/images/Screen Shot 2019-02-25 at 00.04.39.png', 12345, 'Jalan Sukabirus No. 5', '2019-02-04', 'student', 'Male'),
(56, 'Sahrul', 'Evendi', 'sahrul123@gmail.com', '$2y$10$7XS.sCRbBd/ZUiOqr8KWNe4j0cSu3hBcGvb2D32W6yw4lRBXmOw4C', 'VOlJSj9NLkjnFx1ESFWhmBrYqopmzSEExt0HkYn7iVXE06bcJjNpRSQSynCi', '2019-02-28 17:15:32', '2019-02-28 17:16:10', 'storage/images/3x4 foto.jpg', 12345, 'haji bardan raya', '2019-03-02', 'student', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirms`
--
ALTER TABLE `confirms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `confirms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `confirms_user_id_foreign` (`user_id`),
  ADD KEY `confirms_subject_id_foreign` (`subject_id`),
  ADD KEY `confirms_shcedule_id_foreign` (`shcedule_id`);

--
-- Indexes for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mata_pelajarans_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `shcedules`
--
ALTER TABLE `shcedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shcedules_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stats_confirm_id_foreign` (`confirm_id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `teacher_files`
--
ALTER TABLE `teacher_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_files_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_subjects_teacher_id_foreign` (`teacher_id`),
  ADD KEY `teacher_subjects_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirms`
--
ALTER TABLE `confirms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shcedules`
--
ALTER TABLE `shcedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `teacher_files`
--
ALTER TABLE `teacher_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirms`
--
ALTER TABLE `confirms`
  ADD CONSTRAINT `confirms_shcedule_id_foreign` FOREIGN KEY (`shcedule_id`) REFERENCES `shcedules` (`id`),
  ADD CONSTRAINT `confirms_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `mata_pelajarans` (`id`),
  ADD CONSTRAINT `confirms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `confirms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD CONSTRAINT `mata_pelajarans_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `shcedules`
--
ALTER TABLE `shcedules`
  ADD CONSTRAINT `shcedules_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_confirm_id_foreign` FOREIGN KEY (`confirm_id`) REFERENCES `confirms` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `teacher_files`
--
ALTER TABLE `teacher_files`
  ADD CONSTRAINT `teacher_files_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  ADD CONSTRAINT `teacher_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `mata_pelajarans` (`id`),
  ADD CONSTRAINT `teacher_subjects_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
