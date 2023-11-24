<?php
    session_start();

    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
    
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        include_once('../../config/ClassConexao.php');
        $conectar = new Conexao();
        $conexao = $conectar->conectarBanco();

        $sql = "SELECT * FROM aluno WHERE email = '$email'";
        $result = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($result);
        $senhapass = $dados['senha'];

        if (mysqli_num_rows($result) > 0) {
            if (password_verify($senha, $senhapass)) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senhapass;
                $_SESSION['idAluno'] = $dados['idAluno'];

                include_once('../../config/loginAdm.php');
                if (($_SESSION['email'] == $emailAdm)) {
                    header('Location: ../../view/crud/');
                } else {
                    header('Location: ../../view/');
                }
            } else {
                header("Location: ../../view/");
            }
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['idAluno']);
            header('Location: ../../view/menu.php');
        }

    // } else {
    //     include_once('../../config/loginAdm.php');
    //     $dados = mysqli_fetch_assoc($result);

    //     $_SESSION['email'] = $email;
    //     $_SESSION['senha'] = $senha;
    //     $_SESSION['idAluno'] = $dados['idAluno'];

    //     if (($_SESSION['email'] == $emailAdm) && ($_SESSION['senha'] == $senhaAdm)) {
    //         header('Location: ../../view/crud/');
    //     } else {
    //         header('Location: ../../view/menu.php');
    //     }
    }
?> 