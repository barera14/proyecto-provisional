-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2017 a las 00:51:03
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificadoss`
--

CREATE TABLE `certificadoss` (
  `idCertificados` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Dependencia` varchar(45) NOT NULL,
  `N_Acta` int(11) NOT NULL,
  `FechaHora_Recibido` date NOT NULL,
  `Empresa` varchar(45) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL,
  `Contrato` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contatos_publicos`
--

CREATE TABLE `contatos_publicos` (
  `idContatos_Publicos` int(11) NOT NULL,
  `Tipo_Proceso` varchar(45) NOT NULL,
  `Estado` enum('Cancelado','En ejecucion','Liquidado') NOT NULL,
  `RC` varchar(45) NOT NULL,
  `Descripcion_Objeto_Contratar` varchar(45) NOT NULL,
  `Cuantia` varchar(45) NOT NULL,
  `Tipo_Contrato` varchar(45) NOT NULL,
  `departamento_Ejecucion` varchar(45) NOT NULL,
  `municipio_ejecucion` varchar(45) NOT NULL,
  `Departamento_Obtenciondocumentos` varchar(45) NOT NULL,
  `Municipio_Obtencion_Documentos` varchar(45) NOT NULL,
  `Direccion_Entrega_Documentos` varchar(45) NOT NULL,
  `Fecha_Hora_Apertura_Proceso` varchar(45) NOT NULL,
  `idPersona` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contatos_publicos`
--

INSERT INTO `contatos_publicos` (`idContatos_Publicos`, `Tipo_Proceso`, `Estado`, `RC`, `Descripcion_Objeto_Contratar`, `Cuantia`, `Tipo_Contrato`, `departamento_Ejecucion`, `municipio_ejecucion`, `Departamento_Obtenciondocumentos`, `Municipio_Obtencion_Documentos`, `Direccion_Entrega_Documentos`, `Fecha_Hora_Apertura_Proceso`, `idPersona`) VALUES
(12000, 'ERYGSDGS', 'En ejecucion', '178993', 'DHHDFKHEWHF', '636829', 'TATIANA', 'boyaca', 'sogamoso', 'sogamoso', 'archivos', 'sogamoso', '12', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Version` varchar(45) NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `idContatos_Publicos` int(11) DEFAULT NULL,
  `idEmpresas` int(11) DEFAULT NULL,
  `idLiquidacion_Contrato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `idEmpresas` int(11) NOT NULL,
  `Razonsocial_contratista` varchar(45) NOT NULL,
  `Identificacion_Contatista` varchar(45) NOT NULL,
  `Pais_Contatrista` varchar(45) NOT NULL,
  `Departamento_Contatista` varchar(45) NOT NULL,
  `Provincia_Contratista` varchar(45) NOT NULL,
  `Direccion_Contratista` varchar(45) NOT NULL,
  `Representante_Contaratista` varchar(45) NOT NULL,
  `Identificacion_Representante` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `idPersona` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`idEmpresas`, `Razonsocial_contratista`, `Identificacion_Contatista`, `Pais_Contatrista`, `Departamento_Contatista`, `Provincia_Contratista`, `Direccion_Contratista`, `Representante_Contaratista`, `Identificacion_Representante`, `Estado`, `idPersona`) VALUES
