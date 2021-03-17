-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2021 pada 18.32
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_market_me_laku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produks_id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` double(100,2) NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `kode_barang`, `produks_id`, `nama_barang`, `satuan`, `harga_jual`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'BRG-27678604', 11, 'RINSO', 'item', 88186.00, '551', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(2, 'BRG-81440950', 8, 'RINSO', 'kardus', 428754.00, '461', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(3, 'BRG-44083791', 10, 'CHIKI TARO', 'item', 386993.00, '636', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(4, 'BRG-39179504', 11, 'RINSO', 'kardus', 306994.00, '899', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(5, 'BRG-10051529', 7, 'SUSU FRISIAN FLAG', 'item', 376489.00, '370', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(6, 'BRG-97480858', 8, 'RINSO', 'kardus', 500905.00, '415', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(7, 'BRG-01512218', 1, 'CHIKI TARO', 'item', 456943.00, '732', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(8, 'BRG-64792177', 2, 'SUSU FRISIAN FLAG', 'kardus', 388086.00, '463', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(9, 'BRG-97221468', 6, 'SUSU FRISIAN FLAG', 'item', 43270.00, '519', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(10, 'BRG-72413338', 9, 'KOPI GOOD DAY', 'kardus', 678466.00, '499', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(11, 'BRG-72576250', 4, 'CHIKI TARO', 'pcs', 419407.00, '329', '2021-03-07 23:07:55', '2021-03-07 23:07:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembelians`
--

