-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 06:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--
CREATE DATABASE IF NOT EXISTS `web2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `web2`;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `banner_id` int(3) NOT NULL,
  `banner_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `banner_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_title`, `banner_img`, `banner_type`) VALUES
(1, 'Sky1', 'images/banners/56982.jpg', 'home'),
(2, 'Sky2', 'images/banners/13302.jpg', 'home'),
(3, 'Sky3', 'images/banners/20448.jpg', 'home'),
(4, 'Rooms Listing', 'images/banners/90245.jpg', 'category'),
(5, 'Pro Golf Club', 'images/banners/32674.jpg', 'category');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `category_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category_type` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `category_image` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `category_description`, `category_type`, `category_image`) VALUES
('C02', 'Round Cove Suite', 'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat', 'Rooms Listing', 'images/categories/47018.jpg'),
('C03', 'Signature Water View', 'Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.', 'Rooms Listing', 'images/categories/73811.jpg'),
('C04', 'Signature Water Side', 'Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.', 'Rooms Listing', 'images/categories/42868.jpg'),
('C05', 'Signature Junior Suite', 'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat', 'Rooms Listing', 'images/categories/35308.jpg'),
('C01', 'Rooms Listing', 'Salutantibus vitae elit libero, a pharetra augue. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Ut enim ad minim veniam, quis nostrud exercitation. Unam incolunt Belgae, aliam Aquitani, tertiam. Unam incolunt Belgae, aliam Aquitani, tertiam. Tityre, tu patulae recubans sub tegmine fagi dolor. Curabitur est gravida.', 'Rooms Listing', 'images/categories/16218.jpg'),
('C06', 'Tennis Courts', 'Ut enim ad minim veniam, quis nostrud exercitation. Ut enim ad minim veniam, quis nostrud exercitation. Prima luce, cum quibus mons aliud consensu ab eo. Quam temere in vitiis, legem sancimus haerentia. Nihil hic munitissimus habendi senatus locus, nihil horum? Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', 'Pro Golf Club', 'images/categories/62849.jpg'),
('C07', 'Dream Wedding', 'Phasellus laoreet lorem vel dolor tempus vehicula. A communi observantia non est recedendum. Ut enim ad minim veniam, quis nostrud exercitation. Excepteur sint obcaecat cupiditat non proident.', 'Pro Golf Club', 'images/categories/38641.jpg'),
('C08', 'Events Team', 'Phasellus laoreet lorem vel dolor tempus vehicula. A communi observantia non est recedendum. Ut enim ad minim veniam, quis nostrud exercitation. Excepteur sint obcaecat cupiditat non proident.', 'Pro Golf Club', 'images/categories/20217.jpg'),
('C09', 'Meeting', 'Phasellus laoreet lorem vel dolor tempus vehicula. A communi observantia non est recedendum. Ut enim ad minim veniam, quis nostrud exercitation. Excepteur sint obcaecat cupiditat non proident.', 'Pro Golf Club', 'images/categories/30257.jpg'),
('C10', 'Dream', 'Phasellus laoreet lorem vel dolor tempus vehicula. A communi observantia non est recedendum. Ut enim ad minim veniam, quis nostrud exercitation. Excepteur sint obcaecat cupiditat non proident.', 'Pro Golf Club', 'images/categories/71858.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `detail_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `detail_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `detail_brief_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detail_full_description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `detail_image` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`detail_id`, `detail_title`, `detail_brief_description`, `detail_full_description`, `detail_image`) VALUES
('DT01', 'Round Cove Suite', 'Quisque ut dolor gravida, placerat libero vel, euismod. Salutantibus vitae elit libero, a pharetra augue. Paullum deliquit, ponderibus modulisque suis ratio utitur.', 'Prima luce, cum quibus mons aliud consensu ab eo. Praeterea iter est quasdam res quas ex communi. Etiam habebis sem dicantur magna mollis euismod. Ut enim ad minim veniam, quis nostrud exercitation. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Contra legem facit qui id facit. Cum ceteris in veneratione tui montes, nascetur mus. Non equidem invideo, miror magis posuere velit aliquet.', 'images/detail/24951.jpg'),
('DT02', 'Signature Water View', 'Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.', 'Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.', 'images/detail/44832.jpg'),
('DT03', 'Signature Water Side', 'Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.', 'Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.Phasellus laoreet lorem vel dolor tempus vehicula. Integer legentibus erat a ante historiarum dapibus. Plura mihi bona sunt, inclinet, amari petere vellent. Quae vero auctorem tractata ab fiducia dicuntur.', 'images/detail/88270.jpg'),
('DT04', 'Signature Junior Suite', 'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat', 'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat. Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat. Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat', 'images/detail/78295.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `menu_id` varchar(10) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_level` int(2) NOT NULL,
  `menu_parents` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_title`, `menu_level`, `menu_parents`) VALUES
('M01', 'Rooms Listing', 1, ''),
('M02', 'Pro Golf Club', 1, ''),
('M03', 'Swimming Pools', 1, ''),
('M04', 'Tennis Courts', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE `prices` (
  `price_id` int(3) NOT NULL,
  `price_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_rate` int(3) NOT NULL,
  `price_type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `price_title`, `price_rate`, `price_type`) VALUES
(1, 'Round Cove Suite', 180, 'Rooms Listing'),
(2, 'Signature Water View', 160, 'Rooms Listing'),
(3, 'Signature Water Side', 140, 'Rooms Listing'),
(4, 'Signature Junior Suite', 120, 'Rooms Listing'),
(5, 'English & Continental Breakfast', 10, 'Rooms Listing'),
(6, '24h Wifi Access', 10, 'Rooms Listing');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `reservation_id` varchar(10) NOT NULL,
  `reservation_name` varchar(50) NOT NULL,
  `reservation_email` varchar(50) NOT NULL,
  `reservation_arrival_date` date NOT NULL,
  `reservation_departure_date` date NOT NULL,
  `reservation_room_type` varchar(50) NOT NULL,
  `reservation_number_people` int(10) NOT NULL,
  `reservation_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
