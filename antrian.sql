-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 06:54 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Frans', '', 'frans', '123'),
(2, 'admin', '', 'admin', 'admin'),
(3, 'Ambarita', 'franscodes@gmail.com', 'batak', '123'),
(4, 'ssad', 'sdasd', 'asd', '123'),
(5, 'Hafidz', 'wandrifo@gmail.com', 'hafidz', '123'),
(6, 'Miyan Yesica', 'miyan yesica', 'miyan', '123'),
(7, 'Indah Siska', 'indah@gmail.com', 'indah', 'indah'),
(8, 'cindy', 'cindy', 'cindy', '123'),
(9, 'Frans Ambarita', 'frans@gmail.com', 'ambaritafrans', '123'),
(10, 'reg', 'regita1800018191@webmail.uad.ac.id', 'reg', '12345'),
(11, '', '', '', ''),
(12, 'reg', 'regita1800018191@webmail.uad.ac.id', 'reg', '1234'),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, 'aa', 'regita1800018191@webmail.uad.ac.id', '111', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
