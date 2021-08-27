-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Dez-2019 às 15:14
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmq`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumo_produto`
--

CREATE TABLE `consumo_produto` (
  `quantidadeconsumida` int(11) NOT NULL DEFAULT '0',
  `produto_idProduto` int(11) NOT NULL,
  `periodo` date NOT NULL,
  `peso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consumo_produto`
--

INSERT INTO `consumo_produto` (`quantidadeconsumida`, `produto_idProduto`, `periodo`, `peso`) VALUES
(4, 35573, '2019-01-01', 0),
(5, 35573, '2019-02-01', 1),
(7, 35573, '2019-03-01', 2),
(5, 35573, '2019-04-01', 3),
(7, 35573, '2019-05-01', 4),
(4, 35573, '2019-06-01', 5),
(9, 35573, '2019-07-01', 6),
(6, 35573, '2019-08-01', 7),
(4, 35573, '2019-09-01', 8),
(5, 35573, '2019-10-01', 9),
(7, 35573, '2019-11-01', 10),
(6, 35573, '2019-12-01', 11),
(4, 49027, '2019-01-01', 0),
(5, 49027, '2019-02-01', 1),
(7, 49027, '2019-03-01', 2),
(5, 49027, '2019-04-01', 3),
(7, 49027, '2019-05-01', 4),
(4, 49027, '2019-06-01', 5),
(9, 49027, '2019-07-01', 6),
(6, 49027, '2019-08-01', 7),
(4, 49027, '2019-09-01', 8),
(5, 49027, '2019-10-01', 9),
(7, 49027, '2019-11-01', 10),
(6, 49027, '2019-12-01', 11)
(4, 61672, '2019-01-01', 0),
(10, 61672, '2019-02-01', 1),
(7, 61672, '2019-03-01', 2),
(5, 61672, '2019-04-01', 3),
(6, 61672, '2019-05-01', 4),
(4, 61672, '2019-06-01', 5),
(9, 61672, '2019-07-01', 6),
(6, 61672, '2019-08-01', 7),
(4, 61672, '2019-09-01', 8),
(5, 61672, '2019-10-01', 9),
(7, 61672, '2019-11-01', 10),
(6, 61672, '2019-12-01', 11),
(4, 49025, '2019-01-01', 0),
(5, 49025, '2019-02-01', 1),
(7, 49025, '2019-03-01', 2),
(5, 49025, '2019-04-01', 3),
(7, 49025, '2019-05-01', 4),
(6, 49025, '2019-06-01', 5),
(9, 49025, '2019-07-01', 6),
(6, 49025, '2019-08-01', 7),
(5, 49025, '2019-09-01', 8),
(5, 49025, '2019-10-01', 9),
(7, 49025, '2019-11-01', 10),
(6, 49025, '2019-12-01', 11);;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `estoquemax` int(100) NOT NULL,
  `preco` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nome`, `tipo`, `estoquemax`, `preco`, `descricao`, `quantidade`, `imagem`) VALUES
(2664, 'Açucar Refinado União', 'cx', 11, 2, 'Descrição do produto', 55, 'produto.png'),
(2692, 'Aveia em Flocos Finos', 'cx', 2, 2, 'Descrição do produto', 7, 'produto.png'),
(2790, 'Café Utam em pó  500 g', 'pct', 13, 2, 'Descrição do produto', 76, 'produto.png'),
(2823, 'Gelatina Diet unid', 'cx', 11, 2, 'Descrição do produto', 29, 'produto.png'),
(19033, 'Adoçante Liquido 100ml Zero Call uni', 'cx', 2, 2, 'Descrição do produto', 4, 'produto.png'),
(35341, 'Biscoito Bauduco Cream Cracker c/ 370un', 'cx', 1, 2, 'Descrição do produto', 2, 'produto.png'),
(35482, 'Cha mate', 'cx', 2, 2, 'Descrição do produto', 7, 'produto.png'),
(35558, 'Biscoito Bauduco amanteigado leite c/ 400 un', 'cx', 1, 2, 'Descrição do produto', 2, 'produto.png'),
(35566, 'Geleia  Blister c/144 un', 'cx', 4, 2, 'Descrição do produto', 11, 'produto.png'),
(35570, 'Pudim unid', 'cx', 25, 2, 'Descrição do produto', 107, 'produto.png'),
(35573, 'Torrada Bauduco 15g c/126 un', 'cx', 1, 2, 'Descrição do produto', 3, 'produto.png'),
(35743, 'Gelatina Comum unid', 'cx', 28, 2, 'Descrição do produto', 102, 'produto.png'),
(35859, 'Suco de Goiaba Garrafa 500 ml', 'fr', 15, 2, 'Descrição do produto', 51, 'produto.png'),
(35939, 'Suco de Manga  Garrafa 500 ml', 'fr', 16, 2, 'Descrição do produto', 36, 'produto.png'),
(39259, 'Manteiga  blister', 'cx', 2, 2, 'Descrição do produto', 8, 'produto.png'),
(40879, 'Açúcar sachê Pettit', 'cx', 2, 2, 'Descrição do produto', 6, 'produto.png'),
(40880, 'Adoçante em pó sachê Pettit', 'cx', 1, 2, 'Descrição do produto', 2, 'produto.png'),
(49022, 'Suco de Cajú Garrafa 1 litro', 'fr', 6, 2, 'Descrição do produto', 16, 'produto.png'),
(49025, 'Suco de Maracujá  Garrafa 1 litro', 'fr', 9, 2, 'Descrição do produto', 19, 'produto.png'),
(49027, 'Suco de Uva Garrafa 1 litro', 'fr', 13, 2, 'Descrição do produto', 28, 'produto.png'),
(49850, 'Biscoito Bauduco amanteigado chocolate c/ 400', 'cx', 0, 2, 'Descrição do produto', 0, 'produto.png'),
(50490, 'Geleia Diet  Blister c/144 un', 'cx', 1, 2, 'Descrição do produto', 2, 'produto.png'),
(52910, 'Biscoito Bauduco Banana c/ Canela c/ 400 un', 'cx', 1, 2, 'Descrição do produto', 2, 'produto.png'),
(53600, 'Biscoito Bauduco Amanteigado Coco c/ 400 un', 'cx', 1, 2, 'Descrição do produto', 2, 'produto.png'),
(58499, 'Leite integral zero lactose 1 un', 'cx', 4, 2, 'Descrição do produto', 11, 'produto.png'),
(58656, 'Amido de Milho Maizena 500gr', 'cx', 0, 2, 'Descrição do produto', 0, 'produto.png'),
(61671, 'Leite integral 1 uni', 'cx', 7, 2, 'Descrição do produto', 23, 'produto.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumo_produto`
--
ALTER TABLE `consumo_produto`
  ADD KEY `fk_consumo_produto_produto1` (`produto_idProduto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD UNIQUE KEY `idProduto_UNIQUE` (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61672;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consumo_produto`
--
ALTER TABLE `consumo_produto`
  ADD CONSTRAINT `fk_consumo_produto_produto1` FOREIGN KEY (`produto_idProduto`) REFERENCES `produto` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

CREATE TABLE `fornecedores` (
  `idFornecedor` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereço` int(100) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `pais` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
