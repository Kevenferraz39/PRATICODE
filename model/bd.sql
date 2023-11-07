CREATE DATABASE bdpraticode;
USE bdpraticode;

CREATE TABLE `aluno` (
  `idAluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `aluno` (`idAluno`, `nome`, `email`, `senha`, `pontos`) VALUES
(1, 'Praticode', 'codeprati@gmail.com', 'Praticode@2023', 0);


CREATE TABLE `exercicio` (
  `idExercicio` int(11) NOT NULL,
  `resposta` char(1) NOT NULL,
  `idLista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `exercicio` (`idExercicio`, `resposta`, `idLista`) VALUES
(1, 'a', 1),
(2, 'd', 1),
(3, 'c', 1),
(4, 'a', 1),
(5, 'b', 1),
(6, 'd', 1),
(7, 'b', 1),
(8, 'b', 1),
(9, 'c', 1),
(11, 'b', 2),
(12, 'c', 2),
(16, 'a', 2),
(17, 'b', 2),
(18, 'a', 2),
(21, 'a', 2),
(22, 'd', 2),
(23, 'a', 2),
(24, 'a', 3),
(25, 'a', 3),
(26, 'a', 3),
(28, 'b', 3),
(29, 'b', 3),
(30, 'd', 3),
(31, 'a', 3),
(32, 'e', 3),
(33, 'd', 3),
(34, 'b', 3),
(35, 'c', 4),
(36, 'a', 4),
(37, 'b', 4),
(39, 'a', 4),
(40, 'b', 4),
(45, 'a', 5),
(46, 'a', 5),
(48, 'a', 5),
(49, 'b', 5),
(50, 'b', 5),
(52, 'c', 5),
(53, 'b', 5),
(54, 'c', 5),
(55, 'b', 5),
(56, 'a', 5),
(57, 'a', 5),
(58, 'c', 5),
(59, 'a', 5),
(60, 'b', 6),
(61, 'a', 6),
(63, 'c', 6),
(64, 'a', 6),
(65, 'c', 7),
(66, 'b', 7),
(67, 'a', 7),
(68, 'a', 7),
(69, 'a', 7),
(70, 'd', 7),
(71, 'c', 7),
(72, 'b', 7),
(73, 'a', 8),
(74, 'b', 8),
(75, 'd', 8),
(76, 'b', 8),
(77, 'a', 8),
(78, 'a', 8),
(79, 'c', 8),
(80, 'a', 8),
(81, 'a', 8),
(82, 'c', 8),
(83, 'd', 8),
(85, 'a', 5),
(86, 'c', 5),
(87, 'b', 5),
(88, 'a', 5),
(89, 'b', 5),
(90, 'b', 5),
(91, 'a', 5),
(92, 'a', 5),
(93, 'b', 5),
(94, 'b', 5),
(95, 'b', 5),
(96, 'd', 5),
(97, 'c', 5),
(98, 'c', 4),
(99, 'b', 4),
(100, 'd', 4),
(101, 'a', 4);


CREATE TABLE `lista` (
  `idLista` int(11) NOT NULL,
  `nomeLista` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `lista` (`idLista`, `nomeLista`) VALUES
(1, 'Tabela'),
(2, 'Link'),
(3, 'Imagem'),
(4, 'Lista'),
(5, 'Elemento'),
(6, 'Cor'),
(7, 'Fonte'),
(8, 'Seletores');


CREATE TABLE `resposta` (
  `idResposta` int(11) NOT NULL,
  `resposta` char(1) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idExercicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`);


ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`idExercicio`),
  ADD KEY `fk_idLista` (`idLista`);


ALTER TABLE `lista`
  ADD PRIMARY KEY (`idLista`);


ALTER TABLE `resposta`
  ADD PRIMARY KEY (`idResposta`),
  ADD KEY `fk_idAluno` (`idAluno`),
  ADD KEY `fk_idExercicio` (`idExercicio`);


ALTER TABLE `aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `exercicio`
  MODIFY `idExercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;


ALTER TABLE `lista`
  MODIFY `idLista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `resposta`
  MODIFY `idResposta` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `exercicio`
  ADD CONSTRAINT `fk_idLista` FOREIGN KEY (`idLista`) REFERENCES `lista` (`idLista`);


ALTER TABLE `resposta`
  ADD CONSTRAINT `fk_idAluno` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`idAluno`),
  ADD CONSTRAINT `fk_idExercicio` FOREIGN KEY (`idExercicio`) REFERENCES `exercicio` (`idExercicio`);