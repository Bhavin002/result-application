-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31919449_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `indexed` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`indexed`, `school_name`) VALUES
(101, 'Hariom'),
(102, 'Prerna'),
(103, 'Global'),
(104, 'Aakash'),
(105, 'Future');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `indexed` int(11) NOT NULL,
  `guj` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `ss` int(11) NOT NULL,
  `sun` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `per` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `indexed`, `guj`, `eng`, `maths`, `science`, `ss`, `sun`, `total`, `per`) VALUES
(1, 'Bhavin', 101, 78, 67, 56, 90, 89, 91, 471, 78.5),
(2, 'Milan', 102, 56, 70, 90, 69, 88, 50, 423, 70.5),
(3, 'Nandani', 101, 50, 70, 84, 71, 77, 68, 420, 70),
(4, 'Vimal', 103, 74, 82, 90, 87, 60, 78, 471, 78.5),
(5, 'Janvi', 102, 59, 78, 90, 88, 76, 50, 441, 73.5),
(6, 'Parth', 105, 45, 60, 67, 53, 47, 38, 310, 51.6667),
(7, 'Kishan', 102, 89, 76, 70, 53, 80, 79, 447, 74.5),
(8, 'Kinjal', 104, 94, 91, 93, 94, 88, 85, 545, 90.8333),
(9, 'Rajal', 101, 82, 84, 80, 73, 67, 88, 474, 79),
(10, 'Nayan', 104, 80, 91, 87, 83, 90, 87, 518, 86.3333),
(11, 'Vijay', 103, 67, 90, 78, 77, 90, 56, 458, 76.3333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`indexed`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `indexed` (`indexed`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`indexed`) REFERENCES `school` (`indexed`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
