-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 08:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(14, 17, 'Vivek', 'Salotkar', 'Male', 'viveksalotkar@gmail.com', '9865321456', 'Sneha', 350, '2021-06-18', '08:00:00', 1, 1),
(14, 18, 'Vivek', 'Salotkar', 'Male', 'viveksalotkar@gmail.com', '9865321456', 'Sneha', 350, '2021-06-25', '10:00:00', 1, 1),
(14, 19, 'Vivek', 'Salotkar', 'Male', 'viveksalotkar@gmail.com', '9865321456', 'Sneha', 350, '2021-06-23', '12:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Anu', 'anu@gmail.com', '7896677554', 'Hey Admin'),
(' Viki', 'viki@gmail.com', '9899778865', 'Good Job, Pal'),
('Ananya', 'ananya@gmail.com', '9997888879', 'How can I reach you?'),
('Aakash', 'aakash@gmail.com', '8788979967', 'Love your site'),
('Mani', 'mani@gmail.com', '8977768978', 'Want some coffee?'),
('Karthick', 'karthi@gmail.com', '9898989898', 'Good service'),
('Abbis', 'abbis@gmail.com', '8979776868', 'Love your service'),
('Asiq', 'asiq@gmail.com', '9087897564', 'Love your service. Thank you!'),
('Jane', 'jane@gmail.com', '7869869757', 'I love your service!'),
('Sunil Chauhan', 'sunils@gmail.com', '9966633355', 'Very good experience .. Thank you !'),
('Manasi', 'manasi@gmail.com', '9998686939', 'How can I choose doctor?'),
('Manasi', 'manasi@gmail.com', '9865326556', 'Nice Experience !');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `image` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`image`, `username`, `password`, `email`, `city`, `pincode`, `location`, `experience`, `spec`, `docFees`) VALUES
('', 'Sneha', 'Sneha123', 'sneha@gmail.com', 'Pune', '411058', 'Warje', 'MBBS, DNB', 'Neurologist', 350),
('', 'Manoj', 'Manoj123', 'manoj@gmail.com', 'Pune', '411023', 'Warje', 'MBBS', 'Pediatrician', 450),
('cardback.jpeg', 'Dr Yash Patil', 'Yash123', 'yash@gmail.com', 'Hydrabad', '442001', 'Amirpeth', 'MBBS, MD', 'Cardiologist', 450);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(40) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(29, 'ambulance.png'),
(30, 'favicon.png'),
(31, 'favicon.png'),
(32, 'favicon.png'),
(33, 'favicon.png'),
(34, 'favicon.png'),
(35, 'ambulance.png'),
(36, 'ambulance.png'),
(37, 'ambulance.png'),
(38, 'ambulance.png'),
(39, 'ambulance.png'),
(40, 'favicon.png'),
(41, 'favicon.png'),
(42, 'favicon.png'),
(43, 'favicon.png'),
(44, 'favicon.png'),
(45, ''),
(46, ''),
(47, 'favicon.png'),
(48, 'favicon.png'),
(49, 'user2.png'),
(50, 'user2.png'),
(51, 'favicon.png'),
(52, 'user4.png'),
(53, 'upload/user1.png'),
(54, 'upload/ps1.jpg'),
(55, 'upload/user2.png'),
(56, '');

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `image`, `fname`, `lname`, `gender`, `email`, `age`, `address`, `city`, `contact`, `password`, `cpassword`) VALUES
(13, '', 'Akash', 'Sawarkar', 'Male', 'akashsawarkar143@gmail.com', '23', 'Shivajinagar', 'Pune', '9898998998', 'ad8c932963c7af0ecacb204eeab1dc94', 'ad8c932963c7af0ecacb204eeab1dc94'),
(14, '306473.png', 'Vivek', 'Salotkar', 'Male', 'viveksalotkar@gmail.com', '23', 'Baner', 'Pune', '9865321456', '7bee2a15709aadc8dae5a1141dc7f355', '7bee2a15709aadc8dae5a1141dc7f355'),
(15, '', 'Sudeep', 'Baravkar', 'Male', 'sudeep@gmail.com', '22', 'Shivajinagar', 'Pune', '9858696868', '593323aa2ce57f697171896f7de653cd', '593323aa2ce57f697171896f7de653cd'),
(16, '3.jpg', 'Ajinkya', 'Girigosavi', 'Male', 'ajinkya@gmail.com', '22', 'Shivajinagar', 'Pune', '8689698896', '0aa3bf4ffa71eddcb67dc7e51fe3e559', '0aa3bf4ffa71eddcb67dc7e51fe3e559'),
(17, '2.jpg', 'Kiran', 'Kutwal', 'Male', 'kiran@gmail.com', '22', 'Shivajinagar', 'Pune', '6986896968', '6e30b7f957112daaa6f4f7c7dadd7be6', '6e30b7f957112daaa6f4f7c7dadd7be6'),
(19, '', 'Manasi', 'Chatur', 'Female', 'manasi@gmail.com', '20', 'sangvi', 'Pune', '9889669999', 'dd16c0731752dc10d0c3e5dca8063fc5', 'dd16c0731752dc10d0c3e5dca8063fc5');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Dinesh', 4, 11, 'Kishan', 'Lal', '2020-03-27', '15:00:00', 'Cough', 'Nothing', 'Just take a teaspoon of Benadryl every night'),
('Ganesh', 2, 8, 'Alia', 'Bhatt', '2020-03-21', '10:00:00', 'Severe Fever', 'Nothing', 'Take bed rest'),
('Kumar', 9, 12, 'William', 'Blake', '2020-03-26', '12:00:00', 'Sever fever', 'nothing', 'Paracetamol -> 1 every morning and night'),
('Tiwary', 9, 13, 'William', 'Blake', '2020-03-26', '14:00:00', 'Cough', 'Skin dryness', 'Intake fruits with more water content'),
('Sneha', 12, 14, 'Akash', 'Sawarkar', '2021-05-28', '14:00:00', 'Fever', 'n/a', 'Take medicine on time and rest'),
('Sneha', 14, 17, 'Vivek', 'Salotkar', '2021-06-18', '08:00:00', 'Dengue', 'None', 'Take medicines');

