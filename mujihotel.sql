-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 09:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mujihotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(56) NOT NULL,
  `Names` varchar(76) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `password` varchar(67) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `id_card` varchar(54) DEFAULT NULL,
  `gender` varchar(76) DEFAULT NULL,
  `salary` int(76) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `Names`, `email`, `password`, `phone`, `id_card`, `gender`, `salary`) VALUES
(1, 'iyaturinze janine', 'iyatujean2020@gamil.com', 'admin123', '0788889999', '1200197355167', 'female', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(10) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult` varchar(10) NOT NULL,
  `children` varchar(10) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` int(50) NOT NULL,
  `momopay` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `destination`, `email`, `checkin`, `checkout`, `adult`, `children`, `payment`, `cardname`, `cardnumber`, `momopay`) VALUES
(1, 'kigali', 'ishtiery@gmail.com', '2021-05-19', '2021-05-20', '0', '0', 'visa', 'habineza', 987654, 788574387),
(2, 'musanze', 'arrix@gmail.com', '2021-05-19', '2021-05-20', '0', '0', 'mastercard', 'niyomungeri', 12357986, 0),
(3, 'musanze', 'arrix@gmail.com', '2021-05-19', '2021-05-20', '0', '0', 'mastercard', 'niyomungeri', 12357986, 0),
(4, 'gisenyi', 'mucyo@hertier.gmail.com', '2021-05-22', '2021-05-23', '2', '0', 'pallpay', 'herthier', 12356789, 0),
(5, 'kirehe', 'janine@gmail.com', '2021-05-16', '2021-05-19', '2', '1', 'pallpay', 'herthiermucyo', 123456, 0),
(6, 'kirehe', 'sonikamiz@gmail.com', '2021-05-10', '2021-05-19', '2', '0', '', 'herthiermucyo', 123678, 0),
(7, 'nyagatare', 'mushayigad@gmail.com', '2021-05-19', '2021-05-20', '1', '0', 'bkcard', 'mushayija', 12345687, 0),
(8, 'musanze', 'janine@gmail.com', '2021-05-18', '2021-05-20', '1', '1', 'pallpay', 'janine', 987654, 0),
(9, 'kigali', 'tieryishimwe123@gmail.com', '2021-05-25', '2021-05-26', '2', '2', 'visa', 'mushayija', 12345678, 0),
(10, 'kigali', 'tieryishimwe123@gmail.com', '2021-05-25', '2021-05-26', '1', '0', 'none', '', 0, 788574387),
(11, 'kigali', 'tieryishimwe123@gmail.com', '2021-05-25', '2021-05-26', '1', '0', 'visa', 'habineza', 12345, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(67) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `names`, `email`, `message`) VALUES
(1, '', 'rutsizi@gmail.com', ''),
(2, 'mushayija gad', 'rutsizi@ gmail.com', 'hy my name is gadson bafakurera for really i liked your hotel and if you accept me as your supplier i would like to supply you urubuto and amapera'),
(3, 'mucyo hertier', 'mucyo@hertier.gmail.com', 'hy i respected kbs'),
(4, 'ishimwe ', 'ishimwet@gmail.com', 'i like your site'),
(5, '', 'sarah@gmail.com', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, 'mushayija stiven', 'rwata@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `countable`
--

CREATE TABLE `countable` (
  `countableid` int(17) NOT NULL,
  `Names` varchar(67) DEFAULT NULL,
  `gender` varchar(23) DEFAULT NULL,
  `address` varchar(54) DEFAULT NULL,
  `contuct` varchar(45) DEFAULT NULL,
  `salary` int(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(225) NOT NULL,
  `username` varchar(23) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `address` varchar(225) NOT NULL,
  `contact_number` varchar(225) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `id_card` varchar(225) NOT NULL,
  `nationality` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `username`, `email`, `password`, `address`, `contact_number`, `gender`, `id_card`, `nationality`) VALUES
(13, 'ishimwe golden', 'tieryishimwe123@gmail.com', 'ishgold', 'kigali/nyarugenge/muhima', '0788574387', 'male', '020034076809326', 'Rwanda'),
(14, 'uwase beatrice', 'uwabetty@gmail.com', 'mutoni', 'kigali/nyarugenge/gisozi', '0784767542', 'male', '1200198763562', 'burundi'),
(16, 'mushajija stiven', 'stiven@gmail.com', '1234567', 'nyagatare', '078458967', 'male', '234567', 'burundi'),
(17, 'sonia kamikazi', 'sonikamiz@gmail.com', '1234567', 'kigali', '0788445758', 'female', '1234sonia', 'Rwanda');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emmployeeid` int(225) NOT NULL,
  `employee_name` varchar(225) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `id_card` varchar(225) NOT NULL,
  `nationality` varchar(225) NOT NULL,
  `salary` int(225) NOT NULL,
  `customerid` int(225) NOT NULL,
  `jodtitle` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerid` int(16) NOT NULL,
  `names` varchar(67) DEFAULT NULL,
  `gender` varchar(23) DEFAULT NULL,
  `address` varchar(54) DEFAULT NULL,
  `contuct` varchar(45) DEFAULT NULL,
  `salary` int(65) DEFAULT NULL,
  `countableid` int(54) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countable`
--
ALTER TABLE `countable`
  ADD PRIMARY KEY (`countableid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emmployeeid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerid`),
  ADD KEY `countableid` (`countableid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(67) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emmployeeid` int(225) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`countableid`) REFERENCES `countable` (`countableid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
