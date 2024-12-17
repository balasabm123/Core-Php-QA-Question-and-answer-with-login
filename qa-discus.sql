-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 06:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qa-discus`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(50) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `question_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`) VALUES
(1, 'Yes user friendly', 1, 17),
(2, 'yessssssss', 3, 17),
(3, 'NO', 7, 17),
(4, 'Yes It is very good langauge', 1, 17),
(5, 'Yes You can buy but very expensive', 2, 17),
(6, 'No need to waste money', 2, 17),
(7, 'Sure contcat me 9590961744', 9, 17),
(8, 'Iphone is the best phone', 11, 6),
(9, 'Samsung is the best phone if you concern with Camera', 11, 6),
(10, 'Welcome sure php', 1, 6),
(11, 'Sure, Chhose any backend laguage like php learn basics', 8, 17),
(12, 'Go with Dell, Good service for long time', 10, 17),
(13, 'After learning basics of programming langauge , start building small samll project', 8, 0),
(14, 'Yes , please contact me 9590961744', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `model` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `model`) VALUES
(1, 'mobile'),
(2, 'laptop'),
(3, 'food'),
(4, 'coding'),
(5, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `user_id`) VALUES
(1, 'Is php best progamming Langauge', 'Is php best progamming Langauge............ ', 4, 18),
(2, 'Can i buy Iphone 16', 'Can i buy Iphone 16, Please suggest ', 1, 6),
(8, 'How can i start learning website development', ' Please guide me', 5, 17),
(10, 'Can i buy Dell laptop or HCL', 'Guide me on this ', 2, 17),
(11, 'Which phone is best I-phone or Samsung', 'Suggest me  on the same ', 1, 6),
(15, 'How to prepare Paneer reciepe..?', 'Help me to prepare Paneer reciepe ', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `address`, `password`) VALUES
(1, 'Mohan Kumar', 'mohan@gmail.com', '', '123456'),
(2, 'Rojer Kumar', 'rojer@gmail.com', '', NULL),
(3, 'Mohan Kumar', 'mohan@gmaol.com', '', NULL),
(4, 'Rojer Kumar', 'rojer@gmail.com', '', NULL),
(5, 'Ram Kumar', 'ram@gmail.com', 'Bangalore', '123456'),
(6, 'RajKumar', 'raj@gmail.com', 'Delhi', '123456'),
(7, 'Raj Kumar', 'raju@gmail.com', 'Bangalore', '123456'),
(8, 'Peter Kumar', 'Peter@gmail.com', 'Bangalore', ''),
(9, 'Rohan Kumar', 'rohan@gmail.com', 'Bangalore', '123456'),
(10, 'fdgdfg', 'dfgdf@gmail.com', 'dfssfsdf', '234234234'),
(11, 'fdgdfg', 'dfgdf@gmail.com', 'dfssfsdf', ''),
(12, 'dsfsdf', 'sdfsdf@gmail.com', 'sdfdsfds', '23423sdf'),
(13, 'defsdf', 'dsfdsf@gmail.com', 'dsfsdfsdf', '23423'),
(14, 'dghfg', 'rfhgf@gmail.com', 'fgbhfghfgh', 'fdgdfgfd'),
(15, 'fghgfh', 'fgdfg@gmaail.com', 'dfgdfgdfgdf', '43534534'),
(16, 'Raj', 'raj332@gmail.com', 'Bangalore', '123456'),
(17, 'Master', 'test@gmail.com', 'fghfhgfhfgh', '123456'),
(18, 'Rohan', 'rohan@gmail.com', '123zsdfsdf', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
