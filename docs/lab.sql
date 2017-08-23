-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2017 a las 03:35:19
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `codigo_analisis` int(11) NOT NULL,
  `analisis` varchar(100) NOT NULL,
  `nbu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`codigo_analisis`, `analisis`, `nbu`) VALUES
(660020, 'Kaseem S. Gross', 2),
(660021, 'Adrienne Z. Brock', 2),
(660022, 'Kristen J. Sparks', 5),
(660023, 'Megan T. Le', 1),
(660024, 'Damian A. Lara', 4),
(660025, 'Josephine A. Bailey', 4),
(660026, 'Tatyana M. Bruce', 2),
(660027, 'Sacha S. Newman', 3),
(660028, 'Lucius O. Bowen', 2),
(660029, 'Tanner P. Fletcher', 2),
(660030, 'Lillian I. Woods', 5),
(660031, 'Bree Y. Crawford', 2),
(660032, 'Nevada F. Hatfield', 1),
(660033, 'Jelani G. Baxter', 3),
(660034, 'Dustin U. Ramirez', 1),
(660035, 'Steel M. Lawson', 5),
(660036, 'Jolie V. Holder', 4),
(660037, 'Alika B. Vargas', 5),
(660038, 'Wylie H. Barlow', 4),
(660039, 'Beatrice P. Silva', 1),
(660040, 'Brian A. Hayden', 3),
(660041, 'Thor B. Burt', 3),
(660042, 'Edan C. Hayden', 3),
(660043, 'Raven C. Lowery', 1),
(660044, 'Sheila H. Buchanan', 3),
(660045, 'Amir S. Norman', 5),
(660046, 'Tallulah Z. Aguilar', 5),
(660047, 'Summer B. Travis', 2),
(660048, 'Elvis O. Brady', 2),
(660049, 'Shana M. Carver', 5),
(660050, 'Imelda R. Frye', 2),
(660051, 'Ann O. Knox', 3),
(660052, 'Skyler G. Cochran', 4),
(660053, 'Jasper N. Graham', 4),
(660054, 'Barbara C. Gates', 1),
(660055, 'Ashton Z. Rojas', 1),
(660056, 'Oprah P. Montoya', 3),
(660057, 'Tamara S. Evans', 3),
(660058, 'Rudyard K. Branch', 3),
(660059, 'Kathleen H. Atkins', 1),
(660060, 'Asher Y. York', 1),
(660061, 'Dominic N. Ferguson', 2),
(660062, 'Giacomo X. Atkins', 1),
(660063, 'Keane Q. Snow', 1),
(660064, 'Zelda X. Henderson', 3),
(660065, 'Kyra U. Abbott', 3),
(660066, 'Miriam G. Hoffman', 4),
(660067, 'Erich H. Grimes', 3),
(660068, 'Geraldine H. Whitley', 2),
(660069, 'Travis G. Case', 4),
(660070, 'Iris Q. Newton', 1),
(660071, 'Sheila M. Moon', 4),
(660072, 'Trevor V. Wilkerson', 4),
(660073, 'Honorato S. Fuller', 4),
(660074, 'Mona G. Solis', 1),
(660075, 'Dieter D. Chavez', 1),
(660076, 'Justin D. Jones', 5),
(660077, 'Ralph U. Craig', 4),
(660078, 'Cameran M. Knowles', 3),
(660079, 'Ursa F. Maldonado', 1),
(660080, 'Kato X. Wooten', 1),
(660081, 'Vanna R. Armstrong', 5),
(660082, 'Quamar S. Shelton', 5),
(660083, 'Kathleen B. Baker', 1),
(660084, 'Jada F. Reid', 3),
(660085, 'Reed S. Holloway', 3),
(660086, 'Ina O. Stafford', 1),
(660087, 'Nola D. Vinson', 4),
(660088, 'Pearl P. Harvey', 4),
(660089, 'Carlos X. Perkins', 1),
(660090, 'Raja O. Hayden', 5),
(660091, 'Dominique L. Barlow', 1),
(660092, 'Zena B. Phelps', 1),
(660093, 'Samantha B. Gregory', 1),
(660094, 'Naida V. Blackburn', 2),
(660095, 'Harding L. Welch', 5),
(660096, 'Alice U. Nielsen', 5),
(660097, 'Lisandra Z. Mcdaniel', 1),
(660098, 'Dustin M. Spencer', 2),
(660099, 'Indigo J. Cook', 2),
(660100, 'Bradley R. Thompson', 5),
(660101, 'India P. Shannon', 4),
(660102, 'Phyllis D. Wong', 2),
(660103, 'Olympia A. Campbell', 2),
(660104, 'Kameko Y. Jackson', 2),
(660105, 'Reece T. Miller', 3),
(660106, 'Ulric L. Hopkins', 3),
(660107, 'Hilary U. Roberts', 2),
(660108, 'Mariam J. Roberson', 1),
(660109, 'Tad H. Walsh', 2),
(660110, 'Alexa V. Blankenship', 4),
(660111, 'Tara M. Randall', 5),
(660112, 'Chandler J. White', 2),
(660113, 'Dean V. Pruitt', 3),
(660114, 'Channing J. Hogan', 5),
(660115, 'Yvette B. Hodge', 3),
(660116, 'Timon U. Schwartz', 4),
(660117, 'Macon W. Howell', 2),
(660118, 'Wayne S. Lloyd', 5),
(660119, 'Orli D. Lane', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_campos`
--

