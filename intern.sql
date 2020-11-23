-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 11:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `job_tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `username`, `job_tittle`) VALUES
(1, 'maa', 'mahaj'),
(9, 'gunjan', ''),
(10, 'gunjan', ''),
(11, 'gunjan', ''),
(12, 'gunjan', ''),
(13, 'gunjan', ''),
(14, 'gunjan', ''),
(15, 'gunjan', ''),
(16, 'gunjan', ''),
(17, 'gunjan', ''),
(18, 'gunjan', ''),
(19, 'gunjan', ''),
(20, 'gunjan', ''),
(21, 'gunjan', ''),
(22, 'gunjan', ''),
(23, 'gunjan', ''),
(24, 'gunjan', ''),
(25, 'gunjan', ''),
(26, 'gunjan', ''),
(27, 'gunjan', ''),
(28, 'gunjan', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `job_tittle` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `pos` int(255) NOT NULL,
  `sal` int(255) NOT NULL,
  `dtd` text NOT NULL,
  `abt` varchar(255) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `username`, `job_tittle`, `cat`, `pos`, `sal`, `dtd`, `abt`, `apply`, `time`) VALUES
(3, 'dummy', 'deve', 'jd develop', 6, 3000, '20-10-2018', 'dummy', 'dummyyyyy', '2020-10-21 12:15:46'),
(4, 'mahajan', 'web developer', 'java developer', 33, 33, '2020-10-21', 'dsf', 'fdasd', '2020-10-21 12:23:54'),
(5, 'mahajan', 'ux designer', 'web developer', 88, 30540, '2020-10-21', 'ad', 'ad', '2020-10-21 12:43:18'),
(6, 'mahajan', 'ux designer', 'web developer', 88, 30540, '2020-10-21', 'ad', 'ad', '2020-10-21 12:46:27'),
(8, 'mahajan', 'sad', 'web developer', 323, 666, '0016-12-06', 'fsd', 'df', '2020-10-21 12:52:15'),
(9, 'mahajan', 'a', 'java developer', 262, 66, '0006-05-06', '65fd', 'dsf', '2020-10-21 12:52:31'),
(10, 'mahajan', 'ddata', 'machine learning', 656, 661616, '2020-10-21', 'asdad', 'adads', '2020-10-21 19:40:54'),
(11, 'mahajan', 'mozila', 'java developer', 321, 57, '2020-10-21', 'adasd', 'asdasd', '2020-10-21 19:43:53'),
(12, 'punam', 'gjg', 'data analytics', 1, 65161, '2020-10-22', 'yet nhi\r\n', 'yes', '2020-10-22 10:20:17'),
(13, 'punam', 'intern', 'java developer', 66, 161, '0316-12-16', 'dfdsf', 'fsdf', '2020-10-22 10:43:19'),
(14, 'punam', 'adfa', 'web developer', 6, 6631, '2020-10-22', 'sdfsf', 'sdfsdf', '2020-10-22 10:43:50'),
(15, 'punam', 'ux designer', 'android developer', 66, 55, '2020-10-22', 'dsf', 'sdf', '2020-10-22 10:47:12'),
(16, 'mahajan', 'new trty', 'java developer', 12, 331, '2020-11-23', 'bbb', 'fff', '2020-11-23 13:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `job_tittle` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `pos` int(255) NOT NULL,
  `sal` int(255) NOT NULL,
  `dtd` text NOT NULL,
  `abt` varchar(255) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `username`, `job_tittle`, `cat`, `pos`, `sal`, `dtd`, `abt`, `apply`, `time`) VALUES
(1, 'sfd', 'dsf', 'sdf', 1, 6262, '2020-10-22', 'df', 'af', '2020-10-22 10:49:09'),
(2, 'mahajan', 'dsf', 'java developer', 16, 666, '2020-10-22', 'dsfdsf', 'dff', '2020-10-22 11:54:37'),
(3, 'mahajan', 'java developer', 'android developer', 22, 6633, '0033-02-21', '21fe', 'ewf', '2020-11-05 16:39:39'),
(4, 'mahajan', 'frwf', 'java developer', 313, 64646, '0006-04-06', 'ef', 'edwf', '2020-11-05 16:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'gunjan', 'gunjan.bharambe@gmail.com', '$2y$10$3C1KnrQbduLn2SXQQIMnuOVgnjZML.dPyeMz9ih24e6COed5agHhy', 'student'),
(2, 'mahajan', 'mahajan@gmail.com', '$2y$10$pXREJqbpD5J5UyB16V.JmOPq2PgtW6xyd1kwCv8s1eBYTSDEhoPGS', 'company'),
(3, 'mayur', 'mahajan.mayur26@gmail.com', '$2y$10$pXREJqbpD5J5UyB16V.JmOPq2PgtW6xyd1kwCv8s1eBYTSDEhoPGS', 'admin'),
(4, 'yogesh', 'yogesh@gmail.com', '$2y$10$4gOSZIikD9gUs0kY/Wg0sO3kAGpxQOwok4fZDzu6ad8mAU1aKiDza', 'company'),
(5, 'vihang', 'vihang@gmail.com', '$2y$10$8QpsHfh1ul0orX5.DpBbT.SGc1s2zSfVCpl6MEm/eC9xtiEPLhHQS', 'student'),
(6, 'aditya', 'aditya@gmail.com', '$2y$10$dVaOIjuS6T6TpJ35A8sY4.Ul.0/FjW9LnKo.IN5fxvllytBNJY9Cq', 'student'),
(8, 'ooo', 'dss@gmail.com', '$2y$10$hVDVMEHcoPx.WHHaJWImTe2AhQXmQJUHHhL/1zUeeQ0PF0lGWFVb6', 'student'),
(9, 'lll', 'asas@gmail.com', '$2y$10$SmKppRoqcgbY59AlJL2QAub4jGABPp4Ld.7p/RYbg3lrhL6DwUIaO', 'student'),
(10, 'try', 'try@gmail.com', '$2y$10$1QWzIZJ0JiPuF0nv.3f8PuF9W3WVk7fFdnGFNncCgPNzMJ7/8.pGW', 'student'),
(11, 'df', 'dasdadss@gmail.com', '$2y$10$bcovND94m2hFHeb/KWf5y.QiXp.XM.1pV1AUdqvtCx72fi6.k8axq', 'student'),
(12, 'punam', 'punam@gmail.com', '$2y$10$T50xHelaZC/kYqYTCr95nOI9EbagofO3ZB18IiIvWddxjRmTNehkq', 'company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
