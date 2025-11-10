-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2025 às 13:09
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Notebook Dell', '2500.00', 'Eletrônicos', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(2, 'Mouse Logitech', '89.90', 'Periféricos', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(3, 'Teclado Mecânico', '199.99', 'Periféricos', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(4, 'Monitor 24\" Samsung', '899.00', 'Eletrônicos', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(5, 'Cadeira Gamer', '1200.00', 'Móveis', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(6, 'Headphone Sony', '350.00', 'Áudio', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(7, 'Tablet iPad', '3200.00', 'Eletrônicos', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(8, 'Webcam HD', '150.00', 'Periféricos', '2025-11-10 11:59:45', '2025-11-10 11:59:45'),
(10, 'Lavelle Intense Noir', '299.00', 'Perfumes', '2025-11-10 12:07:24', '2025-11-10 12:07:24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
