-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 05:19 PM
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
-- Database: `esa`
--

-- --------------------------------------------------------

--
-- Table structure for table `astranaut`
--

CREATE TABLE `astranaut` (
  `astronaut_ID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `no_missions` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astranaut`
--

INSERT INTO `astranaut` (`astronaut_ID`, `name`, `no_missions`) VALUES
(2, 'nod', 98),
(4, 'asd', 23),
(5, '', 0),
(6, 'sad', 3),
(7, '', 0),
(8, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `mission_ID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `destination` varchar(150) NOT NULL,
  `launch_date` date NOT NULL,
  `mission_type` varchar(150) NOT NULL,
  `crew_size` int(3) NOT NULL,
  `astronaut_ID` int(11) NOT NULL,
  `target_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mission_ID`, `name`, `destination`, `launch_date`, `mission_type`, `crew_size`, `astronaut_ID`, `target_ID`) VALUES
(2, 'Jupiter', 'Rocket', '2022-07-05', 'srdsg', 34, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `target_ID` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `first_mission` date NOT NULL,
  `target_type` varchar(150) NOT NULL,
  `no_missions` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`target_ID`, `name`, `first_mission`, `target_type`, `no_missions`) VALUES
(1, '', '0000-00-00', '', 0),
(2, 'Matt', '2022-07-05', 'PK', 6),
(3, '', '0000-00-00', '', 0),
(4, '', '0000-00-00', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astranaut`
--
ALTER TABLE `astranaut`
  ADD PRIMARY KEY (`astronaut_ID`),
  ADD KEY `astronaut_ID_fk` (`astronaut_ID`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_ID`),
  ADD KEY `target_ID` (`target_ID`),
  ADD KEY `astranaut` (`astronaut_ID`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`target_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astranaut`
--
ALTER TABLE `astranaut`
  MODIFY `astronaut_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `mission_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `target_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`astronaut_ID`) REFERENCES `astranaut` (`astronaut_ID`),
  ADD CONSTRAINT `mission_ibfk_2` FOREIGN KEY (`target_ID`) REFERENCES `target` (`target_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
