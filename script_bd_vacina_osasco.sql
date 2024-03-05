-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2022 às 13:06
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacina osasco`
--
DROP DATABASE `vacina osasco`;
CREATE DATABASE IF NOT EXISTS `vacina osasco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vacina osasco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dados_agendamento`
--

DROP TABLE IF EXISTS `tb_dados_agendamento`;
CREATE TABLE `tb_dados_agendamento` (
  `age_codigo` int(10) NOT NULL,
  `age_nome` varchar(50) NOT NULL,
  `age_celular` varchar(50) NOT NULL,
  `age_email` varchar(50) NOT NULL,
  `age_cep` varchar(50) NOT NULL,
  `age_cpf` varchar(50) NOT NULL,
  `age_rg` varchar(50) NOT NULL,
  `age_data` varchar(50) NOT NULL,
  `age_hora` varchar(50) NOT NULL,
  `age_ubs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_dados_agendamento`
--

INSERT INTO `tb_dados_agendamento` (`age_codigo`, `age_nome`, `age_celular`, `age_email`, `age_cep`, `age_cpf`, `age_rg`, `age_data`, `age_hora`, `age_ubs`) VALUES
(1, 'matheus', '93456-6389', 'fanto@gmail.com', '8274084', '5464576756', '456757544', '24/04/22', '12:30', 'osasco'),
(2, 'nome', '897218973', '', '', '', '', '', '', 'Selecione a UBS mais prÃ³xima:'),
(3, 'hrbhrfb', '35653626', 'hgdhghgeh', '5536565', '7357562376', '6376762', '2022-08-31', '12:10', '13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dados_agendamento`
--
ALTER TABLE `tb_dados_agendamento`
  ADD PRIMARY KEY (`age_codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dados_agendamento`
--
ALTER TABLE `tb_dados_agendamento`
  MODIFY `age_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
