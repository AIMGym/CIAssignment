-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2015 at 02:27 AM
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
`id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image1` varchar(1000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '/data/images/default.jpg',
  `image2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image3` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image4` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `caption`, `description`, `address`, `contact`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Vancouver', 'Vancouver location (main)', 'Price may vary depending on membership\r\nGreat location in the heart of Vancouver', '1425 Granville St.', '(604)555-0124', '/data/images/location1.gif', '/data/images/platinum3.jpg', '/data/images/platinum4.jpg', '/data/images/yoga2.jpg'),
(2, 'Surrey', 'Smallest location', 'Price may vary depending on membership\r\nGreat location in the heart of Surrey', '120 and 64th Ave.', '(604)555-5124', '/data/images/location2.jpg', '/data/images/platinum3.jpg', '/data/images/yoga3.jpg', '/data/images/personaltraining2.jpg'),
(3, 'Burnaby', 'Location expanding', 'Price may vary depending on membership\r\nGreat location in the heart of Burnaby', '1658 Willingdon Ave.', '(604)555-4825', '/data/images/location3.jpg', '/data/images/platinum3.jpg', '/data/images/martialarts1.jpg', '/data/images/martialarts2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE IF NOT EXISTS `memberships` (
`id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image1` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '/data/images/default.jpg',
  `image2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image3` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image4` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `caption`, `description`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Silver', 'Our cheapest Membership', 'This membership you will get to use all our weights area cardio area. \r\nAccess to all She’s FIT! locations and AIM Fitness locations (excluding AIM fitness Downtown Vancouver).\r\nUnlimited sun tanning\r\nOut-of-town guest privileges\r\n25% discount on selected retail (excluding clothing and Healthy Transformation Meal Plan)', '24.99', '/data/images/silver.jpg', '/data/images/silver1.jpg', '/data/images/silver2.jpg', '/data/images/silver3.jpg'),
(2, 'Gold', 'Best Value Membership', 'Use of Downtown Vancouver Location\r\n25% discount on bike rental rates @ AIM Seawall Bike Rentals (Open April to Oct 31 yearly)\r\nPlus all privileges under the SilverMembership.\r\nNo pool or sauna access.', '49.99', '/data/images/gold.jpg', '/data/images/gold1.jpg', '/data/images/gold2.jpg', '/data/images/gold3.jpg'),
(3, 'Platinum', 'Best Best Membership', 'Includes everything including pool, sona, laundry, track.\r\nUse of Downtown Vancouver Location\r\n25% discount on bike rental rates @ AIM Seawall Bike Rentals (Open April to Oct 31 yearly)\r\nAccess to all She’s FIT! locations and AIM Fitness locations \r\nUnlimited sun tanning\r\nOut-of-town guest privileges\r\n25% discount on selected retail (excluding clothing and Healthy Transformation Meal Plan)\r\nPlus all privileges under the Silver Membership.', '74.99', '/data/images/platinum.png', '/data/images/platinum1.png', '/data/images/platinum3.jpg', '/data/images/platinum4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
`id` int(11) NOT NULL,
  `name` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image1` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '/data/images/default.jpg',
  `image2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image3` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `image4` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `caption`, `description`, `date_added`, `location`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Personal Traning', 'Personal services tailored for your body', 'Fitness testing includes strength analysis, postural analysis, gait analysis, movement imbalances, body composition, and blood pressure.\r\nConsultation includes discussion of scores, norms, goal setting, educational material and an individualized exercise program.\r\nAll individuals who are involved in the group and individual training program must have a PAR-Q, Assumption of Risk form, and a Cardiovascular Health Screening Questionnaire on file before they are allowed to participate. These can be ', '2015-03-09 01:26:53', 'SURREY', '40.00', '/data/images/personaltraining1.jpg', '/data/images/personaltraining2.jpg', '/data/images/personaltraining3.jpg', '/data/images/personaltraining4.jpg'),
(2, 'Yoga', 'Yoga classes catering to your skill level', '<strong>Ashtanga Yoga:</strong>\r\nA type of yoga class that helps you to work on deeper stretching and modifications within each pose. It is a series of the core poses of yoga. This class will focus on correct alignment and pose positioning.\r\n<strong>Lunch Time Yoga:</strong>\r\nA forty minute quick and easy reset to a stressful day.\r\n<strong>Power Yoga:</strong>\r\nThis is Vinyasa to the extreme. This is a yoga class for those who want to really push their practice to the next level and experiment w', '2015-03-09 01:26:53', 'VANCOUVER / SURREY', '49.99', '/data/images/yoga1.jpg', '/data/images/yoga2.jpg', '/data/images/yoga3.jpg', '/data/images/yoga4.jpg'),
(3, 'AIM Gym Kung-fu', 'The always exciting martial arts program', 'This format combines various forms of martial arts and self defense moves with aerobics producing a great workout for the whole body.  Using a non-contact approach, learn how to throw a right cross, kick with purpose, or bob and weave in the ring. \r\n Hand wraps not required but may help the individual focus on hit spots and accuracy.', '2015-03-09 01:26:53', 'BURNABY / VANCOUVER', '29.99', '/data/images/martialarts1.jpg', '/data/images/martialarts2.jpg', '/data/images/martialarts3.jpg', '/data/images/martialarts4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