CREATE TABLE `detail_pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembelians_id` bigint(20) UNSIGNED NOT NULL,
  `barangs_id` bigint(20) UNSIGNED NOT NULL,
  `harga_beli` double(100,2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` double(100,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pembelians`
--

INSERT INTO `detail_pembelians` (`id`, `pembelians_id`, `barangs_id`, `harga_beli`, `jumlah`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 45, 1, 5808263.00, 929, 8243877.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(2, 36, 9, 6136117.00, 696, 9947418.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(3, 24, 8, 179079.00, 247, 6572152.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(4, 25, 10, 6882225.00, 249, 6394634.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(5, 29, 3, 6848855.00, 973, 6950639.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(6, 31, 4, 2789507.00, 330, 1558042.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(7, 8, 1, 6438419.00, 491, 8251774.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(8, 4, 3, 2499231.00, 651, 5129561.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(9, 26, 3, 533805.00, 358, 6869570.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(10, 22, 3, 8538549.00, 543, 2992273.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(11, 33, 7, 5156188.00, 778, 8137115.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(12, 18, 4, 4075619.00, 546, 146907.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(13, 17, 3, 3229379.00, 750, 990380.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(14, 20, 9, 7832838.00, 157, 6440865.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(15, 33, 8, 2749902.00, 650, 8462164.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(16, 46, 1, 6478887.00, 328, 1011918.00, '2021-03-07 23:08:08', '2021-03-07 23:08:08'),
(17, 43, 11, 110832.00, 489, 3197774.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(18, 27, 3, 3475988.00, 479, 2056246.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(19, 4, 8, 2006861.00, 333, 7230765.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(20, 22, 11, 769801.00, 830, 888783.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(21, 36, 3, 5209980.00, 99, 6123480.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(22, 3, 9, 7770278.00, 930, 4777732.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(23, 14, 4, 4764000.00, 964, 556159.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(24, 2, 3, 4950212.00, 683, 8899962.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(25, 14, 3, 3051157.00, 571, 999055.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(26, 34, 5, 7868077.00, 533, 9600945.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(27, 42, 7, 6795405.00, 723, 3153650.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(28, 23, 6, 8925243.00, 698, 851010.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(29, 43, 9, 7913346.00, 559, 7633674.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(30, 28, 6, 5664844.00, 754, 698757.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(31, 16, 4, 9227772.00, 523, 1145995.00, '2021-03-07 23:08:09', '2021-03-07 23:08:09'),
(32, 43, 2, 4472104.00, 687, 381199.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(33, 23, 6, 532668.00, 610, 7881222.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(34, 48, 7, 4991551.00, 872, 3772673.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(35, 20, 8, 8546633.00, 771, 7990264.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(36, 46, 3, 75334.00, 900, 6106297.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(37, 3, 9, 2632228.00, 137, 2879583.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(38, 28, 7, 4329439.00, 184, 3821903.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(39, 27, 8, 1139054.00, 437, 2418416.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(40, 36, 10, 564928.00, 721, 8731192.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(41, 41, 10, 2938292.00, 241, 6198431.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(42, 47, 1, 694779.00, 114, 4765754.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(43, 15, 7, 6117606.00, 4, 8151012.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(44, 36, 8, 9867750.00, 950, 8825522.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(45, 43, 3, 6034002.00, 356, 4579171.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(46, 1, 11, 9813498.00, 112, 1864127.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(47, 15, 9, 4087431.00, 35, 9158779.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(48, 47, 10, 1740346.00, 634, 5107032.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(49, 41, 2, 3929123.00, 588, 3530927.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10'),
(50, 13, 4, 5389074.00, 95, 1136082.00, '2021-03-07 23:08:10', '2021-03-07 23:08:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualans`
--

CREATE TABLE `detail_penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualans_id` bigint(20) UNSIGNED NOT NULL,
  `barangs_id` bigint(20) UNSIGNED NOT NULL,
  `harga_jual` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_penjualans`
--

INSERT INTO `detail_penjualans` (`id`, `penjualans_id`, `barangs_id`, `harga_jual`, `jumlah`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 38, 2, 63676358, 6092, 61246261, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(2, 31, 4, 25365184, 1440, 48201886, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(3, 11, 7, 85076466, 3091, 76265361, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(4, 23, 5, 88922990, 8696, 59029771, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(5, 49, 10, 5808236, 8247, 22853244, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(6, 3, 9, 36728792, 9883, 67227356, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(7, 42, 9, 53688657, 541, 99688883, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(8, 18, 1, 27646325, 6924, 76751825, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(9, 39, 1, 53108700, 2319, 94797632, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(10, 32, 6, 7400903, 8925, 39781109, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(11, 23, 4, 63278593, 467, 8457275, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(12, 6, 6, 31610703, 7725, 915781, '2021-03-07 23:08:11', '2021-03-07 23:08:11'),
(13, 40, 5, 96641460, 3760, 47481634, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(14, 19, 5, 29501015, 1054, 66316451, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(15, 2, 5, 77723215, 583, 13184828, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(16, 45, 2, 35179331, 8991, 20590090, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(17, 29, 2, 91040151, 5514, 93360183, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(18, 25, 11, 9099938, 5829, 74091960, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(19, 1, 7, 33223902, 1442, 93641680, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(20, 44, 4, 80802673, 5676, 99856090, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(21, 50, 9, 12703672, 9911, 72751833, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(22, 28, 10, 89626388, 2572, 58281803, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(23, 10, 11, 13121874, 1329, 21143053, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(24, 31, 6, 30326342, 7107, 50159410, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(25, 29, 1, 99891779, 5923, 46429736, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(26, 35, 6, 3723490, 888, 48165843, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(27, 26, 6, 76807410, 5432, 97029014, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(28, 47, 6, 85180134, 7718, 20258066, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(29, 16, 7, 69018201, 2506, 94699022, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(30, 50, 8, 21967460, 4792, 91736009, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(31, 9, 1, 47799598, 3985, 81205471, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(32, 48, 5, 5065683, 4255, 71332818, '2021-03-07 23:08:12', '2021-03-07 23:08:12'),
(33, 10, 7, 69481019, 9433, 7439697, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(34, 33, 8, 28879128, 8322, 79397954, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(35, 18, 10, 52489450, 6204, 63770684, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(36, 24, 2, 73262246, 6472, 84804837, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(37, 9, 1, 11725197, 6015, 59486178, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(38, 25, 11, 73611444, 9820, 8132837, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(39, 45, 1, 46073393, 5043, 20576464, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(40, 41, 9, 18622234, 7831, 29062472, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(41, 10, 10, 27635673, 3459, 76638157, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(42, 28, 3, 11025795, 1768, 66585442, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(43, 29, 10, 15032054, 8615, 64323815, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(44, 49, 4, 30440469, 8586, 96783343, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(45, 27, 10, 35794461, 1508, 65658533, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(46, 17, 4, 33682395, 960, 44634240, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(47, 49, 7, 41891565, 1442, 90334048, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(48, 32, 7, 33017768, 5390, 26820443, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(49, 41, 11, 45172196, 3782, 71236348, '2021-03-07 23:08:13', '2021-03-07 23:08:13'),
(50, 26, 9, 79598363, 2773, 67426703, '2021-03-07 23:08:13', '2021-03-07 23:08:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2021_02_09_024034_create_kategori_barangs_table', 1),
(50, '2010_10_12_000000_create_users_table', 2),
(51, '2011_02_15_012514_create_pelanggans_table', 2),
(52, '2011_02_16_012342_create_produks_table', 2),
(53, '2011_02_16_012420_create_pemasoks_table', 2),
(54, '2011_02_16_012515_create_penjualans_table', 2),
(55, '2012_02_16_012412_create_pembelians_table', 2),
(56, '2014_10_12_100000_create_password_resets_table', 2),
(57, '2019_08_19_000000_create_failed_jobs_table', 2),
(58, '2021_02_09_024316_create_barangs_table', 2),
(59, '2021_02_16_012402_create_detail_penjualans_table', 2),
(60, '2021_02_16_012457_create_detail_pembelians_table', 2),
(61, '2021_02_16_012552_create_tampung_bayars_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `kode_pelanggan`, `nama`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(1, '78031', 'Gatot Saragih', 'Gg. Rajawali Barat No. 993, Denpasar 47173, DIY', '(+62) 666 9391 943', 'rafi.prabowo@januar.co', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(2, '19865', 'Juli Hastuti', 'Psr. Warga No. 13, Balikpapan 31094, SulUt', '029 9367 096', 'jamil.lailasari@wibisono.desa.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(3, '66201', 'Ridwan Maheswara', 'Ds. K.H. Maskur No. 395, Kupang 82384, SulTeng', '(+62) 21 0406 9579', 'gangsar16@gmail.co.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(4, '84154', 'Farah Mardhiyah', 'Dk. Bah Jaya No. 496, Probolinggo 84699, DKI', '(+62) 293 0341 0807', 'simanjuntak.kariman@kusumo.sch.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(5, '93233', 'Ade Wibowo', 'Ki. Flores No. 354, Sawahlunto 15224, SumBar', '0553 7318 5098', 'alika.wastuti@yahoo.co.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(6, '98718', 'Asmianto Tirta Pradana', 'Dk. B.Agam 1 No. 112, Mojokerto 90640, Banten', '(+62) 582 7373 2064', 'victoria.suryono@gmail.com', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(7, '59900', 'Mumpuni Arsipatra Thamrin S.Sos', 'Jln. Perintis Kemerdekaan No. 367, Pariaman 25452, JaTim', '020 3305 8826', 'dimaz44@widodo.org', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(8, '80505', 'Paris Mardhiyah', 'Jr. Diponegoro No. 90, Pontianak 84042, SulTra', '0464 6664 5580', 'ulva73@prakasa.desa.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(9, '69063', 'Capa Habibi', 'Ds. Reksoninten No. 716, Langsa 93094, PapBar', '(+62) 425 0607 917', 'tarihoran.sakti@mahendra.net', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(10, '20462', 'Kasiran Wahyudin', 'Gg. Ki Hajar Dewantara No. 416, Bukittinggi 71304, Banten', '(+62) 503 6401 8508', 'mila.namaga@gmail.com', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(11, '39360', 'Dagel Haryanto', 'Jr. Merdeka No. 903, Palu 23196, Gorontalo', '(+62) 557 8660 191', 'permata.yani@widiastuti.in', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(12, '53430', 'Hadi Nugroho', 'Dk. Jend. A. Yani No. 627, Palangka Raya 16952, SumBar', '020 5550 9420', 'siregar.mala@gmail.com', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(13, '55718', 'Tina Rahayu', 'Dk. Baladewa No. 495, Singkawang 51651, Riau', '0691 9959 2535', 'andriani.timbul@yuniar.co', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(14, '94219', 'Hardi Darijan Tamba', 'Dk. Basket No. 495, Bengkulu 45527, KalTim', '(+62) 882 5475 5173', 'zpalastri@gmail.co.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(15, '37595', 'Ian Tampubolon S.IP', 'Jln. Kyai Mojo No. 186, Tanjung Pinang 84332, JaBar', '0581 1183 261', 'rsetiawan@gmail.co.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(16, '43963', 'Lurhur Darsirah Narpati S.Pt', 'Gg. Abdul Rahmat No. 579, Bitung 27059, DKI', '0539 7931 9401', 'yuniar.kemba@firmansyah.or.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(17, '25228', 'Rafid Kuswoyo', 'Ds. Reksoninten No. 223, Pekalongan 45748, NTT', '0501 6454 7029', 'xhandayani@yahoo.co.id', '2021-03-07 23:07:58', '2021-03-07 23:07:58'),
(18, '55412', 'Wisnu Nababan S.T.', 'Jln. Suharso No. 887, Mataram 53060, KalSel', '(+62) 848 629 017', 'prastuti.mursinin@yahoo.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(19, '99003', 'Amelia Yulianti', 'Gg. Tambak No. 83, Pangkal Pinang 32511, SulBar', '0699 1501 306', 'karen.mandasari@susanti.biz', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(20, '42642', 'Zelda Yulianti', 'Jr. Thamrin No. 618, Tomohon 70470, SulSel', '0343 6660 5479', 'cinta.mangunsong@gunawan.or.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(21, '52290', 'Elon Sinaga', 'Gg. Radio No. 828, Makassar 25276, Bengkulu', '(+62) 286 8387 303', 'habibi.mulyono@yahoo.co.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(22, '18949', 'Tari Wijayanti', 'Dk. Salatiga No. 874, Pekanbaru 55119, Aceh', '(+62) 763 7397 9246', 'utama.diana@yahoo.co.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(23, '53253', 'Adinata Marbun', 'Gg. Dewi Sartika No. 893, Jayapura 48988, BaBel', '(+62) 671 6603 482', 'asinaga@widiastuti.info', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(24, '19166', 'Umar Prasetyo M.M.', 'Jln. Untung Suropati No. 775, Salatiga 18781, KalSel', '(+62) 517 2448 6311', 'saptono.nasab@gmail.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(25, '47639', 'Keisha Ella Novitasari', 'Jr. Wahidin No. 680, Tegal 24186, KalSel', '0898 201 599', 'owijayanti@yulianti.biz.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(26, '72163', 'Laras Tami Widiastuti S.E.', 'Kpg. Sudirman No. 885, Magelang 70920, SumUt', '(+62) 381 7546 077', 'cahyadi92@yahoo.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(27, '9618', 'Mahdi Pranawa Natsir S.E.', 'Dk. Batako No. 946, Bandung 26510, KalTeng', '(+62) 589 6397 031', 'hana53@nuraini.ac.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(28, '90431', 'Nabila Lailasari', 'Psr. Bakaru No. 387, Bontang 45856, Bali', '(+62) 642 5240 767', 'ilsa.siregar@lazuardi.info', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(29, '53554', 'Mustika Ramadan', 'Ds. Jend. Sudirman No. 451, Banjarbaru 97380, KalBar', '0811 137 105', 'nuraini.cahyadi@mustofa.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(30, '95060', 'Tedi Anggriawan', 'Gg. PHH. Mustofa No. 71, Cimahi 26817, SulBar', '0720 2355 9128', 'nababan.ikin@gmail.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(31, '49356', 'Rangga Tamba', 'Kpg. Otista No. 64, Gorontalo 74076, NTT', '(+62) 423 5302 1518', 'xiswahyudi@gmail.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(32, '35789', 'Najam Ardianto S.H.', 'Ki. Karel S. Tubun No. 701, Semarang 93559, PapBar', '(+62) 684 8053 980', 'saptono.puput@yahoo.co.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(33, '55705', 'Ulya Hastuti', 'Ki. Antapani Lama No. 848, Banjar 66284, NTB', '0430 6208 256', 'ilsa.oktaviani@gmail.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(34, '46110', 'Kamila Usamah', 'Dk. Cokroaminoto No. 955, Subulussalam 60599, SumBar', '(+62) 867 9705 3044', 'melinda50@yahoo.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(35, '54045', 'Puput Nurdiyanti', 'Kpg. Batako No. 453, Madiun 85894, KalTeng', '(+62) 847 7286 2925', 'ynashiruddin@waskita.net', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(36, '99322', 'Mustika Mandala', 'Gg. Muwardi No. 27, Pematangsiantar 92986, PapBar', '(+62) 774 3043 508', 'hakim.yance@namaga.web.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(37, '8149', 'Dian Wulandari S.E.I', 'Kpg. Dr. Junjunan No. 41, Bengkulu 46243, JaBar', '(+62) 241 3529 8727', 'garan.gunawan@susanti.co.id', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(38, '12962', 'Ulya Sari Aryani', 'Ds. Bhayangkara No. 279, Dumai 17431, SulUt', '(+62) 855 546 848', 'hana.hutagalung@gmail.com', '2021-03-07 23:07:59', '2021-03-07 23:07:59'),
(39, '25404', 'Unggul Oman Sitompul', 'Kpg. Yosodipuro No. 641, Langsa 68272, SulSel', '0314 2163 329', 'nasyidah.pangeran@yahoo.com', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(40, '73495', 'Bahuwarna Bakti Halim S.T.', 'Jln. Ir. H. Juanda No. 459, Makassar 76793, SulTeng', '(+62) 26 0536 1398', 'prayoga62@sitorus.biz', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(41, '98070', 'Maryanto Jumari Wijaya S.Pt', 'Jr. Pasteur No. 425, Administrasi Jakarta Selatan 70778, JaTim', '(+62) 948 3472 5710', 'jumadi.haryanto@pratama.com', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(42, '52531', 'Rika Alika Hartati', 'Dk. Bayam No. 122, Palopo 35630, BaBel', '(+62) 275 2651 6189', 'hardiansyah.nadine@fujiati.web.id', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(43, '43926', 'Michelle Zulaika', 'Psr. Bara No. 391, Manado 63635, Jambi', '0439 1746 949', 'padmasari.paris@yahoo.co.id', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(44, '35229', 'Kasiyah Namaga', 'Gg. Wahid Hasyim No. 366, Bima 18124, Maluku', '0200 7917 626', 'wastuti.tugiman@habibi.web.id', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(45, '9124', 'Mitra Dongoran', 'Ds. Ciwastra No. 955, Tanjung Pinang 75792, SulTeng', '(+62) 28 3394 351', 'taufan01@wahyuni.co', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(46, '70290', 'Jati Nugroho', 'Dk. Gremet No. 556, Pematangsiantar 97193, SulUt', '(+62) 647 3656 639', 'hakim.ajeng@yahoo.com', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(47, '30419', 'Tira Kamaria Halimah', 'Ds. Sutarto No. 524, Batu 53527, NTB', '0769 5997 492', 'hariyah.kariman@yahoo.com', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(48, '86634', 'Raharja Galih Hidayanto M.TI.', 'Ki. Raden Saleh No. 862, Solok 70192, SulUt', '020 8785 729', 'warji.mandasari@yahoo.com', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(49, '42359', 'Tira Dinda Namaga', 'Jln. Bara Tambar No. 576, Banjar 15911, Papua', '(+62) 211 6344 9880', 'osafitri@yahoo.com', '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(50, '98255', 'Gawati Maryati S.H.', 'Psr. Wahid No. 245, Tomohon 37142, SulUt', '0294 4945 6260', 'dewi36@kuswandari.biz', '2021-03-07 23:08:00', '2021-03-07 23:08:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasoks`
--

CREATE TABLE `pemasoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pemasok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemasok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemasoks`
--

INSERT INTO `pemasoks` (`id`, `kode_pemasok`, `nama_pemasok`, `alamat`, `kota`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '61839', 'CV Nababan Prasetyo (Persero) Tbk', 'Dk. Jakarta No. 579, Tarakan 23542, SumUt', 'Blitar', '0263 9212 543', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(2, '72859', 'CV Winarno', 'Psr. Qrisdoren No. 261, Gunungsitoli 98859, JaBar', 'Parepare', '0409 3969 3032', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(3, '57375', 'PD Maulana Tbk', 'Ds. Supomo No. 70, Bengkulu 26923, Jambi', 'Banjar', '0469 8911 6528', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(4, '84851', 'Perum Lailasari (Persero) Tbk', 'Ki. Katamso No. 342, Cirebon 61666, Bengkulu', 'Bau-Bau', '0792 2110 8735', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(5, '54353', 'Perum Zulaika Tbk', 'Jr. Yap Tjwan Bing No. 187, Tasikmalaya 15288, DKI', 'Palangka Raya', '(+62) 942 6406 5580', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(6, '80737', 'CV Riyanti Handayani (Persero) Tbk', 'Dk. Eka No. 569, Sungai Penuh 40203, JaTim', 'Tebing Tinggi', '(+62) 513 1554 299', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(7, '73200', 'PT Pranowo Puspita (Persero) Tbk', 'Psr. Bawal No. 294, Tidore Kepulauan 57948, BaBel', 'Pangkal Pinang', '(+62) 936 0976 6856', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(8, '7205', 'UD Wastuti Nuraini', 'Dk. Sadang Serang No. 477, Palu 11081, KepR', 'Solok', '(+62) 360 6523 2566', '2021-03-07 23:07:55', '2021-03-07 23:07:55'),
(9, '24963', 'PD Tamba', 'Ds. Aceh No. 633, Pekalongan 70115, KalTeng', 'Pekalongan', '0254 1228 147', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(10, '96983', 'CV Dongoran', 'Kpg. Bakau Griya Utama No. 316, Salatiga 16754, JaTeng', 'Kediri', '(+62) 467 9163 9056', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(11, '12100', 'PT Mardhiyah Tbk', 'Psr. Bambu No. 977, Pasuruan 61362, MalUt', 'Yogyakarta', '0768 9315 0567', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(12, '89633', 'PT Simbolon', 'Psr. Yos No. 227, Pekanbaru 61804, SumSel', 'Pekanbaru', '(+62) 447 0684 676', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(13, '3189', 'CV Palastri Waskita', 'Gg. Bara Tambar No. 175, Payakumbuh 12157, Aceh', 'Metro', '(+62) 391 2867 218', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(14, '95415', 'CV Lestari Tbk', 'Ki. Acordion No. 617, Tual 59690, Bali', 'Depok', '(+62) 442 9534 478', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(15, '12932', 'UD Anggriawan Setiawan Tbk', 'Jln. Zamrud No. 57, Bekasi 32204, SulBar', 'Cimahi', '023 7059 089', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(16, '37740', 'PD Budiyanto', 'Dk. Bahagia No. 749, Palembang 75939, Maluku', 'Pontianak', '0720 3873 797', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(17, '93275', 'PT Pradana Tbk', 'Dk. M.T. Haryono No. 721, Tanjung Pinang 51081, SulUt', 'Bengkulu', '0975 1393 439', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(18, '95520', 'CV Sihotang (Persero) Tbk', 'Gg. Rumah Sakit No. 155, Banjarmasin 27140, Bali', 'Banda Aceh', '0653 2605 6446', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(19, '82041', 'PT Yuliarti Januar Tbk', 'Jln. Gading No. 569, Cimahi 14626, KalBar', 'Serang', '(+62) 870 2580 593', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(20, '67580', 'PD Hassanah', 'Jr. Bambon No. 636, Pontianak 38028, KalTeng', 'Banjarbaru', '(+62) 286 4813 1149', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(21, '45491', 'UD Sinaga Widiastuti (Persero) Tbk', 'Jr. Bara Tambar No. 200, Tomohon 54130, SulTra', 'Pasuruan', '0446 5364 377', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(22, '66219', 'UD Usada', 'Gg. Nanas No. 702, Pasuruan 34642, SumBar', 'Banjarmasin', '(+62) 428 8338 5160', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(23, '69326', 'UD Wulandari Haryanto Tbk', 'Ds. Sukajadi No. 326, Ternate 11860, SulSel', 'Serang', '0399 7469 322', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(24, '22944', 'UD Susanti (Persero) Tbk', 'Ki. Tambun No. 72, Cirebon 19118, SulUt', 'Solok', '0372 7378 4005', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(25, '60382', 'PT Marbun (Persero) Tbk', 'Dk. Lembong No. 301, Lubuklinggau 74950, SulUt', 'Bau-Bau', '(+62) 22 8138 582', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(26, '5105', 'PT Pangestu', 'Ki. Diponegoro No. 81, Bitung 76291, SulTeng', 'Samarinda', '0622 9806 5336', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(27, '45149', 'PT Widiastuti', 'Ds. Ekonomi No. 421, Subulussalam 90327, SumBar', 'Magelang', '027 4706 4686', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(28, '38759', 'CV Purnawati Sihombing', 'Kpg. Pattimura No. 459, Palangka Raya 72214, Banten', 'Banjar', '0691 1539 6615', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(29, '14711', 'Perum Hastuti Pertiwi', 'Psr. Basudewo No. 364, Pematangsiantar 33970, SumBar', 'Pekanbaru', '(+62) 777 7749 3806', '2021-03-07 23:07:56', '2021-03-07 23:07:56'),
(30, '8218', 'CV Adriansyah Wahyuni', 'Kpg. Mahakam No. 384, Bandung 22646, Maluku', 'Tangerang', '0642 0690 2333', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(31, '29090', 'PD Hastuti', 'Gg. Sudirman No. 50, Lhokseumawe 39502, Jambi', 'Pekanbaru', '(+62) 829 103 736', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(32, '1920', 'UD Aryani (Persero) Tbk', 'Jr. Lembong No. 933, Gunungsitoli 55649, JaTeng', 'Manado', '020 9506 5517', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(33, '27460', 'UD Saputra Tbk', 'Jr. Babakan No. 306, Tomohon 92662, MalUt', 'Prabumulih', '(+62) 687 3133 8730', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(34, '94534', 'Perum Handayani', 'Dk. Wahid Hasyim No. 394, Manado 62373, DKI', 'Salatiga', '0688 0690 3204', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(35, '70979', 'PD Palastri', 'Ki. Suryo Pranoto No. 672, Mataram 27140, JaBar', 'Batam', '(+62) 327 3092 513', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(36, '43772', 'UD Yolanda Januar Tbk', 'Jln. Basuki No. 771, Samarinda 52240, JaBar', 'Mojokerto', '0770 1953 9073', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(37, '82479', 'UD Mayasari Hidayanto', 'Ds. Pahlawan No. 975, Bengkulu 28179, Banten', 'Dumai', '(+62) 865 1646 1473', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(38, '35406', 'Perum Astuti', 'Psr. Cikutra Timur No. 584, Semarang 47919, KalUt', 'Ternate', '(+62) 526 3435 702', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(39, '32855', 'Perum Nasyiah', 'Ki. Dago No. 603, Tegal 55563, KalSel', 'Pekanbaru', '(+62) 890 289 435', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(40, '33814', 'CV Puspasari Tbk', 'Ki. Suprapto No. 130, Blitar 92324, SulBar', 'Pematangsiantar', '(+62) 214 3022 205', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(41, '71976', 'UD Narpati Tamba (Persero) Tbk', 'Gg. Kusmanto No. 310, Tanjung Pinang 45510, SulBar', 'Banjar', '(+62) 22 8482 8264', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(42, '64006', 'Perum Firmansyah (Persero) Tbk', 'Ds. Yosodipuro No. 499, Mojokerto 74933, PapBar', 'Medan', '(+62) 266 4030 716', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(43, '1818', 'PT Haryanto Wulandari', 'Jln. Lumban Tobing No. 457, Sorong 76843, Bali', 'Parepare', '(+62) 974 0349 955', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(44, '56887', 'UD Handayani (Persero) Tbk', 'Psr. Soekarno Hatta No. 770, Cimahi 22199, KalSel', 'Cimahi', '0323 6965 605', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(45, '60769', 'CV Prastuti Wahyuni', 'Kpg. Basoka No. 824, Salatiga 22438, Jambi', 'Depok', '0510 8632 162', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(46, '57430', 'CV Riyanti Wastuti (Persero) Tbk', 'Kpg. Moch. Toha No. 884, Salatiga 84670, SulTeng', 'Pasuruan', '(+62) 754 7343 650', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(47, '1249', 'PD Putra (Persero) Tbk', 'Dk. Dahlia No. 434, Jayapura 98417, SulSel', 'Mojokerto', '(+62) 23 0197 6918', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(48, '59533', 'CV Latupono Yulianti', 'Psr. Sunaryo No. 290, Tegal 24932, Aceh', 'Kediri', '(+62) 781 1823 119', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(49, '91912', 'PT Nababan', 'Psr. Teuku Umar No. 916, Medan 62699, SumUt', 'Payakumbuh', '(+62) 641 8966 2543', '2021-03-07 23:07:57', '2021-03-07 23:07:57'),
(50, '27604', 'PD Puspita (Persero) Tbk', 'Ki. Merdeka No. 958, Sibolga 40325, KalBar', 'Solok', '(+62) 333 6934 918', '2021-03-07 23:07:57', '2021-03-07 23:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelians`
--

CREATE TABLE `pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `total` double(100,2) NOT NULL,
  `pemasoks_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelians`
--

INSERT INTO `pembelians` (`id`, `kode_masuk`, `tanggal_masuk`, `total`, `pemasoks_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '1610', '1972-11-04', 114717.00, 25, 1, '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(2, '68387', '1974-08-13', 387396.00, 7, 1, '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(3, '62821', '1970-11-06', 759481.00, 12, 1, '2021-03-07 23:08:00', '2021-03-07 23:08:00'),
(4, '8856', '1996-05-14', 501464.00, 24, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(5, '91743', '2003-11-18', 567000.00, 10, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(6, '12037', '2005-02-26', 998760.00, 8, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(7, '26400', '2017-08-07', 257044.00, 13, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(8, '69363', '1981-12-26', 391419.00, 28, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(9, '85329', '2012-02-03', 461135.00, 16, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(10, '24354', '1982-01-08', 807344.00, 15, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(11, '76984', '1970-10-03', 811699.00, 20, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(12, '75238', '1988-04-01', 534034.00, 19, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(13, '86438', '1985-03-09', 618078.00, 32, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(14, '71680', '1982-02-14', 937691.00, 27, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(15, '95737', '1973-06-04', 479809.00, 9, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(16, '32863', '1992-04-14', 995145.00, 2, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(17, '78818', '1971-05-27', 107588.00, 37, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(18, '10220', '2006-12-16', 515800.00, 41, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(19, '29623', '1974-04-27', 741428.00, 33, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(20, '81124', '2006-06-12', 901541.00, 17, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(21, '14523', '2004-10-28', 67049.00, 38, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(22, '45119', '1995-06-23', 864647.00, 8, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(23, '46366', '1995-09-17', 396896.00, 2, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(24, '60120', '1996-07-27', 882363.00, 28, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(25, '22622', '2019-07-03', 199462.00, 34, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(26, '36390', '2009-07-18', 884874.00, 3, 1, '2021-03-07 23:08:01', '2021-03-07 23:08:01'),
(27, '44511', '2014-08-01', 435274.00, 11, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(28, '51114', '2002-05-15', 391236.00, 8, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(29, '92632', '1976-11-29', 839678.00, 22, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(30, '6032', '1995-01-22', 149616.00, 18, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(31, '27520', '2019-03-28', 681938.00, 17, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(32, '84398', '1982-05-08', 876316.00, 44, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(33, '47561', '2009-11-08', 953613.00, 24, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(34, '32175', '1977-01-02', 220286.00, 33, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(35, '44193', '1976-05-09', 782923.00, 16, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(36, '71492', '1983-01-01', 33609.00, 10, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(37, '79984', '1974-01-21', 461919.00, 4, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(38, '87241', '1993-03-18', 745391.00, 42, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(39, '65111', '1982-06-01', 131743.00, 27, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(40, '42659', '1971-09-01', 409154.00, 33, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(41, '9666', '1973-07-07', 615850.00, 5, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(42, '99888', '2018-11-29', 268998.00, 13, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(43, '77653', '1972-10-16', 957674.00, 32, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(44, '62997', '2019-03-19', 496903.00, 46, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(45, '37499', '1970-08-16', 194410.00, 38, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(46, '28146', '2010-03-25', 328431.00, 17, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(47, '30533', '2001-11-10', 606830.00, 42, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(48, '75046', '2020-06-23', 138241.00, 24, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(49, '17466', '2018-12-31', 272268.00, 42, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02'),
(50, '26434', '2000-01-31', 757151.00, 32, 1, '2021-03-07 23:08:02', '2021-03-07 23:08:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_faktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_faktur` date NOT NULL,
  `total_bayar` double NOT NULL,
  `pelanggans_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualans`
--

INSERT INTO `penjualans` (`id`, `no_faktur`, `tgl_faktur`, `total_bayar`, `pelanggans_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '907436', '1986-02-11', 5713679, 15, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(2, '998711', '1974-09-14', 7370878, 50, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(3, '644805', '2017-12-29', 858890, 49, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(4, '224544', '2019-05-03', 6844203, 49, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(5, '914446', '2000-02-14', 3499863, 33, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(6, '525074', '1973-07-26', 1806718, 31, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(7, '467663', '1991-10-03', 1313203, 6, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(8, '966466', '1984-10-25', 2456882, 37, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(9, '115932', '1990-08-21', 7699231, 3, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(10, '938690', '2013-03-15', 8124074, 7, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(11, '357083', '1989-08-20', 9827644, 41, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(12, '669165', '1979-03-16', 4451709, 25, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(13, '696101', '2001-10-21', 8554831, 19, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(14, '362726', '2021-02-12', 5653610, 24, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(15, '259332', '1990-06-01', 655672, 16, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(16, '192477', '2004-12-25', 4217150, 34, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(17, '866426', '2012-08-28', 767195, 3, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(18, '544045', '1981-04-12', 5956580, 23, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(19, '120137', '1980-07-16', 6997336, 20, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(20, '499044', '1987-10-25', 3680032, 5, 1, '2021-03-07 23:08:03', '2021-03-07 23:08:03'),
(21, '248833', '2018-09-24', 8356875, 34, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(22, '865474', '1972-12-26', 3959372, 31, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(23, '973868', '2000-09-07', 3797417, 14, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(24, '602166', '2006-07-18', 1302646, 45, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(25, '879411', '1975-04-25', 2930993, 26, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(26, '366817', '2006-03-03', 5665222, 45, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(27, '637389', '2015-04-19', 5388028, 48, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(28, '142066', '1990-08-09', 4628026, 42, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(29, '138396', '2015-11-24', 5948006, 3, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(30, '317679', '1985-06-12', 6923899, 14, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(31, '508669', '1992-06-21', 338171, 24, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(32, '152521', '2010-04-17', 9758767, 5, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(33, '306109', '2008-08-23', 378710, 26, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(34, '150648', '1971-09-13', 6643218, 3, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(35, '342450', '1972-03-21', 4599056, 23, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(36, '182388', '1978-06-03', 732418, 13, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(37, '878623', '1974-04-05', 7153016, 23, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(38, '353718', '1986-02-14', 6129888, 1, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(39, '754718', '2009-12-13', 7973084, 4, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(40, '190965', '1971-10-23', 483893, 44, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(41, '935799', '1987-06-25', 4538541, 43, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(42, '214755', '1978-08-23', 3119042, 22, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(43, '759583', '2014-08-04', 4496267, 8, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(44, '440174', '2012-07-22', 1244178, 14, 1, '2021-03-07 23:08:04', '2021-03-07 23:08:04'),
(45, '278746', '2002-01-15', 6346981, 26, 1, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(46, '776912', '1995-02-12', 5896208, 14, 1, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(47, '486093', '1992-09-10', 595319, 44, 1, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(48, '158684', '1975-08-26', 6951224, 8, 1, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(49, '522545', '2007-10-04', 4337798, 25, 1, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(50, '363063', '1975-05-13', 5234085, 3, 1, '2021-03-07 23:08:05', '2021-03-07 23:08:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `created_at`, `updated_at`) VALUES
(1, 'CHIKI', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(2, 'ROKOK', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(3, 'SHAMPOO', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(4, 'PAMPERS', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(5, '	ES KRIM', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(6, 'SUSU', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(7, 'KOPI', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(8, 'ROTI', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(9, 'DETERJEN', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(10, 'MIE', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(11, 'KERIPIK', '2021-03-07 23:07:54', '2021-03-07 23:07:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampung_bayars`
--

CREATE TABLE `tampung_bayars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualans_id` bigint(20) UNSIGNED NOT NULL,
  `total` double(100,2) NOT NULL,
  `terima` double(100,2) NOT NULL,
  `kembali` double(100,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tampung_bayars`
--

INSERT INTO `tampung_bayars` (`id`, `penjualans_id`, `total`, `terima`, `kembali`, `created_at`, `updated_at`) VALUES
(1, 48, 5763341.00, 4654447.00, 7208712.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(2, 42, 5309408.00, 6896873.00, 4294492.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(3, 34, 194539.00, 2169020.00, 5167106.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(4, 6, 192943.00, 6051005.00, 4727632.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(5, 44, 911963.00, 6287369.00, 2653350.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(6, 22, 8101574.00, 8351083.00, 4328948.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(7, 26, 3187047.00, 4023223.00, 8084885.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(8, 35, 6480973.00, 244991.00, 6543513.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(9, 11, 5827688.00, 3324591.00, 3852786.00, '2021-03-07 23:08:05', '2021-03-07 23:08:05'),
(10, 41, 4212205.00, 872454.00, 7898856.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(11, 5, 2778505.00, 4495745.00, 3778789.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(12, 5, 54228.00, 2946685.00, 6813218.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(13, 19, 135386.00, 4199940.00, 5018104.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(14, 8, 3341981.00, 6059421.00, 7016736.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(15, 2, 2613869.00, 1576586.00, 1190099.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(16, 48, 9957280.00, 3072461.00, 2757964.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(17, 15, 3480718.00, 5223633.00, 421794.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(18, 44, 4442121.00, 6746587.00, 6870243.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(19, 25, 8355457.00, 8525787.00, 3152342.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(20, 7, 1356974.00, 9291211.00, 8546159.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(21, 1, 7777195.00, 4829642.00, 5982572.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(22, 39, 9587043.00, 1473843.00, 6589541.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(23, 32, 4332175.00, 4546765.00, 2184090.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(24, 18, 3333497.00, 8291902.00, 9259901.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(25, 22, 1759805.00, 4330286.00, 3782652.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(26, 28, 3759909.00, 6485650.00, 8447783.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(27, 25, 1250389.00, 6415779.00, 69981.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(28, 22, 8124317.00, 7921957.00, 7343524.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(29, 25, 99261.00, 4606006.00, 7684012.00, '2021-03-07 23:08:06', '2021-03-07 23:08:06'),
(30, 10, 3219065.00, 317800.00, 7695639.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(31, 17, 1716548.00, 4478282.00, 9041942.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(32, 25, 1503802.00, 8182952.00, 8287274.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(33, 50, 115680.00, 8963478.00, 3655227.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(34, 10, 491339.00, 1427999.00, 3178490.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(35, 9, 2742415.00, 7170467.00, 9592154.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(36, 49, 8836374.00, 438324.00, 7214259.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(37, 27, 6214569.00, 7271231.00, 124020.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(38, 7, 1815753.00, 6048711.00, 6611905.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(39, 7, 1716117.00, 348039.00, 2655358.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(40, 8, 2782434.00, 6297498.00, 1300063.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(41, 24, 3776182.00, 8450333.00, 9187937.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(42, 44, 3449858.00, 4611208.00, 7683742.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(43, 17, 1942783.00, 6076968.00, 3871102.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(44, 11, 1656398.00, 4337144.00, 1822574.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(45, 50, 7683575.00, 8465813.00, 4718429.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(46, 17, 3115261.00, 7720434.00, 6005676.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(47, 20, 2355102.00, 2279257.00, 4680415.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(48, 37, 8072429.00, 8839149.00, 1499327.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(49, 13, 5805830.00, 5115496.00, 7699131.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07'),
(50, 39, 924397.00, 611148.00, 6186598.00, '2021-03-07 23:08:07', '2021-03-07 23:08:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harjo Putu Habibi S.T.', 'kenzie12@example.com', '2021-03-07 23:07:47', '$2y$10$gkjEc62i//4/rmdYOdBmBe3aSMvVlflsZrcgsxtisLEnxID/izyN.', 'VZbyPaqUmm', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(2, 'Kenzie Siregar', 'zdamanik@example.com', '2021-03-07 23:07:47', '$2y$10$IUYL/c6v6QPTYehepurnTeRA9.Z11TSBic.AU7W3z8glx/3NFm4MC', 'SVbdzkbYmX', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(3, 'Anita Utami S.Kom', 'nsitumorang@example.com', '2021-03-07 23:07:47', '$2y$10$uFjTivCjiKruPQ1jc8CG4eGaoP5rdI0DzGznKjPhUf4PhIxKN5vxi', '30qEiZ6llI', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(4, 'Sadina Endah Suartini M.M.', 'mustofa80@example.net', '2021-03-07 23:07:47', '$2y$10$g5YHS.SWIjBjhx26.ZYx5evxNDkjCsUj74AWlrogXxZt/OABPDZy2', 'deC81i3Fay', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(5, 'Maman Prasetyo', 'vnainggolan@example.com', '2021-03-07 23:07:47', '$2y$10$5RQYYtfF.Fwee1bpgENrG.QAKXeqCLj18Ow3/5y4O84EKr6.NX3I.', 'haBQimUchO', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(6, 'Maryadi Jaka Pranowo', 'ypranowo@example.org', '2021-03-07 23:07:47', '$2y$10$S1/PHzYoDQl05DnnYpKPReVf6k90mzHa4SxMkJKewtvdO.AXRJzZy', 'H1PX8s22RI', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(7, 'Mila Juli Winarsih S.I.Kom', 'sari39@example.com', '2021-03-07 23:07:47', '$2y$10$tv0D2X3M3JN..aj80MNFJOX3DqMvrm2nZP00NZHo5AWaOb/S8HtG.', 'h3RuAt3s78', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(8, 'Keisha Rahimah', 'laila76@example.com', '2021-03-07 23:07:47', '$2y$10$x27ljcwTYYRZFcsr0z1m1OfKPvNE50S3gwVixEx3M1OPLx09hTqwO', 'd90TZF9t2u', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(9, 'Asmuni Siregar', 'rudi13@example.net', '2021-03-07 23:07:47', '$2y$10$lg5PaF3rJXzunJgrDgZToeaoe8FqUw1NEV/NAYSeQ5hintcPDpf9m', 's2Sn87B8zK', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(10, 'Asmuni Pratama', 'utami.gaiman@example.com', '2021-03-07 23:07:47', '$2y$10$T4v7tX3A5xu5n77UjXh/3OOMqGPCQB7GHgtsAHrmQvmxCCxVM6jFK', 'W2XOLuQItM', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(11, 'Empluk Utama M.Kom.', 'imaryati@example.net', '2021-03-07 23:07:47', '$2y$10$rBmY.p4N.ec12RRhG44GQ.eLPI7PBAxMY0p9fjI9bNA61z68r8mhq', 'U8bJU6dviz', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(12, 'Kania Agustina', 'uyainah.gamani@example.org', '2021-03-07 23:07:48', '$2y$10$c40aVGm./P/Pmg.COXdO/e9413FcE8FbSLGhVxmvQDbPUfnQXKaPe', '5H0gFgHErI', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(13, 'Dalima Anggraini', 'melinda.winarno@example.com', '2021-03-07 23:07:48', '$2y$10$y8YNCZQleMBgx4OaSZgqF.C5WFS5Qm9bbdfQeCfKnMUcA/Ir2kR4m', 'dz3d22K0zr', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(14, 'Cici Lailasari', 'mdamanik@example.net', '2021-03-07 23:07:48', '$2y$10$OSIwQIYSF7ppWRqW5RI0zeeMFIpN.5sTL7dLexY8JAilUdUyAul2K', 'reOIx6Q3U4', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(15, 'Yani Mardhiyah', 'aprabowo@example.com', '2021-03-07 23:07:48', '$2y$10$0fcv0iFYEq9i6874wBaBz.DJ0pqyg6Zdh9gATLDcQEnwOKyBAL3LW', '6aX0UpLMfR', '2021-03-07 23:07:51', '2021-03-07 23:07:51'),
(16, 'Prasetya Wacana', 'hardiansyah.ina@example.net', '2021-03-07 23:07:48', '$2y$10$D0kJZj4y8T77qLcmX7DrSuLsi.wF38gzpNgkC.FqMGOHxS7R2qKTu', '6lXTEyjHKj', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(17, 'Gaduh Wibisono', 'adinata71@example.net', '2021-03-07 23:07:48', '$2y$10$Dm2sKZMsBLMniHVAER4E/uP1NUFGxDo19w5.kCDfEfTM/AvCWtVAS', 'hQQfv1RJ18', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(18, 'Zalindra Indah Permata', 'hadi.wijaya@example.com', '2021-03-07 23:07:48', '$2y$10$DttfBypg.wsJ2JOCiRa28e34kr3G.vmOj4Drt765hbF9akxZ7Adsq', '1ZuXELqhLO', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(19, 'Laila Winarsih', 'hutapea.gatra@example.org', '2021-03-07 23:07:48', '$2y$10$u8exfJUJeQnGHq93LmPumes2IwzyJfay4ruFIdigRZAgfatQWnYF6', 'Thli9yf7bd', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(20, 'Nadine Utami', 'jwahyudin@example.org', '2021-03-07 23:07:48', '$2y$10$2dBj7EDXWhjlL9Zwu/OZFugQH9TKes8PVgUyKLcikBRdh6gKaClVy', 'pbjglaO2q1', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(21, 'Usyi Permata', 'vanya.hariyah@example.com', '2021-03-07 23:07:48', '$2y$10$y9MAnaf9YLFJUGUEPefL9uHYE5fWhoSVdGoWl3MPmH0VnIiye/oDq', 'G9IJCaFtT9', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(22, 'Shakila Farida', 'vanya25@example.net', '2021-03-07 23:07:48', '$2y$10$dj5.gfMEOuIpDkMSsz4jZekpHNVrE6jG7trDjuU.C8cmjx9qYDbWq', 'L1XX7GQ0wH', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(23, 'Laila Halimah S.Pd', 'wwaskita@example.org', '2021-03-07 23:07:48', '$2y$10$7DoPH7ts13ME3RzOg4UH1OjzxJQj1GDRYHISE9HfWTjc4CIK5OO.6', 'vmOIpz7ZKp', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(24, 'Gilang Ramadan', 'wulan.prayoga@example.org', '2021-03-07 23:07:48', '$2y$10$WwcrGjauBWEesWX0v7LhmejVuoS1AfbleyG2Phq5QpuiIoS5/4TLi', 'WfpV99ao4H', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(25, 'Yunita Yulianti', 'mila60@example.net', '2021-03-07 23:07:49', '$2y$10$VV/oH2D8HKsVm42K9lMTOuO.6jEqBWw800DL6U39XWXW5YUfJU5G2', 'r8No8FwK0y', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(26, 'Nardi Adriansyah', 'sihotang.vivi@example.net', '2021-03-07 23:07:49', '$2y$10$M2APckN99NxpglqCCGE.Debq5qFKnhUSusmY4KQ6EuDvIAGi4WBni', '3CTPADRxLv', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(27, 'Farah Usada', 'mardhiyah.cornelia@example.net', '2021-03-07 23:07:49', '$2y$10$AidyCACP.HXRS7WXrjSRGeyEmd6JjF7mr3JhQF.hWUtkheLZ.ZZZG', 'eK0lPRYPc1', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(28, 'Putu Prasasta', 'atma.jailani@example.com', '2021-03-07 23:07:49', '$2y$10$knwXPuNXzpSrrDSYXPds3e28PKn8JRBjYVQ5eeVZcYw953RGraxJS', '1O3UUoE1PM', '2021-03-07 23:07:52', '2021-03-07 23:07:52'),
(29, 'Galang Santoso', 'qtamba@example.net', '2021-03-07 23:07:49', '$2y$10$9k2VOTTzT0kdXRU1OrqWa.de8f3cCUdBMsMTLVU2Zu9PVmNCAOGXm', 'VafH9Fu58J', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(30, 'Yunita Mandasari', 'ndongoran@example.org', '2021-03-07 23:07:49', '$2y$10$ZNbMhex3K7fnG9xio06ixeTWhWde6Meib9AkQjpliRiX2py7KaW9a', 'FOQkyydw41', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(31, 'Dewi Kartika Laksita', 'citra.nababan@example.com', '2021-03-07 23:07:49', '$2y$10$qpNxRZ9cYXenv3dD1ZPduuzs4t8t3TkPy2zhxQh6Mmp7lg.pQ6GgG', 'zQaDe1Fq1h', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(32, 'Bambang Damanik S.Pd', 'lhasanah@example.net', '2021-03-07 23:07:49', '$2y$10$XbmEmDtMqn9TpAXUQxCg/OUFoIV2.203VYiZSOroFFlERRMjKKs.y', 'BvLP7Jp7YN', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(33, 'Taswir Wibisono S.Kom', 'wsuwarno@example.net', '2021-03-07 23:07:49', '$2y$10$GeAg/R5hh.MKTcHM0uDQmObIl0XbJ6CVzwDy346evxUZxnznjIU6a', 'CXfJaEObAd', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(34, 'Azalea Hesti Yulianti', 'upradana@example.com', '2021-03-07 23:07:49', '$2y$10$GFef0hcLjUZTWzdCOa.X9.fUEJICgm2s2ZuA4v/mGUwZyO2.IZQ8W', 'PSQTCzeTf0', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(35, 'Septi Yuniar', 'kartika.aryani@example.org', '2021-03-07 23:07:49', '$2y$10$E6yJNG63MPxNMV5WZ.I3lewDxU8ixFEUtRinw1rGTkrPko7P9vBTa', 'n8u39XIjpH', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(36, 'Pandu Marbun S.H.', 'uwais.perkasa@example.org', '2021-03-07 23:07:49', '$2y$10$qtSJPxmxPK3JmWGThQzeP.GuWpx4WnLMPwssL3U3IuR25fEncK.Zm', 'gjQrsQuyM8', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(37, 'Tantri Anggraini', 'vsuryatmi@example.com', '2021-03-07 23:07:49', '$2y$10$IzICphyaOXfDZWmO0DCr4Oi.W4jW3mSoL.AOF.ixDMx6257yORwFi', '7F9hdySsoW', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(38, 'Septi Andriani', 'hari64@example.net', '2021-03-07 23:07:50', '$2y$10$.Tf3CkQXXPkXMrkTGscLV.4tvN/jfIwvAHxAyFRIwJDqeGwiKyqU.', 'IcqVVeJY6g', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(39, 'Ayu Namaga S.Sos', 'virman72@example.net', '2021-03-07 23:07:50', '$2y$10$ytwYmEKflgOltCuXV7sNvugOtezYYAEGMhAKN15ai9fX4w2iqa/5O', 'Pf9LA6A7p1', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(40, 'Hamzah Prasetya', 'baktiono.wijayanti@example.org', '2021-03-07 23:07:50', '$2y$10$l5tXIkqc8FzEgNJtCrPTl.gOQpznsfVQ.UlZDAyXLfvXzEXRnpZkq', 'Gd5jFEVvN0', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(41, 'Prasetya Megantara S.Gz', 'hesti.yuniar@example.net', '2021-03-07 23:07:50', '$2y$10$wxl6ZG0o2P0frQeqSBtWI.aH5rC6sW78HOmuw.4WJApIGIUSPaJGi', '8GsAxYbMKe', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(42, 'Olivia Belinda Astuti M.Kom.', 'hardana.pudjiastuti@example.com', '2021-03-07 23:07:50', '$2y$10$fm/fgKKBfBgIQgfVYoqslOrakxGQmzpyzxQJfV/eY8PQWBFztjRd6', 'OF2JmIwTQi', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(43, 'Jono Karta Megantara', 'widodo.dimas@example.com', '2021-03-07 23:07:50', '$2y$10$yLsYbFcQDnNwgIcDupyn/Oy9Ed/4azJsxiTWwF7aktcTUsZJgBvlK', 'UIf9lN7QnI', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(44, 'Saiful Bagya Prasetya S.Sos', 'hakim.paulin@example.net', '2021-03-07 23:07:50', '$2y$10$YJTLCpQokmT0tqkdvJEJ2uxZzz8uBO9wZjLUQ8CqomWcM.FlrxfDa', 'gdjeIvPI1I', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(45, 'Raisa Kamila Mardhiyah', 'jasmani.maheswara@example.org', '2021-03-07 23:07:50', '$2y$10$QOnkXdCC5Vw5cpq0dpKlTOkRubeBusUsDzG0PrwDhxja6s3YP6a.i', 'NJsjhq5LuK', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(46, 'Kamila Permata S.E.I', 'gasti.anggriawan@example.org', '2021-03-07 23:07:50', '$2y$10$77A2VNyU9rjTVa4scPmxR..aDfC31W8V4cfP0HDdgQGdZ0MAEt/QW', '9xJsz4ZWPX', '2021-03-07 23:07:53', '2021-03-07 23:07:53'),
(47, 'Prima Iswahyudi', 'pradipta.zulfa@example.com', '2021-03-07 23:07:50', '$2y$10$C7Lb6jTR/j6y1iYVbPUkXOUurcSaXTGNzCwN4nHl8VTi52uYAOeCO', 'xmADVuIXfG', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(48, 'Ani Utami M.TI.', 'sari03@example.net', '2021-03-07 23:07:50', '$2y$10$zOnrHTERdMYYRzetbFK5e.qAn9Uc0UbNd2RjDTZsUtSQ1FZIhYmcW', 'EEdkVgrf0K', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(49, 'Okta Waluyo', 'sarah.sihombing@example.org', '2021-03-07 23:07:50', '$2y$10$TolUmCgfYq2yIvVWwyaVluVrDHCF/eX3XE475p2fK71JjCbAJ5v76', 'uL50H46YS5', '2021-03-07 23:07:54', '2021-03-07 23:07:54'),
(50, 'Lalita Paris Hassanah', 'kani.sinaga@example.net', '2021-03-07 23:07:51', '$2y$10$eGCTc/E/V/nq4hbw.oc9hufa7b9av2KXYL8zduy3QNJxRVdzl7ZMi', 'hAHPFsD3Py', '2021-03-07 23:07:54', '2021-03-07 23:07:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_produks_id_index` (`produks_id`);

--
-- Indeks untuk tabel `detail_pembelians`
--
ALTER TABLE `detail_pembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pembelians_pembelians_id_index` (`pembelians_id`),
  ADD KEY `detail_pembelians_barangs_id_index` (`barangs_id`);

--
-- Indeks untuk tabel `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_penjualans_penjualans_id_index` (`penjualans_id`),
  ADD KEY `detail_penjualans_barangs_id_index` (`barangs_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_email_unique` (`email`);

--
-- Indeks untuk tabel `pemasoks`
--
ALTER TABLE `pemasoks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelians_pemasoks_id_index` (`pemasoks_id`),
  ADD KEY `pembelians_users_id_index` (`users_id`);

--
-- Indeks untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualans_pelanggans_id_index` (`pelanggans_id`),
  ADD KEY `penjualans_users_id_index` (`users_id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tampung_bayars`
--
ALTER TABLE `tampung_bayars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tampung_bayars_penjualans_id_index` (`penjualans_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `detail_pembelians`
--
ALTER TABLE `detail_pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `pemasoks`
--
ALTER TABLE `pemasoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tampung_bayars`
--
ALTER TABLE `tampung_bayars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_produks_id_foreign` FOREIGN KEY (`produks_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_pembelians`
--
ALTER TABLE `detail_pembelians`
  ADD CONSTRAINT `detail_pembelians_barangs_id_foreign` FOREIGN KEY (`barangs_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pembelians_pembelians_id_foreign` FOREIGN KEY (`pembelians_id`) REFERENCES `pembelians` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD CONSTRAINT `detail_penjualans_barangs_id_foreign` FOREIGN KEY (`barangs_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_penjualans_penjualans_id_foreign` FOREIGN KEY (`penjualans_id`) REFERENCES `penjualans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD CONSTRAINT `pembelians_pemasoks_id_foreign` FOREIGN KEY (`pemasoks_id`) REFERENCES `pemasoks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembelians_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD CONSTRAINT `penjualans_pelanggans_id_foreign` FOREIGN KEY (`pelanggans_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penjualans_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tampung_bayars`
--
ALTER TABLE `tampung_bayars`
  ADD CONSTRAINT `tampung_bayars_penjualans_id_foreign` FOREIGN KEY (`penjualans_id`) REFERENCES `penjualans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
