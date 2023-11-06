<?php 
    include_once('../../../controller/crud/aluno/consultar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    <a href="../index.html">Voltar</a>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Pontos</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td> <?= $dados['idAluno'] ?> </td>
                    <td> <?= $dados['nome'] ?> </td>
                    <td> <?= $dados['email'] ?> </td>
                    <td> <?= $dados['senha'] ?> </td>
                    <td> <?= $dados['pontos'] ?> </td>
                    <td> <a href="<?= "editar.php?id=$dados[idAluno]"; ?>">Editar</a> <a href="<?= "excluir.php?id=$dados[idAluno]"; ?>">Excluir</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="cadastrar.php">Cadastrar Novo Aluno</a>
    </div>
</body>
</html>