CREATE Database id2570214_contac
-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2017 at 10:28 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2570214_contac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('juan', '654321'),
('SIMON', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `nombre` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`nombre`, `telefono`, `email`, `mensaje`) VALUES
('SIMON', 5613912, '', 'HELOOSOS '),
('SIMON', 5613912, '', 'HELOOSOS '),
('simon', 5613912, 'CASTANOSIMON2002@GMAIL.COM', 'hello'),
('e', 1, 'eduar2012.c@hotmail.com', 'e'),
('e', 1, 'eduar2012.c@hotmail.com', 'e'),
('Edward', 666, 'daniel_2490@hotmail.com', 'Prueba'),
('e', 1, 'eduar2012.c@hotmail.com', 'e'),
('Edward', 666, 'daniel_2490@hotmail.com', 'Prueba'),
('simon', 2147483647, 'julio@gmail.com', 'casacsas'),
('Randy Ramirez', 2147483647, 'ijuanvf@gdnma.ocm', 'no c'),
('samuel', 6253456, '', 'oeeee'),
('Pablop Albarracin', 2147483647, 'pabloalbarracinr@gmail.com', 'ostia quiero comprar un carro\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
