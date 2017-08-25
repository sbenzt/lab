-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2017 a las 04:52:37
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

--
-- Volcado de datos para la tabla `analisis_campos`
--

INSERT INTO `analisis_campos` (`codigo_analisis`, `id_campo`) VALUES
(660111, 55),
(660053, 16),
(660089, 45),
(660114, 72),
(660058, 76),
(660114, 5),
(660023, 15),
(660035, 53),
(660036, 77),
(660091, 75),
(660104, 32),
(660049, 29),
(660022, 1),
(660032, 77),
(660036, 62),
(660035, 61),
(660110, 33),
(660115, 69),
(660116, 80),
(660075, 4),
(660036, 63),
(660085, 15),
(660093, 67),
(660080, 36),
(660089, 56),
(660052, 5),
(660027, 31),
(660070, 8),
(660070, 40),
(660033, 55),
(660029, 11),
(660100, 19),
(660117, 72),
(660035, 46),
(660106, 75),
(660119, 33),
(660037, 55),
(660097, 32),
(660035, 76),
(660100, 13),
(660087, 42),
(660054, 1),
(660050, 51),
(660052, 41),
(660104, 11),
(660040, 20),
(660091, 29),
(660051, 69),
(660025, 54),
(660085, 70),
(660041, 38),
(660078, 31),
(660067, 52),
(660056, 70),
(660072, 68),
(660033, 22),
(660111, 66),
(660024, 70),
(660024, 72),
(660024, 11);

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

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id_caja`, `fecha`, `monto`, `pagado`, `concepto`, `id_tipo_caja`, `id_usuario`) VALUES
(1, '2017-08-23 14:52:43', 8, 8, 'Orden ingresada - Protocolo : 662', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos`
--

