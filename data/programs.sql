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
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date_added` TIMESTAMP NOT NULL DEFAULT NOW(),
  `location` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image1` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '/data/images/default.jpg',
  `image2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image3` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `image4` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO `programs`(`name`, `caption`, `description`, `location`, `price`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Personal Traning', 'Personal services tailored for your body', 'Fitness testing includes strength analysis, postural analysis, gait analysis, movement imbalances, body composition, and blood pressure.
Consultation includes discussion of scores, norms, goal setting, educational material and an individualized exercise program.
All individuals who are involved in the group and individual training program must have a PAR-Q, Assumption of Risk form, and a Cardiovascular Health Screening Questionnaire on file before they are allowed to participate. These can be completed at the first meeting with the personal trainer.
Individual features of each component will depend upon the needs of the each client.', 'SURREY', '40.0', '/data/images/personaltraining1.jpg', '/data/images/personaltraining2.jpg', '/data/images/personaltraining3.jpg', '/data/images/personaltraining4.jpg');

INSERT INTO `programs`(`name`, `caption`, `description`, `location`, `price`, `image1`, `image2`, `image3`, `image4`)
VALUES ('Yoga', 'Yoga classes catering to your skill level', '<strong>Ashtanga Yoga:</strong>
A type of yoga class that helps you to work on deeper stretching and modifications within each pose. It is a series of the core poses of yoga. This class will focus on correct alignment and pose positioning.
<strong>Lunch Time Yoga:</strong>
A forty minute quick and easy reset to a stressful day.
<strong>Power Yoga:</strong>
This is Vinyasa to the extreme. This is a yoga class for those who want to really push their practice to the next level and experiment with new poses.
<strong>Relaxation Yoga:</strong>
Take a full hour to unwind, stretch, settle, let go, and meditate.
<strong>Slow Flow Yoga:</strong>
Slow Flow Yoga is aimed at helping participants get in touch with their bodies and feel what is going on. Participants can utilize this class''s approach to increase their energy and quality of life. Each session is carefully sequenced to creating an energized effect through a combination of posture,
breath work, visualization, and meditation.', 'VANCOUVER / SURREY', '49.99', '/data/images/yoga1.jpg', '/data/images/yoga2.jpg', '/data/images/yoga3.jpg', '/data/images/yoga4.jpg');

INSERT INTO `programs`(`name`, `caption`, `description`, `location`, `price`, `image1`, `image2`, `image3`, `image4`)
VALUES ('AIM Gym Kung-fu', 'The always exciting martial arts program', 'This format combines various forms of martial arts and self defense moves with aerobics producing a great workout for the whole body.  Using a non-contact approach, learn how to throw a right cross, kick with purpose, or bob and weave in the ring. 
 Hand wraps not required but may help the individual focus on hit spots and accuracy.', 'BURNABY / VANCOUVER', '29.99', '/data/images/martialarts1.jpg', '/data/images/martialarts2.jpg', '/data/images/martialarts3.jpg', '/data/images/martialarts4.jpg');
