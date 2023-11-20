<?php
    include_once('../../../controller/login/verificarSessao.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->consultarItem('*', 'aluno', 'idAluno', $id);
        $resultado = $sql->getResultado();

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $nome = $dados['nome'];
            $email = $dados['email'];
            $senha = $dados['senha'];
            $pontos = $dados['pontos'];
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aluno</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="post" action="../../../controller/crud/aluno/excluir.php">
        <div>
            <p>Deseja realmente excluir este item?</p>
            <input type="text" name="id" value="<?= $id ?>" hidden>
            <div>
                <label for="">Nome:</label>
                <input type="text" name="nome" value="<?= $nome ?>" readonly>
            </div>
            <div>
                <label for="">Email:</label>
                <input type="text" name="email" value="<?= $email ?>" readonly>
            </div>
            <div>
                <label for="">Senha:</label>
                <input type="text" name="senha" value="<?= $senha ?>" readonly>
            </div>
            <div>
                <label for="">Pontos:</label>
                <input type="text" name="pontos" value="<?= $pontos ?>" readonly>
            </div>
            <br>
            <input type="submit" value="Confirmar">
        </div>
    </form>
</body>
</html>