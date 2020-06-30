-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 22:12:26
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `Area` varchar(70) NOT NULL,
  `Descripcion` varchar(500) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `costo` float NOT NULL,
  `ruta_imagen` varchar(120) DEFAULT NULL,
  `estado_actual` varchar(70) NOT NULL,
  `propietario` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `nombre`, `Area`, `Descripcion`, `costo`, `ruta_imagen`, `estado_actual`, `propietario`, `status`) VALUES
(12, 'Divina comedia', 'Otros', 'la Divina comedia Fue una poesÃ­a escrita por Dante Alighieri en lenguaje italiana. Nos muestra una visiÃ³n de la realidad y estado de las almas despuÃ©s de la muerte en las tres zonas ultraterrenas: infierno, purgatorio y paraÃ­so', 3000, 'libros/41Un2vOF1yL._SX309_BO1,204,203,200_.jpg', 'Impecable', 1, 0),
(13, 'El conde de montecristo', 'Otros', 'Una venganza de amor ', 456, 'libros/libro-13.jpg', 'Regular', 1, 0),
(15, 'it', 'Otros', 'Varios niÃ±os de una pequeÃ±a ciudad del estado de Maine se alÃ­an para combatir a una entidad diabÃ³lica que adopta la forma de un payaso y desde hace mucho tiempo emerge cada 27 aÃ±os para saciarse de sangre infantil.', 856, 'libros/libro-15.jpg', 'Maltratado', 2, 1),
(18, 'Harrison: Principios de medicina interna.', 'Otros', 'es un libro de texto estadounidense de medicina interna. Publicado por primera vez en 1950,', 2000, 'libros/libro-18.jpg', 'Impecable', 2, 0),
(20, 'Baldor ', 'Matematicas', 'Ejercicios de matematicas para estudiantes desde prepa hasta universidad', 150, 'libros/libro-20.jpg', 'Impecable', 2, 0),
(21, 'Fisica, Conceptos Y Aplicaciones', 'Fisica', 'Ejercicios de fisica, te puede servir si eres de semestre ya que los de cuatri no llevamos fisica ', 200, 'libros/libro-21.jpg', 'Impecable', 2, 0),
(28, 'El guardian entre el centeno', 'Otros', 'La novela cuenta la historia de Holden Caulfield, un joven neoyorquino de 16 aÃ±os que acaba de ser expulsado de Pencey Prep, su escuela preparatoria. EstÃ¡ narrada en la voz de Holden, un joven que se ha caracterizado por tener malos resultados en sus estudios', 200, 'libros/guardian.jpeg', 'Impecable', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `matricula` varchar(9) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `apellidoP` varchar(80) NOT NULL,
  `apellidoM` varchar(80) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `segundoNombre` varchar(80) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `matricula`, `carrera`, `apellidoP`, `apellidoM`, `nombre`, `segundoNombre`, `telefono`, `email`, `password`) VALUES
(1, '201528030', 'Ingenieria en ciencias de la computacion', 'Luna', 'Hernandez', 'Jose', 'Luis', '2221989689', 'louislunahz@gmail.com', '123456'),
(2, '201505939', 'Ingenieria en ciencias de la computacion', 'Zamora', 'Ogarrio', 'Jorge', 'Luis', '2223568974', 'jorgeluza@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
