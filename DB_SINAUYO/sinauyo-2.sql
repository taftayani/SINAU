-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2019 at 05:25 AM
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
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'nul',
  `photo_last_pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nul',
  `email_friend1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_friend2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_friend3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_friend4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score_teaching` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_teaching` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_photo_learning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_test_student` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confirms`
--

INSERT INTO `confirms` (`id`, `teacher_id`, `user_id`, `subject_id`, `shcedule_id`, `packet`, `address_les`, `created_at`, `updated_at`, `Status`, `pay`, `stat_pay`, `friends`, `friends2`, `friends3`, `friends4`, `test_file`, `score`, `link_video`, `photo_last_pay`, `email_friend1`, `email_friend2`, `email_friend3`, `email_friend4`, `score_teaching`, `feedback_teaching`, `last_photo_learning`, `answer_test_student`) VALUES
(23, 79, 64, 31, 18, '220.000', 'kampung melayu mesjid 1, Kebon Baru, Tebet,Jakarta Selatan', '2019-04-13 11:05:12', '2019-04-14 02:04:19', 'Pesanan Diterima', 'storage/Pembayaran/Screen Shot 2019-04-13 at 15.07.18.png', 'Pembayaran Sudah Diterima', 'Rangga Ayesah', 'Breda Taftayani', 'Sahrul Evendi', NULL, 'storage/Soal/Screen Shot 2019-04-13 at 22.04.17.png', NULL, 'https://www.youtube.com/watch?v=MoSmX1xNnAQ', 'nul', 'rang@gmail.com', 'Bred@gmail.com', 'rul@gmail.com', NULL, 'tidak baik', 'tes', NULL, NULL),
(24, 79, 65, 32, 19, '160.000', 'Jalan Sukapura Blok 8, Bandung', '2019-04-14 07:20:04', '2019-06-15 21:33:06', 'Pesanan Diterima', 'storage/Pembayaran/bayar.jpg', 'Pembayaran Sudah Diterima', 'Dinda Gemala', 'Anandita Ika Yunita', NULL, NULL, 'storage/Soal/Bg-giveway.svg', NULL, 'https://www.youtube.com/watch?v=GK3mT3FRKGg', 'storage/Bukti Bayar Pengajar/messageImage_1539849289881.jpg', 'dinda@yahoo.co.id', 'nita123@mail.com', NULL, NULL, 'sangat baik', 'guru tuh asik banget jelasin materinya, dan rekomen banget untuk menjelaskan hal dasar', NULL, NULL),
(25, 81, 60, 34, 20, '160.000', 'haji bardan raya,...', '2019-04-14 20:09:49', '2019-04-14 20:13:21', 'Pesanan Diterima', 'Belum Dibayar', 'Belum terdapat bukti pembayaran', NULL, NULL, NULL, NULL, 'nul', NULL, 'nul', 'nul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 79, 65, 30, 18, '220.000', 'Jalan Sukabirus No. 5, Kebon Baru, Sukabirus,Bandung Selatan', '2019-04-27 10:36:05', '2019-05-18 06:14:46', 'Pesanan Diterima', 'storage/Pembayaran/bayar.jpg', 'Pembayaran Sudah Diterima', 'Dinda Gemala', 'Gufarah Nurarafah', 'Anandita Masuyuma Khaidir', NULL, 'storage/Soal/teach.png', NULL, 'https://www.youtube.com/watch?v=MoSmX1xNnAQ', 'nul', 'dinda@mail.com', 'Gur123@mail.com', 'Dit123@gmail.com', NULL, 'sangat baik', 'guru tuh asik banget jelasin materinya, dan rekomen banget untuk menjelaskan hal dasar', 'storage/Bukti Akhir Pembelajaran/register.png', 'jawaban dari soal tersebut, adalah kita harus mengerjakan soal tersebut dengan sungguh-sungguh. tergantung dari niat yang dimiliki');

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
(29, 'kimia', '2019-02-13 07:01:54', '2019-02-13 07:01:54', NULL, 78),
(30, 'matematika', '2019-04-04 23:00:06', '2019-04-04 23:00:06', NULL, 79),
(31, 'Biologi', '2019-04-04 23:00:06', '2019-04-04 23:00:06', NULL, 79),
(32, 'kimia', '2019-04-04 23:00:06', '2019-04-04 23:00:06', NULL, 79),
(33, 'matematika', '2019-04-14 05:15:20', '2019-04-14 05:15:20', NULL, 81),
(34, 'pemrogaman', '2019-04-14 05:15:20', '2019-04-14 05:15:20', NULL, 81),
(35, 'Alpro', '2019-04-14 05:15:20', '2019-04-14 05:15:20', NULL, 81),
(36, 'Ekonomi', '2019-04-14 06:19:58', '2019-04-14 06:19:58', NULL, 82),
(37, 'marketing', '2019-04-14 06:19:58', '2019-04-14 06:19:58', NULL, 82),
(38, 'PKN', '2019-04-14 06:19:58', '2019-04-14 06:19:58', NULL, 82);

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
(21, '2018_12_02_135046_create_stats_table', 19),
(22, '2019_04_13_144518_crete_table_months', 20);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'january', NULL, NULL),
(2, 'february', NULL, NULL),
(3, 'march', NULL, NULL),
(4, 'april', NULL, NULL),
(5, 'may', NULL, NULL),
(6, 'june', NULL, NULL),
(7, 'july', NULL, NULL),
(8, 'august', NULL, NULL),
(9, 'september', NULL, NULL),
(10, 'october ', NULL, NULL),
(11, 'november ', NULL, NULL),
(12, 'desember', NULL, NULL);

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
('taftayani123@gmail.com', '$2y$10$cOEP4K1qf6M30zEAiVoxvOJuRUxmoKJOAzSKTAdmMSBGrcM765naC', '2019-06-21 00:47:56');

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
(17, 'Selasa', '08.30-10.00', '2019-02-13 07:51:50', '2019-02-13 07:51:50', 78),
(18, 'Rabu', '13.00-14.30', '2019-04-04 23:00:16', '2019-04-04 23:00:16', 79),
(19, 'Kamis', '08.30-10.00', '2019-04-04 23:00:24', '2019-04-04 23:00:24', 79),
(20, 'Selasa', '13.00-14.30', '2019-04-14 05:15:32', '2019-04-14 05:15:32', 81),
(21, 'Selasa', '13.00-14.30', '2019-04-14 06:20:05', '2019-04-14 06:20:05', 82),
(22, 'Kamis', '19.00-20.30', '2019-04-14 06:20:13', '2019-04-14 06:20:13', 82);

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
  `student_stat` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends_stat` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends2_stat` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends3_stat` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friends4_stat` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_student` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `ktp` decimal(30,0) DEFAULT NULL,
  `npwp` decimal(30,0) DEFAULT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `verifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Verifikasi',
  `score_teaching` int(4) DEFAULT NULL,
  `feedback_teaching` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `ktp`, `npwp`, `pendidikan`, `resume`, `created_at`, `updated_at`, `user_id`, `verifikasi`, `score_teaching`, `feedback_teaching`) VALUES
