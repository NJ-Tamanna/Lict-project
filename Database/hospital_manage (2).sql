-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2018 at 01:57 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cell` varchar(25) DEFAULT NULL,
  `created` datetime(6) DEFAULT NULL,
  `modified` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `cell`, `created`, `modified`) VALUES
(7, 'Bigboss', 'boss@gmail.com', '$2a$10$AiM22walFri1wf3kIV461.LknoV9Umk0WAcds9qSFWC2qSvpHV9lu', '313546', '2018-01-17 07:30:25.000000', '2018-01-24 03:31:22.000000'),
(9, 'boss1', 'boss1@gmail.com', '$2a$10$nSNg529Y9x1vm2qhW9CLpetVwD1YVJmnnvGTILRCQGMuQ.vgWsEGu', '234234', '2018-01-23 14:21:42.000000', '2018-01-23 14:21:42.000000'),
(11, 'bosst', 'bosst@gmail.com', '$2a$10$GIqb9Vhxw.Svgn3FYWB0Zey6LX8dUuNzP6zLQFolL/3eQQ7I.7Wre', '2342', '2018-01-24 05:02:55.000000', '2018-01-24 05:02:55.000000');

--
-- Triggers `admin`
--
DROP TRIGGER IF EXISTS `admin_after_insert_trig`;
DELIMITER $$
CREATE TRIGGER `admin_after_insert_trig` AFTER INSERT ON `admin` FOR EACH ROW insert into users (id, email, password) values (new.id, new.email, new.password)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `admin_after_update_trig`;
DELIMITER $$
CREATE TRIGGER `admin_after_update_trig` AFTER UPDATE ON `admin` FOR EACH ROW UPDATE users SET email=new.email, password=new.password Where id=new.id
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `admin_before_delete_trig`;
DELIMITER $$
CREATE TRIGGER `admin_before_delete_trig` BEFORE DELETE ON `admin` FOR EACH ROW DELETE FROM users Where id=old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `appoint_date` datetime(6) NOT NULL,
  `created` datetime(6) DEFAULT NULL,
  `modified` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doctor_id` (`doctor_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `patient_id`, `appoint_date`, `created`, `modified`) VALUES
(13, 100001, 300000001, '2018-04-19 08:54:00.000000', '2018-01-19 08:54:18.000000', '2018-01-19 08:54:18.000000'),
(14, 100001, 300000001, '2018-05-19 08:56:00.000000', '2018-01-19 08:56:39.000000', '2018-01-19 08:56:39.000000'),
(19, 100008, 300000003, '2018-02-24 00:00:00.000000', '2018-01-24 02:18:38.000000', '2018-01-24 03:05:55.000000'),
(20, 100001, 300000003, '2019-11-16 00:00:00.000000', '2018-01-24 02:19:31.000000', '2018-01-24 02:19:31.000000'),
(22, 100003, 300000003, '2019-04-11 00:00:00.000000', '2018-01-24 03:15:16.000000', '2018-01-24 03:15:16.000000'),
(23, 100008, 300000001, '2018-05-24 00:00:00.000000', '2018-01-24 07:40:16.000000', '2018-01-24 07:40:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cell` varchar(25) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `daysInWeek` int(2) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) NOT NULL,
  `created` datetime(6) DEFAULT NULL,
  `modified` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100012 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `password`, `cell`, `address`, `specialist`, `daysInWeek`, `photo`, `photo_dir`, `created`, `modified`) VALUES
