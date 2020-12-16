-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 07:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventbook`
--

CREATE TABLE `eventbook` (
  `bookingid` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `packagename` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `venue` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventbook`
--

INSERT INTO `eventbook` (`bookingid`, `Username`, `eventname`, `packagename`, `startdate`, `enddate`, `starttime`, `endtime`, `venue`, `price`) VALUES
(1, 'samih', 'SAMIH', 'NOT KNOWN UNTIL NOW', '0000-00-00', '0000-00-00', '20:44:00', '20:25:00', 'LOS SANTOS', 650),
(3, 'samih', 'trying', 'trying', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'trying', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkgid` int(11) NOT NULL,
  `PkgName` varchar(50) NOT NULL,
  `PkgDesc` varchar(200) NOT NULL,
  `PkgPrice` int(11) NOT NULL,
  `PkgDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardnum` int(50) NOT NULL,
  `holdername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardnum`, `holdername`) VALUES
(123456789, 'samih'),
(1111111111, 'sharafeldin');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id` int(6) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `ICno` int(12) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `createdtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(8) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Qty` int(11) NOT NULL,
  `ProductPrice` double(10,2) NOT NULL,
  `EqDate` date NOT NULL,
  `ProductDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Qty`, `ProductPrice`, `EqDate`, `ProductDescription`) VALUES
(1, 'FinePix Pro2 3D Camera', 0, 1500.00, '0000-00-00', ''),
(2, 'EXP Portable Hard Drive', 0, 800.00, '0000-00-00', ''),
(3, 'Luxury Ultra thin Wrist Watch', 0, 300.00, '0000-00-00', ''),
(4, 'XP 1155 Intel Core Laptop', 0, 800.00, '0000-00-00', ''),
(5, 'phone', 22, 20.00, '2019-11-21', 'a phone'),
(6, 'laptop', 4, 40.00, '2019-11-21', 'yusfkhfkf hdsjkf ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ICno` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Approval_Status` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Approval_Date` date NOT NULL,
  `Account_Type` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ICno`, `Username`, `Password`, `Name`, `Address`, `ContactNo`, `Approval_Status`, `Email`, `Approval_Date`, `Account_Type`, `Company`, `Gender`) VALUES
('P5555', 'fadhl', 'admin', 'saleh fadhl', 'Malaysia, Pahang. gambang', '01831371411111', 'Approve', 'fadhl1111@gmail.com', '2019-11-20', 'Admin', 'UMPkk4', 'male'),
('p051616', 'kabashi', 'kabashi', 'kabashi khatir', 'sudan taif', '05352937', 'APPROVE', 'kabashi27@gmail.com', '2019-12-02', 'Customer', '', 'male'),
('sa97946146', 'saloh', '1111', 'saleh', 'KK4@UMP GAMBANG', '01346464', 'PENDING', 'saleh@hotmail.com', '2019-12-02', 'Supplier', 'NOT YET', 'female'),
('AA505451', 'samih', '000', 'samih', 'UMP KK2', '011115458545', 'APPROVE', 'samih2@gmail.com', '2019-11-14', 'Customer', '', 'female'),
('p05405160', 'sharaf', '1234', 'sharaf', 'ump', '01137555647', 'BLOCK', 'sharaf@gmail.com', '2019-11-14', 'Supplier', '2364646', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventbook`
--
ALTER TABLE `eventbook`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cardnum`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventbook`
--
ALTER TABLE `eventbook`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkgid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
