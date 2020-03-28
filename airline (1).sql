-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 06:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `phonenum` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`, `user_name`, `FirstName`, `LastName`, `phonenum`) VALUES
('varmas', 'akhila', 'akhila', 'indu', 521541242);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `pnr_num` int(11) NOT NULL,
  `flight_num` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `numbers` int(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `bookingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`pnr_num`, `flight_num`, `user_name`, `numbers`, `mail`, `bookingID`) VALUES
(21, 'spicejet-90', '', 2147483647, 'madhavsmg@gmail.com', 1),
(22, 'spicejet-90', '', 2147483647, 'madhavsmg@gmail.com', 1),
(23, 'indigo-439', 'madhavsmg', 2147483647, 'madhavsmg@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_num` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arival` varchar(100) NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `totalseats` int(11) NOT NULL,
  `remainingseats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_num`, `departure`, `arival`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `totalseats`, `remainingseats`) VALUES
('indigo-439', 'bangalore', 'rajahmundry', '2020-02-28', '2020-02-28', '19:20:00', '21:45:00', 40, 0),
('spicejet-470', 'bangalore', 'rajahmundry', '2020-02-29', '2020-02-29', '10:15:00', '13:00:00', 40, 0),
('spicejet18', 'rajahmundry', 'kovvur', '2020-02-28', '2020-02-28', '05:14:24', '09:18:18', 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `boarding_num` int(100) NOT NULL,
  `seat_num` varchar(100) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tickets_status`
--

CREATE TABLE `tickets_status` (
  `ticket_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Aadhaar_num` varchar(12) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Aadhaar_num`, `e_mail`, `f_name`, `l_name`, `phone`, `user_name`, `password`) VALUES
('2147483647', 'a@w.com', 'as', 'as', '2147483647', 'a', 'ASDFGHJKl1'),
('000000000000', 'aaaa@123.com', 'sarath', 'kumar', '9989898989', 'aaaa', 'Asdfghjkl1'),
('385681225', 'akhufidsj@gmai.com', 'akhilavarma', 'indukuri', '2147483647', 'akhufidsj', 'Iakhila1234'),
('2147483647', 'akila@gmail.com', 'akhil', 'varma', '2147483647', 'akila', 'Akila123'),
('234567887623', 'dhanussh18@gmaiil.com', 'dhanush', 'garlapati', '9345678765', 'dhanussh18', 'Danush1818'),
('234356', 'geddamsree@gmail.com', 'sreekanth', 'geddam135', '2147483647', 'geddamsree', '%$#TREgfd'),
('234356', 'geddamsreekanth@gmail.com', 'sreekanth', 'geddam135', '2147483647', 'geddamsreekanth', '*&^IUYkjh'),
('616568834754', 'madhavsmg@gmail.com', 'Madhav', 'Kumar', '9861588001', 'madhavsmg', 'madhav1818'),
('2147483647', 'manas@maif.com', 'manas', 'kaidi', '2147483647', 'manas', 'Manasa123'),
('2147483647', 'sreee@gmail.com', 'geddam', 'sree', '2147483647', 'sreee', 'Manjunath7652');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`pnr_num`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_num`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD KEY `pnr_num` (`boarding_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `pnr_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`boarding_num`) REFERENCES `booking` (`pnr_num`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
