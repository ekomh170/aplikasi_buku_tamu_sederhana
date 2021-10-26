-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 06:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `nomor` int(12) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(128) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`nomor`, `nama`, `email`, `alamat`, `kota`, `telp`) VALUES
(1, 'Eko Muchamad Haryono', 'ekoganteng311@gmail.com', 'Kamurang rt02/rw08', 'Bogor', '082246105463'),
(2, 'Fatwa Anissa', 'fatwa@gmail.com', 'Karang Asem rt01/rw01', 'Bogor', '083811902489'),
(4, 'Muhammad Fahmi', 'Fahmi@gmail.com', 'Dukuh rt07/rw11', 'Bogor', '086772123121'),
(5, 'Pendy Saputra ', 'Pendy@gmail.com', 'Tajur rt02/rw05', 'Bogor', '087346276312'),
(6, 'Sihab', 'Sihab@gmail.com', 'Btn', 'Depok', '08123712123'),
(7, 'qweqw', 'qweqwwq', 'qweqw', 'qweqwe', '23312'),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, 'eqwqwe', 'qweqweqwe', 'qweqwe', 'qweqwe', '0823312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `nomor` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
