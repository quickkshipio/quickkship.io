-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2024 at 02:03 AM
-- Server version: 5.7.38
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackingquickksh_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `two_factor` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `fullname`, `email`, `password`, `package`, `two_factor`, `status`, `updated_at`, `created_at`) VALUES
(1, 'smith', 'John Doe', 'smith@mailinator.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Standard Plan', NULL, 'active', '2024-05-27 23:24:59', '2024-04-23 22:26:16'),
(3, 'contactus', 'Steven', 'contactus@quickkship.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Standard Plan', NULL, 'active', '2024-05-14 01:35:41', '2024-05-14 01:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `subscription_id` varchar(255) DEFAULT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `payment`, `subscription_id`, `invoice_id`, `created_at`) VALUES
(2, '1', '2032', 'success', 'sub_1PELQREHPV8Mlv3ZrSPg3Ixx', 'in_1PELQREHPV8Mlv3ZRJfzGAhc', '2024-05-09 03:05:35'),
(3, '1', '5832', 'success', 'sub_1PELkyCs4G4QqMriXNudwsyK', 'in_1PELkyCs4G4QqMriFzTVHwo4', '2024-05-09 03:26:48'),
(4, '3', '6145', 'success', 'sub_1PGAHJCs4G4QqMri3SasRQ0l', 'in_1PGAHJCs4G4QqMripE6tIUEv', '2024-05-14 03:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `start_at` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `user_id`, `package`, `start_at`, `created_at`) VALUES
(2, '1', '2024-05-09', '1', '2024-05-09 03:05:35'),
(3, '1', '2024-05-09', '1', '2024-05-09 03:26:48'),
(4, '3', '2024-05-14', '3', '2024-05-14 03:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `ticket_title` varchar(255) DEFAULT NULL,
  `ticket_details` varchar(255) DEFAULT NULL,
  `ticket_priority` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `ticket_title`, `ticket_details`, `ticket_priority`, `created_at`) VALUES
(1, 1, 'This is new ticket', 'This is ticket details. This is ticket details. This is ticket details. This is ticket details. This is ticket details. ', 'Medium', '2024-05-28 02:28:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
