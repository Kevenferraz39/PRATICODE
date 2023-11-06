<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
</head>
<body>
    <a href="../index.html">Voltar</a>
    <div>
        <table>
            <caption>Respostas</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Resposta</th>
                    <th>Exercício</th>
                    <th>Aluno</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include_once('../../../controller/crud/resposta/consultar.php');

                    while ($dados = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td> <?= $dados['idResposta'] ?> </td>
                    <td> <?= $dados['resposta'] ?> </td>
                    <td> <?= $dados['idExercicio'] ?> </td>
                    <td> <?= $dados['idAluno'] ?> </td>
                    <td> <a href="<?= "editar.php?id=$dados[idResposta]" ?>">Editar</a> <a href="<?= "excluir.php?id=$dados[idResposta]" ?>">Excluir</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="cadastrar.php">Cadastrar Nova Resposta</a>
    </div>
</body>
</html>