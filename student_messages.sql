-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 08:39 AM
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
--Database: `student_messages`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(64) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `student_id`, `message`, `date`, `subject`) VALUES
(294, 2, 'wtf', '0000-00-00 00:00:00', NULL),
(295, 2, 'asf', '2023-05-26 07:16:20', ''),
(296, 2, 'sa', '2023-05-26 07:16:41', 'sa'),
(297, 1, 'asd', '2023-05-26 07:31:36', 'sa'),
(298, 1, 'dadadada', '2023-05-26 07:31:52', 'asds'),
(299, 2, 'asf', '2023-05-26 07:48:04', 's'),
(306, 2, 'safsf\r\n', '2023-05-26 07:51:40', 'ttt'),
(307, 2, 'asf', '2023-05-26 07:51:47', 'asf'),
(308, 3, 'shit', '2023-05-26 07:51:58', 'shit'),
(309, 1, 'ss', '2023-05-26 07:57:37', 's'),
(310, 2, 'sss', '2023-05-26 07:57:44', 'ss'),
(311, 1, 's', '2023-05-26 08:01:24', 's'),
(312, 3, 'sukker', '2023-05-26 08:02:21', 'oten'),
(313, 93, 'asdsfdgf', '2023-05-26 08:27:02', 'saff');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `section` varchar(128) DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `section`, `unique_id`) VALUES
(1, 'Clicel Ramon Paculba', 'Einstein', '646fab5ca9543'),
(2, 'Alger Leigh Ageas', 'Tesla', '646fab5cc6d60'),
(3, 'Kint Louise Borbano', 'Einstein', '646fac2021693'),
(60, 'Anro Emmanuel Alquiza', 'Einstein', '646fbe41d4902'),
(61, 'Angel Grace Arapoc', 'Tesla', '646fbe4201a39'),
(62, 'Jamilhy Asombrado', 'Einstein', '646fbe420b44d'),
(63, 'Jesse Emmanuel Ayop', 'Einstein', '646fbe42120cf'),
(64, 'Paul Gabriel Balangao', 'Einstein', '646fbe421bb97'),
(65, 'Lawrence Barquilla', 'Tesla', '646fbe422534b'),
(66, 'Kem Verly Basit', 'Tesla', '646fbe422c262'),
(67, 'Beige Bernadette Bastasa', 'Tesla', '646fbe4235aa2'),
(68, 'Rossil Allen Blasco', 'Einstein', '646fbe4248c3e'),
(69, 'Lady Chariz Cabasag', 'Tesla', '646fbe424fd0a'),
(70, 'Joanne Maryz Cabatingan', 'Tesla', '646fbe4256c32'),
(71, 'Ashley Kate Cardenas', 'Tesla', '646fbe4260369'),
(72, 'Zyla Marie Cardeño', 'Einstein', '646fbe4267386'),
(73, 'Celine Joie Del Pilar', 'Tesla', '646fbe4270b5f'),
(74, 'Chynna Zelle Delgado', 'Einstein', '646fbe4277af7'),
(75, 'Zen Estillore', 'Einstein', '646fbe427e77f'),
(76, 'Havilah Mardi Flores', 'Einstein', '646fbe42856e4'),
(77, 'Krista Abegail Fontanilla', 'Tesla', '646fbe428c3d5'),
(78, 'Gwen Francisco', 'Einstein', '646fbe4295deb'),
(79, 'Elysa Velle Garcia', 'Einstein', '646fbe429f52b'),
(80, 'Rongel Andrew Gilbolingo', 'Tesla', '646fbe42a9084'),
(81, 'Lito Arthon Godito', 'Tesla', '646fbe42b52d9'),
(82, 'Tristan Jarell Gonzaga', 'Tesla', '646fbe42c192b'),
(83, 'Randy Hibaya Jr.', 'Tesla', '646fbe42c8549'),
(84, 'Jemina Jaictin', 'Einstein', '646fbe42d1ff6'),
(85, 'Abdul-Mujer Jalil', 'Tesla', '646fbe42db73b'),
(86, 'Sean Lauren Jayme', 'Einstein', '646fbe42e2793'),
(87, 'Katherine May Laput', 'Einstein', '646fbe42ebecb'),
(88, 'Julliana Delphine Lee', 'Einstein', '646fbe42f2e12'),
(89, 'Harrie Floyd Lelis', 'Tesla', '646fbe43083f0'),
(90, 'Jahaziel Limbaga', 'Einstein', '646fbe430f370'),
(91, 'Lady Gayle Luchana', 'Tesla', '646fbe4316372'),
(92, 'Renz Nathaniel Luyao', 'Einstein', '646fbe431cfaa'),
(93, 'Mhedenbless Gem Manzo', 'Tesla', '646fbe432b358'),
(94, 'Rio Victor Martinez', 'Einstein', '646fbe4332d47'),
(95, 'Patricia Miranda', 'Einstein', '646fbe436bde0'),
(96, 'Marc Edcil Mutya', 'Tesla', '646fbe4396836'),
(97, 'Carmela Naciongayo', 'Tesla', '646fbe439d3f3'),
(98, 'Anamel Wynonah Olegario', 'Tesla', '646fbe43a6ea8'),
(99, 'Christian Ompay', 'Einstein', '646fbe43ada8b'),
(100, 'Howard Gabriel Paclijan', 'Einstein', '646fbe43b4aa0'),
(101, 'Hannah Grace Pancho', 'Einstein', '646fbe43be2ba'),
(102, 'Nianee Marie Patangan', 'Einstein', '646fbe43c51e9'),
(103, 'Hacaliah Peduhan', 'Tesla', '646fbe43ceda6'),
(104, 'Dave Andrew Pepito', 'Einstein', '646fbe43daf64'),
(105, 'Zamanntha Veaunne Poloyapoy', 'Tesla', '646fbe43e74ce'),
(106, 'Nia Deole Rosal', 'Tesla', '646fbe43ee1b2'),
(107, 'Shania Rubio', 'Tesla', '646fbe4400f19'),
(108, 'Zamantha Juanne Samson', 'Tesla', '646fbe440a719'),
(109, 'Karylle Singco', 'Einstein', '646fbe44116a7'),
(110, 'Maurice Dawn Tejano', 'Einstein', '646fbe441ae2f'),
(111, 'Anre Trabasas', 'Tesla', '646fbe4421eab'),
(112, 'Jona Louise Valdehueza', 'Tesla', '646fbe442b4ef'),
(113, 'Kate Rachel Velasco', 'Einstein', '646fbe4432494'),
(114, 'Jasmine Villar', 'Tesla', '646fbe44390cc'),
(115, 'Wilfred Khamis Ybañez', 'Einstein', '646fbe444011d'),
(116, 'Princess Keathly Eguia', 'Einstein', '647053c12cbaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
