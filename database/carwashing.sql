-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 07:19 PM
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
-- Database: `carwashing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-12-10 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `carwashbooking`
--

CREATE TABLE `carwashbooking` (
  `id` int(11) NOT NULL,
  `bookingId` bigint(10) DEFAULT NULL,
  `packageType` varchar(120) DEFAULT NULL,
  `carWashPoint` int(11) DEFAULT NULL,
  `fullName` varchar(150) DEFAULT NULL,
  `mobileNumber` bigint(12) DEFAULT NULL,
  `washDate` date DEFAULT NULL,
  `washTime` time DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `adminRemark` mediumtext DEFAULT NULL,
  `paymentMode` varchar(120) DEFAULT NULL,
  `txnNumber` varchar(120) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carwashbooking`
--

INSERT INTO `carwashbooking` (`id`, `bookingId`, `packageType`, `carWashPoint`, `fullName`, `mobileNumber`, `washDate`, `washTime`, `message`, `status`, `adminRemark`, `paymentMode`, `txnNumber`, `postingDate`, `lastUpdationDate`) VALUES
(1, 316460298, '1', 1, 'ANuj kumar', 1234567890, '2021-12-16', '11:45:00', 'NA', 'Completed', 'Washing completed', 'e-Wallet', '345345345', '2021-12-13 19:14:22', '2021-12-14 18:04:52'),
(2, 647869499, '3', 2, 'Anuj kumar', 1234567890, '2021-12-30', '15:47:00', 'na', 'New', NULL, NULL, NULL, '2021-12-13 19:14:47', '2021-12-14 17:20:56'),
(3, 215755984, '2', 3, 'AMit', 9874563210, '2021-12-19', '15:05:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-13 19:16:19', NULL),
(4, 440337019, '1', 2, 'Sarita', 6987412360, '2022-01-01', '19:37:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-14 17:01:55', NULL),
(5, 783971257, '2', 2, 'John Doe', 1234567890, '2021-12-25', '13:31:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-14 19:00:44', NULL),
(6, 328979472, '3 ', 3, 'Rahul Yadav', 1234567890, '2021-12-18', '10:15:00', 'NA', 'New', NULL, NULL, NULL, '2021-12-14 19:12:37', NULL),
(7, 151983398, '1', 2, 'Sanjeev', 1234569870, '2021-12-15', '19:50:00', 'Car wash', 'Completed', 'Car Wash Completed', 'Debit/Credit Card', 'DSGFS72342834', '2021-12-14 19:15:28', '2021-12-14 19:15:55'),
(8, 308883872, '1', 1, 'om', 987654321, '2023-01-06', '16:07:00', 'dfdfd', 'New', NULL, NULL, NULL, '2023-01-06 10:37:11', NULL),
(9, 669851535, '1', 1, 'fgfgf', 3333333333, '2023-02-13', '10:49:00', 'erer', 'New', NULL, NULL, NULL, '2023-02-13 04:18:42', NULL),
(10, 346651343, '1', 1, 'test', 1234567890, '2023-02-24', '17:08:00', 'test', 'New', NULL, NULL, NULL, '2023-02-24 11:38:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emp_detail`
--

CREATE TABLE `emp_detail` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_detail`
--

INSERT INTO `emp_detail` (`id`, `Name`, `age`, `doj`, `salary`) VALUES
(1, 'jimmy', 25, '2022-07-28', 19900);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `FullName`, `EmailId`, `Phone`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(4, 'Anuj kumar', 'anuj@gmail.com', '', 'General Enquiry', 'I want to know the price of car wash', '2021-12-13 18:27:53', 1),
(5, 'Amit', 'amit@gmail.com', '', 'Test', 'Test', '2021-12-14 19:14:22', 1),
(6, 'asdasd', 'asdasd@gmail.com', '', 'asdasd', 'asdasd', '2023-01-31 06:37:57', NULL),
(7, 'Om', 'oms@2001gm.nvn', '1234567891', 'test', 'TEST', '2023-02-21 13:32:11', NULL),
(8, NULL, NULL, '', NULL, NULL, '2023-03-12 17:33:38', NULL),
(9, NULL, NULL, '', NULL, NULL, '2023-03-12 17:34:41', NULL),
(10, NULL, NULL, '', NULL, NULL, '2023-03-12 17:35:23', NULL),
(11, NULL, NULL, '', NULL, NULL, '2023-03-12 17:35:54', NULL),
(12, NULL, NULL, '', NULL, NULL, '2023-03-12 17:36:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `washingpoints`
--

CREATE TABLE `washingpoints` (
  `id` int(11) NOT NULL,
  `washingPointName` varchar(255) DEFAULT NULL,
  `washingPointAddress` varchar(255) DEFAULT NULL,
  `contactNumber` bigint(20) DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `washingpoints`
--

INSERT INTO `washingpoints` (`id`, `washingPointName`, `washingPointAddress`, `contactNumber`, `creationDate`) VALUES
(1, 'XYZ Car Washing Point', 'ABC Street New Delhi 1110001', 1236547890, '2021-12-13 16:21:20'),
(2, 'ABC Car Washing Point', 'A3263 Sector 1- Noida 201301', 98745463210, '2021-12-13 16:22:38'),
(3, ' Matrix Car washing Point ', 'H911 Indira Puram Ghaziabad 201017 UP', 4582365419, '2021-12-13 16:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE `webpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL,
  `openignHrs` varchar(255) DEFAULT NULL,
  `phoneNumber` bigint(20) DEFAULT NULL,
  `emailId` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `type`, `detail`, `openignHrs`, `phoneNumber`, `emailId`) VALUES
(3, 'aboutus', '																																																												<div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: Georgia; font-size: 15px;\">Car Wash&nbsp; is a brand which is literally going to change the way people think about car cleaning. It is a unique mechanized car cleaning concept where cars are getting pampered by the latest equipments including high pressure cleaning machines, spray injection and extraction machines, high powered vacuum cleaners, steam cleaners and so on.</span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: Georgia; font-size: 15px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: Georgia; font-size: 15px;\">Car Wash&nbsp; is a brand that is literally going to change the way people think about car cleaning. It is a unique mechanized car cleaning concept where cars are getting pampered by the latest equipments including high pressure cleaning machines, spray injection and extraction machines, high powered vacuum cleaners, steam cleaners and so on.</span><br></div><div></div>\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										', NULL, NULL, NULL),
(11, 'contact', 'ABC Street , MIT WPU , Pune ,India', 'Mon - Fri, 8:00 AM - 9:00', 7600312345, 'carwashing22@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carwashbooking`
--
ALTER TABLE `carwashbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carWashPoint` (`carWashPoint`);

--
-- Indexes for table `emp_detail`
--
ALTER TABLE `emp_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `washingpoints`
--
ALTER TABLE `washingpoints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carwashbooking`
--
ALTER TABLE `carwashbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `emp_detail`
--
ALTER TABLE `emp_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `washingpoints`
--
ALTER TABLE `washingpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carwashbooking`
--
ALTER TABLE `carwashbooking`
  ADD CONSTRAINT `washingpointid` FOREIGN KEY (`carWashPoint`) REFERENCES `washingpoints` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
