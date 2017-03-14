-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 12:21 PM
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
('ા', 'aa'),
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

-- --------------------------------------------------------

--
-- Table structure for table `translator`
--

CREATE TABLE IF NOT EXISTS `translator` (
  `English` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Gujarati` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`English`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `translator`
--

INSERT INTO `translator` (`English`, `Gujarati`) VALUES
('chhah', 'છઃ'),
('chhan', 'છં'),
('chhau', 'છૌ'),
('chho', 'છો'),
('chhai', 'છૈ'),
('chhe', 'છે'),
('chhoo', 'છૂ'),
('chhu', 'છુ'),
('chhee', 'છી'),
('chhi', 'છિ'),
('chhaa', 'છા'),
('chha', 'છ​'),
('chah', 'ચઃ'),
('chan', 'ચં'),
('chau', 'ચૌ'),
('cho', 'ચો'),
('chai', 'ચૈ'),
('che', 'ચે'),
('choo', 'ચૂ'),
('chu', 'ચુ'),
('chee', 'ચી'),
('chi', 'ચિ'),
('chaa', 'ચા'),
('cha', 'ચ'),
('ghah', 'ઘઃ'),
('ghan', 'ઘઃ'),
('ghau', 'ઘૌ'),
('gho', 'ઘો'),
('ghai', 'ઘૈ'),
('ghe', 'ઘે'),
('ghoo', 'ઘૂ'),
('ghu', 'ઘુ'),
('ghee', 'ઘી'),
('ghi', 'ઘિ'),
('ghaa', 'ઘા'),
('gha', 'ઘ'),
('gah', 'ગઃ'),
('gan', 'ગં'),
('gau', 'ગૌ'),
('go', 'ગો'),
('gai', 'ગૈ'),
('ge', 'ગે'),
('goo', 'ગૂ'),
('gu', 'ગુ'),
('gee', 'ગી'),
('gi', 'ગિ'),
('gaa', 'ગા'),
('ga', 'ગ'),
('khah', 'ખઃ'),
('khan', 'ખં'),
('khau', 'ખૌ'),
('kho', 'ખો'),
('khai', 'ખૈ'),
('khe', 'ખે'),
('khoo', 'ખૂ'),
('khu', 'ખુ'),
('khee', 'ખી'),
('khi', 'ખિ'),
('khaa', 'ખા'),
('kha', 'ખ'),
('kah', 'કઃ'),
('kan', 'કં'),
('kau', 'કૌ'),
('ko', 'કો'),
('kai', 'કૈ'),
('ke', 'કે'),
('koo', 'કૂ'),
('ku', 'કુ'),
('kee', 'કી'),
('ki', 'કિ'),
('kaa', 'કા'),
('ka', 'ક');
