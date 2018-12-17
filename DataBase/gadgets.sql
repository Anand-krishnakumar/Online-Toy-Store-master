-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:23 AM
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
-- Table structure for table `gadgets`
--

CREATE TABLE `gadgets` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `itemdesc` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `quantity` int(5) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`itemid`, `itemname`, `categoryId`, `itemdesc`, `price`, `image`, `Gender`, `quantity`, `flag`) VALUES
(1, '12 pack action figures', 1, '12 avengers heroes ', 38, 'images\\Actionfigures\\action_figure_1.jpg', 'Girl', 2, 1),
(2, 'darth vader', 1, 'Darth Vader, one of the most iconic villains in popular culture, is expertly crafted in black ', 50, 'images\\Actionfigures\\action_figure_2.jpg', 'Girl', 9, 1),
(3, 'deadpool', 1, 'Deadpool is one of Marvel\'s breakout comic characters', 40, 'images\\Actionfigures\\action_figure_3.jpg', 'Girl', 9, 1),
(4, 'black panther', 1, 'rightfull king of wakanda', 400, 'images\\Actionfigures\\action_figure_4.jpg', 'Boy', 10, 1),
(5, 'venom and carnage', 1, 'eddy brock and Cletus Kasady', 60, 'images\\Actionfigures\\action_figure_5.jpg', 'Boy', 10, 1),
(6, 'wonder woman', 1, 'diana princess of amazons', 260, 'images\\Actionfigures\\action_figure_6.jpg', 'Girl', 8, 1),
(7, 'animals1', 2, 'pink evee fur toy', 260, 'images\\Animals\\Animal1.jpg', 'Girl', 9, 1),
(8, 'animals2', 2, '12 pack animal kingdom toy set', 450, 'images\\Animals\\Animal2.jpg', 'Girl', 10, 1),
(9, 'animals3', 2, '8 inch jungle feature toy set', 100, 'images\\Animals\\Animal3.jpg', 'Girl', 10, 1),
(10, 'animals4', 2, '4 pc puppy set', 20, 'images\\Animals\\Animal4.jpg', 'Boy', 10, 1),
(11, 'animals5', 2, 'animal chart', 150, 'images\\Animals\\Animal5.jpg', 'Boy', 10, 1),
(12, 'animals6', 2, 'black and white tiger cub fur toy', 150, 'images\\Animals\\Animal6.jpg', 'Boy', 10, 1),
(13, 'cars1', 3, '12 pc car stickers', 150, 'images\\Cars\\Car1.jpg', 'Boy', 10, 1),
(14, 'cars2', 3, 'green camo remote controlled race car', 150, 'images\\Cars\\Car2.jpg', 'Girl', 10, 1),
(15, 'cars3', 3, 'white batmobile with remote controller', 150, 'images\\Cars\\Car3.jpg', 'Boy', 10, 1),
(16, 'cars4', 3, 'huge carrier truck with load storage', 50, 'images\\Cars\\Car4.jpg', 'Boy', 10, 1),
(17, 'cars5', 3, 'spider mobile', 150, 'images\\Cars\\Car5.jpg', 'Girl', 10, 1),
(18, 'cars6', 3, 'NYC style taxi cab', 150, 'images\\Cars\\Car6.jpg', 'Boy', 10, 1),
(19, 'dolls1', 4, 'red barbie doll', 150, 'images\\Dolls\\Doll1.jpg', 'Boy', 7, 1),
(20, 'dolls2', 4, 'pink barbie doll', 150, 'images\\Dolls\\Doll2.jpg', 'Boy', 10, 1),
(21, 'dolls3', 4, 'barbie limited', 150, 'images\\Dolls\\Doll3.jpg', 'Girl', 10, 1),
(22, 'dolls4', 4, 'white barbie', 68, 'images\\Dolls\\Doll4.jpg', 'Girl', 10, 1),
(23, 'dolls5', 4, 'yoga barbie toy', 68, 'images\\Dolls\\Doll5.jpg', 'Boy', 10, 1),
(24, 'dolls6', 4, 'barbie with car', 68, 'images\\Dolls\\Doll6.jpg', 'Girl', 10, 1),
(25, 'puzzle1', 5, 'bus puzzle build your bus', 150, 'images\\Puzzle\\puzzle_1.jpg', 'Boy', 10, 1),
(26, 'puzzle2', 5, 'wooden cube puzzle', 150, 'images\\Puzzle\\puzzle_2.jpg', 'Boy', 10, 1),
(27, 'puzzle3', 5, 'sphere puzzle lvl hard', 150, 'images\\Puzzle\\puzzle_3.jpg', 'Girl', 10, 1),
(28, 'puzzle4', 5, 'interlocked puzzle', 68, 'images\\Puzzle\\puzzle_4.jpg', 'Girl', 10, 1),
(29, 'puzzle5', 5, 'scrabble', 68, 'images\\Puzzle\\puzzle_5.jpg', 'Boy', 10, 1),
(30, 'puzzle6', 5, 'USA map puzzle', 68, 'images\\Puzzle\\puzzle_6.jpg', 'Girl', 10, 1),
(31, 'sports1', 6, 'baseball bat with stand', 150, 'images\\Sports\\Sports1.jpg', 'Boy', 10, 1),
(32, 'sports2', 6, 'blue football size small', 150, 'images\\Sports\\Sports2.jpg', 'Boy', 10, 1),
(33, 'sports3', 6, 'retro football size regular', 150, 'images\\Sports\\Sports3.jpg', 'Girl', 10, 1),
(34, 'sports4', 6, 'green softball', 68, 'images\\Sports\\Sports4.jpg', 'Girl', 10, 1),
(35, 'sports5', 6, 'squishy water ball for kids', 68, 'images\\Sports\\Sports5.jpg', 'Boy', 10, 1),
(36, 'sports6', 6, 'full bowling set plastic', 68, 'images\\Sports\\Sports6.jpg', 'Girl', 10, 1),
(37, 'Sport7', 6, 'Cricket kit', 24, 'images\\Sports\\Sports7.jpg', '', 15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