CREATE TABLE `analisis_campos` (
  `codigo_analisis` int(11) NOT NULL,
  `id_campo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `monto` float NOT NULL,
  `pagado` float NOT NULL DEFAULT '0',
  `concepto` varchar(256) NOT NULL,
  `id_tipo_caja` tinyint(4) NOT NULL,
  `id_usuario` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos`
--

CREATE TABLE `campos` (
  `id_campo` int(11) NOT NULL,
  `nombre_campo` varchar(64) NOT NULL,
  `unidad_medida` varchar(16) NOT NULL,
  `valore_referencia` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresados`
--

CREATE TABLE `ingresados` (
  `id_ingresado` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `codigo_analisis` int(11) NOT NULL,
  `autorizado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresados`
--

INSERT INTO `ingresados` (`id_ingresado`, `id_orden`, `codigo_analisis`, `autorizado`) VALUES
(5, 11, 660024, 0),
(6, 11, 660033, 1),
(7, 11, 660023, 0),
(8, 15, 660045, 0),
(9, 15, 660065, 0),
(10, 16, 660045, 0),
(11, 16, 660065, 0),
(12, 17, 660066, 0),
(13, 18, 660085, 1),
(14, 18, 660071, 0),
(15, 18, 660027, 1),
(16, 20, 660085, 1),
(17, 20, 660071, 0),
(18, 20, 660027, 1),
(19, 21, 660085, 1),
(20, 21, 660071, 0),
(21, 21, 660027, 1),
(22, 22, 660085, 1),
(23, 22, 660071, 0),
(24, 22, 660027, 1),
(25, 24, 660024, 0),
(26, 24, 660043, 0),
(27, 24, 660077, 0),
(28, 25, 660024, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresados_campos`
--

CREATE TABLE `ingresados_campos` (
  `id_ingresado` int(11) NOT NULL,
  `id_campo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` smallint(11) NOT NULL,
  `medico` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id_medico`, `medico`) VALUES
(1, 'Delilah'),
(2, 'Gage'),
(3, 'Omar'),
(4, 'Frances'),
(5, 'Quincy'),
(6, 'Lacey'),
(7, 'Shana'),
(8, 'August'),
(9, 'Tucker'),
(10, 'Barrett'),
(11, 'Hedwig'),
(12, 'Lev'),
(13, 'Knox'),
(14, 'Jaquelyn'),
(15, 'Richard'),
(16, 'Emerson'),
(17, 'Herman'),
(18, 'Dieter'),
(19, 'Molly'),
(20, 'Abra'),
(21, 'Knox'),
(22, 'Gabriel'),
(23, 'Maxine'),
(24, 'Elaine'),
(25, 'Wing'),
(26, 'Hope'),
(27, 'Prescott'),
(28, 'Patience'),
(29, 'Iris'),
(30, 'Jael'),
(31, 'Timon'),
(32, 'Shannon'),
(33, 'Yasir'),
(34, 'Honorato'),
(35, 'Madonna'),
(36, 'Jolie'),
(37, 'Ethan'),
(38, 'India'),
(39, 'Adara'),
(40, 'Mariam'),
(41, 'Charity'),
(42, 'Herrod'),
(43, 'Ishmael'),
(44, 'Hayes'),
(45, 'Travis'),
(46, 'Harlan'),
(47, 'Hadley'),
(48, 'Michael'),
(49, 'Chandler'),
(50, 'Holmes'),
(51, 'Aquila'),
(52, 'Dawn'),
(53, 'Kylee'),
(54, 'Oliver'),
(55, 'Connor'),
(56, 'Palmer'),
(57, 'Berk'),
(58, 'Cheryl'),
(59, 'Hillary'),
(60, 'Eve'),
(61, 'Boris'),
(62, 'Lynn'),
(63, 'Maisie'),
(64, 'Sharon'),
(65, 'Meredith'),
(66, 'Melodie'),
(67, 'George'),
(68, 'Noel'),
(69, 'Keely'),
(70, 'Hu'),
(71, 'Autumn'),
(72, 'Upton'),
(73, 'Dorothy'),
(74, 'Lynn'),
(75, 'Linus'),
(76, 'Ann'),
(77, 'Hu'),
(78, 'Camden'),
(79, 'Harper'),
(80, 'Rana'),
(81, 'Shaeleigh'),
(82, 'Blake'),
(83, 'Arthur'),
(84, 'Alma'),
(85, 'Calvin'),
(86, 'Neil'),
(87, 'Omar'),
(88, 'Jin'),
(89, 'Oprah'),
(90, 'Raphael'),
(91, 'Lewis'),
(92, 'Cedric'),
(93, 'Petra'),
(94, 'Elliott'),
(95, 'Nasim'),
(96, 'Linus'),
(97, 'Damon'),
(98, 'Wade'),
(99, 'Harper'),
(100, 'Jacqueline'),
(101, 'ariza'),
(102, 'PERALTA'),
(103, 'ARIZ'),
(104, 'marcelo'),
(105, 'oscar'),
(106, 'lllllllll'),
(107, 'Marina'),
(108, 'oscarion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_sociales`
--

CREATE TABLE `obras_sociales` (
  `id_obra_social` smallint(11) NOT NULL,
  `obra_social` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `obras_sociales`
--

INSERT INTO `obras_sociales` (`id_obra_social`, `obra_social`) VALUES
(1, 'PARTICULAR'),
(2, 'Mccall'),
(3, 'Gaines'),
(4, 'Compton'),
(5, 'Cervantes'),
(6, 'Pennington'),
(7, 'Aguirre'),
(8, 'Landry'),
(9, 'Moore'),
(10, 'Rice'),
(11, 'Spence'),
(12, 'Pollard'),
(13, 'Olson'),
(14, 'Camacho'),
(15, 'Cox'),
(16, 'Bush'),
(17, 'Palmer'),
(18, 'Harvey'),
(19, 'Parks'),
(20, 'Melendez'),
(21, 'Hogan'),
(22, 'Mcgee'),
(23, 'Stout'),
(24, 'Wiggins'),
(25, 'Austin'),
(26, 'Mullen'),
(27, 'Daniel'),
(28, 'Farley'),
(29, 'Combs'),
(30, 'Barrera'),
(31, 'Hoover'),
(32, 'Simmons'),
(33, 'Vazquez'),
(34, 'Gill'),
(35, 'Jimenez'),
(36, 'Christensen'),
(37, 'Haley'),
(38, 'Glover'),
(39, 'Dominguez'),
(40, 'Calderon'),
(41, 'Booth'),
(42, 'Pennington'),
(43, 'Caldwell'),
(44, 'Nolan'),
(45, 'Sweeney'),
(46, 'Cooley'),
(47, 'Buckley'),
(48, 'Macias'),
(49, 'Gilmore'),
(50, 'Romero'),
(51, 'Martin'),
(52, 'Gay'),
(53, 'Davenport'),
(54, 'Ochoa'),
(55, 'May'),
(56, 'Bryan'),
(57, 'Crawford'),
(58, 'Herman'),
(59, 'Morrison'),
(60, 'Pratt'),
(61, 'Hines'),
(62, 'Yang'),
(63, 'Guy'),
(64, 'Cote'),
(65, 'Ellis'),
(66, 'Horne'),
(67, 'Lee'),
(68, 'Camacho'),
(69, 'Mckenzie'),
(70, 'Arnold'),
(71, 'Mooney'),
(72, 'Gay'),
(73, 'Shepherd'),
(74, 'Robertson'),
(75, 'Maynard'),
(76, 'Barry'),
(77, 'Mcclure'),
(78, 'Ochoa'),
(79, 'Scott'),
(80, 'Robles'),
(81, 'Garza'),
(82, 'Bowman'),
(83, 'Molina'),
(84, 'Potts'),
(85, 'Owens'),
(86, 'Gutierrez'),
(87, 'Clark'),
(88, 'Brown'),
(89, 'Randall'),
(90, 'Key'),
(91, 'Ewing'),
(92, 'Lindsay'),
(93, 'Lott'),
(94, 'Castaneda'),
(95, 'Frost'),
(96, 'Joyner'),
(97, 'Ochoa'),
(98, 'Beach'),
(99, 'Sears'),
(100, 'Schultz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int(20) NOT NULL,
  `protocolo` bigint(20) NOT NULL,
  `nombre_paciente` varchar(64) NOT NULL,
  `apellido_paciente` varchar(64) NOT NULL,
  `numero_orden` varchar(32) NOT NULL,
  `numero_afiliado` varchar(32) NOT NULL,
  `fecha` date NOT NULL,
  `id_obra_social` smallint(6) NOT NULL,
  `id_medico` smallint(6) NOT NULL,
  `id_usuario` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id_orden`, `protocolo`, `nombre_paciente`, `apellido_paciente`, `numero_orden`, `numero_afiliado`, `fecha`, `id_obra_social`, `id_medico`, `id_usuario`) VALUES
(1, 650, 'samuel', 'benitez', '54665', '74694', '2017-08-02', 1, 4, 1),
(11, 653, 'test', 'testing', '11111111', '2222222', '2017-08-22', 1, 28, 1),
(15, 654, 'lucia', 'luciani', '4654', '45646', '2017-08-23', 95, 104, 1),
(16, 655, 'lucia', 'luciani', '4654', '45646', '2017-08-23', 95, 104, 1),
(17, 656, 'mark', 'zruker', '', '', '2017-08-23', 83, 105, 1),
(18, 657, 'test ', 'completo', '546', '456', '2017-08-23', 1, 1, 1),
(20, 658, 'test ', 'completo', '546', '456', '2017-08-23', 1, 1, 1),
(21, 659, 'test caja 0', 'completo', '546', '456', '2017-08-23', 1, 1, 1),
(22, 660, 'test caja 0', 'completo', '546', '456', '2017-08-23', 1, 1, 1),
(24, 661, 'Muaricio', 'Gil', '5646', '464564', '2017-08-23', 95, 107, 1),
(25, 662, 'marcelo', 'piñeda', '4646', '56464', '2017-08-23', 38, 108, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_caja`
--

CREATE TABLE `tipo_caja` (
  `id_tipo_caja` tinyint(4) NOT NULL,
  `tipo_caja` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_caja`
--

INSERT INTO `tipo_caja` (`id_tipo_caja`, `tipo_caja`) VALUES
(1, 'ENTRADA DE DINER'),
(2, 'SALIDA DE DINERO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id_tipo_usuario` tinyint(4) NOT NULL,
  `tipo_usuario` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'EMPLEADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` tinyint(11) NOT NULL,
  `usuario` varchar(24) NOT NULL,
  `contrasena` varchar(256) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `apellido` varchar(16) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `token` varchar(256) NOT NULL,
  `ayuda` tinyint(1) NOT NULL DEFAULT '1',
  `id_tipo_usuario` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`, `nombre`, `apellido`, `mail`, `token`, `ayuda`, `id_tipo_usuario`) VALUES
(1, 'sambenzt', '123456', 'Sam', 'Benzt', 'sam@mail.com', '', 1, 1),
(3, 'samira', '123456', 'samira', 'Benzeti', 'pepe@mail.com.ar', '', 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`codigo_analisis`);

--
-- Indices de la tabla `analisis_campos`
--
ALTER TABLE `analisis_campos`
  ADD KEY `codigo_analisis` (`codigo_analisis`),
  ADD KEY `id_campo` (`id_campo`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`),
  ADD KEY `id_tipo_caja` (`id_tipo_caja`),
  ADD KEY `id_usu` (`id_usuario`);

--
-- Indices de la tabla `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id_campo`);

--
-- Indices de la tabla `ingresados`
--
ALTER TABLE `ingresados`
  ADD PRIMARY KEY (`id_ingresado`),
  ADD KEY `id_orden` (`id_orden`),
  ADD KEY `codigo_analisis` (`codigo_analisis`);

--
-- Indices de la tabla `ingresados_campos`
--
ALTER TABLE `ingresados_campos`
  ADD KEY `id_ingresado` (`id_ingresado`),
  ADD KEY `id_campo` (`id_campo`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `obras_sociales`
--
ALTER TABLE `obras_sociales`
  ADD PRIMARY KEY (`id_obra_social`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`),
  ADD UNIQUE KEY `n_protocolo` (`protocolo`),
  ADD KEY `id_obra_social` (`id_obra_social`),
  ADD KEY `id_medico` (`id_medico`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipo_caja`
--
ALTER TABLE `tipo_caja`
  ADD PRIMARY KEY (`id_tipo_caja`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `campos`
--
ALTER TABLE `campos`
  MODIFY `id_campo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ingresados`
--
ALTER TABLE `ingresados`
  MODIFY `id_ingresado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT de la tabla `obras_sociales`
--
ALTER TABLE `obras_sociales`
  MODIFY `id_obra_social` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_orden` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `tipo_caja`
--
ALTER TABLE `tipo_caja`
  MODIFY `id_tipo_caja` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id_tipo_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis_campos`
--
ALTER TABLE `analisis_campos`
  ADD CONSTRAINT `analisis_campos_ibfk_1` FOREIGN KEY (`codigo_analisis`) REFERENCES `analisis` (`codigo_analisis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisis_campos_ibfk_2` FOREIGN KEY (`id_campo`) REFERENCES `campos` (`id_campo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `caja`
--
ALTER TABLE `caja`
  ADD CONSTRAINT `caja_ibfk_1` FOREIGN KEY (`id_tipo_caja`) REFERENCES `tipo_caja` (`id_tipo_caja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caja_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingresados`
--
ALTER TABLE `ingresados`
  ADD CONSTRAINT `ingresados_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id_orden`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresados_ibfk_2` FOREIGN KEY (`codigo_analisis`) REFERENCES `analisis` (`codigo_analisis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingresados_campos`
--
ALTER TABLE `ingresados_campos`
  ADD CONSTRAINT `ingresados_campos_ibfk_1` FOREIGN KEY (`id_ingresado`) REFERENCES `ingresados` (`id_ingresado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresados_campos_ibfk_2` FOREIGN KEY (`id_campo`) REFERENCES `campos` (`id_campo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `ordenes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordenes_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordenes_ibfk_3` FOREIGN KEY (`id_obra_social`) REFERENCES `obras_sociales` (`id_obra_social`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuarios` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
