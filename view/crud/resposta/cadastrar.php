<?php 
    include_once('../../../controller/login/verificarSessao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Resposta</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="post" action="../../../controller/crud/resposta/cadastrar.php">
        <div>
            <label for="">Resposta:</label>
            <input type="text" name="resposta">
        </div>
        <div>
            <label for="">Exercício:</label>
            <input type="number" name="exercicio">
        </div>
        <div>
            <label for="">Aluno:</label>
            <input type="number" name="aluno">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>