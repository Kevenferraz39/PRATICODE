<?php 
    session_start();

    include_once('../model/ClassCrud.php');

    $id = $_SESSION['idAluno'];

    $sql = new Crud();
    $sql->deletarBD('aluno', 'idAluno', $id);

?>