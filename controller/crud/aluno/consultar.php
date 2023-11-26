<?php 
     include_once('../../../model/ClassCrud.php');

     $sql = new Crud();
     $sql->consultarBD('aluno', '*');
     $resultado = $sql->getResultado();
?>