(100001, 'janina', 'janina@janina.com', '$2a$10$zF64CrPIdFBdFUG6ygLn1OBYtoywbveMqxQb1.z06M1WM1zEOzrQS', '01511000000', 'janina', 'janina', 4, 'member2.jpg', '100001', NULL, '2018-01-24 17:57:11.000000'),
(100003, 'j1', 'j1@g.com', '$2a$10$G93A6SczgE57sTcN7Ig5Ee.tc1P.TTaiTUbYVOuzFuFjXFr96PkhG', '01594101010', 'asdf', 'j1', 2, 'member6.jpg', '100003', '2018-01-19 09:14:34.000000', '2018-01-24 17:57:41.000000'),
(100008, 'janina3', 'janina3@gmail.com', '$2a$10$s6CyLam6jE0UJdR7pRxbU.x/rxI/arIbaJrGN4mBgo7Jh3.2dw.zu', '01711000000', 'janina3', 'janina3', 4, 'member4.jpg', '100008', '2018-01-24 01:32:28.000000', '2018-01-24 17:58:14.000000'),
(100009, 'j2', 'j2@gmail.com', '$2a$10$6yrE4oEVZNx1sFBMzMq9.OoWQG4jThmwImxTEkTX5YfhcdATWIKM2', '01911000000', 'woeirj odsifjo ', 'heart', 3, 'member1.jpg', '100009', '2018-01-24 17:37:39.000000', '2018-01-24 17:37:39.000000'),
(100010, 'j3', 'j3@gmail.com', '$2a$10$/vaHn2SMnyZI/9QFn8F5puSm4TPrVuTflHQSLzNYs8/Dict0pXuW6', '01711000000', 'daskfjowp ldsknflsad nfo', 'asdofn welkrno', 3, 'member5.jpg', '100010', '2018-01-24 17:38:46.000000', '2018-01-24 17:38:46.000000'),
(100011, 'j4', 'j4@gmail.com', '$2a$10$6QhXvJXEnlyrzo4KLO5V4.HURpAv4j.yqzt6Q8kBIB1DtEvn3corW', '01711000000', 'awerin alkewnrl;akn aldksnf', 'woier olkenrolw', 5, 'member2.jpg', '100011', '2018-01-24 17:39:27.000000', '2018-01-24 17:39:27.000000');

