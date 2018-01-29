-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 11:36 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
(19, 'nishantpatel929@gmail.com', NULL, '2017-09-25 19:41:06', 'no'),
(20, 'nishantpatel929@gmail.com', NULL, '2017-09-26 20:13:07', 'no'),
(21, 'nishantpatel929@gmail.com', NULL, '2017-09-26 22:21:47', 'no'),
(22, 'nishantpatel929@gmail.com', NULL, '2017-09-26 22:57:42', 'no'),
(23, 'nishantpatel929@gmail.com', '\r\n\r\nfshabdfhb    ', '2017-09-26 23:01:49', 'yes'),
(24, 'nishantpatel929@gmail.com', NULL, '2017-09-26 23:10:57', 'no'),
(25, 'nishantpatel929@gmail.com', '\r\n\r\n    ', '2017-10-25 00:07:27', 'yes'),
(26, 'nishantpatel929@gmail.com', NULL, '2017-11-02 20:46:18', 'no'),
(27, 'nishantpatel929@gmail.com', '\r\n', '2017-11-02 22:32:23', 'yes'),
(28, 'nishantpatel929@gmail.com', NULL, '2017-11-03 23:09:44', 'no'),
(29, 'nishantpatel929@gmail.com', '\r\n\r\n    askcguyjf', '2017-11-04 16:31:29', 'yes'),
(30, 'nishantpatel929@gmail.com', '\r\n\r\n    hfuiu', '2017-11-04 17:15:08', 'yes');

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
(37, 'nishantpatel929@gmail.com', 28, 'Screenshot_1.png'),
(27, 'nishantpatel929@gmail.com', 11, 'Screenshot (3).png'),
(30, 'nishantpatel929@gmail.com', 12, 'eating-plans-diet-plans.jpg'),
(31, 'nishantpatel929@gmail.com', 15, 'Screenshot (10).png'),
(32, 'nishantpatel929@gmail.com', 15, 'Screenshot (13).png'),
(36, 'nishantpatel929@gmail.com', 24, 'Screenshot (6).png'),
(34, 'nishantpatel929@gmail.com', 23, 'eating-plans-diet-plans.jpg'),
(35, 'nishantpatel929@gmail.com', 23, 'Screenshot (2).png'),
(38, 'nishantpatel929@gmail.com', 28, 'Screenshot_2.png'),
(39, 'nishantpatel929@gmail.com', 29, 'Screenshot_1.png'),
(40, 'nishantpatel929@gmail.com', 29, 'Screenshot_6.png'),
(41, 'nishantpatel929@gmail.com', 30, 'Screenshot_1.png');

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
(25, 'hj', 'nishantpatel929@gmail.com', 'jhgjhv', '7778876621', 'Screenshot (3).png'),
(26, 'diet', 'nishantpatel929@gmail.com', 'should people use this diet chart??', '9585582858', 'diet-plans-to-lose-weight-fast-motivation-to-lose-weight.jpg'),
(20, 'Dangerous mobile rays ', 'nishantpatel929@gmail.com', 'how long should people us phones?', '9585582902', 'Screenshot (1).png'),
(17, 'piles', 'nishantpatel929@gmail.com', 'sdsfsdf', '7778876621', 'recipt.pdf'),
(18, 'piles', 'nishantpatel929@gmail.com', 'sdsfsdf', '7778876621', 'recipt.pdf'),
(19, 'piles', 'nishantpatel929@gmail.com', 'sdsfsdf', '7778876621', 'recipt.pdf'),
(27, 'radiations', 'nishantpatel929@gmail.com', 'are radiations harmfull', '7778876621', 'da1-dbms.pdf'),
(28, 'thyroid', 'nishantpatel929@gmail.com', 'zvsv', '7878787474', 'Screenshot_3.png'),
(29, 'thyroid', 'nishantpatel929@gmail.com', 'what are its negatives?', '456952856', 'Thyroid_Gland.jpg');

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
-- Table structure for table `disscussion25`
--

