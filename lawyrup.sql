-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 03:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `cat_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `cat_des` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`cat_id`, `user_id`, `cat_name`, `cat_des`, `timestamp`) VALUES
(12, 18, 'this is the law', 'this is the description', '2023-09-17 15:17:23'),
(13, 18, 'elder law', 'elder blah blah blah', '2023-10-19 18:26:11'),
(17, 18, '12', '12', '2023-10-25 21:17:30'),
(18, 18, '13', '13', '2023-10-25 21:17:42'),
(19, 18, '14', '14', '2023-10-25 21:17:54'),
(20, 18, '15', '15', '2023-10-25 21:24:55'),
(21, 23, 'criminal law', 'sdfsdfsdfs\r\n', '2023-10-30 20:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp(),
  `upvotes` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`, `upvotes`) VALUES
(1, 'blah blah blah', 1, 0, '2023-07-02 19:00:12', -3),
(2, 'boooooo', 2, 0, '2023-07-02 19:34:48', 0),
(3, 'blah', 0, 0, '2023-07-02 19:43:49', 0),
(4, 'blah', 1, 13, '2023-07-02 19:55:20', -3),
(5, 'booo', 1, 13, '2023-07-02 20:24:04', -3),
(6, 'aaaaaaaaaaaa', 1, 13, '2023-07-02 20:25:35', 0),
(7, 'aaaaaaaaaaaa', 1, 13, '2023-07-02 20:25:48', -1),
(8, 'why', 1, 13, '2023-07-02 20:26:35', 0),
(9, 'why', 1, 13, '2023-07-02 20:26:39', 0),
(10, 'get blah defamation', 6, 18, '2023-09-17 10:37:32', 3),
(11, 'nooo', 1, 18, '2023-09-17 15:17:46', 0),
(12, 'nooooooo', 1, 18, '2023-09-17 15:17:56', 1),
(13, 'sdsfsdfs', 1, 18, '2023-09-17 15:18:12', 1),
(14, 'sdsfsdfs', 1, 18, '2023-09-17 15:18:20', 0),
(15, 'nah\r\n', 1, 18, '2023-10-19 20:02:09', 0),
(16, 'nah\r\n', 1, 18, '2023-10-19 20:02:21', 0),
(17, 'nah', 1, 18, '2023-10-19 20:02:27', 0),
(18, 'hkjhk\r\n', 10, 18, '2023-10-20 13:48:59', 0),
(19, 'wow\r\n', 1, 18, '2023-11-05 09:27:18', 0),
(20, 'wow\r\n', 1, 18, '2023-11-05 09:27:27', -1);

-- --------------------------------------------------------

--
-- Table structure for table `cuser`
--

