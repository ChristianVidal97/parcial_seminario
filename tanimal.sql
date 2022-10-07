-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2022 a las 17:34:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcialf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tanimal`
--

CREATE TABLE `tanimal` (
  `Codigo_Animal` int(10) DEFAULT NULL,
  `Nombre_animal` text NOT NULL,
  `Codigo_Especies` varchar(30) NOT NULL,
  `Sexo_Animal` text NOT NULL,
  `Codigo_Comida` text NOT NULL,
  `Codigo_Jaula` int(10) NOT NULL,
  `Codigo_Vete` int(10) NOT NULL,
  `Cantidad_animal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tanimal`
--

INSERT INTO `tanimal` (`Codigo_Animal`, `Nombre_animal`, `Codigo_Especies`, `Sexo_Animal`, `Codigo_Comida`, `Codigo_Jaula`, `Codigo_Vete`, `Cantidad_animal`) VALUES
(1, '108', '77', '77', '67', 1, 1, 2),
(2, '84', '77', '77', '67', 2, 1, 1),
(3, 'Jirafa', 'viviparo', 'M', 'hervivoro', 3, 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
