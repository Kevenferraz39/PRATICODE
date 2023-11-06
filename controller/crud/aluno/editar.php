<?php 
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $pontos = $_POST['pontos'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();
        $sql->editarItens('aluno', "nome = '$nome', email = '$email', senha = '$senha', pontos = '$pontos'", 'idAluno', $id);
    }
?>