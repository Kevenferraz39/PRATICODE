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
            $exercicio = $dados['idExercicio'];
            $aluno = $dados['idAluno'];
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Resposta</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="post" action="../../../controller/crud/resposta/editar.php">
        <input type="text" name="id" value="<?= $id ?>" hidden>
        <div>
            <label for="">Resposta:</label>
            <input type="text" name="resposta" value="<?= $resposta ?>">
        </div>
        <div>
            <label for="">Exercício:</label>
            <input type="number" name="exercicio" value="<?= $exercicio ?>">
        </div>
        <div>
            <label for="">Aluno:</label>
            <input type="number" name="aluno" value="<?= $aluno ?>">
        </div>
        <input type="submit" value="Editar">
    </form>
</body>
</html>