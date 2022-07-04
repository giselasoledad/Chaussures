-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2022 a las 02:21:42
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chaussures`
--
CREATE DATABASE IF NOT EXISTS `chaussures` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chaussures`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(4) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(6,0) NOT NULL,
  `stock` int(4) NOT NULL,
  `imagen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `descripcion`, `precio`, `stock`, `imagen`) VALUES
(1, 'Zapato Acordonado', 'Zapatos de vestir con capellada de cuero ecológico, con cordones encerados y suela de goma de vestir, perfectos para uso diario.', '4500', 50, '01.jpg'),
(2, 'Mocasín con cordón', 'Mocasín con diseño exclusivo y juvenil, forrados por dentro y con suela plástica.', '4900', 25, '02.jpg'),
(3, 'Bota con taco acordonada', 'Bota con taco acordonada, ideal para baile. \r\nResistente y forrada por dentro. \r\n', '3000', 40, '03.jpg'),
(4, 'Bota de vestir', 'Bota de vestir de cuero vacuno con taco cuadrado. \r\nCon un diseño cerrado ideal para época invernal. ', '5500', 37, '04.jpg'),
(5, 'Zapatos de cuero vacuno', 'Zapatos de cuero vacuno formales. Forrados con suela antideslizante.\r\nCuero de alta calidad.', '5500', 45, '05.jpg'),
(6, 'Zapatillas urbanas', 'Zapatillas urbanas gamuzadas. Con suela de goma antideslizante, ideales para el uso diario y exigente.', '7500', 16, '06.jpg'),
(7, 'Calzado deportivo', 'Zapatillas deportivas antideslizantes, ideal para la exigencia de un deporte de alto impacto. Forradas por dentro con tela suave para mas comodidad y plantillas acolchonadas.', '8500', 52, '07.jpg'),
(8, 'Zapato de charol', 'Zapato de charol importado, con capellana de alta calidad y suela antideslizante. \r\nÚnicos y muy resistentes.', '10500', 23, '08.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `mail`, `contraseña`) VALUES
(1, 'Gabriel', 'gabriel@usuario.com', '123123'),
(2, 'Laura', 'laura@usuario.com', '123124');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(4) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
