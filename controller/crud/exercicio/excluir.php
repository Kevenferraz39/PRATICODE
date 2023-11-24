<?php 
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->deletarBD('exercicio', 'idExercicio', $id);
    }
?>