-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2021 a las 02:38:11
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlpt`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_datos` (`nombre` VARCHAR(45), `Apel` VARCHAR(45), `fecha` DATETIME, `id` INT)  BEGIN 
UPDATE ninio 
SET nombreNinio = nombre,
apeNinio = Apel,
fechaNac = fecha
WHERE Ninio = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_datos` (`id` INT)  BEGIN 
DELETE FROM ninio
WHERE Ninio = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_elimina_ninio` (`id` INT)  BEGIN 
DELETE FROM ninio WHERE Ninio = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_datos` (IN `nombre` VARCHAR(45), IN `Apel` VARCHAR(45), IN `fecha` DATETIME)  BEGIN 
INSERT INTO Ninio (nombreNinio, apeNinio, fechaNac)
VALUES(nombre, Apel, fecha);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninio`
--

CREATE TABLE `ninio` (
  `Ninio` int(11) NOT NULL,
  `nombreNinio` varchar(45) NOT NULL,
  `apeNinio` varchar(45) NOT NULL,
  `fechaNac` datetime NOT NULL,
  `Tutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ninio`
--

INSERT INTO `ninio` (`Ninio`, `nombreNinio`, `apeNinio`, `fechaNac`, `Tutor`) VALUES
(7, 'Mildred', 'Rodas', '2021-09-01 04:29:54', 7),
(8, 'Augusto', 'Fernandez', '2021-09-01 04:29:54', 6),
(9, 'Leonel', 'Messi', '2021-09-01 04:30:22', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesotalla`
--

CREATE TABLE `pesotalla` (
  `peso` float NOT NULL,
  `talla` float NOT NULL,
  `fechMedida` datetime NOT NULL,
  `idNinio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pesotalla`
--

INSERT INTO `pesotalla` (`peso`, `talla`, `fechMedida`, `idNinio`) VALUES
(20, 18, '2021-08-28 23:14:25', 1),
(10, 10, '2021-09-01 05:19:51', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `idTutor` int(11) NOT NULL,
  `nombreTutor` varchar(45) NOT NULL,
  `apeTutor` varchar(45) NOT NULL,
  `fnacTutor` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`idTutor`, `nombreTutor`, `apeTutor`, `fnacTutor`) VALUES
(1, 'Mario', 'Bross', '1997-07-30 15:14:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ninio`
--
ALTER TABLE `ninio`
  ADD PRIMARY KEY (`Ninio`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`idTutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ninio`
--
ALTER TABLE `ninio`
  MODIFY `Ninio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `idTutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
