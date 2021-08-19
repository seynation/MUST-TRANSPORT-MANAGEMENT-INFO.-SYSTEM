-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 08:02 AM
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
-- Database: `musttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `departs`
--

CREATE TABLE `departs` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `shortform` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departs`
--

INSERT INTO `departs` (`id`, `name`, `shortform`) VALUES
(1, 'ACCOUNTING', 'ACC'),
(2, 'BURSAR', 'BUS');

-- --------------------------------------------------------

--
-- Table structure for table `requesttransport`
--

CREATE TABLE `requesttransport` (
  `id` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `passengercount` int(11) NOT NULL,
  `passengernames` varchar(200) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `departid` int(11) NOT NULL,
  `reply` varchar(30) NOT NULL DEFAULT 'null',
  `vid` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requesttransport`
--

INSERT INTO `requesttransport` (`id`, `FullName`, `department`, `destination`, `date`, `nature`, `passengercount`, `passengernames`, `userid`, `departid`, `reply`, `vid`) VALUES
(1, 'David Sekile', 'ACCOUNTING', 'DRC Branch', '2021-06-30', 'Maintenance', 3, 'James John', NULL, 0, '', '1'),
(2, 'David Sekile', 'ACCOUNTING', 'DRC Branch', '2021-06-30', 'Maintenance', 3, 'Juma Charles', NULL, 0, '', '2'),
(3, 'David Sekile', '1', 'DRC Branch', '2021-06-30', 'Maintenance', 3, 'James John', NULL, 0, '', '3'),
(4, 'David Sekile', '1', 'DRC Branch', '2021-07-08', 'Maintenance', 3, 'Juma Charles', NULL, 0, '', '4'),
(5, 'David Sekile', 'ACCOUNTING', 'DRC Branch', '2021-07-06', 'Maintenance', 3, 'James John', NULL, 0, '', '5'),
(6, 'David Sekile', 'ACCOUNTING', 'DRC Branch', '2021-06-30', 'Maintenance', 3, 'James John', 14, 0, '', '6'),
(7, 'Brian John', 'ACCOUNTING', 'DRC Branch', '2021-07-13', 'Maintenance', 1, '', 17, 1, 'AUTHORIZED', '7'),
(8, 'David Sekile', 'ACCOUNTING', 'DRC Branch', '2021-07-06', 'Maintenance', 1, '', 14, 1, '', '8'),
(9, '', '', '', '', '', 0, '', 15, 0, '', '9'),
(10, 'David Sekile', 'ACCOUNTING', 'BBC AFRICA', '2021-08-02', 'MAINTENANCE', 4, 'James Simon', 14, 1, 'AUTHORIZED', ''),
(11, 'Joel Risen', 'BURSAR', 'BBC AFRICA', '2021-08-01', 'COLLECTION', 1, '', 19, 2, 'DENIED', '11'),
(12, 'Frank Ikolo', 'BURSAR', 'BBC AFRICA', '2021-08-01', 'MAINTENANCE', 1, '', 20, 2, 'AUTHORIZED', ''),
(13, 'Frank Ikolo', 'BURSAR', 'DRC BRANCH', '2021-08-05', 'COLLECTION', 1, '', 20, 2, 'AUTHORIZED', ''),
(14, 'James Simon', 'ACCOUNTING', 'MUST', '2021-08-16', 'Management', 1, '', 15, 0, 'null', '14'),
(15, 'James Simon', 'BURSAR', 'MUST', '2021-08-25', 'Management', 1, '', 20, 2, 'AUTHORIZED', '6');

-- --------------------------------------------------------

--
-- Table structure for table `transportlog`
--

CREATE TABLE `transportlog` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `dateout` date NOT NULL,
  `timeout` time NOT NULL,
  `timein` time NOT NULL,
  `availability` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportlog`
--

INSERT INTO `transportlog` (`id`, `rid`, `vid`, `dateout`, `timeout`, `timein`, `availability`) VALUES
(1, 12, 4, '2021-08-01', '20:32:00', '23:32:00', 'OUT'),
(2, 15, 6, '2021-08-05', '04:47:00', '22:47:00', 'OUT'),
(3, 15, 6, '2021-08-12', '22:51:00', '01:51:00', 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `othername` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL,
  `departid` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `othername`, `password`, `role`, `departid`, `datecreated`) VALUES
(14, 'sekile', 'David Sekile', '$2a$07$asxx54ahjppf45sd87a5aubSOEvKvTH2wCoJoukAOo41xEL3xpYHa', 'User', 1, '2021-07-28 13:15:39'),
(15, 'james', 'James Simon', '$2a$07$asxx54ahjppf45sd87a5auo9sGumrLZK6WpO56P.wbsO86XLHK7LW', 'Transport Officer', 0, '2021-07-28 13:15:39'),
(16, 'jonathan', 'Jonathan Mugisha', '$2a$07$asxx54ahjppf45sd87a5auCqqMoyWDmLY4yaP0BAqtCFd7SpEUyo2', 'System Adminstrator', 0, '2021-07-28 13:15:39'),
(17, 'brianito', 'Brian John', '$2a$07$asxx54ahjppf45sd87a5auFLrfJE05twRXf5p8KZQDBWmBfJcDcTS', 'Head of Department', 1, '2021-08-12 04:52:58'),
(19, 'joel', 'Joel Risen', '$2a$07$asxx54ahjppf45sd87a5au0LLP0CDAmshiDTn7vZYvh4p7HIQ0GY6', 'Head of Department', 2, '2021-07-30 07:03:58'),
(20, 'frank', 'Frank Ikolo', '$2a$07$asxx54ahjppf45sd87a5aued6K3sAsiBwGb3xLp0bQFbHznWqiaES', 'User', 2, '2021-07-30 07:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `seats` int(2) NOT NULL,
  `plate` varchar(10) NOT NULL,
  `availability` varchar(30) DEFAULT 'AVAILABLE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `make`, `model`, `seats`, `plate`, `availability`) VALUES
(1, 'Toyota', 'Land Cruiser V8', 4, 'T 950 DEF', 'BROKEN DOWN'),
(4, 'Toyota', 'Land Cruiser V8', 4, 'T 950 DCD', 'AVAILABLE'),
(5, 'Mercedes Benz', 'C Class', 4, 'T 185 DCJ', 'BROKEN DOWN'),
(6, 'Mercedes Benz', 'S Class', 4, 'T 185 DCN', 'AVAILABLE'),
(7, 'Mercedes Benz', 'Tourer', 4, 'T 973 DCI', 'AVAILABLE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departs`
--
ALTER TABLE `departs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requesttransport`
--
ALTER TABLE `requesttransport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportlog`
--
ALTER TABLE `transportlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departs`
--
ALTER TABLE `departs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requesttransport`
--
ALTER TABLE `requesttransport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transportlog`
--
ALTER TABLE `transportlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
