-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 12:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehc-workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_challenge`
--

CREATE TABLE `list_challenge` (
  `ID_chall` int(5) NOT NULL,
  `Chall_name` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Hint` varchar(500) DEFAULT NULL,
  `Flag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_challenge`
--

INSERT INTO `list_challenge` (`ID_chall`, `Chall_name`, `Description`, `Hint`, `Flag`) VALUES
(1, 'Chall_1', 'This challenge is about ssh a server and basic linux command.', 'Hint_1', '0c25536c396214e7f3105e7dbfb30ac67a91650428b52161e8ac3923a481591e'),
(2, 'Chall_2', 'Google have a good tool to find out the text what you want. So, does terminal also have that tool?', 'Hint_2', '3bbe3d1d60e548788b5791478a6a3a0af370e0cf79ed971653f40a3af21abd4a'),
(3, 'Chall_3', 'find flag file among a lot of file by it\'s size, form of flag', 'Hint_3', 'cfe90f6cd86e2cb2e9c129523e9a1ab1d6a90d4f5826b1feb4f1140e6dace531'),
(4, 'Chall_4', 'Oh no, someone has messed up file in multiple zip file. Can you help me?', 'Hint_4', '8aaeb1bb786a91f1f19c549ff5cdc1ec8a0f773c16eb60a2c6e782eab7adab5f'),
(5, 'chall_5', 'right user, right permission ', 'hint_5', 'bc6568113f95b484ae9e6ba2b149d884fbd37d468c00b1e0c0101436bf7c998c'),
(6, 'chall_6', 'Description_6', 'Hint_6', 'abcafasf'),
(7, 'chall_7', 'Description_7', 'Hint_7', 'asfasgas');

-- --------------------------------------------------------

--
-- Table structure for table `solve`
--

CREATE TABLE `solve` (
  `ID_team` int(5) NOT NULL,
  `ID_chall` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solve`
--

INSERT INTO `solve` (`ID_team`, `ID_chall`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 2),
(2, 3),
(6, 1),
(6, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `score`) VALUES
(1, 'gianght', '1be1cbc3ccadbfd6085455b608e4955ada5ccb0d0bfcde059683cd932a780976', 1500),
(2, 'admin', '05926fd3e6ec8c13c5da5205b546037bdcf861528e0bdb22e9cece29e567a1bc', 1000),
(6, 'TuNC', 'ea53cb05b74275c6ee28a6d93a2d80db4e0e9a560f72c235db8bb17e8b110cc9', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_challenge`
--
ALTER TABLE `list_challenge`
  ADD PRIMARY KEY (`ID_chall`);

--
-- Indexes for table `solve`
--
ALTER TABLE `solve`
  ADD PRIMARY KEY (`ID_team`,`ID_chall`),
  ADD KEY `ID_chall` (`ID_chall`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_challenge`
--
ALTER TABLE `list_challenge`
  MODIFY `ID_chall` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `solve`
--
ALTER TABLE `solve`
  ADD CONSTRAINT `solve_ibfk_1` FOREIGN KEY (`ID_chall`) REFERENCES `list_challenge` (`ID_chall`),
  ADD CONSTRAINT `solve_ibfk_2` FOREIGN KEY (`ID_team`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
