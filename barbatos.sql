-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbatos`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(16, 6, 23, 1, '2022-12-18 19:32:11', '2022-12-18 19:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Beauty', NULL, NULL),
(2, 'Camera', NULL, NULL),
(3, 'Books', NULL, NULL);

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
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(35, '2022_12_02_152734_create_categories_table', 1),
(36, '2022_12_02_164444_create_products_table', 1),
(37, '2022_12_18_091004_create_carts_table', 2),
(38, '2022_12_15_021648_create_transactions_table', 3),
(39, '2022_12_18_120747_create_transaction_details_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `detail`, `price`, `photo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Azarine Cosmetic Facial Wash 2022', 1, 'Azarine untuk mencarahkan wajah wanita. Bisa menghilangkan bekas jerawat dan lainnya.', 59000, 'azarine.jpg_1670826446.jpg', NULL, NULL, NULL, '2022-12-16 02:44:14'),
(2, 'CANON EOS 250D KIT 18-55mm III', 2, 'Spesifikasi:\n- 24.1 Megapixel CMOS APS-C sensor - Superb images, packed with detail\n- Dual Pixel CMOS AF - Fast confident focusing with Live View\nKamera terbaru 2022.', 8900000, 'canon-eos.jpg_1670830390.jpg', NULL, NULL, NULL, '2022-12-13 08:54:02'),
(3, 'BUKU MOTIVASI SAYANGI DIRIMU BERHENTILAH MENYENANGKAN SEMUA ORANG', 3, 'Buku Motivasi Viral FYP Tiktok\nSayangi Dirimu Berhentilah Menyenangkan Semua Orang terbitan Syalmahat Publishing.', 35000, 'buku.jpg_1670839042.jpg', NULL, NULL, NULL, NULL),
(4, 'Azarine Brightening Facial Cleanser 60 Ml', 1, 'Pembersih wajah yang kaya akan vitamin C untuk MENCERAHKAN dan MEMBERSIHKAN kulit dari kotoran dan sisa make up. kandungan Natural AHA dan BHA membantu mengangkat kotoran serta melembabkan kulit.', 35000, 'azarinewhite.jpg_1670839909.jpg', NULL, NULL, NULL, NULL),
(5, 'SOMETHINC Holyshield! UV Watery Sunscreen Gel SPF 50+ PA++', 1, '5-in-1 Cooling Aqua Protection\nSunscreen Gel dengan SPF 50+ PA++++ & teknologi Encapsulated UV Filter yang memberikan proteksi lebih maksimal dari sinar UVA & UVB.', 49000, 'somethinc.jpg_1670850225.jpg', NULL, NULL, NULL, NULL),
(6, 'NIVEA Luminous Anti-Dark Spot Face Sunscreen SPF 50 PA+++', 1, 'NIVEA Luminous Anti-Dark Spot Face Sunscreen SPF 50 PA+++ 40ml | Sunscreen Pencegah Flek Hitam & Melasma dengan 2X Hyaluronic Acid & Vitamin E', 230000, 'nivea.jpg_1670850329.jpg', NULL, NULL, NULL, NULL),
(7, 'NIVEA Sun Face Serum Oil Control', 1, 'Serum perlindungan untuk kulit wajah dari sinar Matahari yang memiliki formula campuran spesial. Efektif untuk mengurangi minyak hingga 86% sepanjang hari dan melindungi kulit dari sinar UVB/UVA2 dan UVA1 yang dapat merusak kulit.', 60000, 'nivea2.jpg_1670850389.jpg', NULL, NULL, NULL, NULL),
(8, 'Azarine Hydrasoothe Sunscreen Mist SPF50 PA++++ Sun Screen Face Spray', 1, 'Tabir surya spray yang praktis. Di formulasikan “water based” dengan gabungan bahan aktif Hyaluronic Acid, Ceramide dan CICA pada kulit serta melembabkan agar kulit kenyal dan halus sehingga mudah diserap & tidak meninggalkan whitecast pada wajah.', 590000, 'azarinehydra.jpg_1670850557.jpg', NULL, NULL, NULL, NULL),
(9, 'Biore UV Aqua Rich Watery Essence Spf50 15Gr', 1, 'Biore UV Aqua Rich Watery Essence Sunscreen Skin Care SPF 50 PA++++ merupakan salah satu varian Biore UV Series dengan Formula Micro Defense yang memberikan perlindungan UVA UVB secara maksimal.', 40000, 'biore.jpg_1671415423.jpg', NULL, NULL, NULL, '2022-12-18 19:03:43'),
(11, 'CANON 4000D KIT 18-55MM III / EOS 4000D KIT', 2, '18-megapixel APS-C-size CMOS sensor & DIGIC 4+ image processor, 9-point AF with 1 centre cross-type AF point', 3300000, 'canoneos400d.jpg_1670850812.jpg', NULL, NULL, NULL, NULL),
(12, 'Buku How to Read a Person Like a Book', 3, '- Size : A5\n- Jilid : Softcover/Paperback\n- language : English\n- laminasi : Doff\n- Paper : Bookpaper Cream Premium', 40000, 'buku2.jpg_1670851091.jpg', NULL, NULL, NULL, NULL),
(13, 'Rich Dad Poor Dad (Edisi Revisi)', 3, 'Rich Dad Poor Dad akan. Menghancurkan mitos Anda perlu memiliki penghasilan tinggi agar bisa kaya Menantang keyakinan bahwa rumah Anda adalah aset', 68000, 'buku4.jpg_1670851147.jpg', NULL, NULL, NULL, NULL),
(14, 'Canon EOS 3000D Kit 18-55mm III - Camera DSLR Canon EOS 3000D Kit Lens', 2, 'Canon EOS 3000D Kit EF-S 18-55mm f/3.5-5.6 III menawarkan pengalaman DSLR klasik bagi para pengguna kamera DSLR yang baru. Canon EOS 3000D Kit 18-55mm dibekali dengan Sensor CMOS ukuran APS-C 18 megapiksel', 3400000, 'kamera2.jpg_1670851216.jpg', NULL, NULL, NULL, NULL),
(15, 'Canon EOS 90D KIT 18-55MM IS', 2, '32.5MP APS-C CMOS Sensor\nDIGIC 8 Image Processor\nUHD 4K30p & Full HD 120p Video Recording\n3\" 1.04m-Dot Vari-Angle Touchscreen LCD', 19900000, 'kamera3.jpg_1670851272.jpg', NULL, NULL, NULL, NULL),
(16, 'Godox Lux Senior Retro Camera Flash', 2, 'Compatible with FUJIFILM, Canon, Nikon, Olympus, and Sony cameras, the Lux Senior Retro Camera Flash from Godox is a diminutive 7 x 4.5 x 3.3\" light source with basic features', 999000, 'kamera4.jpg_1670851350.jpg', NULL, NULL, NULL, NULL),
(17, 'L’Oreal Paris ELSEVE Hyaluron Moisture Hydra Filling Night Cream', 1, 'L’Oreal Paris ELSEVE Hyaluron Moisture Hydra Filling Night Cream, Leave in Krim dengan Hyaluronic Acid untuk rambut kering dan dehidrasi, 150ml.', 55000, 'loreal.png_1670851408.png', NULL, NULL, NULL, NULL),
(18, 'L\'Oreal Paris Extraordinary Oil Gold', 1, 'Extraordinary Oil adalah serum perawatan rambut intensif dari LOreal Paris. Rambut akan secara intensif ternutrisi, dan terlindungi, dan memberikan hasil rambut yang halus, lembut, tampak berkilau, tanpa memberikan hasil akhir yang lepek secara seketika.', 65000, 'loreal2.jpg_1670851456.jpg', NULL, NULL, NULL, NULL),
(19, 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa', 3, 'Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain.', 100000, 'buku5.jpg_1670851507.jpg', NULL, NULL, NULL, NULL),
(21, 'CANON EOS M3 KIT 15-45MM IS STM', 2, 'ISI DALAM BOX :\r\nDIGITAL CAMERA EOS M3\r\nZOOM LENS EF-M15-45MM F/3.5-6.3 IS STM (KHUSUS VARIAN PAKET LENSA)\r\nNECK STRAP EM-200DB', 4999000, 'kamera5.jpg_1670851652.jpg', NULL, NULL, NULL, '2022-12-14 19:20:22'),
(22, 'Buku Tulis Sinar Dunia / SIDU / 58 Lembar', 3, '- Jaminan kualitas SiDU\r\n- 1 Pak isi 10 Buku\r\n- Harga tertera untuk 1 Pak\r\n- Motif Random', 35000, 'buku7.jpg_1670851693.jpg', NULL, NULL, NULL, NULL),
(23, 'L\'Oreal Paris Glycolic Acid Night Cream', 1, 'Glycolic Bright Glowing Night Cream dengan Brightening Glycolic Acid meningkatkan cahaya kulit dan menyamarkan noda hitam. Diuji oleh ahli kulit dan terbukti pada warna kulit Asia.', 65000, 'loreal3.jpg_1671078563.jpg', NULL, NULL, NULL, '2022-12-14 21:29:23'),
(24, 'Sony Alpha A7C Body Only / Sony A7C BO', 2, '24.2MP Full-Frame Exmor R BSI Sensor\r\nBIONZ X Image Processor\r\nUHD 4K30p Video with HLG & S-Log3 Gammas\r\n693-Point Hybrid AF System\r\n5-Axis SteadyShot INSIDE Image Stabilization\r\nFast Hybrid AF System', 25000000, 'kamera6.jpg_1670851778.jpg', NULL, NULL, NULL, NULL),
(26, 'KATA MUTIARA PENGGUGAH HIDUP AL AZRAQ ULLUW BUKU ORIGINAL', 3, 'KATA MUTIARA PENGGUGAH HIDUP AL AZRAQ ULLUW BUKU ORIGINAL\r\nBUKU TERLARIS 2022', 59000, 'buku9.jpg_1670851887.jpg', NULL, NULL, NULL, NULL),
(27, 'How to Win Friends And Influence People In The Digital Age Ed. R', 3, 'Karya klasik yang dianggap sebagai buku motivasi paling sukses sepanjang masa dan sudah terjual sebanyak 30 juta eksemplar di seluruh dunia ini telah membawa jutaan pembaca mendaki anak tangga kesuksesan dalam bisnis serta kehidupan pribadi.', 79000, 'buku10.jpg_1670852027.jpg', NULL, NULL, NULL, NULL),
(28, 'Tas Kamera Mirrorless', 2, 'Foal Edition, sebuah camera pouch yang berguna untuk tempat penyimpanan kamera ataupun lensa. Camera Pouch ini cocok digunakan untuk kamera analog ataupun body kamera mirrorless.', 59000, 'kamera7.png_1670853689.png', NULL, NULL, NULL, NULL),
(30, 'BARDI Smart IP CAMERA CCTV 360 INDOOR PTZ PAN TILT ZOOM Wifi HOME', 2, 'Kamera CCTV Bardi terbaru dan terlaris 2022!!!', 499000, 'bardi.jpg_1670945290.jpg', NULL, NULL, NULL, NULL),
(31, 'Hikvision Kamera Cctv DS-2CE76K0T-LPFS ColorVu Sound 3K Indoor', 2, 'DS-2CE76K0T-LPFS\r\nKamera Turret Tetap Dalam Ruangan Audio Cahaya Ganda 3K\r\n* Pencitraan berkualitas tinggi dengan resolusi 3K, 2960 × 1665\r\n* Lensa fokus tetap 2,8 mm dan 3,6 mm', 500000, 'kamera8.jpg_1671183415.jpg', NULL, NULL, NULL, NULL),
(32, 'BUKU BERANI TIDAK DISUKAI', 3, 'membaca buku ini bisa mengubah hidup anda. jutaan orang sudah menarik manfaat darinya. sekarang giliran anda.Berani Tidak Disukai, yang sudah terjual lebih dari 3,5 juta eksemplar.', 99000, 'buku11.jpg_1671183498.jpg', NULL, NULL, NULL, NULL),
(33, 'BUKU MOTIVASI & INSPIRASI RAHASIA BERSIKAP TENANG DALAM KONDISI APAPUN', 3, 'Masalah hadir sebagai ujian bagi manusia untuk membawa perubahan nasib. Tidak ada manusia yang hidup tanpa memiliki masalah. Kita tidak dapat menghapus kata – kata', 35000, 'buku12.png_1671370263.png', NULL, NULL, '2022-12-18 06:31:03', '2022-12-18 06:31:03'),
(34, 'Scarlett Whitening Body Lotion Jolly', 1, 'Melindungi kulit dari efek buruk sinar UV', 65000, 'scarlett.png_1671415494.png', NULL, NULL, '2022-12-18 19:04:54', '2022-12-18 19:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 6, '2022-12-18 07:54:27', '2022-12-18 07:54:27', '2022-12-18 07:54:27'),
(2, 5, '2022-12-18 07:56:14', '2022-12-18 07:56:14', '2022-12-18 07:56:14'),
(3, 5, '2022-12-18 08:23:20', '2022-12-18 08:23:20', '2022-12-18 08:23:20'),
(4, 5, '2022-12-18 19:26:27', '2022-12-18 19:26:27', '2022-12-18 19:26:27'),
(5, 5, '2022-12-18 19:28:07', '2022-12-18 19:28:07', '2022-12-18 19:28:07'),
(6, 6, '2022-12-18 19:29:37', '2022-12-18 19:29:37', '2022-12-18 19:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`transaction_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 13, 2, '2022-12-18 07:54:27', '2022-12-18 07:54:27'),
(2, 23, 2, '2022-12-18 07:56:14', '2022-12-18 07:56:14'),
(2, 22, 5, '2022-12-18 07:56:14', '2022-12-18 07:56:14'),
(2, 30, 1, '2022-12-18 07:56:14', '2022-12-18 07:56:14'),
(2, 17, 2, '2022-12-18 07:56:14', '2022-12-18 07:56:14'),
(3, 11, 1, '2022-12-18 08:23:20', '2022-12-18 08:23:20'),
(3, 3, 2, '2022-12-18 08:23:20', '2022-12-18 08:23:20'),
(4, 34, 3, '2022-12-18 19:26:27', '2022-12-18 19:26:27'),
(4, 4, 1, '2022-12-18 19:26:27', '2022-12-18 19:26:27'),
(5, 11, 1, '2022-12-18 19:28:07', '2022-12-18 19:28:07'),
(5, 33, 1, '2022-12-18 19:28:07', '2022-12-18 19:28:07'),
(6, 19, 1, '2022-12-18 19:29:37', '2022-12-18 19:29:37'),
(6, 22, 1, '2022-12-18 19:29:37', '2022-12-18 19:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `gender`, `date_of_birth`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$tuzRwT/uBTebsSklQg5II.hBFNqJrrEMMX0M1P5JxlUhrdTuNhg6W', 'administrator', 'male', '2022-11-01', 'indonesia', NULL, NULL, NULL),
(2, 'Barbatos', 'barbatos@gmail.com', NULL, '$2y$10$p.qNKPW.z7lGd.PIHY5RzO1VttQRhnH1t0zxWFbtuHFXwJ8kqBr06', 'administrator', 'male', '2022-11-01', 'indonesia', NULL, NULL, NULL),
(3, 'Johny', 'johny@gmail.com', NULL, '$2y$10$p8cRe2p26maK.tbyzDjQl.tIYxm2x7s1UixWp6tGtyFaI6OOBDrwa', 'registered', 'male', '1999-07-01', 'indonesia', NULL, NULL, NULL),
(4, 'Laura', 'laura@gmail.com', NULL, '$2y$10$sfZmLbULgUJ.yLfQ8.kxn.KD2KLZPJ/fqU6Um/gWVr/a4Hu3s7K4e', 'registered', 'female', '2002-11-01', 'indonesia', NULL, NULL, NULL),
(5, 'Joana', 'joana@gmail.com', NULL, '$2y$10$.74rxTQp4mybjaDbPkKOi.2jZB9YE0JUgvid1Omm3AXVeB6HExPQS', 'registered', 'female', '2022-12-10', 'singapore', 'WiXqr3s6IlXnsBQ9sW3Lk98y4KxKHeFnWpAuicco4XtPaj1mn375V32oQZbv', NULL, NULL),
(6, 'Samuel', 'samuel@gmail.com', NULL, '$2y$10$y/.ukz1tFTMNhOxLlTfEv.vvo.5LdsM0/bxRunZr1TrT.9rPop01C', 'registered', 'male', '2008-06-17', 'malaysia', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
