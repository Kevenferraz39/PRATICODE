<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Exercícios</title>
</head>
<body>
    <a href="../index.html">Voltar</a>
    <div>
        <table>
            <caption>Exercícios</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Resposta</th>
                    <th>Lista</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include_once('../../../controller/crud/exercicio/consultar.php');

                    while ($dados = mysqli_fetch_assoc($resultado)) {
                        $sql = new Crud();
                        $sql->consultarItem('nomeLista', 'lista', 'idLista', $dados['idLista']);
                        $result = $sql->getResultado();
                        $dado = mysqli_fetch_assoc($result);
                        $lista = $dado['nomeLista'];
                ?>
                <tr>
                    <td> <?= $dados['idExercicio'] ?> </td>
                    <td> <?= $dados['resposta'] ?> </td>
                    <td> <?= $lista ?> </td>
                    <td> <a href="<?= "editar.php?id=$dados[idExercicio]" ?>">Editar</a> <a href="<?= "excluir.php?id=$dados[idExercicio]" ?>">Excluir</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="cadastrar.php">Cadastrar Novo Exercício    </a>
    </div>
</body>
</html>