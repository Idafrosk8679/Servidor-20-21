-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 10:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `diccionario`
--

CREATE TABLE `diccionario` (
  `titulo_pagina` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `contenido` varchar(100) NOT NULL,
  `enlace` varchar(50) NOT NULL,
  `texto_enlace` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diccionario`
--

INSERT INTO `diccionario` (`titulo_pagina`, `titulo`, `contenido`, `enlace`, `texto_enlace`) VALUES
('Ejemplo de MVC', 'Articulo 123', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt eius aut eaque aspernatur illo mo', 'http://www.google.es', 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `diccionario2`
--

CREATE TABLE `diccionario2` (
  `titulo_pagina` varchar(50) NOT NULL,
  `titulo_foto` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `enlace_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diccionario2`
--

INSERT INTO `diccionario2` (`titulo_pagina`, `titulo_foto`, `foto`, `enlace_foto`) VALUES
('Foto MVC', 'foto de MVC en PHP', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1024px-PHP-logo.svg.png', 'https://www.php.net/');

-- --------------------------------------------------------

--
-- Table structure for table `diccionario3`
--

CREATE TABLE `diccionario3` (
  `titulo_pagina` varchar(50) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diccionario3`
--

INSERT INTO `diccionario3` (`titulo_pagina`, `nif`, `razon_social`, `direccion`, `telefono`) VALUES
('Datos Empresariales', '53662991K', 'Lorem ipsum dolor sit, amet consectetur adipisicin', 'C\\ Alameda Nº12', '956332099'),
('Datos Empresariales', '53662991K', 'Lorem ipsum dolor sit, amet consectetur adipisicin', 'C\\ Alameda Nº12', '956332099');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
