-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2023 at 09:30 PM
-- Server version: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tepservio`
--

-- --------------------------------------------------------

--
-- Table structure for table `absente`
--

CREATE TABLE `absente` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `moterieid` int(11) DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `coment` text NOT NULL DEFAULT '',
  `mot` bit(1) NOT NULL,
  `addby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absente`
--

INSERT INTO `absente` (`id`, `userid`, `moterieid`, `data`, `coment`, `mot`, `addby`) VALUES
(15, 25, 8, '2023-05-14 20:43:30', '', b'0', 24),
(16, 25, 10, '2023-05-14 20:50:53', '', b'1', 24),
(17, 25, 10, '2023-05-14 20:52:54', '', b'0', 24),
(18, 25, 10, '2023-05-14 20:54:22', '', b'1', 24),
(19, NULL, NULL, '2023-05-15 10:05:06', '', b'0', 25),
(20, 25, 10, '2023-05-15 09:33:12', '', b'1', 24),
(21, 25, 10, '2023-05-19 18:26:10', '', b'1', 24),
(22, 25, 10, '2023-05-19 18:27:18', '', b'1', 24),
(23, 25, 10, '2023-05-20 04:41:34', '', b'1', 24),
(24, 25, 10, '2023-05-20 07:44:40', '', b'1', 24),
(25, 25, 10, '2023-05-20 10:40:29', '', b'1', 24),
(26, 25, 10, '2023-07-04 10:35:13', '', b'0', 24),
(27, 41, 10, '2023-07-04 11:01:57', '', b'1', 24);

-- --------------------------------------------------------

--
-- Table structure for table `clase`
--

CREATE TABLE `clase` (
  `id` int(11) NOT NULL,
  `materi` text NOT NULL,
  `dirig` text NOT NULL,
  `nume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clase`
--

INSERT INTO `clase` (`id`, `materi`, `dirig`, `nume`) VALUES
(10, 'a:7:{i:0;s:2:\"10\";i:1;s:2:\"11\";i:2;s:2:\"12\";i:3;s:2:\"13\";i:4;s:2:\"14\";i:5;s:2:\"15\";i:6;s:2:\"16\";}', 'Dirig 1', '11D'),
(11, 'a:4:{i:0;s:2:\"17\";i:1;s:2:\"18\";i:2;s:2:\"19\";i:3;s:2:\"20\";}', 'dirig 2', '12D');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `ok` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id`, `data`, `ok`) VALUES
(25, '2023-07-22', 0),
(26, '2023-07-01', 1),
(27, '2023-07-13', 1),
(28, '2023-07-04', 1),
(29, '2023-07-05', 1),
(30, '2023-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `salt` text NOT NULL,
  `data` text NOT NULL,
  `clasa` int(11) NOT NULL DEFAULT 0,
  `poza` text NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 0,
  `parinte` int(11) NOT NULL DEFAULT 0,
  `dirig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `pass`, `salt`, `data`, `clasa`, `poza`, `rank`, `parinte`, `dirig`) VALUES
(1, 'admin', '2bfb762dca68a3dfbb80030f44bf2662b93a6fb3253a5dcada039842a4eec934', 'lol', '{\"n\":\"System ADM\",\"r\":\"ADMIN\",\"c\":\"\"}', 0, '', 10, 0, 0),
(24, 'prof@marcu.ru', 'c9bec6b60493b655797b8c7f4511398970fc7e87f0879a116431b06065dd37dd', 'J3zuGaVhftpUXzflqY8Hc8E2DHJkfbQD', '{\"n\":\"Profesor nr 1\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40799341822', 1, 25, 10),
(25, 'elev@marcu.ru', '1a88c34742219678479441427bfaddad4b65bb92554813b0835066e5900b088e', 'e4DsJgSUNaNT6IFsh2t5xKwLAS3etVy5', '{\"n\":\"Elev\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40733164812', 0, 0, 0),
(36, 'parinte@marcu.ru', '7875358a6c06e5fbd3c7181dbce62ddfb3f5c33c8a3b77b84d711f40b7601a19', 'yygohE3CuwDLLU3i2uK1HMRQoYaWksix', '{\"n\":\"Parinte\",\"r\":\"Parinte\",\"c\":\"25\"}', 0, '+40799316980', 0, 25, 0),
(37, 'elev1@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev1\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(38, 'elev2@marcu.ru', 'fca062550ef074318c3174b0037fe06a931c7e5a6a131d92e43f32e7e378ab1f', 'f4j0OOxQTd', '{\"n\":\"Elev2\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(39, 'elev3@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev3\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(40, 'elev4@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev4\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(41, 'elev5@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev5\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(42, 'elev6@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev6\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(43, 'elev7@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev7\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(44, 'elev8@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev8\",\"r\":\"Elev\",\"c\":\"8\"}', 10, '+40774014314', 0, 0, 0),
(45, 'prof2@marcu.ru', '4a6143e074c8b16ffaa6cf834ba2dd34d4a687cf9dc25b630d631a9778c2b445', '95Uihj1PwkNgYrV8Cxr33CjzMYVHRLTG', '{\"n\":\"prof2\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40774014314', 1, 0, 0),
(46, 'prof3@marcu.ru', '2979a7f58161d806d8fb65740fa1ad047ad53bf73e962b3581a016ecabdafbad', 'XJP83jBBUjB5J3DQTMhw3rvBNDOiOtcN', '{\"n\":\"prof3\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40774014314', 1, 0, 0),
(47, 'prof4@marcu.ru', '2979a7f58161d806d8fb65740fa1ad047ad53bf73e962b3581a016ecabdafbad', 'XJP83jBBUjB5J3DQTMhw3rvBNDOiOtcN', '{\"n\":\"prof4\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40774014314', 1, 0, 0),
(48, 'prof5@marcu.ru', '2979a7f58161d806d8fb65740fa1ad047ad53bf73e962b3581a016ecabdafbad', 'XJP83jBBUjB5J3DQTMhw3rvBNDOiOtcN', '{\"n\":\"prof5\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40774014314', 1, 0, 0),
(49, 'prof6@marcu.ru', '2979a7f58161d806d8fb65740fa1ad047ad53bf73e962b3581a016ecabdafbad', 'XJP83jBBUjB5J3DQTMhw3rvBNDOiOtcN', '{\"n\":\"prof6\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40774014314', 1, 0, 0),
(50, 'prof7@marcu.ru', '2979a7f58161d806d8fb65740fa1ad047ad53bf73e962b3581a016ecabdafbad', 'XJP83jBBUjB5J3DQTMhw3rvBNDOiOtcN', '{\"n\":\"prof7\",\"r\":\"Profesor\",\"c\":\"\"}', 0, '+40774014314', 1, 0, 0),
(51, 'elev10@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev10\",\"r\":\"Elev\",\"c\":\"8\"}', 11, '+40774014314', 0, 0, 0),
(52, 'elev11@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev11\",\"r\":\"Elev\",\"c\":\"8\"}', 11, '+40774014314', 0, 0, 0),
(53, 'elev12@marcu.ru', 'b34c697a77bf19c69aff683dc863358992aa409dd2bf9b5e20439175ed7fa22c', 'WfDwCdDY2klET7YJ9YOyh5MzeH0LFPlH', '{\"n\":\"Elev12\",\"r\":\"Elev\",\"c\":\"8\"}', 11, '+40774014314', 0, 0, 0),
(55, 'elev90@marcu.ru', 'd20effa611cb56c88260cebf2354e433294af79801cc90438e5c7abc8e309685', 'tSpNSGjw3uoSBBvJv78xzS4W8ZZoirGW', '{\"n\":\"elev9\",\"r\":\"Elev\",\"c\":\"10\"}', 10, '+40', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nume` text NOT NULL,
  `profesor` text NOT NULL,
  `prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `nume`, `profesor`, `prof`) VALUES
(10, 'Romana', 'Prof romana1', 24),
(11, 'Matematica', 'Prof2', 45),
(12, 'Fizica', 'Prof3', 46),
(13, 'Chimie', 'Prof4', 47),
(14, 'Informatica', 'Prof5', 48),
(15, 'Istorie', 'Prof6', 49),
(16, 'Franceza', 'Prof7', 50),
(17, 'Mate 12D', 'Prof2', 45),
(18, 'Fizica 12D', 'Prof 3', 46),
(19, 'Sport 12D', 'Prof4', 47),
(20, 'Romana 11D', 'Prof1', 24),
(21, 'sport11A', 'prof 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mes`
--

CREATE TABLE `mes` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `recvier` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titlu` text NOT NULL,
  `text` text NOT NULL,
  `data` date NOT NULL,
  `userid` int(11) NOT NULL,
  `image` text NOT NULL,
  `viz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titlu`, `text`, `data`, `userid`, `image`, `viz`) VALUES
(2, 'CONCURSUL REGIONAL GANDESC ECO- dezbateri WSS', 'Concursul va avea loc sambata, 6 mai, la Liceul Teoretic ,,Miron Costin\", Iasi, incepand cu ora 9,30. Accesul in liceu se va face pe la intrarea elevilor.', '2023-05-17', 1, 'https://mmb.ro/sites/default/files/styles/articol/public/rss/2018/12/concurs-dezbateri-ascor-iasi_1.jpg?itok=iThWXNKA', 495),
(3, 'Saptamana verde 24 - 28 aprilie 2023', 'Saptamana Verde este un eveniment international care promoveaza sustenabilitatea si dezvoltarea durabila in domeniul agriculturii, alimentatiei si protectiei mediului. Acest eveniment are loc in fiecare an in Berlin, Germania, si atrage participanti din intreaga lume, inclusiv reprezentanti ai guvernelor, organizatiilor non-guvernamentale, industriei alimentare si agricole, cercetatori, activisti si publicul larg interesat.', '2023-05-11', 1, 'https://www.edu.ro/sites/default/files/_imagini/agenda_evenimente/2023/banner_SV.jpeg', 195),
(4, 'CONCURS NATIONAL DE FIZICA PHI', 'DUMINICA, 2 APRILIE 2023\nInterval de desfasurare concurs: 12.00 - 14.00\nAcces in sala: incepand cu ora 11.30\nSALA 1 (etaj 1)  - laborator informatica\nSALA 2 (etaj 2)  - laborator informatica', '2023-05-18', 1, 'https://static.playtech.ro/unsafe/840x500/smart/filters:contrast(5):format(webp):quality(80)/https://playtech.ro/stiri/wp-content/uploads/2019/08/Bacalaureat-2019-toamn%C4%83.-Ce-subiecte-au-picat-la-fizic%C4%83.-Vezi-PDF1-1024x582.jpg', 195),
(5, 'GradeMaster este lansat!', 'Platforma GradeMaster a fost lansata cu succes pe data de 20/05/2023,acesta este singura platforma de acest tip care ofera asemenea service gratis', '2023-05-20', 1, 'https://cdn.toxel.ro/img/contents/Lorraine-Mondial-Air-Ballons.jpg', 293);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `nota` text NOT NULL,
  `materieid` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `coment` text NOT NULL,
  `addby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `userid`, `nota`, `materieid`, `data`, `coment`, `addby`) VALUES
