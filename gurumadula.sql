-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 08:36 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gurumadula`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `CareerID` int(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `keyRequirements` longtext NOT NULL,
  `flyer` varchar(100) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classdetails`
--

CREATE TABLE `classdetails` (
  `autoID` int(11) NOT NULL,
  `classID` varchar(100) NOT NULL,
  `teacherID` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `year` date NOT NULL,
  `medium` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `CVID` int(255) NOT NULL,
  `careerID` int(11) NOT NULL,
  `CV` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guardiandetails`
--

CREATE TABLE `guardiandetails` (
  `AutoID` int(11) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `titleGuardian` varchar(20) NOT NULL,
  `guardianFirstName` varchar(50) NOT NULL,
  `guardianLastName` varchar(50) NOT NULL,
  `guardianGender` varchar(50) NOT NULL,
  `guardianAddress` varchar(50) NOT NULL,
  `guardianContact` int(12) NOT NULL,
  `guadianEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `autopassword` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `firstLoginCheck` tinyint(1) NOT NULL,
  `newPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Receiptnumber` int(11) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `FeeType` varchar(50) NOT NULL,
  `Lecturer` varchar(50) NOT NULL,
  `ClassType` varchar(50) NOT NULL,
  `PaidMonth` varchar(20) NOT NULL,
  `Amount` int(100) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regresults`
--

CREATE TABLE `regresults` (
  `AutoID` int(11) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `schoolGrade5` varchar(100) NOT NULL,
  `yearGrade5` varchar(5) NOT NULL,
  `markGrade5` int(4) NOT NULL,
  `rankGrade5` int(20) NOT NULL,
  `schoolGrade10` varchar(100) NOT NULL,
  `yearGrade10` varchar(5) NOT NULL,
  `indexgrade10` varchar(30) NOT NULL,
  `numOfSubject10` int(11) NOT NULL,
  `AResultCount` int(11) NOT NULL,
  `BResultCount` int(11) NOT NULL,
  `CResultCount` int(11) NOT NULL,
  `SResultCount` int(11) NOT NULL,
  `scienceResult10` varchar(1) NOT NULL,
  `mathsResult10` varchar(1) NOT NULL,
  `englishResult10` varchar(1) NOT NULL,
  `districtGrade10` varchar(25) NOT NULL,
  `districtRankGrade10` int(20) NOT NULL,
  `islandRank10` int(20) NOT NULL,
  `schoolAlF` varchar(50) NOT NULL,
  `districtALF` varchar(25) NOT NULL,
  `yearAlF` varchar(5) NOT NULL,
  `indexNumberALF` varchar(20) NOT NULL,
  `StreamALF` varchar(25) NOT NULL,
  `MediumALF` varchar(10) NOT NULL,
  `subject1ALF` varchar(50) NOT NULL,
  `result1rALF` int(1) NOT NULL,
  `subject2ALF` varchar(0) NOT NULL,
  `result2rALF` int(1) NOT NULL,
  `subject3ALF` varchar(50) NOT NULL,
  `result3rALF` int(1) NOT NULL,
  `subject4ALF` varchar(50) NOT NULL,
  `result4rALF` int(1) NOT NULL,
  `districrRankALF` int(20) NOT NULL,
  `islandRankALF` int(20) NOT NULL,
  `districtALS` varchar(25) NOT NULL,
  `yearAlS` varchar(5) NOT NULL,
  `indexNumberALS` varchar(20) NOT NULL,
  `StreamALS` varchar(20) NOT NULL,
  `MediumALS` varchar(10) NOT NULL,
  `subject1ALS` varchar(50) NOT NULL,
  `result1rALS` int(1) NOT NULL,
  `subject2ALS` varchar(50) NOT NULL,
  `result2rALS` int(1) NOT NULL,
  `subject3ALS` varchar(50) NOT NULL,
  `result3rALS` int(1) NOT NULL,
  `subject4ALS` varchar(50) NOT NULL,
  `result4rALS` int(1) NOT NULL,
  `districrRankALS` int(20) NOT NULL,
  `islandRankALS` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `AutoID` int(11) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `school` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `facingYear` year(4) NOT NULL,
  `facingMedium` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachersdetails`
--

CREATE TABLE `teachersdetails` (
  `autoID` int(11) NOT NULL,
  `ID` varchar(50) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNumber` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `noOfSubjects` int(10) NOT NULL,
  `profileImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`CareerID`);

--
-- Indexes for table `classdetails`
--
ALTER TABLE `classdetails`
  ADD PRIMARY KEY (`autoID`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`CVID`);

--
-- Indexes for table `guardiandetails`
--
ALTER TABLE `guardiandetails`
  ADD PRIMARY KEY (`AutoID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Receiptnumber`);

--
-- Indexes for table `regresults`
--
ALTER TABLE `regresults`
  ADD PRIMARY KEY (`AutoID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`AutoID`,`studentID`);

--
-- Indexes for table `teachersdetails`
--
ALTER TABLE `teachersdetails`
  ADD PRIMARY KEY (`autoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `CareerID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classdetails`
--
ALTER TABLE `classdetails`
  MODIFY `autoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `CVID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardiandetails`
--
ALTER TABLE `guardiandetails`
  MODIFY `AutoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `Receiptnumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regresults`
--
ALTER TABLE `regresults`
  MODIFY `AutoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `AutoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachersdetails`
--
ALTER TABLE `teachersdetails`
  MODIFY `autoID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
