-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 12:46:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aprendeconkaxiew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avances`
--

CREATE TABLE `avances` (
  `nusuario` varchar(30) NOT NULL,
  `p1` decimal(5,2) NOT NULL,
  `p2` decimal(5,2) NOT NULL,
  `p3` decimal(5,2) NOT NULL,
  `p4` decimal(5,2) NOT NULL,
  `p5` decimal(5,2) NOT NULL,
  `p6` decimal(5,2) NOT NULL,
  `p7` decimal(5,2) NOT NULL,
  `p8` decimal(5,2) NOT NULL,
  `p9` decimal(5,2) NOT NULL,
  `p10` decimal(5,2) NOT NULL,
  `p11` decimal(5,2) NOT NULL,
  `p12` decimal(5,2) NOT NULL,
  `p13` decimal(5,2) NOT NULL,
  `p14` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `avances`
--

INSERT INTO `avances` (`nusuario`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`) VALUES
('Albrt', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('ccccc', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('ElGarras', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('Frankie', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('HannaMontana', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('KaxieAdmin', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('Maiz', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('Mimi', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('MimiGonz', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('rodrigoherrera456', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('SarayAlondra', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('YuliJuJu', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion1`
--

CREATE TABLE `progresion1` (
  `nusuario` varchar(30) NOT NULL,
  `p1e1r1` int(11) NOT NULL,
  `p1e1r2` int(11) NOT NULL,
  `p1e1r3` int(11) NOT NULL,
  `p1e1r4` int(11) NOT NULL,
  `p1e1r5` int(11) NOT NULL,
  `p1e1r6` int(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p1e2r1` int(11) NOT NULL,
  `p1e2r2` int(11) NOT NULL,
  `p1e2r3` int(11) NOT NULL,
  `p1e2r4` int(11) NOT NULL,
  `p1e2r5` int(11) NOT NULL,
  `p1e2r6` int(11) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p1avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2`) / 2 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion1`
--

INSERT INTO `progresion1` (`nusuario`, `p1e1r1`, `p1e1r2`, `p1e1r3`, `p1e1r4`, `p1e1r5`, `p1e1r6`, `CalifE1`, `p1e2r1`, `p1e2r2`, `p1e2r3`, `p1e2r4`, `p1e2r5`, `p1e2r6`, `CalifE2`) VALUES
('Albrt', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('ccccc', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('ElGarras', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('Frankie', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('HannaMontana', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('KaxieAdmin', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('Maiz', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('Mimi', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('MimiGonz', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('rodrigoherrera', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('rodrigoherrera456', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('SarayAlondra', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('WenBarb', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00),
('YuliJuJu', 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion2`
--

CREATE TABLE `progresion2` (
  `nusuario` varchar(30) NOT NULL,
  `p2e1r1` int(11) NOT NULL,
  `p2e1r2` int(11) NOT NULL,
  `p2e1r3` int(11) NOT NULL,
  `p2e1r4` int(11) NOT NULL,
  `p2e1r5` int(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p2e2r1` int(11) NOT NULL,
  `p2e2r2` int(11) NOT NULL,
  `p2e2r3` int(11) NOT NULL,
  `p2e2r4` int(11) NOT NULL,
  `p2e2r5` int(11) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p2e3r1` int(11) NOT NULL,
  `p2e3r2` int(11) NOT NULL,
  `p2e3r3` int(11) NOT NULL,
  `p2e3r4` int(11) NOT NULL,
  `p2e3r5` int(11) NOT NULL,
  `p2e3r6` int(11) NOT NULL,
  `p2e3r7` int(11) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p2e4r1` int(11) NOT NULL,
  `p2e4r2` int(11) NOT NULL,
  `p2e4r3` int(11) NOT NULL,
  `p2e4r4` int(11) NOT NULL,
  `p2e4r5` int(11) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p2e5r1` int(11) NOT NULL,
  `p2e5r2` int(11) NOT NULL,
  `p2e5r3` int(11) NOT NULL,
  `p2e5r4` int(11) NOT NULL,
  `p2e5r5` int(11) NOT NULL,
  `CalifE5` decimal(4,2) NOT NULL,
  `p2e6r1` int(11) NOT NULL,
  `p2e6r2` int(11) NOT NULL,
  `p2e6r3` int(11) NOT NULL,
  `p2e6r4` int(11) NOT NULL,
  `p2e6r5` int(11) NOT NULL,
  `CalifE6` decimal(4,2) NOT NULL,
  `p2e7r1` int(11) NOT NULL,
  `p2e7r2` int(11) NOT NULL,
  `p2e7r3` int(11) NOT NULL,
  `p2e7r4` int(11) NOT NULL,
  `p2e7r5` int(11) NOT NULL,
  `CalifE7` decimal(4,2) NOT NULL,
  `p2e8r1` int(11) NOT NULL,
  `p2e8r2` int(11) NOT NULL,
  `p2e8r3` int(11) NOT NULL,
  `p2e8r4` int(11) NOT NULL,
  `p2e8r5` int(11) NOT NULL,
  `CalifE8` decimal(4,2) NOT NULL,
  `p2e9r1` int(11) NOT NULL,
  `p2e9r2` int(11) NOT NULL,
  `p2e9r3` int(11) NOT NULL,
  `p2e9r4` int(11) NOT NULL,
  `p2e9r5` int(11) NOT NULL,
  `CalifE9` decimal(4,2) NOT NULL,
  `p2avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4` + `CalifE5` + `CalifE6` + `CalifE7` + `CalifE8` + `CalifE9`) / 9 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion2`
--

INSERT INTO `progresion2` (`nusuario`, `p2e1r1`, `p2e1r2`, `p2e1r3`, `p2e1r4`, `p2e1r5`, `CalifE1`, `p2e2r1`, `p2e2r2`, `p2e2r3`, `p2e2r4`, `p2e2r5`, `CalifE2`, `p2e3r1`, `p2e3r2`, `p2e3r3`, `p2e3r4`, `p2e3r5`, `p2e3r6`, `p2e3r7`, `CalifE3`, `p2e4r1`, `p2e4r2`, `p2e4r3`, `p2e4r4`, `p2e4r5`, `CalifE4`, `p2e5r1`, `p2e5r2`, `p2e5r3`, `p2e5r4`, `p2e5r5`, `CalifE5`, `p2e6r1`, `p2e6r2`, `p2e6r3`, `p2e6r4`, `p2e6r5`, `CalifE6`, `p2e7r1`, `p2e7r2`, `p2e7r3`, `p2e7r4`, `p2e7r5`, `CalifE7`, `p2e8r1`, `p2e8r2`, `p2e8r3`, `p2e8r4`, `p2e8r5`, `CalifE8`, `p2e9r1`, `p2e9r2`, `p2e9r3`, `p2e9r4`, `p2e9r5`, `CalifE9`) VALUES
('Albrt', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('ccccc', 1, 1, 3, 3, 2, 4.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('Frankie', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('HannaMontana', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('KaxieAdmin', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('Maiz', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('Mimi', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('MimiGonz', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('rodrigoherrera456', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('SarayAlondra', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00),
('YuliJuJu', 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion3`
--

CREATE TABLE `progresion3` (
  `nusuario` varchar(30) NOT NULL,
  `p3e1r1` int(11) NOT NULL,
  `p3e1r2` int(11) NOT NULL,
  `p3e1r3` int(11) NOT NULL,
  `p3e1r4` int(11) NOT NULL,
  `p3e1r5` int(11) NOT NULL,
  `p3e1r6` int(11) NOT NULL,
  `p3e1r7` int(11) NOT NULL,
  `p3e1r8` int(11) NOT NULL,
  `p3e1r9` int(11) NOT NULL,
  `p3e1r10` int(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p3avance` decimal(5,2) GENERATED ALWAYS AS (`CalifE1` * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion3`
--

INSERT INTO `progresion3` (`nusuario`, `p3e1r1`, `p3e1r2`, `p3e1r3`, `p3e1r4`, `p3e1r5`, `p3e1r6`, `p3e1r7`, `p3e1r8`, `p3e1r9`, `p3e1r10`, `CalifE1`) VALUES
('Albrt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('ccccc', 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 8.00),
('Frankie', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('HannaMontana', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('KaxieAdmin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('Maiz', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('Mimi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('MimiGonz', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('rodrigoherrera456', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('SarayAlondra', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('YuliJuJu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion4`
--

CREATE TABLE `progresion4` (
  `nusuario` varchar(30) NOT NULL,
  `p4e1r1` text NOT NULL,
  `p4e1r2` text NOT NULL,
  `p4e1r3` text NOT NULL,
  `p4e1r4` text NOT NULL,
  `p4e1r5` text NOT NULL,
  `p4e1r6` text NOT NULL,
  `p4e1r7` text NOT NULL,
  `p4e1r8` text NOT NULL,
  `p4e1r9` text NOT NULL,
  `p4e1r10` text NOT NULL,
  `p4e1r11` text NOT NULL,
  `p4e1r12` text NOT NULL,
  `p4e1r13` text NOT NULL,
  `p4e1r14` text NOT NULL,
  `p4e1r15` text NOT NULL,
  `p4e1r16` text NOT NULL,
  `p4e1r17` text NOT NULL,
  `p4e1r18` text NOT NULL,
  `p4e1r19` text NOT NULL,
  `p4e1r20` text NOT NULL,
  `p4e1r21` text NOT NULL,
  `p4e1r22` text NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p4e2r1` text NOT NULL,
  `p4e2r2` text NOT NULL,
  `p4e2r3` text NOT NULL,
  `p4e2r4` text NOT NULL,
  `p4e2r5` text NOT NULL,
  `p4e2r6` text NOT NULL,
  `p4e2r7` text NOT NULL,
  `p4e2r8` text NOT NULL,
  `p4e2r9` text NOT NULL,
  `p4e2r10` text NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p4avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2`) / 2 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion4`
--

INSERT INTO `progresion4` (`nusuario`, `p4e1r1`, `p4e1r2`, `p4e1r3`, `p4e1r4`, `p4e1r5`, `p4e1r6`, `p4e1r7`, `p4e1r8`, `p4e1r9`, `p4e1r10`, `p4e1r11`, `p4e1r12`, `p4e1r13`, `p4e1r14`, `p4e1r15`, `p4e1r16`, `p4e1r17`, `p4e1r18`, `p4e1r19`, `p4e1r20`, `p4e1r21`, `p4e1r22`, `CalifE1`, `p4e2r1`, `p4e2r2`, `p4e2r3`, `p4e2r4`, `p4e2r5`, `p4e2r6`, `p4e2r7`, `p4e2r8`, `p4e2r9`, `p4e2r10`, `CalifE2`) VALUES
('Albrt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('ccccc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('Frankie', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('HannaMontana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('KaxieAdmin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('Maiz', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('Mimi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('MimiGonz', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('Natalia', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 10.00, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 10.00),
('rodrigoherrera456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('SarayAlondra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('YuliJuJu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion5`
--

CREATE TABLE `progresion5` (
  `nusuario` varchar(30) NOT NULL,
  `p5e1txt1` decimal(5,1) NOT NULL,
  `p5e1txt2` decimal(5,1) NOT NULL,
  `p5e1txt3` decimal(5,1) NOT NULL,
  `p5e1txt4` decimal(5,1) NOT NULL,
  `p5e1txt5` decimal(5,1) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p5e2txt1` decimal(5,1) NOT NULL,
  `p5e2txt2` decimal(5,1) NOT NULL,
  `p5e2txt3` decimal(5,1) NOT NULL,
  `p5e2txt4` decimal(5,1) NOT NULL,
  `p5e2txt5` decimal(5,1) NOT NULL,
  `p5e2txt6` decimal(5,1) NOT NULL,
  `p5e2txt7` decimal(5,1) NOT NULL,
  `p5e2txt8` decimal(5,1) NOT NULL,
  `p5e2txt9` decimal(5,1) NOT NULL,
  `p5e2txt10` decimal(5,1) NOT NULL,
  `p5e2txt11` decimal(5,1) NOT NULL,
  `p5e2txt12` decimal(5,1) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p5e3txt1` decimal(5,1) NOT NULL,
  `p5e3txt2` decimal(5,1) NOT NULL,
  `p5e3txt3` decimal(5,1) NOT NULL,
  `p5e3txt4` decimal(5,1) NOT NULL,
  `p5e3txt5` decimal(5,1) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p5e4txt1` decimal(5,1) NOT NULL,
  `p5e4txt2` decimal(5,1) NOT NULL,
  `p5e4txt3` decimal(5,1) NOT NULL,
  `p5e4txt4` decimal(5,1) NOT NULL,
  `p5e4txt5` decimal(5,1) NOT NULL,
  `p5e4txt6` decimal(5,1) NOT NULL,
  `p5e4txt7` decimal(5,1) NOT NULL,
  `p5e4txt8` decimal(5,1) NOT NULL,
  `p5e4txt9` decimal(5,1) NOT NULL,
  `p5e4txt10` decimal(5,1) NOT NULL,
  `p5e4txt11` decimal(5,1) NOT NULL,
  `p5e4txt12` decimal(5,1) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p5avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4`) / 4 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion5`
--

INSERT INTO `progresion5` (`nusuario`, `p5e1txt1`, `p5e1txt2`, `p5e1txt3`, `p5e1txt4`, `p5e1txt5`, `CalifE1`, `p5e2txt1`, `p5e2txt2`, `p5e2txt3`, `p5e2txt4`, `p5e2txt5`, `p5e2txt6`, `p5e2txt7`, `p5e2txt8`, `p5e2txt9`, `p5e2txt10`, `p5e2txt11`, `p5e2txt12`, `CalifE2`, `p5e3txt1`, `p5e3txt2`, `p5e3txt3`, `p5e3txt4`, `p5e3txt5`, `CalifE3`, `p5e4txt1`, `p5e4txt2`, `p5e4txt3`, `p5e4txt4`, `p5e4txt5`, `p5e4txt6`, `p5e4txt7`, `p5e4txt8`, `p5e4txt9`, `p5e4txt10`, `p5e4txt11`, `p5e4txt12`, `CalifE4`) VALUES
('Albrt', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('ccccc', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Frankie', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('HannaMontana', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('KaxieAdmin', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Maiz', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Mimi', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('MimiGonz', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Natalia', 6.0, 0.0, 0.0, 0.0, 0.0, 2.00, 9.0, 20.0, 2.0, 2.0, 6.0, 240.0, 80.0, 80.0, 54.0, 8.0, 18.0, 12.0, 10.00, 24.0, 143.0, 300.0, 144.0, 12.0, 10.00, 24.0, 180.0, 15.0, 96.0, 66.0, 144.0, 24.0, 150.0, 96.0, 66.0, 540.0, 60.0, 9.17),
('Natalia2', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('rodrigoherrera456', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('SarayAlondra', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('YuliJuJu', 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion6`
--

CREATE TABLE `progresion6` (
  `nusuario` varchar(30) NOT NULL,
  `p6e1txt1` decimal(5,1) NOT NULL,
  `p6e1txt2` decimal(5,1) NOT NULL,
  `p6e1txt3` decimal(5,1) NOT NULL,
  `p6e1txt4` decimal(5,1) NOT NULL,
  `p6e1txt5` decimal(5,1) NOT NULL,
  `p6e1txt6` decimal(5,1) NOT NULL,
  `p6e1txt7` decimal(5,1) NOT NULL,
  `p6e1txt8` decimal(5,1) NOT NULL,
  `p6e1txt9` decimal(5,1) NOT NULL,
  `CalifE1` decimal(5,1) NOT NULL,
  `p6e2txt1` decimal(5,1) NOT NULL,
  `p6e2txt2` decimal(5,1) NOT NULL,
  `p6e2txt3` decimal(5,1) NOT NULL,
  `p6e2txt4` decimal(5,1) NOT NULL,
  `p6e2txt5` decimal(5,1) NOT NULL,
  `p6e2txt6` decimal(5,1) NOT NULL,
  `p6e2txt7` decimal(5,1) NOT NULL,
  `p6e2txt8` decimal(5,1) NOT NULL,
  `p6e2txt9` decimal(5,1) NOT NULL,
  `CalifE2` decimal(5,1) NOT NULL,
  `p6e3txt1` varchar(11) NOT NULL,
  `p6e3txt2` varchar(11) NOT NULL,
  `p6e3txt3` varchar(11) NOT NULL,
  `p6e3txt4` varchar(11) NOT NULL,
  `p6e3txt5` varchar(11) NOT NULL,
  `p6e3txt6` varchar(11) NOT NULL,
  `p6e3txt7` varchar(11) NOT NULL,
  `p6e3txt8` varchar(11) NOT NULL,
  `p6e3txt9` varchar(11) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p6e4txt1` decimal(5,1) NOT NULL,
  `p6e4txt2` decimal(5,1) NOT NULL,
  `p6e4txt3` decimal(5,1) NOT NULL,
  `p6e4txt4` decimal(5,1) NOT NULL,
  `p6e4txt5` decimal(5,1) NOT NULL,
  `p6e4txt6` decimal(5,1) NOT NULL,
  `p6e4txt7` decimal(5,1) NOT NULL,
  `p6e4txt8` decimal(5,1) NOT NULL,
  `p6e4txt9` decimal(5,1) NOT NULL,
  `p6e4txt10` decimal(5,1) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p6e5txt1` decimal(5,1) NOT NULL,
  `p6e5txt2` decimal(5,1) NOT NULL,
  `p6e5txt3` decimal(5,1) NOT NULL,
  `p6e5txt4` decimal(5,1) NOT NULL,
  `p6e5txt5` decimal(5,1) NOT NULL,
  `p6e5txt6` decimal(5,1) NOT NULL,
  `p6e5txt7` decimal(5,1) NOT NULL,
  `CalifE5` decimal(4,2) NOT NULL,
  `p6avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4` + `CalifE5`) / 5 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion6`
--

INSERT INTO `progresion6` (`nusuario`, `p6e1txt1`, `p6e1txt2`, `p6e1txt3`, `p6e1txt4`, `p6e1txt5`, `p6e1txt6`, `p6e1txt7`, `p6e1txt8`, `p6e1txt9`, `CalifE1`, `p6e2txt1`, `p6e2txt2`, `p6e2txt3`, `p6e2txt4`, `p6e2txt5`, `p6e2txt6`, `p6e2txt7`, `p6e2txt8`, `p6e2txt9`, `CalifE2`, `p6e3txt1`, `p6e3txt2`, `p6e3txt3`, `p6e3txt4`, `p6e3txt5`, `p6e3txt6`, `p6e3txt7`, `p6e3txt8`, `p6e3txt9`, `CalifE3`, `p6e4txt1`, `p6e4txt2`, `p6e4txt3`, `p6e4txt4`, `p6e4txt5`, `p6e4txt6`, `p6e4txt7`, `p6e4txt8`, `p6e4txt9`, `p6e4txt10`, `CalifE4`, `p6e5txt1`, `p6e5txt2`, `p6e5txt3`, `p6e5txt4`, `p6e5txt5`, `p6e5txt6`, `p6e5txt7`, `CalifE5`) VALUES
('Albrt', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('ccccc', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Frankie', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('HannaMontana', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('KaxieAdmin', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Maiz', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Mimi', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('MimiGonz', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Natalia', 9999.9, 8123.7, 9999.9, 9999.9, 9999.9, 9999.9, 9999.9, 1124.5, 9999.9, 10.0, 9999.9, 8124.0, 9999.9, 9999.9, 9999.9, 9999.9, 9999.9, 1124.0, 9999.9, 10.0, '195511', '365004', '2513316', '17547', '29966', '383943', '84507720', '0', '0', 7.78, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 145.0, 0.0, 0.0, 0.0, 1.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 75.0, 1.43),
('Natalia2', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('rodrigoherrera456', 678.0, 543.0, 246.0, 45.0, 78.0, 44.0, 321.0, 1111.0, 556.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('SarayAlondra', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('YuliJuJu', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion7`
--

CREATE TABLE `progresion7` (
  `nusuario` varchar(30) NOT NULL,
  `p7e1txt1_1` varchar(11) NOT NULL,
  `p7e1txt1_2` varchar(11) NOT NULL,
  `p7e1txt2_1` varchar(11) NOT NULL,
  `p7e1txt2_2` varchar(11) NOT NULL,
  `p7e1txt3_1` varchar(11) NOT NULL,
  `p7e1txt3_2` varchar(11) NOT NULL,
  `p7e1txt4_1` varchar(11) NOT NULL,
  `p7e1txt4_2` varchar(11) NOT NULL,
  `p7e1txt5_1` varchar(11) NOT NULL,
  `p7e1txt5_2` varchar(11) NOT NULL,
  `p7e1txt6_1` varchar(11) NOT NULL,
  `p7e1txt6_2` varchar(11) NOT NULL,
  `p7e1txt7_1` varchar(11) NOT NULL,
  `p7e1txt7_2` varchar(11) NOT NULL,
  `p7e1txt8_1` varchar(11) NOT NULL,
  `p7e1txt8_2` varchar(11) NOT NULL,
  `p7e1txt9_1` varchar(11) NOT NULL,
  `p7e1txt9_2` varchar(11) NOT NULL,
  `p7e1txt10_1` varchar(11) NOT NULL,
  `p7e1txt10_2` varchar(11) NOT NULL,
  `p7e1txt11_1` varchar(11) NOT NULL,
  `p7e1txt11_2` varchar(11) NOT NULL,
  `p7e1txt12_1` varchar(11) NOT NULL,
  `p7e1txt12_2` varchar(11) NOT NULL,
  `p7e1txt13_1` varchar(11) NOT NULL,
  `p7e1txt13_2` varchar(11) NOT NULL,
  `p7e1txt14_1` varchar(11) NOT NULL,
  `p7e1txt14_2` varchar(11) NOT NULL,
  `p7e1txt15_1` varchar(11) NOT NULL,
  `p7e1txt15_2` varchar(11) NOT NULL,
  `p7e1txt16_1` varchar(11) NOT NULL,
  `p7e1txt16_2` varchar(11) NOT NULL,
  `p7e1txt17_1` varchar(11) NOT NULL,
  `p7e1txt17_2` varchar(11) NOT NULL,
  `p7e1txt18_1` varchar(11) NOT NULL,
  `p7e1txt18_2` varchar(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p7e2txt1_1` varchar(11) NOT NULL,
  `p7e2txt1_2` varchar(11) NOT NULL,
  `p7e2txt2_1` varchar(11) NOT NULL,
  `p7e2txt2_2` varchar(11) NOT NULL,
  `p7e2txt3_1` varchar(11) NOT NULL,
  `p7e2txt3_2` varchar(11) NOT NULL,
  `p7e2txt4_1` varchar(11) NOT NULL,
  `p7e2txt4_2` varchar(11) NOT NULL,
  `p7e2txt5_1` varchar(11) NOT NULL,
  `p7e2txt5_2` varchar(11) NOT NULL,
  `p7e2txt6_1` varchar(11) NOT NULL,
  `p7e2txt6_2` varchar(11) NOT NULL,
  `p7e2txt7_1` varchar(11) NOT NULL,
  `p7e2txt7_2` varchar(11) NOT NULL,
  `p7e2txt8_1` varchar(11) NOT NULL,
  `p7e2txt8_2` varchar(11) NOT NULL,
  `p7e2txt9_1` varchar(11) NOT NULL,
  `p7e2txt9_2` varchar(11) NOT NULL,
  `p7e2txt10_1` varchar(11) NOT NULL,
  `p7e2txt10_2` varchar(11) NOT NULL,
  `p7e2txt11_1` varchar(11) NOT NULL,
  `p7e2txt11_2` varchar(11) NOT NULL,
  `p7e2txt12_1` varchar(11) NOT NULL,
  `p7e2txt12_2` varchar(11) NOT NULL,
  `p7e2txt13_1` varchar(11) NOT NULL,
  `p7e2txt13_2` varchar(11) NOT NULL,
  `p7e2txt14_1` varchar(11) NOT NULL,
  `p7e2txt14_2` varchar(11) NOT NULL,
  `p7e2txt15_1` varchar(11) NOT NULL,
  `p7e2txt15_2` varchar(11) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p7e3txt1` varchar(11) NOT NULL,
  `p7e3txt2` varchar(11) NOT NULL,
  `p7e3txt3` varchar(11) NOT NULL,
  `p7e3txt4` varchar(11) NOT NULL,
  `p7e3txt5` varchar(11) NOT NULL,
  `p7e3txt6` varchar(11) NOT NULL,
  `p7e3txt7` varchar(11) NOT NULL,
  `p7e3txt8` varchar(11) NOT NULL,
  `p7e3txt9` varchar(11) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p7e4txt1` decimal(5,1) NOT NULL,
  `p7e4txt2` decimal(5,1) NOT NULL,
  `p7e4txt3` decimal(5,1) NOT NULL,
  `p7e4txt4` decimal(5,1) NOT NULL,
  `p7e4txt5` decimal(5,1) NOT NULL,
  `p7e4txt6` decimal(5,1) NOT NULL,
  `p7e4txt7` decimal(5,1) NOT NULL,
  `p7e4txt8` decimal(5,1) NOT NULL,
  `p7e4txt9` decimal(5,1) NOT NULL,
  `p7e4txt10` decimal(5,1) NOT NULL,
  `p7e4txt11` decimal(5,1) NOT NULL,
  `p7e4txt12` decimal(5,1) NOT NULL,
  `p7e4txt13` decimal(5,1) NOT NULL,
  `p7e4txt14` decimal(5,1) NOT NULL,
  `p7e4txt15` decimal(5,1) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p7e5txt1` varchar(11) NOT NULL,
  `p7e5txt2` varchar(11) NOT NULL,
  `p7e5txt3` varchar(11) NOT NULL,
  `p7e5txt4` varchar(11) NOT NULL,
  `p7e5txt5` varchar(11) NOT NULL,
  `p7e5txt6` varchar(11) NOT NULL,
  `p7e5txt7` varchar(11) NOT NULL,
  `CalifE5` decimal(4,2) NOT NULL,
  `p7e6txt1` varchar(11) NOT NULL,
  `p7e6txt2` varchar(11) NOT NULL,
  `p7e6txt3` varchar(11) NOT NULL,
  `p7e6txt4` varchar(11) NOT NULL,
  `p7e6txt5` varchar(11) NOT NULL,
  `p7e6txt6` varchar(11) NOT NULL,
  `p7e6txt7` varchar(11) NOT NULL,
  `p7e6txt8` varchar(11) NOT NULL,
  `p7e6txt9` varchar(11) NOT NULL,
  `p7e6txt10` varchar(11) NOT NULL,
  `p7e6txt11` varchar(11) NOT NULL,
  `p7e6txt12` varchar(11) NOT NULL,
  `p7e6txt13` varchar(11) NOT NULL,
  `p7e6txt14` varchar(11) NOT NULL,
  `p7e6txt15` varchar(11) NOT NULL,
  `CalifE6` decimal(4,2) NOT NULL,
  `p7e7txt1` decimal(5,1) NOT NULL,
  `p7e7txt2` decimal(5,1) NOT NULL,
  `p7e7txt3` decimal(5,1) NOT NULL,
  `p7e7txt4` decimal(5,1) NOT NULL,
  `p7e7txt5` decimal(5,1) NOT NULL,
  `p7e7txt6` decimal(5,1) NOT NULL,
  `p7e7txt7` decimal(5,1) NOT NULL,
  `p7e7txt8` decimal(5,1) NOT NULL,
  `p7e7txt9` decimal(5,1) NOT NULL,
  `p7e7txt10` decimal(5,1) NOT NULL,
  `p7e7txt11` decimal(5,1) NOT NULL,
  `p7e7txt12` decimal(5,1) NOT NULL,
  `p7e7txt13` decimal(5,1) NOT NULL,
  `p7e7txt14` decimal(5,1) NOT NULL,
  `p7e7txt15` decimal(5,1) NOT NULL,
  `p7e7txt16` decimal(5,1) NOT NULL,
  `p7e7txt17` decimal(5,1) NOT NULL,
  `p7e7txt18` decimal(5,1) NOT NULL,
  `CalifE7` decimal(4,2) NOT NULL,
  `p7e8txt1` varchar(11) NOT NULL,
  `p7e8txt2` varchar(11) NOT NULL,
  `p7e8txt3` varchar(11) NOT NULL,
  `p7e8txt4` varchar(11) NOT NULL,
  `p7e8txt5` varchar(11) NOT NULL,
  `p7e8txt6` varchar(11) NOT NULL,
  `p7e8txt7` varchar(11) NOT NULL,
  `p7e8txt8` varchar(11) NOT NULL,
  `p7e8txt9` varchar(11) NOT NULL,
  `p7e8txt10` varchar(11) NOT NULL,
  `p7e8txt11` varchar(11) NOT NULL,
  `p7e8txt12` varchar(11) NOT NULL,
  `CalifE8` decimal(4,2) NOT NULL,
  `p7e9txt1` decimal(6,2) NOT NULL,
  `p7e9txt2` decimal(6,2) NOT NULL,
  `p7e9txt3` decimal(6,2) NOT NULL,
  `p7e9txt4` decimal(6,2) NOT NULL,
  `p7e9txt5` decimal(6,2) NOT NULL,
  `p7e9txt6` decimal(6,2) NOT NULL,
  `p7e9txt7` decimal(6,2) NOT NULL,
  `p7e9txt8` decimal(6,2) NOT NULL,
  `p7e9txt9` decimal(6,2) NOT NULL,
  `p7e9txt10` decimal(6,2) NOT NULL,
  `p7e9txt11` decimal(6,2) NOT NULL,
  `p7e9txt12` decimal(6,2) NOT NULL,
  `p7e9txt13` decimal(6,2) NOT NULL,
  `p7e9txt14` decimal(6,2) NOT NULL,
  `p7e9txt15` decimal(6,2) NOT NULL,
  `CalifE9` decimal(4,2) NOT NULL,
  `p7e10txt1` decimal(6,2) NOT NULL,
  `p7e10txt2` decimal(6,2) NOT NULL,
  `p7e10txt3` decimal(6,2) NOT NULL,
  `p7e10txt4` decimal(6,2) NOT NULL,
  `p7e10txt5` decimal(6,2) NOT NULL,
  `p7e10txt6` decimal(6,2) NOT NULL,
  `p7e10txt7` decimal(6,2) NOT NULL,
  `p7e10txt8` decimal(6,2) NOT NULL,
  `p7e10txt9` decimal(6,2) NOT NULL,
  `p7e10txt10` decimal(6,2) NOT NULL,
  `p7e10txt11` decimal(6,2) NOT NULL,
  `p7e10txt12` decimal(6,2) NOT NULL,
  `p7e10txt13` decimal(6,2) NOT NULL,
  `p7e10txt14` decimal(6,2) NOT NULL,
  `p7e10txt15` decimal(6,2) NOT NULL,
  `CalifE10` decimal(4,2) NOT NULL,
  `p7e11txt1` decimal(5,2) NOT NULL,
  `p7e11txt2` decimal(5,2) NOT NULL,
  `p7e11txt3` decimal(5,2) NOT NULL,
  `p7e11txt4` decimal(5,2) NOT NULL,
  `p7e11txt5` decimal(5,2) NOT NULL,
  `p7e11txt6` decimal(5,2) NOT NULL,
  `p7e11txt7` decimal(5,2) NOT NULL,
  `p7e11txt8` decimal(5,2) NOT NULL,
  `p7e11txt9` decimal(5,2) NOT NULL,
  `p7e11txt10` decimal(5,2) NOT NULL,
  `p7e11txt11` decimal(5,2) NOT NULL,
  `p7e11txt12` decimal(5,2) NOT NULL,
  `p7e11txt13` decimal(5,2) NOT NULL,
  `p7e11txt14` decimal(5,2) NOT NULL,
  `p7e11txt15` decimal(5,2) NOT NULL,
  `p7e11txt16` decimal(5,2) NOT NULL,
  `p7e11txt17` decimal(5,2) NOT NULL,
  `p7e11txt18` decimal(5,2) NOT NULL,
  `p7e11txt19` decimal(5,2) NOT NULL,
  `CalifE11` decimal(4,2) NOT NULL,
  `p7avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4` + `CalifE5` + `CalifE6` + `CalifE7` + `CalifE8` + `CalifE9` + `CalifE10` + `CalifE11`) / 11 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion7`
--

INSERT INTO `progresion7` (`nusuario`, `p7e1txt1_1`, `p7e1txt1_2`, `p7e1txt2_1`, `p7e1txt2_2`, `p7e1txt3_1`, `p7e1txt3_2`, `p7e1txt4_1`, `p7e1txt4_2`, `p7e1txt5_1`, `p7e1txt5_2`, `p7e1txt6_1`, `p7e1txt6_2`, `p7e1txt7_1`, `p7e1txt7_2`, `p7e1txt8_1`, `p7e1txt8_2`, `p7e1txt9_1`, `p7e1txt9_2`, `p7e1txt10_1`, `p7e1txt10_2`, `p7e1txt11_1`, `p7e1txt11_2`, `p7e1txt12_1`, `p7e1txt12_2`, `p7e1txt13_1`, `p7e1txt13_2`, `p7e1txt14_1`, `p7e1txt14_2`, `p7e1txt15_1`, `p7e1txt15_2`, `p7e1txt16_1`, `p7e1txt16_2`, `p7e1txt17_1`, `p7e1txt17_2`, `p7e1txt18_1`, `p7e1txt18_2`, `CalifE1`, `p7e2txt1_1`, `p7e2txt1_2`, `p7e2txt2_1`, `p7e2txt2_2`, `p7e2txt3_1`, `p7e2txt3_2`, `p7e2txt4_1`, `p7e2txt4_2`, `p7e2txt5_1`, `p7e2txt5_2`, `p7e2txt6_1`, `p7e2txt6_2`, `p7e2txt7_1`, `p7e2txt7_2`, `p7e2txt8_1`, `p7e2txt8_2`, `p7e2txt9_1`, `p7e2txt9_2`, `p7e2txt10_1`, `p7e2txt10_2`, `p7e2txt11_1`, `p7e2txt11_2`, `p7e2txt12_1`, `p7e2txt12_2`, `p7e2txt13_1`, `p7e2txt13_2`, `p7e2txt14_1`, `p7e2txt14_2`, `p7e2txt15_1`, `p7e2txt15_2`, `CalifE2`, `p7e3txt1`, `p7e3txt2`, `p7e3txt3`, `p7e3txt4`, `p7e3txt5`, `p7e3txt6`, `p7e3txt7`, `p7e3txt8`, `p7e3txt9`, `CalifE3`, `p7e4txt1`, `p7e4txt2`, `p7e4txt3`, `p7e4txt4`, `p7e4txt5`, `p7e4txt6`, `p7e4txt7`, `p7e4txt8`, `p7e4txt9`, `p7e4txt10`, `p7e4txt11`, `p7e4txt12`, `p7e4txt13`, `p7e4txt14`, `p7e4txt15`, `CalifE4`, `p7e5txt1`, `p7e5txt2`, `p7e5txt3`, `p7e5txt4`, `p7e5txt5`, `p7e5txt6`, `p7e5txt7`, `CalifE5`, `p7e6txt1`, `p7e6txt2`, `p7e6txt3`, `p7e6txt4`, `p7e6txt5`, `p7e6txt6`, `p7e6txt7`, `p7e6txt8`, `p7e6txt9`, `p7e6txt10`, `p7e6txt11`, `p7e6txt12`, `p7e6txt13`, `p7e6txt14`, `p7e6txt15`, `CalifE6`, `p7e7txt1`, `p7e7txt2`, `p7e7txt3`, `p7e7txt4`, `p7e7txt5`, `p7e7txt6`, `p7e7txt7`, `p7e7txt8`, `p7e7txt9`, `p7e7txt10`, `p7e7txt11`, `p7e7txt12`, `p7e7txt13`, `p7e7txt14`, `p7e7txt15`, `p7e7txt16`, `p7e7txt17`, `p7e7txt18`, `CalifE7`, `p7e8txt1`, `p7e8txt2`, `p7e8txt3`, `p7e8txt4`, `p7e8txt5`, `p7e8txt6`, `p7e8txt7`, `p7e8txt8`, `p7e8txt9`, `p7e8txt10`, `p7e8txt11`, `p7e8txt12`, `CalifE8`, `p7e9txt1`, `p7e9txt2`, `p7e9txt3`, `p7e9txt4`, `p7e9txt5`, `p7e9txt6`, `p7e9txt7`, `p7e9txt8`, `p7e9txt9`, `p7e9txt10`, `p7e9txt11`, `p7e9txt12`, `p7e9txt13`, `p7e9txt14`, `p7e9txt15`, `CalifE9`, `p7e10txt1`, `p7e10txt2`, `p7e10txt3`, `p7e10txt4`, `p7e10txt5`, `p7e10txt6`, `p7e10txt7`, `p7e10txt8`, `p7e10txt9`, `p7e10txt10`, `p7e10txt11`, `p7e10txt12`, `p7e10txt13`, `p7e10txt14`, `p7e10txt15`, `CalifE10`, `p7e11txt1`, `p7e11txt2`, `p7e11txt3`, `p7e11txt4`, `p7e11txt5`, `p7e11txt6`, `p7e11txt7`, `p7e11txt8`, `p7e11txt9`, `p7e11txt10`, `p7e11txt11`, `p7e11txt12`, `p7e11txt13`, `p7e11txt14`, `p7e11txt15`, `p7e11txt16`, `p7e11txt17`, `p7e11txt18`, `p7e11txt19`, `CalifE11`) VALUES
('Albrt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('ccccc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('ElGarras', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('Frankie', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('HannaMontana', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('KaxieAdmin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('Maiz', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('Mimi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('MimiGonz', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('rodrigoherrera456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('SarayAlondra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
('WenBarb', '9.5', '10', '90', '100', '0.547', '8.5', 'm', '5n', '3', '4b2', '67', '230', '0.16', '7.98', '7', '10', 'x3', '9', 'y', 'x', '16.4', '99.01', '10.78', 'u', '4.5', '9', '1', '2', '0.5', '100', '12', '15', '100.2', '34.5', 'n23', 'r', 0.00, '451', '500', '1.87', '2', '1.2', '3.4', 'x', 'y', 'm2', '56', '2y4', '10y', '10', '30', '1.9', '5', '685.5', '438.11', '77', '55', '540', '10', 'y3', '3m', '78', '14', '99.2', '100', '8.4', '17.1', 0.00, '2400', '650', '2856.1', '5000', '144', '325.125', '0.11', '0.093', '27.6', 10.00, 9.3, 2.7, 2003.8, 40.1, 253.6, 1.3, 9.6, 358.6, 6.6, 5.0, 226.8, 9.7, 244.0, 0.2, 3.8, 10.00, '10386', '108', '8', '1680', '6', '12', '255', 5.71, '188.9', '17.3', '3.5', '30', '5', '761.1', '34', '9.4', '6.3', '887.7', '10', '34', '55', '3.5', '320', 7.33, 635.0, 441.2, 1541.9, 1818.0, 27.0, 32.9, 527.0, 8.5, 7.5, 25.1, 204.0, 13.0, 132.0, 45.0, 100.0, 132.0, 73.0, 200.0, 7.22, '4.8', '4', '3.4', '24', '213', '10', '568', '3.8', '126', '2.5', '2.1', '84', 7.50, 13.50, 3070.50, 5390.00, 2.80, 1020.00, 336.60, 120.00, 1.44, 4950.00, 7.80, 5236.56, 0.50, 663.00, 22.00, 346.43, 10.00, 52.17, 29.08, 67.00, 14.00, 3.40, 9.00, 0.69, 67.00, 76.50, 9.99, 88.00, 99.97, 8.00, 76.00, 0.00, 6.43, 999.99, 530.00, 938.00, 407.00, 611.00, 285.00, 8.20, 7.40, 492.00, 3.49, 10.00, 10.18, 3.10, 12.15, 16.00, 20.21, 8.51, 0.60, 39.00, 7.37),
('YuliJuJu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion8`
--

CREATE TABLE `progresion8` (
  `nusuario` varchar(30) NOT NULL,
  `p8e1txt1` decimal(5,1) NOT NULL,
  `p8e1txt2` decimal(5,1) NOT NULL,
  `p8e1txt3` decimal(5,1) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p8e2txt1` decimal(5,1) NOT NULL,
  `p8e2txt2` decimal(5,1) NOT NULL,
  `p8e2txt3` decimal(5,1) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p8e3txt1` decimal(5,1) NOT NULL,
  `p8e3txt2` decimal(5,1) NOT NULL,
  `p8e3txt3` decimal(5,1) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p8e4txt1` decimal(5,1) NOT NULL,
  `p8e4txt2` decimal(5,1) NOT NULL,
  `p8e4txt3` decimal(5,1) NOT NULL,
  `p8e4txt4` decimal(5,1) NOT NULL,
  `p8e4txt5` decimal(5,1) NOT NULL,
  `p8e4txt6` decimal(5,1) NOT NULL,
  `p8e4txt7` decimal(5,1) NOT NULL,
  `p8e4txt8` decimal(5,1) NOT NULL,
  `p8e4txt9` decimal(5,1) NOT NULL,
  `p8e4txt10` decimal(5,1) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p8avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4`) / 4 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion8`
--

INSERT INTO `progresion8` (`nusuario`, `p8e1txt1`, `p8e1txt2`, `p8e1txt3`, `CalifE1`, `p8e2txt1`, `p8e2txt2`, `p8e2txt3`, `CalifE2`, `p8e3txt1`, `p8e3txt2`, `p8e3txt3`, `CalifE3`, `p8e4txt1`, `p8e4txt2`, `p8e4txt3`, `p8e4txt4`, `p8e4txt5`, `p8e4txt6`, `p8e4txt7`, `p8e4txt8`, `p8e4txt9`, `p8e4txt10`, `CalifE4`) VALUES
('Albrt', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('ccccc', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Frankie', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('HannaMontana', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('KaxieAdmin', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Maiz', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Mimi', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('MimiGonz', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Natalia', 694.4, 1250.0, 520.8, 10.00, 2433.3, 8954.3, 6007.3, 10.00, 120.0, 567.5, 375.0, 10.00, 400.0, 599.4, 9999.9, 9999.9, 793.3, 6300.0, 979.7, 9999.9, 9999.9, 1265.2, 10.00),
('Natalia2', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('rodrigoherrera456', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('SarayAlondra', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('YuliJuJu', 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion9`
--

CREATE TABLE `progresion9` (
  `nusuario` varchar(30) NOT NULL,
  `p9e1txt1` decimal(5,1) NOT NULL,
  `p9e1txt2` decimal(5,1) NOT NULL,
  `p9e1txt3` decimal(5,1) NOT NULL,
  `p9e1txt4` decimal(5,1) NOT NULL,
  `p9e1txt5` decimal(5,1) NOT NULL,
  `p9e1txt6` decimal(5,1) NOT NULL,
  `p9e1txt7` decimal(5,1) NOT NULL,
  `p9e1txt8` decimal(5,1) NOT NULL,
  `p9e1txt9` decimal(5,1) NOT NULL,
  `p9e1txt10` decimal(5,1) NOT NULL,
  `p9e1txt11` decimal(5,1) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p9e2r1` text NOT NULL,
  `p9e2r2` text NOT NULL,
  `p9e2r3` text NOT NULL,
  `p9e2r4` text NOT NULL,
  `p9e2r5` text NOT NULL,
  `p9e2r6` text NOT NULL,
  `p9e2r7` text NOT NULL,
  `p9e2r8` text NOT NULL,
  `p9e2r9` text NOT NULL,
  `p9e2r10` text NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p9avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2`) / 2 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion9`
--

INSERT INTO `progresion9` (`nusuario`, `p9e1txt1`, `p9e1txt2`, `p9e1txt3`, `p9e1txt4`, `p9e1txt5`, `p9e1txt6`, `p9e1txt7`, `p9e1txt8`, `p9e1txt9`, `p9e1txt10`, `p9e1txt11`, `CalifE1`, `p9e2r1`, `p9e2r2`, `p9e2r3`, `p9e2r4`, `p9e2r5`, `p9e2r6`, `p9e2r7`, `p9e2r8`, `p9e2r9`, `p9e2r10`, `CalifE2`) VALUES
('Albrt', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('ccccc', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('ElGarras', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('Frankie', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('HannaMontana', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('KaxieAdmin', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('Maiz', 999.4, 456.3, 999.4, 999.4, 999.4, 999.4, 999.4, 999.4, 999.4, 999.4, 999.4, 1.82, '', '', '', '', '', '', '', '', '', '', 0.00),
('Mimi', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('MimiGonz', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('rodrigoherrera456', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('SarayAlondra', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('WenBarb', 1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00),
('YuliJuJu', 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, '', '', '', '', '', '', '', '', '', '', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion10`
--

CREATE TABLE `progresion10` (
  `nusuario` varchar(30) NOT NULL,
  `p10e1r1` int(11) NOT NULL,
  `p10e1r2` int(11) NOT NULL,
  `p10e1r3` int(11) NOT NULL,
  `p10e1r4` int(11) NOT NULL,
  `p10e1r5` int(11) NOT NULL,
  `p10e1r6` int(11) NOT NULL,
  `p10e1r7` int(11) NOT NULL,
  `p10e1r8` int(11) NOT NULL,
  `p10e1r9` int(11) NOT NULL,
  `p10e1r10` int(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p10avance` decimal(5,2) GENERATED ALWAYS AS (`CalifE1` * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion10`
--

INSERT INTO `progresion10` (`nusuario`, `p10e1r1`, `p10e1r2`, `p10e1r3`, `p10e1r4`, `p10e1r5`, `p10e1r6`, `p10e1r7`, `p10e1r8`, `p10e1r9`, `p10e1r10`, `CalifE1`) VALUES
('Albrt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('ccccc', 1, 1, 1, 2, 1, 0, 1, 3, 1, 3, 6.00),
('Frankie', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('HannaMontana', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('KaxieAdmin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('Maiz', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('Mimi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('MimiGonz', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('rodrigoherrera456', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('SarayAlondra', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00),
('YuliJuJu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion11`
--

CREATE TABLE `progresion11` (
  `nusuario` varchar(30) NOT NULL,
  `p11e1txt1` varchar(5) NOT NULL,
  `p11e1txt2` varchar(5) NOT NULL,
  `p11e1txt3` varchar(5) NOT NULL,
  `p11e1txt4` varchar(5) NOT NULL,
  `p11e1txt5` varchar(5) NOT NULL,
  `p11e1txt6` varchar(5) NOT NULL,
  `p11e1txt7` varchar(5) NOT NULL,
  `p11e1txt8` varchar(5) NOT NULL,
  `p11e1txt9` varchar(5) NOT NULL,
  `p11e1txt10` varchar(5) NOT NULL,
  `p11e1txt11` varchar(5) NOT NULL,
  `p11e1txt12` varchar(5) NOT NULL,
  `p11e1txt13` varchar(5) NOT NULL,
  `p11e1txt14` varchar(5) NOT NULL,
  `p11e1txt15` varchar(5) NOT NULL,
  `p11e1txt16` varchar(5) NOT NULL,
  `p11e1txt17` varchar(5) NOT NULL,
  `p11e1txt18` varchar(5) NOT NULL,
  `p11e1txt19` varchar(5) NOT NULL,
  `p11e1txt20` varchar(5) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p11e2r1` text NOT NULL,
  `p11e2r2` text NOT NULL,
  `p11e2r3` varchar(5) NOT NULL,
  `p11e2r4` varchar(5) NOT NULL,
  `p11e2r5` varchar(5) NOT NULL,
  `p11e2r6` varchar(5) NOT NULL,
  `p11e2r7` varchar(5) NOT NULL,
  `p11e2r8` varchar(5) NOT NULL,
  `p11e2r9` varchar(5) NOT NULL,
  `p11e2r10` varchar(5) NOT NULL,
  `p11e2r11` varchar(5) NOT NULL,
  `p11e2r12` varchar(5) NOT NULL,
  `p11e2r13` varchar(5) NOT NULL,
  `p11e2r14` varchar(5) NOT NULL,
  `p11e2r15` varchar(5) NOT NULL,
  `p11e2r16` varchar(5) NOT NULL,
  `p11e2r17` varchar(5) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p11e3txt1` varchar(5) NOT NULL,
  `p11e3txt2` varchar(5) NOT NULL,
  `p11e3txt3` varchar(5) NOT NULL,
  `p11e3txt4` varchar(5) NOT NULL,
  `p11e3txt5` varchar(5) NOT NULL,
  `p11e3txt6` varchar(5) NOT NULL,
  `p11e3txt7` varchar(5) NOT NULL,
  `p11e3txt8` varchar(5) NOT NULL,
  `p11e3txt9` varchar(5) NOT NULL,
  `p11e3txt10` varchar(5) NOT NULL,
  `p11e3txt11` varchar(5) NOT NULL,
  `p11e3txt12` varchar(5) NOT NULL,
  `p11e3txt13` varchar(5) NOT NULL,
  `p11e3txt14` varchar(5) NOT NULL,
  `p11e3txt15` varchar(5) NOT NULL,
  `p11e3txt16` varchar(5) NOT NULL,
  `p11e3txt17` varchar(5) NOT NULL,
  `p11e3txt18` varchar(5) NOT NULL,
  `p11e3txt19` varchar(5) NOT NULL,
  `p11e3txt20` varchar(5) NOT NULL,
  `p11e3txt21` varchar(5) NOT NULL,
  `p11e3txt22` varchar(5) NOT NULL,
  `p11e3txt23` varchar(5) NOT NULL,
  `p11e3txt24` varchar(5) NOT NULL,
  `p11e3txt25` varchar(5) NOT NULL,
  `p11e3txt26` varchar(5) NOT NULL,
  `p11e3txt27` varchar(5) NOT NULL,
  `p11e3txt28` varchar(5) NOT NULL,
  `p11e3txt29` varchar(5) NOT NULL,
  `p11e3txt30` varchar(5) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p11e4txt1` varchar(5) NOT NULL,
  `p11e4txt2` varchar(5) NOT NULL,
  `p11e4txt3` varchar(5) NOT NULL,
  `p11e4txt4` varchar(5) NOT NULL,
  `p11e4txt5` varchar(5) NOT NULL,
  `p11e4txt6` varchar(5) NOT NULL,
  `p11e4txt7` varchar(5) NOT NULL,
  `p11e4txt8` varchar(5) NOT NULL,
  `p11e4txt9` varchar(5) NOT NULL,
  `p11e4txt10` varchar(5) NOT NULL,
  `p11e4txt11` varchar(5) NOT NULL,
  `p11e4txt12` varchar(5) NOT NULL,
  `p11e4txt13` varchar(5) NOT NULL,
  `p11e4txt14` varchar(5) NOT NULL,
  `p11e4txt15` varchar(5) NOT NULL,
  `p11e4txt16` varchar(5) NOT NULL,
  `p11e4txt17` varchar(5) NOT NULL,
  `p11e4txt18` varchar(5) NOT NULL,
  `p11e4txt19` varchar(5) NOT NULL,
  `p11e4txt20` varchar(5) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p11avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4`) / 4 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion11`
--

INSERT INTO `progresion11` (`nusuario`, `p11e1txt1`, `p11e1txt2`, `p11e1txt3`, `p11e1txt4`, `p11e1txt5`, `p11e1txt6`, `p11e1txt7`, `p11e1txt8`, `p11e1txt9`, `p11e1txt10`, `p11e1txt11`, `p11e1txt12`, `p11e1txt13`, `p11e1txt14`, `p11e1txt15`, `p11e1txt16`, `p11e1txt17`, `p11e1txt18`, `p11e1txt19`, `p11e1txt20`, `CalifE1`, `p11e2r1`, `p11e2r2`, `p11e2r3`, `p11e2r4`, `p11e2r5`, `p11e2r6`, `p11e2r7`, `p11e2r8`, `p11e2r9`, `p11e2r10`, `p11e2r11`, `p11e2r12`, `p11e2r13`, `p11e2r14`, `p11e2r15`, `p11e2r16`, `p11e2r17`, `CalifE2`, `p11e3txt1`, `p11e3txt2`, `p11e3txt3`, `p11e3txt4`, `p11e3txt5`, `p11e3txt6`, `p11e3txt7`, `p11e3txt8`, `p11e3txt9`, `p11e3txt10`, `p11e3txt11`, `p11e3txt12`, `p11e3txt13`, `p11e3txt14`, `p11e3txt15`, `p11e3txt16`, `p11e3txt17`, `p11e3txt18`, `p11e3txt19`, `p11e3txt20`, `p11e3txt21`, `p11e3txt22`, `p11e3txt23`, `p11e3txt24`, `p11e3txt25`, `p11e3txt26`, `p11e3txt27`, `p11e3txt28`, `p11e3txt29`, `p11e3txt30`, `CalifE3`, `p11e4txt1`, `p11e4txt2`, `p11e4txt3`, `p11e4txt4`, `p11e4txt5`, `p11e4txt6`, `p11e4txt7`, `p11e4txt8`, `p11e4txt9`, `p11e4txt10`, `p11e4txt11`, `p11e4txt12`, `p11e4txt13`, `p11e4txt14`, `p11e4txt15`, `p11e4txt16`, `p11e4txt17`, `p11e4txt18`, `p11e4txt19`, `p11e4txt20`, `CalifE4`) VALUES
('rodrigoherrera456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion12`
--

CREATE TABLE `progresion12` (
  `nusuario` varchar(30) NOT NULL,
  `p12e1txt1` varchar(5) NOT NULL,
  `p12e1txt2` varchar(5) NOT NULL,
  `p12e1txt3` varchar(5) NOT NULL,
  `p12e1txt4` varchar(5) NOT NULL,
  `p12e1txt5` varchar(5) NOT NULL,
  `p12e1txt6` varchar(5) NOT NULL,
  `p12e1txt7` varchar(5) NOT NULL,
  `p12e1txt8` varchar(5) NOT NULL,
  `p12e1txt9` varchar(5) NOT NULL,
  `p12e1txt10` varchar(5) NOT NULL,
  `p12e1txt11` varchar(5) NOT NULL,
  `p12e1txt12` varchar(5) NOT NULL,
  `p12e1txt13` varchar(5) NOT NULL,
  `p12e1txt14` varchar(5) NOT NULL,
  `p12e1txt15` varchar(5) NOT NULL,
  `p12e1txt16` varchar(5) NOT NULL,
  `p12e1txt17` varchar(5) NOT NULL,
  `p12e1txt18` varchar(5) NOT NULL,
  `p12e1txt19` varchar(5) NOT NULL,
  `p12e1txt20` varchar(5) NOT NULL,
  `p12e1txt21` varchar(5) NOT NULL,
  `p12e1txt22` varchar(5) NOT NULL,
  `p12e1txt23` varchar(5) NOT NULL,
  `p12e1txt24` varchar(5) NOT NULL,
  `p12e1txt25` varchar(5) NOT NULL,
  `p12e1txt26` varchar(5) NOT NULL,
  `p12e1txt27` varchar(5) NOT NULL,
  `p12e1txt28` varchar(5) NOT NULL,
  `p12e1txt29` varchar(5) NOT NULL,
  `p12e1txt30` varchar(5) NOT NULL,
  `p12e1txt31` varchar(5) NOT NULL,
  `p12e1txt32` varchar(5) NOT NULL,
  `p12e1txt33` varchar(5) NOT NULL,
  `p12e1txt34` varchar(5) NOT NULL,
  `p12e1txt35` varchar(5) NOT NULL,
  `p12e1txt36` varchar(5) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p12e2txt1` varchar(5) NOT NULL,
  `p12e2txt2` varchar(5) NOT NULL,
  `p12e2txt3` varchar(5) NOT NULL,
  `p12e2txt4` varchar(5) NOT NULL,
  `p12e2txt5` varchar(5) NOT NULL,
  `p12e2txt6` varchar(5) NOT NULL,
  `p12e2txt7` varchar(5) NOT NULL,
  `p12e2txt8` varchar(5) NOT NULL,
  `p12e2txt9` varchar(5) NOT NULL,
  `p12e2txt10` varchar(5) NOT NULL,
  `p12e2txt11` varchar(5) NOT NULL,
  `p12e2txt12` varchar(5) NOT NULL,
  `p12e2txt13` varchar(5) NOT NULL,
  `p12e2txt14` varchar(5) NOT NULL,
  `p12e2txt15` varchar(5) NOT NULL,
  `p12e2txt16` varchar(5) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p12avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2`) / 2 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion12`
--

INSERT INTO `progresion12` (`nusuario`, `p12e1txt1`, `p12e1txt2`, `p12e1txt3`, `p12e1txt4`, `p12e1txt5`, `p12e1txt6`, `p12e1txt7`, `p12e1txt8`, `p12e1txt9`, `p12e1txt10`, `p12e1txt11`, `p12e1txt12`, `p12e1txt13`, `p12e1txt14`, `p12e1txt15`, `p12e1txt16`, `p12e1txt17`, `p12e1txt18`, `p12e1txt19`, `p12e1txt20`, `p12e1txt21`, `p12e1txt22`, `p12e1txt23`, `p12e1txt24`, `p12e1txt25`, `p12e1txt26`, `p12e1txt27`, `p12e1txt28`, `p12e1txt29`, `p12e1txt30`, `p12e1txt31`, `p12e1txt32`, `p12e1txt33`, `p12e1txt34`, `p12e1txt35`, `p12e1txt36`, `CalifE1`, `p12e2txt1`, `p12e2txt2`, `p12e2txt3`, `p12e2txt4`, `p12e2txt5`, `p12e2txt6`, `p12e2txt7`, `p12e2txt8`, `p12e2txt9`, `p12e2txt10`, `p12e2txt11`, `p12e2txt12`, `p12e2txt13`, `p12e2txt14`, `p12e2txt15`, `p12e2txt16`, `CalifE2`) VALUES
('rodrigoherrera456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion13`
--

CREATE TABLE `progresion13` (
  `nusuario` varchar(30) NOT NULL,
  `p13e1txt1` varchar(11) NOT NULL,
  `p13e1txt2` varchar(11) NOT NULL,
  `p13e1txt3` varchar(11) NOT NULL,
  `p13e1txt4` varchar(11) NOT NULL,
  `p13e1txt5` varchar(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p13e2txt1` decimal(5,1) NOT NULL,
  `p13e2txt2` decimal(5,1) NOT NULL,
  `p13e2txt3` decimal(5,1) NOT NULL,
  `p13e2txt4` decimal(5,1) NOT NULL,
  `p13e2txt5` decimal(5,1) NOT NULL,
  `p13e2txt6` decimal(5,1) NOT NULL,
  `p13e2txt7` decimal(5,1) NOT NULL,
  `p13e2txt8` decimal(5,1) NOT NULL,
  `p13e2txt9` decimal(5,1) NOT NULL,
  `p13e2txt10` decimal(5,1) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p13e3txt1` decimal(5,1) NOT NULL,
  `p13e3txt2` decimal(5,1) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p13e4txt1` decimal(5,1) NOT NULL,
  `p13e4txt2` decimal(5,1) NOT NULL,
  `p13e4txt3` decimal(5,1) NOT NULL,
  `p13e4txt4` decimal(5,1) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p13e5txt1` decimal(5,1) NOT NULL,
  `p13e5txt2` decimal(5,1) NOT NULL,
  `p13e5txt3` decimal(5,1) NOT NULL,
  `p13e5txt4` decimal(5,1) NOT NULL,
  `p13e5txt5` decimal(5,1) NOT NULL,
  `p13e5txt6` decimal(5,1) NOT NULL,
  `p13e5txt7` decimal(5,1) NOT NULL,
  `p13e5txt8` decimal(5,1) NOT NULL,
  `p13e5txt9` decimal(5,1) NOT NULL,
  `p13e5txt10` decimal(5,1) NOT NULL,
  `p13e5txt11` decimal(5,1) NOT NULL,
  `p13e5txt12` decimal(5,1) NOT NULL,
  `p13e5txt13` decimal(5,1) NOT NULL,
  `p13e5txt14` decimal(5,1) NOT NULL,
  `p13e5txt15` decimal(5,1) NOT NULL,
  `p13e5txt16` decimal(5,1) NOT NULL,
  `p13e5txt17` decimal(5,1) NOT NULL,
  `p13e5txt18` decimal(5,1) NOT NULL,
  `p13e5txt19` decimal(5,1) NOT NULL,
  `p13e5txt20` decimal(5,1) NOT NULL,
  `CalifE5` decimal(4,2) NOT NULL,
  `p13e6txt1` decimal(5,1) NOT NULL,
  `p13e6txt2` decimal(5,1) NOT NULL,
  `p13e6txt3` decimal(5,1) NOT NULL,
  `p13e6txt4` decimal(5,1) NOT NULL,
  `p13e6txt5` decimal(5,1) NOT NULL,
  `p13e6txt6` decimal(5,1) NOT NULL,
  `p13e6txt7` decimal(5,1) NOT NULL,
  `p13e6txt8` decimal(5,1) NOT NULL,
  `p13e6txt9` decimal(5,1) NOT NULL,
  `p13e6txt10` decimal(5,1) NOT NULL,
  `p13e6txt11` decimal(5,1) NOT NULL,
  `p13e6txt12` decimal(5,1) NOT NULL,
  `CalifE6` decimal(5,1) NOT NULL,
  `p13e7txt1` decimal(5,1) NOT NULL,
  `p13e7txt2` decimal(5,1) NOT NULL,
  `p13e7txt3` decimal(5,1) NOT NULL,
  `p13e7txt4` decimal(5,1) NOT NULL,
  `p13e7txt5` decimal(5,1) NOT NULL,
  `p13e7txt6` decimal(5,1) NOT NULL,
  `p13e7txt7` decimal(5,1) NOT NULL,
  `CalifE7` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion13`
--

INSERT INTO `progresion13` (`nusuario`, `p13e1txt1`, `p13e1txt2`, `p13e1txt3`, `p13e1txt4`, `p13e1txt5`, `CalifE1`, `p13e2txt1`, `p13e2txt2`, `p13e2txt3`, `p13e2txt4`, `p13e2txt5`, `p13e2txt6`, `p13e2txt7`, `p13e2txt8`, `p13e2txt9`, `p13e2txt10`, `CalifE2`, `p13e3txt1`, `p13e3txt2`, `CalifE3`, `p13e4txt1`, `p13e4txt2`, `p13e4txt3`, `p13e4txt4`, `CalifE4`, `p13e5txt1`, `p13e5txt2`, `p13e5txt3`, `p13e5txt4`, `p13e5txt5`, `p13e5txt6`, `p13e5txt7`, `p13e5txt8`, `p13e5txt9`, `p13e5txt10`, `p13e5txt11`, `p13e5txt12`, `p13e5txt13`, `p13e5txt14`, `p13e5txt15`, `p13e5txt16`, `p13e5txt17`, `p13e5txt18`, `p13e5txt19`, `p13e5txt20`, `CalifE5`, `p13e6txt1`, `p13e6txt2`, `p13e6txt3`, `p13e6txt4`, `p13e6txt5`, `p13e6txt6`, `p13e6txt7`, `p13e6txt8`, `p13e6txt9`, `p13e6txt10`, `p13e6txt11`, `p13e6txt12`, `CalifE6`, `p13e7txt1`, `p13e7txt2`, `p13e7txt3`, `p13e7txt4`, `p13e7txt5`, `p13e7txt6`, `p13e7txt7`, `CalifE7`) VALUES
('Albrt', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('ccccc', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Frankie', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('HannaMontana', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('KaxieAdmin', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Maiz', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Mimi', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('MimiGonz', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Natalia', '', '', '', '', '', 0.00, 4.0, 7.0, 5.0, 8.0, 6.0, 5.0, 24.0, 9.0, 4.0, 8.0, 10.00, 0.3, 1.5, 10.00, 0.3, 1.3, 0.5, 7.0, 10.00, 5.0, 2.0, 2.0, 1.0, 2.0, 2.0, 2.0, 1.0, 2.0, 2.0, 3.0, 1.0, 3.0, 1.0, 2.0, 2.0, 3.0, 1.0, 2.0, 1.0, 10.00, 6.0, 6.0, 2.0, 5.0, 3.0, 3.0, 3.0, 2.0, 3.0, 2.0, 5.0, 1.0, 10.0, 23.0, 12.0, 6.0, 5.0, 15.0, 20.0, 180.0, 10.00),
('Natalia2', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('rodrigoherrera456', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('SarayAlondra', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('YuliJuJu', '', '', '', '', '', 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresion14`
--

CREATE TABLE `progresion14` (
  `nusuario` varchar(30) NOT NULL,
  `p14e1r1` int(11) NOT NULL,
  `p14e1r2` int(11) NOT NULL,
  `p14e1r3` int(11) NOT NULL,
  `p14e1r4` int(11) NOT NULL,
  `CalifE1` decimal(4,2) NOT NULL,
  `p14e2txt1` decimal(5,1) NOT NULL,
  `p14e2txt2` decimal(5,1) NOT NULL,
  `p14e2txt3` decimal(5,1) NOT NULL,
  `p14e2txt4` decimal(5,1) NOT NULL,
  `p14e2txt5` decimal(5,1) NOT NULL,
  `p14e2txt6` decimal(5,1) NOT NULL,
  `p14e2txt7` decimal(5,1) NOT NULL,
  `p14e2txt8` decimal(5,1) NOT NULL,
  `p14e2txt9` decimal(5,1) NOT NULL,
  `p14e2txt10` decimal(5,1) NOT NULL,
  `p14e2txt11` decimal(5,1) NOT NULL,
  `p14e2txt12` decimal(5,1) NOT NULL,
  `p14e2txt13` decimal(5,1) NOT NULL,
  `p14e2txt14` decimal(5,1) NOT NULL,
  `p14e2txt15` decimal(5,1) NOT NULL,
  `p14e2txt16` decimal(5,1) NOT NULL,
  `CalifE2` decimal(4,2) NOT NULL,
  `p14e3txt1` decimal(5,1) NOT NULL,
  `p14e3txt2` decimal(5,1) NOT NULL,
  `p14e3txt3` decimal(5,1) NOT NULL,
  `p14e3txt4` decimal(5,1) NOT NULL,
  `p14e3txt5` decimal(5,1) NOT NULL,
  `p14e3txt6` decimal(5,1) NOT NULL,
  `p14e3txt7` decimal(5,1) NOT NULL,
  `p14e3txt8` decimal(5,1) NOT NULL,
  `p14e3txt9` decimal(5,1) NOT NULL,
  `p14e3txt10` decimal(5,1) NOT NULL,
  `p14e3txt11` decimal(5,1) NOT NULL,
  `p14e3txt12` decimal(5,1) NOT NULL,
  `p14e3txt13` decimal(5,1) NOT NULL,
  `p14e3txt14` decimal(5,1) NOT NULL,
  `p14e3txt15` decimal(5,1) NOT NULL,
  `p14e3txt16` decimal(5,1) NOT NULL,
  `CalifE3` decimal(4,2) NOT NULL,
  `p14e4txt1` decimal(5,1) NOT NULL,
  `p14e4txt2` decimal(5,1) NOT NULL,
  `p14e4txt3` decimal(5,1) NOT NULL,
  `p14e4txt4` decimal(5,1) NOT NULL,
  `p14e4txt5` decimal(5,1) NOT NULL,
  `p14e4txt6` decimal(5,1) NOT NULL,
  `p14e4txt7` decimal(5,1) NOT NULL,
  `p14e4txt8` decimal(5,1) NOT NULL,
  `p14e4txt9` decimal(5,1) NOT NULL,
  `p14e4txt10` decimal(5,1) NOT NULL,
  `p14e4txt11` decimal(5,1) NOT NULL,
  `p14e4txt12` decimal(5,1) NOT NULL,
  `p14e4txt13` decimal(5,1) NOT NULL,
  `p14e4txt14` decimal(5,1) NOT NULL,
  `p14e4txt15` decimal(5,1) NOT NULL,
  `p14e4txt16` decimal(5,1) NOT NULL,
  `CalifE4` decimal(4,2) NOT NULL,
  `p14avance` decimal(5,2) GENERATED ALWAYS AS ((`CalifE1` + `CalifE2` + `CalifE3` + `CalifE4`) / 4 * 10) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `progresion14`
--

INSERT INTO `progresion14` (`nusuario`, `p14e1r1`, `p14e1r2`, `p14e1r3`, `p14e1r4`, `CalifE1`, `p14e2txt1`, `p14e2txt2`, `p14e2txt3`, `p14e2txt4`, `p14e2txt5`, `p14e2txt6`, `p14e2txt7`, `p14e2txt8`, `p14e2txt9`, `p14e2txt10`, `p14e2txt11`, `p14e2txt12`, `p14e2txt13`, `p14e2txt14`, `p14e2txt15`, `p14e2txt16`, `CalifE2`, `p14e3txt1`, `p14e3txt2`, `p14e3txt3`, `p14e3txt4`, `p14e3txt5`, `p14e3txt6`, `p14e3txt7`, `p14e3txt8`, `p14e3txt9`, `p14e3txt10`, `p14e3txt11`, `p14e3txt12`, `p14e3txt13`, `p14e3txt14`, `p14e3txt15`, `p14e3txt16`, `CalifE3`, `p14e4txt1`, `p14e4txt2`, `p14e4txt3`, `p14e4txt4`, `p14e4txt5`, `p14e4txt6`, `p14e4txt7`, `p14e4txt8`, `p14e4txt9`, `p14e4txt10`, `p14e4txt11`, `p14e4txt12`, `p14e4txt13`, `p14e4txt14`, `p14e4txt15`, `p14e4txt16`, `CalifE4`) VALUES
('Albrt', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('ccccc', 0, 0, 0, 0, 0.00, 2.0, 2.0, -12.0, -5.0, 10.0, -15.0, -1.0, -12.0, 11.0, -14.0, -4.0, 0.0, 9.0, 1.0, -3.0, 7.0, 10.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Frankie', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('HannaMontana', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('KaxieAdmin', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Maiz', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('Mimi', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('MimiGonz', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('rodrigoherrera456', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('SarayAlondra', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00),
('YuliJuJu', 0, 0, 0, 0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `NUSUARIO` varchar(30) NOT NULL,
  `CONTRASENA` varchar(40) DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `FOTOPER` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NUSUARIO`, `CONTRASENA`, `NOMBRE`, `APELLIDO`, `FOTOPER`) VALUES
('Albrt', 'MinervaNobel', 'Alberto', 'Einstein', 'fotoperdefa.png'),
('ccccc', 'ff', 'kkjncjh', 'cxvvv', 'fotoperdefa.png'),
('ElGarras', '123456', 'Alan', 'Garrido', 'fotoperdefa.png'),
('Frankie', 'AnaFrank', 'Otto', 'Frank', 'fotoperdefa.png'),
('HannaMontana', 'soyhannamontana', 'Britney', 'Spears', 'fotoperdefa.png'),
('KaxieAdmin', '1234', 'Kaxie', 'Kex', 'P1.jpg'),
('Maiz', 'elote', 'Wendy', 'Maze', 'fotoperdefa.png'),
('MenaCast', 'pepasteamo', 'Jimena', 'Carrillo', 'slider2.jpg'),
('Mimi', '12345', 'Minerva', 'Torres', 'fotoperdefa.png'),
('MimiGonz', 'miriam', 'Miriam', 'Gonzalez', 'fotoperdefa.png'),
('rodrigoherrera', 'shark', 'rodrigo', 'herrera', 'fotoperdefa.png'),
('rodrigoherrera456', '45jdksk', 'rodrigo', 'herrera', 'fotoperdefa.png'),
('SarayAlondra', 'alondraa', 'Alondra', 'Gomez', 'fotoperdefa.png'),
('WenBarb', '123456789', 'Wendy', 'Barba', 'fotoperdefa.png'),
('YuliJuJu', 'hhhhjdnks', 'Yuliana', 'Juarez', 'fotoperdefa.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion1`
--
ALTER TABLE `progresion1`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion2`
--
ALTER TABLE `progresion2`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion3`
--
ALTER TABLE `progresion3`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion4`
--
ALTER TABLE `progresion4`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion5`
--
ALTER TABLE `progresion5`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion6`
--
ALTER TABLE `progresion6`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion7`
--
ALTER TABLE `progresion7`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`),
  ADD KEY `nusuario_2` (`nusuario`);

--
-- Indices de la tabla `progresion8`
--
ALTER TABLE `progresion8`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion9`
--
ALTER TABLE `progresion9`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion10`
--
ALTER TABLE `progresion10`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion11`
--
ALTER TABLE `progresion11`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion12`
--
ALTER TABLE `progresion12`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion13`
--
ALTER TABLE `progresion13`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `progresion14`
--
ALTER TABLE `progresion14`
  ADD PRIMARY KEY (`nusuario`),
  ADD KEY `nusuario` (`nusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`NUSUARIO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avances`
--
ALTER TABLE `avances`
  ADD CONSTRAINT `avances_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion1`
--
ALTER TABLE `progresion1`
  ADD CONSTRAINT `progresion1_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion2`
--
ALTER TABLE `progresion2`
  ADD CONSTRAINT `progresion2_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion3`
--
ALTER TABLE `progresion3`
  ADD CONSTRAINT `progresion3_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion7`
--
ALTER TABLE `progresion7`
  ADD CONSTRAINT `progresion7_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion9`
--
ALTER TABLE `progresion9`
  ADD CONSTRAINT `progresion9_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion10`
--
ALTER TABLE `progresion10`
  ADD CONSTRAINT `progresion10_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion11`
--
ALTER TABLE `progresion11`
  ADD CONSTRAINT `progresion11_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion12`
--
ALTER TABLE `progresion12`
  ADD CONSTRAINT `progresion12_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progresion14`
--
ALTER TABLE `progresion14`
  ADD CONSTRAINT `progresion14_ibfk_1` FOREIGN KEY (`nusuario`) REFERENCES `usuario` (`NUSUARIO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
