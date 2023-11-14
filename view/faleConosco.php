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
                if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
                    echo "<button onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\">Login</button>";
                } else {
            ?>
            <div class="dropdownConta">
                <button class="btnConta" onclick="abrirDropdownConta()">Conta</button>
                <div class="dropdown-conta-content" id="dropdownConta">
                    <a href="configConta.php">Configurações</a>
                    <a href="../controller/login/sair.php">Sair</a>
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
                    <span class="psw"><a href="#">Esqueceu a sua senha ?</a></span>
                    </div>
                </form>
            </div>
        </div>
</header>
    <!-- fim do Menu -->

    <!-- conteudo da pagina -->
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

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/64ffb4f2b1aaa13b7a764e06/1ha3dll78';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
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
                    <h3>Product</h3>
                    <ul>
                        <li>
                            <a href="#" title="API">API</a>
                        </li>
                        <li>
                            <a href="#" title="teste">teste</a>
                        </li>
                        <li>
                            <a href="#" title="teste2">teste2</a>
                        </li>
                        <li>
                            <a href="#" title="API">API</a>
                        </li><li>
                            <a href="#" title="API">API</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                <section>
                    <h3>HTML</h3>
                    <ul>
                        <li>
                            <a href="#" title="table">&lt; Tabela &gt;</a>
                        </li>
                        <li>
                            <a href="#" title="div">&lt; Div &gt;</a>
                        </li>
                        <li>
                            <a href="#" title="section">&lt; Section &gt;</a>
                        </li>
                        <li>
                            <a href="#" title="header">&lt; Header &gt;</a>
                        </li><li>
                            <a href="#" title="main">&lt; Main &gt;</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                
                <section>
                    <h3>HTML</h3>
                    <ul>
                        <li>
                            <a href="#" title="table">&lt; Tabela &gt;</a>
                        </li>
                        <li>
                            <a href="#" title="div">&lt; Div &gt;</a>
                        </li>
                        <li>
                            <a href="#" title="section">&lt; Section &gt;</a>
                        </li>
                        <li>
                            <a href="#" title="header">&lt; Header &gt;</a>
                        </li><li>
                            <a href="#" title="main">&lt; Main &gt;</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                <section>
                    <h3>CSS</h3>
                    <ul>
                        <li>
                            <a href="#" title="after">::after</a>
                        </li>
                        <li>
                            <a href="#" title="before">::before</a>
                        </li>
                        <li>
                            <a href="#" title="hover">:hover</a>
                        </li>
                        <li>
                            <a href="#" title="translate">:translate</a>
                        </li><li>
                            <a href="#" title="transition">transition</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                <section>
                    <h3>CSS</h3>
                    <ul>
                        <li>
                            <a href="#" title="after">::after</a>
                        </li>
                        <li>
                            <a href="#" title="before">::before</a>
                        </li>
                        <li>
                            <a href="#" title="hover">:hover</a>
                        </li>
                        <li>
                            <a href="#" title="translate">:translate</a>
                        </li><li>
                            <a href="#" title="transition">transition</a>
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