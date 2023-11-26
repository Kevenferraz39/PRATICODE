<?php 
    include_once('../../../controller/login/verificarSessao.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->consultarItem('*', 'resposta', 'idResposta', $id);
        $resultado = $sql->getResultado();

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $resposta = $dados['resposta'];
            $aluno = $dados['idAluno'];
            $exercicio = $dados['idExercicio'];
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Resposta</title>
</head>
<body>
    <form method="post" action="../../../controller/crud/resposta/excluir.php">
        <div>
            <a href="./index.php">Voltar</a>
            <p>Deseja realmente excluir este item?</p>
            <input type="text" name="id" value="<?= $id ?>" hidden>
            <div>
                <label for="">Resposta:</label>
                <input type="text" name="resposta" value="<?= $resposta ?>" readonly>
            </div>
            <div>
                <label for="">Aluno:</label>
                <input type="text" name="aluno" value="<?= $aluno ?>" readonly>
            </div>
            <div>
                <label for="">Exercício:</label>
                <input type="text" name="exercicio" value="<?= $exercicio ?>" readonly>
            </div>
            <br>
            <input type="submit" value="Confirmar">
        </div>
    </form>
</body>
</html>