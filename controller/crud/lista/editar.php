<?php 

    if (isset($_POST['nome']) && isset($_POST['id'])) {

        $id = $_POST['id'];
        $nome = $_POST['nome'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->atualizarBD('lista', 'nomeLista', "'$nome'", 'idLista', $id);
    }
?>