-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2023 a las 11:48:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento_bancario`
--

CREATE TABLE `descuento_bancario` (
  `id_banco` int(11) NOT NULL,
  `nombre_banco` varchar(255) NOT NULL,
  `monto` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `plazo` date NOT NULL,
  `id_empleado` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `descuento_bancario`
--

INSERT INTO `descuento_bancario` (`id_banco`, `nombre_banco`, `monto`, `nombre`, `plazo`, `id_empleado`) VALUES
(1, 'BANRURAL', 100, 'otro', '2023-12-15', 1),
(2, 'Banco de los trabajadores', 200, 'otro', '2023-12-15', 1),
(3, 'Banco de los trabajadores', 100, 'otro', '2023-12-15', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_empleado` int(125) NOT NULL,
  `nombre` varchar(225) NOT NULL,
  `apellido` varchar(225) NOT NULL,
  `fecha_de_nacimiento` varchar(125) NOT NULL,
  `direccion` varchar(125) NOT NULL,
  `telefono` int(125) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fecha_de_ingreso` varchar(255) NOT NULL,
  `salario` int(125) NOT NULL,
  `salario_descontado` int(255) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_descuento_bancario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_empleado`, `nombre`, `apellido`, `fecha_de_nacimiento`, `direccion`, `telefono`, `correo_electronico`, `foto`, `fecha_de_ingreso`, `salario`, `salario_descontado`, `id_departamento`, `id_empresa`, `id_descuento_bancario`) VALUES
(1, 'Juan', 'Diego', '11/10/1996', 'sector escuela vieja', 40623084, 'juandiegot190@gmail.com', 'https://drive.google.com/file/d/1TROHAP_S-0_1uchS6tlUX6HPpiKJjNUk/view?usp=sharing', '25 de septiembre del 2023', 3900, 3700, 0, 0, 0),
(2, 'waldir', 'castilo', '11/10/1996', 'mazatenango', 45654552, 'waldir@gmail.com', 'direcciondeldrive', '22 de octubre 2023', 3800, 3700, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contraseña`, `id_cargo`) VALUES
(1, 'admin', 'admin', '12345', 1),
(2, 'orlando', 'orlando', '12345', 2),
(3, 'diego', 'lazaro', '12345', 3),
(4, 'waldir', 'xitamul', '12345', 4),
(5, 'kevin', 'jose', '12345', 5),
(6, 'luis', 'luis', '12345', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descuento_bancario`
--
ALTER TABLE `descuento_bancario`
  ADD PRIMARY KEY (`id_banco`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_descuento_bancario` (`id_descuento_bancario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descuento_bancario`
--
ALTER TABLE `descuento_bancario`
  MODIFY `id_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_empleado` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
