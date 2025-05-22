-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/03/2025 às 23:41
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_toicos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `IDUSUARIO` int(11) ,
  `NOME_CLI` varchar(100) ,
  `DATA_NASCIMENTO` date ,
  `EMAIL` varchar(255) ,
  `CPF` varchar(14) ,
  `ENDERECO_CLI` varchar(255),
  `NUMERO_CELULAR` varchar(15) NOT NULL,
  `COMPLEMENTO` varchar(255),
  `SENHA` varchar(255)
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens`
--

CREATE TABLE `itens` (
  `ITEM` varchar(20) NOT NULL,
  `OBS` varchar(255) NOT NULL,
  `VALOR` decimal(10,2) NOT NULL
);
