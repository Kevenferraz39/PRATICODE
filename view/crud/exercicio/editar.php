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
    <title>Editar Exercício</title>
</head>
<body>
    <a href="./index.php">Voltar</a>
    <form method="post" action="../../../controller/crud/exercicio/editar.php">
        <input type="text" name="id" value=" <?= $id ?> " hidden>
        <div>
            <label for="">Resposta:</label>
            <input type="text" name="resposta" value="<?= $resposta ?>">
        </div>
        <div>
            <label for="">Lista:</label>
            <select name="idLista" id="">
                <option value=""></option>
                <?php 
                    include_once('../../../controller/crud/lista/consultar.php');

                    while ($dados = mysqli_fetch_assoc($resultado)) {
                ?>
                <option value="<?= $dados['idLista']; ?>"> <?= $dados['nomeLista']; ?> </option>
                <?php } ?>
            </select>
        </div>
        <br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>