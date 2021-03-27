-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 09:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polls`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `vote` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `Pid`, `content`, `vote`) VALUES
(49, 34, 'Problemi Spinoza', 0),
(50, 34, 'Procesi', 0),
(51, 34, 'Kodi i DaVincit', 0),
(52, 34, 'Gjuetari i balonave', 0),
(53, 35, 'Bali', 2),
(54, 35, 'Maldive', 1),
(55, 35, 'Bora-Bora', 1),
(56, 35, 'Phuket island', 1),
(57, 35, 'Cancun', 0),
(58, 36, 'Instagram', 2),
(59, 36, 'Tinder', 1),
(60, 36, 'Linkedin', 1),
(61, 36, 'TikTok', 1),
(62, 37, 'Naruto ', 0),
(63, 37, 'One Piece', 0),
(64, 37, 'Black Clover', 0),
(65, 37, 'Demon Slayer', 0),
(66, 38, 'Gladiator', 2),
(67, 38, 'Shawshank Redemtion', 1),
(68, 38, 'Troy', 1),
(69, 38, 'Beni Ecen  Vet', 1),
(70, 38, 'Matrix', 0),
(71, 39, 'Futbolli', 1),
(72, 39, 'Volejbolli', 1),
(73, 39, 'Tenisi', 0),
(74, 39, 'Peshengritja ', 2),
(75, 40, 'Shakira', 0),
(76, 40, 'Rihana', 0),
(77, 40, 'Dua Lipa', 0),
(78, 40, 'Lana Del Rey', 1),
(79, 41, 'Naruto ', 0),
(80, 41, 'One Piece ', 0),
(81, 41, 'Death Note', 0),
(82, 41, 'Black Clover', 0),
(83, 42, '28', 0),
(84, 42, '29', 0),
(85, 42, '30', 0),
(86, 42, '30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Pid` int(11) NOT NULL,
  `Qcontent` varchar(1000) NOT NULL,
  `isVerifed` tinyint(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `Finish_time` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adm_check` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Pid`, `Qcontent`, `isVerifed`, `is_deleted`, `created_date`, `Finish_time`, `user_id`, `adm_check`) VALUES
(34, 'Cili eshte libri juaj i preferuar?', 1, 1, '2021-02-28', '2021-03-12', 29, 1),
(35, 'Destinacioni juaj i preferuar?', 1, 0, '2021-02-28', '2021-03-13', 30, 1),
(36, 'Cili eshte rrjeti social qe perdorni me shume?', 1, 0, '2021-02-28', '2021-03-23', 31, 1),
(37, 'Who is your favorite Anime?', 1, 1, '2021-02-28', '2021-03-19', 32, 1),
(38, 'Filmi juaj i preferuar ?', 1, 0, '2021-02-28', '2021-03-02', 33, 1),
(39, 'Cili eshte sporti juaj i preferuar?', 1, 1, '2021-02-28', '2021-03-09', 30, 1),
(40, 'Cila eshte kengetarja juaj e preferuar?', 1, 0, '2021-02-28', '2021-03-03', 30, 1),
(41, 'Cila eshte anime juaj e preferuar?', 0, 0, '2021-02-28', '2021-03-13', 30, 0),
(42, 'Cfar vlersimi do te mari grupi i pare?', 0, 0, '2021-03-01', '2021-04-01', 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `emri`, `mbiemri`, `email`, `pass`, `age`, `gender`, `role`) VALUES
(29, 'entela01', 'Entela', 'Abazi', 'abazientela@gmail.com', '$2y$10$6G/ldXtduR.k8.4ADo.9Ze2WnVFUkni50OZOx8RJxuucXyQbTxuqq', 22, 'femër', 1),
(30, 'arena01', 'Arena', 'Hysi', 'arenahysi@gmail.com', '$2y$10$M9o7sac2ZQkoIsk7Ske8MOdrd7QblwmmA59mh9CGiy.AtxD4MzTTe', 21, 'femër', 1),
(31, 'rudina01', 'Rudina', 'Derveni', 'rudinaderveni@gmail.com', '$2y$10$UnAh8TzqbtVXWlmWXJjb6.Ad2tD4t/x1BR5CrmaqfQyltbr3rhr7u', 21, 'femër', 0),
(32, 'enri01', 'Enri', 'Kapaj', 'enrikapaj@yahoo.com', '$2y$10$jpmZqy1K4f3yhl4SM8aH.unYp9WjrrCJCgbo.hjFjr86KODieDWFG', 18, 'mashkull', 0),
(33, 'Brisida1', 'Brisida', 'Qejvanaj', 'brisida@gmail.com', '$2y$10$hiY.u9yx3pf0w1QMRM.3KuB3FOXKeS0WQRMkGVYeJcVerOixF517q', 29, 'femër', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `Uid`, `Pid`, `Aid`) VALUES
(25, 32, 35, 53),
(26, 33, 35, 55),
(27, 33, 38, 67),
(28, 30, 35, 54),
(29, 30, 36, 58),
(30, 30, 38, 68),
(31, 30, 39, 74),
(32, 31, 35, 56),
(33, 31, 36, 59),
(34, 31, 38, 66),
(35, 31, 39, 71),
(36, 32, 39, 74),
(37, 32, 36, 58),
(38, 32, 38, 66),
(39, 29, 35, 53),
(40, 29, 36, 61),
(41, 29, 38, 69),
(42, 29, 39, 72),
(43, 33, 36, 60),
(44, 33, 40, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk5` (`Pid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `fk_name2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk2` (`Uid`),
  ADD KEY `fk3` (`Aid`),
  ADD KEY `fk4` (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`Pid`) REFERENCES `questions` (`Pid`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_name2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`Aid`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk4` FOREIGN KEY (`Pid`) REFERENCES `questions` (`Pid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
