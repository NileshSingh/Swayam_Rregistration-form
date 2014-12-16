-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2014 at 03:40 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `name1` varchar(20) NOT NULL,
  `intro` varchar(50) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `name4` varchar(100) NOT NULL,
  `txtPhone` varchar(20) NOT NULL,
  `txtMobile` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `course_uni` varchar(20) NOT NULL,
  `course_title` varchar(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `birthday1` varchar(20) NOT NULL,
  `co_des` varchar(200) NOT NULL,
  `PE` varchar(200) NOT NULL,
  `BCD` varchar(200) NOT NULL,
  `course_fa` varchar(30) NOT NULL,
  `course_title1` varchar(30) NOT NULL,
  `CFB` varchar(200) NOT NULL,
  `faq` varchar(200) NOT NULL,
  `co_name` varchar(20) NOT NULL,
  `BCD1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`name1`, `intro`, `name2`, `name3`, `name4`, `txtPhone`, `txtMobile`, `course_id`, `course_uni`, `course_title`, `birthday`, `birthday1`, `co_des`, `PE`, `BCD`, `course_fa`, `course_title1`, `CFB`, `faq`, `co_name`, `BCD1`) VALUES
('IITBombay', 'dfdsfdsfs', 'sdgsdgsd', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE104', 'dfhdfh', 'sdgsdg', '11/23/2014', '11/28/2014', 'fsdfdsf', 'sdgdsgsdg', 'sdgsdg', 'fbdfbfdb', 'sgfsdgsg', 'sgsdgsdg', 'sgsdgsdg', 'raj88.007@gmail.com', 'sgsdgsdg'),
('BHUIIT', 'fsdgfgsdfg', 'sgsgfg', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE110', 'dfhdfhdfbdb', 'bbdbbbfb', '11/25/2014', '11/23/2014', 'ghdfg', 'dbdbbf', 'dfbdfbdbf', 'dssdg', 'dsgdd', 'fbdfbbfd', 'dfbdfbdfb', 'raj88.007@gmail.com', 'dfbfbfd'),
('BHUIIT', 'vbvbfvbfvbf', 'fbvfbfbv', 'fbfbbfbfb', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE110', 'xfbfbfsbsb', 'fbfsbf', '11/23/2014', '11/23/2014', 'fsdfdsf', 'bbfbbfb', 'fbfbfbfbfbfb', 'dssdg', 'dfbfbfb', 'fdbfdbfbfd', 'fbfbfbfb', 'raj88.007@gmail.com', 'dfbdfbbfb'),
('BHUIIT', 'sgsgnsgjsdnkgsdm sd sd bsdkbvsd d sk', 'sgsgsgd', 'vsgvsdvgdgvd', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE1103', 'dfhdfh', 'dd', '11/23/2014', '11/28/2014', 'fasd', 'sdvdsvsdv', 'sdvsdvsdv', 'dssdg', 'fgjfgj', 'dsvdvdsv', 'sdvdvdv', 'raj88.007@gmail.com', 'svdsvdsvv'),
('BHUIIT', 'dbdfbbfb', 'bbbdfbdfbbdf', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'E-Commerce', 'dfhdfh', 'sdgsdg', '11/23/2014', '11/23/2014', 'efef', 'vxvxvcvv', 'xvxvxcc', 'fbdfbfdb', 'fgjfgj', 'v cxv cxv c v', 'cvxvd', 'raj88.007@gmail.com', 'vvvdvdvdvdv'),
('BHU', 'xvbvbxvbfbv', 'Nilesh', 'Lecturer', 'a@b.com', '23456789', '9930321261', 'Java_01', 'dfhdfh', 'sggsg', '11/25/2014', '11/23/2014', 'fsdfdsf', 'sgvsgvsd', 'sdddsdsg', 'gnjgfj', 'fgjfgj', 'dvdsvd', 'sdvdvdv', 'raj88.007@gmail.com', 'dvdvdvd'),
('BHUIIT', 'svsvsdvdsv', 'sdvdvdvds', 'sdvdsvdv', 'raj88.007@gmail.com', '23456789', '9930321261', 'C#', 'vsvvv', 'dsvvds', '11/23/2014', '11/23/2014', 'svsvdvvd', 'sdvdvdvdvd', 'dvdvdvdv', 'gnjgfj', 'dsgdd', 'vdsdvvds', 'sdvdvsdv', 'raj88.007@gmail.com', 'vdsdvdvdv'),
('BHUIIT', 'svsvdsvdvs', 'Nilesh', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'FDC', 'fgfg', 'fgfg', '11/23/2014', '11/28/2014', 'efef', 'svsvsvv', 'svvsdvd', 'fbdfbfdb', 'dfbdfbdb', 'svdsvdsvdv', 'sdvdvdvdvdsv', 'raj88.007@gmail.com', 'svdvdvdsvdv'),
('srt', 'kljdljfsdlk', 'sdj', 'ap', 'abc@gmail.com', '12345678', '9860386503', '12ab', 'microprocessor', 'abcd1234', '12/04/2014', '12/26/2014', '24', '12236hhjkkjiujj', 'jjuii', 'sdj123', 'ap', 'jhgj', 'hhjj\r\nkkk\r\njkk', 'sdj@gmail.com', 'ojkikjuj'),
('BHUIIT', 'dvdvdsvsdv', 'bffbsb', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE1105', 'sgfsgsger', 'sggsg', '12/30/2014', '12/01/2014', 'ghdfg', 'dsgfgdsg', 'sdgsdgdsg', 'gnjgfj', 'dsgdd', 'gsdgsdgsd', 'sdgsdgsd', 'raj88.007@gmail.com', 'sdgvsdgsdg'),
('BHUIIT', 'gsdgsdgsdg', 'sdgdgsdg', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE1016', 'gsgsgsg', 'sgsdgsg', '12/30/2014', '12/30/2014', 'sggsd', 'sdggdsg', 'dgsdgdg', 'sdgdsgsdg', 'sdgdg', 'sdgdsgdgs', 'sgsdgsdgdsggsg', 'raj88.007@gmail.com', 'sdgsdgdgd'),
('BHUIIT', 'zvzvzvzv', 'ddhhdh', 'Lecturer', 'raj88.007@gmail.com', '23456789', '9930321261', 'CSE101', 'dfhdfh', 'dd', '12/01/2014', '12/17/2014', 'zxvzxvxz', 'cvzvzv', 'zxvzxvxz', 'xzczvzxvz', 'zxvzxvzx', 'zxvzxvzx', 'zxvzxvxz', 'raj88.007@gmail.com', 'zxvzxvzxv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
