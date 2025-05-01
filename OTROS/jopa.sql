-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2025 a las 02:54:25
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
-- Base de datos: `jopa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_completo`, `correo`, `telefono`) VALUES
(1, 'Jopa', 'jopalala@gmail.com', '985632598'),
(2, 'Jopa', 'jopalala@gmail.com', '985632598'),
(3, 'Jopa', 'jopalala@gmail.com', '985632598'),
(4, 'Jopa', 'jopalala@gmail.com', '985632598'),
(5, 'Jopa', 'jopalala@gmail.com', '985632598'),
(6, 'Jopa', 'jopalala@gmail.com', '985632598'),
(7, 'Jopa', 'jopalala@gmail.com', '985632598'),
(8, 'Jopa', 'jopalala@gmail.com', '985632598'),
(9, '', '', ''),
(10, 'Jopa', 'jopalala@gmail.com', '985632598'),
(11, 'Jopa', 'jopalala@gmail.com', '985632598'),
(12, 'Jopa', 'jopalala@gmail.com', '985632598'),
(13, 'Jopa', 'jopalala@gmail.com', '985632598'),
(14, 'Jopa', 'jopalala@gmail.com', '985632598'),
(15, '', '', ''),
(16, '', '', ''),
(17, 'Jopa', 'jopalala@gmail.com', '985632598');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id_habitacion` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio_por_noche` decimal(10,2) DEFAULT NULL,
  `estado` enum('disponible','ocupada','mantenimiento') DEFAULT 'disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id_habitacion`, `tipo`, `descripcion`, `precio_por_noche`, `estado`) VALUES
(1, 'simple', 'Habitación simple con cama individual y baño privado', '100.00', 'disponible'),
(2, 'simple', 'Habitación simple con escritorio y Wi-Fi', '100.00', 'disponible'),
(3, 'doble', 'Habitación doble con dos camas y TV cable', '110.00', 'disponible'),
(4, 'doble', 'Habitación doble con desayuno incluido', '110.00', 'disponible'),
(5, 'matrimonial', 'Habitación matrimonial con cama queen y baño privado', '60.00', 'disponible'),
(6, 'matrimonial', 'Habitación matrimonial con vista al jardín y Wi-Fi', '60.00', 'disponible'),
(7, 'suite', 'Suite con cama king, jacuzzi y vista panorámica', '250.00', 'ocupada'),
(8, 'suite', 'Suite de lujo con minibar y área de estar', '250.00', 'ocupada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `id_cliente`, `fecha_entrada`, `fecha_salida`, `total`) VALUES
(1, 1, '2025-01-01', '2025-01-02', '200.00'),
(2, 2, '2025-01-01', '2025-01-02', '100.00'),
(3, 3, '2025-01-01', '2025-01-02', '100.00'),
(4, 4, '2025-02-01', '2025-02-10', '540.00'),
(5, 5, '2025-02-01', '2025-02-03', '120.00'),
(6, 6, '2025-02-01', '2025-02-02', '200.00'),
(7, 7, '2025-02-01', '2025-02-02', '100.00'),
(8, 8, '2025-02-01', '2025-02-02', '100.00'),
(9, 9, '0000-00-00', '0000-00-00', '0.00'),
(10, 10, '2025-02-01', '2025-02-02', '100.00'),
(11, 11, '2025-02-01', '2025-02-02', '100.00'),
(12, 12, '2025-02-01', '2025-02-02', '100.00'),
(13, 13, '2025-02-01', '2025-02-02', '100.00'),
(14, 14, '2025-02-01', '2025-02-02', '100.00'),
(15, 15, '0000-00-00', '0000-00-00', '0.00'),
(16, 16, '0000-00-00', '0000-00-00', '0.00'),
(17, 17, '2025-02-02', '2025-02-23', '2100.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_habitaciones`
--

CREATE TABLE `reserva_habitaciones` (
  `id_reserva` int(11) NOT NULL,
  `id_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva_habitaciones`
--

INSERT INTO `reserva_habitaciones` (`id_reserva`, `id_habitacion`) VALUES
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(6, 5),
(7, 6),
(8, 7),
(10, 8),
(17, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `reserva_habitaciones`
--
ALTER TABLE `reserva_habitaciones`
  ADD PRIMARY KEY (`id_reserva`,`id_habitacion`),
  ADD KEY `id_habitacion` (`id_habitacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `reserva_habitaciones`
--
ALTER TABLE `reserva_habitaciones`
  ADD CONSTRAINT `reserva_habitaciones_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `reservas` (`id_reserva`),
  ADD CONSTRAINT `reserva_habitaciones_ibfk_2` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
