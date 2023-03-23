create database dbentrevista;
use dbentrevista;

CREATE TABLE `cidade` (
  `idCidade` int NOT NULL,
  `estado` varchar(220) DEFAULT NULL,
  `nome_cidade` varchar(50) DEFAULT NULL,
  `idEstado` int NOT NULL
) ;

CREATE TABLE `cliente` (
  `id` int NOT NULL,
  `nome_cliente` varchar(220) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cpf` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `razao_social` varchar(220) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cnpj` varchar(220) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cidade` varchar(220) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `estado` varchar(220) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `despesa_receita` enum('Despesa','Receita') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `logo` blob NOT NULL,
  `createdAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idCidade` int DEFAULT NULL
) ;

--

INSERT INTO `cliente` (`id`, `nome_cliente`, `cpf`, `razao_social`, `cnpj`, `cidade`, `estado`, `despesa_receita`, `logo`, `createdAt`, `modified`, `idCidade`) VALUES
(2, 'Diogo Henry Luiz Vieira', '504.917.348-59', NULL, NULL, 'São Paulo', 'SP', 'Despesa', '', '2023-01-20 14:53:31', '2023-03-23 15:09:30', NULL),
(3, 'Nicolas Yago Roberto Aparício', '990.072.218-33', NULL, NULL, 'Jundiaí', 'SP', 'Receita', '', '2023-02-23 14:54:14', '2023-03-23 15:09:26', NULL),
(4, 'Mário Caleb Ribeiro', '798.544.008-91', NULL, NULL, 'São Paulo', 'SP', 'Despesa', '', '2023-03-03 14:54:51', '2023-03-23 15:09:36', NULL),
(5, NULL, NULL, 'César e Erick Telecom Ltda', '21.156.716/0001-52', 'Cianorte', 'PR', 'Receita', '', '2023-03-15 14:57:06', '2023-03-23 15:09:52', NULL),
(6, NULL, NULL, 'Raimundo e Adriana Eletrônica ME', '97.288.136/0001-80', 'Maringá', 'PR', 'Despesa', '', '2023-03-22 15:09:53', '2023-03-23 15:09:55', NULL),
(7, NULL, NULL, 'Levi e Maya Publicidade e Propaganda Ltda', '96.236.425/0001-73', 'Foz do Iguaçu', 'PR', 'Despesa', '', '2023-03-23 14:58:36', '2023-03-23 14:59:25', NULL),
(8, 'Bernardo', '1111111111', '', '', 'a', 'a', 'Receita', '', '2023-03-30 15:06:40', '2023-03-23 15:10:01', NULL);



CREATE TABLE `despesas` (
  `id` int NOT NULL,
  `tipo_despesa` enum('Despesa','Receita') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cliente_id` int NOT NULL
);



CREATE TABLE `estado` (
  `idEstado` int NOT NULL,
  `nome_estado` varchar(220) COLLATE utf8mb3_unicode_ci DEFAULT NULL
);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idCidade`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCidade` (`idCidade`);

--
-- Índices para tabela `despesas`
--
ALTER TABLE `despesas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `tipo_despesa` (`tipo_despesa`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idCidade` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `despesas`
--
ALTER TABLE `despesas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idCidade`) REFERENCES `cidade` (`idCidade`);
COMMIT;