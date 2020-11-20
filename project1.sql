-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 11:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(10) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `role`) VALUES
('head@gmail.com', 'head', 'head'),
('mayank@gmail.com', 'mayank', 'admin'),
('prateek@gmail.com', 'prateek', 'admin'),
('prince@gmail.com', 'prince', 'admin'),
('t@gmail.com', 't1', 'admin'),
('teacher1@gmail.com', 'teacher1', 'admin'),
('teacher2@gmail.com', 'teacher2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5fb66c74d2e21', '5fb66c750b571'),
('5fb66c7552153', '5fb66c7558300'),
('5fb66c75a4e76', '5fb66c75ab017'),
('5fb66c75e7f54', '5fb66c75f0bba'),
('5fb66c765ca0e', '5fb66c769e422'),
('5fb6b89005bd4', '5fb6b8902e2f2'),
('5fb796a51af2a', '5fb796a550f80');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('mayank@gmail.com', '5fb66c27e8303', 2, 5, 1, 4, '2020-11-19 13:01:41'),
('son1@gmail.com', '5fb66c27e8303', 2, 5, 1, 4, '2020-11-19 17:31:38'),
('mayank@gmail.com', '5fb6b868e8852', 2, 1, 1, 0, '2020-11-19 18:25:43'),
('mayank@gmail.com', '5fb795ac21863', 2, 1, 1, 0, '2020-11-20 10:18:13'),
('a@gmail.com', '5fb795ac21863', 2, 1, 1, 0, '2020-11-20 10:29:25'),
('a@gmail.com', '5fb6b868e8852', 2, 1, 1, 0, '2020-11-20 10:31:11'),
('a@gmail.com', '5fb66c27e8303', 2, 5, 1, 4, '2020-11-20 10:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5fb66c74d2e21', 'apple', '5fb66c750b569'),
('5fb66c74d2e21', 'Mango', '5fb66c750b56e'),
('5fb66c74d2e21', 'Orange', '5fb66c750b56f'),
('5fb66c74d2e21', 'Cup of Coffee', '5fb66c750b571'),
('5fb66c7552153', 'using ppp', '5fb66c7558300'),
('5fb66c7552153', 'using print now', '5fb66c7558306'),
('5fb66c7552153', '', '5fb66c7558307'),
('5fb66c7552153', '', '5fb66c7558308'),
('5fb66c75a4e76', '', '5fb66c75ab017'),
('5fb66c75a4e76', '', '5fb66c75ab01d'),
('5fb66c75a4e76', '', '5fb66c75ab028'),
('5fb66c75a4e76', '', '5fb66c75ab02a'),
('5fb66c75e7f54', '', '5fb66c75f0bba'),
('5fb66c75e7f54', '', '5fb66c75f0bbd'),
('5fb66c75e7f54', '', '5fb66c75f0bbe'),
('5fb66c75e7f54', '', '5fb66c75f0bbf'),
('5fb66c765ca0e', '', '5fb66c769e422'),
('5fb66c765ca0e', '', '5fb66c769e427'),
('5fb66c765ca0e', '', '5fb66c769e428'),
('5fb66c765ca0e', '', '5fb66c769e429'),
('5fb6b89005bd4', 'opeator', '5fb6b8902e2ec'),
('5fb6b89005bd4', 'function', '5fb6b8902e2f0'),
('5fb6b89005bd4', 'method', '5fb6b8902e2f1'),
('5fb6b89005bd4', 'nota', '5fb6b8902e2f2'),
('5fb796a51af2a', 'NOTHING', '5fb796a550f7a'),
('5fb796a51af2a', 'JOKE', '5fb796a550f7e'),
('5fb796a51af2a', 'SOmething', '5fb796a550f7f'),
('5fb796a51af2a', 'theory of automata and formal language', '5fb796a550f80');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5fb66c27e8303', '5fb66c74d2e21', 'What is java', 4, 1),
('5fb66c27e8303', '5fb66c7552153', 'how to print in java', 4, 2),
('5fb66c27e8303', '5fb66c75a4e76', '', 4, 3),
('5fb66c27e8303', '5fb66c75e7f54', '', 4, 4),
('5fb66c27e8303', '5fb66c765ca0e', '', 4, 5),
('5fb6b868e8852', '5fb6b89005bd4', 'What is new in c', 4, 1),
('5fb795ac21863', '5fb796a51af2a', 'What is TAFL', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`, `email`) VALUES
('5fb66c27e8303', 'Java', 2, 0, 5, 1, 'KIndly give the examination sincearly. otherwise Mayank, Son will beat you.', '#java', '2020-11-19 12:59:19', 'prateek@gmail.com'),
('5fb6b868e8852', 'C Proghramming', 2, 0, 1, 1, 'now', '#C', '2020-11-19 18:24:40', 'teacher1@gmail.com'),
('5fb795ac21863', 'Tafl', 2, 0, 1, 1, 'FHOD DO', '#TAFL', '2020-11-20 10:08:44', 'teacher1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('a@gmail.com', 6, '2020-11-20 10:35:00'),
('mayank@gmail.com', 10, '2020-11-20 10:18:13'),
('son1@gmail.com', 2, '2020-11-19 17:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Prattte', 'M', 'gy', 'a@gmail.com', 9123322322, '827ccb0eea8a706c4c34a16891f84e7b'),
('mayank', 'M', 'GLA', 'mayank@gmail.com', 999999999999, '308a3820e4cccbe043cb5228de5e71e3'),
('sonpratap', 'M', 'GLA University', 'son1@gmail.com', 888888888888, '498d3c6bfa033f6dc1be4fcc3c370aa7'),
('pp', 'M', 'dd', 'w@gmail.com', 22, 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
