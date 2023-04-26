-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2023 a las 13:37:32
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
-- Base de datos: `AIRSOFT`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `CIF` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FechaFund` date DEFAULT NULL,
  `Descripcion` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Camuflaje` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Escudo` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`CIF`, `Nombre`, `FechaFund`, `Descripcion`, `Camuflaje`, `Escudo`) VALUES
('A-23038574', 'Grupo SEAL', '2018-07-07', 'Grupo SEAL almería Inspirado en DELTA USA', 'Multicam', 'https://amigosdelairsoft.org/wp-content/uploads/2021/04/grupo-seal-almeria-2-300x178.jpg'),
('B-65489100', 'SWAT', '2015-05-20', 'Grupo con sede en la capital, más de 100 miembros', 'Bosocoso', 'https://amigosdelairsoft.org/wp-content/uploads/2021/04/swat-2.png'),
('C-30178416', 'Mad Pigs', '2019-09-09', 'Grupo de Adra, unidades de élite y jugadores experimentados', 'Negro Pitón', 'https://amigosdelairsoft.org/wp-content/uploads/2021/04/19956811_1923491474564861_3742805399260956807_o-300x300.jpg'),
('D-20418744', 'Tercio Alboran', '2010-12-01', 'El más veterano de todos, se mantiene activo nacional', 'Árido Español', 'https://amigosdelairsoft.org/wp-content/uploads/2021/04/tercio-alboran-2-250x300.jpg'),
('E-20159633', 'Troyanos', '2016-02-20', 'Club de Airsoft de las islas Canarias, tiene muy buena relación con campos andaluces', 'Negro Pitón', 'https://amigosdelairsoft.org/wp-content/uploads/2021/03/ENBLEMA-INSULAR-DE-AIRSOFT-PNG.gif'),
('Z-00000000', 'INDIVIDUAL', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `Jefes_club`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `Jefes_club` (
`CLUB` varchar(50)
,`Nombre` varchar(15)
,`Apellidos` varchar(45)
,`Telefono` varchar(9)
,`Mail` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembro`
--

CREATE TABLE `miembro` (
  `DNI` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nombre` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellidos` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `FechaNac` date DEFAULT NULL,
  `Telefono` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Mail` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Cuota` tinyint(4) DEFAULT NULL,
  `Alquiler` tinyint(4) DEFAULT NULL,
  `Foto` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Lider` tinyint(4) DEFAULT NULL,
  `CLUB_CIF` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `miembro`
--

INSERT INTO `miembro` (`DNI`, `Nombre`, `Apellidos`, `FechaNac`, `Telefono`, `Mail`, `Cuota`, `Alquiler`, `Foto`, `Lider`, `CLUB_CIF`) VALUES
('26523016Z', 'Mario', 'Galvez', '2001-03-12', '600795600', 'margalvezsimarro@gmail.com', 0, 1, 'https://images.pexels.com/photos/15045042/pexels-photo-15045042.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 0, 'A-23038574'),
('30852418D', 'Juan', 'Esteban', '2002-11-25', '658941003', 'juanest23@hotmail.com', 1, 1, 'https://images.pexels.com/photos/13872174/pexels-photo-13872174.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 0, 'Z-00000000'),
('46512008R', 'Manuel', 'Uroz', '1971-09-13', '741023658', 'rangeralmeria@outlook.es', 1, 0, 'https://images.pexels.com/photos/1232459/pexels-photo-1232459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 1, 'B-65489100'),
('52106987G', 'Fernando', 'Martinez', '1979-04-16', '625879410', 'FerMan79@gmail.com', 1, 0, 'https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 1, 'D-20418744'),
('62014789J', 'Jesús', 'Méndez', '1980-01-30', '641225588', 'gruposealalm@gmail.com', 0, 0, 'https://images.pexels.com/photos/15760437/pexels-photo-15760437.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 1, 'A-23038574'),
('65201008J', 'Estela', 'Reynolds', '1966-02-17', '658200369', 'estreyl099@outlook.com', 1, 0, 'https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 0, 'Z-00000000'),
('95874102I', 'Felipe', 'Torres', '1997-10-17', '648100258', 'ferelgrande@gmail.com', 1, 1, 'https://images.pexels.com/photos/3031396/pexels-photo-3031396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 1, 'C-30178416');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `Morosos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `Morosos` (
`Asociado` varchar(15)
,`Apellidos` varchar(45)
,`Cuota` tinyint(4)
,`Telefono` varchar(9)
,`Mail` varchar(30)
,`Miembro de` varchar(50)
,`CLUB_CIF` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `Jefes_club`
--
DROP TABLE IF EXISTS `Jefes_club`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Jefes_club`  AS SELECT `club`.`Nombre` AS `CLUB`, `miembro`.`Nombre` AS `Nombre`, `miembro`.`Apellidos` AS `Apellidos`, `miembro`.`Telefono` AS `Telefono`, `miembro`.`Mail` AS `Mail` FROM (`club` join `miembro`) WHERE `miembro`.`Lider` = 1 AND `miembro`.`CLUB_CIF` = `club`.`CIF``CIF`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `Morosos`
--
DROP TABLE IF EXISTS `Morosos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Morosos`  AS SELECT `miembro`.`Nombre` AS `Asociado`, `miembro`.`Apellidos` AS `Apellidos`, `miembro`.`Cuota` AS `Cuota`, `miembro`.`Telefono` AS `Telefono`, `miembro`.`Mail` AS `Mail`, `club`.`Nombre` AS `Miembro de`, `miembro`.`CLUB_CIF` AS `CLUB_CIF` FROM (`miembro` join `club`) WHERE `miembro`.`CLUB_CIF` = `club`.`CIF` AND `miembro`.`Cuota` = 0 AND `miembro`.`Alquiler` = 11  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`CIF`);

--
-- Indices de la tabla `miembro`
--
ALTER TABLE `miembro`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `fk_MIEMBRO_CLUB1_idx` (`CLUB_CIF`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `miembro`
--
ALTER TABLE `miembro`
  ADD CONSTRAINT `fk_MIEMBRO_CLUB1` FOREIGN KEY (`CLUB_CIF`) REFERENCES `club` (`CIF`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
