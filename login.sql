-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jul-2023 às 20:47
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `start` timestamp NOT NULL,
  `end` timestamp NOT NULL,
  `room` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `student` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `iduser` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `reservations`
--

INSERT INTO `reservations` (`id`, `title`, `description`, `color`, `start`, `end`, `room`, `student`, `iduser`) VALUES
(40, 'Evento de Teste', 'Prova Final', 'blue', '2023-07-05 10:00:00', '2023-07-09 00:34:00', 'K101', 'Josézitos', 1),
(41, 'Evento Novo', 'Apresentação', 'red', '2023-07-05 06:00:00', '2023-07-08 09:03:00', 'L201', 'Luisa', 6),
(44, 'Reserva 01', 'Aula', 'limegreen', '2023-07-04 10:00:00', '2023-07-04 21:10:00', 'K101', 'Josézitos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int NOT NULL AUTO_INCREMENT,
  `username` varchar(140) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `password` varchar(140) NOT NULL,
  `course` varchar(200) NOT NULL,
  `acess` int DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idusers`, `username`, `cpf`, `password`, `course`, `acess`) VALUES
(1, 'Josézitos', '12144777985', '123', 'Tecnologia em Análise e Desenvolvimento de Sistermas', 2),
(6, 'Luisa', '0000', '555', 'TADS', 2),
(5, 'Frantor', '987654321', '777', 'TADS', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