(78, '12345678', '9028282999192', 'keprof', 'saya mengajar, dengan alasan adalah. karena ilmu yang saya miliki ingin dimiliki oleh orang lain juga', '2019-02-13 06:55:55', '2019-02-13 07:03:51', 53, 'Akun Sudah Diverifikasi', NULL, NULL),
(79, '123456', '1234567', 'keprof', 'saya ingin berbagi ilmu dengan orang2 sekitar karena keinginan saya pribadi', '2019-04-04 22:59:44', '2019-04-04 23:47:09', 60, 'Akun Sudah Diverifikasi', NULL, NULL),
(81, '123456789', '123456789', 'S1', 'alasan saya ingin membagi ilmu, karena saya ingin ilmu yang saya miliki sangat berguna bagi orang sekitar', '2019-04-13 08:50:09', '2019-04-14 05:16:43', 64, 'Akun Sudah Diverifikasi', NULL, NULL),
(82, '3114011509970002', '860713999015000', 'keprof', 'alasan saya, karena ingin memberikan ilmu tentang enterpreneur kepada teman-teman di Sinau Yo', '2019-04-14 06:19:17', '2019-04-14 06:21:11', 65, 'Akun Sudah Diverifikasi', NULL, NULL);

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
(45, 78, 'storage/Files/Screen Shot 2019-02-10 at 21.19.49.png', '2019-02-13 07:02:26', '2019-02-13 07:02:26'),
(46, 79, 'storage/Files/Screen Shot 2019-04-01 at 18.55.44.png', '2019-04-04 23:02:56', '2019-04-04 23:02:56'),
(47, 79, 'storage/Files/Screen Shot 2019-03-28 at 09.52.46.png', '2019-04-04 23:03:07', '2019-04-04 23:03:07'),
(48, 79, 'storage/Files/Screen Shot 2019-03-27 at 20.45.47.png', '2019-04-04 23:03:16', '2019-04-04 23:03:16'),
(49, 81, 'storage/Files/Yard.png', '2019-04-14 05:16:08', '2019-04-14 05:16:08'),
(50, 81, 'storage/Files/Field.png', '2019-04-14 05:16:20', '2019-04-14 05:16:20'),
(51, 82, 'storage/Files/sertifikat.jpg', '2019-04-14 06:20:39', '2019-04-14 06:20:39');

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
  `phone` decimal(30,0) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `role` enum('admin','teacher','student') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Male',
  `district` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_code` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `foto`, `phone`, `address`, `birthday`, `role`, `gender`, `district`, `region`, `province`, `pos_code`) VALUES
(38, 'Admin', 'Sinau Yo', 'admin.sinau@gmail.com', '$2y$10$NJ7rNYBLE.S3WJqaUZrn7ezlCvmaKD7gdk/Iii5rTGHhFTQ7E1oIq', 'AlCV02FCCjwCPHsNlzkAxj8PWW4JgMwbDMlAZ1FunIwJEznTybDTopc4pWce', '2018-11-14 02:07:46', '2018-11-14 02:07:46', 'img/profile.ico', NULL, NULL, NULL, 'admin', 'Male', NULL, NULL, NULL, NULL),
(40, 'Rangga', 'Ayesha', 'rangga.ayesha@yahoo.com', '$2y$10$kFX/JjFrWLVSIYR3KpNgvumtGZifbjnRAZnp4TbpVeHORWCD9P5F.', '4LWUus4mrWCOUMTziKzIwrhuWPzNd0pg8VlXk9cjcg9G3RFaT1UlwPnJAdmL', '2018-12-09 08:25:33', '2018-12-09 08:27:04', 'storage/images/46523761_2338316012863441_8786856566188933120_n.jpg', '2147483647', 'Jl. Mayang Sari 1 C/18', '1997-04-25', 'student', 'Male', NULL, NULL, NULL, NULL),
(41, 'syabatra', 'hasaid', 'syabat@mail.com', '$2y$10$WQrCfEutCS1yzbyyyILcvu8YFP45kOdT6TnmRBOZ5fMliwULCP/AW', 'gB4RtNWL1FXCYQ8lTgXWNS8HyKzetDSE18eHqOMnsx9AG967eXZXPJl0Oaua', '2018-12-10 18:50:22', '2018-12-10 18:50:51', 'storage/images/question.png', '2147483647', 'bandung', '1986-06-10', 'student', 'Male', NULL, NULL, NULL, NULL),
(42, 'Dewi', 'Arman', 'dewi@gmail.com', '$2y$10$tOAFIHxkxVc6cqjwFrZUnOyGg4vxk8MRzreV9ZGRgY6wjzg.U/sJ6', '4FUkjcymkFD8KmdrwHsLcwKOyJdptrJCEGixyLaPOIMyRBtBdjZpskHnaXon', '2018-12-10 19:05:57', '2018-12-10 19:06:42', 'storage/images/images (3).jpeg', '2147483647', 'JL. Haji Bardan 2, Buah Batu bandung', '2018-12-12', 'student', 'Male', NULL, NULL, NULL, NULL),
(43, 'Agus', 'BGUS', 'agus@gmail.com', '$2y$10$vgzKsP2meyIS0dV3qYUd3ewUykMkSm2HX62FSHA/gREQo6AaUkVNi', 'cQZwgtotgchwwe7CPHfeNEpjw6NF6GyLRxDzyeUGKEsV02eWSLeKqhlyzUwE', '2018-12-10 19:16:08', '2018-12-10 19:20:00', 'storage/images/image.png', '9292992', 'JL. Kampung Melayu Besar', '1999-07-23', 'student', 'Male', NULL, NULL, NULL, NULL),
(44, 'Sahrul', 'Evendi', 'sahrul@gmail.com', '$2y$10$YdBf1BEaZh2eVtEb5kMz4OQ833XA9g52Ciz6ih.nRhnU.D6bjlplK', 'jAKElmSqOUuhfzx5vBee8eUrMXSOFWOEze3bavXEna56jAgPojdCqtJRdffe', '2018-12-10 19:17:13', '2018-12-10 19:17:42', 'storage/images/coffee-beans (1).png', '2147483647', 'Jalan Sukabirus No. 5', '2004-10-13', 'student', 'Male', NULL, NULL, NULL, NULL),
(45, 'hafiz', 'afandi', 'afandihafiz@yahoo.co.id', '$2y$10$QIQOW7FPzD1WJaLgrKVhn.ACu8y21icQXAXLQYCweeHR3U3ckOMUW', NULL, '2018-12-11 05:37:55', '2018-12-11 05:37:55', 'img/profile.ico', '2147483647', 'sukabirus', '1996-10-20', 'student', 'Male', NULL, NULL, NULL, NULL),
(46, 'alwy', 'fadly', 'alwyfadly28@gmail.com', '$2y$10$Pb4BCQnyZzqVj3oqRweMeurTuJog7e/5kBQHVYp3yLK4.yjpQnvUq', 'KkFkAjcABXL87TbZWBTgIXPUG8KivdmDBpNod5CIBGJnr6Z1YHC6ckmlPcqj', '2018-12-11 05:46:23', '2018-12-11 05:46:23', 'img/profile.ico', '2147483647', 'PBB', '1997-12-28', 'student', 'Male', NULL, NULL, NULL, NULL),
(47, 'Satria Refdi', 'Ardiguna', 'ardiguna20@gmail.com', '$2y$10$ZDqlAq57j20D95/p5V72JOmFTowFGMnPv8W2HtygltVjfH5la/vma', NULL, '2018-12-11 05:51:14', '2018-12-11 05:51:47', 'storage/images/23346.png', '2147483647', 'Jl. Telekomunikasi No. 01', '1998-05-20', 'student', 'Male', NULL, NULL, NULL, NULL),
(48, 'Venessa', 'Visintry', 'vvisintry@gmail.com', '$2y$10$81YoKSd1hlJhBfkNuJS0peJiuaYB8T7x22ENTMhXx.XuhFnlqeIIa', NULL, '2018-12-11 06:00:21', '2018-12-11 06:00:21', 'img/profile.ico', '2147483647', 'Ujungbatu', '1997-03-20', 'student', 'Female', NULL, NULL, NULL, NULL),
(53, 'tes', 'Breda', 'tes@gmail.com', '$2y$10$GCuZFyoJO5HT8og.IMIw6OOgGNO1RgmQoxNIH/uz3Eyehed9cdyD2', 'mJPiAI62j00VGPSfzjqzfUN8iWwlIO7bScM2NJaBFkZ3pzc1vhp88IxtQJVj', '2019-02-07 06:24:27', '2019-02-13 07:00:47', 'storage/images/Screen Shot 2019-02-01 at 16.56.40.png', '9292929', 'JL. Haji Bardan 2, Buah Batu bandung', '2019-02-08', 'student', 'Male', NULL, NULL, NULL, NULL),
(54, 'Mbred', 'Mbrut', 'tes2@gmail.com', '$2y$10$SlR7aJu0W.FHp3wnzr.d4.8/AYCSWYf/UEvkJU9Nk0tuIGzGXJfNu', 'pCFi12rjo5usEHNmytF7qzdNydTWrFUG72TxrMLU4u9U6x87i8NXedNxQt85', '2019-02-13 07:04:10', '2019-02-13 07:04:37', 'storage/images/Screen Shot 2019-02-10 at 21.20.11.png', '929292992', 'JL. Haji Bardan 2, Buah Batu bandung', '2019-02-14', 'student', 'Male', NULL, NULL, NULL, NULL),
(55, 'Rangga', 'Ayesha', 'rangga@yahoo.co.id', '$2y$10$aHTWXtk9owcekDWJRkKaIewjXVQlf2uhiW5UbDBmQc4GAtNfx1MMS', 'U1nhu8Nl1oiDqbv9zww5EEpAECqfvLqgnQRAdqyzfzkUrl2kthgs5WO7Koao', '2019-02-24 23:51:38', '2019-02-24 23:53:59', 'storage/images/Screen Shot 2019-02-25 at 00.04.39.png', '12345', 'Jalan Sukabirus No. 5', '2019-02-04', 'student', 'Male', NULL, NULL, NULL, NULL),
(56, 'Sahrul', 'Evendi', 'sahrul123@gmail.com', '$2y$10$7XS.sCRbBd/ZUiOqr8KWNe4j0cSu3hBcGvb2D32W6yw4lRBXmOw4C', 'VOlJSj9NLkjnFx1ESFWhmBrYqopmzSEExt0HkYn7iVXE06bcJjNpRSQSynCi', '2019-02-28 17:15:32', '2019-02-28 17:16:10', 'storage/images/3x4 foto.jpg', '12345', 'haji bardan raya', '2019-03-02', 'student', 'Male', NULL, NULL, NULL, NULL),
(57, 'Adinda', 'Klausa', 'dinda@mail.com', '$2y$10$CN6E0TzZwTzIlyL8sI8Dteyq9gHIlYIee0XGU3eVnnmbjpcGpMwou', 'dcMbnY2w1rvJXm80SvgP4BYyx44sd3rLmAMpMo3oYdorpW15mPm3Wv6BNhTt', '2019-03-24 07:21:55', '2019-03-24 07:33:00', 'storage/images/Screen Shot 2019-03-22 at 19.52.19.png', '123456789', 'kampung melayu mesjid 1', '2019-03-05', 'student', 'Male', NULL, NULL, NULL, NULL),
(58, 'Rangga', 'Ayesha', 'rang@mail.com', '$2y$10$1h766mEYD7ocgRtxPB2mFufSwSkruWg1aAYi20/Ao//AzQ8ygxidC', 'imsc2wUkBo61tSPBRM691M5yo1xvu39U6TNKJrDxsYNeAy0pPIOq9LHBF6Ws', '2019-03-25 01:17:25', '2019-04-09 03:42:21', 'storage/images/default-photo.png', '819292919', 'JL. Haji Bardan 2, Buah Batu bandung', '2019-03-25', 'student', 'Male', 'Bardan Raya', 'Buah Batu', 'Bandung', 13250),
(59, 'Breda', 'Taftayani', 'bred@mail.com', '$2y$10$NkjJnfl3rnD0DLMTpzkHKOWJryHmU.LBAhFTmKtFcJC5HqJcv44eO', NULL, '2019-03-25 02:49:44', '2019-03-25 02:49:44', 'img/profile.ico', NULL, NULL, NULL, 'student', 'Male', NULL, NULL, NULL, NULL),
(60, 'satria', 'Mustafa', 'sat@gmail.com', '$2y$10$fGzl6vBCThCxQgrTTiv/1u4HulsJ0L3IIqykCNoCq4Jlnl38PNRua', 'f7VSEKMJsuDsBsuppWSyKNmLq1yrnwoDpJhGJor7rr3O05pTWBwVTH4mDnwr', '2019-04-04 22:59:09', '2019-04-04 23:05:55', 'storage/images/Oval.png', '8127345', 'haji bardan raya', '1996-06-12', 'student', 'Male', NULL, NULL, NULL, NULL),
(61, 'mia', 'angriana', 'mialana@gmail.com', '$2y$10$Viwmuw3B5kBDSnsQcT1oGehGMs6upUVFaflrqTZmdlB82AQlYFY0y', 'KDgEbX4KE6d6ANL3zTKvm54XqC9SZkvcPDYf29TblVU686wuU9sZyot2nGc5', '2019-04-04 23:40:30', '2019-04-04 23:46:13', 'storage/images/Oval.png', '817934556', 'jalan haji bardan raya', '1997-11-06', 'student', 'Male', NULL, NULL, NULL, NULL),
(63, 'adinda', 'kirana', 'kirana@gmail.com', '$2y$10$74AijGEWFt7WcBCePeb7tOyRch5WaBatiQi.kM036.Q4VEEmsoGPO', NULL, '2019-04-09 05:19:30', '2019-04-09 05:36:34', 'storage/images/profile.png', '8192929', 'Jalan Sukabirus No. 5', '2019-04-09', 'student', 'Female', 'Buah Batu', 'Sukabirus', 'Bandung', 12054),
(64, 'faisal', 'Aldo Thahir', 'faisal@gmail.com', '$2y$10$FUaH.IciX2QPwFGtBv.vZ.o/JkK1ZMFFXu/WtBlCPj5Q.rXU4R.rG', '4Brslp2QetTInwV5pZb9nrnQlhf6CjAR0HIjjh02nuJEL8hYEKfEHHgdWEne', '2019-04-13 08:41:59', '2019-04-13 08:49:22', 'storage/images/Picture1.png', '123456789', 'kampung melayu mesjid 1', '1997-08-15', 'student', 'Male', 'Tebet', 'Kebon Baru', 'Jakarta Selatan', 12830),
(65, 'Ayu', 'Anandita', 'ayu@mail.com', '$2y$10$uxZFTklDDPFBUzckHCOM3./CTTZz0WHFPEmF/idYOdYy83BKamMlS', '2vW6Rx7UoZ6N24DOCvOxFdBNdKdO2OJBEbPf26wiWVbAz8XzINtB9rdoUWM9', '2019-04-14 06:00:45', '2019-06-20 23:36:02', 'storage/Images/download.jpeg', '8179357753', 'Jalan Sukabirus No. 5', '1994-11-24', 'student', 'Female', 'Sukapura', 'Kebon Baru', 'Bandung Selatan', 12890),
(66, 'breda', 'taftayani', 'taftayani123@gmail.com', '$2y$10$2jH3T6H0yfnb22Zod0Uth.GXv3iNC8sMusAy4rZtXGyf8H2PWYZq6', 'yOEiHrg4FjGH7UAiOUoY5vkAJFuQ6AWgHOibmpho1pdlCocJK4B0UWkKtqly', '2019-06-21 00:47:36', '2019-06-21 00:47:36', 'img/profile.ico', NULL, NULL, NULL, 'student', 'Male', NULL, NULL, NULL, NULL);

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
-- Indexes for table `months`
--
ALTER TABLE `months`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shcedules`
--
ALTER TABLE `shcedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `teacher_files`
--
ALTER TABLE `teacher_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
