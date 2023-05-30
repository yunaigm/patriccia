-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 17:59:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddyunai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talumne`
--

CREATE TABLE `talumne` (
  `id` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `DNI` varchar(50) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talumne`
--

INSERT INTO `talumne` (`id`, `Nombre`, `Apellidos`, `DNI`, `foto`) VALUES
('273627', 'Jordan', 'Cruz', '394873643', ''),
('2736272', 'Yunai', 'Garcia', '2132323', ''),
(' a', ' a', 'w', 'w', 0x53637265656e73686f7420323032332d30342d31342061742031392e32382e34332e706e67),
(' foto', ' d', 'd', 'd', 0x6c6963656e7365642d696d6167652e6a7067),
(' Jordan', ' s', 's', 's', 0x6c6963656e7365642d696d6167652e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdomicilio`
--

CREATE TABLE `tdomicilio` (
  `idDomicilio` varchar(11) NOT NULL,
  `tipovia` varchar(11) NOT NULL,
  `direccion` varchar(11) NOT NULL,
  `portal` varchar(11) NOT NULL,
  `CP` varchar(11) NOT NULL,
  `idAlumne` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tdomicilio`
--

INSERT INTO `tdomicilio` (`idDomicilio`, `tipovia`, `direccion`, `portal`, `CP`, `idAlumne`) VALUES
(' x', ' x', 'x', 'x', 'x', 'x'),
('', '', '', '', '', ''),
(' z', ' z', 'z', 'z', 'z', 'z'),
(' d', ' d', 'd', 'd', 'd', 'd'),
(' oçoço', ' o', 'o', 'o', 'o', 'o'),
(' f', ' g', 'e', 'l', 'l', 'l');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
