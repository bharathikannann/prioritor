-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 08:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataentering`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodlossspecific`
--

CREATE TABLE `bloodlossspecific` (
  `id` int(11) NOT NULL,
  `idusers_afterlogin` int(50) NOT NULL,
  `bleeding_class` varchar(30) DEFAULT NULL,
  `i_e_bleeding` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `burnsspecific`
--

CREATE TABLE `burnsspecific` (
  `id` int(11) NOT NULL,
  `idusers_afterlogin` int(50) NOT NULL,
  `degreeofburn` varchar(256) DEFAULT NULL,
  `bsavalue` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `patient_id` int(11) NOT NULL,
  `idusers_afterlogin` int(11) NOT NULL,
  `patient_name` varchar(256) DEFAULT NULL,
  `patient_age` int(10) DEFAULT NULL,
  `patient_gender` varchar(256) DEFAULT NULL,
  `patient_weight` int(10) DEFAULT NULL,
  `patient_bloodgroup` varchar(256) DEFAULT NULL,
  `patient_bloodpressure` varchar(256) DEFAULT NULL,
  `patient_SpO2level` int(3) DEFAULT NULL,
  `problems` varchar(256) DEFAULT NULL,
  `other_problems` varchar(256) DEFAULT NULL,
  `checked` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fracturespecific`
--

CREATE TABLE `fracturespecific` (
  `id` int(11) NOT NULL,
  `idusers_afterlogin` int(50) NOT NULL,
  `type_open_closed` varchar(30) DEFAULT NULL,
  `type_complete_incomplete` varchar(30) DEFAULT NULL,
  `area_of_fracture` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `headdamagespecific`
--

CREATE TABLE `headdamagespecific` (
  `id` int(11) NOT NULL,
  `idusers_afterlogin` int(50) NOT NULL,
  `open_closed` varchar(30) DEFAULT NULL,
  `velocity_injury` varchar(30) DEFAULT NULL,
  `mild_moderate_severe` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` varchar(256) NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `ambulanceUsername` varchar(100) DEFAULT NULL,
  `ambulancePassword` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodlossspecific`
--
ALTER TABLE `bloodlossspecific`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burnsspecific`
--
ALTER TABLE `burnsspecific`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `uidusers_afterlogin` (`idusers_afterlogin`);

--
-- Indexes for table `fracturespecific`
--
ALTER TABLE `fracturespecific`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headdamagespecific`
--
ALTER TABLE `headdamagespecific`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodlossspecific`
--
ALTER TABLE `bloodlossspecific`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `burnsspecific`
--
ALTER TABLE `burnsspecific`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fracturespecific`
--
ALTER TABLE `fracturespecific`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headdamagespecific`
--
ALTER TABLE `headdamagespecific`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
