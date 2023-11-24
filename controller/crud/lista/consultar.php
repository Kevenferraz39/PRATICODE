<?php 
     include_once('../../../model/ClassCrud.php');

     $sql = new Crud();
     $sql->consultarBD('lista', '*');
     $resultado = $sql->getResultado();
?>