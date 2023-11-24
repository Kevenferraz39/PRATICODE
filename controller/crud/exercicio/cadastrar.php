<?php
    if (isset($_POST['resposta']) && isset($_POST['lista'])) {

        $resposta = $_POST['resposta'];
        $idLista = $_POST['lista'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->inserirBD('exercicio', 'resposta, idLista', "'$resposta', $idLista");
    }
?>