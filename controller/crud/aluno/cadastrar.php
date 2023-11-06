<?php 
    
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->inserirBD('aluno', 'nome, email, senha', "'$nome', '$email', '$senha'");
    }
?>