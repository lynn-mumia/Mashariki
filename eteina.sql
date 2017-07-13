-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 05:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eteina`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `crop` varchar(100) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `variety` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phonenumber`, `message`, `crop`, `sdate`, `quantity`, `variety`) VALUES
('jacques', 'jacques.kokouvi@gmail.com', '+2335758965871', 'gjkhgfklgkfdljgjdfg', 'okra', '17/7/2017', '5kg', 'okra'),
('mohamed', 'mohamed.hijazi@ashesi.edu.gh', '+233578289258', 'djkgghjf', 'kiwi', '12/7/2017', '10kg', 'kiwi'),
('MERCY', 'mercyasante@gmail.com', '+233578298258', 'jfdkhhgkjlkgfkf', 'beetroot', '17/8/2017', '25kg', 'beetroot'),
('lynn', 'lynnmumia@gmail.com', '0706471685', 'ukjguufgku', 'capsicum', '15/04/2017', '15kg', 'capsicum'),
('jane', 'janemumia@gmail.com', '0712347854', 'jkghfhgjkfdg', 'honey', '3/7/2017', '10kg', 'honey'),
('lynn', 'lynn@gmail.com', '0714810369', 'lkgfgkjlfgjklfg', 'apple', '2007-12-05', '10kg', 'apple'),
('jead', 'jead@gmail.com', '0736918599', 'jhgjkgjhfg', 'banana', '2017-06-28', '10kg', 'banana'),
('linda', 'linda.bhebhe@ashesi.edu.gh', '0785697241', 'fjkgkjg', 'apple', '5kg', '5kg', 'apple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`phonenumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
