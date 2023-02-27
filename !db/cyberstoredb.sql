-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 02:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, 1, 5, 1, '450.00', '2023-02-27 10:53:31', '2023-02-27 10:53:31', NULL),
(29, 1, 2, 1, '249.00', '2023-02-27 11:14:40', '2023-02-27 11:14:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Monitors', NULL, NULL, NULL),
(2, 'Graphics Cards', NULL, NULL, NULL),
(3, 'Cpu', NULL, NULL, NULL),
(4, 'Montherboards', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`user_id`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '2023-02-25 10:55:33', '2023-02-25 10:55:33', NULL),
(1, 7, '2023-02-26 04:35:46', '2023-02-26 04:35:46', NULL),
(1, 4, '2023-02-26 04:36:36', '2023-02-26 04:36:36', NULL),
(1, 5, '2023-02-27 04:12:01', '2023-02-27 04:12:01', NULL),
(1, 8, '2023-02-27 04:13:17', '2023-02-27 04:13:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `shipping`, `firstname`, `lastname`, `address`, `telephone`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 7, 'Aris', 'Lamprinidis', 'Agrafwn 6', '4323429239', '1656.00', '2023-02-25 10:26:59', '2023-02-25 10:26:59', NULL),
(22, 1, 0, 'adsadda', 'adasdads', 'ads23ewdsddf', '4323429239', '1245.00', '2023-02-27 10:34:58', '2023-02-27 10:34:58', NULL),
(27, 1, 7, 'adsadda', 'adasdads', 'ads23ewdsddf', '4323429239', '1157.00', '2023-02-27 10:47:17', '2023-02-27 10:47:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 2, 2, '249.00', '3', '2023-02-25 10:26:59', '2023-02-25 10:26:59', NULL),
(8, 2, 3, '451.00', '2', '2023-02-25 10:26:59', '2023-02-25 10:26:59', NULL),
(9, 3, 7, '780.00', '2', '2023-02-25 10:52:46', '2023-02-25 10:52:46', NULL),
(10, 9, 5, '450.00', '1', '2023-02-27 10:11:17', '2023-02-27 10:11:17', NULL),
(11, 14, 5, '450.00', '1', '2023-02-27 10:17:22', '2023-02-27 10:17:22', NULL),
(12, 15, 5, '450.00', '1', '2023-02-27 10:18:34', '2023-02-27 10:18:34', NULL),
(13, 18, 5, '450.00', '1', '2023-02-27 10:19:27', '2023-02-27 10:19:27', NULL),
(14, 18, 10, '270.00', '2', '2023-02-27 10:19:27', '2023-02-27 10:19:27', NULL),
(15, 18, 1, '80.00', '2', '2023-02-27 10:19:27', '2023-02-27 10:19:27', NULL),
(16, 20, 3, '451.00', '1', '2023-02-27 10:27:33', '2023-02-27 10:27:33', NULL),
(17, 20, 5, '450.00', '2', '2023-02-27 10:27:33', '2023-02-27 10:27:33', NULL),
(18, 21, 2, '249.00', '1', '2023-02-27 10:30:40', '2023-02-27 10:30:40', NULL),
(19, 22, 2, '249.00', '5', '2023-02-27 10:34:58', '2023-02-27 10:34:58', NULL),
(20, 23, 2, '249.00', '5', '2023-02-27 10:42:31', '2023-02-27 10:42:31', NULL),
(21, 26, 2, '249.00', '5', '2023-02-27 10:45:31', '2023-02-27 10:45:31', NULL),
(22, 27, 5, '450.00', '1', '2023-02-27 10:47:17', '2023-02-27 10:47:17', NULL),
(23, 27, 10, '270.00', '2', '2023-02-27 10:47:17', '2023-02-27 10:47:17', NULL),
(24, 27, 1, '80.00', '2', '2023-02-27 10:47:17', '2023-02-27 10:47:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `description`, `qty`, `sales`, `image`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Intel CPU Core i5 7640X', 3, 'The 4-core Intel Core i5-7640X X-series processor offers overclocking capability and impressive performance for demanding applications and extreme gaming', 10, 47, '1677256325.jpg', 80, '2023-02-24 14:32:05', '2023-02-27 10:47:17', NULL),
(2, 'AMD CPU Athlon 3000G', 3, 'With an operating frequency of 3.5 GHz and integrated GPU Radeon™ Vega 3 Graphics, it offers excellent performance with low power consumption!', 10, 15, '1677256419.jpg', 249, '2023-02-24 14:33:39', '2023-02-27 10:45:31', NULL),
(3, 'Intel CPU Core i9 12900K', 3, 'With 16 cores, 24 threads and an operating frequency of 5.2GHz. It incorporates 30MB of Intel Smart Cache while its TDP is rated at 125W.', 2, 0, '1677256490.jpg', 451, '2023-02-24 14:34:50', '2023-02-24 14:34:50', NULL),
(4, 'AMD CPU Ryzen 9 5950X', 3, 'AMD Ryzen 5000 Series \"Zen 3\" architecture processor for high performance in games and multi-threaded applications. It is placed on a motherboard with Socket AM4.', 0, 15, '1677256536.jpg', 650, '2023-02-24 14:35:36', '2023-02-24 14:35:36', NULL),
(5, 'Gigabyte VGA GeForce RTX 3060 Eagle OC V2 12 GB', 2, 'High-performance “Ampere” architecture with 3,584 CUDA® Cores, 112 Tensor Cores and 28 RT Cores. It has 12GB of GDDR6 (192-bit) memory. It is factory overclocked and LHR (Lite Hash Rate).', 98, 190, '1677256640.jpg', 450, '2023-02-24 14:37:20', '2023-02-27 10:47:17', NULL),
(7, 'Zotac VGA GeForce RTX 3060 AMP White Edition 12 GB', 2, 'High-performance “Ampere” architecture with 3,584 CUDA® Cores, 112 Tensor Cores and 28 RT Cores. It has 12GB of GDDR6 memory (192-bit memory interface). It is factory overclocked.', 5, 5, '1677256793.jpg', 780, '2023-02-24 14:39:53', '2023-02-24 14:39:53', NULL),
(8, 'Zotac VGA GeForce RTX 3070 AMP Holo 8 GB', 2, 'It has arrived and it is top notch: With Ampere architecture, 5888 CUDA cores, 8GB GDDR6X and Engine Clock 1785Mhz (boost) and 256-bit Interface, gaming and performance go to another level.', 9, 69, '1677256909.jpg', 250, '2023-02-24 14:41:49', '2023-02-24 14:41:49', NULL),
(9, 'Sapphire VGA Radeon RX 6800 Nitro+ 16 GB', 2, 'RDNA 2 graphics card with DirectX 12 Ultimate (DXR) and AMD FidelityFX support. It has 60 Compute Units/Ray Accelerators, 3840 stream processors, 240 texture units and 96 ROPs.', 4, 41, '1677256953.jpg', 452, '2023-02-24 14:42:33', '2023-02-27 09:38:25', NULL),
(10, 'HP Monitor 24.5\" 25f OMEN X', 1, 'Beat the competition with the OMEN 25F HD monitor. 25.5”, 240hz, FHD (1,920 x 1,080), 16:9, adaptive sync with AMD Freesync and G-SYNC, response time 3 ms/1 ms (with overdrive).', 70, 38, '1677257036.jpg', 270, '2023-02-24 14:43:56', '2023-02-27 10:47:17', NULL),
(11, 'Turbo-X Monitor 27\" Erebus NC27C1G Gaming Curved', 1, 'With 1500R curvature, 165Hz refresh rate, AMD FreeSync™ compatibility and Full HD resolution, the Turbo-X Erebus 27” NC27C1G Gaming Monitor changes the rules of the game!', 5, 78, '1677257087.jpg', 280, '2023-02-24 14:44:47', '2023-02-27 08:55:32', NULL),
(12, 'Samsung Monitor 27\" LC27T550F', 1, 'Curved screen with 1000R curvature, TÜV Rheinland certification, AMD FreeSync™ and Game Mode, Flicker Free technology, built-in 5W speakers, flexible connectivity and minimal design.', 8, 70, '1677257154.jpg', 580, '2023-02-24 14:45:54', '2023-02-27 08:55:28', NULL),
(13, 'Xiaomi Monitor 27\" Mi 2K Gaming', 1, 'Ideal QHD 2K IPS screen for an enjoyable gaming experience, thanks to the combination of 2560 × 1440 resolution (QHD 2K), the large color palette (95% DCI-P3), the 165Hz screen refresh and its 27 inches.', 6, 45, '1677257274.jpg', 412, '2023-02-24 14:47:54', '2023-02-27 08:55:22', NULL),
(14, 'Gigabyte Motherboard H410M H', 4, 'With support for 10th Generation Intel® Core™ processors, slots for up to 64GB of DDR4 RAM, Realtek 8118 Gaming LAN and NVMe PCIe M.2 SSD brings gaming to your heart\'s content!', 1, 154, '1677262230.jpg', 80, '2023-02-24 16:10:30', '2023-02-27 08:55:11', NULL),
(15, 'Asus Motherboard ROG Strix B560-F Gaming WiFi', 4, 'Equipped with Socket LGA1200 for 10th and 11th generation Intel® Core processors, PCe3 3.0/4.0 slots, Wi-Fi 6 & GbE 2.5Gbps, USB 3.2 Gen 2 and ROG SupermeFX S1220A audio.', 45, 41, '1677263144.jpg', 199, '2023-02-24 16:25:44', '2023-02-27 08:55:02', NULL),
(16, 'Asrock Motherboard A520M-HVS', 4, 'It is based on the AMD® A520 Chipset and accepts AMD Ryzen™ 5000 and 3000 Series as well as 4000 G-Series processors. It supports DDR4 memory up to 64GB and has M.2 and PCI Express Gen3 x16 slots.', 2, 12, '1677263218.jpg', 75, '2023-02-24 16:26:58', '2023-02-27 08:54:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `telephone`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zeromax', '$2y$10$M4faigUfI2cRAT2e.Wh.Lu.o.5FBu7L3mP71O3tEfIsv02vQZtdHC', NULL, NULL, NULL, 'zeromixer2010@yahoo.com', NULL, 'admin', '2023-02-24 14:28:27', '2023-02-24 14:28:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
