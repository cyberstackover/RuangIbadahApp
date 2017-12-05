-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2014 at 09:45 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_jquery_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_mhs`
--

CREATE TABLE IF NOT EXISTS `db_mhs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `db_mhs`
--

INSERT INTO `db_mhs` (`id`, `nama`, `nim`, `jurusan`, `email`) VALUES
(1, 'Indra', '315352454268', 'Islam', 'herwin@windowslive.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `managerId` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `officePhone` varchar(45) NOT NULL,
  `cellPhone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `picture` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `managerId`, `title`, `department`, `officePhone`, `cellPhone`, `email`, `city`, `picture`) VALUES
(3, 'Masjid', 'Agung Surabaya', 5, 'Jl.Masjid Al Akbar Timur No.1 Pagesangan', 'Surabaya', '617-000-0011', '781-000-0011', 'ajones@fakemail.com', 'Surabaya', 'masjid-al-akbar-surabaya.jpg'),
(4, 'Gereja', 'Katedral Bandung', 1, 'Jl. Merdeka 14, Bandung', 'Bandung', '617-000-0004', '781-000-0004', 'jwilliams@fakemail.com', 'Bandung', 'katredal.jpg'),
(2, 'Pura', 'Agung Wira Loka Natha', 1, 'Jalan Gatot Subroto, Bandung', 'Marketing', '617-000-0002', '781-000-0002', 'jtaylor@fakemail.com', 'Bandung', 'wira loka_2.jpg'),
(1, 'Masjid', 'Raya Bandung', 0, 'Jl. Dalem Kaum No. 14 Alun-alun, Kec.Regol', 'Kabupaten Bandung', '617-000-0001', '781-000-0001', 'jking@fakemail.com', 'Bandung', 'masjid_bandung.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
