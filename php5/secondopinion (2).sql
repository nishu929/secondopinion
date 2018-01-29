-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 01:55 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondopinion`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(22) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `text` varchar(2000) DEFAULT NULL,
  `time` datetime NOT NULL,
  `flag` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `mail`, `text`, `time`, `flag`) VALUES
(1, '$name', NULL, '2017-09-24 13:00:11', 'no'),
(2, 'nishantpatel929@gmail.com', NULL, '2017-09-24 13:00:20', 'no'),
(3, 'nishantpatel929@gmail.com', NULL, '2017-09-24 13:04:39', 'no'),
(4, 'nishantpatel929@gmail.com', NULL, '2017-09-24 13:05:54', 'no'),
(5, 'nishantpatel929@gmail.com', NULL, '2017-09-24 13:06:58', 'no'),
(6, 'nishantpatel929@gmail.com', NULL, '2017-09-24 13:08:58', 'no'),
(7, 'nishantpatel929@gmail.com', NULL, '2017-09-24 14:18:40', 'no'),
(8, 'nishantpatel929@gmail.com', NULL, '2017-09-24 14:42:42', 'no'),
(9, 'nishantpatel929@gmail.com', '\r\n\r\n    adfv', '2017-09-24 14:54:41', 'yes'),
(10, 'nishantpatel929@gmail.com', '\r\n\r\n    mhvhgkvkhvkhgvkhgv', '2017-09-24 16:09:26', 'yes'),
(11, 'nishantpatel929@gmail.com', '\r\n\r\n    zxbafzbadf', '2017-09-24 23:46:34', 'yes'),
(12, 'nishantpatel929@gmail.com', 'When you eat foods high in carbs, like a plate of pasta, your body converts it to sugar in your bloodstream. Any excess sugar in your bloodstream that isnt used as energy is stored as fat. Unfortunately, its the overconsumption of these carbs that raise and drop your blood sugar levels, making you crave more and sending you into a blood sugar rollercoaster.\r\nWhen you eat foods high in carbs, like a plate of pasta, your body converts it to sugar in your bloodstream. Any excess sugar in your bloodstream that isnt used as energy is stored as fat. Unfortunately, its the overconsumption of these carbs that raise and drop your blood sugar levels, making you crave more and sending you into a blood sugar rollercoaster.\r\nWhen you eat foods high in carbs, like a plate of pasta, your body converts it to sugar in your bloodstream. Any excess sugar in your bloodstream that isnt used as energy is stored as fat. Unfortunately, its the overconsumption of these carbs that raise and drop your blood sugar levels, making you crave more and sending you into a blood sugar rollercoaster.\r\n', '2017-09-25 14:15:07', 'yes'),
(13, 'nishantpatel929@gmail.com', NULL, '2017-09-25 14:24:07', 'no'),
(14, 'nishantpatel929@gmail.com', NULL, '2017-09-25 15:06:46', 'no'),
(15, 'nishantpatel929@gmail.com', '\r\n\r\n    sdvsdv', '2017-09-25 15:06:53', 'yes'),
(16, 'nishantpatel929@gmail.com', 'asd', '2017-09-25 15:38:04', 'no'),
(17, 'nishantpatel929@gmail.com', '\r\n\r\n    dsvsadvd', '2017-09-25 15:38:18', 'yes'),
(18, 'nishantpatel929@gmail.com', '\r\n\r\n    dsc', '2017-09-25 15:38:53', 'yes'),
(19, 'nishantpatel929@gmail.com', NULL, '2017-09-25 19:41:06', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `blog_pictures`
--

CREATE TABLE `blog_pictures` (
  `id` int(22) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `blog-id` int(22) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_pictures`
--

INSERT INTO `blog_pictures` (`id`, `mail`, `blog-id`, `url`) VALUES
(22, 'nishantpatel929@gmail.com', 9, 'Screenshot (2).png'),
(23, 'nishantpatel929@gmail.com', 9, 'Screenshot (3).png'),
(24, 'nishantpatel929@gmail.com', 10, 'Screenshot (6).png'),
(25, 'nishantpatel929@gmail.com', 10, 'Screenshot (3).png'),
(26, 'nishantpatel929@gmail.com', 11, 'Screenshot (1).png'),
(27, 'nishantpatel929@gmail.com', 11, 'Screenshot (3).png'),
(30, 'nishantpatel929@gmail.com', 12, 'eating-plans-diet-plans.jpg'),
(29, 'nishantpatel929@gmail.com', 12, 'diet-plans-to-lose-weight-fast-motivation-to-lose-weight.jpg'),
(31, 'nishantpatel929@gmail.com', 15, 'Screenshot (10).png'),
(32, 'nishantpatel929@gmail.com', 15, 'Screenshot (13).png');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `message` varchar(700) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sender` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disini`
--

CREATE TABLE `disini` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `content` varchar(700) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disini`
--

INSERT INTO `disini` (`id`, `title`, `mail`, `content`, `phone`, `file`) VALUES
(20, 'Dangerous mobile rays ', 'nishantpatel929@gmail.com', 'how long should people us phones?', '9585582902', 'Screenshot (1).png'),
(17, 'piles', 'nishantpatel929@gmail.com', 'sdsfsdf', '7778876621', 'recipt.pdf'),
(18, 'piles', 'nishantpatel929@gmail.com', 'sdsfsdf', '7778876621', 'recipt.pdf'),
(19, 'piles', 'nishantpatel929@gmail.com', 'sdsfsdf', '7778876621', 'recipt.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion`
--

