<?php 
     session_start();

     include_once('../config/loginAdm.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--oi-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css -->
        <link rel="stylesheet" href="_css/Menu.css">
        <link rel="stylesheet" href="_css/footer.css"> 
        <link rel="stylesheet" href="_css/Login.css">
        <link rel="stylesheet" href="_css/dropdownConta.css">`
    <!-- fim-css -->
        <!--Script-->    
            <!--Start of Tawk.to Script-->
            <script src="JS/chat.js"></script>
            <!--script do dropdown-->
            <script src="JS/dropdown.js"></script>
            <script src="JS/dropdownConta.js"></script>
            <!--script do menu-->
            <script src="JS/login.js"></script>
        <!--Script-->

    <link rel="shortcut icon" href="_img/logo.png" type="image/x-icon">
    <title>Home</title> 
</head> 
<body>
     <!-- Menu -->
<header class="Home">    
    <a href="Menu.html">
    <img src="_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
        <div class="link">
            <li class="focus"><b><a href="menu.php">Home</a></b></li>
            <li class="linke"><b><a href="faleConosco.php">Fale conosco</a></b></li>
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
                if (($_SESSION['email'] == $emailAdm) && ($_SESSION['senha'] == $senhaAdm)) {
            ?>
            <li class="linke"><b><a href="./crud/">CRUD</a></b></li>
            <?php } ?>
            <div class="dropdownConta">
                <button class="btnConta" onclick="abrirDropdownConta()">Conta</button>
                <div class="dropdown-conta-content" id="dropdownConta">
                    <a href="configConta.php">Configurações</a>
                    <a href="../controller/login/sair.php">Sair</a>
                </div>
            </div>
            <?php } ?>
            <div id="id01" class="modal">
                <form class="modal-content animate" method="post" action="../controller/login/login.php">
                    <div class="container">
                        <label for="uname"><b>Usuário</b></label>
                        <input type="text" placeholder="Entre com o seu usuário" name="email" required>

                        <label for="psw"><b>Senha</b></label>
                        <input type="password" placeholder="Entre com a sua senha" name="senha" required>
                            
                        <button type="submit" id="but">Login</button>
                        <button id="but"><a href="cadastro.php">Cadastre-se</a></button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Lembre-me
                        </label>
                    </div>

                    <div class="container" style="background-color:#fdfdfd00">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                        <span class="psw"><a href="#">Esqueceu a sua senha ?</a></span>
                    </div>
                </form>
            </div>   
        </div>
</header>
    <!-- fim do Menu -->
    <!-- conteudo da pagina -->
    <br><br><br><br><br>
<div class="content">
    <center>
        <img src="_img/GIF_sem_fundo.gif" alt="gif" id="GIF"><br><br><br><br>
    </center>
    <!--Start of Tawk.to Script-->
    
        <!--End of Tawk.to Script-->
</div>
    <!--  fim do conteudo da pagina -->
    <!--  footer -->
    <footer>
        <div class="footer-line"></div>
        <div class="footer-wrapper">
            <div class="footer-columns">
                <section class="footer-logo">
                    <a href="#">
                        <img src="_img/LogoBrancaSemFundo.png" alt="logo">
                    </a>
                </section>
                <section>
                    <h3>Produto</h3>
                    <ul>
                        <li>
                            <a href="faleConosco.php">Fale conosco</a>
                        </li>
                        <li>
                            <a href="exercicios.php">Exercicios</a>
                        </li>
                        <li>
                            <a href="desenvolvedores.php">Desenvolvedores</a>
                        </li>
                   </ul>
                </section>
                <section>
                    <h3>EXERCICIOS DE HTML</h3>
                    <ul>
                        <li>
                            <a href="perguntas/html/tabela/index.html">Tabelas</a>
                        </li>
                        <li>
                            <a href="perguntas/html/link/index.html">Links</a>
                        </li>
                        <li>
                            <a href="perguntas/html/imagem/index.html">Imagem</a>
                        </li>
                        <li>
                            <a href="perguntas/html/lista/index.html">Lista</a>
                        </li><li>
                            <a href="perguntas/html/elementos">Elemento e atributos</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                
                <section>
                    <h3>EXERCICIOS DE CSS</h3>
                    <ul>
                        <li>
                            <a href="perguntas/css/cor/index.html">Cor</a>
                        </li>
                        <li>
                            <a href="perguntas/css/elementos/index.html">Elementos</a>
                        </li>
                        <li>
                            <a href="perguntas/css/fonte/index.html">Fonte</a>
                        </li>
                        <li>
                            <a href="perguntas/css/lista/index.html">Lista</a>
                        </li><li>
                            <a href="perguntas/css/seletores/index.html">Seletores</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                        <!-- More sections -->            
            </div>
            <div class="footer-bottom">
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="#" title="Instagram">
                                <img src="_img/Instagram.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="gith">
                                <img src="_img/github-logo-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="tiktok">
                                <img src="_img/tiktok-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="linkedin">
                                <img src="_img/icons8-linkedin-48.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="email">
                                <img src="_img/icons8-gmail-logo-48.png" alt="imagem">
                            </a>
                        </li>
                        <!-- More social links -->
                    </ul>
                </div>
                <small>
                    &copy; Atheros Intelligence Ltd. <span id="year"></span>,
                    All rights reseved
                </small>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('year').innerHTML = new Date().getFullYear();
    </script>
    <!--  fim do footer -->
</body>
</html>