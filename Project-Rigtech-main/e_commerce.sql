-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 11:18 AM
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
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `f_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `presentaddress` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `confirmpassword` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `f_name`, `lastname`, `username`, `email`, `telephone`, `dob`, `gender`, `address`, `presentaddress`, `city`, `country`, `region`, `pass`, `confirmpassword`) VALUES
(1, 'muhammad', '', '', 'nazmul.tanveer@gmail.com', '01778942272', '1996-09-30', 'male', 'bashundhara r/a', 'chawk', 'chattogram', 'Bd', 'Bangladesh', '', ''),
(2, 'hasan', 'tanveer', 'hasant', 'nazmul@gmail.com', '01980310368', '2020-05-05', 'male', 'ra', 'chawk', 'dhk', 'bd', 'bd', '1234', 'Admin!@#!');

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `u_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admi`
--

INSERT INTO `admi` (`u_id`, `username`, `password`) VALUES
(1, 'nasif', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cus`
--

CREATE TABLE `cus` (
  `u_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cus`
--

INSERT INTO `cus` (`u_id`, `username`, `password`) VALUES
(1, 'mahi', '121');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) NOT NULL,
  `p_price` double NOT NULL,
  `p_quantity` int(50) NOT NULL,
  `p_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_title`, `cat_id`, `p_price`, `p_quantity`, `p_description`, `short_desc`, `p_image`) VALUES
(1, 'Acer Aspire 3 A315-23 AMD Athlon Silver 3050U 15.6', 1, 38000, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada mauris hendrerit, viverra purus id, condimentum urna. Suspendisse potenti. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus', 'Model: Acer Aspire 3 A315-23\r\nAMD Athlon Silver 30', 'http://placehold.it'),
(2, 'Dell Vostro 14 3405 Ryzen 3 3250U 14\" HD Laptop wi', 1, 40000, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada mauris hendrerit, viverra purus id, condimentum urna. Suspendisse potenti. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus', 'Model: Vostro 14 3405\r\nRyzen 3 3250U (4MB CPU Cach', 'http://placehold.it'),
(3, 'MSI Modern 14 B10MW Core i3 10th Gen 14\" Full HD L', 1, 49000, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada mauris hendrerit, viverra purus id, condimentum urna. Suspendisse potenti. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus', 'Model: MSI Modern 14 B10MW\r\nIntel Core i3 10110U P', 'http://placehold.it');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `username`, `password`) VALUES
(1, 'nazmul', '1234'),
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `username`, `city`, `address`, `email`, `password`) VALUES
(1, '', '', '', '', '', 'nazmul@gmail.com', '123'),
(2, '', '', '', '', '', 'hasan@gmail.com', '456'),
(3, 'muhammad', 'nazmul', 'nht', 'dhaka', 'bashundhara r/a', 'nazmul.tanveernad@gmail.com', 'Admin!@#11'),
(4, 'md', 'rakib', 'rt', 'chattogram', 'chawk', 'nazmul.tanveer@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
