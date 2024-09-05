-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2024 a las 21:32:27
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
-- Base de datos: `tienda_virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `imagen`) VALUES
(1, 'Poleras', 'muj1.jpg'),
(2, 'Poleras manga laga', 'hom6.jpg'),
(3, 'Poleras manga corta', 'hom5.jpg'),
(4, 'Poleras para Mujer', 'product-01.jpg'),
(5, '11', 'hom6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `perfil` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `clave`, `perfil`) VALUES
(1, 'jhoaly', 'jhoaly@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`id`, `producto`, `precio`, `cantidad`, `id_pedido`) VALUES
(2, 'poleras', 55.00, 2, 1),
(3, 'polera manga larga', 44.00, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(80) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `fecha` datetime NOT NULL,
  `email` varchar(80) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `email_user` varchar(80) NOT NULL,
  `porceso` enum('1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_transaccion`, `monto`, `estado`, `fecha`, `email`, `nombre`, `apellido`, `direccion`, `ciudad`, `email_user`, `porceso`) VALUES
(1, '', 2.00, 'activo', '0000-00-00 00:00:00', 'ali@ali', 'ali', 'ali', 'av. viacha', 'el alto', '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `imagen` varchar(59) NOT NULL,
  `id_categoria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `imagen`, `id_categoria`) VALUES
(1, 'polera', 'lindas poleras paratoda la familia', 100.00, 1, 'hom6.jpg', 1),
(2, 'Miara', 'polera de carolG', 50.00, 1, 'muj1.jpg', 1),
(3, 'Nia Col', 'polera negra conFrases', 80.00, 2, 'muj5.jpg', 2),
(5, 'Maria Db', 'polera de la Sirenita', 70.00, 2, 'muj3.jpg', 2),
(7, 'Yarissa', 'Pelra Frasse Chistosa', 80.00, 1, 'muj7.jpg', 1),
(8, 'Gary', 'Pole de Doctor Simi', 100.00, 2, 'hom1.jpg', 2),
(9, 'Jhon', 'polera de Goku', 249.00, 2, 'hom2.jpg', 2),
(10, 'Yhair', 'Pelra Frasse Chistosas', 100.00, 2, 'hom6.jpg', 2),
(13, '111', '11', 111.00, 1, 'hom5.jpg', 1),
(28, 'df', 'nx', 321.00, 43, 'about-02.jpg', 4),
(29, '22', '22', 22.00, 22, 'hom4.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` char(65) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `estado`) VALUES
(1, 'yoali@gmail.com', '$2y$10$za0stjSedyk6B9tuBMx2JutMZns2/kQ5nBjceSUMPW/AGlT.W2Y6K', 'Activo'),
(2, 'ali@gmail.com', '$2y$10$CcLMrLWZ3L5dNhUsEKgF/OAwHrPJMdt7snBJXI5T5qmKcpjz0Ckia', 'Activo'),
(3, 'andy@gmail.com', '$2y$10$HrY2xsxDcHYWHSitaGxnfOEQBAD.B0jHXOdY.9tcGmvxA.t2d7bSq', 'Activo'),
(4, '11@gmail.com', '$2y$10$RvXuwQzWTZm182jIJcxJj.NZ/D0w5R5wqVXccwl.kt9XJ.kBA7Bum', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD CONSTRAINT `detalle_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
