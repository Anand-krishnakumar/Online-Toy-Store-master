-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgetstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'Customer',
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `address`, `city`, `state`, `phone`) VALUES
(1, 'swetha88@gmail.com', 'HelloKitty', 'admin', 'McCallum Blvd', 'Dallas', 'Texas', 2142268097),
(2, 'preethi@yahoo.com', 'preethi', 'Customer', 'Richardson', 'Dallas', 'Texas', 4563217589),
(3, 'admin@admin.com', 'adminuser', 'admin', 'McCallum Blvd', 'Dallas', 'Texas', 5641235785),
(11, 'priya@gmail.com', 'priya12', 'Customer', 'Coit Road', 'Dallas', 'Texas', 5687412545),
(13, 'sundar@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', '7815 McCallum Blvd, Apt# 2202', 'Dallas', 'TX', 4699294582),
(14, 'cust@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Customer', 'asdsf', 'dfsdfgfd', 'CA', 4564564567),
(15, 'abc@gmail.com', '0ff1a3283768d367a9ea41ae483b2495', 'Customer', 'kjsdhkjsa', 'jkadhs', 'akjdsfh', 2342342343),
(16, 'abdsd@gmail.com', 'e80b5017098950fc58aad83c8c14978e', 'Customer', 'kajfkjak', 'jaskjd', 'ksjkd', 2342342343),
(17, 'wpl@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Customer', 'UTD', 'Dallas', 'TX', 4567432345),
(18, 'tim27@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Customer', '800 W Campbell Rd ', 'Dallas', 'TX', 9728832111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
