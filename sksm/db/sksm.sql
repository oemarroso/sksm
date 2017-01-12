-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 02:15 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sksm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kartu`
--

CREATE TABLE `kartu` (
  `nama_presenter` varchar(50) NOT NULL,
  `npm_presenter` int(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `judul_seminar` varchar(200) NOT NULL,
  `jenis_seminar` varchar(10) DEFAULT NULL,
  `dosen_pembimbing` varchar(50) NOT NULL,
  `tgl_seminar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL,
  `user_peserta` varchar(50) NOT NULL DEFAULT '0',
  `pass_peserta` varchar(50) NOT NULL DEFAULT '0',
  `nama_peserta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `user_peserta`, `pass_peserta`, `nama_peserta`) VALUES
(1, '1415061028', 'd82cbf2290ba82e9d6014ade2e02244a', 'Mohamad Sukarno Umar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
