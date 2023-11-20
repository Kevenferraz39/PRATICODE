<?php 
    include_once('../../../controller/login/verificarSessao.php');

    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->consultarItem('*', 'exercicio', 'idExercicio', $id);
        $resultado = $sql->getResultado();

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $resposta = $dados['resposta'];
            $lista = $dados['idLista'];

            $sql->consultarItem('nomeLista', 'lista', 'idLista', $lista);
            $resultado = $sql->getResultado();
            $dado = mysqli_fetch_assoc($resultado);
            $lista = $dado['nomeLista'];
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Exercício</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="POST" action="../../../controller/crud/exercicio/excluir.php">
        <div>
            <p>Deseja realmente excluir este item?</p>
            <div>
                <label for="">Id:</label>
                <input type="text" name="id" value="<?= $id ?>" readonly>
            </div>
            <div>
                <label for="">Resposta:</label>
                <input type="text" name="resposta" value="<?= $resposta ?>" readonly>
            </div>
            <div>
                <label for="">Lista:</label> 
                <input type="text" name="lista" value="<?= $lista ?>" readonly>
            </div>
            <br>
            <input type="submit" value="Confirmar">
        </div>
    </form>
</body>
</html>