-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 10:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1400173`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `AFM` int(9) NOT NULL,
  `AMKA` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `group_type` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `insured_children` int(11) NOT NULL,
  `last_insurance` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `surname`, `password`, `email`, `gender`, `birth`, `AFM`, `AMKA`, `phone`, `city`, `region`, `address`, `group_type`, `insured_children`, `last_insurance`) VALUES
('g_rouv', 'giorgos', 'karalis', '1234', 'giorgosrouv@hotmail.com', 'Male', '1996-10-07', 748572957, 2147483647, 2105684525, 'Αθήνα', 'Χολαργός', 'Πλωμαρίου 56', 'Ασφαλισμένος', 0, ''),
('tea', 'Θοδώρα', 'Στεφανίδου', 'qwerty', 'tstaf@gmail.com', 'Female', '1980-06-03', 0, 0, 2147483647, '', '', '', 'Συνταξιούχος', 0, ''),
('Will_S_Jason', 'Will', 'Sutherland', 'mystikoskwdikos', 'will_s@gmail.com', 'Male', '1970-04-25', 859483098, 2147483647, 2105382748, 'Crete', 'Heraklion', 'Kleisovis 21', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
