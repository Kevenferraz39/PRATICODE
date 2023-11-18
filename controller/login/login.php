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
            unset($_SESSION['idAluno']);
            header('Location: ../../view/menu.php');
        } else {
            include_once('../../config/loginAdm.php');
            $dados = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['idAluno'] = $dados['idAluno'];

            if (($_SESSION['email'] == $emailAdm) && ($_SESSION['senha'] == $senhaAdm)) {
                header('Location: ../../view/crud/');
            } else {
                header('Location: ../../view/menu.php');
            }
       }

    } else {
        header('Location: ../../view/menu.php');
    }
?>