# JaPack Database Setup and Application Guide

## Overview
This document outlines the prerequisites and setup instructions for running the JaPack application. The application requires a database setup to function correctly.

### Company Description
JaPack is a courier service company specializing in the transportation of a wide range of items both within Jamaica and internationally. The company offers customers the ability to track their packages in real time, from the point of collection to final delivery, ensuring transparency and peace of mind throughout the process.

### Mission Statement
JaPack's mission is to deliver a safe, reliable, and stress-free solution for transporting items both within Jamaica and internationally, offering customers peace of mind every step of the way.

### Vision Statement
Our vision is to be the premier provider of seamless, door-to-door delivery solutions, setting the standard for reliability and efficiency when guaranteeing customer satisfaction in the courier industry.

### Technology Used
- PHP
- HTML
- CSS

## Instructions

### Step 1: Database Setup
1. Ensure you have a compatible database management system (e.g., MySQL) installed and running on your system.
2. Open your database management tool (e.g., MySQL Workbench, phpMyAdmin, or a terminal with MySQL client).
3. Import the provided SQL file:
   - Locate the file named `japackdb - stock.sql`.
   - Use the tool to execute the SQL script. This will create the necessary database schema and populate it with the required data.

### Step 2: Application Setup
1. Ensure you have a local server environment set up (e.g., XAMPP, WAMP, or similar).
2. Place the application files in the server's document root (e.g., `htdocs` for XAMPP).
3. Update the database configuration file in the application (if necessary) to match your database credentials (e.g., host, username, password, database name).

### Step 3: Running the Application
1. Start your local server.
2. Access the application through your web browser by navigating to `http://localhost/your_project_directory`.

### Important Notes
- The `japackdb - stock.sql` file **must** be executed in your database before running the application.
- Verify your server environment supports the technologies used (PHP, HTML, CSS).
- Ensure your database connection details are correct to avoid errors during runtime.

By following the above steps, you will successfully set up and run the JaPack application.

Video Presentation link- https://drive.google.com/file/d/1L7xV-tY0TwEYs7qHPQihMBTHIShWAS3b/view?usp=sharing


japackdb - stock.sql FILE

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Dec 15, 2024 at 12:57 AM
-- Server version: 9.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `japackdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `packageupdater`
--

CREATE TABLE `packageupdater` (
  `id` bigint NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `number_of_items` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `package_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `package_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `package_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_date` datetime(6) DEFAULT NULL,
  `package_status_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_status`
--

CREATE TABLE `package_status` (
  `id` bigint NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_package_updater_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleid` int NOT NULL,
  `rolename` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleid`, `rolename`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `roleid` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `age`, `contact`, `fullname`, `gender`, `password`, `email`, `address`, `roleid`) VALUES
(1, '22', 'gmitch', 'Gavin Mitchell', 'Male', 'Password123@', 'gmitchell21j@vtdi.edu.jm', '3d highway', 1),
(4, '32', '8602417', 'Gavin Mitchell', 'Male', '$2y$10$eqFvSDq5KFAKcml7nGLtmutGH/suaORt43Pfo8ab0S6OJIej7LfDm', 'vforvendetta764@gmail.com', 'Farm District', 1),
(34, '25', '8762655690', 'Gavin Mitchell', 'Male', '$2y$10$JCMEd1J7dTX7B8YwdJUkWedcAYednIIrUowEwizfrJbZDJ6roWAFi', 'gavinmitchell148@gmail.com', 'Farm District', 1),
(35, '43', '876860890', 'Tyreke Lewin', 'Male', '$2y$10$cMoS6XXywRGCekh9AAcTcuHZ7VlyDIyMrElaINhTmHv2qSgMANLP6', 'lewintyreke@gmail.com', '14 Mandela Way', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_package`
--

CREATE TABLE `user_package` (
  `id` bigint NOT NULL,
  `createdOn` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `numberOfItems` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `packageDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `packageStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `packageType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `packageValue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `seller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updatedOn` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  `dropoffaddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pickupaddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `customer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_package`
--

INSERT INTO `user_package` (`id`, `createdOn`, `numberOfItems`, `packageDescription`, `packageStatus`, `packageType`, `packageValue`, `seller`, `updatedOn`, `dropoffaddress`, `pickupaddress`, `user_id`, `customer_id`) VALUES
(1, '2024-12-10 07:51:57.441876', '10', 'Samsung Galaxy S25', 'Pending', 'Phone', '$1250', 'James', '2024-12-10 07:51:57.441876', '33 Jump Street', '15 Harbour Avenue', NULL, NULL),
(8, '2024-12-14 16:13:33.178276', '3', 'LG Phone', 'Pending', 'Phone', '$1,000', 'Blake', '2024-12-14 16:13:33.178276', '123 Hea Street', '145 pickup street', NULL, NULL),
(12, '2024-12-15 00:26:38.953689', '3', 'LG Phone', 'Pending', 'Phone', '$1,000', 'Blake', '2024-12-15 00:26:38.953689', '123 Hea Street', '145 pickup street', NULL, NULL),
(13, '2024-12-15 00:50:46.429325', '1', 'A box household items', 'Pending', 'Box of Items', '5000', 'John Brown', '2024-12-15 00:50:46.429325', '24 Perth Road, JM', '13 King street, JM', NULL, NULL),
(14, '2024-12-15 00:51:41.627562', '3', 'LG Phone', 'Pending', 'Phone', '$1,000', 'Blake', '2024-12-15 00:51:41.627562', '123 Hea Street', '145 pickup street', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packageupdater`
--
ALTER TABLE `packageupdater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_status`
--
ALTER TABLE `package_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK80ung3ubmh4pakh38mcf631l6` (`admin_package_updater_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleid_idx` (`roleid`);

--
-- Indexes for table `user_package`
--
ALTER TABLE `user_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK23wrg2jabxivswndr07og5q0y` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packageupdater`
--
ALTER TABLE `packageupdater`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_status`
--
ALTER TABLE `package_status`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_package`
--
ALTER TABLE `user_package`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_status`
--
ALTER TABLE `package_status`
  ADD CONSTRAINT `FK80ung3ubmh4pakh38mcf631l6` FOREIGN KEY (`admin_package_updater_id`) REFERENCES `packageupdater` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `roleid` FOREIGN KEY (`roleid`) REFERENCES `roles` (`roleid`);

--
-- Constraints for table `user_package`
--
ALTER TABLE `user_package`
  ADD CONSTRAINT `FK23wrg2jabxivswndr07og5q0y` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

