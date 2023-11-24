<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- css -->
        <link rel="stylesheet" href="_css/Menu.css">
        <link rel="stylesheet" href="_css/footer.css">
        <link rel="stylesheet" href="_css/faleConosco.css">
        <link rel="stylesheet" href="_css/Login.css">
        <link rel="stylesheet" href="_css/dropdownConta.css">
        <link rel="stylesheet" href="_css/modalConta.css">
    <!-- fim-css -->

        <!--Script-->    
            <!--Start of Tawk.to Script-->
            <script src="JS/chat.js"></script>
            <!--script do dropdown-->
            <script src="JS/dropdown.js"></script>
            <!--script do menu-->
            <script src="JS/login.js"></script>
        <!--Script-->
 
    <link rel="shortcut icon" href="_img/logo.png" type="image/x-icon">
    <title>Fale Conosco</title> 
</head>
<body>
     <!-- Menu -->
<header class="Home">
    <a href="Menu.html">
    <img src="_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
        <div class="link">
            <li class="linke"><b><a href="menu.php">Home</a></b></li>
            <li class="focus"><b><a href="faleConosco.php">Fale conosco</a></b></li>
            <li class="linke"><b><a href="desenvolvedores.php">Desenvolvedores</a></b></li>
            <?php
                if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
                    echo "<button onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\">Login</button>";
                } else {
            ?>
            <!-- Projetos botão dropdown -->
            <div class="dropdown">
                <button class="dropbtn" onclick="abrirDropdown()">Exercicios</button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="exercicios.php"><b>Exercicios</b></a>
                    <a href="perguntashtml.php"><b>HTML</b></a>
                    <a href="perguntascss.php"><b>CSS</b></a>
                </div>
            </div> 
            <?php 
                include_once('../config/loginAdm.php');
                if (($_SESSION['email'] == $emailAdm)) {
            ?>
            <li class="linke"><b><a href="./crud/">CRUD</a></b></li>
            <?php } ?>
            <div class="dropdownConta">
                <button class="btnConta" onclick="abrirDropdownConta()">Conta</button>
                <div class="dropdown-conta-content" id="dropdownConta">
                    <div class="btns">
                        <a href="../controller/login/sair.php" class="btn-sair">Sair</a>
                        <button class="btn-excluir" id="abrirModalbtn">Excluir conta</button>
                    </div>
                </div>
            </div>
            <?php } ?>  
            <div id="id01" class="modal">
                <form class="modal-content animate"action="#" method="POST">
                    <div class="container">
                    <label for="uname"><b>Usuário</b></label>
                    <input type="text" placeholder="Entre com o seu usuário" name="uname" required>

                    <label for="psw"><b>Senha</b></label>
                    <input type="password" placeholder="Entre com a sua senha" name="psw" required>
                        
                    <button type="submit" id="but">Login</button>
                    <button id="but"><a href="cadastro.php">Cadastre-se</a></button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Lembre-me
                    </label>
                    </div>

                    <div class="container" style="background-color:#fdfdfd00">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                    <!-- <span class="psw"><a href="#">Esqueceu a sua senha ?</a></span> -->
                    </div>
                </form>
            </div>
        </div>
</header>
    <!-- fim do Menu -->

    <!-- conteudo da pagina -->
    <div class="modal-conta" id="modal-conta">
        <div class="modal-box">
            <div class="conteudo" id="modal-conteudo">
                <div class="texto-modal">
                    <h2>Deseja mesmo excluir a sua conta?</h2>
                    <p>Esta é uma ação irreversível e todos os seus dados e progresso serão perdidos.</p>
                </div>
                <div class="botoes-modal">
                    <button class="btn-can" id="fecharModalbtn">Cancelar</button>
                    <a href="../controller/excluirConta.php" class="btn-exc" id="btnExc">Excluir</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
     <h1>Fale Conosco</h1><br>
     <p>Em caso de dúvidas, reclamações ou sujestões, entre em contato conosco através de nossas redes sociais.</p>
     <div class="redes-sociais">
        <div class="insta">
            <img src="_img/Instagram.png" alt="imagem">
            <ul>
                <li><a href="https://instagram.com/praticode_site?igshid=MzRlODBiNWFlZA==">@praticode_site</a></li>
            </ul>
        </div><br>
        <div class="git">
            <img src="_img/github-logo-removebg-preview.png" alt="imagem">
            <ul>
                <li><a href="">@praticode</a></li>
            </ul>
        </div><br>
        <div class="email">
            <img src="_img/icons8-gmail-logo-48.png" alt="imagem">
            <ul>
                <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">codeprati@gmail.com</a></li>
            </ul>
        </div>
 </div>
    <script>
        document.getElementById('year').innerHTML = new Date().getFullYear();
    </script>
    <!--  fim do footer -->

    <script src="./JS/dropdownConta.js"></script>
    <script src="./JS/modalConta.js"></script>
</body>
</html>