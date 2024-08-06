-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 08:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starwhbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `barbq`
--

CREATE TABLE `barbq` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barbq`
--

INSERT INTO `barbq` (`id`, `dish_name`, `price`) VALUES
(1, 'Sekh Kabab', 120.00),
(2, 'Reshmi Kabab', 150.00),
(3, 'Tikka Boti', 140.00),
(4, 'Roast', 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_start_time` time DEFAULT NULL,
  `event_end_time` time DEFAULT NULL,
  `event_purpose` text DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `cnic` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `hall_selection` varchar(255) DEFAULT NULL,
  `mains` text DEFAULT NULL,
  `rice` text DEFAULT NULL,
  `barbq` text DEFAULT NULL,
  `sweet_dishes` text DEFAULT NULL,
  `salad` text DEFAULT NULL,
  `naan_roti` text DEFAULT NULL,
  `raita` text DEFAULT NULL,
  `drinks` text DEFAULT NULL,
  `extras` text DEFAULT NULL,
  `ac_charges` decimal(10,2) DEFAULT NULL,
  `stage_decoration` decimal(10,2) DEFAULT NULL,
  `no_of_guests` int(11) DEFAULT NULL,
  `dj` decimal(10,2) DEFAULT NULL,
  `photography` decimal(10,2) DEFAULT NULL,
  `service_charges` decimal(10,2) DEFAULT NULL,
  `other_charges` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `remaining_balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_date`, `event_date`, `event_start_time`, `event_end_time`, `event_purpose`, `customer_name`, `mobile_number`, `cnic`, `address`, `hall_selection`, `mains`, `rice`, `barbq`, `sweet_dishes`, `salad`, `naan_roti`, `raita`, `drinks`, `extras`, `ac_charges`, `stage_decoration`, `no_of_guests`, `dj`, `photography`, `service_charges`, `other_charges`, `total_amount`, `paid_amount`, `remaining_balance`) VALUES
(27, '2024-05-21', '2024-05-14', '00:00:00', '00:00:00', 'Shadi', 'Usman Masood Peerzada', '03005078036', '3130483539255', 'House no 41 B , paragon ideal homes bahawal pur', 'Basic Hall', 'Chicken Qorma, Karahi', 'Plain Rice, Fried Rice', 'Sekh Kabab, Reshmi Kabab', 'Gulab Jamun, Jalebi', 'Green Salad', 'Naan, Roti', 'Mint Raita, Zeera Raita', 'Soft Drinks', 'Channa Chat', 8000.00, 8000.00, 100, 8000.00, 8000.00, 8000.00, 10008000.00, 10127200.00, 8000.00, 10119200.00),
(28, '2024-05-09', '2024-05-15', '23:29:00', '12:29:00', 'Mahendi', 'Zeeshan Masood Peerzada', '03005078036', '3130483539255', 'House no 41 B , paragon ideal homes bahawal pur', 'Deluxe Hall', 'Chicken Qorma', 'Plain Rice', 'Sekh Kabab', 'Gulab Jamun', 'Green Salad', 'Naan', 'Mint Raita', 'Soft Drinks', 'Channa Chat', 500.00, 500.00, 11, 500.00, 1000.00, 24.00, 10008000.00, 10015254.00, 12000.00, 10003254.00),
(29, '2024-05-02', '2024-05-09', '21:07:00', '13:04:00', 'sdsadsa', 'Faran Masood Peerzada', '03005078036', '3130483539255', 'House no 41 B , paragon ideal homes bahawal pur', 'Basic Hall', 'Chicken Qorma', 'Plain Rice', 'Sekh Kabab', 'Jalebi', 'Russian Salad', 'Roti', 'Zeera Raita', 'Tea', 'Channa Chat', 500.00, 100.00, 4, 23432.00, 34233.00, 24255.00, 42245.00, 126605.00, 500.00, 126105.00);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `drink_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `drink_name`, `price`) VALUES
(1, 'Soft Drinks', 30.00),
(2, 'Lassi', 40.00),
(3, 'Tea', 20.00),
(4, 'Green Tea', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` int(11) NOT NULL,
  `extra_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `extra_name`, `price`) VALUES
(1, 'Channa Chat', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `hall_name` varchar(50) DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`hall_name`, `capacity`, `price`) VALUES
('Basic Hall', 200, 55000),
('Standard Hall', 500, 85000),
('Premium Hall', 1500, 115000),
('Deluxe Hall', 2500, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `dish_name`, `price`) VALUES
(1, 'Chicken Qorma', 10.00),
(2, 'Karahi', 12.00),
(3, 'White Chicken', 13.00),
(4, 'Mutton Qorma', 15.00),
(5, 'Mutton Badami Korma', 18.00),
(6, 'Nargisi Kofta', 21.00),
(7, 'Pasta', 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `naanroti`
--

CREATE TABLE `naanroti` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `naanroti`
--

INSERT INTO `naanroti` (`id`, `dish_name`, `price`) VALUES
(1, 'Naan', 20.00),
(2, 'Roti', 10.00),
(3, 'Paratha', 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `raita`
--

CREATE TABLE `raita` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raita`
--

INSERT INTO `raita` (`id`, `dish_name`, `price`) VALUES
(1, 'Mint Raita', 40.00),
(2, 'Zeera Raita', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`id`, `dish_name`, `price`) VALUES
(1, 'Plain Rice', 50.00),
(2, 'Fried Rice', 70.00),
(3, 'Chicken Pulao', 100.00),
(4, 'Vegetable Biryani', 90.00),
(5, 'Biryani', 120.00);

-- --------------------------------------------------------

--
-- Table structure for table `salad`
--

CREATE TABLE `salad` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salad`
--

INSERT INTO `salad` (`id`, `dish_name`, `price`) VALUES
(1, 'Green Salad', 50.00),
(2, 'Russian Salad', 80.00),
(3, 'Fruit Salad', 70.00);

-- --------------------------------------------------------

--
-- Table structure for table `sweetdishes`
--

CREATE TABLE `sweetdishes` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sweetdishes`
--

INSERT INTO `sweetdishes` (`id`, `dish_name`, `price`) VALUES
(1, 'Gulab Jamun', 60.00),
(2, 'Jalebi', 70.00),
(3, 'Kheer', 80.00),
(4, 'Gajar Halwa', 90.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'Bakhtawariqbald@gmail.com', '$2y$10$aVrKhOPqjQ3n7KK93ZeBqugHKZLlxCUGQhPflxPzat52KXTuimA62'),
(5, 'admin', '$2y$10$AhPsPkOI53qZteuBGwjNAO9Bk2cy.EF4LsE6iR//ibZMTwXRrklde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barbq`
--
ALTER TABLE `barbq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naanroti`
--
ALTER TABLE `naanroti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raita`
--
ALTER TABLE `raita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salad`
--
ALTER TABLE `salad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweetdishes`
--
ALTER TABLE `sweetdishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barbq`
--
ALTER TABLE `barbq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `naanroti`
--
ALTER TABLE `naanroti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `raita`
--
ALTER TABLE `raita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salad`
--
ALTER TABLE `salad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sweetdishes`
--
ALTER TABLE `sweetdishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
