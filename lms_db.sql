-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2020 at 12:36 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text COLLATE utf8_bin NOT NULL,
  `course_desc` text COLLATE utf8_bin NOT NULL,
  `course_author` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_img` text COLLATE utf8_bin NOT NULL,
  `course_duration` text COLLATE utf8_bin NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(3, 'free hand workouts', 'Not going to the gym? No sweat! You can stay ship-shape minus the equipment and fuss, using just your bare hands. Freehand exercises that can be done on just a mat or in your office cubicle are a must-try. Here are a fewâ€¦', 'mr. NIkhil  singh', '../image/courseimage/free-hand.jpg', '30 days', 2000, 299),
(4, 'yoga ', 'Yoga is a famous exercise that centers around breathing, quality, and adaptability. Rehearsing yoga may give numerous physical and psychological wellness benefits.\r\n\r\nSomewhere in the range of 2012 and 2017, the level of individuals in the United States rehearsing yoga expanded from 9.5% to 14.3% in grown-ups and from 3.1% to 8.4% in youngsters.', 'mr. NIkhil  singh', '../image/courseimage/yoga.jpg', '30 days', 2000, 299),
(5, 'dumball', 'Give a man a pair of dumbbells, and he can crank out a few sets of curls and bulk up his biceps. But give a man a pair of dumbbells and a plan, and he can change his entire body in a month.', 'mr. NIkhil  singh', '../image/courseimage/dumball.jpg', '30 days', 2000, 299),
(6, 'Resistance band workout', 'Resistance bands are cheap and effective for a variety of workouts â€“ probably far more effective than you might think. While those looking to add serious bulk might not get all they need from resistance bands, they are a great tool for increasing strength and adding some muscle.', 'mr. singh', '../image/courseimage/resistance.jpg', '30 days', 2000, 299),
(7, 'stretching ', 'Stretching is a form of physical exercise in which a specific muscle or tendon (or muscle group) is deliberately flexed or stretched in order to improve the muscle''s felt elasticity and achieve comfortable muscle tone. The result is a feeling of increased muscle control, flexibility, and range of motion', 'mr Nikhil singh', '../image/courseimage/stretchin.jpg', '30 days', 1000, 199),
(8, 'home core workouts', 'A strong core is an invaluable asset. For starters, a strong and stable midsection can give you better balance and better posture, and it can even help reduce back pain. I find myself writing and saying this over and over again, because it''s so true: Every move you make, both in daily life and during a workout, will be easier if your core is showing up and doing its job. It really is the center of all your movement.', 'mr. NIkhil  singh', '..\\image\\courseimage\\plank.jpg', '30 days', 2000, 299);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE IF NOT EXISTS `courseorder` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL,
  `respmsg` text COLLATE utf8_bin NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` date NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `lesson_id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_name` text COLLATE utf8_bin NOT NULL,
  `lesson_desc` text COLLATE utf8_bin NOT NULL,
  `lesson_link` text COLLATE utf8_bin NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(23, 'resistance band', 'this is a type of workout which need a resistance band.', '', 0, ''),
(24, 'introduction', 'kdfjkdd\r\nfddf\r\ndfdf', 'C:\\wamp\\www\\yoga.php', 4, 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_occ` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_img` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=41 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_occ`, `user_img`) VALUES
(17, 'nikhil', 'nikhil@gmail.com', 'nikhil', 'web dev', '../image/user/resistance.jpg'),
(18, 'singh', 'singh@gmail.com', 'singh', '', ''),
(19, 'sonam', 'sonam@gmail.com', 'sonam', 'web dev', '../image/user/free-hand.jpg'),
(22, 'raj', 'raj@gmail.com', 'raj', 'web dev', '../image/user/resistance.jpg'),
(24, 'gunjan', 'gunjan@gmail', 'gunjan', '', ''),
(26, 'ranjan kumar', 'ranjak@mail.om', 'ranjan', 'web dev', ''),
(27, 'ali', 'ali@gmail.com', 'ali', '', ''),
(28, 'gunja', 'gunja@gmail.com', 'gunja', '', ''),
(35, '2454', 'rupesh@gmail.com', 'rupesh', '', ''),
(36, 'sourab', 'sourab@gmail.com', 'fdf', '', ''),
(37, 'sourab', 'Sourab@gmail.com', 'fdsdf', '', ''),
(40, 'nick', 'nikhil1234@gmail.com', 'dfdfdf', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
