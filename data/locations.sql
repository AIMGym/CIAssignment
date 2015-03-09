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
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image1` varchar(1000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '/data/images/default.jpg',
  `image2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image3` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image4` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `locations`(`name`, `caption`, `description`, `address`, `contact`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Vancouver', 'Vancouver location (main)', 'Price may vary depending on membership
Great location in the heart of Vancouver', '1425 Granville St.', '(604)555-0124', '/data/images/location1.gif', '/data/images/platinum3.jpg', '/data/images/platinum4.jpg', '/data/images/yoga2.jpg');

INSERT INTO `locations`(`name`, `caption`, `description`, `address`, `contact`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Surrey', 'Smallest location', 'Price may vary depending on membership
Great location in the heart of Surrey', '120 and 64th Ave.', '(604)555-5124', '/data/images/location2.jpg', '/data/images/platinum3.jpg', '/data/images/yoga3.jpg', '/data/images/personaltraining2.jpg');

INSERT INTO `locations`(`name`, `caption`, `description`, `address`, `contact`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Burnaby', 'Location expanding', 'Price may vary depending on membership
Great location in the heart of Burnaby', '1658 Willingdon Ave.', '(604)555-4825', '/data/images/location3.jpg', '/data/images/platinum3.jpg', '/data/images/martialarts1.jpg', '/data/images/martialarts2.jpg');