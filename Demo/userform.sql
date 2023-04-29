-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 12:25 PM
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
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `grad_year` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `college`, `grad_year`, `password`, `code`, `status`) VALUES
(1, 'Kirtan J Dhinoja', 'dhinojakirtan@gmail.com','Amity University','2021', '$2y$10$NNxv5v5MPBQ/F1hQFhyB2.Su9Ow964Xu1Ej6bQZEBf5J89vVTlIyS', 855440, 'verified'),
(2, 'Soham Jayakar', 'sohamjayakar@gmail.com','Amity University','2021', '$2y$10$l.4MPf87mZ96ccgIyL.cHOmXgTTpiSAWVE7hT/XYmd/LWnZBXfU.2', 589366, 'notverified'),
(3, 'Amey nitin Patil', 'patilamey2905@gmail.com','Amity University','2021', '$2y$10$W2pT58KWpBiz/ft.Wm7EvevUysih45B2B9PyF4k0nKMcFlxNkvUpa', 150462, 'notverified')
(4, 'Aniket Tripathi', 'anitrip231@gmail.com','IIT Bombay','2020' '$2y$10$W2pT58KWpBiz/ft.Wm7EvevUysih45B2B9PyF4k0nKMcFlxNkvUpa', 150462, 'notverified')
(5, 'Suyash Dubey', 'dsuyash38@gmail.com','MIT','2022' '$2y$10$W2pT58KwpBiz/ft.Wm7EvevUysih45B2B9PyF4k0nKMcFlxNkvUpa', 150462, 'notverified')
(6, 'Aman Yadav', 'hey5@gmail.com','IIT Bombay','2019', '$2y$10$W2pT58KWpBiz/ft.Wm7EvevUysih45B2B9PyF4k0nKMcFlxnkvUpa', 150462, 'notverified')
(7, 'Jayaraj Chauhan', 'jay7@gmail.com','Saraswati college','2021', '$2Y$10$W2pT58KWpBiz/ft.Wm7EvevUysih45B2B9PyF4k0nKMcFlxNkvUpa', 150462, 'notverified')
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