CREATE TABLE `disscussion25` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion25`
--

INSERT INTO `disscussion25` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'srh', 'nishantpatel929@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion26`
--

CREATE TABLE `disscussion26` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion26`
--

INSERT INTO `disscussion26` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'asfsegf', 'nishantpatel929@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion27`
--

CREATE TABLE `disscussion27` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion27`
--

INSERT INTO `disscussion27` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'i think humans are evolving imune to the radiations', 'nishantpatel929@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disscussion28`
--

CREATE TABLE `disscussion28` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disscussion29`
--

CREATE TABLE `disscussion29` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disscussion29`
--

INSERT INTO `disscussion29` (`id`, `type`, `message`, `mail`) VALUES
(1, 'text', 'your neck swoles', 'nishantpatel929@gmail.com');

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
  `verify` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`fname`, `lname`, `add`, `city`, `zip`, `mob`, `email`, `qual`, `spec`, `college`, `school`, `exp`, `resume`, `id`, `country`, `password`, `verify`) VALUES
('nishant', 'patel', 'k 15 vit', 'vellore', 632014, 777887662, 'nishantpatel929@gmail.com', 'doctor', 'neurology', 'nishant', 'nishant', 2, 'Module2-MAT2002-Computation of Harmonics.pdf', 41, 'India', '1234', '1'),
('mansi', 'dixit', 'vit', 'vellore', 365265, 789568555, 'jabfjka@ndsv.com', 'mbbs', 'Gynaecology', 'cmc', 'dv', 5, 'Module2-MAT2002-Computation of Harmonics.pdf', 42, 'sdb', '1234', '1'),
('pmansi', 'pdixit', 'vit', 'vellore', 365265, 789568555, 'pjabfjka@ndsv.com', 'mbbs', 'Gynaecology', 'cmc', 'dv', 5, 'Module2-MAT2002-Computation of Harmonics.pdf', 43, 'sdb', '1234', '1'),
('amisha', 'rani', 'vit', 'dg', 456987, 748596, 'nvsndk@gmail.com', 'dsngmv', 'Psychiatry', 'dzgvsadb', 'scbq', 5, 'da1 final.docx', 44, 'sdgvqa', 'sdgbsd', '0'),
('dasfvd', 'dsgvsdvvg', 'esdgvsd', 'dsvsdv', 555222, 778887788, 'nishat@gmail.com', 'sdv', 'Psychiatry', 'dsvas', 'asdv', 2, 'da1 final.docx', 45, 'dvs', 'sdv', '0');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_message`
--

CREATE TABLE `doctor_message` (
  `id` int(11) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `recever` varchar(200) NOT NULL,
  `m_read` varchar(20) NOT NULL DEFAULT 'no',
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_message`
--

INSERT INTO `doctor_message` (`id`, `attachment`, `subject`, `text`, `sender`, `recever`, `m_read`, `date`) VALUES
(17, 'diet-plans-to-lose-weight-fast-motivation-to-lose-weight.jpg', 'diet', 'nope use the diet in the attachment', 'nishantpatel929@gmail.com', 'nishantpatel929@gmail.com', 'no', '2017-09-26 20:14:44');

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
('nishantpatel929@gmail.com', '8323', '1506236203'),
('nishdantpatel929@gmail.com', '5998', '1509730185'),
('nishdantpatel929@gmail.com', '4553', '1509730212'),
('nishdantpatel929@gmail.com', '6065', '1509730299'),
('nishdantpatel929@gmail.com', '1744', '1509730355');

-- --------------------------------------------------------

--
-- Table structure for table `nonuser_complain`
--