CREATE TABLE `cuser` (
  `csno` int(10) NOT NULL,
  `cuser_email` varchar(50) NOT NULL,
  `cuser_name` varchar(70) NOT NULL,
  `cuser_pass` varchar(255) NOT NULL,
  `ctimestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `cban` int(60) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuser`
--

INSERT INTO `cuser` (`csno`, `cuser_email`, `cuser_name`, `cuser_pass`, `ctimestamp`, `cban`) VALUES
(1, 'user@gamil.com', '12', '12', '2023-06-24 09:47:53', 0),
(2, 'indrajith@gmail.com', 'indrajith', '$2y$10$FgJgTYX0ANc8MC1ARAtQu.G3mIkfS7ZctcKH2gVOrRADIX8vQlRH6', '2023-06-24 09:50:33', 0),
(3, 'blah@fma.com', 'sdfsdf', '$2y$10$MRNzSwf8xzsAtKJn9TY2gua6b2aWa1t4Qm0IIpDgJIs572uFvJ5CS', '2023-06-24 09:51:58', 0),
(4, 'sdfs2@sdfs.com', '1dsfsd', '$2y$10$xOcXNSQ3TLvpbPBOxia7ieR93Q6oO3fHF0VKMKWtwKSePBhkJIRI2', '2023-06-24 09:52:32', 1),
(5, 'bla1h@gmail.com', 'blah', '$2y$10$Jw4ML0zxmVTjazz0xHY7jO7pnkBZ0nqlNXYJOO9u7REFjYUgLXLIW', '2023-06-24 09:54:22', 0),
(6, 'shh@gmail.com', 'shh', '$2y$10$/fkiIKWSVuaH/.dxlyb5teIReoNJ1hAFGvyljuWE.7m7Z53nAvkoy', '2023-07-01 11:04:14', 0),
(7, 'john@gmail.com', 'john', '$2y$10$.qUPsDh6guyY35wVTLkvkO1DGJ3CeQJbe3cXLzHEGAymmIZ3OzFla', '2023-08-31 19:14:55', 0),
(8, 'meh@gmail.com', 'meh', '$2y$10$/tFbvDXdspwsuWNfmodGMOJu1yk.Hnx.9KdcGtw3cBKnUX7DyT1Gy', '2023-09-16 12:02:14', 0),
(9, 'user12@gmail.com', 'user12', '$2y$10$fdYsSeUDz6FgKD6/Q328DONEbRxJYKCwAbts2cP9tWL2m/Pcg/8cC', '2023-10-23 17:41:32', 0),
(10, 'new@gmail.com', 'new', '$2y$10$d4oPu9vjjA3MPk7hwX0q6OW5fHkgPaefeK33UfZzwVJgwACO/5sJW', '2023-10-26 18:12:09', 0),
(11, 'cli@gmail.com', 'cli', '$2y$10$PgaDO.MdYPRbggMT97UbhOR4pcSiIwchwquNFROao2GdOa3tU03na', '2023-10-29 16:58:10', 0),
(12, 'bbb@gmail.com', 'bbb', '$2y$10$BuQkLJ7zdxxxERj47UDKyO2X2EVajNJKwsMJnEQpyy/mdenf42Cpi', '2023-11-02 20:22:06', 0),
(13, 'ttt@gmail.com', 'ttt', '$2y$10$D4Upu/Bhg0BjjFP.p8A48O/3keF0ica2ALRe1JsEuXb6Ai41O2n8.', '2023-11-02 20:23:50', 0),
(14, '', '', '$2y$10$.hPJXWP7XYAuyyntc2sZNucDcHOqlwXQG/4jbE00f.c1BVU24IBki', '2023-11-02 20:27:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `dsno` int(60) NOT NULL,
  `cuser_id` int(60) NOT NULL,
  `user_id` int(60) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `fee` int(60) NOT NULL,
  `conf` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`dsno`, `cuser_id`, `user_id`, `name`, `descr`, `date`, `fee`, `conf`) VALUES
(10, 8, 18, 'john', 'sfsa', '2023-12-12', 0, 2),
(11, 13, 18, 'asdfs', 'sdfsdf', '2222-12-12', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dvotes`
--

CREATE TABLE `dvotes` (
  `dsno` int(60) NOT NULL,
  `dthread_id` int(60) NOT NULL,
  `dc_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `thread_id` int(10) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_user_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`thread_id`, `thread_title`, `thread_desc`, `thread_user_id`, `timestamp`) VALUES
(1, 'blah', 'lorem asdfs kvjxkx kmkx', 2, '2023-07-01 13:58:36'),
(8, 'why', 'hmm', 7, '2023-08-31 19:15:44'),
(9, 'whyq', 'ddfsdlkmzlc', 8, '2023-09-17 15:18:52'),
(10, 'dsfadsf', 'ess', 8, '2023-10-20 13:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `upvotes`
--

CREATE TABLE `upvotes` (
  `uno` int(60) NOT NULL,
  `uthread_id` int(60) NOT NULL,
  `uc_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upvotes`
--

INSERT INTO `upvotes` (`uno`, `uthread_id`, `uc_id`) VALUES
(24, 1, 4),
(25, 1, 1),
(26, 1, 13),
(31, 1, 20),
(32, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `upvotes` int(60) NOT NULL,
  `ban` int(60) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_name`, `user_pass`, `timestamp`, `upvotes`, `ban`) VALUES
(1, 'test@gmail.com', '', '123', '2023-06-23 19:16:54', 0, 1),
(2, 'indrajijth@blah.com', '', '$2y$10$9EQws7xlOzM4INvB2ZarvuO.wz3NNfbxw1GcaxhiSDyE1HWrUXQoi', '2023-06-23 20:40:56', 0, 1),
(3, 'in@new.com', '', '$2y$10$bn6RwfcMmdgapbO2/.ozluxjciCo46TjTOWqjpwqDRHsJOCResWBW', '2023-06-23 20:48:23', 0, 0),
(4, 'ind@new.com', '', '$2y$10$mxqn7AcIGVSVtd7aqGWTD.cBbBKc/CEWCujirs4bOaDq7qO81Nzsi', '2023-06-23 20:49:58', 0, 0),
(5, 'ind@gmail.com', '', '$2y$10$yqscTbyGuC1t3Hr69WGHweza/ceAGvREdfOgy3cHeT7ubN.XJPQkC', '2023-06-23 20:53:21', 0, 0),
(6, 'indrajith@gmail.com', 'indrajith', '$2y$10$4PyM9ZzGfdTPFe4JbUAzFevIniBsavWPq0gGR/YNK5vIhTvdyDkRy', '2023-06-23 23:28:06', 0, 0),
(7, '', '', '$2y$10$Hz4RZ6RJoPFcb7ITfekAF.x4G8doZd8JO3pW9X.iVpYejo2v14v1W', '2023-06-23 23:32:22', 0, 0),
(8, 'blah@gmail.com', 'indarjith', '$2y$10$TsWONVVTbbPQOH331PabZe5kt3VLafr5kJYvHypLmRKDiLC.RtQwi', '2023-06-23 23:33:12', 0, 0),
(9, 'man@gmail.com', 'indrajith', '$2y$10$Vyr55MvFtlQC0bfNNuJKqONkmsB3s53SBbVTErPdDv.REV.Nz9QMG', '2023-06-23 23:34:16', 0, 0),
(10, 'boo@gmail.com', 'blah', '$2y$10$n2eKa.NMOoI1Y6cwxkCOG.UYsPZQXbLlbwnsQDnrrRsjd08PAYYgC', '2023-06-23 23:36:09', 0, 0),
(11, 'aa@gg', '12da', '$2y$10$6.C6uN7Exwoj6ocDV9sdcOGM/qm5gvYLVVmQTkemOAiReKE6ReJo.', '2023-06-23 23:37:45', 0, 0),
(12, 'ada@fds', 'qasda', '$2y$10$lanWMKX/kI8Tm/n.PgiRy.i73W3Hj.LtHhiOSWZDc1nzAZi2Zjope', '2023-06-23 23:54:48', 0, 0),
(14, 'blah@blah.com', 'blah', '$2y$10$r.36ITe/kiyHqbeZ30ZyiOnk8HV1QUglAgreKYpeXF2dp74LE4MWy', '2023-06-26 16:35:58', 0, 0),
(15, 'bb@gd.com', 'sfs2', '$2y$10$paKgeZdiovIg605ZOMEL2eciFkY.RDWBvHsB5zh/U/NVn4fBPQMGi', '2023-06-26 17:46:50', 0, 0),
(16, 'aaaa@gmail.ocm', 'aaa', '$2y$10$yRDt6HElcsB07Ujbuo9tzO8H8rkrKTFoSOXW1W4SsCGdbPVJCKi.O', '2023-06-26 18:45:02', 0, 0),
(17, 'ooo@gmail.com', 'aa', '$2y$10$luCxCTTKmYwncq4K.O6Wzui23mXZakcj7Xkd47tIK0V/SPywYx/XG', '2023-06-26 18:46:49', 0, 0),
(18, 'meh@gmail.com', 'meh', '$2y$10$ywfxKxayw3f7Ao84veN92u/tzBg3Oj8T.TYWyoWK6G5HhGU2WsDrW', '2023-09-16 11:54:13', 4, 0),
(19, 'mmmm@gmail.com', 'mmm', '$2y$10$LuqZk3aL4TgHl1MoCom3E.TaY6cfOTCLt9XhMZKlBVRQWmeje.hpK', '2023-09-17 12:39:21', 0, 0),
(20, 'user1234@gmail.com', 'user1234', '$2y$10$NaBbTjL8VnALj5MKvWYquOu6FEJOgaDoXo6mBzJ2OFgZ6YZNxlBvS', '2023-10-20 13:38:03', 0, 0),
(21, 'lawyer12@gmail.com', 'lawyer12', '$2y$10$hj6ZeTVC0VQ0Kdqx6omhQ.MGhWcMPGgn.z8f1TAa9ch/W6E9rGInW', '2023-10-23 21:34:42', 0, 0),
(22, 'law@gmail.com', 'law', 'law', '2023-10-23 21:39:15', 0, 1),
(23, 'usr@gmail.com', 'usr', '$2y$10$s4qSnJWo6J8Zynb99H6A/.tgpFJR5U.b4xTOYDlCgAcDwe1ak5Kte', '2023-10-30 20:25:32', 0, 0),
(24, 'bruh@gmail.com', 'bruh', '$2y$10$cayzBI4D4PcFtUpAJ8MLjO/RxyzZq/ZQhEC0vFmaY1FdmQ8HlEcTq', '2023-10-31 20:42:43', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `cuser`
--
ALTER TABLE `cuser`
  ADD PRIMARY KEY (`csno`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`dsno`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `upvotes`
--
ALTER TABLE `upvotes`
  ADD PRIMARY KEY (`uno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `cat_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cuser`
--
ALTER TABLE `cuser`
  MODIFY `csno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `dsno` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `thread_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upvotes`
--
ALTER TABLE `upvotes`
  MODIFY `uno` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
