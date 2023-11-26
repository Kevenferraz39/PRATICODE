<?php 
    if (isset($_POST['nome'])) {
        
        $nome = $_POST['nome'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->inserirBD('lista', 'nomeLista', "'$nome'");
    }
?>