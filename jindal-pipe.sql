-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2026 at 10:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jindal-pipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'jindalpipefitting@gmail.com', '$2y$10$mzV2sVDW2BfiJFsxFvunp.oIozPDCiUHEBmN0af8zGYoK/LVyoGmG', NULL, '2026-10-05 23:54:23', '2026-10-08 00:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `slug`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'application', 'Application', '<p>We are a professionally managed organisation having extensive experience in the field of all Ferrous &amp; Non-Ferrous metals.We have excellent sourcing network in India and across the world to supply all stainless steel, Carbon steel, Nickel Alloy &amp; Special alloys in the shape of Pipes, Tubes, Sheets, Plates, Rods, Pipe Fittings, Flanges etc. Our management style has been the key to our success as we delegates responsibility to the specific need of every customers and we have made every customer a member of our family.Every member from management, managers to workers each one is encouraged to achieve highest performance in quality &amp; service resulting in Total Customer Satisfaction.</p><p>We are basically Manufacturer,Exporter and Suppliers of Stainless Steel,CarbonSteel, Fittings, Flanges,Fastners, Pipes, Tubes, Sheets, Plates, Coils, Bars, Wires, Angle, Channel, Flats, Etc. Our products are mostly supplied to Industries like:</p><ul><li>Aircraft and Aerospace Industry</li><li>Engineering and Construction</li><li>Chemical industry</li><li>Cement Plants</li><li>Defence</li><li>Drilling and Well Building</li><li>Dairy &amp; Food Industries</li><li>Fertilizer</li><li>Heat Exchangers</li><li>Instrumentation</li><li>Nuclear Power</li><li>Oil and Gas Industry</li><li>Pharmaceutical Industry &amp; biochemistry</li><li>Petro Chemicals</li><li>Power Plants</li><li>Ship Building Industry</li><li>Water Treatment Plants</li><li>and All Major Industries</li></ul>', 'uploads/application/img_6ac62765dbb466_05330461.png', '2026-10-07 05:35:09', '2026-10-07 05:35:09'),
(2, 'weight-calculator-formula', 'Weight Calculator Formula', '<figure class=\"table\"><table><tbody><tr><td>Calculation of S.S.Sheets, Circle, Pipes, Round Bar &amp; Flat Bar</td></tr><tr><td><p>&nbsp;</p><p><strong>Weight of&nbsp; S.S. Sheets &amp; Plates :</strong></p><p>Length ( Mtrs ) X&nbsp; Width ( Mtrs ) X&nbsp; Thick ( MM ) X 8 = Wt. Per PC<br>Length ( fit )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; X&nbsp; Width ( Mtrs ) X&nbsp; Thick ( mm ) X ¾&nbsp; = Wt. Per PC<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight&nbsp; of&nbsp;&nbsp; S.S. Circle</strong></p><p>Dia ( mm ) X&nbsp; Dia (mm ) X&nbsp; Thick ( mm ) / 160 = Gms. Per PC<br>Dia ( mm ) X&nbsp; Dia (mm ) X&nbsp; Thick ( mm ) X 0.00000063 = Kg. Per PC.<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of&nbsp; S.S. Pipe</strong></p><p>O.D. ( mm ) – W Thick ( mm ) X&nbsp; W.Thick ( mm ) X 0.0248&nbsp;&nbsp; = Wt. Per Mtr.<br>O.D. ( mm ) – W Thick ( mm ) X&nbsp; W.Thick ( mm ) X 0.00758 = Wt. Per Mtr.<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of&nbsp; S.S. Round Bar.</strong></p><p>Dia ( mm ) X&nbsp; Dia (mm ) X 0.00623&nbsp; = Wt. Per. Mtr.<br>Dia ( mm ) X&nbsp; Dia (mm ) X 0.0019&nbsp;&nbsp;&nbsp; = Wt. Per. Feet.<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of&nbsp; S.S. Square Bar</strong></p><p>Dia ( mm ) X&nbsp; Dia ( mm ) X 0.00788 = Wt. Per. Mtr<br>Dia ( mm ) X&nbsp; Dia ( mm ) X 0.0024&nbsp;&nbsp; =&nbsp; Wt.Per. Feet.<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of&nbsp; S.S. Hexagonal Bar&nbsp;</strong></p><p>Dia ( mm )&nbsp;&nbsp;&nbsp;&nbsp; X&nbsp; Dia ( mm ) X 0.00680&nbsp;&nbsp;&nbsp; =&nbsp; Wt. Per.Mtr<br>Width ( mm ) X&nbsp; Dia ( mm )&nbsp; X 0.002072 =&nbsp; Wt. Per Feet<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of&nbsp; S.S. Flate Bar</strong></p><p>Width&nbsp; (mm ) X&nbsp; Thick ( mm ) X 0.00798 = Wt.Per Mtr.<br>Width&nbsp; (mm ) X&nbsp; Thick ( mm ) X 0.00243 = Wt.Per Feet.<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of&nbsp; Brass Pipe / Copper Pipe</strong></p><p>O.D. ( mm ) – Thick ( mm ) X Thick (mm ) X 0.0260 = Wt. Per Mtr.<br>&nbsp;</p></td></tr><tr><td>O.D. ( mm ) – Wt ( mm ) X&nbsp; Wt ( mm ) X 0.0345 = Wt. Per Mtr.<br><br>&nbsp;</td></tr><tr><td><p><strong>Weight of Aluminium Pipe&nbsp;</strong></p><p>O.D. ( mm ) – Thick ( mm ) X Thick ( mm ) X&nbsp; 0.0083 = Wt.Per. Mtr.<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of Aluminium Sheet</strong></p><p>Length ( Mtr ) X Width ( Mtr )&nbsp; X Thick ( mm ) X 2.69 = Wt.Per PC<br><br>&nbsp;</p></td></tr><tr><td><p><strong>Weight of Conversion of Mtr to Feet&nbsp;</strong></p><p>Wt of 1 Mtr. 3.2808 = Wt.Per Feet.<br><br>&nbsp;</p></td></tr><tr><td><ul><li>P = 2ST/Dort – DP/2S or S – DP/2t or D = 2st/p</li><li>P = Bursting Pressure P. si.</li><li>S = Tensile Strength of tube</li><li>T = Well Thickness&nbsp; ( In Inches )</li><li>D = Outside diameter ( In Inches )</li></ul></td></tr></tbody></table></figure>', NULL, '2026-10-07 06:26:10', '2026-10-07 06:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `approaches`
--

CREATE TABLE `approaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `visiontitle` varchar(255) NOT NULL,
  `visiontext` text DEFAULT NULL,
  `visionimage` varchar(255) DEFAULT NULL,
  `missiontitle` varchar(255) NOT NULL,
  `missiontext` text DEFAULT NULL,
  `missionimage` varchar(255) DEFAULT NULL,
  `ourcompanytitle` varchar(255) NOT NULL,
  `ourcompanytext` text DEFAULT NULL,
  `ourcompanyimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approaches`
--

INSERT INTO `approaches` (`id`, `slug`, `visiontitle`, `visiontext`, `visionimage`, `missiontitle`, `missiontext`, `missionimage`, `ourcompanytitle`, `ourcompanytext`, `ourcompanyimage`, `created_at`, `updated_at`) VALUES
(1, 'our-vision', 'Our Vision', 'Jindal Steel & Pipe Fittings has clear vision to be one of the topmost companies in India enhancing the performance of our loyal customers with best quality products and help them at their work making it a delightful experience', 'uploads/approach/img_6ac5d5476a7075_97996569.jpg', 'Our Mission', 'We are here to closely work with our customers to incessantly augment their competitiveness to global standards by providing suitable, specific solutions of high quality Steel & Pipe Fittings.', 'uploads/approach/img_6ac5d5476aa850_50179470.jpg', 'Our Company', 'Jindal Steel & Pipe Fittings is located in well developed industrial vicinity in Ankleshwar, Gujarat offering large inventory of Steel & Pipe Fittings to the industry.', 'uploads/approach/img_6ac5d5476acb30_05692987.jpg', '2026-10-06 23:44:47', '2026-10-06 23:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `slug`, `title`, `subtitle`, `text`, `image`, `created_at`, `updated_at`) VALUES
(2, 'banner-title-2', 'Banner Title - 2', 'Banner Subtitle - 2', 'Banner Text - 2', 'uploads/banner/img_6ac4a0a53e94c5_24704639.png', '2026-10-06 01:47:57', '2026-10-06 01:47:57'),
(3, 'title-2', 'Title - 2', 'Subtitle- 2', NULL, 'uploads/banner/img_6ac4a0c05a6d46_88239869.png', '2026-10-06 01:48:24', '2026-10-06 01:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title`, `text`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'the-chancellor-has-delivered-his-budget', 'The Chancellor has delivered his Budget ...', '<p>The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</p>', 'uploads/blog/img_6ac4c35195e424_51709011.jpg', 1, '2026-10-06 04:15:53', '2026-10-06 04:15:53'),
(2, 'can-you-sell-a-house-before-the-probate', 'Can You Sell A House Before the Probate?', '<p>The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</p>', 'uploads/blog/img_6ac4c3da711042_63455841.jpg', 1, '2026-10-06 04:17:55', '2026-10-06 04:18:10'),
(3, 'key-headlines-for-the-best-pharmaceutical-industry', 'Key headlines for the best pharmaceutical industry.', '<p>The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</p>', 'uploads/blog/img_6ac4c40ccd2cc5_93330900.jpg', 1, '2026-10-06 04:19:00', '2026-10-06 04:19:00'),
(4, 'the-chancellor-has-delivered-his-budget-1', 'The Chancellor has delivered his Budget ...', '<p>The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</p>', 'uploads/blog/img_6ac4c43c8c2575_43718567.jpg', 1, '2026-10-06 04:19:48', '2026-10-06 04:19:48'),
(5, 'can-you-sell-a-house-before-the-probate-1', 'Can You Sell A House Before the Probate?', '<p>The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</p>', 'uploads/blog/img_6ac4c511ce3055_68373267.jpg', 1, '2026-10-06 04:23:21', '2026-10-06 04:23:21'),
(6, 'key-headlines-for-the-best-pharmaceutical-industry-1', 'Key headlines for the best pharmaceutical industry.', '<p>The Industrial Revolution, which took place from the 18th to 19th centuries, was a period during predomic.</p>', 'uploads/blog/img_6ac4c55f241095_67459018.jpg', 1, '2026-10-06 04:24:39', '2026-10-06 04:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `slug`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'make-india', 'Make India', 'uploads/client/img_6ac4cf217f68e3_53565368.png', 1, '2026-10-06 05:02:48', '2026-10-06 05:06:17'),
(2, 'iso', 'ISO', 'uploads/client/img_6ac4cf3756de73_77464445.png', 1, '2026-10-06 05:06:39', '2026-10-06 05:06:39'),
(3, 'msme', 'MSME', 'uploads/client/img_6ac4cf4c055457_59953266.png', 1, '2026-10-06 05:07:00', '2026-10-06 05:07:00'),
(4, 'sawachbharat', 'sawachbharat', 'uploads/client/img_6ac4cf5fe152b2_78353706.png', 1, '2026-10-06 05:07:19', '2026-10-06 05:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `map` text NOT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `link3` varchar(255) DEFAULT NULL,
  `link4` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `footertext` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `mobile`, `address`, `map`, `link1`, `link2`, `link3`, `link4`, `image`, `footertext`, `created_at`, `updated_at`) VALUES
(1, 'jindalpipefitting@gmail.com', '9712537663', 'Plot No. 307, 308 TO 311, NR, RAMDEV CHOKDI, GIDC ANKLESHWAR 393002', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.4670651396123!2d73.0271844!3d21.606716199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be023695ca87fc7%3A0x2aae7716310c8ecb!2sJindal%20Steel%26Pipe%20Fitting-SS%20MS%20GI%2CCS%2CTee%20Reducer%2CNipple%2CFlanges%20DI%20Pipe%20Fitting%20in%20Gujarat!5e0!3m2!1sen!2sin!4v1781265659894!5m2!1sen!2sin', NULL, NULL, NULL, NULL, 'uploads/contact/img_6ac4b07b3172b4_14137408.png', 'Jindal Steel & Pipe Fitting is a SS and all type Pipe Manufacturers and Dealer products are known for their best quality in gujarat, india, ahmedabad. Tubes, Pipes, TC Fittings, Valves, Nut Bolts, Fasteners, Sheets, Plates, Coil, Rods & All Industrial Row Materials Etc.', '2026-10-05 23:54:23', '2026-10-06 05:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `slug`, `title`, `subtitle`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'we-are-expert-in-all-industry-works', 'We Are Expert In All Industry Works', 'about Welcome to Jindal Steel & Pipe Fittings', 'Jindal Steel & Pipe Fittings is a leading manufacturer, stockist, and supplier of SS, MS, CS, and GI pipe fittings in Gujarat, India. We provide high-quality fittings for various industrial and commercial applications across the Indian market. Our company is located in well developed industrial vicinity in Ankleshwar, Gujarat offering large inventory of Steel & Pipe Fittings to the industry. Today the company has developed a niche space for itself with the availability and quality of products. From a single nut and bolt to pipes, tubes and valves the company has helped its customers realize their performance qualification.', 'uploads/home-about/img_6ac4a3af2431e8_31012559.jpg', '2026-10-06 02:00:55', '2026-10-06 02:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2024_01_01_000001_create_admins_table', 1),
(6, '2024_01_01_000002_create_banners_table', 1),
(7, '2024_01_01_000003_create_home_abouts_table', 1),
(8, '2024_01_01_000004_create_page_abouts_table', 1),
(9, '2024_01_01_000005_create_why_uses_table', 1),
(10, '2024_01_01_000006_create_approaches_table', 1),
(11, '2024_01_01_000007_create_product_categories_table', 1),
(12, '2024_01_01_000008_create_products_table', 1),
(13, '2024_01_01_000009_create_product_contents_table', 1),
(14, '2024_01_01_000010_create_product_table_contents_table', 1),
(15, '2024_01_01_000011_create_galleries_table', 1),
(16, '2024_01_01_000012_create_testimonials_table', 1),
(17, '2024_01_01_000013_create_clients_table', 1),
(18, '2024_01_01_000014_create_blogs_table', 1),
(19, '2024_01_01_000015_create_contacts_table', 1),
(20, '2024_01_01_000016_create_qualities_table', 2),
(25, '2024_01_01_000016_create_product_qualities_table', 3),
(26, '2024_01_01_000017_create_applications_table', 3),
(27, '2026_10_07_122120_add_pdf_to_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `page_abouts`
--

CREATE TABLE `page_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_abouts`
--

INSERT INTO `page_abouts` (`id`, `slug`, `title`, `subtitle`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ss-pipe-dealers-stockist-in-bharuch-gujarat', 'SS Pipe Dealers & Stockist in Bharuch, Gujarat', 'Welcome to Jindal Steel & Pipe Fittings', 'Jindal Steel & Pipe Fittings is located in well developed industrial vicinity in Bharuch, Ankleshwar, Gujarat offering large inventory of Steel & Pipe Fittings to the industry. Today the company has developed a niche space for itself with the availability and quality of products. From a single nut and bolt to pipes, tubes and valves the company has helped its customers realize their performance qualification.', 'uploads/page-about/img_6ac5cc01745495_17385061.jpeg', '2026-10-06 23:05:13', '2026-10-06 23:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `slug`, `title`, `subtitle`, `text`, `image`, `pdf`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ss-semless-erw-pipes', 'SS Semless & Erw Pipes', 'JINDAL SS, MS, CS, and GI Pipes Dealers', '<p>Seamless pipe is a pipe without a seam or a weld-joint. The seamless pipe does not have any joint hence has uniform structure &amp; strength all over the pipe body. The seamless pipe can withstand higher temperature, higher pressure, higher mechanical stress and corrosive atmosphere. It has vast applications in varied industries like Fertilizer, Bearing, Petrochemical, Mechanical &amp; Structural applications, Oil &amp; Gas, Refinery, Chemical, Power and Automotive.</p><p>Stainless steel Pipes , Inconel Pipes , Nickle Pipes , Monel Pipes , Stainless steel Tubes,Inconel Tubes, Nickle Tubes , Monel Tubes.</p><p>RANGE OF PIPES :1/8 NB To 600 NB in Sch. 5,10, 20, 30, 40, 60, 80, 100,120,140.160. XXS.</p><p>RANGE OF TUBES : 1/4\" OD to 12\" OD in Guage: 25 Swg. to 10 Swg.</p><p>Stainless Steel : ASTM / ASME SA 312 GR. TP 202, 304, 304L, 304H, 309S, 309H, 310S, 310H,316, 316TI, 316H, 316LN, 317, 317L, 321, 321H, 347, 347H, 904L.</p><p>Nickel Alloy Steel :</p><p>ASTM / ASME SB 163 UNS 2200 ( NICKEL 200 ) , ASTM / ASME SB 163 UNS 2201(NICKEL 201 ) , ASTM / ASME SB 163 / 165 UNS 4400 (MONEL 400 ) ASTM / ASME SB 464 UNS 8020 ( ALLOY 20 / 20 CB 3 ) , ASTM / ASME SB 704/705 UNS 8825 INCONEL (825)</p><p>ASTM / ASME SB 167 / 517 UNS 6600 (INCONEL 600 ) , ASTM / ASME SB 167 UNS 6601 ( INCONEL 601 ) , ASTM / ASME SB 704 /705 UNS 6625 (INCONEL 625) , ASTM / ASME SB 619/622/626 UNS 10276 ( HASTELLOY C 276 )</p><p>Inconel Pipes : INCONEL SEAMLESS PIPES TUBES , INCONEL ERW PIPES TUBES, INCONEL WELDED PIPES TUBES , INCONEL FABRICATED PIPES TUBES</p><p>Inconel Tubes :</p><p>Range : 6.35 mm OD upto 254 mm OD in 0.6 TO 20 mm thickness.</p><p>Form : Round, Square, Rectangle, Hydraulic, Coil, \'U\' Snap, Hydraulic Tube &amp; Horn Tube. etc</p><p>Length : Standard length &amp; Cut length</p><p>Value Added Services : Draw Polish (Electro &amp; Comm.), Heat Treatment, Bending,</p><p>Galvanizing, Sand Blasting, Machining etc.</p><p>Test Certificate : MTC, IBR TC, Lab TC from Govt. App Lab with Third Party Inspection.</p><p>Specialize : IBR PIPES &amp; TUBES, Fabricated Pipes (with Radiography) &amp; Odd size, Capillary</p><p>Tube, Cupro Nickel Tube, Dioxide Copper Tube ETC.</p>', 'uploads/product/img_6ac5e4d74a5dc7_95372078.jpg', 'uploads/product-pdf/img_6ac63e89f09a72_20325797.pdf', 1, '2026-10-07 00:51:11', '2026-10-07 07:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `slug`, `title`, `text`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pipes-tubes', 'Pipes & Tubes', 'Pipes & Tubes Description', 'uploads/product-category/img_6ac4b60ca2f517_64587803.jpg', 1, '2026-10-06 03:19:16', '2026-10-06 03:19:16'),
(2, 'industrial-fittings', 'Industrial Fittings', NULL, 'uploads/product-category/img_6ac4b65160dbf5_71577163.jpg', 1, '2026-10-06 03:20:25', '2026-10-06 03:20:25'),
(3, 'industrial-flanges', 'Industrial Flanges', NULL, 'uploads/product-category/img_6ac4b69cba2df6_37222184.jpg', 1, '2026-10-06 03:21:40', '2026-10-06 03:21:40'),
(4, 'industrial-valve', 'Industrial Valve', NULL, 'uploads/product-category/img_6ac4b6e7bafde7_04002841.jpg', 1, '2026-10-06 03:22:55', '2026-10-06 03:22:55'),
(5, 'fabricated-flanged-fittings', 'Fabricated & Flanged Fittings', NULL, 'uploads/product-category/img_6ac4b70b382a15_51719136.jpg', 1, '2026-10-06 03:23:31', '2026-10-06 03:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_contents`
--

CREATE TABLE `product_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_qualities`
--

CREATE TABLE `product_qualities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_qualities`
--

INSERT INTO `product_qualities` (`id`, `slug`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'export-quality-ss-ms-cs-gi-pipes-fittings-mfg-stockiest', 'Export quality SS, MS, CS, GI Pipes & Fittings MFG, Stockiest', '<p>We specialize in manufacturing, stocking, and supplying premium-quality Stainless Steel (SS), Mild Steel (MS), Carbon Steel (CS), and Galvanized Iron (GI) pipes &amp; fittings in Gujarat, India . Our products are engineered to meet international standards, ensuring exceptional performance, durability, and reliability across diverse industrial applications. With a strong commitment to quality and timely delivery, we cater to the needs of clients worldwide, providing solutions that withstand demanding conditions and deliver long-term value.</p><p>Our policy and associated quality objectives are reviewed and communicated to all employees on a regular basis.</p><p>At Jindal Steel &amp; pipe Fittings our employees adhere to and contribute to the efficiency of our quality system in every aspect of our business. Our commitment guarantees to provide our clients with uncompromising quality and service. This is achieved through a team approach where all the members are aware of the company objectives and work within their own discipline to make an effective contribution.</p><p>To verify that the supply made to our clients exact specifications, our quality control team combines technical expertise, knowledge of industrial standards and the latest inspection tools and machines to meet all requirements. Particular attention is paid to high quality, tolerance and traceability</p><p>Our quality assurance program maintains the highest level of quality and actively contributes towards establishing and achieving the corporate objectives. Quality people, quality engineering and quality products.</p><p>These are the key to Jindal Steel &amp; pipe Fittings continued growth.</p><p>Our commitment guarantees to provide the customer with uncompromising quality, responsive service, competitive pricing and on time delivery. This is achieved through a team approach where all the members are aware of the company objectives and work within their own disciple to make an effective contribution.</p><p>The quality assurance system is guided by principles that support our unique working culture which incorporates respect, self management, open communication and creativity.</p><h4><strong>These principles are:</strong></h4><ul><li>Our key directive is complete customer satisfaction.</li><li>We provide our customers with product and services that confirm to all requirements.</li><li>We develop quality objectives at appropriate level to ensur those requirements are effectively addressed in our business.</li><li>We are fully committed to continuous improvement as a strategic approach to achieve these quality objectives.</li><li>We strive to be the best in our industry.</li><li>We care about our customers, our suppliers and partners.</li><li>We do our absolute best to honor our commitments.</li><li>We strive to always act with integrity and fairness</li></ul><h4><strong>Quality Industrial Working</strong></h4><p>We have more than twenty years of experience. During that time, we’ve become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always.</p>', 'uploads/product-quality/img_6ac62663c1ca87_90078126.png', '2026-10-07 05:30:51', '2026-10-07 05:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_table_contents`
--

CREATE TABLE `product_table_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_table_contents`
--

INSERT INTO `product_table_contents` (`id`, `product_id`, `slug`, `title`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'mild-steel-pipes-ms-pipe-and-tubes-dimensions-weight-chart-nominal-bore-outside-diameter-light-a-class-thickness-weight-medium-b-class', 'Mild Steel Pipes, MS Pipe and Tubes Dimensions Weight Chart Nominal Bore Outside Diameter Light (A-Class) Thickness Weight Medium (B-Class)', '<figure class=\"table\"><table><tbody><tr><td colspan=\"2\"><strong>Nominal Bore</strong></td><td colspan=\"2\"><strong>Outside Diameter</strong></td><td colspan=\"2\"><strong>Light (A-Class) Thickness Weight</strong></td><td colspan=\"2\"><strong>Medium (B-Class) Thickness Weight</strong></td><td colspan=\"2\"><strong>Heavy (C-Class) Thickness Weight</strong></td></tr><tr><td><strong>Inch</strong></td><td><strong>mm</strong></td><td><strong>Inch</strong></td><td><strong>mm</strong></td><td><strong>mm</strong></td><td><strong>kg/mtr</strong></td><td><strong>mm</strong></td><td><strong>kg/mtr</strong></td><td><strong>mm</strong></td><td><strong>kg/mtr</strong></td></tr><tr><td><strong>1/8″</strong></td><td><strong>3 mm</strong></td><td>0.406</td><td>10.32</td><td>1.80</td><td>0.361</td><td>2.00</td><td>&nbsp;</td><td>2.65</td><td>0.493</td></tr><tr><td><strong>1/4″</strong></td><td><strong>6 mm</strong></td><td>0.532</td><td>13.49</td><td>1.80</td><td>0.517</td><td>2.35</td><td>0.407</td><td>2.90</td><td>0.769</td></tr><tr><td><strong>3/8″</strong></td><td><strong>10 mm</strong></td><td>0.872</td><td>17.10</td><td>1.80</td><td>0.674</td><td>2.35</td><td>0.852</td><td>2.90</td><td>1.02</td></tr><tr><td><strong>1/2″</strong></td><td><strong>15 mm</strong></td><td>0.844</td><td>21.43</td><td>2.00</td><td>0.952</td><td>2.65</td><td>1.122</td><td>3.25</td><td>1.45</td></tr><tr><td><strong>3/4″</strong></td><td><strong>20 mm</strong></td><td>1.094</td><td>27.20</td><td>2.35</td><td>1.410</td><td>2.65</td><td>1.580</td><td>3.25</td><td>1.90</td></tr><tr><td><strong>1″</strong></td><td><strong>25 mm</strong></td><td>1.312</td><td>33.80</td><td>2.65</td><td>2.010</td><td>3.25</td><td>2.440</td><td>4.05</td><td>2.97</td></tr><tr><td><strong>1.1/4″</strong></td><td><strong>32 mm</strong></td><td>1.656</td><td>42.90</td><td>2.65</td><td>2.580</td><td>3.25</td><td>3.140</td><td>4.05</td><td>3.84</td></tr><tr><td><strong>1.1/2″</strong></td><td><strong>40 mm</strong></td><td>1.906</td><td>48.40</td><td>2.90</td><td>3.250</td><td>3.25</td><td>3.610</td><td>4.05</td><td>4.43</td></tr><tr><td><strong>2″</strong></td><td><strong>50 mm</strong></td><td>2.375</td><td>60.30</td><td>2.90</td><td>4.110</td><td>3.65</td><td>5.100</td><td>4.47</td><td>6.17</td></tr><tr><td><strong>2.1/2″</strong></td><td><strong>65 mm</strong></td><td>3.004</td><td>76.20</td><td>3.25</td><td>5.840</td><td>3.65</td><td>6.610</td><td>4.47</td><td>7.90</td></tr><tr><td><strong>3″</strong></td><td><strong>80 mm</strong></td><td>3.500</td><td>88.90</td><td>3.25</td><td>6.810</td><td>4.05</td><td>8.470</td><td>4.85</td><td>10.1</td></tr><tr><td><strong>4″</strong></td><td><strong>100 mm</strong></td><td>4.500</td><td>114.30</td><td>3.65</td><td>9.890</td><td>4.50</td><td>12.10</td><td>5.40</td><td>14.4</td></tr><tr><td><strong>5″</strong></td><td><strong>125 mm</strong></td><td>5.500</td><td>139.70</td><td>–</td><td>–</td><td>4.85</td><td>16.20</td><td>5.40</td><td>17.8</td></tr><tr><td><strong>6″</strong></td><td><strong>150 mm</strong></td><td>6.500</td><td>165.10</td><td>–</td><td>–</td><td>4.85</td><td>19.20</td><td>5.40</td><td>21.2</td></tr></tbody></table></figure>', 1, '2026-10-07 02:06:35', '2026-10-07 02:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `qualities`
--

CREATE TABLE `qualities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `slug`, `title`, `text`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ramesh-patel', 'Ramesh Patel', 'Best quality SS pipe and fittings company', 'uploads/testimonial/img_6ac5d93e4874b4_02165118.jpg', 1, '2026-10-07 00:01:42', '2026-10-07 00:01:42'),
(2, 'vardhabhai-chaudhary', 'Vardhabhai Chaudhary', 'SS/MS PIPE FITTING MANUFACTURER IN ANKLESHWAR GUJARAT Jindal Steel and pipe fittings', 'uploads/testimonial/img_6ac5d95e6c9713_70125900.jpg', 1, '2026-10-07 00:02:14', '2026-10-07 00:02:14'),
(3, 'hindalco-metal', 'HINDALCO METAL', 'Good Quality and service', 'uploads/testimonial/img_6ac5d9c0a4b543_95736892.jpg', 1, '2026-10-07 00:03:52', '2026-10-07 00:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_uses`
--

CREATE TABLE `why_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_uses`
--

INSERT INTO `why_uses` (`id`, `slug`, `title`, `subtitle`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'why-you-choose-us', 'Why You Choose Us', 'Why You Choose Us', 'Being a leading provider of Steel & Pipe Fittings including optimum quality pipes and tubes, industrial fittings, industrial valves, fabricated and flanged fittings, industrial flanges, angle, channel, beam, sheet, plate, coil we own the most advanced facilities to check the quality of our products before purchasing. We deliver the best quality products to industry. We strictly adhere to the existing industrial norms for stock and deliver our comprehensive product inventory.', 'uploads/why-us/img_6ac5d23c3e21e7_60260630.jpeg', '2026-10-06 23:31:48', '2026-10-06 23:31:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applications_slug_unique` (`slug`);

--
-- Indexes for table `approaches`
--
ALTER TABLE `approaches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `approaches_slug_unique` (`slug`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_status_index` (`status`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_slug_unique` (`slug`),
  ADD KEY `clients_status_index` (`status`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_slug_unique` (`slug`),
  ADD KEY `galleries_product_id_foreign` (`product_id`),
  ADD KEY `galleries_status_index` (`status`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_abouts_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_abouts`
--
ALTER TABLE `page_abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_abouts_slug_unique` (`slug`);

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
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_status_index` (`status`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`),
  ADD KEY `product_categories_status_index` (`status`);

--
-- Indexes for table `product_contents`
--
ALTER TABLE `product_contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_contents_slug_unique` (`slug`),
  ADD KEY `product_contents_product_id_foreign` (`product_id`),
  ADD KEY `product_contents_status_index` (`status`);

--
-- Indexes for table `product_qualities`
--
ALTER TABLE `product_qualities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_qualities_slug_unique` (`slug`);

--
-- Indexes for table `product_table_contents`
--
ALTER TABLE `product_table_contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_table_contents_slug_unique` (`slug`),
  ADD KEY `product_table_contents_product_id_foreign` (`product_id`),
  ADD KEY `product_table_contents_status_index` (`status`);

--
-- Indexes for table `qualities`
--
ALTER TABLE `qualities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `qualities_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_slug_unique` (`slug`),
  ADD KEY `testimonials_status_index` (`status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_uses`
--
ALTER TABLE `why_uses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `why_uses_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approaches`
--
ALTER TABLE `approaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `page_abouts`
--
ALTER TABLE `page_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_contents`
--
ALTER TABLE `product_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_qualities`
--
ALTER TABLE `product_qualities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_table_contents`
--
ALTER TABLE `product_table_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qualities`
--
ALTER TABLE `qualities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_uses`
--
ALTER TABLE `why_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_contents`
--
ALTER TABLE `product_contents`
  ADD CONSTRAINT `product_contents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_table_contents`
--
ALTER TABLE `product_table_contents`
  ADD CONSTRAINT `product_table_contents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
