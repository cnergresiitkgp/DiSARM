-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2015 at 12:05 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `LandmarkDetection`
--

-- --------------------------------------------------------

--
-- Table structure for table `LandmarkDetails`
--

CREATE TABLE IF NOT EXISTS `LandmarkDetails` (
  `RouteId` int(11) NOT NULL,
  `FromLandmark` int(11) NOT NULL,
  `LandmarkId` int(11) NOT NULL,
  `TimeZone` int(11) NOT NULL,
  `TimeDiff` float NOT NULL,
  `Confidence` float NOT NULL,
  PRIMARY KEY (`RouteId`,`FromLandmark`,`LandmarkId`,`TimeZone`),
  KEY `FromLandmark` (`FromLandmark`),
  KEY `LandmarkId` (`LandmarkId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LandmarkDetails`
--

INSERT INTO `LandmarkDetails` (`RouteId`, `FromLandmark`, `LandmarkId`, `TimeZone`, `TimeDiff`, `Confidence`) VALUES
(1, 0, 78, 1, 42, 1),
(1, 0, 78, 2, 42, 1),
(1, 0, 78, 3, 42, 1),
(1, 0, 78, 4, 42, 1),
(1, 78, 79, 1, 47, 1),
(1, 78, 79, 2, 47, 1),
(1, 78, 79, 3, 47, 1),
(1, 78, 79, 4, 47, 1),
(1, 79, 80, 1, 47, 1),
(1, 79, 80, 2, 47, 1),
(1, 79, 80, 3, 47, 1),
(1, 79, 80, 4, 47, 1),
(1, 80, 81, 1, 48, 1),
(1, 80, 81, 2, 48, 1),
(1, 80, 81, 3, 48, 1),
(1, 80, 81, 4, 48, 1),
(1, 81, 82, 1, 21, 1),
(1, 81, 82, 2, 21, 1),
(1, 81, 82, 3, 21, 1),
(1, 81, 82, 4, 21, 1),
(1, 82, 83, 1, 40, 1),
(1, 82, 83, 2, 40, 1),
(1, 82, 83, 3, 40, 1),
(1, 82, 83, 4, 40, 1),
(1, 83, 84, 1, 44, 1),
(1, 83, 84, 2, 44, 1),
(1, 83, 84, 3, 44, 1),
(1, 83, 84, 4, 44, 1),
(1, 84, 85, 1, 47, 1),
(1, 84, 85, 2, 47, 1),
(1, 84, 85, 3, 47, 1),
(1, 84, 85, 4, 47, 1),
(1, 85, 86, 1, 10, 1),
(1, 85, 86, 2, 10, 1),
(1, 85, 86, 3, 10, 1),
(1, 85, 86, 4, 10, 1),
(1, 86, 87, 1, 42, 1),
(1, 86, 87, 2, 42, 1),
(1, 86, 87, 3, 42, 1),
(1, 86, 87, 4, 42, 1),
(1, 87, 88, 1, 15, 1),
(1, 87, 88, 2, 15, 1),
(1, 87, 88, 3, 15, 1),
(1, 87, 88, 4, 15, 1),
(1, 88, 89, 1, 215, 1),
(1, 88, 89, 2, 215, 1),
(1, 88, 89, 3, 215, 1),
(1, 88, 89, 4, 215, 1),
(1, 89, 90, 1, 5, 1),
(1, 89, 90, 2, 5, 1),
(1, 89, 90, 3, 5, 1),
(1, 89, 90, 4, 5, 1),
(1, 90, 91, 1, 39, 1),
(1, 90, 91, 2, 39, 1),
(1, 90, 91, 3, 39, 1),
(1, 90, 91, 4, 39, 1),
(1, 91, 92, 1, 11, 1),
(1, 91, 92, 2, 11, 1),
(1, 91, 92, 3, 11, 1),
(1, 91, 92, 4, 11, 1),
(1, 92, 93, 1, 26, 1),
(1, 92, 93, 2, 26, 1),
(1, 92, 93, 3, 26, 1),
(1, 92, 93, 4, 26, 1),
(1, 93, 94, 1, 11, 1),
(1, 93, 94, 2, 11, 1),
(1, 93, 94, 3, 11, 1),
(1, 93, 94, 4, 11, 1),
(1, 94, 95, 1, 25, 1),
(1, 94, 95, 2, 25, 1),
(1, 94, 95, 3, 25, 1),
(1, 94, 95, 4, 25, 1),
(1, 95, 96, 1, 64, 1),
(1, 95, 96, 2, 64, 1),
(1, 95, 96, 3, 64, 1),
(1, 95, 96, 4, 64, 1),
(1, 96, 97, 1, 9, 1),
(1, 96, 97, 2, 9, 1),
(1, 96, 97, 3, 9, 1),
(1, 96, 97, 4, 9, 1),
(1, 97, 98, 1, 42, 1),
(1, 97, 98, 2, 42, 1),
(1, 97, 98, 3, 42, 1),
(1, 97, 98, 4, 42, 1),
(1, 98, 99, 1, 50, 1),
(1, 98, 99, 2, 50, 1),
(1, 98, 99, 3, 50, 1),
(1, 98, 99, 4, 50, 1),
(1, 99, 100, 1, 36, 1),
(1, 99, 100, 2, 36, 1),
(1, 99, 100, 3, 36, 1),
(1, 99, 100, 4, 36, 1),
(1, 100, 101, 1, 27, 1),
(1, 100, 101, 2, 27, 1),
(1, 100, 101, 3, 27, 1),
(1, 100, 101, 4, 27, 1),
(1, 101, 102, 1, 47, 1),
(1, 101, 102, 2, 47, 1),
(1, 101, 102, 3, 47, 1),
(1, 101, 102, 4, 47, 1),
(1, 102, 103, 1, 20, 1),
(1, 102, 103, 2, 20, 1),
(1, 102, 103, 3, 20, 1),
(1, 102, 103, 4, 20, 1),
(1, 103, 104, 1, 35, 1),
(1, 103, 104, 2, 35, 1),
(1, 103, 104, 3, 35, 1),
(1, 103, 104, 4, 35, 1),
(1, 104, 105, 1, 17, 1),
(1, 104, 105, 2, 17, 1),
(1, 104, 105, 3, 17, 1),
(1, 104, 105, 4, 17, 1),
(1, 105, 106, 1, 69, 1),
(1, 105, 106, 2, 69, 1),
(1, 105, 106, 3, 69, 1),
(1, 105, 106, 4, 69, 1),
(1, 106, 107, 1, 85, 1),
(1, 106, 107, 2, 85, 1),
(1, 106, 107, 3, 85, 1),
(1, 106, 107, 4, 85, 1),
(1, 107, 108, 1, 139, 1),
(1, 107, 108, 2, 139, 1),
(1, 107, 108, 3, 139, 1),
(1, 107, 108, 4, 139, 1),
(1, 108, 109, 1, 12, 1),
(1, 108, 109, 2, 12, 1),
(1, 108, 109, 3, 12, 1),
(1, 108, 109, 4, 12, 1),
(1, 109, 110, 1, 22, 1),
(1, 109, 110, 2, 22, 1),
(1, 109, 110, 3, 22, 1),
(1, 109, 110, 4, 22, 1),
(1, 110, 111, 1, 30, 1),
(1, 110, 111, 2, 30, 1),
(1, 110, 111, 3, 30, 1),
(1, 110, 111, 4, 30, 1),
(1, 111, 112, 1, 2, 1),
(1, 111, 112, 2, 2, 1),
(1, 111, 112, 3, 2, 1),
(1, 111, 112, 4, 2, 1),
(1, 112, 113, 1, 154, 1),
(1, 112, 113, 2, 154, 1),
(1, 112, 113, 3, 154, 1),
(1, 112, 113, 4, 154, 1),
(1, 113, 114, 1, 19, 1),
(1, 113, 114, 2, 19, 1),
(1, 113, 114, 3, 19, 1),
(1, 113, 114, 4, 19, 1),
(1, 114, 115, 1, 39, 1),
(1, 114, 115, 2, 39, 1),
(1, 114, 115, 3, 39, 1),
(1, 114, 115, 4, 39, 1),
(1, 115, 116, 1, 11, 1),
(1, 115, 116, 2, 11, 1),
(1, 115, 116, 3, 11, 1),
(1, 115, 116, 4, 11, 1),
(1, 116, 117, 1, 102, 1),
(1, 116, 117, 2, 102, 1),
(1, 116, 117, 3, 102, 1),
(1, 116, 117, 4, 102, 1),
(1, 117, 118, 1, 150, 1),
(1, 117, 118, 2, 150, 1),
(1, 117, 118, 3, 150, 1),
(1, 117, 118, 4, 150, 1),
(1, 118, 119, 1, 141, 1),
(1, 118, 119, 2, 141, 1),
(1, 118, 119, 3, 141, 1),
(1, 118, 119, 4, 141, 1),
(1, 119, 120, 1, 7, 1),
(1, 119, 120, 2, 7, 1),
(1, 119, 120, 3, 7, 1),
(1, 119, 120, 4, 7, 1),
(1, 120, 121, 1, 34, 1),
(1, 120, 121, 2, 34, 1),
(1, 120, 121, 3, 34, 1),
(1, 120, 121, 4, 34, 1),
(1, 121, 122, 1, 12, 1),
(1, 121, 122, 2, 12, 1),
(1, 121, 122, 3, 12, 1),
(1, 121, 122, 4, 12, 1),
(1, 122, 123, 1, 71, 1),
(1, 122, 123, 2, 71, 1),
(1, 122, 123, 3, 71, 1),
(1, 122, 123, 4, 71, 1),
(1, 123, 124, 1, 13, 1),
(1, 123, 124, 2, 13, 1),
(1, 123, 124, 3, 13, 1),
(1, 123, 124, 4, 13, 1),
(1, 124, 125, 1, 65, 1),
(1, 124, 125, 2, 65, 1),
(1, 124, 125, 3, 65, 1),
(1, 124, 125, 4, 65, 1),
(1, 125, 126, 1, 7, 1),
(1, 125, 126, 2, 7, 1),
(1, 125, 126, 3, 7, 1),
(1, 125, 126, 4, 7, 1),
(1, 126, 127, 1, 63, 1),
(1, 126, 127, 2, 63, 1),
(1, 126, 127, 3, 63, 1),
(1, 126, 127, 4, 63, 1),
(1, 127, 128, 1, 32, 1),
(1, 127, 128, 2, 32, 1),
(1, 127, 128, 3, 32, 1),
(1, 127, 128, 4, 32, 1),
(1, 128, 129, 1, 9, 1),
(1, 128, 129, 2, 9, 1),
(1, 128, 129, 3, 9, 1),
(1, 128, 129, 4, 9, 1),
(1, 129, 130, 1, 36, 1),
(1, 129, 130, 2, 36, 1),
(1, 129, 130, 3, 36, 1),
(1, 129, 130, 4, 36, 1),
(1, 130, 131, 1, 12, 1),
(1, 130, 131, 2, 12, 1),
(1, 130, 131, 3, 12, 1),
(1, 130, 131, 4, 12, 1),
(1, 131, 132, 1, 40, 1),
(1, 131, 132, 2, 40, 1),
(1, 131, 132, 3, 40, 1),
(1, 131, 132, 4, 40, 1),
(1, 132, 133, 1, 7, 1),
(1, 132, 133, 2, 7, 1),
(1, 132, 133, 3, 7, 1),
(1, 132, 133, 4, 7, 1),
(1, 133, 134, 1, 7, 1),
(1, 133, 134, 2, 7, 1),
(1, 133, 134, 3, 7, 1),
(1, 133, 134, 4, 7, 1),
(1, 134, 135, 1, 8, 1),
(1, 134, 135, 2, 8, 1),
(1, 134, 135, 3, 8, 1),
(1, 134, 135, 4, 8, 1),
(1, 135, 136, 1, 42, 1),
(1, 135, 136, 2, 42, 1),
(1, 135, 136, 3, 42, 1),
(1, 135, 136, 4, 42, 1),
(1, 136, 137, 1, 11, 1),
(1, 136, 137, 2, 11, 1),
(1, 136, 137, 3, 11, 1),
(1, 136, 137, 4, 11, 1),
(1, 137, 138, 1, 16, 1),
(1, 137, 138, 2, 16, 1),
(1, 137, 138, 3, 16, 1),
(1, 137, 138, 4, 16, 1),
(1, 138, 139, 1, 9, 1),
(1, 138, 139, 2, 9, 1),
(1, 138, 139, 3, 9, 1),
(1, 138, 139, 4, 9, 1),
(1, 139, 140, 1, 30, 1),
(1, 139, 140, 2, 30, 1),
(1, 139, 140, 3, 30, 1),
(1, 139, 140, 4, 30, 1),
(1, 140, 141, 1, 97, 1),
(1, 140, 141, 2, 97, 1),
(1, 140, 141, 3, 97, 1),
(1, 140, 141, 4, 97, 1),
(1, 141, 142, 1, 231, 1),
(1, 141, 142, 2, 231, 1),
(1, 141, 142, 3, 231, 1),
(1, 141, 142, 4, 231, 1),
(1, 142, 143, 1, 14, 1),
(1, 142, 143, 2, 14, 1),
(1, 142, 143, 3, 14, 1),
(1, 142, 143, 4, 14, 1),
(1, 143, 144, 1, 35, 1),
(1, 143, 144, 2, 35, 1),
(1, 143, 144, 3, 35, 1),
(1, 143, 144, 4, 35, 1),
(1, 144, 145, 1, 194, 1),
(1, 144, 145, 2, 194, 1),
(1, 144, 145, 3, 194, 1),
(1, 144, 145, 4, 194, 1),
(1, 145, 146, 1, 11, 1),
(1, 145, 146, 2, 11, 1),
(1, 145, 146, 3, 11, 1),
(1, 145, 146, 4, 11, 1),
(1, 146, 147, 1, 29, 1),
(1, 146, 147, 2, 29, 1),
(1, 146, 147, 3, 29, 1),
(1, 146, 147, 4, 29, 1),
(1, 147, 148, 1, 51, 1),
(1, 147, 148, 2, 51, 1),
(1, 147, 148, 3, 51, 1),
(1, 147, 148, 4, 51, 1),
(1, 148, 149, 1, 348, 1),
(1, 148, 149, 2, 348, 1),
(1, 148, 149, 3, 348, 1),
(1, 148, 149, 4, 348, 1),
(1, 149, 150, 1, 69, 1),
(1, 149, 150, 2, 69, 1),
(1, 149, 150, 3, 69, 1),
(1, 149, 150, 4, 69, 1),
(1, 150, 151, 1, 129, 1),
(1, 150, 151, 2, 129, 1),
(1, 150, 151, 3, 129, 1),
(1, 150, 151, 4, 129, 1),
(1, 151, 152, 1, 35, 1),
(1, 151, 152, 2, 35, 1),
(1, 151, 152, 3, 35, 1),
(1, 151, 152, 4, 35, 1),
(1, 152, 153, 1, 28, 1),
(1, 152, 153, 2, 28, 1),
(1, 152, 153, 3, 28, 1),
(1, 152, 153, 4, 28, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
