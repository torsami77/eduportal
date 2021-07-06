-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2018 at 02:49 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `57`
--

CREATE TABLE `57` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `57`
--

INSERT INTO `57` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(2, 98, 'Introduction to Computer', 'Gen 421', 'bacrs', 'SIS', 'completed', '2017', '2', 'regular', '73', 'B', '2017-05-17', '2017-05-21', NULL),
(3, 100, 'Introduction to Computer', 'Gen 421', 'bacrs', 'SIS', 'completed', '2017', '2', 'regular', '63', 'B', '2017-05-17', '2017-05-21', NULL),
(4, 145, 'Introduction to Computer', 'Gen 421', 'bacrs', 'SIS', 'completed', '2017', '2', 'regular', '47', 'D', '2017-05-17', '2017-05-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `58`
--

CREATE TABLE `58` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `58`
--

INSERT INTO `58` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(20, 98, 'Cross Cultural', 'CC 101', 'bacrs', '', '', '2017', '1', 'regular', '', '', '2017-09-08', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `59`
--

CREATE TABLE `59` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `59`
--

INSERT INTO `59` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(1, 98, 'Theology II', 'theo 002', 'bacrs', '', 'registered', '2017', '2', 'regular', '', '', '2017-05-17', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `60`
--

CREATE TABLE `60` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `60`
--

INSERT INTO `60` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(19, 98, 'Christian Divinity', 'CD 101', 'bacrs', '', '', '2017', '1', 'regular', '', '', '2017-09-08', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `61`
--

CREATE TABLE `61` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `ca` int(5) DEFAULT NULL,
  `exams` int(5) DEFAULT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `61`
--

INSERT INTO `61` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `ca`, `exams`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(6, 98, 'Cookery', 'Co 101', 'cbwi', '', '', '2017', '1', 'regular', NULL, NULL, '', '', '2017-09-08', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `62`
--

CREATE TABLE `62` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `63`
--

CREATE TABLE `63` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `gradedate` date NOT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `64`
--

CREATE TABLE `64` (
  `id` int(5) NOT NULL,
  `addnum` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `ca` varchar(255) DEFAULT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `regdate` date NOT NULL,
  `gradedate` date DEFAULT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `64`
--

INSERT INTO `64` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `ca`, `exam`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(2, 98, 'NBBN', 'NBBNBNB', 'bacrs', NULL, 'registered', '2017', '1', 'regular', NULL, NULL, NULL, NULL, '2017-12-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `71`
--

CREATE TABLE `71` (
  `id` int(5) NOT NULL,
  `addnum` int(5) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `ca` varchar(255) DEFAULT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `scale` int(5) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `gradedate` date DEFAULT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `71`
--

INSERT INTO `71` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `ca`, `exam`, `score`, `scale`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(1, 2018364, 'Philosophy and Religion', 'Pilre 112', 'bacrs', 'G.Y.', 'completed', '2018', '2', 'regular', '20', '40', '60', 4, 'B', '2018-01-11', '2018-02-14', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `72`
--

CREATE TABLE `72` (
  `id` int(5) NOT NULL,
  `addnum` int(5) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `ca` varchar(255) DEFAULT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `gradedate` date DEFAULT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `72`
--

INSERT INTO `72` (`id`, `addnum`, `title`, `code`, `programme`, `initials`, `status`, `year`, `semester`, `period`, `ca`, `exam`, `score`, `grade`, `regdate`, `gradedate`, `confirm`) VALUES
(1, 2018364, 'Music & Worship', 'MUSW 112', NULL, 'G.Y.', 'completed', '2021', 'summer', 'summer', '45', '54', '99', 'A', '2018-02-08', '2018-02-24', 'waiting'),
(2, 2018367, 'Music & Worship', 'MUSW 112', NULL, 'G.Y.', 'registered', '2021', 'summer', 'summer', '34', '36', '70', 'A', '2018-06-26', '2018-02-24', 'waiting'),
(3, 2018375, 'Music & Worship', 'MUSW 112', NULL, 'G.Y.', 'registered', '2021', 'summer', 'summer', '21', '41', '62', 'C', '2017-02-01', '2018-02-22', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `73`
--

CREATE TABLE `73` (
  `id` int(5) NOT NULL,
  `addnum` int(5) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `ca` varchar(255) DEFAULT NULL,
  `exam` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `gradedate` date DEFAULT NULL,
  `confirm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `algorithm`
--

CREATE TABLE `algorithm` (
  `id` int(5) NOT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `attendance` int(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `algorithm`
--

INSERT INTO `algorithm` (`id`, `institution`, `attendance`, `email`, `mobile`, `date`) VALUES
(1, 'ETSK', 3, 'torsami77@gmail.com', '08037367767', '2017-06-02'),
(2, 'ETSK', 3, 'torsami77@gmail.com', '08037367767', '2017-06-02'),
(3, 'ETSK', 3, 'torsami77@gmail.com', '08037367767', '2017-06-02'),
(4, 'KOWA', 4, 'torsami77@gmail.com', '08037367767', '2017-06-02'),
(5, 'KOWA', 4, 'torsami77@gmail.com', '08037367767', '2017-06-02'),
(6, 'ETSK', 3, 'torsami77@gmail.com', '08037367767', '2017-06-07'),
(7, 'ETSK', 2, 'torsami77@hotmail.com', '08037367767', '2017-09-16'),
(8, 'ETSK', 2, 'phpsqlwebdeveloper@gmail.com', '08037367767', '2017-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(5) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `email`, `password`, `bank`, `date`) VALUES
(9, 'torsami77@hotmail.com', '$2y$10$Y4ULCRjtCkqM18VB81KsFOK.eUDBcwr3ar00IMOone9foffgJolzS', 'Zenith', '0000-00-00'),
(10, 'bursar@etsk.sch', '$2y$10$soDowmQSjEyv9UOdfknmi.50BiE9r7Vpwx6I.WkP2j5cG6ciSnpnW', 'John Bako', '2017-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `allocated` varchar(10000) DEFAULT NULL,
  `bacrs` varchar(255) DEFAULT NULL,
  `baecrs` varchar(255) DEFAULT NULL,
  `batm` varchar(255) DEFAULT NULL,
  `batp` varchar(255) DEFAULT NULL,
  `bats` varchar(255) DEFAULT NULL,
  `bep` varchar(255) DEFAULT NULL,
  `cbwi` varchar(255) DEFAULT NULL,
  `ctpm` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `mabsnt` varchar(255) DEFAULT NULL,
  `mabsot` varchar(255) DEFAULT NULL,
  `mace` varchar(255) DEFAULT NULL,
  `mactpp` varchar(255) DEFAULT NULL,
  `maep` varchar(255) DEFAULT NULL,
  `mapt` varchar(255) DEFAULT NULL,
  `mapbc` varchar(255) DEFAULT NULL,
  `pgdps` varchar(255) DEFAULT NULL,
  `hour` int(5) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `disapproved` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `code`, `initials`, `allocated`, `bacrs`, `baecrs`, `batm`, `batp`, `bats`, `bep`, `cbwi`, `ctpm`, `dt`, `mabsnt`, `mabsot`, `mace`, `mactpp`, `maep`, `mapt`, `mapbc`, `pgdps`, `hour`, `level`, `semester`, `disapproved`, `date`) VALUES
(62, 'Intro to Comp', 'Gen123', 'A.G', 'A.G,2,regular,2019-D.N.E.,summer,summer,2022-ETSK/FAC/004/YJ,summer,summer,2030-G.Y.,1,regular,2018', 'bacrs', 'baecrs', 'batm', 'batp', 'bats', '', '', '', 'dt', '', '', '', '', '', '', '', '', 3, 100, '1', NULL, '2017-09-11'),
(63, 'Comp', 'Gen121', '', '', 'bacrs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 200, '1', 'disapproved', '2017-09-28'),
(64, 'NBBN', 'NBBNBNB', 'ETSK/FAC/004/YJ', '', 'bacrs', 'baecrs', 'batm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, 100, '1', NULL, '2017-10-28'),
(71, 'Philosophy and Religion', 'Pilre 112', 'A.G', 'A.G,summer,summer,2018-A.G,summer,summer,2028-D.N.E.,summer,summer,2022-Z.B.,2,regular,2019-G.Y.,2,regular,2018', 'bacrs', 'baecrs', 'batm', 'batp', 'bats', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 100, '1', NULL, '2018-01-10'),
(72, 'Music & Worship', 'MUSW 112', 'A.G', 'A.G,2,regular,2024-Z.B.,summer,summer,2023-G.Y.,summer,summer,2021', 'bacrs', 'baecrs', 'batm', 'batp', 'bats', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 200, '2', NULL, '2018-01-10'),
(73, 'Sports', 'SPT', NULL, NULL, 'bacrs', 'baecrs', 'batm', 'batp', 'bats', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 200, '1', NULL, '2018-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `dorm`
--

CREATE TABLE `dorm` (
  `id` int(5) NOT NULL,
  `abb` varchar(255) DEFAULT NULL,
  `dormitary` varchar(255) DEFAULT NULL,
  `dormfee` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dorm`
--

INSERT INTO `dorm` (`id`, `abb`, `dormitary`, `dormfee`) VALUES
(1, 'mos', 'Married - Old Structure', 3500),
(2, 'mrs', 'Married - Renovated Structure', 5000),
(3, 'tcd', 'T. C. Dorm', 2000),
(4, 'yak', 'Yako', 2500),
(5, 'rod', 'Rodabough', 2500),
(6, 'tas', 'Talatu - Single', 3000),
(7, 'taf', 'Talatu - Flat', 20000),
(8, 'gds', 'Grace Dorm Single', 4000),
(9, 'gdf', 'Grace Dorm Flat', 30000),
(10, 'fwc', 'Family Worship Center', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(5) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `othername` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `management` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `surname`, `firstname`, `othername`, `initials`, `title`, `discipline`, `email`, `management`, `status`, `password`, `date`) VALUES
(10, 'Anyway', 'Gambo', 'K', 'A.G', 'Rev.', '', 'registrar@etsk.sch', 'registrar', 'Opened', '$2y$10$Uglb0x/TIWaJA6IyRTIZ6eUyC5BMHgJEhXTCb4VqOhns.Z9egl4cO', '2017-05-12'),
(11, 'Gajere', 'Yusuf', 'G', 'G.Y.', 'Pst.', '', 'dean@etsk.sch', 'dean', '75', '$2y$10$SrGjx0T4yChTZHlz3sOmg..DuNjBxuguTdq2usN.7zdTzxJEz97nW', '0000-00-00'),
(12, 'Donald', 'Nwabodo', 'Eze', 'D.N.E.', 'Mr.', '', 'bursar@etsk.sch', 'bursar', '75', '$2y$10$SrGjx0T4yChTZHlz3sOmg..DuNjBxuguTdq2usN.7zdTzxJEz97nW', '2017-05-12'),
(13, 'Gajere', 'Yusuf', 'John', 'ETSK/FAC/004/YJ', 'Pst.', '', 'gajerey@gmail.com', '', '', '$2y$10$w.h/5AYbkH01KBnNmRR.s.zDR3boXjHzMgrC4jGx1fkquH7hKjoVe', '2017-09-28'),
(14, 'Bobai', 'Zwandien', '', 'Z.B.', 'Mr.', NULL, 'zwandienb@yahoo.com', NULL, NULL, '$2y$10$5I4KNF4Vl/TyzIW7YMqDPeR0hlOvMeRp1aH7CybS2RyLBA9oARSV2', '2018-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `loginName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fName` varchar(40) DEFAULT NULL,
  `reff` varchar(20) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL,
  `count` int(5) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `loginName`, `password`, `fName`, `reff`, `account`, `sub`, `count`, `Date`) VALUES
(2, 'clicksamst@yahoo.com', '$2y$10$nyHSBk4XImYyF00izkbEh.9T.wiJf0.NV9W.ygourJbfNAY7cWrXm', 'Obinna Emeka', '17', 'U14015848', 'unpaid', 56, '2017-04-24'),
(3, 'email@email.com', '$2y$10$ivF3LpnLg8Ckf8noonWH9OS4zSC8TIbNPleWrEPDG7QxPlOSmLXRy', 'Joel Thomas', '17', 'U14015848', 'unpaid', 2, '2017-04-24'),
(4, 'vfvvv@drrfrfr.cke', '$2y$10$xu9BHzyYNiBHC.8ZibownO4mKYc2ovyRmZw8NEjRa2iqx7R5VK70q', 'Juan Martinez', '17', 'U14015848', 'unpaid', 0, '2017-04-24'),
(5, 'jssjcsbj@dc.cn', '$2y$10$7WPFQjV9U6ihQr8soKUndObUfBV0bTxRvuEwiJXCLJlvggzFqrL6i', 'Patrick Hassan', '2', 'U14015848', 'unpaid', 0, '2017-04-24'),
(6, 'samitov@gmail.com', '$2y$10$agXv4Amd2irx4CoDAZVfm.0OMZ1n7t8ietQA80h4tH359UzMtETli', 'Sabisabi Omotola', '7', 'U14015848', 'unpaid', 0, '2017-04-24'),
(7, 'samitov@yahoo.com', '$2y$10$MxEBbzSx4Hkh7MsQIhtLB.3IDw5hOVhbKV2S3YuCKtKeUu/f35adO', 'Olade Issiah', '17', 'U14015848', 'unpaid', 0, '2017-04-24'),
(8, 'samv@yahoo.com', '$2y$10$OK/ulsHFmtVh7HAd/dXS0ubKsNAjH6ti0kCgdcoQ0SZ9tOnKooXza', 'John Kolasnikov', '2', 'U14015848', 'unpaid', 0, '2017-04-24'),
(9, 'kolarov@yahoo.com', '$2y$10$Jy4fAZ8c4jN69KakPhw4dOJ5wyuIsiTdazIFYU3/aZJZ4Y.8mlYgu', 'Joshua Omale', '8', 'U14015848', 'unpaid', 0, '2017-04-24'),
(11, 'email@hotmail.com', '$2y$10$wXSvE92.3xR9vp/mdNxueOI5wDF8n1n2bHrQKy57f0RFU5L7XXS8a', 'Usman Saminu', '7', 'U14015848', 'unpaid', 0, '2017-04-24'),
(17, 'mehmeh@gmail.com', '$2y$10$4LFw3u9qqpAFtlT5Baht0euMvUX8dgQjMO2CMaPHvGUAUOOKe8zVG', 'Mary Samuel', '2', 'U14015848', 'unpaid', 214, '2017-09-19'),
(18, 'torsami77@hotmail.co', '$2y$10$qwXjDfDZxQx9KRHnmPLusOdxhp7aqo4UBuoJlENoCZjb.1m21f9Oy', 'Sammi Sammore', '63', 'U14015848', 'unpaid', 0, '2017-09-23'),
(19, 'vcvk@hgfghj.jhgfg', '$2y$10$hTik9ozITX8jhH3DDaWe3el2N.dw4TT6zXT/U0hwSjPIR0NXwthOi', 'Godswill Simon', '17', 'U14015848', 'unpaid', 0, '2017-10-25'),
(20, 'torsaddjhdjddmi77@gm', '$2y$10$MUs5FRtlLWBIVU95aCVmz./DBzp4/eyYQzDIlCsMP5Qz1Lbn0YVj2', 'Richmond Amanda', '63', 'U14015848', 'unpaid', 0, '2017-10-25'),
(21, 'torsabvdmmmi77@gmail', '$2y$10$ERaX1KYWzmWe2kx5rUyjrejXr2i6lLWTDJXVOi0eTnHmPU2YrPgbC', 'Christopher Peace', '2', 'U14015848', 'unpaid', 0, '2017-10-25'),
(22, 'mnbvd@yah.ckjn', '$2y$10$AKzm0kUil9MLEjORZpajEO4e4qISHQDWIG7y5Krwdh/.hpP1IzcmG', 'Ricardo Junior', '63', 'U14015848', 'unpaid', 0, '2017-10-25'),
(23, 'torsamkjhgfi77@gmail', '$2y$10$Ckjn97pD3LYKsdc5AEpPeuf9UqWvd2/2K8HjjgNm/PzGsOWKuaAWa', 'Emerson Elderson', '2', 'U14015848', 'unpaid', 0, '2017-10-25'),
(24, 'torsamkjhgfi77@gmail', '$2y$10$sdY4T7vMWiaF5Ph9uy892OOG.JL9J/sYDMQiM7NpisguJVD7OmjVO', 'Gosling Everton', '2', 'U14015848', 'unpaid', 0, '2017-10-25'),
(25, 'torskhgfamkjhgfi77@g', '$2y$10$NUghhOuG0xwBof6g..5AcOnpZSUCVnidqMKjk/0nvlLgah32Ncjj2', 'Emile Traore', '2', 'U14015848', 'unpaid', 0, '2017-10-25'),
(26, 'torsedeami77@gmail.c', '$2y$10$YrTZMjXEesJHxxJg699UnOD/E7EtTp8vpG2nLUt7HRY0FswWZRNi2', 'Yayah Kada Keita', '2', 'U14015848', 'unpaid', 0, '2017-10-25'),
(27, 'jhgf@lkjhgf.ljhg', '$2y$10$pJlddQPyKlsmXSUPWwjaduq7VRpi77HtambD2GCb4iOcZlnlVySCa', 'Bouba Mane', '2', 'U14015848', 'unpaid', 0, '2017-10-25'),
(28, 'jejeebe@kefe.de', '$2y$10$.djG8NDpR3IzsNIbTIn3C.G/zmNXz8ZJf7JjONBD4HzADNC4b6jTG', 'Roberto Fernando', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(34, 'torsamdefrfrrfrfrrrr', '$2y$10$Mi0qxWhWnZKT36U3cCTKf.Evc0tMFoXd8BefhnmIUtz8o5k1ptjzi', 'Djemba Ahmed', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(35, 'ededededeeedede@dede', '$2y$10$KzHAg1WDZgrKxBgxm3ZQPuYGiZSVXe2jBW5qVYTKI1inL4lx1J5W.', 'Mogidi Cynthia', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(36, 'bbbbbbbbbbbbbbbbbbbb', '$2y$10$6CmVuEIhiPFoLaOSRTRh6e7nVk4qGFtp22brWE9F3JOp1sDBTezHS', 'Bobai Kasham', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(37, 'tobbbbbbbbbbbbbbbbbbbbbbbbbbbrsami77@gmail.com', '$2y$10$D4DqA23zjAXF7re02rnnmuBKZLmztzNxgtGNXZLFcsdIQDnYu5Lcy', 'Damascus Oliviera', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(38, 'tommmmmmmmmmmmmmmmmmmmmmmmmmrsami77@gmail.com', '$2y$10$ScZ20RkiMA6e7iaE0u4l9.5F3D.dBzHOrzDpRAznoac3IVZE4jpKa', 'Thiery Kamara', '63', 'U14015848', 'unpaid', 0, '2017-10-27'),
(39, 'hfhfhfhfhf@ccfcf.xxdxd', '$2y$10$pO3npNAMOwvosMDoG3E3PO52SJyfnAemwOQxF419zt/uF0KpNXfzy', 'Shevriy Asharkov', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(40, 'erfrfrfrfrf@xerede.rfrfrf', '$2y$10$52/zAM5OoomAzrMYZL3wSOsYtrvhPV1yMHLVyhhCqmJURI7dgSeBG', 'Chervi Sinama', '2', 'U14015848', 'unpaid', 0, '2017-10-27'),
(41, 'Samore@circulat.com', '', 'Habiba Jamilu', '63', 'U14015848', NULL, NULL, NULL),
(42, 'Samore@circulat.com', '', 'Chiwenlu Idiaga', '63', 'U14015848', NULL, NULL, NULL),
(43, 'Samore@circulat.com', '', 'Kabiru Ahmed', '70', 'U14015848', NULL, NULL, NULL),
(47, 'Samore@circulat.com', '$2y$10$gvAZKaH3ovPtt9oAA8BE4.087IWtMm5DipwkfmsUWAFS8OIhxXiCK', 'Soromang Batanga', '72', 'U14015848', NULL, NULL, '2017-12-14'),
(63, 'torsami77@hotmail.com', '$2y$10$7A7sc16CpCo8fCGbdkkJmuHsdBZzURIwK7nhf5vnAET3NZiJiSQTu', 'Kosi Lamido', '70', 'U14015848', 'paid', NULL, '2017-12-18'),
(70, 'torsami77@gmail.com', '$2y$10$VLiC1I7VBaOlKkHP2PtuBOWPqhkjvu/AaDxcfiMx7sdGrYopKTK7W', 'Morinya botaman', '72', 'U14015848', 'paid', NULL, '2017-12-19'),
(72, 'sam12771011@gmail.com', '$2y$10$ohlsM8r9zn7uSoeIISi53On9YYRVQs0/FxjZ37yJEpG81veDRD1sG', 'Emeka Ikechuku', '74', 'U14015848', NULL, NULL, '2017-12-19'),
(74, 'phpsqlwebdeveloper@gmail.com', '$2y$10$Qn8DuZVFve1EYFy.umQVKOklZxh33NF5BXWVTvCjBT1T8B/toHZ0a', 'Oga Samila', '39', 'U14015848', NULL, NULL, '2017-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` int(5) NOT NULL,
  `major` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `abb` varchar(255) DEFAULT NULL,
  `duration` int(5) DEFAULT NULL,
  `examdate` date DEFAULT NULL,
  `interviewdate` date DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `accreditation` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `major`, `programme`, `abb`, `duration`, `examdate`, `interviewdate`, `class`, `accreditation`, `date`) VALUES
(1, 'Major', 'B.A. in Christian Religions Studies (Accredited by the University of Jos)', 'bacrs', 400, '2018-01-15', '2018-02-06', 'ug', 'accredited', '2017-01-12'),
(2, 'Major', 'B.A. in Education, (Christian Religious Studies)', 'baecrs', 400, '2018-01-15', '2018-02-06', 'ug', '', '2017-01-12'),
(3, 'Major', 'B.A. in Theology, (Missions)', 'batm', 400, '2018-01-15', '2018-02-06', 'ug', '', '2017-01-12'),
(4, 'Major', 'B.A. in Theology, (Pastoral)', 'batp', 400, '2018-01-15', '2018-02-06', 'ug', '', '0000-00-00'),
(5, 'Major', 'B.A. in Theology, (Systematics)', 'bats', 400, '2018-01-15', '2018-02-06', 'ug', '', '2017-01-12'),
(6, 'Major', 'Basic English Programme', 'bep', 200, '2018-02-06', '0000-00-00', 'cert', '', '2017-01-12'),
(7, 'Major', 'Certificate in Bible, (Women&#39s Institute)', 'cbwi', 200, '2018-02-06', '0000-00-00', 'cert', '', '2017-01-12'),
(8, 'Major', 'Certificate in Theology, (Pastoral Major)', 'ctpm', 200, '2018-02-06', '0000-00-00', 'cert', '', '2017-01-12'),
(9, 'Major', 'Diploma in Theology,', 'dt', 200, '0000-00-00', '0000-00-00', 'dip', '', '2017-01-12'),
(10, 'Major', 'M.A. in Biblical Studies, New Testament', 'mabsnt', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(11, 'Major', 'M.A. in Biblical Studies, Old Testament', 'mabsot', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(12, 'Major', 'M.A. in Christian Education', 'mace', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(13, 'Major', 'M.A. in Christian Theology of Public Policies', 'mactpp', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(14, 'Major', 'M.A. in Expository Preaching', 'maep', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(15, 'Major', 'M.A. in Pastoral Theology', 'mapt', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(16, 'Major', 'M.A. in Psychology and Biblical Counselling', 'mapbc', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(17, 'Major', 'Post-Graduate Diploma in Pastoral Studies', 'pgdps', 200, '2017-05-10', '2017-05-04', 'pg', '', '2017-01-12'),
(18, 'Major', 'Preliminaries', 'prems', 200, NULL, '2018-02-06', 'ug', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `id` int(5) NOT NULL,
  `addnum` varchar(255) DEFAULT NULL,
  `11` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `13` varchar(11) DEFAULT NULL,
  `14` varchar(255) DEFAULT NULL,
  `15` varchar(255) DEFAULT NULL,
  `16` varchar(255) DEFAULT NULL,
  `17` varchar(255) DEFAULT NULL,
  `18` varchar(255) DEFAULT NULL,
  `19` varchar(255) DEFAULT NULL,
  `110` varchar(255) DEFAULT NULL,
  `111` varchar(255) DEFAULT NULL,
  `112` varchar(255) DEFAULT NULL,
  `113` varchar(255) DEFAULT NULL,
  `114` varchar(255) DEFAULT NULL,
  `115` varchar(255) DEFAULT NULL,
  `116` varchar(255) DEFAULT NULL,
  `117` varchar(255) DEFAULT NULL,
  `118` varchar(255) DEFAULT NULL,
  `119` varchar(255) DEFAULT NULL,
  `120` varchar(255) DEFAULT NULL,
  `121` varchar(255) DEFAULT NULL,
  `122` varchar(255) DEFAULT NULL,
  `123` varchar(255) DEFAULT NULL,
  `124` varchar(255) DEFAULT NULL,
  `125` varchar(255) DEFAULT NULL,
  `126` varchar(255) DEFAULT NULL,
  `127` varchar(255) DEFAULT NULL,
  `128` varchar(255) DEFAULT NULL,
  `129` varchar(255) DEFAULT NULL,
  `130` varchar(255) DEFAULT NULL,
  `131` varchar(255) DEFAULT NULL,
  `132` varchar(255) DEFAULT NULL,
  `133` varchar(255) DEFAULT NULL,
  `134` varchar(255) DEFAULT NULL,
  `135` varchar(255) DEFAULT NULL,
  `21` varchar(255) DEFAULT NULL,
  `22` varchar(255) DEFAULT NULL,
  `23` varchar(255) DEFAULT NULL,
  `24` varchar(255) DEFAULT NULL,
  `25` varchar(255) DEFAULT NULL,
  `26` varchar(255) DEFAULT NULL,
  `27` varchar(255) DEFAULT NULL,
  `28` varchar(255) DEFAULT NULL,
  `29` varchar(255) DEFAULT NULL,
  `210` varchar(255) DEFAULT NULL,
  `211` varchar(255) DEFAULT NULL,
  `212` varchar(255) DEFAULT NULL,
  `213` varchar(255) DEFAULT NULL,
  `214` varchar(255) DEFAULT NULL,
  `215` varchar(255) DEFAULT NULL,
  `216` varchar(255) DEFAULT NULL,
  `217` varchar(255) DEFAULT NULL,
  `218` varchar(255) DEFAULT NULL,
  `219` varchar(255) DEFAULT NULL,
  `220` varchar(255) DEFAULT NULL,
  `221` varchar(255) DEFAULT NULL,
  `222` varchar(255) DEFAULT NULL,
  `223` varchar(255) DEFAULT NULL,
  `224` varchar(255) DEFAULT NULL,
  `225` varchar(255) DEFAULT NULL,
  `226` varchar(255) DEFAULT NULL,
  `227` varchar(255) DEFAULT NULL,
  `228` varchar(255) DEFAULT NULL,
  `229` varchar(255) DEFAULT NULL,
  `230` varchar(255) DEFAULT NULL,
  `231` varchar(255) DEFAULT NULL,
  `232` varchar(255) DEFAULT NULL,
  `233` varchar(255) DEFAULT NULL,
  `234` varchar(255) DEFAULT NULL,
  `235` varchar(255) DEFAULT NULL,
  `236` varchar(255) DEFAULT NULL,
  `237` varchar(255) DEFAULT NULL,
  `238` varchar(255) DEFAULT NULL,
  `31` varchar(255) DEFAULT NULL,
  `32` varchar(255) DEFAULT NULL,
  `33` varchar(255) DEFAULT NULL,
  `34` varchar(255) DEFAULT NULL,
  `35` varchar(255) DEFAULT NULL,
  `36` varchar(255) DEFAULT NULL,
  `37` varchar(255) DEFAULT NULL,
  `38` varchar(255) DEFAULT NULL,
  `39` varchar(255) DEFAULT NULL,
  `310` varchar(255) DEFAULT NULL,
  `311` varchar(255) DEFAULT NULL,
  `312` varchar(255) DEFAULT NULL,
  `313` varchar(255) DEFAULT NULL,
  `314` varchar(255) DEFAULT NULL,
  `315` varchar(255) DEFAULT NULL,
  `316` varchar(255) DEFAULT NULL,
  `317` varchar(255) DEFAULT NULL,
  `318` varchar(255) DEFAULT NULL,
  `319` varchar(255) DEFAULT NULL,
  `320` varchar(255) DEFAULT NULL,
  `321` varchar(255) DEFAULT NULL,
  `322` varchar(255) DEFAULT NULL,
  `323` varchar(255) DEFAULT NULL,
  `324` varchar(255) DEFAULT NULL,
  `325` varchar(255) DEFAULT NULL,
  `326` varchar(255) DEFAULT NULL,
  `327` varchar(255) DEFAULT NULL,
  `328` date DEFAULT NULL,
  `329` varchar(255) DEFAULT NULL,
  `330` varchar(255) DEFAULT NULL,
  `331` varchar(255) DEFAULT NULL,
  `332` varchar(255) DEFAULT NULL,
  `333` varchar(255) DEFAULT NULL,
  `334` varchar(255) DEFAULT NULL,
  `335` varchar(255) DEFAULT NULL,
  `336` varchar(255) DEFAULT NULL,
  `337` varchar(255) DEFAULT NULL,
  `338` varchar(255) DEFAULT NULL,
  `339` varchar(255) DEFAULT NULL,
  `340` varchar(255) DEFAULT NULL,
  `341` varchar(255) DEFAULT NULL,
  `342` varchar(255) DEFAULT NULL,
  `343` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`id`, `addnum`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `110`, `111`, `112`, `113`, `114`, `115`, `116`, `117`, `118`, `119`, `120`, `121`, `122`, `123`, `124`, `125`, `126`, `127`, `128`, `129`, `130`, `131`, `132`, `133`, `134`, `135`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `210`, `211`, `212`, `213`, `214`, `215`, `216`, `217`, `218`, `219`, `220`, `221`, `222`, `223`, `224`, `225`, `226`, `227`, `228`, `229`, `230`, `231`, `232`, `233`, `234`, `235`, `236`, `237`, `238`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `310`, `311`, `312`, `313`, `314`, `315`, `316`, `317`, `318`, `319`, `320`, `321`, `322`, `323`, `324`, `325`, `326`, `327`, `328`, `329`, `330`, `331`, `332`, `333`, `334`, `335`, `336`, `337`, `338`, `339`, `340`, `341`, `342`, `343`) VALUES
(1, '98', 'Che Technologies', '30 Years', 'Nephew', 'Very well', 'Yes', 'Yes', 'N.A.', 'N.A.', 'No', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Endurance', 'Strong', 'Endurance', 'Availability', 'Highly Recommend', 'bjbjb', 'cdcdcd', 'cccddcdc', '1', 'Very well', '1', '1', 'Very well', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '1', 'Yes', '1', 'Highly Recommend', 'gghhbh', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '9787', '7787', '446', '867576', 'Regular', 'Corrected', 'Normal', 'Normal', '2017-04-26', '3434343', '34343434', 'Negative', 'ererererere', 'reerererere', 'Negative', 'Negative', 'Negative', 'vfffd', 'dddddcd', 'vddddd', 'Negative', 'ddcdvddd', 'bjbbjbjbb', ''),
(233, '332', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(234, '333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(235, '334', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(236, '335', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(237, '336', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(238, '337', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(239, '338', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(240, '2017/339', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(241, '2017/340', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(242, '2017/341', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(243, '342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(244, '2017/343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(245, '2017/344', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(246, '2017//345', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(247, '2017_346', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(248, '2017347', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(249, '2017348', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(250, '2017349', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(251, '2017350', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(252, '2017351', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(253, '2017352', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(254, '2017353', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(255, '2017354', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(256, '2017355', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(257, '2017356', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(258, '2017357', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(259, '2017358', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(260, '2017359', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(261, '2017360', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(262, '2018364', 'ETSK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, '2018365', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, '2018366', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, '2018367', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, '2018368', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, '2018369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, '2018370', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, '2018371', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, '2018372', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, '2018373', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, '2018374', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, '2018375', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(5) NOT NULL,
  `addnum` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `currentyear` varchar(255) DEFAULT NULL,
  `currentsemester` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `spend` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `addnum`, `courses`, `currentyear`, `currentsemester`, `period`, `spend`, `date`) VALUES
(2, '98', '64', '2017', '1', 'regular', '28500', '2017-12-12'),
(3, '2018364', '71', '2018', '2', 'regular', '22700', '2018-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(5) NOT NULL,
  `transcode` varchar(255) DEFAULT NULL,
  `teller` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `addnum` varchar(20) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `signed-up` varchar(1) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `transcode`, `teller`, `branch`, `bank`, `addnum`, `programme`, `signed-up`, `date`) VALUES
(323, '$2y$10$jrOnjUQ15zeAqSB5xqUGT.0sgxnVdxTxSJaubfVOPaRijE97jq0EW', '46565454456454', 'Lagos', '', '323', '', '', '0000-00-00'),
(324, '$2y$10$SH9gDisqUg0sQ1q58tm4NO2aPC7jcBE/MDW4Oh.xngqn8K0OjqMKS', '33543432321', 'Abuja', '', '324', '', '', '0000-00-00'),
(325, '$2y$10$qPt6lp.7A53ILm5qAwuxaOwg6k//D7A4Has2ehDxVw/tJJCSa.K/q', '465565464545', 'Jos', '', '325', '', '', '2017-05-04'),
(326, '$2y$10$prFyFvK8k9g2ERfV6DqUiOZoDd.Xjugr.LOohVoFSlgcgBDRpdZkC', '553222423', 'Kafanchan', '', '326', 'dt', '', '2017-05-04'),
(327, '$2y$10$5F0sgLkBDIWwZ.aVDmAkLuAvdwZhW3jpshQ/Tx/N1HtXezB4EsO8m', '9865434578', 'Kagoro', '', '327', 'batm', '', '2017-05-04'),
(328, '$2y$10$Ya/ODSMDnbXsJb8UvpSYKem.A6wLX1oBS/vN2McCSNt1ahBdgAKUy', '398678947', 'Kagoro', '', '328', 'batm', '', '2017-05-04'),
(329, '$2y$10$Tb0JSe/ZDNgOPyVijk.qlOPJCkXBxX3rWHelW9fxobOsGorV1RHEq', '65456789543', 'Kwoi', '', '329', 'mactpp', '', '2017-05-04'),
(330, '$2y$10$P/OWQNIIXfE1dteOA.BMkekOT9L7koJtrQ5N92.Vhim2TFNJ5Z/c6', '2436543454', 'Jos', '', '330', 'baecrs', '', '2017-05-04'),
(331, '$2y$10$ihOqHu/9npYW3t8aVq3tf.gNHvf3gvcHVWqH5HmWYY5S0Xf/QtbuK', '46565643', 'Kwoi', '', '331', 'mabsot', '', '2017-05-04'),
(332, '$2y$10$KfevO.L7/Xn4gQsbpK37v.jTI8.rTDqf6lscSlAnCJJfUoMBLCuW2', '098765234567', 'Kagoro', '', '332', 'batm', '', '2017-05-04'),
(333, '$2y$10$i/l/KI8.kDsZbcLLFAizauYVFtTFJPtkQwYTyvJ.D/nZ9Vgf6vXmi', '237876543', 'Zonkwa', '', '333', '', '', '2017-05-04'),
(334, '$2y$10$LGfcHXjn4n1QGQDNgHiQAehElCZhXBmjong4P1rL2hecnjIFuUFqy', '232323233223', 'Kagoro', '', '334', 'batm', '', '2017-05-12'),
(335, '$2y$10$O7fBdkLGkrdKWEG5jTwKX.UvEbcfSVKav..kOOzBPsjsdTyGb5/7W', '83443468373766', 'Kagoro', '', '335', 'batp', '', '2017-05-12'),
(336, '$2y$10$ds/w.q1lc3qAMDlkHmMSR.rxy5MvKcEhgWGnT7INmRHNdG7WsqzeS', '47897656789', 'Jos', '', '336', 'bacrs', '1', '2017-05-12'),
(337, '$2y$10$JpXX0pS67ty.gMRSLDlTFeGNX3PhIj9j31LkVLk2GXTQMRlxgtzIe', '56789765678', 'Kafanchan', '', '337', 'batp', '1', '2017-05-12'),
(338, '$2y$10$KP/SkBUGhwPeIe/TvUZWSu2xW0mIHmbyqxfMwjaVqYlVhEhTt1Pa6', '19876544567', 'Kafanchan', '', '338', 'bats', '', '2017-05-13'),
(339, '', '', 'kkkhkhkhk', '', '', 'baecrs', '', '0000-00-00'),
(340, '', '', 'Jos', '', '', 'baecrs', '', '0000-00-00'),
(341, '', '', 'kkkhkhkhk', '', '', 'baecrs', '', '0000-00-00'),
(342, '$2y$10$shZ1ihNkHuvciparKA7KxedBD2zQyZxz3BvavFnI3WJJkzTR.OyhG', '234785765474', 'kkkhkhkhk', '', '342', 'baecrs', '', '2017-05-14'),
(343, '$2y$10$svbNy4q8bya1QPstjjYG4u5W.ny6XsjKapdK/VACxpV/2/wqopHAm', '2347857654741', 'kkkhkhkhk', '', '2017/343', 'baecrs', '', '2017-05-14'),
(344, '$2y$10$12/lhbiTyL0fONlV6v4kfe7ozCfFIseRMZNAe24EWQzikyLIzSsle', '1234676543', 'Adamawa', '', '2017/344', 'baecrs', '', '2017-05-14'),
(345, '$2y$10$hCUNgwiopA6e4Z21BfqXOu0nLsSvIkILrfZ.ysiVFZMH2dt8H7DFS', '123467654355', 'Adamawa', '', '2017//345', 'baecrs', '', '2017-05-14'),
(346, '$2y$10$JIj/FeC4V61AdM8ANrJUKeCIs/zJcr9IYtrYsIiD0gx5G.X4BfT3S', '1234676543559', 'Adamawa', '', '2017_346', 'baecrs', '', '2017-05-14'),
(347, '$2y$10$ZvgkQbh7MpCJbGtW6t504OyXQd3JzDrhw0mRsMVK8NMSsLGgcRZOa', '4676543559', 'Adamawa', '', '2017347', 'baecrs', '', '2017-05-14'),
(348, '$2y$10$HKVxObK3fz33Ktqp.uCsiuBe8NqcolF2eagm.VitcCnV9ht7PY8u.', '987653567', 'Jos', '', '2017348', '', '', '2017-08-14'),
(349, '$2y$10$b8lJ7pskeUJocHlKGaSaM.47C3mQ6DV8YwMPOggmj939/J0eTDLJq', '987654234567890', 'Jos', '', '2017349', '', '', '2017-08-14'),
(350, '$2y$10$P2zNgEetSsOlZG82AgxROOEKwohQEuUE9ItCswdD7FIDJ5IEYydgi', '45654356765', 'Kafanchan', 'Select Receiving Bank', '2017350', '', '', '2017-08-14'),
(351, '$2y$10$qnbh/52UQy.4DdX4/6llF.v3jGKggIUAsFcAHEX3tdSRvSwOK03pG', '87654456', '987654567', 'Select Receiving Bank', '2017351', 'bacrs', '', '2017-08-14'),
(352, '$2y$10$R0GkLPvj2LYq3XGZ0mMKquTx8Tz/bC65sTp4QyBr8AlCpo7ouhzoy', '567897654345678', 'Kafanchan', 'Access Bank', '2017352', 'bacrs', '', '2017-08-14'),
(353, '$2y$10$EVu.w6N4i74aK3VRrWGw4uYn8usCI7XlBaul/c6E1nYaGqE/2hGnq', '98765456788', 'Kafanchan', 'Access Bank', '2017353', 'mabsot', '', '2017-08-14'),
(354, '$2y$10$GkP5D0szCzIgSx3udOEuxOlJC1fxxoj65MZgSscXdZW5yGRv6nGEi', '23456788765', 'Kogi', 'Diamond Bank', '2017354', 'batp', '1', '2017-08-30'),
(355, '$2y$10$mHdXAbeOMe/23adc8cSQxOoHpVlcwi7HkB2OHBjChKwB0P2ouyCFe', '4678987654', 'Kagoro', 'First Bank', '2017355', 'batp', '1', '2017-08-31'),
(356, '$2y$10$2H3I.bOBKfABCrY3GQn4.OHAPdqSpRCRFA1.N6Ix2Qpt61mNh/FIO', '19876544', 'Jos', 'Access Bank', '2017356', 'batp', '', '2017-09-08'),
(357, '$2y$10$sPJy.mO1JrysgMH86QqamONcmOLYyRlT50BgyOcxVQQG1Vt06R7su', '47897656789343', 'John Bako', 'Diamond Bank', '2017357', 'bep', '', '2017-09-08'),
(358, '$2y$10$I8KYcvoQi8lQjUFFf/3SJOHbGZhaJZY5FeU1M/A/1zXdjKpZaHHMu', '19876544567765456', 'John Bako', 'Diamond Bank', '2017358', 'dt', '', '2017-09-08'),
(359, '$2y$10$HJLisHmW0RO4EKUj5W6XN.tpNTCxwCmNelo1rCpEt33ZQR7o14.yW', '2345678765', 'John Bako', 'First Bank', '2017359', 'baecrs', '1', '2017-09-28'),
(360, '$2y$10$J/Ariiw6Zyrulsm4eLzf5.3slXnmQVvcj.1vtRAa7HP0NnYuWm4w.', '198765445677654567', 'John Bako', 'Access Bank', '2017360', 'batp', '', '2017-10-28'),
(361, '$2y$10$rzHYYaephOZQW/HH5VyTl.8JydFKR1ZFt9mb8rQkboRBvsGolnvlS', '97654345678909876', 'John Bako', 'Access Bank', '2017361', 'baecrs', NULL, '2017-12-16'),
(362, '$2y$10$V5kWVsUx.eIU.hKSr9WnX.FJOi6BXhilbNZJfjq1F/2OudIfVMHxO', '987654678', 'John Bako', 'Access Bank', '2017362', 'bacrs', NULL, '2017-12-16'),
(363, '$2y$10$qD9AWMLuCXY9uBh66BDaCupgrpUvcv2ZUgDNgyH9xJ2QLwA.6Ekt6', '98765434567', 'John Bako', 'First Bank', '2017363', 'batm', NULL, '2017-12-16'),
(364, '$2y$10$l/32o.XwBEs1Nhp4uCmg2.oXt0AbK4KO1z6Eo2IOT5ZhzapaLT2gC', '8765432345678', 'John Bako', 'Diamond Bank', '2018364', 'bacrs', '1', '2018-01-04'),
(365, '$2y$10$fvj0hVGoXnA2ijEVxyzLUuOL7y.mraQMZftvfF93zJL/mD6a2fJpK', '87654345678', 'John Bako', 'First Bank', '2018365', 'bats', '', '2018-01-05'),
(366, '$2y$10$zTAQTaXh0pMUe/4.2CHzbeXbxKk30lNGm/nR.8zq7ICpAHMiEaSq6', '87656789', 'John Bako', 'Sterling Bank', '2018366', 'cbwi', '', '2018-01-05'),
(367, '$2y$10$XP8jztX4vCBprAwXgubQNuzWpwsxXVxtbIrUM1GQdMlsXWIUdkH6u', '7654345678', 'John Bako', 'Sterling Bank', '2018367', 'ctpm', '', '2018-01-05'),
(368, '$2y$10$KZHuiW2os0hIWbdqsHB2SeYNxotWE9yY4AQrH7bHESA6UOnGomiKy', '761234589', 'John Bako', 'Diamond Bank', '2018368', 'baecrs', '', '2018-02-23'),
(369, '$2y$10$T1SxmwwZmAeUdqJC5WfoQ.dAUHDK4IBmlTcp745cxDeg7wl7gC5EC', '65432345678', '', 'Access Bank', '2018369', 'batp', '', '2018-02-25'),
(370, '$2y$10$ZIteYbqmsYvlFcig8uQ6wOu/.RZdBGkWVpFiy.wECWjlt2vQ9Ap6W', '87654321456', 'John Bako', 'Diamond Bank', '2018370', 'baecrs', '', '2018-02-25'),
(371, '$2y$10$dPNDVSsLpCbNcak29MlLj.BT54M82z9uan7sO1MQDjb8hg87Gpxe.', '765345678', 'John Bako', 'Diamond Bank', '2018371', 'batm', '', '2018-03-08'),
(372, '$2y$10$li4JBydy2AYTfUHV88PEC.hxQ0cNbRiJOdadBoruE7yDL8ra4dZva', '765432345678', 'John Bako', 'U.B.A.', '2018372', 'batm', '', '2018-03-08'),
(373, '$2y$10$ofiL/M1GJtuNHYOZeW5ma.fUWbfSu.2D1oBpy0yyjeeTxALyvYleG', '7345678976', 'John Bako', 'Diamond Bank', '2018373', 'ctpm', '', '2018-03-08'),
(374, '$2y$10$iAduznNSR9kMnIRUQY1Rqe9/.7UVFChrBIWCF0raq4fBYXc2TEDjS', '8765345678', 'John Bako', 'First Bank', '2018374', 'batm', '', '2018-03-08'),
(375, '$2y$10$HvPiCXflXm9bg34vGW8qI.XSfRAnpE4DQn5D5ra4VzNNArJPBKY1W', '67655455878', 'John Bako', 'Diamond Bank', '2018375', 'bats', '', '2018-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(5) NOT NULL,
  `addnum` int(5) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `datestarted` date DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `homeadd` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `bplace` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `outside` varchar(255) DEFAULT NULL,
  `marital` varchar(255) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `wedded` varchar(255) DEFAULT NULL,
  `ages` varchar(255) DEFAULT NULL,
  `engaged` varchar(255) DEFAULT NULL,
  `health` varchar(255) DEFAULT NULL,
  `physique` varchar(255) DEFAULT NULL,
  `sponsor` varchar(255) DEFAULT NULL,
  `school1` varchar(255) DEFAULT NULL,
  `from1` date DEFAULT NULL,
  `to1` date DEFAULT NULL,
  `cert1` varchar(255) DEFAULT NULL,
  `grade1` varchar(255) DEFAULT NULL,
  `certdate1` date DEFAULT NULL,
  `school2` varchar(255) DEFAULT NULL,
  `from2` date DEFAULT NULL,
  `to2` date DEFAULT NULL,
  `cert2` varchar(255) DEFAULT NULL,
  `grade2` varchar(255) DEFAULT NULL,
  `certdate2` date DEFAULT NULL,
  `school3` varchar(255) DEFAULT NULL,
  `from3` date DEFAULT NULL,
  `to3` date DEFAULT NULL,
  `cert3` varchar(255) DEFAULT NULL,
  `grade3` varchar(255) DEFAULT NULL,
  `certdate3` date DEFAULT NULL,
  `school4` varchar(255) DEFAULT NULL,
  `from4` date DEFAULT NULL,
  `to4` date DEFAULT NULL,
  `cert4` varchar(255) DEFAULT NULL,
  `grade4` varchar(255) DEFAULT NULL,
  `certdate4` date DEFAULT NULL,
  `school5` varchar(255) DEFAULT NULL,
  `from5` date DEFAULT NULL,
  `to5` date DEFAULT NULL,
  `cert5` varchar(255) DEFAULT NULL,
  `grade5` varchar(255) DEFAULT NULL,
  `certdate5` date DEFAULT NULL,
  `denomination` varchar(255) DEFAULT NULL,
  `dcc` varchar(255) DEFAULT NULL,
  `pastor` varchar(255) DEFAULT NULL,
  `caddress` varchar(255) DEFAULT NULL,
  `baptised` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `worked` varchar(255) DEFAULT NULL,
  `held` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `eaddress` varchar(255) DEFAULT NULL,
  `emaddress` varchar(255) DEFAULT NULL,
  `ref1` varchar(255) DEFAULT NULL,
  `refmobile1` varchar(255) DEFAULT NULL,
  `refemail1` varchar(255) DEFAULT NULL,
  `refpasscode1` varchar(255) DEFAULT NULL,
  `refcomment1` varchar(255) DEFAULT NULL,
  `ref2` varchar(255) DEFAULT NULL,
  `refmobile2` varchar(255) DEFAULT NULL,
  `refemail2` varchar(255) DEFAULT NULL,
  `refpasscode2` varchar(255) DEFAULT NULL,
  `refcomment2` varchar(255) DEFAULT NULL,
  `ref3` varchar(255) DEFAULT NULL,
  `refmobile3` varchar(255) DEFAULT NULL,
  `refemail3` varchar(255) DEFAULT NULL,
  `refpasscode3` varchar(255) DEFAULT NULL,
  `refcomment3` varchar(255) DEFAULT NULL,
  `court` varchar(255) DEFAULT NULL,
  `convicted` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `cdiscipline` varchar(255) DEFAULT NULL,
  `why` varchar(255) DEFAULT NULL,
  `what` varchar(255) DEFAULT NULL,
  `christian` varchar(255) DEFAULT NULL,
  `basis` varchar(255) DEFAULT NULL,
  `per` varchar(255) DEFAULT NULL,
  `aca` varchar(255) DEFAULT NULL,
  `affi` varchar(255) DEFAULT NULL,
  `oth` varchar(255) DEFAULT NULL,
  `datecompleted` date DEFAULT NULL,
  `admitted` date DEFAULT NULL,
  `adstatus` varchar(255) DEFAULT NULL,
  `duration` int(5) DEFAULT NULL,
  `probation` varchar(255) NOT NULL,
  `deferment` date DEFAULT NULL,
  `balance` int(255) DEFAULT '0',
  `reglog` int(5) DEFAULT NULL,
  `dormitary` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `addnum`, `email`, `pnumber`, `password`, `programme`, `datestarted`, `last`, `first`, `other`, `homeadd`, `postal`, `bday`, `bplace`, `country`, `state`, `outside`, `marital`, `spouse`, `wedded`, `ages`, `engaged`, `health`, `physique`, `sponsor`, `school1`, `from1`, `to1`, `cert1`, `grade1`, `certdate1`, `school2`, `from2`, `to2`, `cert2`, `grade2`, `certdate2`, `school3`, `from3`, `to3`, `cert3`, `grade3`, `certdate3`, `school4`, `from4`, `to4`, `cert4`, `grade4`, `certdate4`, `school5`, `from5`, `to5`, `cert5`, `grade5`, `certdate5`, `denomination`, `dcc`, `pastor`, `caddress`, `baptised`, `occupation`, `position`, `worked`, `held`, `employer`, `eaddress`, `emaddress`, `ref1`, `refmobile1`, `refemail1`, `refpasscode1`, `refcomment1`, `ref2`, `refmobile2`, `refemail2`, `refpasscode2`, `refcomment2`, `ref3`, `refmobile3`, `refemail3`, `refpasscode3`, `refcomment3`, `court`, `convicted`, `discipline`, `cdiscipline`, `why`, `what`, `christian`, `basis`, `per`, `aca`, `affi`, `oth`, `datecompleted`, `admitted`, `adstatus`, `duration`, `probation`, `deferment`, `balance`, `reglog`, `dormitary`) VALUES
(8, 98, 'torsami77@gmail.com', '08037367767', '$2y$10$nU1Y52T4s6sU/txOMMhfLeHGfhGGXhpNs8de1gex/WYg8dR6Zs0Um', 'bacrs', '2017-02-24', 'Samuel', 'Samson', 'Torv', 'N0 2b Tudun Wada Jos', 'ECWA Theological Seminary Kagoro, P.M.B. 35, Kagoroo', '1987-11-10', 'Jos', 'Nigeria', 'Bauchi', '', 'Single', '', '', '', 'Yes', 'Yes', '', 'Self-Sponsorship', 'Albakans Pre-science School', '1990-08-01', '1999-05-01', 'First School Leaving Certificate', 'Distinction', '2017-02-24', 'G.S.S. Tudun Wada, Jos', '1999-08-01', '2005-05-01', 'Secondary School Certificate', 'Distinction', '2012-02-24', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', 'ECWA', 'Jos', 'Rev. Ezekiel Edgar', 'ECWA Goodnews Mado Road', 'Yes', 'Computer Programmer', 'Project Manager', '7 Years', '7 Years', 'Computer Scholars', '200 Tudun Wada Ring Road, Jos', '', 'Dilas Yusuf', '08051234591', 'clicksamst@yahoo.com', '$2y$10$LOrhS97K6DPpHYPONnSGweAzvX3ieCIS8EIEZSQsSaqtSmRaG0IHC', 'completed', 'Friday Mamman', '08028272891', 'torsami77@gmail.com', '$2y$10$f2U74sAR8MPblaiGAbuXiO/5VSOLonCvRSCfsyGyH5pT9F5gRoNqy', '', 'Kafang Buki Zamani', '08064342354', 'clicksamst@yahoo.com', '$2y$10$sjobZjxVlI78qqCZ2GZmIOcYyX7UEV2SVaSyzfrq2B.6o5v4lbzie', '', 'No', '', 'No', '', 'Answer call', 'Inspired word of God', 'Yes', 'I have received Salvation and the Holy Spirit lives in me', 'Yes', 'Yes', 'Yes', 'Yes', '2018-03-03', '2017-05-16', 'Provisional', NULL, '', '2019-06-03', 988755199, 1, 2),
(218, 336, 'mail@mail.com', '09037367767', '$2y$10$xWCHf2BYo9qVxZyKtkvdleCeNVQ2osE/ajY3xTM9OZRR/Ahoin0OO', 'bacrs', '2017-05-12', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Peter Odoh', '08083298310', 'peterodoh@yahoo.com', '$2y$10$Ix1baaR1dFCj5Dpvd1n5euLEvUHrbrYNJUB7FMERzf9ZPdSzZzJzy', '', 'Mamman Friday Ive', '08037367767', 'clicksamst@yahoo.com', '$2y$10$LDdjPk/laH522x7zvD9g3e6llEWR6WSjp/LX.jdcMBNBofd9GVVZ2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-01', '2017-09-01', 'Probasional', NULL, '', NULL, 0, 0, 0),
(219, 337, 'me@gmail.com', '08037367767', '$2y$10$WwrnDImP8QNgnLqYvVedYuuBW0cMeRGjtDRryTlfFKj.v/9oGmFmG', '', '2017-05-12', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', NULL, '', NULL, 0, 0, 0),
(238, 2017354, 'clicksamst@yahoo.com', '08037367767', '$2y$10$3ZC/kww6l6VChuhSEndaVO5v71X4DIwto91MVBw0GF46NpSvl152y', 'batp', '2017-08-30', 'Isaac', 'Jochebed', 'Kyanchat', 'Fada Kagoro', 'Fada Kagoro', '1990-08-30', 'Kagoro', 'Nigeria', 'Kaduna', '', 'Married', 'Married', '2017-08-30', '', '', 'Yes', '', 'Self Sponsorship', 'Albakans Pre-science School', '1938-08-31', '2017-08-17', 'First School Leaving Certificate', 'First class', '2017-08-31', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', 'ECWA', 'Kagoro DCC', 'Rev. Luka Nboi', 'ECWA Gospel Fadan Kagoro', 'Yes', 'Applicant', 'N.A', 'N.A.', 'N.A.', 'N.A.', 'N.A.', '', 'Dilas Yusuf', '08051234591', 'dilasm@gmail.com', '$2y$10$YAegp00KViXnXNZjgTQqie/0kHtGHTo2/zUeYs8UnrFqJYC7P53kO', '', 'Friday Mamman', '08028272891', 'torsami77@gmail.com', '$2y$10$xzADZ7PDdrkgptY2yvkfcOJUH.5ggXrevvb417eoZZl21UPBiooQW', '', 'Kafang Buki Zamani', '08064342354', 'clicksamst@yahoo.com', '$2y$10$/q9DU/dNwvxyzZ6hAyTK9.sEw/DwSKTkz9m0b1fUgNqT94B1/9R2O', '', 'No', '', 'No', '', 'Answer call', 'Salvation', 'Yes', 'Salvation', 'Yes', 'Yes', 'Yes', '', '2017-08-30', '2017-08-31', 'Provisional', NULL, '', NULL, 10912, 0, 0),
(239, 2017355, 'stephendick@gmail.com', '0809074816364', '$2y$10$dSh5K3/9IqDIfbmGgnXik.PL8I4IQSq72PAzhPYGk5jl8nBSDsIka', 'batp', '2017-08-31', 'Dickson', 'Filibus', 'Stephen', 'ECWA Garaji', 'ECWA Garaji', '1980-11-10', 'Kagoro', 'Nigeria', 'Kaduna', '', 'Married', 'Sweetheart', '2000-04-28', '15, 12, 10', '', 'Yes', '', 'Self Sponsorship', 'Nankam Memorial', '1992-07-01', '1992-07-01', 'All School', 'Excellence', '1992-07-01', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', 'Others', 'APC', 'El Rufai', 'Sokapu', 'Yes', 'Teacher', 'General', 'some years', 'some years', 'Principal', 'Esssk', '', 'Donald Suku', '08023829382', 'dodosukuyo@yahoo.com', '$2y$10$ZEBeft94Pa6xSfHA5uxbguBsffMiguHUBw1dM9JC//ax/2YaHnHsC', '', 'Kamsit Zats', '09021837482', 'kzatsit@yahoo.com', '$2y$10$kFeG7ksd5WaeqHTslzS9/OkCRTmyptAmfCC0H1BDkEbeZfF16begG', '', 'Awok Joshua', '09082738273', 'awokjo@gmail.com', '$2y$10$vCNcMF7LwVgSMNtI2NmfnON7i0hQOgYSiUx.u8QAIYfr8AXIECDQi', '', 'No', '', 'No', '', 'Preach the word', 'Salvation', 'Yes', 'Salvation', 'Yes', 'Yes', 'Yes', 'Yes', '2017-08-31', '2017-08-31', 'Provisional', NULL, '', NULL, 10, 0, 0),
(243, 2017359, 'yusufgajere@gmail.com', '08026873447', '$2y$10$CsabSeJCd16hdq84FPdBu.Zfi5aji0qxnVzJiReaSZXaq7zblCy6i', 'baecrs', '2017-09-28', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', NULL, '', NULL, 0, 0, 0),
(244, 2017360, '', '', '', 'batp', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', NULL, '', NULL, 0, 0, 0),
(245, 2018364, 'torsami77@hotmail.com', '08037367767', '$2y$10$f2u2ot4AFOxhrqJyfvhwY./dyUzMTrxOLlNCKERizuunAyHc1H6Ze', 'bacrs', '2018-01-09', 'Jediel', 'Polycarp', 'Ozo', 'Ung Clinic', 'Christ Baptist Church', '1985-11-01', 'Jos', 'Nigeria', 'Adamawa', '', 'Single', '', '', '', 'Yes', 'Yes', '', 'God\'s Grace', 'Albakaans Pre- Science School', '1990-02-01', '1997-05-30', 'Primary School leaving cert', 'Distinction', '1997-06-02', 'Baptist High School Jos', '2000-01-03', '2010-06-01', 'Secondary School Leaving Certificate', 'Distinction', '2010-06-01', 'University of Jos', '2011-10-03', '2016-12-05', 'First  Degree', 'Excellence', '2016-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 'Baptist', 'Rev. Chris', 'Angwan Yashi', 'Yes', 'Hotelier', 'Manager', '5years', '5Years', 'Lasgidi', 'Ojodo Berger, Lagos', NULL, 'Rev. Chri Ngige', '08037367767', 'clicksamst@yahoo.com', '$2y$10$9UHunwi4vlXWAVvcsjn/A.4TCVwp6oa.NU7SQ16dw3fCGriP3/WW6', NULL, 'Mr. Albakaans', '08037367767', 'torsami77@gmail.com', '$2y$10$FrB3Mo3c/f9dBtzdaE1gd.eequ496amvI0/VP0uh7P7zLbsH/UKGu', NULL, 'Zobragi Joel', '08037367767', 'torsami77@hotmai.com', '$2y$10$tlEMNJrmTERORKhy3vQ/UOJ8JFAKigJeNz5HGd8jFL/QGD4SAHE7m', NULL, 'No', '', 'No', '', 'To Learn more about The word of God', 'That the Bible is the Inspired Word of God', 'Yes', 'Because i have receuved Jesus Christ as my Lord and Saviour', 'Yes', 'Yes', 'Yes', 'Yes', '2018-01-10', '2018-01-10', 'Probasional', NULL, '', NULL, 323635, 1, 3),
(247, 2018366, 'phpsqlwebdeveloper@gmail.com', NULL, NULL, 'pgdps', '2018-01-09', 'Jediel', 'Polycarp', 'Ozo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-10', '2018-02-27', 'Probasional', NULL, '', NULL, 223701, NULL, NULL),
(248, 2018367, NULL, NULL, NULL, 'ctpm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL),
(249, 2018371, 'sam12771011@gmail.com', NULL, '', 'bacrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-06', NULL, NULL, '', NULL, 2000000, NULL, NULL),
(250, 2018368, NULL, NULL, NULL, 'baecrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL),
(251, 2018369, NULL, NULL, NULL, 'batp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL),
(252, 2018370, NULL, NULL, NULL, 'baecrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL),
(253, 754334567, 'dfgh@dghj.fsd', NULL, '94105', 'mabsnt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-05', '2', 0, 'If Admission status is probation; provide details', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(5) NOT NULL,
  `addnum` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `previous` varchar(255) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `teller` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `addnum`, `payment`, `previous`, `amount`, `teller`, `bank`, `branch`, `date`) VALUES
(1, '327', 'batm', '0', 3500, '9865434578', '10', 'Kagoro', '2017-05-04'),
(2, '328', 'batm', '0', 5500, '398678947', '10', 'Kagoro', '2017-05-04'),
(3, '329', 'mactpp', '0', 5500, '65456789543', '10', 'Kwoi', '2017-05-04'),
(4, '330', 'baecrs', '0', 3500, '2436543454', '10', 'Jos', '2017-05-04'),
(5, '331', 'mabsot', '0', 5500, '46565643', '10', 'Kwoi', '2017-05-04'),
(6, '332', 'batm', '0', 3500, '098765234567', '10', 'Kagoro', '2017-05-04'),
(7, '98', 'tuition', '0', 50000, '98764908765', '10', 'Bauchi', '2017-05-04'),
(8, '98', 'tuition', '0', 50, '97876456', '10', 'Kwoi', '2017-05-04'),
(9, '98', 'tuition', '0', 10, '98765678', '10', 'Bauchi', '2017-05-04'),
(10, '98', 'tuition', '0', 5, '35765423456', '10', 'Kafanchan', '2017-05-04'),
(11, '98', 'tuition', '50065', 10000, '034567890', '10', 'Jos', '2017-05-04'),
(12, '98', 'tuition', '60065', 50, '345676543', '10', 'Kafanchan', '2017-05-04'),
(13, '333', '', '0', 3500, '237876543', '10', 'Zonkwa', '2017-05-04'),
(14, '98', 'tuition', '20000', 20500, 'Transferred to', 'Share service', '333', '2017-05-07'),
(15, '333', 'tuition', '5500', 20500, 'Recieved from', 'Share service', '98', '2017-05-07'),
(16, '98', 'tuition', '5000', 20700, 'Transferred to', 'Share service', '333', '2017-05-07'),
(17, '333', 'tuition', '20500', 20700, 'Recieved from', 'Share service', '98', '2017-05-07'),
(18, '98', 'tuition', '4800', 800, 'Transferred to', 'Share service', '333', '2017-05-07'),
(19, '333', 'tuition', '20700', 800, 'Recieved from', 'Share service', '98', '2017-05-07'),
(20, '98', 'tuition', '4000', -1, 'Transferred', 'Share service', 'To 333', '2017-05-09'),
(21, '333', 'tuition', '21500', -1, 'Recieved', 'Share service', 'From 98', '2017-05-09'),
(22, '98', 'tuition', '4001', 5, 'Transferred', 'Share service', 'To 333', '2017-05-09'),
(23, '333', 'tuition', '21499', 5, 'Recieved', 'Share service', 'From 98', '2017-05-09'),
(24, '334', 'batm', '0', 3500, '232323233223', '10', 'Kagoro', '2017-05-12'),
(25, '335', 'batp', '0', 3500, '83443468373766', '10', 'Kagoro', '2017-05-12'),
(26, '336', 'bacrs', '0', 3500, '47897656789', '10', 'Jos', '2017-05-12'),
(27, '337', 'batp', '0', 3500, '56789765678', '10', 'Kafanchan', '2017-05-12'),
(28, '338', 'bats', '0', 3500, '19876544567', '10', 'Kafanchan', '2017-05-13'),
(29, '2017/339', 'baecrs', '0', 3500, '234785', '10', 'kkkhkhkhk', '2017-05-14'),
(30, '2017/340', 'baecrs', '0', 3500, '1234576', '10', 'Jos', '2017-05-14'),
(31, '2017/341', 'baecrs', '0', 3500, '23478576547', '10', 'kkkhkhkhk', '2017-05-14'),
(32, '342', 'baecrs', '0', 3500, '234785765474', '10', 'kkkhkhkhk', '2017-05-14'),
(33, '2017/343', 'baecrs', '0', 3500, '2347857654741', '10', 'kkkhkhkhk', '2017-05-14'),
(34, '2017/344', 'baecrs', '0', 3500, '1234676543', '10', 'Adamawa', '2017-05-14'),
(35, '2017//345', 'baecrs', '0', 3500, '123467654355', '10', 'Adamawa', '2017-05-14'),
(36, '2017_346', 'baecrs', '0', 3500, '1234676543559', '10', 'Adamawa', '2017-05-14'),
(37, '2017347', 'baecrs', '0', 3500, '4676543559', '10', 'Adamawa', '2017-05-14'),
(38, '2017348', '', '0', 3500, '987653567', '10', 'Jos', '2017-08-14'),
(39, '2017349', '', '0', 3500, '987654234567890', '10', 'Jos', '2017-08-14'),
(40, '2017350', '', '0', 3500, '45654356765', 'Select Receiving Bank', 'Kafanchan', '2017-08-14'),
(41, '2017351', 'bacrs', '0', 3500, '87654456', 'Select Receiving Bank', '987654567', '2017-08-14'),
(42, '2017352', 'bacrs', '0', 3500, '567897654345678', 'Access Bank', 'Kafanchan', '2017-08-14'),
(43, '2017353', 'mabsot', '0', 5500, '98765456788', 'Access Bank', 'Kafanchan', '2017-08-14'),
(44, '98', 'tuition', '3530000', 50000, '45678907654', 'Diamond Bank', 'Jos', '2017-08-14'),
(45, '2017354', 'batp', '0', 3500, '23456788765', 'Diamond Bank', 'Kogi', '2017-08-30'),
(46, '2017355', 'batp', '0', 3500, '4678987654', 'First Bank', 'Kagoro', '2017-08-31'),
(47, '98', 'tuition', '500', 4, 'Transferred', 'Share service', 'To 2017354', '2017-09-04'),
(48, '2017354', 'tuition', '0', 4, 'Recieved', 'Share service', 'From 98', '2017-09-04'),
(49, '98', 'Course Registration', '15996', 26000, 'Deducted', 'Credit Units', '---', '2017-09-08'),
(50, '98', 'Course Registration', '15996', 26000, 'Deducted', 'Credit Units', '---', '2017-09-08'),
(51, '98', 'Change of Courses', '-10004', 26000, 'Refunded', 'Credit Units', '---', '2017-09-08'),
(52, '98', 'Course Registration', '15996', 43500, 'Deducted', 'Credit Units', '---', '2017-09-08'),
(53, '98', 'Change of Courses', '-27504', 43500, 'Refunded', 'Credit Units', '---', '2017-09-08'),
(54, '98', 'Course Registration', '15996', 8500, 'Deducted', 'Credit Units', '---', '2017-09-08'),
(55, '98', 'Change of Courses', '7496', 8500, 'Refunded', 'Credit Units', '---', '2017-09-08'),
(56, '98', 'Course Registration', '15996', 26000, 'Deducted', 'Credit Units', '---', '2017-09-08'),
(57, '2017356', 'batp', '0', 3500, '19876544', 'Access Bank', 'Jos', '2017-09-08'),
(58, '2017357', 'bep', '0', 3500, '47897656789343', 'Diamond Bank', 'John Bako', '2017-09-08'),
(59, '98', 'tuition', '-10004', 208838, '323231212232', 'Sterling Bank', 'John Bako', '2017-09-08'),
(60, '2017358', 'dt', '0', 3500, '19876544567765456', 'Diamond Bank', 'John Bako', '2017-09-08'),
(61, '2017354', 'tuition', '4', 10888, '1234576467', 'Diamond Bank', 'John Bako', '2017-09-08'),
(62, '98', 'Change of Courses', '198834', 26000, 'Refunded', 'Credit Units', '---', '2017-09-08'),
(63, '98', 'tuition', '224834', 10, 'Transferred', 'Share service', 'To 2017354', '2017-09-08'),
(64, '2017354', 'tuition', '10892', 10, 'Recieved', 'Share service', 'From 98', '2017-09-08'),
(65, '98', 'tuition', '224824', 10, 'Transferred', 'Share service', 'To 2017354', '2017-09-08'),
(66, '2017354', 'tuition', '10902', 10, 'Recieved', 'Share service', 'From 98', '2017-09-08'),
(67, '98', 'Course Registration', '224814', 8500, 'Deducted', 'Credit Units', '---', '2017-09-08'),
(68, '98', 'Change of Courses', '216314', 8500, 'Refunded', 'Credit Units', 'Requested by 98', '2017-09-08'),
(69, '98', 'Course Registration', '224814', 8000, 'Deducted', 'Credit Units', 'Requested by 98', '2017-09-08'),
(70, '2017359', 'baecrs', '0', 3500, '2345678765', 'First Bank', 'John Bako', '2017-09-28'),
(71, '98', 'Change of Courses', '216814', 8000, 'Refunded', 'Credit Units', 'Requested by 98', '2017-09-28'),
(72, '2017360', 'batp', '0', 3500, '198765445677654567', 'Access Bank', 'John Bako', '2017-10-28'),
(73, '2017355', 'tuition', '0', 10, '8765433456789', 'Diamond Bank', 'John Bako', '2017-10-28'),
(74, '201735588', 'tuition', '0', 10, '876543345678977', 'Diamond Bank', 'John Bako', '2017-10-28'),
(75, '98', 'Course Registration', '224814', 28500, 'Deducted', 'Credit Units', 'Requested by 98', '2017-12-12'),
(76, '98', 'Change of Courses', '196314', 28500, 'Refunded', 'Credit Units', 'Requested by 98', '2017-12-12'),
(77, '98', 'Course Registration', '224814', 28500, 'Deducted', 'Credit Units', 'Requested by 98', '2017-12-12'),
(78, '98', 'tuition', '196314', 8765, '8763467890098', 'Diamond Bank', 'John Bako', '2017-12-16'),
(79, '98', 'tuition', '205079', 4321, '1111111111', 'U.B.A.', 'John Bako', '2017-12-16'),
(80, '98', 'tuition', '209400', 4322, '87643456789', 'Access Bank', 'John Bako', '2017-12-16'),
(81, '98', 'tuition', '213722', 23, '098765', 'First Bank', 'John Bako', '2017-12-16'),
(82, '98', 'tuition', '213745', 9876, '987654345678900987', 'Sterling Bank', 'John Bako', '2017-12-16'),
(83, '98', 'tuition', '223621', 987654567, '934567890098', 'Sterling Bank', 'John Bako', '2017-12-16'),
(84, '98', 'tuition', '987878188', 2333, '087272292', 'Sterling Bank', 'John Bako', '2017-12-16'),
(85, '98', 'tuition', '987880521', 975678, '76543456789', 'Access Bank', 'John Bako', '2017-12-16'),
(86, '2018364', 'bacrs', NULL, 3500, '8765432345678', 'Diamond Bank', 'John Bako', '2018-01-04'),
(87, '98', 'tuition', '988856199', 500, '987654345678', 'Access Bank', 'John Bako', '2018-01-04'),
(88, '2018365', 'Under-Graduate &#40; bats &41# ', NULL, 3500, '87654345678', 'First Bank', 'John Bako', '2018-01-05'),
(89, '2018366', 'Under-Graduate &#40; cbwi &41# ', NULL, 3500, '87656789', 'Sterling Bank', 'John Bako', '2018-01-05'),
(90, '2018367', 'Under-Graduate &#40; ctpm &41# ', NULL, 3500, '7654345678', 'Sterling Bank', 'John Bako', '2018-01-05'),
(91, '2018364', 'Course Registration', '200000000', 22700, 'Deducted', 'Credit Units', 'Requested by 2018364', '2018-01-11'),
(92, '2018364', 'tuition', '199977300', 10000, '876543234567', 'Diamond Bank', 'John Bako', '2018-02-18'),
(93, '2018364', 'tuition', '7646', 2000, '8676547620', '', 'John Bako', '2018-02-18'),
(94, '2018364', 'tuition', '9646', 18999, '8676547344620', '', 'John Bako', '2018-02-18'),
(95, '2018364', 'tuition', '28645', 18999, '754345678', '', 'John Bako', '2018-02-18'),
(96, '2018364', 'tuition', '47644', 18999, '764567866', '', 'John Bako', '2018-02-18'),
(97, '2018364', 'tuition', '66643', 18999, '7699999', '', 'John Bako', '2018-02-18'),
(98, '2018364', 'tuition', '85642', 18999, '8887654', '', 'John Bako', '2018-02-18'),
(99, '2018364', 'tuition', '104641', 18999, '445454554', '', 'John Bako', '2018-02-18'),
(100, '2018364', 'tuition', '123640', 18999, '99994554', '', 'John Bako', '2018-02-18'),
(101, '2018364', 'tuition', '142639', 18999, '578665', '', 'John Bako', '2018-02-18'),
(102, '2018364', 'tuition', '161638', 18999, '97532356', '', 'John Bako', '2018-02-18'),
(103, '2018366', 'tuition', '', 74567, '77777543', '', 'John Bako', '2018-02-18'),
(104, '2018364', 'tuition', '180637', 18999, '763456786', '', 'John Bako', '2018-02-18'),
(105, '2018366', 'tuition', '74567', 74567, '234567788', '', 'John Bako', '2018-02-18'),
(106, '2018364', 'tuition', '199636', 18999, '976345677', '', 'John Bako', '2018-02-18'),
(107, '2018366', 'tuition', '149134', 74567, '763456775', '', 'John Bako', '2018-02-18'),
(108, '98', 'Tuition Sharing', '988856699', 5000, 'Transferred', 'Share service', 'To 2018364', '2018-02-22'),
(109, '2018364', 'tuition', '218635', 5000, 'Recieved', 'Share service', 'From 98', '2018-02-22'),
(110, '98', 'Tuition Sharing', '988851699', 100000, 'Transferred', 'Share service', 'To 2018364', '2018-02-22'),
(111, '2018364', 'tuition', '223635', 100000, 'Recieved', 'Share service', 'From 98', '2018-02-22'),
(112, '2018368', 'Under-Graduate &#40; baecrs &41# ', NULL, 3500, '761234589', 'Diamond Bank', 'John Bako', '2018-02-23'),
(113, '2018369', 'Under-Graduate &#40; batp &41# ', NULL, 3500, '65432345678', 'Access Bank', '', '2018-02-25'),
(114, '2018370', 'Under-Graduate &#40; baecrs &41# ', NULL, 3500, '87654321456', 'Diamond Bank', 'John Bako', '2018-02-25'),
(118, '2018374', 'Under-Graduate ( B.A. in Theology, (Missions) ) ', NULL, 3500, '8765345678', 'First Bank', 'John Bako', '2018-03-08'),
(119, '98', 'tuition', '988751699', 3500, '332238765432345678', 'Diamond Bank', 'John Bako', '2018-03-13'),
(120, '2018375', 'Under-Graduate ( B.A. in Theology, (Systematics) ) ', NULL, 3500, '67655455878', 'Diamond Bank', 'John Bako', '2018-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `trfvisitors`
--

CREATE TABLE `trfvisitors` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `57`
--
ALTER TABLE `57`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `58`
--
ALTER TABLE `58`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `59`
--
ALTER TABLE `59`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `60`
--
ALTER TABLE `60`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `61`
--
ALTER TABLE `61`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `62`
--
ALTER TABLE `62`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `63`
--
ALTER TABLE `63`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `64`
--
ALTER TABLE `64`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `71`
--
ALTER TABLE `71`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `72`
--
ALTER TABLE `72`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `73`
--
ALTER TABLE `73`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `algorithm`
--
ALTER TABLE `algorithm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dorm`
--
ALTER TABLE `dorm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trfvisitors`
--
ALTER TABLE `trfvisitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `57`
--
ALTER TABLE `57`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `58`
--
ALTER TABLE `58`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `59`
--
ALTER TABLE `59`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `60`
--
ALTER TABLE `60`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `61`
--
ALTER TABLE `61`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `62`
--
ALTER TABLE `62`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `63`
--
ALTER TABLE `63`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `64`
--
ALTER TABLE `64`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `71`
--
ALTER TABLE `71`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `72`
--
ALTER TABLE `72`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `73`
--
ALTER TABLE `73`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `algorithm`
--
ALTER TABLE `algorithm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `dorm`
--
ALTER TABLE `dorm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `referee`
--
ALTER TABLE `referee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;
--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `trfvisitors`
--
ALTER TABLE `trfvisitors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
