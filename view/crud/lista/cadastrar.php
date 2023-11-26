<?php 
    include_once('../../../controller/login/verificarSessao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Lista</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="post" action="../../../controller/crud/lista/cadastrar.php">
        <div>
            <label for="">Nome da Lista:</label>
            <input type="text" name="nome">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>