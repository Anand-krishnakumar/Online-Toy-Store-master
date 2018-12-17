-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 06:39 PM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `cname`) VALUES
(1, 'action'),
(2, 'animals'),
(3, 'cars'),
(4, 'dolls'),
(5, 'puzzles'),
(6, 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE `gadgets` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `itemdesc` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(5) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`itemid`, `itemname`, `categoryId`, `itemdesc`, `price`, `image`, `quantity`, `flag`) VALUES
(1, '12 pack action figures', 1, '12 avengers heroes ', 38, 'images\\Actionfigures\\action_figure_1.jpg', 10, 1),
(2, 'darth vader', 1, 'Darth Vader, one of the most iconic villains in popular culture, is expertly crafted in black ', 50, 'images\\Actionfigures\\action_figure_2.jpg', 9, 1),
(3, 'deadpool', 1, 'Deadpool is one of Marvel\'s breakout comic characters', 40, 'images\\Actionfigures\\action_figure_3.jpg', 7, 1),
(4, 'black panther', 1, 'rightfull king of wakanda', 400, 'images\\Actionfigures\\action_figure_4.jpg', 10, 1),
(5, 'venom and carnage', 1, 'eddy brock and Cletus Kasady', 60, 'images\\Actionfigures\\action_figure_5.jpg', 10, 1),
(6, 'wonder woman', 1, 'diana princess of amazons', 260, 'images\\Actionfigures\\action_figure_6.jpg', 8, 1),
(7, 'animals1', 2, 'pink evee fur toy', 260, 'images\\Animals\\Animal1.jpg', 7, 1),
(8, 'animals2', 2, '12 pack animal kingdom toy set', 450, 'images\\Animals\\Animal2.jpg', 10, 1),
(9, 'animals3', 2, '8 inch jungle feature toy set', 100, 'images\\Animals\\Animal3.jpg', 7, 1),
(10, 'animals4', 2, '4 pc puppy set', 20, 'images\\Animals\\Animal4.jpg', 8, 1),
(11, 'animals5', 2, 'animal chart', 150, 'images\\Animals\\Animal5.jpg', 10, 1),
(12, 'animals6', 2, 'black and white tiger cub fur toy', 150, 'images\\Animals\\Animal6.jpg', 10, 1),
(13, 'cars1', 3, '12 pc car stickers', 150, 'images\\Cars\\Car1.jpg', 10, 1),
(14, 'cars2', 3, 'green camo remote controlled race car', 150, 'images\\Cars\\Car2.jpg', 10, 1),
(15, 'cars3', 3, 'white batmobile with remote controller', 150, 'images\\Cars\\Car3.jpg', 10, 1),
(16, 'cars4', 3, 'huge carrier truck with load storage', 50, 'images\\Cars\\Car4.jpg', 7, 1),
(17, 'cars5', 3, 'spider mobile', 150, 'images\\Cars\\Car5.jpg', 10, 1),
(18, 'cars6', 3, 'NYC style taxi cab', 150, 'images\\Cars\\Car6.jpg', 10, 1),
(19, 'dolls1', 4, 'red barbie doll', 150, 'images\\Dolls\\Doll1.jpg', 7, 1),
(20, 'dolls2', 4, 'pink barbie doll', 150, 'images\\Dolls\\Doll2.jpg', 10, 1),
(21, 'dolls3', 4, 'barbie limited', 150, 'images\\Dolls\\Doll3.jpg', 10, 1),
(22, 'dolls4', 4, 'white barbie', 68, 'images\\Dolls\\Doll4.jpg', 10, 1),
(23, 'dolls5', 4, 'yoga barbie toy', 68, 'images\\Dolls\\Doll5.jpg', 10, 1),
(24, 'dolls6', 4, 'barbie with car', 68, 'images\\Dolls\\Doll6.jpg', 10, 1),
(25, 'puzzle1', 5, 'bus puzzle build your bus', 150, 'images\\Puzzle\\puzzle_1.jpg', 10, 1),
(26, 'puzzle2', 5, 'wooden cube puzzle', 150, 'images\\Puzzle\\puzzle_2.jpg', 10, 1),
(27, 'puzzle3', 5, 'sphere puzzle lvl hard', 150, 'images\\Puzzle\\puzzle_3.jpg', 10, 1),
(28, 'puzzle4', 5, 'interlocked puzzle', 68, 'images\\Puzzle\\puzzle_4.jpg', 10, 1),
(29, 'puzzle5', 5, 'scrabble', 68, 'images\\Puzzle\\puzzle_5.jpg', 0, 1),
(30, 'puzzle6', 5, 'USA map puzzle', 68, 'images\\Puzzle\\puzzle_6.jpg', 10, 1),
(31, 'sports1', 6, 'baseball bat with stand', 150, 'images\\Sports\\Sports1.jpg', 10, 1),
(32, 'sports2', 6, 'blue football size small', 150, 'images\\Sports\\Sports2.jpg', 10, 1),
(33, 'sports3', 6, 'retro football size regular', 150, 'images\\Sports\\Sports3.jpg', 10, 1),
(34, 'sports4', 6, 'green softball', 68, 'images\\Sports\\Sports4.jpg', 10, 1),
(35, 'sports5', 6, 'squishy water ball for kids', 68, 'images\\Sports\\Sports5.jpg', 10, 1),
(36, 'sports6', 6, 'full bowling set plastic', 68, 'images\\Sports\\Sports6.jpg', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `itemid` int(11) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(13, 'sundar@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', '7815 McCallum Blvd, Apt# 2202', 'Dallas', 'TX', 4699294582),
(14, 'cust@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Customer', 'asdsf', 'dfsdfgfd', 'CA', 4564564567),
(17, 'wpl@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Customer', 'UTD', 'Dallas', 'TX', 4567432345),
(18, 'tim27@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Customer', '800 W Campbell Rd ', 'Dallas', 'TX', 9728832111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
