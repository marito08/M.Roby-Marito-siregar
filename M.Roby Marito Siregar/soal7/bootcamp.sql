-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jan 2019 pada 05.29
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'nurhadi'),
(2, 'aldo'),
(3, 'dodi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(5) NOT NULL,
  `person_id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hobbies`
--

INSERT INTO `hobbies` (`id`, `person_id`, `name`) VALUES
(1, '1', 'Bird Watching'),
(2, '1', 'Martial arts'),
(3, '2', 'Hiking'),
(4, '1', 'Archery'),
(5, '2', 'Beekeeping'),
(6, '3', 'Book restoration');

-- --------------------------------------------------------

--
-- Stand-in structure for view `query`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `query` (
`person_id` int(5)
,`name` varchar(50)
,`person_hobbies` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `query_categories`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `query_categories` (
`id` int(5)
,`name` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `query`
--
DROP TABLE IF EXISTS `query`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query`  AS  select `a`.`id` AS `person_id`,`a`.`name` AS `name`,group_concat(`b`.`name` separator ',') AS `person_hobbies` from (`categories` `a` join `hobbies` `b` on((`a`.`id` = `b`.`person_id`))) group by `a`.`id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `query_categories`
--
DROP TABLE IF EXISTS `query_categories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `query_categories`  AS  select `a`.`id` AS `id`,`b`.`name` AS `name` from (`categories` `a` join `hobbies` `b` on((`a`.`id` = `b`.`person_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
