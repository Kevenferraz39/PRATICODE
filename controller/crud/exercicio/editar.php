<?php 

    if (isset($_POST['idLista']) && isset($_POST['resposta'])) {

        $id = $_POST['id'];
        $resposta = $_POST['resposta'];
        $idLista = $_POST['idLista'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        
        $sql->editarItens('exercicio', "resposta = '$resposta', idLista = $idLista", 'idExercicio', $id);
    }

?>