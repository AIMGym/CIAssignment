-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 10:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comp4711`
--

-- --------------------------------------------------------

--
-- Table structure for table `membersips`
--

CREATE TABLE IF NOT EXISTS `memberships` (
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image1` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '/data/images/default.jpg',
  `image2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image3` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image4` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `memberships`(`name`, `caption`, `description`, `price`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Silver', 'Our cheapest Membership', 'This membership you will get to use all our weights area cardio area. 
Access to all She’s FIT! locations and AIM Fitness locations (excluding AIM fitness Downtown Vancouver).
Unlimited sun tanning
Out-of-town guest privileges
25% discount on selected retail (excluding clothing and Healthy Transformation Meal Plan)', '24.99', '/data/images/silver.jpg', '/data/images/silver1.jpg', '/data/images/silver2.jpg', '/data/images/silver3.jpg');

INSERT INTO `memberships`(`name`, `caption`, `description`, `price`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Gold', 'Best Value Membership', 'Use of Downtown Vancouver Location
25% discount on bike rental rates @ AIM Seawall Bike Rentals (Open April to Oct 31 yearly)
Plus all privileges under the SilverMembership.
No pool or sauna access.', '49.99', '/data/images/gold.jpg', '/data/images/gold1.jpg', '/data/images/gold2.jpg', '/data/images/gold3.jpg');

INSERT INTO `memberships`(`name`, `caption`, `description`, `price`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Platinum', 'Best Best Membership', 'Includes everything including pool, sona, laundry, track.
Use of Downtown Vancouver Location
25% discount on bike rental rates @ AIM Seawall Bike Rentals (Open April to Oct 31 yearly)
Access to all She’s FIT! locations and AIM Fitness locations 
Unlimited sun tanning
Out-of-town guest privileges
25% discount on selected retail (excluding clothing and Healthy Transformation Meal Plan)
Plus all privileges under the Silver Membership.', '74.99', '/data/images/platinum.png', '/data/images/platinum1.png', '/data/images/platinum3.jpg', '/data/images/platinum4.jpg');