(100, 25, '10', 8, '2023-05-18', 'bravo!', 24),
(101, 25, '1', 8, '2023-05-16', '', 24),
(102, 25, '2', 8, '2023-05-11', '', 24),
(103, 25, '2', 8, '2023-05-11', '', 24),
(104, 25, '2', 8, '2023-05-11', '', 24),
(105, 25, '2', 8, '2023-05-18', '', 24),
(106, 25, '3', 8, '2023-05-17', '', 24),
(108, 25, '2', 10, '2023-06-05', '', 24),
(109, 25, '5', 10, '2023-05-17', '', 24),
(110, 25, '7', 10, '2023-05-24', '', 24),
(112, 25, '10', 11, '2023-05-16', '', 45),
(113, 25, '6', 11, '2023-05-17', '', 45),
(114, 25, '6', 12, '2023-05-09', '', 46),
(115, 25, '9', 12, '2023-05-16', '', 46),
(116, 25, '10', 14, '2023-05-10', '', 48),
(117, 25, '9', 14, '2023-05-04', '', 48),
(118, 25, '8', 14, '2023-05-17', '', 48),
(119, 25, '5', 16, '2023-05-17', '', 50),
(120, 25, '7', 16, '2023-05-18', '', 50),
(121, 25, '8', 15, '2023-05-03', '', 49),
(122, 25, '10', 10, '2023-06-01', '', 24),
(125, 55, '1', 10, '2023-06-29', '', 24),
(126, 25, '1', 11, '2023-07-12', '', 1),
(128, 25, '1', 13, '2023-07-19', '', 24),
(129, 25, '8', 10, '2023-07-04', '', 24),
(130, 25, '9', 10, '2023-07-05', '', 24),
(131, 37, '5', 10, '2023-07-05', '', 24),
(132, 37, '4', 10, '2023-07-01', '', 24),
(133, 25, '6', 10, '2023-07-01', '', 24),
(134, 51, '9', 10, '2023-07-04', '', 24);

-- --------------------------------------------------------

--
-- Table structure for table `profcls`
--

CREATE TABLE `profcls` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `classarray` text NOT NULL,
  `nume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profcls`
--

INSERT INTO `profcls` (`id`, `userid`, `classarray`, `nume`) VALUES
(10, 24, 'a:2:{i:0;a:2:{i:0;s:2:\"10\";i:1;s:2:\"11\";}i:1;a:2:{i:0;i:10;i:1;i:10;}}', ''),
(11, 45, 'a:1:{i:0;a:2:{i:0;s:2:\"11\";i:1;s:2:\"10\";}}', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absente`
--
ALTER TABLE `absente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profcls`
--
ALTER TABLE `profcls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absente`
--
ALTER TABLE `absente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `clase`
--
ALTER TABLE `clase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mes`
--
ALTER TABLE `mes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `profcls`
--
ALTER TABLE `profcls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
