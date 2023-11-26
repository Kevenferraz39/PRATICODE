<?php 
    include_once('../../../controller/login/verificarSessao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form action="../../../controller/crud/aluno/cadastrar.php" method="post">
        <div>
            <label>Nome:</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Senha:</label>
            <input type="text" name="senha">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>