CREATE TABLE `campos` (
  `id_campo` int(11) NOT NULL,
  `nombre_campo` varchar(64) NOT NULL,
  `valor_referencia` varchar(16) NOT NULL,
  `unidad_medida` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campos`
--

INSERT INTO `campos` (`id_campo`, `nombre_campo`, `valor_referencia`, `unidad_medida`) VALUES
(1, 'Megan', '28627', 'A6U 6K8'),
(2, 'Rosalyn', '25306', 'G1D 3P4'),
(3, 'Michelle', '90891', 'K4E 2W5'),
(4, 'Kyra', '22690', 'E2J 3S3'),
(5, 'Martha', '07756', 'F2L 8V0'),
(6, 'Caryn', '77507', 'U1F 5C1'),
(7, 'Carla', '99278', 'B5S 7K4'),
(8, 'Lacey', '15870', 'Z1J 7O9'),
(9, 'Yeo', '90459', 'L3U 1E1'),
(10, 'Macy', '44130', 'X3U 4F2'),
(11, 'Ainsley', '04947', 'Y9V 1J0'),
(12, 'Renee', '07435', 'Y6W 4A5'),
(13, 'Roanna', '16599', 'T9X 2S8'),
(14, 'Taylor', '25996', 'H9Q 2W8'),
(15, 'Jillian', '84503', 'I2Y 0B0'),
(16, 'Madeson', '58629', 'I9X 1U6'),
(17, 'Cherokee', '76981', 'D0K 8Z3'),
(18, 'Amelia', '13574', 'K9K 8P8'),
(19, 'Rowan', '89534', 'Y4A 9L9'),
(20, 'Katelyn', '09870', 'V7W 7S4'),
(21, 'Shoshana', '92760', 'N1K 4I9'),
(22, 'Susan', '22579', 'O7A 0P8'),
(23, 'Mallory', '81298', 'E7Y 6V0'),
(24, 'Quon', '93103', 'P8C 1E2'),
(25, 'Ruth', '01483', 'E1H 5H0'),
(26, 'Raya', '41191', 'U2L 8P5'),
(27, 'Linda', '90581', 'A1F 9U4'),
(28, 'Orli', '24327', 'A8Z 4B5'),
(29, 'Portia', '50193', 'T4G 2Q2'),
(30, 'Paula', '88274', 'Q7A 2Q2'),
(31, 'Roanna', '58259', 'I8E 2O5'),
(32, 'Nicole', '35369', 'T9U 0E1'),
(33, 'Margaret', '86305', 'Q5D 6T6'),
(34, 'Jenna', '37994', 'S7U 0A1'),
(35, 'Lael', '26724', 'N9X 5I7'),
(36, 'Lydia', '03894', 'Q6T 1O6'),
(37, 'Brenna', '05027', 'Q1O 6S5'),
(38, 'Ingrid', '80555', 'F5S 5R6'),
(39, 'Shelley', '77315', 'F6V 7W7'),
(40, 'Athena', '51870', 'M2X 9V8'),
(41, 'Hyacinth', '21070', 'C9Y 4C7'),
(42, 'Xandra', '93179', 'D9F 9C1'),
(43, 'Leilani', '91920', 'M2D 7I0'),
(44, 'Karleigh', '91883', 'T7E 5R4'),
(45, 'Cassady', '32679', 'W3R 4K5'),
(46, 'Gretchen', '83351', 'F0J 7S6'),
(47, 'Ivy', '33794', 'O2D 4A8'),
(49, 'Brooke', '24785', 'T6R 2C0'),
(50, 'Wynne', '94651', 'O4L 9Y6'),
(51, 'Angela', '20751', 'G8A 2O5'),
(52, 'Sharon', '70812', 'O1E 1O7'),
(53, 'Sylvia', '38572', 'X5L 5G7'),
(54, 'Whitney', '37451', 'J1O 4T9'),
(55, 'Nita', '58498', 'P6O 6S6'),
(56, 'Leandra', '93794', 'Q9A 2N5'),
(57, 'Yuri', '09213', 'D3S 4E5'),
(58, 'Marny', '03422', 'Q2B 5W0'),
(59, 'Winter', '38194', 'E1A 5P6'),
(60, 'Jayme', '75284', 'T9L 1E1'),
(61, 'Lael', '63337', 'S8T 0P5'),
(62, 'Remedios', '04766', 'L5Y 0S5'),
(63, 'Danielle', '91536', 'C8B 7I1'),
(64, 'Leah', '76566', 'G5F 7Y4'),
(65, 'Ori', '87928', 'E1T 7Y3'),
(66, 'TaShya', '95430', 'Q6F 9O3'),
(67, 'Hanna', '54114', 'F9P 1Y6'),
(68, 'Alexa', '12381', 'S3W 3Z2'),
(69, 'Kimberly', '77012', 'A2C 1W8'),
(70, 'Adena', '28082', 'U8S 8Z6'),
(71, 'Celeste', '89339', 'C1Y 8N6'),
(72, 'Ainsley', '98993', 'P2E 1G4'),
(73, 'Sophia', '22279', 'U9B 7R9'),
(74, 'Roanna', '72187', 'J5A 0W4'),
(75, 'Bo', '35636', 'Y2X 7I1'),
(76, 'Briar', '02507', 'N2J 2S1'),
(77, 'Maisie', '94071', 'G2S 0X1'),
(78, 'Fay', '70688', 'H5P 1I0'),
(79, 'Holly', '88200', 'Q6A 9D6'),
(80, 'Whoopi', '11294', 'F5G 2H7'),
(81, 'Indira', '05933', 'F0C 3C4'),
(82, 'May', '88934', 'I9H 0A2'),
(83, 'Courtney', '95677', 'J0Q 0I2'),
(84, 'Emerald', '91839', 'Z7D 7H1'),
(85, 'Cameran', '86187', 'Q1N 3R2'),
(86, 'Martina', '88878', 'M7T 3I9'),
(87, 'Pascale', '71845', 'F2F 1A1'),
(88, 'Jamalia', '93190', 'V6F 5Z4'),
(89, 'Dahlia', '49002', 'T8G 2J1'),
(90, 'Kylynn', '41365', 'N1D 6A5'),
(91, 'Francesca', '24865', 'C2A 9S4'),
(92, 'Eugenia', '83699', 'U9I 2A1'),
(93, 'Latifah', '48409', 'P7Z 6K5'),
(94, 'Nell', '35379', 'T3L 1D2'),
(95, 'Kyra', '16262', 'V3M 2H3'),
(96, 'Petra', '66902', 'V4E 3H9'),
(97, 'Michelle', '92475', 'M1V 2I2'),
(98, 'Guinevere', '86359', 'I6B 5F9'),
(99, 'Anika', '45648', 'X4V 0H2'),
(100, 'Ila', '32413', 'Y3H 2Y4');

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
(23, 22, 660071, 0),
(25, 24, 660024, 0),
(26, 24, 660111, 0),
(28, 25, 660033, 1),
(29, 25, 660030, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresados_campos`
--

CREATE TABLE `ingresados_campos` (
  `id_ingresado` int(11) NOT NULL,
  `id_campo` int(11) NOT NULL,
  `valor_obtenido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresados_campos`
--

INSERT INTO `ingresados_campos` (`id_ingresado`, `id_campo`, `valor_obtenido`) VALUES
(26, 55, 'test1'),
(26, 66, 'test2'),
(28, 66, ''),
(25, 70, 'campo1'),
(25, 72, 'campo2'),
(25, 11, 'campo3');

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
(24, 661, 'Muaricio', 'Gil', '5646', '464564', '2017-08-24', 95, 107, 1),
(25, 662, 'sam', 'testin', '4544', '6666', '2017-08-23', 1, 40, 1);

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
  MODIFY `id_caja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `campos`
--
ALTER TABLE `campos`
  MODIFY `id_campo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT de la tabla `ingresados`
--
ALTER TABLE `ingresados`
  MODIFY `id_ingresado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
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
