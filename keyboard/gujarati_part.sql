-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2015 at 05:06 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `translator`
--

-- --------------------------------------------------------

--
-- Table structure for table `gujarati_part`
--

CREATE TABLE IF NOT EXISTS `gujarati_part` (
  `Gujarati` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Another_part` varchar(100) CHARACTER SET ucs2 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gujarati_part`
--

INSERT INTO `gujarati_part` (`Gujarati`, `Another_part`) VALUES
('ા', 'a'),
('િ', 'i'),
('ી', 'ee'),
('ુ', 'u'),
('ૂ', 'oo'),
('ૈ', 'ai'),
('ો', 'o'),
('ૌ', 'au'),
('ં', 'an'),
('ઃ', 'ah'),
('ે', 'e');