CREATE TABLE `nonuser_complain` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `message` varchar(700) NOT NULL,
  `solved` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonuser_complain`
--

INSERT INTO `nonuser_complain` (`id`, `name`, `mail`, `message`, `solved`) VALUES
(13, 'sakshi', 'sakshi.tayal2015@gmail.com', 'please', 'yes'),
(14, 'monika tayal', 'monika.tayal@rediffmail.com', 'approve', 'no'),
(15, 'ajay tayal', 'ajay.tayal@rediffmail.com', 'my request', 'no'),
(16, 'vibhor tayal', 'vibhor.tayal@rediffmail.com', 'to go to vellore', 'no'),
(17, 'manthan patel', 'mathankpatel@yahoo.com', 'to enjoy with my friends', 'no'),
(18, 'safa', 'njdsnf@mai.com', 'dafv', 'yes');

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
  `password` varchar(200) NOT NULL,
  `url` varchar(300) NOT NULL DEFAULT 'avtar.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fname`, `lname`, `add`, `city`, `zip`, `country`, `mob`, `mail`, `blood`, `id`, `password`, `url`) VALUES
('vibhor', 'tayal', 'bits', 'goa', 632014, 'India', '0875845741', 'nishantpatel929@gmail.com', 'b+', 29, 'hgfjgfyGHF', ''),
('sakshi', 'tayal', 'maruti', 'abu', 386210, 'india', '0777887662', 'sakshi.tayal2015@vit.ac.in', 'b+', 24, 'saksshi', ''),
('vibhor', 'tayal', 'bits', 'goa', 632014, 'India', '0875845741', 'tayalsakshi381@gmail.com', 'b+', 28, 'sakshi', ''),
('indro', 'roy', '10 pajf', 'keneya', 369523, 'asia', '7896541235', 'indro@gmail.com', 'o+', 30, 'bushra', ''),
('indro', 'roy', '10 pajf', 'keneya', 369523, 'asia', '7896541235', 'indroroy@gmail.com', 'o+', 31, 'bushra', ''),
('saki', 'tal', 'abu', 'pata ni', 123654, 'india', '9585582903', 'sakshi.tayal2016@vit.ac.in', 'ab+', 32, 'abcd', ''),
('n', 'jhvh', 'vh', 'vh', 252514, 'jv', '1236547896', 'nishantpatel99@gmail.com', 'hv', 40, '5', 'avtar.jpg'),
('amish', 'rani', 'abc', 'bcd', 909808, 'india', '9090909089', 'amisharani30@gmail.com', 'o+', 41, 'abc', 'avtar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_message`
--

CREATE TABLE `patient_message` (
  `id` int(22) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `recever` varchar(200) NOT NULL,
  `m_read` varchar(20) NOT NULL DEFAULT 'no',
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_message`
--

INSERT INTO `patient_message` (`id`, `attachment`, `subject`, `text`, `sender`, `recever`, `m_read`, `date`) VALUES
(8, 'eating-plans-diet-plans.jpg', 'sugession', 'should i use this diet plan?', 'nishantpatel929@gmail.com', 'nishantpatel929@gmail.com', 'yes', '2017-09-26 20:15:39'),
(9, '15BIT0144_VL2017181002188_DA.docx', 'final riview', 'nothing yar time pass kar raha hu', 'nishantpatel929@gmail.com', 'nishantpatel929@gmail.com', 'yes', '2017-11-02 23:14:08'),
(10, '', 'sfv', 'adv', 'nishantpatel929@gmail.com', 'nishantpatel929@gmail.com', 'no', '2017-11-04 12:37:03');

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
('sakshi.tayal2015@vit.ac.in', '1997', '1506349617'),
('vibhor.tayal2015@bitspilani.com', '2133', '1506352093'),
('tayalsakshi381@gmail.com', '6741', '1506352567'),
('tayalsakshi381@gmail.com', '7170', '1506352714'),
('tayalsakshi381@gmail.com', '6344', '1506353063'),
('tayalsakshi381@gmail.com', '5716', '1506353408'),
('tayalsakshi381@gmail.com', '6801', '1506353517'),
('nishantpatel929@gmail.com', '4282', '1506353990'),
('indro@gmail.com', '1932', '1509636262'),
('indroroy@gmail.com', '3097', '1509636301'),
('sakshi.tayal2016@vit.ac.in', '5090', '1509636851'),
('nishantpatel999@gmail.com', '7145', '1509790609'),
('nishantpatel99@gmail.com', '2878', '1509790736'),
('nishantpatel99@gmail.com', '3389', '1509790834'),
('nishantpatel99@gmail.com', '1668', '1509791120'),
('nishantpatel99@gmail.com', '6006', '1509791128'),
('nishantpatel99@gmail.com', '8726', '1509791366'),
('nishantpatel99@gmail.com', '2384', '1509791613'),
('nishantpatel99@gmail.com', '7860', '1509791774'),
('amisharani30@gmail.com', '7527', '1509793717'),
('amisharani30@gmail.com', '8041', '1509793960'),
('amisharani30@gmail.com', '4630', '1509793962'),
('amisharani30@gmail.com', '2050', '1509794704');

-- --------------------------------------------------------

--
-- Table structure for table `p_subscription`
--

CREATE TABLE `p_subscription` (
  `id` int(22) NOT NULL,
  `p_mail` varchar(200) NOT NULL,
  `package` varchar(200) NOT NULL,
  `t_id` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_subscription`
--

INSERT INTO `p_subscription` (`id`, `p_mail`, `package`, `t_id`, `date`) VALUES
(2, 'nishantpatel929@gmail.com', '500', '0.9735209643594185', '2017-09-25 21:51:08'),
(3, 'nishantpatel929@gmail.com', '500', '0.25849441183590743', '2017-09-25 21:51:36'),
(8, 'nishantpatel929@gmail.com', '500', '15712890', '2017-09-25 22:05:55'),
(7, 'nishantpatel929@gmail.com', '500', '0.7064959487938285', '2017-09-25 21:57:47'),
(9, 'indroroy@gmail.com', '500', '83243103', '2017-11-02 20:56:53'),
(10, 'indroroy@gmail.com', '500', '60413513', '2017-11-02 20:59:59'),
(11, 'sakshi.tayal2016@vit.ac.in', '2000', '17995300', '2017-11-02 21:17:57'),
(12, 'sakshi.tayal2016@vit.ac.in', '2000', '75588378', '2017-11-03 23:04:47'),
(13, 'sakshi.tayal2016@vit.ac.in', '2000', '17023010', '2017-11-04 14:07:50'),
(14, 'sakshi.tayal2016@vit.ac.in', '2000', '65483703', '2017-11-04 14:08:27'),
(15, 'sakshi.tayal2016@vit.ac.in', '2000', '60223999', '2017-11-04 14:09:39');

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
-- Indexes for table `disscussion25`
--
ALTER TABLE `disscussion25`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion26`
--
ALTER TABLE `disscussion26`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion27`
--
ALTER TABLE `disscussion27`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion28`
--
ALTER TABLE `disscussion28`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussion29`
--
ALTER TABLE `disscussion29`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_message`
--
ALTER TABLE `doctor_message`
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
-- Indexes for table `patient_message`
--
ALTER TABLE `patient_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_subscription`
--
ALTER TABLE `p_subscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `blog_pictures`
--
ALTER TABLE `blog_pictures`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disini`
--
ALTER TABLE `disini`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
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
-- AUTO_INCREMENT for table `disscussion25`
--
ALTER TABLE `disscussion25`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disscussion26`
--
ALTER TABLE `disscussion26`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disscussion27`
--
ALTER TABLE `disscussion27`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disscussion28`
--
ALTER TABLE `disscussion28`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disscussion29`
--
ALTER TABLE `disscussion29`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `doctor_message`
--
ALTER TABLE `doctor_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `nonuser_complain`
--
ALTER TABLE `nonuser_complain`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `patient_message`
--
ALTER TABLE `patient_message`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `p_subscription`
--
ALTER TABLE `p_subscription`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