-- --------------------------------------------------------

--
-- Table structure for table `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpasswords`
--

INSERT INTO `resetpasswords` (`id`, `code`, `email`) VALUES
(11, '160b3a00f59fc3', 'akashsawarkar143@gmail.com'),
(0, '160b3a8087a78b', 'akashsawarkar143@gmail.com'),
(0, '160b3aa067fe0f', 'akashsawarkar143@gmail.com'),
(0, '160b3aa0e72633', 'akashsawarkar143@gmail.com'),
(0, '160b3aa4d3c1f3', 'akashsawarkar143@gmail.com'),
(0, '160be1b1bd45f6', ''),
(0, '160be1b2263a02', ''),
(0, '160be1c07001f1', ''),
(0, '160be1c0bc6684', ''),
(0, '160be1c14c5b8d', ''),
(0, '160be1c716c369', 'akashsawarkar143@gmail.com'),
(0, '160be1cea4bee5', ''),
(0, '160be1cf112784', ''),
(0, '160be1d402e802', ''),
(0, '160be1d428b93f', ''),
(0, '160be1d526ce46', ''),
(0, '160be1d561cedd', ''),
(0, '160be1d5b2d629', ''),
(0, '160be1d63602c9', ''),
(0, '160be1d74c9f51', ''),
(0, '160be1d7ed39ca', ''),
(0, '160be1d97a4aa8', 'akashsawarkar143@gmail.com'),
(0, '160be1db67e2bd', ''),
(0, '160be1dba188af', 'akashsawarkar143@gmail.com'),
(0, '160be1eaa2d6f4', ''),
(0, '160be1eada4aa6', 'aaa'),
(0, '160be207a39255', 'akashsawarkar@gmail.com'),
(0, '160be20957f44e', ''),
(0, '160be2098c9869', ''),
(0, '160be209aba0cf', ''),
(0, '160be20ae57972', ''),
(0, '160be20b1511a5', ''),
(0, '160be20b44123e', ''),
(0, '160be34a5924a4', 'akashsawarkar143@gmail.com'),
(0, '160be35a80a6d9', ''),
(0, '160be35adc9744', 'akashsawarkar143@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
