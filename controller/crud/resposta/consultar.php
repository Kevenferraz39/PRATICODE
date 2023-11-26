<?php 
    include_once ('../../../model/ClassCrud.php');

    $sql = new Crud();
    $sql->consultarBD('resposta', '*');
    $resultado = $sql->getResultado();
?>