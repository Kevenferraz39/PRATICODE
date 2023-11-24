<?php 
    include_once('../../../model/ClassCrud.php');

    $sql = new Crud();
    $sql->consultarBD('exercicio', '*');
    $resultado = $sql->getResultado();
?>