-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 10:56 PM
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
-- Database: `online_hiring_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `c_email`, `c_password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_contact_number` varchar(10) NOT NULL,
  `c_fName` varchar(30) NOT NULL,
  `c_address` varchar(150) NOT NULL,
  `c_nic` varchar(20) NOT NULL,
  `c_password` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_contact_number`, `c_fName`, `c_address`, `c_nic`, `c_password`, `c_email`) VALUES
(5, '+947166541', 'Akila', 'You See Hotel, Weerapura, Thambala', '991581464v', '11111', 'akila@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_sub_type` varchar(20) NOT NULL,
  `e_type` varchar(20) NOT NULL,
  `e_qty` int(11) NOT NULL,
  `e_price` int(11) NOT NULL,
  `available_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`e_id`, `e_name`, `e_sub_type`, `e_type`, `e_qty`, `e_price`, `available_count`) VALUES
(1, 'Grinders', 'hand-tools', 'Power Tools', 1, 5000, 1),
(2, 'Drill Machine', 'hand-tools', 'Power Tools', 1, 4500, 1),
(3, 'Power Saws', 'hand-tools', 'Power Tools', 1, 6000, 1),
(4, 'Generators', 'filter-card', 'Portable Machines', 2, 4500, 2),
(5, 'Concrete Mix Machines', 'filter-card', 'Portable Machines', 0, 150000, 0),
(6, 'Scaffolding', 'filter-web', 'Construction Equipme', 0, 1500, 0),
(7, 'Accrow Jacks', 'filter-web', 'Construction Equipme', 0, 15000, 0),
(8, 'Column Box', 'filter-web', 'Construction Equipme', 0, 20000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipments_description`
--

CREATE TABLE `equipments_description` (
  `i_id` int(11) NOT NULL,
  `i_type` varchar(50) DEFAULT NULL,
  `i_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipments_description`
--

INSERT INTO `equipments_description` (`i_id`, `i_type`, `i_price`) VALUES
(11, 'Grinders', 5000),
(12, 'Drill Machine', 4500),
(13, 'Power Saws', 6000),
(14, 'Generators', 2500),
(15, 'Generators', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `sell_item`
--

CREATE TABLE `sell_item` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `How_many_date` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sell_worker`
--

CREATE TABLE `sell_worker` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `how_many_date` int(11) NOT NULL,
  `approval` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(50) NOT NULL,
  `w_contact_number` varchar(10) NOT NULL,
  `w_address` varchar(200) NOT NULL,
  `w_type` varchar(20) NOT NULL,
  `w_description` varchar(150) NOT NULL,
  `w_image` varchar(100) NOT NULL,
  `availability` varchar(1) NOT NULL DEFAULT '1',
  `w_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `equipments_description`
--
ALTER TABLE `equipments_description`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `sell_item`
--
ALTER TABLE `sell_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_worker`
--
ALTER TABLE `sell_worker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipments_description`
--
ALTER TABLE `equipments_description`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sell_item`
--
ALTER TABLE `sell_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sell_worker`
--
ALTER TABLE `sell_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
