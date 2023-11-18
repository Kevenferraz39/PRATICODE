<?php 
    include_once('../../../controller/login/verificarSessao.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->consultarItem('*', 'lista', 'idLista', $id);
        $resultado = $sql->getResultado();

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $nome = $dados['nomeLista'];
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Lista</title>
</head>
<body>
    <form method="post" action="../../../controller/crud/lista/excluir.php">
        <div>
            <a href="./index.php">Voltar</a>
            <p>Deseja realmente excluir este item?</p>
            <input type="text" name="id" value="<?= $id ?>" hidden>
            <div>
                <label for="">Nome da Lista:</label>
                <input type="text" name="nome" value="<?= $nome ?>" readonly>
            </div>
            <br>
            <input type="submit" value="Confirmar">
        </div>
    </form>
</body>
</html>