-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aktifitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`id`, `aktifitas`, `created_at`, `updated_at`) VALUES
(6, 'Transaksi Selesai', '2021-10-24 22:47:37', '2021-10-24 22:47:37'),
(8, 'Transaksi Selesai', '2021-10-24 22:48:05', '2021-10-24 22:48:05'),
(9, 'Pembayaran Lunas', '2021-10-24 22:48:05', '2021-10-24 22:48:05'),
(10, 'Transaksi Dihapus', '2021-10-24 22:48:52', '2021-10-24 22:48:52'),
(11, 'Laporan Transaksi Dicetak', '2021-10-24 22:50:29', '2021-10-24 22:50:29'),
(12, 'Laporan Transaksi Dicetak', '2021-10-24 23:36:49', '2021-10-24 23:36:49'),
(13, 'Laporan Transaksi Dicetak', '2021-10-24 23:36:58', '2021-10-24 23:36:58'),
(14, 'Laporan Transaksi Dicetak', '2021-10-24 23:48:57', '2021-10-24 23:48:57'),
(15, 'Laporan Transaksi Dicetak', '2021-10-25 14:49:16', '2021-10-25 14:49:16'),
(16, 'Transaksi Proses', '2021-10-25 14:51:52', '2021-10-25 14:51:52'),
(17, 'Laporan Transaksi Dicetak', '2021-10-25 14:52:31', '2021-10-25 14:52:31'),
(18, 'Laporan Transaksi Dicetak', '2021-10-25 14:53:20', '2021-10-25 14:53:20'),
(19, 'Laporan Transaksi Dicetak', '2021-10-25 14:53:26', '2021-10-25 14:53:26'),
(20, 'Laporan Transaksi Dicetak', '2021-10-25 14:53:33', '2021-10-25 14:53:33'),
(21, 'Laporan Transaksi Dicetak', '2021-10-25 14:56:01', '2021-10-25 14:56:01'),
(22, 'Laporan Transaksi Dicetak', '2021-10-25 14:57:03', '2021-10-25 14:57:03'),
(23, 'Transaksi Proses', '2021-10-25 14:59:04', '2021-10-25 14:59:04'),
(24, 'Laporan Transaksi Dicetak', '2021-10-25 16:25:20', '2021-10-25 16:25:20'),
(25, 'Laporan Transaksi Dicetak', '2021-10-25 22:59:13', '2021-10-25 22:59:13'),
(26, 'Laporan Transaksi Dicetak', '2021-10-26 02:02:58', '2021-10-26 02:02:58'),
(27, 'Transaksi ', '2021-10-30 03:11:33', '2021-10-30 03:11:33'),
(28, 'Transaksi ', '2021-11-26 05:52:59', '2021-11-26 05:52:59'),
(29, 'Laporan Transaksi Dicetak', '2021-11-26 05:58:29', '2021-11-26 05:58:29'),
(30, 'Transaksi Proses', '2021-11-26 05:59:03', '2021-11-26 05:59:03'),
(31, 'Transaksi Proses', '2021-11-26 05:59:18', '2021-11-26 05:59:18'),
(32, 'Laporan Transaksi Dicetak', '2021-11-26 06:31:32', '2021-11-26 06:31:32'),
(33, 'Transaksi Proses', '2021-11-26 21:18:56', '2021-11-26 21:18:56'),
(34, 'Transaksi Proses', '2022-05-16 21:02:54', '2022-05-16 21:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pakets`
--

CREATE TABLE `jenis_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` enum('Kg','Meter','Buah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pakets`
--

INSERT INTO `jenis_pakets` (`id`, `no_paket`, `nama_paket`, `jenis_paket`, `jumlah_hari`, `harga`, `satuan`, `created_at`, `updated_at`) VALUES
(3, 'CSR29', 'Cuci', 'Reguler', '2', '80000', 'Kg', '2021-10-23 19:44:43', '2021-10-23 19:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_konsumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_konsumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumens`
--

INSERT INTO `konsumens` (`id`, `no_konsumen`, `nama_konsumen`, `alamat`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 'KON1', 'Reihan Andika AM', 'Psr. Tubagus Ismail No. 469, Bitung 55494, Ciamis', '(+62) 545 9510 392', '2021-10-23 07:50:05', '2021-10-24 00:11:19'),
(5, 'KON2', 'Suatu Hari Nanti Kau Akan Mengerti', 'Jl. Menemukan Cinta Yang Abadi', '085720380221', '2021-10-23 09:10:15', '2021-10-23 09:10:15'),
(6, 'KON6', 'Reihan Andika AM', 'Jl. Pasar Rancah No. 32', '085720380221', '2021-10-24 22:33:39', '2021-10-24 22:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_23_135721_create_konsumens_table', 2),
(6, '2021_10_24_012139_create_jenis_pakets_table', 3),
(7, '2021_10_24_071503_create_tipe_bayars_table', 4),
(8, '2021_10_24_080507_create_statuses_table', 5),
(9, '2021_10_24_083151_create_transaksis_table', 6),
(10, '2021_10_25_053838_create_aktifitas_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Proses', '2021-10-24 01:26:20', '2021-10-24 01:26:27'),
(4, 'Selesai', '2021-10-24 01:26:36', '2021-10-24 01:26:36'),
(5, 'Diambil', '2021-10-24 01:26:42', '2021-10-24 01:26:42'),
(6, 'Baru', '2021-10-24 01:26:53', '2021-10-24 01:26:53'),
(7, 'Batal', '2021-10-24 01:27:08', '2021-10-24 01:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_bayars`
--

CREATE TABLE `tipe_bayars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipe_bayars`
--

INSERT INTO `tipe_bayars` (`id`, `tipe_bayar`, `created_at`, `updated_at`) VALUES
(5, 'Cash On Deliver', '2021-10-24 00:55:49', '2021-10-24 01:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_konsumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimasi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_masuk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_selesai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_order` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `no_transaksi`, `nama_konsumen`, `no_telepon`, `kode_paket`, `nama_paket`, `jenis_paket`, `estimasi`, `harga`, `satuan`, `jumlah`, `tanggal_masuk`, `tanggal_selesai`, `jenis_pembayaran`, `status_bayar`, `total_bayar`, `keterangan`, `created_at`, `updated_at`, `status_order`) VALUES
(6, 'TRK202110256', 'Suatu Hari Nanti Kau Akan Mengerti', '085720380221', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 3, '26-10-2021', '27-10-2021', 'Cash On Deliver', 'Belum Lunas', 240000, 'Pelunasan nanti', '2021-10-24 19:57:01', '2021-10-24 19:57:01', 'Selesai'),
(7, 'TRK202110257', 'Suatu Hari Nanti Kau Akan Mengerti', '085720380221', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 3, '25-10-2021', '26-10-2021', 'Cash On Deliver', 'Lunas', 240000, 'Pelunasan nanti', '2021-10-24 22:25:31', '2021-10-24 22:25:31', 'Selesai'),
(8, 'TRK202110258', 'Reihan Andika AM', '(+62) 545 9510 392', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 3, '25-10-2021', '27-10-2021', 'Cash On Deliver', 'Lunas', 239000, 'Pelunasan nanti', '2021-10-24 22:33:11', '2021-10-24 22:48:05', 'Selesai'),
(9, 'TRK202110259', 'Reihan Andika AM', '085720380221', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 3, '25-10-2021', '27-10-2021', 'Cash On Deliver', 'Belum Lunas', 239000, 'Pelunasan nanti', '2021-10-24 22:43:13', '2021-10-24 22:43:13', 'Proses'),
(10, 'TRK2021112610', 'Suatu Hari Nanti Kau Akan Mengerti', '085720380221', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 10, '26-11-2021', '26-11-2021', 'Cash On Deliver', 'Lunas', 799989, 'Alhamdulillah', '2021-11-26 05:59:18', '2021-11-26 05:59:18', 'Proses'),
(11, 'TRK2021112711', 'Reihan Andika AM', '085720380221', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 5, '27-11-2021', '29-11-2021', 'Cash On Deliver', 'Belum Lunas', 400000, 'Mantap', '2021-11-26 21:18:56', '2021-11-26 21:18:56', 'Proses'),
(12, 'TRK2022051712', 'Reihan Andika AM', '085720380221', 'CSR29', 'Cuci', 'Reguler', 2, 80000, 'Kg', 3, '17-05-2022', '17-05-2022', 'Cash On Deliver', 'Lunas', 240000, 'Barang diambil', '2022-05-16 21:02:54', '2022-05-16 21:02:54', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Karyawan','Manager') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `no_karyawan`, `nama`, `username`, `password`, `alamat`, `no_telepon`, `role`, `created_at`, `updated_at`) VALUES
(1, '1', 'Reihan Andika AM', 'admin', '$2y$10$k8Tad6lYCiN2ZFoByIOA6uZZ573ELddts4I8te0nnGZ9q4PScUpte', 'Jl. Pasar Rancah No.32', '085720380221', 'Admin', '2021-10-23 05:09:46', '2021-10-23 05:09:46'),
(18, 'KRY2', 'Reihan Andika AM', 'reiandika101d', '$2y$10$IKuTAqTYBHmE0pc2i0FvdufjXobhdkYsGwxK45didpVOcuwn/Zyb2', 'Jl. Pasar Rancah No. 32', '08132307886', 'Karyawan', '2021-10-23 06:47:57', '2021-10-23 20:02:14'),
(20, 'KRY20', 'Siapa Cik', 'akuska1', '$2y$10$Lqx350j0/5ROeBw1v04pS.WfEwSI/SvPKKzTgv3xNbEjJ7/t73aGu', 'Jl. Pasar Rancah No. 32', '0888444777', 'Karyawan', '2021-10-23 20:00:25', '2021-10-23 20:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_pakets`
--
ALTER TABLE `jenis_pakets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_pakets_no_paket_unique` (`no_paket`);

--
-- Indexes for table `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `konsumens_no_konsumen_unique` (`no_konsumen`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_bayars`
--
ALTER TABLE `tipe_bayars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksis_no_transaksi_unique` (`no_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_no_karyawan_unique` (`no_karyawan`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pakets`
--
ALTER TABLE `jenis_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tipe_bayars`
--
ALTER TABLE `tipe_bayars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
