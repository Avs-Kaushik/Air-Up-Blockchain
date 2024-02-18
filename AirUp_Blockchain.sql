-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 07:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airup`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `eid` varchar(20) NOT NULL,
  `idea_name` longtext NOT NULL,
  `prob_st` longtext NOT NULL,
  `short_sol` longtext NOT NULL,
  `det_sol` longtext NOT NULL,
  `business` longtext NOT NULL,
  `comp` longtext NOT NULL,
  `patent` varchar(50) DEFAULT NULL,
  `file` varchar(40) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `day` bigint(100) NOT NULL,
  `amt` bigint(100) NOT NULL,
  `eqt` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`eid`, `idea_name`, `prob_st`, `short_sol`, `det_sol`, `business`, `comp`, `patent`, `file`, `sid`, `day`, `amt`, `eqt`) VALUES
('E10001', 'Vernacular ai', 'The company provides Speech recognition and Voice assistants as a service to the banking, Food and Beverage and Hospitality industries. Their services have the least human interference and can handle complex servicing issues as well.', 'One NLP', 'The company provides Speech recognition and Voice assistants as a service to the banking, Food and Beverage and Hospitality industries. Their services have the least human interference and can handle complex servicing issues as well.', 'Normal', 'Other Ai Bots', '1', 'upload/video1.mp4', 'S1', 2, 200000, 9),
('E10001', 'Good way', 'gvbhn,m.', 'gvbhn,', 'gvbhn,m,.', 'gvhbnjm.,/', ' vbnn,m', '0', 'upload/WIN_20230409_03_18_36_Pro.mp4', 'S2', 2, 200000, 2),
('E10002', 'Air Up', 'Startups and Investors', 'One stop solution for all your investor search issues', 'Dummy data', 'fchgvbhjnj', 'No one', '0', 'upload/WIN_20230409_03_18_36_Pro.mp4', 'S3', 2, 3500000, 4),
('E10001', 'Test_startup', 'This is a dummy. Just to test the working and animation fields', 'Lets test this', 'Dummy dummy. Hello alll welcome to thy view', 'Great', 'No one', '0', 'upload/WIN_20230409_03_18_36_Pro.mp4', 'S4', 4, 200000, 10),
('E10001', 'Food_Control', 'Managing food waste is a hectic task. Our startup focuses on the same', 'Control food wastage', 'Creating a startup focused on reducing food waste could not only earn you some serious funding, but also positively change the food system and help save grocery stores and restaurants money.\r\n\r\n', 'B2B', 'No one', '0', 'upload/WIN_20230409_03_18_36_Pro.mp4', 'S5', 3, 400000, 5),
('E10004', 'Test2_dummy', 'Dummy Data', 'ghbjnk', 'gvhb,nm.', 'gvhbm,nm', 'No one', '0', 'upload/WIN_20230409_03_18_36_Pro.mp4', 'S6', 2, 100000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `iid` varchar(100) NOT NULL,
  `gov_id` varchar(100) DEFAULT NULL,
  `File` varchar(100) NOT NULL,
  `Verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`name`, `email`, `gender`, `dob`, `password`, `iid`, `gov_id`, `File`, `Verified`) VALUES
('Sample', 'venkatasaikaushikaravelli.20.cse@anits.edu.in', 'male', '2003-09-20', '20092003', 'I10001', '', '', 1),
('chaitanya', 'chaitanyanandu24@gmail.com', 'male', '2023-04-16', '1234', 'I10002', '', '', 0),
('Mahesh', 'nobobe3939@viperace.com', 'male', '2023-08-13', '1234', 'I10003', '5346', '', 0),
('mahesh', 'vinin64946@vreaa.com', 'male', '2023-08-14', '1234', 'I10004', '3456789', '', 0),
('Kaushik', 'avskaushik123@gmail.com', 'male', '2003-09-20', 'Aa@1234567', 'I10005', '', 'uploads/I10005Fest return.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nda`
--

CREATE TABLE `nda` (
  `iid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `eid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `oaa` int(100) NOT NULL,
  `oae` int(100) NOT NULL,
  `iid` varchar(100) NOT NULL,
  `eamnt` int(100) NOT NULL,
  `equity` int(100) NOT NULL,
  `damnt` int(50) NOT NULL,
  `debt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`eid`, `sid`, `oaa`, `oae`, `iid`, `eamnt`, `equity`, `damnt`, `debt`) VALUES
('E10001', 'S1', 700000, 15, 'I10001', 9000000, 11, 0, 0),
('E10001', 'S1', 1879, 32, 'I1000', 12, 12, 12, 21),
('E10001', 'S1', 1879, 32, 'I1000', 12, 12, 12, 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(1000) NOT NULL,
  `gov_Id` varchar(1000) DEFAULT NULL,
  `eid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `gender`, `dob`, `password`, `gov_Id`, `eid`) VALUES
('Kaushik', 'avskaushik123@gmail.com', 'male', '2023-04-15', '20092003', '', 'E10001'),
('Akhil', 'akhilvenkat27gopisetty@gmail.com', 'male', '2023-04-15', '20092003', '', 'E10002'),
('Chaitanya', 'chaitanyanandu24@gmail.com', 'male', '2003-08-12', '1234', '', 'E10003'),
('karthik', 'chaitanyakumarbbbb@gmail.com', 'male', '2023-04-16', '20092003', '', 'E10004'),
('Sanjith', 'ippilisanjith6@gmail.com', 'male', '2023-06-06', '1234', '', 'E10005'),
('Kaushik', 'venkatasaikaushikaravelli.20.cse@anits.edu.in', 'male', '2023-06-06', '20092003', '', 'E10006'),
('Rajesh', 'pusarlarajesh2002@gmail.com', 'male', '2023-06-09', '2009', '', 'E10007'),
('Mahesh', 'nobobe3939@viperace.com', 'male', '2023-08-13', '1234', '5235809', 'E10008'),
('Sample', 'vinin64946@vreaa.com', 'male', '2023-08-14', '1234', '45789', 'E10009'),
('Lalli', 'vinaykumarpalavalasa@gmail.com', 'male', '2023-08-15', '1234', '12345678', 'E10010');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
