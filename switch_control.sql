-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2021 at 09:32 PM
-- Server version: 10.3.31-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awdoaxbf_emailSpoofer`
--

-- --------------------------------------------------------

--
-- Table structure for table `switch_control`
--

CREATE TABLE `switch_control` (
  `id` int(11) NOT NULL,
  `switch_1` varchar(20) NOT NULL,
  `switch_2` varchar(20) NOT NULL,
  `switch_3` varchar(20) NOT NULL,
  `switch_4` varchar(20) NOT NULL,
  `device_id` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `switch_control`
--

INSERT INTO `switch_control` (`id`, `switch_1`, `switch_2`, `switch_3`, `switch_4`, `device_id`, `date_time`) VALUES
(3, 'HIGH', 'LOW', 'LOW', 'LOW', 'ranwifi01', '2021-10-23 21:15:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `switch_control`
--
ALTER TABLE `switch_control`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `switch_control`
--
ALTER TABLE `switch_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