--
-- Triggers `doctors`
--
DROP TRIGGER IF EXISTS `doctors_after_insert_trig`;
DELIMITER $$
CREATE TRIGGER `doctors_after_insert_trig` AFTER INSERT ON `doctors` FOR EACH ROW insert into users (id, email, password) values (new.id, new.email, new.password)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `doctors_after_update_trig`;
DELIMITER $$
CREATE TRIGGER `doctors_after_update_trig` AFTER UPDATE ON `doctors` FOR EACH ROW UPDATE users SET email=new.email, password=new.password Where id=new.id
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `doctors_before_delete_trig`;
DELIMITER $$
CREATE TRIGGER `doctors_before_delete_trig` BEFORE DELETE ON `doctors` FOR EACH ROW DELETE FROM users Where id=old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cell` varchar(25) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `created` datetime(6) DEFAULT NULL,
  `modified` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=300000010 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `password`, `cell`, `address`, `age`, `sex`, `created`, `modified`) VALUES
(300000001, 'manina', 'manina@gmail.com', '$2a$10$8a2X7OwiHv2aUk9TKL3ILeLxmlr6XQ1uWhFP45adAHpUJNNWAmwQq', '879513', 'manina', 654, 'm', NULL, NULL),
(300000003, 'mani21', 'manina1@gmail.com', '$2a$10$0b6r/Z.nEATCU43J3p9em.jbbcWUoNwf8SaM7/HfQlHZC7Il.3NaG', '12341', 'manina1', 234, 'Male', '2018-01-23 15:30:49.000000', '2018-01-24 01:07:08.000000'),
(300000007, 'docp', 'docp@g.com', '$2a$10$063pU1G7nlr7RBOP.ENmAO9Gv5gD10NMCh2TGmEJ8UM3dYO1oYqNG', '23423', 'docp', 123, 'Male', '2018-01-24 03:14:53.000000', '2018-01-24 03:14:53.000000'),
(300000008, 'apu', 'apu@apu.com', '$2a$10$rZ416wsTujYtNbl79EaSfecFbY9Z87gxWPVQZwGh.WInGk4ZacDnm', '01911504040', 'janina', 23, 'Male', '2018-01-24 06:18:41.000000', '2018-01-24 06:18:41.000000'),
(300000009, 'uk', 'uk@uk.com', '$2a$10$X5gGKw3LXgyyA5CReCnOpOChNHsGfAhgW78bo34rMoFLMy9/DYR4u', '01911501010', 'kuk', 23, 'Male', '2018-01-25 21:35:42.000000', '2018-01-25 21:35:42.000000');

--
-- Triggers `patients`
--
DROP TRIGGER IF EXISTS `patients_after_insert_trig`;
DELIMITER $$
CREATE TRIGGER `patients_after_insert_trig` AFTER INSERT ON `patients` FOR EACH ROW insert into users (id, email, password) values (new.id, new.email, new.password)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `patients_after_update_trig`;
DELIMITER $$
CREATE TRIGGER `patients_after_update_trig` AFTER UPDATE ON `patients` FOR EACH ROW UPDATE users SET email=new.email, password=new.password Where id=new.id
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `patients_before_delete_trig`;
DELIMITER $$
CREATE TRIGGER `patients_before_delete_trig` BEFORE DELETE ON `patients` FOR EACH ROW DELETE FROM users Where id=old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(7, 'boss@gmail.com', '$2a$10$AiM22walFri1wf3kIV461.LknoV9Umk0WAcds9qSFWC2qSvpHV9lu'),
(100003, 'j1@g.com', '$2a$10$G93A6SczgE57sTcN7Ig5Ee.tc1P.TTaiTUbYVOuzFuFjXFr96PkhG'),
(100001, 'janina@janina.com', '$2a$10$zF64CrPIdFBdFUG6ygLn1OBYtoywbveMqxQb1.z06M1WM1zEOzrQS'),
(300000001, 'manina@gmail.com', '$2a$10$8a2X7OwiHv2aUk9TKL3ILeLxmlr6XQ1uWhFP45adAHpUJNNWAmwQq'),
(9, 'boss1@gmail.com', '$2a$10$nSNg529Y9x1vm2qhW9CLpetVwD1YVJmnnvGTILRCQGMuQ.vgWsEGu'),
(100008, 'janina3@gmail.com', '$2a$10$s6CyLam6jE0UJdR7pRxbU.x/rxI/arIbaJrGN4mBgo7Jh3.2dw.zu'),
(300000007, 'docp@g.com', '$2a$10$063pU1G7nlr7RBOP.ENmAO9Gv5gD10NMCh2TGmEJ8UM3dYO1oYqNG'),
(11, 'bosst@gmail.com', '$2a$10$GIqb9Vhxw.Svgn3FYWB0Zey6LX8dUuNzP6zLQFolL/3eQQ7I.7Wre'),
(300000003, 'manina1@gmail.com', '$2a$10$0b6r/Z.nEATCU43J3p9em.jbbcWUoNwf8SaM7/HfQlHZC7Il.3NaG'),
(300000008, 'apu@apu.com', '$2a$10$rZ416wsTujYtNbl79EaSfecFbY9Z87gxWPVQZwGh.WInGk4ZacDnm'),
(100009, 'j2@gmail.com', '$2a$10$6yrE4oEVZNx1sFBMzMq9.OoWQG4jThmwImxTEkTX5YfhcdATWIKM2'),
(100010, 'j3@gmail.com', '$2a$10$/vaHn2SMnyZI/9QFn8F5puSm4TPrVuTflHQSLzNYs8/Dict0pXuW6'),
(100011, 'j4@gmail.com', '$2a$10$6QhXvJXEnlyrzo4KLO5V4.HURpAv4j.yqzt6Q8kBIB1DtEvn3corW'),
(300000009, 'uk@uk.com', '$2a$10$X5gGKw3LXgyyA5CReCnOpOChNHsGfAhgW78bo34rMoFLMy9/DYR4u');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
