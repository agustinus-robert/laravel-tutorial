-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2021 at 06:02 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `nama`, `jurusan`) VALUES
(1, 'agus', 'teknik informatika'),
(2, 'abc', 'sistem'),
(3, 'vxz', 'qwe'),
(4, 'ayub', 'solo semarang'),
(5, 'opqrt', 'mnsdadasd123'),
(6, 'werrtrtrt', 'xcvbn21423');

-- --------------------------------------------------------

--
-- Table structure for table `game_list`
--

CREATE TABLE `game_list` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_list`
--

INSERT INTO `game_list` (`id`, `nama`, `rating`, `created_at`) VALUES
(1, 'Harvest Moon Back To Nature', '5', '2021-08-01'),
(2, 'Mineswepper', '3', '2021-08-13'),
(3, 'Harvest Moon A Wonderful Life', '4', '2021-08-22'),
(4, 'Game coba', '1', '2021-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `game_nilai_rating`
--

CREATE TABLE `game_nilai_rating` (
  `nilai_rating` int(11) NOT NULL,
  `nilai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_nilai_rating`
--

INSERT INTO `game_nilai_rating` (`nilai_rating`, `nilai`) VALUES
(1, 'buruk'),
(2, 'biasa'),
(3, 'lumayan'),
(4, 'bagus'),
(5, 'luar biasa');

-- --------------------------------------------------------

--
-- Table structure for table `lib_angka`
--

CREATE TABLE `lib_angka` (
  `id` int(11) NOT NULL,
  `angka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_angka`
--

INSERT INTO `lib_angka` (`id`, `angka`) VALUES
(1, NULL),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_list`
--
ALTER TABLE `game_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_nilai_rating`
--
ALTER TABLE `game_nilai_rating`
  ADD PRIMARY KEY (`nilai_rating`) USING BTREE;

--
-- Indexes for table `lib_angka`
--
ALTER TABLE `lib_angka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game_list`
--
ALTER TABLE `game_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `game_nilai_rating`
--
ALTER TABLE `game_nilai_rating`
  MODIFY `nilai_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lib_angka`
--
ALTER TABLE `lib_angka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
