<?php 
     session_start();
    
     if (isset($_SESSION['email']) and isset($_SESSION['senha'])) {
         header('Location: menu.php');
     }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css -->
        <link rel="stylesheet" href="_css/Menu.css">
        <link rel="stylesheet" href="_css/Cadastro.css">
    <!-- fim-css -->
    
    <link rel="shortcut icon" href="_img/logo.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <header class="Home">
        <a href="menu.php"><img src="_img/Logo-SemFundo.png" alt="foto" id="logo"></a>


        <center>
            <div class="card-cadastrar"><br>
                <form method="post" action="../controller/cadastro/cadastro.php">
                    <p class="titulo"><b>Cadastre-se</b></p>
                    <label for="">Nome</label><br>
                    <input class="fonte" type="text" name="nome" placeholder="Digite o seu nome completo..."
                        required><br><br>
                    <label for="">E-Mail</label><br>
                    <input class="fonte" type="email" name="email" placeholder="Digite o seu E-mail..." required>
                    <br><br>
                    <label for="">Senha</label><br>
                    <input class="fonte" type="password" name="senha" placeholder="Digite a sua senha..."
                        required><br><br>
                    <label for="">Confirmação da senha</label><br>
                    <input class="fonte" type="password" name="senhaConf" placeholder="Confirme a sua senha..."
                        required><br><br>
                    <input type="submit" value="Cadastrar" id="btn-cadastrar"><br><br>
                    <a href="menu.php" id="btn-voltar">Cancelar</a>
                </form>
            </div>
        </center>
</body>

</html>
