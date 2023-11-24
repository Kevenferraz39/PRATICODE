<?php 
    include_once('../../../controller/login/verificarSessao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Exercício</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="post" action="../../../controller/crud/exercicio/cadastrar.php">
        <div>
            <label for="">Resposta:</label>
            <input type="text" name="resposta">
        </div>
        <div>
            <label for="">Lista:</label>
            <select name="lista" id="">
                <option value=""></option>
                <?php 
                    include_once('../../../controller/crud/lista/consultar.php');

                    while ($dados = mysqli_fetch_assoc($resultado)) {
                ?>
                <option value="<?= $dados['idLista']; ?>"> <?= $dados['nomeLista']; ?> </option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>