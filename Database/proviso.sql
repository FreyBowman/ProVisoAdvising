-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proviso`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `credits` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `name`, `location`, `credits`) VALUES
-- general req
('ALL', 'MATH-170', 'Moscow', 4),
('ALL', 'MATH-175', 'Moscow', 4),
('ALL', 'MATH-176', 'Moscow', 3),
('ALL', 'MATH-330', 'Moscow', 3),
('ALL', 'STAT-301', 'Moscow', 3),
('ALL', 'ENGL-317', 'Moscow', 3),
('ALL', 'COMM-101', 'Moscow', 3),
('ALL', 'BIOL-115', 'Moscow', 3),
('ALL', 'BIOL-115L', 'Moscow', 3),
('ALL', 'PHYS-211', 'Moscow', 3),
('ALL', 'PHYS-211L', 'Moscow', 3),
-- major in cs
('CS', 'CS-120', 'Moscow', 4),
('CS', 'CS-121', 'Moscow', 3),
('CS', 'CS-150', 'Moscow', 3),
('CS', 'CS-210', 'Online', 3),
('CS', 'CS-240', 'Moscow', 3),
('CS', 'CS-270', 'Moscow', 3),
('CS', 'CS-360', 'Moscow', 4),
('CS', 'CS-383', 'Online', 4),
('CS', 'CS-385', 'Moscow', 3),
('CS', 'CS-395', 'Online', 3),
('CS', 'CS-401', 'Moscow', 1),
('CS', 'CS-445', 'Moscow', 4),
('CS', 'CS-480', 'Moscow', 3),
('CS', 'CS-481', 'Moscow', 3),
-- major in ce
('CE', 'ECE-101', 'Moscow', 2),
('CE', 'ECE-210', 'Moscow', 3),
('CE', 'ECE-211', 'Moscow', 1),
('CE', 'ECE-212', 'Moscow', 3),
('CE', 'ECE-213', 'Moscow', 1),
('CE', 'ECE-240', 'Moscow', 3),
('CE', 'ECE-241', 'Moscow', 1),
('CE', 'ECE-292', 'Moscow', 0),
('CE', 'ECE-310', 'Moscow', 3),
('CE', 'ECE-311', 'Moscow', 1),
('CE', 'ECE-340', 'Moscow', 3),
('CE', 'ECE-341', 'Moscow', 1),
('CE', 'ECE-350', 'Moscow', 3),
('CE', 'ECE-351', 'Moscow', 1),
('CE', 'ECE-440', 'Moscow', 3),
('CE', 'ECE-482', 'Moscow', 3),
('CE', 'ECE-483', 'Moscow', 3),
('CE', 'ECE-491', 'Moscow', 0),
-- major in cyb
('CYB', 'CYB-110', 'Moscow', 3),
('CYB', 'CYB-210', 'Moscow', 3),
('CYB', 'CYB-220', 'Moscow', 3),
('CYB', 'CYB-310', 'Moscow', 3),
('CYB', 'CYB-330', 'Moscow', 3),
('CYB', 'CYB-340', 'Moscow', 3),
('CYB', 'CYB-350', 'Moscow', 3),
('CYB', 'CYB-380', 'Moscow', 3),
('CYB', 'CYB-381', 'Moscow', 3),
('CYB', 'CYB-401', 'Moscow', 1),
('CYB', 'CYB-420', 'Moscow', 3),
('CYB', 'CYB-440', 'Moscow', 3),
('CYB', 'CYB-480', 'Moscow', 3),
('CYB', 'CYB-481', 'Moscow', 3),

-- minor in math
('M_MATH', 'MATH-170', 'Moscow', 3),
('M_MATH', 'MATH-175', 'Moscow', 3),
('M_MATH', 'MATH-275', 'Moscow', 3),
('M_MATH', 'STAT-301', 'Moscow', 3),
-- minor in phys
('M_PHYS', 'PHYS-211', 'Moscow', 3),
('M_PHYS', 'PHYS-211l', 'Moscow', 1),
('M_PHYS', 'PHYS-212', 'Moscow', 3),
('M_PHYS', 'PHYS-212L', 'Moscow', 1),
('M_PHYS', 'PHYS-213', 'Moscow', 3),
-- minor in acct
('M_ACCT', 'ACCT-201', 'Moscow', 3),
('M_ACCT', 'ACCT-202', 'Moscow', 3),
('M_ACCT', 'ACCT-305', 'Moscow', 3),
('M_ACCT', 'ACCT-315', 'Moscow', 3),
('M_ACCT', 'ACCT-325', 'Moscow', 3),
('M_ACCT', 'ACCT-385', 'Moscow', 3),
-- minor in stat
('M_STAT', 'STAT-251', 'Moscow', 3),
('M_STAT', 'STAT-407', 'Moscow', 3),
('M_STAT', 'STAT-419', 'Moscow', 3),
('M_STAT', 'STAT-431', 'Moscow', 3),
('M_STAT', 'MATH-160', 'Moscow', 3),
('M_STAT', 'MATH-330', 'Moscow', 3)



;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Message` longtext NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Message`, `create_datetime`) VALUES
('Fakename', 'fakename@fakemail.com', 1234567890, 'Help me find my cat.', '2023-04-15 01:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `Email` varchar(50) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Minor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`Email`, `Major`, `Minor`) VALUES
('', 'computerscience', 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Password`) VALUES
(3, 'fakename', 'fakeemail@gmail.com', 'b1282c1dbc170a3f4bf470b7edb080c3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
