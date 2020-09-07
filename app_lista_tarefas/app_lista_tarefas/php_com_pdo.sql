-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Set-2020 às 15:00
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_com_pdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

DROP TABLE IF EXISTS `tb_status`;
CREATE TABLE IF NOT EXISTS `tb_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`id`, `status`) VALUES
(1, 'pendente'),
(2, 'realizado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tarefas`
--

DROP TABLE IF EXISTS `tb_tarefas`;
CREATE TABLE IF NOT EXISTS `tb_tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `tarefa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastrado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_status` (`id_status`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_tarefas`
--

INSERT INTO `tb_tarefas` (`id`, `id_status`, `tarefa`, `data_cadastrado`) VALUES
(43, 1, 'Pagar boleto da faculdade', '2020-09-03 09:57:25'),
(35, 1, 'Estudar Bootstrap (depois de PHP)', '2020-06-18 16:05:14'),
(36, 1, 'Estudar PHP Orientado a objetos', '2020-06-18 16:05:55'),
(37, 1, 'Estudar javascript', '2020-06-18 16:06:02'),
(38, 2, 'tteste', '2020-06-19 13:02:36'),
(39, 1, 'asdadas', '2020-09-03 09:55:23'),
(40, 1, 'asdadas', '2020-09-03 09:55:36'),
(41, 1, 'asdadas', '2020-09-03 09:55:59'),
(42, 1, 'asdadas', '2020-09-03 09:57:13'),
(44, 1, ':tarefa', '2020-09-03 09:57:39'),
(45, 1, ':tarefa', '2020-09-03 09:58:00'),
(46, 1, 'Pagar boleto da faculdade', '2020-09-03 09:58:11'),
(47, 1, 'Pagar boleto da faculdade', '2020-09-03 09:58:18'),
(48, 1, 'Pagar boleto da faculdade', '2020-09-03 09:59:21'),
(49, 1, 'Pagar boleto da faculdade', '2020-09-03 10:00:02'),
(50, 1, 'Pagar boleto da faculdade', '2020-09-03 10:00:12'),
(51, 1, 'Pagar boleto da faculdade', '2020-09-03 10:03:55'),
(52, 1, 'Pagar boleto da faculdade', '2020-09-03 10:03:55'),
(53, 1, 'Pagar boleto da faculdade', '2020-09-03 10:04:09'),
(54, 1, 'Pagar boleto da faculdade', '2020-09-03 10:04:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(13, 'NatÃ£ RomÃ£o', 'nata@teste.com.br', '1234'),
(14, 'Jamilton Damasceno', 'jamilton@teste.com.br', '1234'),
(15, 'Fernanda', 'fernanda@teste.com.br', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

DROP TABLE IF EXISTS `teste`;
CREATE TABLE IF NOT EXISTS `teste` (
  `tarefa` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
