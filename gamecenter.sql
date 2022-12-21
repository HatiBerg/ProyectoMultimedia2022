-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2022 a las 17:27:26
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
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`) VALUES
(1),
(2),
(7),
(8),
(9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, 'sdfsdfsdf', 'dasdasd', 'asdasd', '2022-11-29', 'img/noticia/img_noticia_3.jpg'),
(6, 'dssfsdfsdf', 'sdfsdfsdfds', 'fsdfsdfsdf', '2022-11-29', 'img/noticia/img_noticia_4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_noticia`
--

CREATE TABLE `registro_noticia` (
  `id` int(11) NOT NULL,
  `idN` int(11) NOT NULL,
  `fechaRN` datetime NOT NULL,
  `descripRN` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_videojuego`
--

CREATE TABLE `registro_videojuego` (
  `id` int(11) NOT NULL,
  `idVJ` int(11) NOT NULL,
  `fechaRV` datetime NOT NULL,
  `descripRV` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipoUser` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `tipoUser`) VALUES
(1, 'test@gmail.com', '$2y$10$XJriU3N7cv1/Nv.CPDZYDulOPLYpFqF1N5OaVqzj2WrwknGeFKPeS', 'CLIENTE'),
(2, 'test2@gmail.com', '$2y$10$U/ocn7bA.rqsWS/xHqYMQeQn4kHbSFX78F3ICvl/HQIBwO3jSd..K', 'CLIENTE'),
(7, 'test3@gmail.com', '$2y$10$0nhNRkng569oQHOsBiss3u4/0gpnMn5CA.vogp6sK/IPuch9NDMt2', 'CLIENTE'),
(8, 'test4@gmail.com', '$2y$10$RAwrOvDnrqWXVDfoSDbwbOz9Gai2LgxRqQmQ64fcAnEpjXSV.Qh0K', 'CLIENTE'),
(9, 'test5@gmail.com', '$2y$10$nDnHHaEdb751IMQ3HZ1gM.RbPr52DziA2on6aNsVCmZSfkKH1eZHm', 'CLIENTE');

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
  `url_foto` varchar(100) NOT NULL,
  `mostrarSlider` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`idVJ`, `nombreVJ`, `descripVJ`, `fechaCrea`, `editorVJ`, `desarrolladorVJ`, `precio`, `url_foto`, `mostrarSlider`) VALUES
(1, 'Call of Duty®: Warzone™ 2.0', 'Te damos la bienvenida a la Call of Duty®: Warzone™ 2.0, la gigantesca arena de combate gratuita que cuenta con el nuevo mapa Al Mazrah.', '2022-11-16', 'Activision', 'Infinity Ward', 0, 'img/game/img_game_1.jpg', 1),
(2, 'Apex Legends™', 'Apex Legends es el galardonado juego de disparos de héroes gratuito de Respawn Entertainment. Controla un elenco en aumento de personajes con habilidades poderosas y disfruta del juego estratégico por', '2020-11-05', 'Electronic Arts', 'Respawn Entertainment', 0, 'img/game/img_game_2.jpg', 1),
(3, 'Counter-Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionera la franquicia cuando salió hace 19 años. CS:GO trae nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de CS (de_dust2, etc.).', '2012-08-21', 'Valve', 'Hidden Path Entertainment', 0, 'img/game/img_game_3.jpg', 1),
(18, 'The Witcher® 3: Wild Hunt', 'Eres Geralt de Rivia, cazador de monstruos. En un continente devastado por la guerra e infestado de criaturas, tu misión es encontrar a Ciri, la niña de la profecía, un arma viviente que puede alterar el mundo tal y como lo conocemos.', '2015-05-18', 'CD PROJEKT RED', 'CD PROJEKT RED', 18300, 'img/game/img_game_18.jpg', 1),
(19, 'Dota 2', 'Cada día, millones de jugadores de todo el mundo entran en batalla como uno de los más de cien héroes de Dota. Y no importa si es su décima hora de juego o la milésima, siempre hay algo nuevo que descubrir.', '2013-07-09', 'Valve', 'Valve', 0, 'img/game/img_game_19.jpg', 0),
(20, 'Grand Theft Auto V', 'Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine con una resolución de 4K y disfrutar del juego a 60 fotogramas por segundo.', '2015-04-14', 'Rockstar Games', 'Rockstar North', 21774, 'img/game/img_game_20.jpg', 0),
(21, 'Rust', 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.', '2018-02-08', 'Facepunch Studios', 'Facepunch Studios', 17900, 'img/game/img_game_21.jpg', 0),
(22, 'Team Fortress 2', 'Nueve clases diferentes ofrecen una amplia variedad de habilidades tácticas y personalidades. Constantemente actualizado con nuevos modos de juego, mapas, equipamiento y, lo que es más importante, ¡sombreros!', '2007-10-10', 'Valve', 'Valve', 0, 'img/game/img_game_22.jpg', 0),
(23, 'Destiny 2', 'Destiny 2 es un MMO de acción con un mundo único y dinámico al que tus amigos y tú os podéis unir en cualquier momento y desde cualquier lugar de forma totalmente gratuita.', '2019-10-01', 'Bungie', 'Bungie', 0, 'img/game/img_game_23.jpg', 0),
(24, 'War Thunder', 'War Thunder es un juego de combate MMO gratuito de vehículos militares usados en la Segunda Guerra Mundial y la guerra de Corea. Lucha en grandes batallas de tierra, mar y aire con jugadores internacionales en un entorno en continuo desarrollo.', '2013-08-15', 'Gaijin Distribution KFT', 'Gaijin Entertainment', 0, 'img/game/img_game_24.jpg', 0),
(25, 'Unturned', 'Eres un superviviente en las ruinas de una sociedad infestada de zombis y debes cooperar con tus amigos para formar nuevas alianzas que te mantendrán con vida.', '2017-07-07', 'Smartly Dressed Games', 'Smartly Dressed Games', 0, 'img/game/img_game_25.jpg', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idN`);

--
-- Indices de la tabla `registro_noticia`
--
ALTER TABLE `registro_noticia`
  ADD KEY `FK_empleado_registro_noticia` (`id`),
  ADD KEY `FK_noticia_registro_noticia` (`idN`);

--
-- Indices de la tabla `registro_videojuego`
--
ALTER TABLE `registro_videojuego`
  ADD KEY `FK_empleado_registro_videojuego` (`id`),
  ADD KEY `FK_videojuego_registro_videojuego` (`idVJ`);

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
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  MODIFY `idVJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_usuario_cliente` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `FK_usuario_empleado` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `registro_noticia`
--
ALTER TABLE `registro_noticia`
  ADD CONSTRAINT `FK_empleado_registro_noticia` FOREIGN KEY (`id`) REFERENCES `empleado` (`id`),
  ADD CONSTRAINT `FK_noticia_registro_noticia` FOREIGN KEY (`idN`) REFERENCES `noticia` (`idN`);

--
-- Filtros para la tabla `registro_videojuego`
--
ALTER TABLE `registro_videojuego`
  ADD CONSTRAINT `FK_empleado_registro_videojuego` FOREIGN KEY (`id`) REFERENCES `empleado` (`id`),
  ADD CONSTRAINT `FK_videojuego_registro_videojuego` FOREIGN KEY (`idVJ`) REFERENCES `videojuego` (`idVJ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
