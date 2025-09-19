-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 12:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `cust_id`, `p_id`, `quantity`, `total`, `date`) VALUES
(5, 1, 0, 0, 0, '2023-06-25'),
(8, 0, 3, 1, 30, '2023-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `fdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `maid` varchar(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `email`, `phone`, `dob`, `address`, `maid`, `image`, `date`, `password`) VALUES
(5, 'rahul', 'rahul@gmail.com', 976786442, '1980-08-08', 'neermarga,manglore', '1', 'uploads/ac.jpg', '2021-06-16', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orid` int(11) NOT NULL,
  `usid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `odate` date NOT NULL,
  `ostatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orid`, `usid`, `prid`, `qty`, `cost`, `total`, `odate`, `ostatus`) VALUES
(1, 1, 1, 4, 120, 480, '2023-06-25', 'pending'),
(2, 1, 1, 6, 120, 720, '2023-06-25', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `odid` int(11) NOT NULL,
  `orid` int(11) NOT NULL,
  `usid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `odate` date NOT NULL,
  `ostatus` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`odid`, `orid`, `usid`, `prid`, `qty`, `cost`, `total`, `odate`, `ostatus`) VALUES
(1, 1, 1, 1, 4, 120, 480, '2023-06-25', 'pending'),
(2, 2, 1, 1, 6, 120, 720, '2023-06-25', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paid` int(11) NOT NULL,
  `usrid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `padate` date NOT NULL,
  `pastatus` varchar(30) NOT NULL,
  `tid` int(100) NOT NULL,
  `ship` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paid`, `usrid`, `amount`, `padate`, `pastatus`, `tid`, `ship`) VALUES
(1, 1, 480, '2023-06-25', 'Paid', 2147483647, 'sasassas'),
(2, 1, 720, '2023-06-25', 'Paid', 2147483647, 'dsdsdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `uid` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `description` varchar(300) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `pimage` varchar(250) NOT NULL,
  `pdate` date NOT NULL,
  `ma_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `catg` varchar(100) NOT NULL,
  `rack` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `description`, `cost`, `qty`, `expdate`, `pimage`, `pdate`, `ma_id`, `stock`, `catg`, `rack`) VALUES
(1, 'abolo 250 Oral Suspension', 'Dolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\n', '120', 10, '0000-00-00', 'uploads/dc7df3e5527cffd54e67197cb568046de8ba28e51.jpg', '2023-06-25', 5, 0, 'BABY CARE', ''),
(3, 'q50 Evion Capsules Vitami', '50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg', '30', 10, '2023-06-20', 'uploads/download.jpg', '2023-06-25', 5, 10, 'GENERAL MEDICINE', 'R4 | 104'),
(4, 'Dolo 250 Oral Suspension', 'Dolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\n', '120', 10, '0000-00-00', 'uploads/dc7df3e5527cffd54e67197cb568046de8ba28e51.jpg', '2023-06-25', 5, 7, 'BABY CARE', ''),
(5, 'qq Evion Capsules Vita', '50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg', '30', 10, '2023-06-20', 'uploads/download.jpg', '2023-06-25', 5, 10, 'GENERAL MEDICINE', 'R4 | 104'),
(6, 'qwDolo 250 Oral Suspensio', 'Dolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\n', '120', 10, '0000-00-00', 'uploads/dc7df3e5527cffd54e67197cb568046de8ba28e51.jpg', '2023-06-25', 5, 9, 'BABY CARE', ''),
(7, '50 Evion Capsules Vitamin', '50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg', '30', 10, '2023-06-20', 'uploads/download.jpg', '2023-06-25', 5, 10, 'GENERAL MEDICINE', 'R4 | 104'),
(8, 'Dolo 250 Oral Suspension', 'Dolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\n', '120', 10, '0000-00-00', 'uploads/dc7df3e5527cffd54e67197cb568046de8ba28e51.jpg', '2023-06-25', 5, 7, 'BABY CARE', ''),
(9, '50 Evion Capsules Vitamin', '50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg50 Evion Capsules Vitamin E for Glowing Face,Strong Hair,Acne,Nails, Glowing Skin 400mg', '30', 10, '2023-06-20', 'uploads/download.jpg', '2023-06-25', 5, 10, 'GENERAL MEDICINE', 'R4 | 104'),
(10, 'Dolo 250 Oral Suspension', 'Dolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\nDolo 250 Oral Suspension\r\n', '120', 10, '0000-00-00', 'uploads/dc7df3e5527cffd54e67197cb568046de8ba28e51.jpg', '2023-06-25', 5, 7, 'BABY CARE', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `presimage` varchar(250) NOT NULL,
  `rdate` date NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `rstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `sid` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `gty` int(11) NOT NULL,
  `rem` int(11) NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `uemail` varchar(25) NOT NULL,
  `uphone` bigint(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `uaddress` varchar(150) NOT NULL,
  `udate` date NOT NULL,
  `upassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `dob`, `uaddress`, `udate`, `upassword`) VALUES
(1, 'test', 'test@test.com', 9988776655, '', 'mangalore', '2023-06-25', '@BeeBee88'),
(2, 'sas', 's@f.coom', 9988776655, '2003-12-22', 'sasa', '2023-06-25', '@BeeBee88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orid`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`odid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `odid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
