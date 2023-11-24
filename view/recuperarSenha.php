<?php 
    session_start();
    include_once('../model/ClassCrud.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="_css/Menu.css">
    <link rel="stylesheet" href="_css/footer.css"> 
    <link rel="stylesheet" href="./_css/recuperarSenha.css">
</head>
<body>
    <header class="Home">    
        <a href="Menu.html">
        <img src="_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
    </header>
    <div class="recuperarSenha-container">
        <h1>Recuperar Senha</h1>

        <?php 
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            if (!empty($dados['recupSenha'])) {
                // var_dump($dados);

                $email = $dados['email'];

                $sql = new Crud();
                $sql->consultarItemId('idAluno, nome, email', 'aluno', 'email', "'$email'");
                $resultado = $sql->getResultado();
                var_dump($resultado);
            }
        ?>

        <form class="form" method="post" action="">
            <div class="container-dados">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Digite o seu email" name="email" required>
                    
                <input type="submit" name="recupSenha" id="but" value="Recuperar"></input>
            </div>
        </form>
    </div>
</body>
</html>