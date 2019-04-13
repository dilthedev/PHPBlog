-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 06:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `author`, `createdAt`) VALUES
(1, 'First Post', 'This is the initial post.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt alias voluptates voluptatem, dolorem laboriosam aut cum animi temporibus provident aperiam ipsam facilis impedit ipsa a esse nihil optio, saepe nobis.', 'dilthedev', '2019-04-13 02:59:28'),
(2, 'Second Post', 'This is the second post!.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt alias voluptates voluptatem, dolorem laboriosam aut cum animi temporibus provident aperiam ipsam facilis impedit ipsa a esse nihil optio, saepe nobis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt alias voluptates voluptatem, dolorem laboriosam aut cum animi temporibus provident aperiam ipsam facilis impedit ipsa a esse nihil optio, saepe nobis.', 'William S.', '2019-04-13 02:59:28'),
(6, 'Fourth Post', 'This is the initial post.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt alias voluptates voluptatem, dolorem laboriosam aut cum animi temporibus provident aperiam ipsam facilis impedit ipsa a esse nihil optio, saepe nobis.', 'Rowling J.K', '2019-04-13 11:01:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
