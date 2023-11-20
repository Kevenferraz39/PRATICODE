<?php 

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senhapass = password_hash(($senha =  $_POST['senha']), PASSWORD_DEFAULT);
        $senhaConf = $_POST['senhaConf'];

        if ($senha === $senhaConf) {
            include_once('../../config/ClassConexao.php');
            $conectar = new Conexao();
            $conexao = $conectar->conectarBanco();

            $sqlInsert = "INSERT INTO aluno(nome, email, senha) VALUES ('$nome', '$email', '$senhapass')";
            $result = $conexao->query($sqlInsert);

            header('Location: ../../view/menu.php');
        } else {
            echo "Senha incorreta";
        }
    }
?>