CREATE TABLE `disscussion` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disscussion16`
--

CREATE TABLE `disscussion16` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disscussion17`
--

CREATE TABLE `disscussion17` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion17`
--

INSERT INTO `disscussion17` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'nishant', 'nishantpatel929@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion18`
--

CREATE TABLE `disscussion18` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion18`
--

INSERT INTO `disscussion18` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'ADKJVBJH', 'nishantpatel929@gmail.com'),
(2, 'text', 'JHASGCHJ', 'SAKSHI@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion19`
--

CREATE TABLE `disscussion19` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion19`
--

INSERT INTO `disscussion19` (`id`, `type`, `message`, `mail`) VALUES
(1, '', 'mn', 'nishantpatel929@gmail.com'),
(2, 'text', 'mn', 'nishantpatel929@gmail.com'),
(3, 'text', 'mn', 'nishantpatel929@gmail.com'),
(4, 'text', 'mnbn,', 'nishantpatel929@gmail.com'),
(5, 'text', 'xbv', 'nishantpatel929@gmail.com'),
(6, 'text', 'By default, an iframe has a border around it.  To remove the border, add the style attribute and use the CSS border property:', 'nishantpatel929@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion20`
--

CREATE TABLE `disscussion20` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion20`
--

INSERT INTO `disscussion20` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'jknsc', 'nishantpatel929@gmail.com'),
(2, 'text', 'mhbvkds', 'nishantpatel929@gmail.com'),
(3, 'text', 'fshbdfh', 'nishantpatel929@gmail.com'),
(4, 'text', 'i hacked it', 'sakshi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `add` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `mob` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `exp` int(11) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verify` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`fname`, `lname`, `add`, `city`, `zip`, `mob`, `email`, `qual`, `spec`, `college`, `school`, `exp`, `resume`, `id`, `country`, `password`, `verify`) VALUES
('nishant', 'patel', 'k 15 vit', 'vellore', 632014, 777887662, 'nishantpatel929@gmail.com', 'doctor', 'neurology', 'nishant', 'nishant', 2, 'Module2-MAT2002-Computation of Harmonics.pdf', 41, 'India', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doc_otp`
--

CREATE TABLE `doc_otp` (
  `mail` varchar(200) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `time` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_otp`
--

INSERT INTO `doc_otp` (`mail`, `otp`, `time`) VALUES
('nishantpatel929@gmail.com', '8323', '1506236203');

-- --------------------------------------------------------

--
-- Table structure for table `nonuser_complain`
--

CREATE TABLE `nonuser_complain` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `message` varchar(700) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` int(6) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `blood` varchar(44) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fname`, `lname`, `add`, `city`, `zip`, `country`, `mob`, `mail`, `blood`, `id`, `password`) VALUES
('ghvhgv', 'hgvhg', 'vhgv', 'ghvhgv', 444444, 'gcjhgchjgv', '0777887662', 'nishantpatel929@gmail.com', 'hch', 22, '1234'),
('sakshi', 'tayal', 'maruti', 'abu', 386210, 'india', '0777887662', 'sakshi.tayal2015@vit.ac.in', 'b+', 23, 'saksshi'),
('sakshi', 'tayal', 'maruti', 'abu', 386210, 'india', '0777887662', 'sakshi.tayal2015@vit.ac.in', 'b+', 24, 'saksshi');

-- --------------------------------------------------------

--
-- Table structure for table `patient_otp`
--

CREATE TABLE `patient_otp` (
  `mail` varchar(500) NOT NULL,
  `otp` varchar(52) NOT NULL,
  `time` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_otp`
--

INSERT INTO `patient_otp` (`mail`, `otp`, `time`) VALUES
('nishantpatel929@gmail.com', '3787', '1506199706'),
('sakshi.tayal2015@vit.ac.in', '3584', '1506349616'),
('sakshi.tayal2015@vit.ac.in', '1997', '1506349617');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_pictures`
--
ALTER TABLE `blog_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disini`
--
ALTER TABLE `disini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion`
--
ALTER TABLE `disscussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion16`
--
ALTER TABLE `disscussion16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion17`
--
ALTER TABLE `disscussion17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion18`
--
ALTER TABLE `disscussion18`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion19`
--
ALTER TABLE `disscussion19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion20`
--
ALTER TABLE `disscussion20`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonuser_complain`
--
ALTER TABLE `nonuser_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `blog_pictures`
--
ALTER TABLE `blog_pictures`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disini`
--
ALTER TABLE `disini`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `disscussion`
--
ALTER TABLE `disscussion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disscussion16`
--
ALTER TABLE `disscussion16`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disscussion17`
--
ALTER TABLE `disscussion17`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disscussion18`
--
ALTER TABLE `disscussion18`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disscussion19`
--
ALTER TABLE `disscussion19`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `disscussion20`
--
ALTER TABLE `disscussion20`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `nonuser_complain`
--
ALTER TABLE `nonuser_complain`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
