-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Abr-2022 às 14:03
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `idcadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nomecadastro` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `img` varchar(200) NOT NULL,
  `statuscadastro` int(11) DEFAULT '1',
  `responsavel` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idcadastro`),
  KEY `cadastro_ibfk_1` (`responsavel`),
  KEY `cadastro_ibfk_2` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idcadastro`, `nomecadastro`, `email`, `img`, `statuscadastro`, `responsavel`, `tipo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Steve', 'fulanito@gmail.com', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 8, 30, '2022-04-28 14:30:12', '2022-04-29 09:33:56', '2022-04-29 09:33:56'),
(2, 'fulanito2', 'fulanito2@gmail.com', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 2, 30, '2022-04-28 14:30:03', '2022-04-29 09:34:00', '2022-04-29 09:34:00'),
(7, 'Steve Gates', 'Gates@facebook.com', '', 1, 2, 31, '2022-04-28 14:28:37', '2022-04-29 10:45:00', NULL),
(8, 'Steve Gates ', 'Gates@facebook.com', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 1, 30, '2022-04-28 14:28:37', '2022-04-29 10:42:02', NULL),
(12, 'fogo2', 'fogo@gmail.com2', '', 0, 3, 30, '2022-04-29 08:21:28', '2022-04-29 10:16:58', NULL),
(19, 'foguinho', 'foguinho@gmail.com', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 2, 33, '2022-04-29 08:39:19', '2022-04-29 10:45:04', NULL),
(21, 'agua', 'agua@gmail.com', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 8, 31, '2022-04-29 09:05:42', '2022-04-29 09:05:42', '2022-04-29 09:19:20'),
(22, 'aguinha', 'aguinha@gmail.com', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 1, 33, '2022-04-29 09:09:21', '2022-04-29 09:09:21', '2022-04-29 09:19:17'),
(23, 'aguinha2', 'aguinha@gmail.com2', '1651230579_84d1729d3bbc9df2aed6.jpg', 1, 3, 35, '2022-04-29 09:10:06', '2022-04-29 09:10:06', '2022-04-29 09:19:14'),
(25, 'testando1', 'teste@gmail.com1', '', 0, 8, 36, '2022-04-29 09:19:48', '2022-04-29 10:56:34', NULL),
(26, 'draco', 'draco@gmail.com', '', 0, 3, 36, '2022-04-29 09:24:49', '2022-04-29 10:56:45', NULL),
(27, 'alguém', 'alguém@gmail.com', '1651239201_68bc26dbc04c78b12c34.jpg', 1, 2, 34, '2022-04-29 10:33:21', '2022-04-29 10:33:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

DROP TABLE IF EXISTS `responsavel`;
CREATE TABLE IF NOT EXISTS `responsavel` (
  `idresponsavel` int(11) NOT NULL AUTO_INCREMENT,
  `nomeresponsavel` varchar(45) NOT NULL,
  `origemresponsavel` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idresponsavel`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`idresponsavel`, `nomeresponsavel`, `origemresponsavel`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Larry Página', 'Google', '2022-04-28 10:32:04', '2022-04-29 10:36:18', NULL),
(2, 'Jeff dos beijos', 'Amazon', '2022-04-28 10:32:14', '2022-04-29 10:35:51', NULL),
(3, 'João Furner', 'Walmart', '2022-04-28 10:32:17', '2022-04-29 10:36:35', NULL),
(4, 'Bill Portões', 'Microsoft', '2022-04-28 10:32:21', '2022-04-28 10:59:18', NULL),
(8, 'Fu Lano', 'Extra', '2022-04-28 10:54:06', '2022-04-28 10:58:42', NULL),
(9, 'Steve Trabalhos', 'Maçã', '2022-04-28 10:59:36', '2022-04-28 10:59:36', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `nometipo` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`idtipo`, `nometipo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'eae34', '2022-04-28 10:03:21', '2022-04-28 10:11:53', '2022-04-28 09:57:32'),
(2, 'eae34', '2022-04-28 10:03:27', '2022-04-28 10:11:53', '2022-04-28 09:57:30'),
(30, 'fogo', '2022-04-28 10:14:29', '2022-04-28 10:16:15', NULL),
(31, 'agua', '2022-04-28 10:14:35', '2022-04-28 10:16:19', NULL),
(32, 'eae2', '2022-04-28 10:14:37', '2022-04-28 10:14:49', '2022-04-28 10:14:49'),
(33, 'dragão', '2022-04-28 10:16:23', '2022-04-28 10:20:49', NULL),
(34, 'fada', '2022-04-28 10:16:25', '2022-04-28 10:16:25', NULL),
(35, 'sombroso', '2022-04-28 10:16:35', '2022-04-28 10:16:35', NULL),
(36, 'terra', '2022-04-29 09:12:45', '2022-04-29 09:12:45', NULL),
(37, 'lutador', '2022-04-29 09:13:18', '2022-04-29 09:13:18', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `senha`) VALUES
(4, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'adm', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'TheQuestion', '022de2741446809466d2a95e21615706');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`responsavel`) REFERENCES `responsavel` (`idresponsavel`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cadastro_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`idtipo`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
