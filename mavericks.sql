-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:14 PM
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
-- Database: `mavericks`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `topic`, `message`, `created_at`) VALUES
(1, 'Nitharshika', 'Nithar@gmail.com', 'Delay', 'jiwejfiwefqra', '2024-05-09 15:44:19'),
(2, 'piriyankan', 'piriyankanr45@gmail.com', 'help', 'dfewfwfwref', '2024-05-09 17:59:50'),
(3, 'pasindhu', 'pasindhu@gmail.com', 'wefewfwdf', 'dwffr', '2024-05-09 18:02:48'),
(4, 'sajjath', 'easytech6727@gmail.com', 'rrggreg', 'fgrege', '2024-05-09 18:05:06'),
(5, 'Piraveena Pirabakaran', 'showmi@gmail.com', 'dghtr', 'rgreg', '2024-05-09 18:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_registration`
--

CREATE TABLE `delivery_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `order_yes` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_registration`
--

INSERT INTO `delivery_registration` (`id`, `name`, `address`, `mail`, `telephone`, `city`, `postal`, `order_yes`, `created_at`) VALUES
(1, 'nithu', 'nelliyadi karavetti', 'nithu@gmail.com', '0773529674', 'nelliyadi', '40000', 1, '2024-05-09 15:44:06'),
(2, 'piriyankan', 'kks road jaffna', 'piriyankan@gmail.com', '0773529678', 'jaffna', '40000', 1, '2024-05-09 17:59:27'),
(3, 'pasindhu', 'Trinco', 'pasindhu@gmail.com', '0770301985', 'Trincomalee', '40000', 1, '2024-05-09 18:02:14'),
(4, 'sajjath', 'nelliyadi karavetti', 'sajjath@gmail.com', '0773529674', 'nelliyadi', '40000', 0, '2024-05-09 18:04:52'),
(5, 'Piraveena Pirabakaran', 'Thunnalai South Karaveddy', 'piranavi@gmail.com', '0776220082', 'eravur', '30300', 1, '2024-05-09 18:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `itemdetail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `itemname`, `type`, `quantity`, `itemdetail`, `image`, `created_at`) VALUES
(1, 'zin', 'category3', 3, 'sleeping tablet', 'Acer_Wallpaper_03_3840x2400.jpg', '2024-05-09 18:11:56'),
(2, 'efrf', 'category1', 4, 'wefrwef', 'Acer_Wallpaper_04_3840x2400.jpg', '2024-05-09 18:12:24'),
(3, 'efrfr', 'category3', 4, 'ergregwq', 'Acer_Wallpaper_05_3840x2400.jpg', '2024-05-09 18:12:42'),
(4, 'defe', 'category1', 4, 'ewfwrf', 'Acer_Wallpaper_01_3840x2400.jpg', '2024-05-09 18:13:02'),
(5, 'yuu', 'category3', 8, 'regreg', 'Acer_Wallpaper_03_3840x2400.jpg', '2024-05-09 18:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `expiry_date` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `card_type`, `card_number`, `expiry_date`, `cvv`, `created_at`) VALUES
(1, 'mastercard', '5391572008888319', '12/2024', '066', '2024-05-09 15:52:08'),
(2, 'visa', '4424130013461459', '07/2024', '111', '2024-05-09 18:08:32'),
(3, 'visa', '4691760102132425', '07/2024', '111', '2024-05-09 18:09:05'),
(4, 'visa', '4691760102123432', '07/2024', '111', '2024-05-09 18:09:26'),
(5, 'visa', '5391572008888517', '08/2028', '111', '2024-05-09 18:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `address`, `age`, `email`, `password`, `created_at`) VALUES
(1, 'sajjath', 'eravur,batticaloa', 21, 'sajjath@gmail.com', '123456', '2024-05-09 15:42:04'),
(2, 'Piriyankan', 'kks road jaffna ', 23, 'piriyankanr45@gmail.com', '123456', '2024-05-09 17:58:05'),
(3, 'pasindhu', 'vavuniya', 22, 'pasindhu@gmail.com', '123456', '2024-05-09 18:01:19'),
(4, 'nithu', 'nelliyadi karavetti', 22, 'nithu@gmail.com', '654321', '2024-05-09 18:04:13'),
(5, 'piranavi', 'nelliyadi karavetti', 22, 'piranavi@gmail.com', '456123', '2024-05-09 18:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_registration`
--
ALTER TABLE `delivery_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery_registration`
--
ALTER TABLE `delivery_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
