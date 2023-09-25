-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `firstname`, `middlename`, `lastname`, `email`, `image`, `username`, `password`, `photo`, `role`) VALUES
(1, 'cj', 'cj', 'cj', 'johncarlaguibay01@gmail.com', '', 'cj', '$2y$10$N.UG4wzTD.u2xzYezlU9vumvvBDjtoBAEzpr62mfrv.Fk4.uA/9M6', '', 'admin'),
(2, 'RODLYN', 'MAYGON', 'ABRIL', 'rodlynabril2@gmail.com', '', 'johncarlaguibay', '$2y$10$nuTrWXCc5C3Amr.7.aSZmO3uG7QIetuEngNB4RW1/AKB15EtcqQ8e', 'C:\\fakepath\\383755911_370015302026596_5401638373374818115_n.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_respondent`
--

CREATE TABLE `tbl_respondent` (
  `id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `otp` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `firstname`, `middlename`, `lastname`, `email`, `username`, `password`, `role`, `otp`, `code`) VALUES
(5, 'RODLYN', 'MAYGON', 'ABRIL', 'rodlynabril2@gmail.com', 'johncarlaguibay', '$2y$10$N.UG4wzTD.u2xzYezlU9vumvvBDjtoBAEzpr62mfrv.Fk4.uA/9M6', 'user', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_respondent`
--
ALTER TABLE `tbl_respondent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_respondent`
--
ALTER TABLE `tbl_respondent`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
