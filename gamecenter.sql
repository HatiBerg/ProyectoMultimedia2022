-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2022 a las 05:24:24
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamecenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `idLog` int(11) NOT NULL,
  `descripLog` varchar(500) NOT NULL,
  `fechaLog` datetime NOT NULL,
  `idCambio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`idLog`, `descripLog`, `fechaLog`, `idCambio`) VALUES
(3, 'Se ha añadido un videojuego a la base de datos', '2022-12-20 18:24:17', 17),
(4, 'Se ha modificado un videojuego de la base de datos', '2022-12-20 18:27:05', 1),
(5, 'Se ha modificado un videojuego de la base de datos', '2022-12-20 22:50:11', 1),
(6, 'Se ha añadido una noticia a la base de datos', '2022-12-20 22:55:03', 2),
(7, 'Se ha modificado una noticia de la base de datos', '2022-12-20 23:14:32', 2),
(8, 'Se ha eliminado una noticia de la base de datos', '2022-12-20 23:19:16', 1),
(9, 'Se ha añadido una noticia a la base de datos', '2022-12-20 23:23:34', 4),
(10, 'Se ha añadido una noticia a la base de datos', '2022-12-20 23:24:59', 5),
(11, 'Se ha modificado una noticia de la base de datos', '2022-12-20 23:25:16', 5),
(12, 'Se ha eliminado una noticia de la base de datos', '2022-12-20 23:25:23', 5),
(13, 'Se ha eliminado una imágen del slider de la base de datos', '2022-12-21 00:38:16', 5),
(14, 'Se ha añadido un videojuego a la base de datos', '2022-12-21 01:05:17', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idN` int(11) NOT NULL,
  `tituloN` varchar(100) NOT NULL,
  `descripN` varchar(500) NOT NULL,
  `autorN` varchar(100) NOT NULL,
  `fechaN` date NOT NULL,
  `fotoN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idN`, `tituloN`, `descripN`, `autorN`, `fechaN`, `fotoN`) VALUES
(3, 'sadasdas', 'dasdasd', 'asdasd', '2022-11-29', 'img/noticia/img_noticia_3.jpg'),
(4, 'eetrrt', 'erterter', 'guykuyilk', '2022-11-28', 'img/noticia/img_noticia_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idVJ` int(11) NOT NULL,
  `tituloS` varchar(100) NOT NULL,
  `fotoS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idVJ`, `tituloS`, `fotoS`) VALUES
(3, 'Counter-Strike: Global Offensive', 'img/slider/img_slider_1.jpg'),
(1, 'Call of Duty®: Warzone™ 2.0', 'img/slider/img_slider_2.jpg'),
(2, 'Apex Legends™', 'img/slider/img_slider_3.jpg'),
(18, 'The Witcher® 3: Wild Hunt', 'img/slider/img_slider_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE `videojuego` (
  `idVJ` int(11) NOT NULL,
  `nombreVJ` varchar(200) NOT NULL,
  `descripVJ` varchar(500) NOT NULL,
  `fechaCrea` date NOT NULL,
  `editorVJ` varchar(200) NOT NULL,
  `desarrolladorVJ` varchar(200) NOT NULL,
  `precio` int(6) NOT NULL,
  `url_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`idVJ`, `nombreVJ`, `descripVJ`, `fechaCrea`, `editorVJ`, `desarrolladorVJ`, `precio`, `url_foto`) VALUES
(1, 'Call of Duty®: Warzone™ 2.0', 'Te damos la bienvenida a la Call of Duty®: Warzone™ 2.0, la gigantesca arena de combate gratuita que cuenta con el nuevo mapa Al Mazrah.', '2022-11-16', 'Activision', 'Infinity Ward', 0, 'img/game/img_game_1.jpg'),
(2, 'Apex Legends™', 'Apex Legends es el galardonado juego de disparos de héroes gratuito de Respawn Entertainment. Controla un elenco en aumento de personajes con habilidades poderosas y disfruta del juego estratégico por', '2020-11-05', 'Electronic Arts', 'Respawn Entertainment', 0, 'img/game/img_game_2.jpg'),
(3, 'Counter-Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionera la franquicia cuando salió hace 19 años. CS:GO trae nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de CS (de_dust2, etc.).', '2012-08-21', 'Valve', 'Hidden Path Entertainment', 0, 'img/game/img_game_3.jpg'),
(5, '111111', 'dfgsdfsgfdggfd', '2022-11-02', 'sdfgsgsfdgdfsgfsd', 'fdsgfdfdfgjgkhhkhjk', 0, 'img/game/img_game_5.jpg'),
(10, 'rterterterg', 'ertergergerg', '2022-12-01', 'ertergergerg', 'egregregerg', 30000, 'img/game/img_game_ 10.jpg'),
(11, '1111', '2222', '2022-11-28', '3333', '4444', 50000, 'img/game/img_game_ 11.jpg'),
(12, '1231231234', '23123213', '2021-10-13', '12312312', '3123123', 12312, 'img/game/img_game_12.jpg'),
(13, '1111', '2222', '2022-11-28', '3333', '4444', 5555, 'img/game/img_game_13.jpg'),
(14, 'sdfsdf', 'sdfsdfsdf', '2022-11-28', 'sdfsdf', 'sdfsdf', 1231, 'img/game/img_game_14.jpg'),
(15, 'sdfsdfsd', 'fsdfsdfsdf', '2022-11-28', 'sdfsdfsdf', 'sdfsdfsdf', 2342, 'img/game/img_game_15.jpg'),
(16, 'cdsfsd', 'fdsfsdf', '2022-11-29', 'sdfsdf', 'sdfsdf', 32242, 'img/game/img_game_16.jpg'),
(17, 'dsfsdf', 'sdfsdf', '2022-11-28', 'sdfsdfsdf', 'sdfsdf', 123, 'img/game/img_game_17.jpg'),
(18, 'The Witcher® 3: Wild Hunt', 'Eres Geralt de Rivia, cazador de monstruos. En un continente devastado por la guerra e infestado de criaturas, tu misión es encontrar a Ciri, la niña de la profecía, un arma viviente que puede alterar el mundo tal y como lo conocemos.', '2015-05-18', 'CD PROJEKT RED', 'CD PROJEKT RED', 18300, 'img/game/img_game_18.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idLog`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idN`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD KEY `FK_videojuego_slider` (`idVJ`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD PRIMARY KEY (`idVJ`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `idVJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `FK_videojuego_slider` FOREIGN KEY (`idVJ`) REFERENCES `videojuego` (`idVJ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
