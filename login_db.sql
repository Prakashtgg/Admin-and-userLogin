-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 12:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(3, 'Anuj', 'kumar', 'phpgurukul@gmail.com', '0123456789', 'Test Addresss', '2018-12-02 09:11:01'),
(4, 'Test', 'test', 'test@gmail.com', '0987654321', 'New Delhi India', '2018-12-02 09:14:54'),
(7, 'Demo', 'User', 'demouser@domain.com', '0123456785', 'New Delhi India', '2018-12-02 18:27:29'),
(8, 'aaaaaaaaa', 'bbbbbbbbbbb', 'gkrjgjkrej@mnndf.com', '1234569875', 'grjnglrjnlre45er46y46r5e4y', '2021-10-29 07:56:03'),
(12, 'dddddddd', 'vvvvvvvvv', 'fdsdf@5yhte.com', '1345678965', 'fdvf v,fkgkndnjdls', '2022-05-21 09:56:51'),
(16, 'john', 'john', 'ednej@nfje.com', '1234567895', 'kkfnkjfk', '2022-05-21 10:40:32'),
(17, 'prakash', 'pppp', 'hedbehdb@jhff.com', '1234567895', 'fnejfhjehjfe', '2022-05-21 10:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'Prakash', 'email1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'surya', 'email2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2'),
(3, 'Jhon', 'email3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
