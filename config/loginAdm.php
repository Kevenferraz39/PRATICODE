<?php 
    include_once __DIR__. '../../model/ClassCrud.php';

    $emailAdm = "codeprati@gmail.com";
    $senhaAdm = "Praticode@2023";

    $sql = new Crud();
    $sql->consultarItemId('email', 'aluno', 'email', "'$emailAdm'");
    $resultado = $sql->getResultado();
    
    if (mysqli_num_rows($resultado) < 1) {
        $nome = "Praticode";
        $senhapass = password_hash(($senhaAdm), PASSWORD_DEFAULT);
        
        $sql->inserirBD('aluno', 'nome, email, senha', "'$nome', '$emailAdm', '$senhapass'");
    }
?>