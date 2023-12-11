-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 05:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `xml_feed`
--

CREATE TABLE `xml_feed` (
  `id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `categoryName` varchar(250) NOT NULL,
  `sku` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `shortdesc` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `link` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `brand` varchar(150) NOT NULL,
  `rating` int(11) NOT NULL,
  `caffeineType` varchar(150) NOT NULL,
  `count` int(11) NOT NULL,
  `flavored` varchar(50) NOT NULL,
  `seasonal` varchar(50) NOT NULL,
  `instock` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `isKCup` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xml_feed`
--
ALTER TABLE `xml_feed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xml_feed`
--
ALTER TABLE `xml_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
