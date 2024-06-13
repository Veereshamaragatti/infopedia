-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 04:09 PM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(1, 'veeresh', 'veeresh@gmail.com', 'this website is good'),
(2, 'gajanand', 'gajanand@gmail.com', 'good'),
(3, 'chandru', 'chandru@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `description`, `image`) VALUES
(17, 'Soil Testing in 5 Minutes: 2 Scientists Innovate Paper-Based Device To Help Farmers', 'Agriculture', 'Dr Rajul Patkar and Dr Mukul Singh developed NutriSens, a soil health testing device that tests the soil for six parameters and gives results in a matter of minutes', 'product/1.jpg'),
(18, 'How to Grow Apples in Hot Climate? Award-Winning Farmers Reap Success With Unique Variety', 'Agriculture', 'Maharashtra farmer Kakasaheb Sawant grows the HRMN-99 apple variety, which was first conceived by Himachal farmer Hariman Sharma. Here’s how both farmers have been able to cultivate this low-chill variety.', 'product/2.png'),
(19, 'Engineer Uses Zero-Waste Farming to Make Products With All Parts of Coconuts, Earns Lakhs', 'Agriculture', 'Engineer Madhu Kargund was inspired by his farming family to quit his job and launch Tengin, a startup that uses zero waste farming to turn coconuts into a host of products, earning profits worth lakhs.', 'product/3.jpg'),
(20, 'School Dropout Farmer’s Innovation To Protect His Crops From Insects Wins Rs 5 Lakh', 'Agriculture', 'Karnataka farmer Karibasappa MG innovated a solar trap to keep insects away from him crops. He shares how this won him Infosys Foundation’s Aarohan Social Innovation Award and how life has changed since.', 'product/4.jpg'),
(21, 'BLR Airport launches beta version of DigiYatra App', 'Technology', 'Bangalore International Airport Ltd (BIAL), operator of BLR Airport, has been pioneering the DigiYatra effort from its early concept days and pilot trials have been held at the airport since January 2017.\r\nThe beta version of DigiYatra App was successfull', 'product/10.jpg'),
(22, 'India has the 2nd largest gamer base in the world- reveals Niko Partners in their latest report on the Indian gaming market', 'Technology', 'With a user base of 396.4 million, India has the second largest population of gamers in the world, right behind mainland China. Find out all about the latest trends in the gaming sector of India including revenue generated, platforms used, and more.', 'product/11.jpg'),
(23, 'Trio’s ‘Uber for Healthcare’ Aims to Make Hospital Visits Easier in India', 'Health Care', 'Kerala-based startup ‘Mykare Health’ was founded by Senu Sam, Rahmathulla T M, and Joash Philipose with the aim of building India’s largest affordable healthcare network.', 'product/22.jpg'),
(24, 'Doctor Returned From The US To Build ISO-Certified Made-In-India Robot Making Surgeries Cheaper', 'Health Care', 'After seeing a patient struggle to afford surgery in India, Dr Sudhir Srivastava decided to pause his practice. He invested his savings to develop a made-in-India surgical robot SSI Mantra, which has made surgeries cheaper in India.', 'product/23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `name`, `password`) VALUES
('veeresh', 'Veeresh.B.Amaragatti', '202cb962ac59075b964b07152d234b70'),
('akash', 'akash.reddy', '202cb962ac59075b964b07152d234b70'),
('gaja', 'gajanand', '202cb962ac59075b964b07152d234b70'),
('chandru', 'chandru', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
