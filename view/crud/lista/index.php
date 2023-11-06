<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <a href="../index.html">Voltar</a>
    <form action="">
        <div>
            <table>
                <caption>Lista</caption>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME DE LISTA</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once('../../../controller/crud/lista/consultar.php');

                        while ($dados = mysqli_fetch_assoc($resultado)) {
                    ?>

                        <tr>
                            <td> <?= ($dados['idLista']); ?> </td>
                            <td> <?=  ($dados['nomeLista']); ?> </td>
                            <td> <a href="<?= "editar.php?id=$dados[idLista]"; ?>">Editar</a> <a href="<?= "excluir.php?id=$dados[idLista]"; ?>">Excluir</a> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <a href="cadastrar.php">Cadastrar Nova Lista</a>
        </div>
    </form>
</body>
</html>