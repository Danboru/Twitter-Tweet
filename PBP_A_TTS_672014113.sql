-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2016 at 09:32 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbp_a_tts_672014113`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tweet`
--

CREATE TABLE IF NOT EXISTS `tbl_tweet` (
  `tweet_id` int(11) NOT NULL AUTO_INCREMENT,
  `tweet` varchar(500) NOT NULL,
  PRIMARY KEY (`tweet_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_tweet`
--

INSERT INTO `tbl_tweet` (`tweet_id`, `tweet`) VALUES
(17, 'Masih sedikit kesulitan dalam menerapkan semua fitur CRUD dengan metode AJAX . . :)\n\nMasih coba buat yang UPDAE dan DELETE dengan AJAX . . . input dan view sudah menggunakan AJAX'),
(15, 'Kwitansi :D'),
(16, 'Test Auto reload , , without pressing button.'),
(14, 'Kasbon , , , heheh :)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
