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
    <title>Editar Aluno</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form action="../../../controller/crud/aluno/editar.php" method="post">
        <div>
            <input type="text" name="id" value=" <?= $id ?> " hidden>
            <div>
                <label for="">Nome:</label>
                <input type="text" name="nome" value="<?= $nome ?>">
            </div>
            <div>
                <label for="">Email:</label>
                <input type="text" name="email" value="<?= $email ?>">
            </div>
            <div>
                <label for="">Senha:</label>
                <input type="text" name="senha" value="<?= $senha ?>">
            </div>
            <div>
                <label for="">Pontos:</label>
                <input type="number" name="pontos" value="<?= $pontos ?>">
            </div>
                
            <input type="submit" value="Editar">
        </div>
    </form>
</body>
</html>