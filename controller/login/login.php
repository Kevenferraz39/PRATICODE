<?php
    session_start();

    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
    
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        include_once('../../config/ClassConexao.php');
        $conectar = new Conexao();
        $conexao = $conectar->conectarBanco();

        $sql = "SELECT * FROM aluno WHERE email = '$email' AND senha = '$senha'";
        $result = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../../view/menu.html');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../../view/exercicios.php');
       }

    } else {
        header('Location: ../../view/menu.html');
    }
?>