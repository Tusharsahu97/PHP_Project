-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 03:17 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `un` varchar(25) NOT NULL,
  `ps` varchar(25) NOT NULL,
  `em` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`un`, `ps`, `em`) VALUES
('Tarun', '1997', 'tk67323@gmail.com'),
('Tushar', '1997', 'tarunsahu9780@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cno` int(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `dt` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `cno`, `city`, `msg`, `dt`) VALUES
(1, 'Vaishali Verma', 'vaishu98@gmail.com', 2147483647, 'Professor Colony Raipur', 'How can i join your Organization', '07-06-2022'),
(2, '', '', 0, '', '', '14-06-2022'),
(3, '', '', 0, '', '', '14-06-2022'),
(4, '', '', 0, '', '', '14-06-2022'),
(5, '', '', 0, '', '', '14-06-2022');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(4) NOT NULL,
  `dname` varchar(25) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `em` varchar(50) NOT NULL,
  `adr` varchar(50) NOT NULL,
  `adhr` varchar(12) NOT NULL,
  `pn` varchar(12) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `dcat` varchar(50) NOT NULL,
  `dt` varchar(15) NOT NULL,
  `pm` varchar(25) NOT NULL,
  `da` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `dname`, `cno`, `em`, `adr`, `adhr`, `pn`, `des`, `dcat`, `dt`, `pm`, `da`) VALUES
(24, 'Tushar sahu', '8085465011', 'tarunsahu9780@gmail.com', 'Kamal Vihar Raipur', '', '', '200 kg rise , vegitables', 'c1', '07-06-2022', '', ''),
(28, 'Sunil sahu', '7869147026', 'sunil.ssec@gmail.com', 'Shankar nagar Raipur', '0000 1111 22', 'NRUPS065', '', 'c5', '07-06-2022', 'By Cheque', '10000'),
(30, 'Rahul', 'abc1212', 'rahul@', 'Raipur', '', '', 'winter wear house name434', 'c2', '16-06-2022', '', ''),
(31, 'Rahul', '1234', 'rahul', 'Raipur', '', '', 'ascdf', 'c1', '16-06-2022', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(11) NOT NULL,
  `rname` varchar(25) NOT NULL,
  `cn` varchar(10) NOT NULL,
  `adhr` varchar(12) NOT NULL,
  `rshn` varchar(20) NOT NULL,
  `adrs` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `rcat` varchar(50) NOT NULL,
  `dt` varchar(15) NOT NULL,
  `des1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `rname`, `cn`, `adhr`, `rshn`, `adrs`, `des`, `rcat`, `dt`, `des1`) VALUES
(1, 'Rahul Verma', '8085465011', '0000 1111 22', 'APL76589543567556', 'Pandri Raipur', 'Need some Foods items', 'For Foods Item', '14-06-2022', ''),
(2, 'Reema sahu', '8085465011', '4444 5555 66', 'BPL098765434567', 'Santoshi nagar Raipur', 'Need books for 12th PCB', 'For Books', '14-06-2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `yn` varchar(25) NOT NULL,
  `ye` varchar(25) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `adr` varchar(30) NOT NULL,
  `img` blob NOT NULL,
  `dt` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`yn`, `ye`, `cno`, `adr`, `img`, `dt`) VALUES
('Dhanendra Sahu', 'dhanendra123@gmail.com', '9981538497', 'Santoshi Nagar Raipur', 0x6d656d626572342e6a7067, '07-06-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`un`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`yn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