(1, 'Utempo', '12312', 'Colombia', 'Casanare', 'Aguazul', 'calle', 'marly', '213', 'Activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrgables`
--

CREATE TABLE `entrgables` (
  `idEntregables` int(11) NOT NULL,
  `Entregables_Actividad` varchar(45) NOT NULL,
  `Fecha_Cumplimiento` varchar(45) NOT NULL,
  `Fecha_Entrega` varchar(45) NOT NULL,
  `Porcentaje_Entregable` smallint(6) NOT NULL,
  `Contrato` int(11) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrgables`
--

INSERT INTO `entrgables` (`idEntregables`, `Entregables_Actividad`, `Fecha_Cumplimiento`, `Fecha_Entrega`, `Porcentaje_Entregable`, `Contrato`, `Estado`) VALUES
(1, '65655', '2017-07-11', '2017-07-19', 12, 12000, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licitacion`
--

CREATE TABLE `licitacion` (
  `idLicitacion` int(11) NOT NULL,
  `Fecha_firma_contrato` date NOT NULL,
  `Ejecucion_Contrato` date NOT NULL,
  `Plazo_Ejecucion_Contrato` date NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL,
  `idPersona` int(10) UNSIGNED DEFAULT NULL,
  `idEmpresas` int(11) DEFAULT NULL,
  `idContratos_Publicos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `licitacion`
--

INSERT INTO `licitacion` (`idLicitacion`, `Fecha_firma_contrato`, `Ejecucion_Contrato`, `Plazo_Ejecucion_Contrato`, `Calificacion`, `Estado`, `idPersona`, `idEmpresas`, `idContratos_Publicos`) VALUES
(1, '2017-07-19', '2017-07-21', '2017-07-12', 12, 'Activo', 2, 1, 12000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(10) UNSIGNED NOT NULL,
  `Tipo_Documento` enum('C.C','T.I','R.C','C.E','Otros') NOT NULL,
  `Documento` bigint(20) UNSIGNED NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Genero` enum('Masculino','Femenino') NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telefono` bigint(20) UNSIGNED NOT NULL,
  `Direccion` varchar(60) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Contrato_PDF` varchar(200) DEFAULT NULL,
  `NRP` int(10) UNSIGNED DEFAULT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL,
  `Cargo` varchar(45) NOT NULL,
  `idSecretarias` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `Tipo_Documento`, `Documento`, `Foto`, `Fecha_Nacimiento`, `Genero`, `Nombres`, `Apellidos`, `Telefono`, `Direccion`, `Correo`, `Contrato_PDF`, `NRP`, `Usuario`, `Contrasena`, `Estado`, `Cargo`, `idSecretarias`) VALUES
(2, 'C.C', 1057601288, '', '1996-08-02', 'Femenino', 'tatiana', 'torres', 123123, 'sogamoso', 'tatiana@gmail.com', NULL, 123, 'tatiana', '123', 'Activo', 'Administrador', NULL),
(3, 'C.C', 1057601288, '', '1996-08-02', 'Femenino', 'tatiana', 'torres', 32227224457, 'sogamoso', 'tatiana@gmail.com', 'hgwdsgjdjhg', 8790, 'tatiana', '123', 'Activo', 'general', NULL),
(4, 'C.C', 8137601288, '', '1998-10-17', 'Femenino', 'natalia', 'benavides', 3102166024, 'paipa', 'natalia@gmail.com', 'hduhduhif', 12312, 'natalia', '123', 'Activo', 'subgeneral', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_actas`
--

CREATE TABLE `registro_actas` (
  `idRegistro_Actas` int(10) UNSIGNED NOT NULL,
  `Fecha_Hora` datetime NOT NULL,
  `Lugar_Reunion` varchar(45) NOT NULL,
  `Lista_Asistencia` varchar(45) NOT NULL,
  `Puntos_Tratados` varchar(45) NOT NULL,
  `Acuerdos_Tomados` varchar(45) NOT NULL,
  `Observaciones` varchar(45) NOT NULL,
  `Direccion_Reunion` varchar(45) NOT NULL,
  `idPersona` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretarias`
--

CREATE TABLE `secretarias` (
  `idSecretarias` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Vision` text NOT NULL,
  `Mision` text NOT NULL,
  `Objetivos` text NOT NULL,
  `Telefono` bigint(20) NOT NULL,
  `Direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificadoss`
--
ALTER TABLE `certificadoss`
  ADD PRIMARY KEY (`idCertificados`);

--
-- Indices de la tabla `contatos_publicos`
--
ALTER TABLE `contatos_publicos`
  ADD PRIMARY KEY (`idContatos_Publicos`),
  ADD KEY `fk_Contatos_Publicos_Persona1_idx` (`idPersona`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`idDocumentos`),
  ADD KEY `fk_Documentos_Contatos_Publicos1_idx` (`idContatos_Publicos`),
  ADD KEY `fk_Documentos_Empresas1_idx` (`idEmpresas`),
  ADD KEY `fk_Documentos_Liquidacion_Contrato1_idx` (`idLiquidacion_Contrato`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idEmpresas`),
  ADD KEY `fk_Empresas_Persona1_idx` (`idPersona`);

--
-- Indices de la tabla `entrgables`
--
ALTER TABLE `entrgables`
  ADD PRIMARY KEY (`idEntregables`);

--
-- Indices de la tabla `licitacion`
--
ALTER TABLE `licitacion`
  ADD PRIMARY KEY (`idLicitacion`),
  ADD KEY `fk_Liquidacion_Contrato_Persona1_idx` (`idPersona`),
  ADD KEY `fk_Licitacion_Empresas1_idx` (`idEmpresas`),
  ADD KEY `fk_Licitacion_Contatos_Publicos1_idx` (`idContratos_Publicos`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD UNIQUE KEY `idPersona_UNIQUE` (`idPersona`),
  ADD KEY `fk_Persona_Secretarias1_idx` (`idSecretarias`);

--
-- Indices de la tabla `registro_actas`
--
ALTER TABLE `registro_actas`
  ADD PRIMARY KEY (`idRegistro_Actas`),
  ADD KEY `fk_Registro_Actas_Persona1_idx` (`idPersona`);

--
-- Indices de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  ADD PRIMARY KEY (`idSecretarias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificadoss`
--
ALTER TABLE `certificadoss`
  MODIFY `idCertificados` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contatos_publicos`
--
ALTER TABLE `contatos_publicos`
  MODIFY `idContatos_Publicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12001;
--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `idDocumentos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idEmpresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entrgables`
--
ALTER TABLE `entrgables`
  MODIFY `idEntregables` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `licitacion`
--
ALTER TABLE `licitacion`
  MODIFY `idLicitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `registro_actas`
--
ALTER TABLE `registro_actas`
  MODIFY `idRegistro_Actas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  MODIFY `idSecretarias` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contatos_publicos`
--
ALTER TABLE `contatos_publicos`
  ADD CONSTRAINT `fk_Contatos_Publicos_Persona1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_Documentos_Contatos_Publicos1` FOREIGN KEY (`idContatos_Publicos`) REFERENCES `contatos_publicos` (`idContatos_Publicos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Documentos_Empresas1` FOREIGN KEY (`idEmpresas`) REFERENCES `empresas` (`idEmpresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Documentos_Liquidacion_Contrato1` FOREIGN KEY (`idLiquidacion_Contrato`) REFERENCES `licitacion` (`idLicitacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_Empresas_Persona1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `licitacion`
--
ALTER TABLE `licitacion`
  ADD CONSTRAINT `fk_Licitacion_Contatos_Publicos1` FOREIGN KEY (`idContratos_Publicos`) REFERENCES `contatos_publicos` (`idContatos_Publicos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Licitacion_Empresas1` FOREIGN KEY (`idEmpresas`) REFERENCES `empresas` (`idEmpresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Liquidacion_Contrato_Persona1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_Persona_Secretarias1` FOREIGN KEY (`idSecretarias`) REFERENCES `secretarias` (`idSecretarias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_actas`
--
ALTER TABLE `registro_actas`
  ADD CONSTRAINT `fk_Registro_Actas_Persona1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
