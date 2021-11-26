-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 02:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studID` int(11) NOT NULL,
  `studName` text NOT NULL,
  `studSurname` text NOT NULL,
  `studNo` text NOT NULL,
  `studEmail` text NOT NULL,
  `studGender` text NOT NULL,
  `studPassword` text NOT NULL,
  `campusName` text NOT NULL,
  `facultyName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studID`, `studName`, `studSurname`, `studNo`, `studEmail`, `studGender`, `studPassword`, `campusName`, `facultyName`) VALUES
(5, 'Simphiwe', 'Mthanti', '216599390', '216599390@tut4life.ac.za', 'Male', '$2y$10$Vdo652lreVJtpb0f72yh0e4mFSqnWeUl2mURTNdvMkcK6UX/uHScq', 'Soshanguve South Campus', 'Faculty of Information and Communication Technology'),
(6, 'Zazo', 'Mcdonald', '216843818', '216843818@tut4life.ac.za', 'Male', '$2y$10$Lr/08ig5h/oQTe16cRwUpe25u77Hmt4cSUrZHjcDkQ8ecP.mOr.Hy', 'Soshanguve South Campus', 'Faculty of Information and Communication Technology'),
(7, 'SIMPHIWE', 'Mthethwa', '216599398', '216599398@tut4life.ac.za', 'Female', '$2y$10$TrnaiVCuTGNPB3Vpl/c6Tu9hP7lVw4eNJvip8uCe/Zbg5Nn2VIZkC', 'Polokwane Campus', 'Faculty of Engineering and the Built Environment');

-- --------------------------------------------------------

--
-- Table structure for table `tripbook`
--

CREATE TABLE `tripbook` (
  `tripID` int(11) NOT NULL,
  `tripName` text NOT NULL,
  `tripTime` time NOT NULL,
  `studID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tripbook`
--

INSERT INTO `tripbook` (`tripID`, `tripName`, `tripTime`, `studID`) VALUES
(15, 'Arcadia Campus to Soshanguve North Campus', '14:00:00', 5),
(18, 'Pretoria Campus to Soshanguve South Campus', '15:00:00', 5),
(24, 'Soshanguve North Campus to Soshanguve South Campus', '13:30:00', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studID`);

--
-- Indexes for table `tripbook`
--
ALTER TABLE `tripbook`
  ADD PRIMARY KEY (`tripID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tripbook`
--
ALTER TABLE `tripbook`
  MODIFY `tripID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
