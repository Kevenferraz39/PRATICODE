<?php 
    session_start();
    
    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
        header('Location: menu.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css -->
        <link rel="stylesheet" href="_css/dropdownConta.css">
        <link rel="stylesheet" href="_css/Menu.css">
        <link rel="stylesheet" href="_css/footer.css">
        <link rel="stylesheet" href="_css/perguntasCSS.css">
        <link rel="stylesheet" href="_css/modalConta.css">
    <!-- fim-css -->

        <!--script do dropdown-->
        <script src="JS/dropdown.js"></script>
        <script src="JS/dropdownConta.js"></script>
        
    <link rel="shortcut icon" href="_img/logo.png" type="image/x-icon">
    <title>Perguntas de CSS</title> 
</head>
<body>
     <!-- Menu -->
<header class="Home">
    <a href="Menu.html">
    <img src="_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
        <div class="link">
            <li class="linke"><b><a href="menu.php">Home</a></b></li>
            <li class="focus"><b><a href="#">CSS</a></b></li>
            <li class="linke"><b><a href="faleConosco.php">Fale conosco</a></b></li>
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
            <div class="dropdownConta">
                <button class="btnConta" onclick="abrirDropdownConta()">Conta</button>
                <div class="dropdown-conta-content" id="dropdownConta">
                    <div class="btns">
                        <a href="../controller/login/sair.php" class="btn-sair">Sair</a>
                        <button class="btn-excluir" id="abrirModalbtn">Excluir conta</button>
                    </div>
                </div>
            </div>
        <!-- final do botão dropdown -->
        
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
<div class="container">
   <div class="lista-perguntas">
        <div class="top">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                </svg><h3>Temas de CSS 3</h3>
        </div>
        <div class="inner-div">
            <ul>
                <!-- Pergunta 1 -->   
                <a href="perguntas/css/cor/index.php"><li><b>Cor</b></li></a>         
                <a href="perguntas/css/fonte/index.php"><li><b>Fonte</b></li></a>   
                <a href="perguntas/css/seletores/index.php"><li><b>Seletores</b></li></a>   
                <a href="perguntas/css/elementos/index.php"><li><b>Elementos</b></li></a>
                <a href="perguntas/css/lista/index.php"><li><b>Lista</b></li></a>      
            
                <!-- Adicione mais itens conforme necessário -->
            </ul>
        </div>
        <div class="botoes">
            <center>
                <a href="./exercicios.php" class="b-perguntas">Voltar</a>
            </center>
        </div>
   </div>
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
                            <a href="perguntas/html/tabela/index.php">Tabelas</a>
                        </li>
                        <li>
                            <a href="perguntas/html/link/index.php">Links</a>
                        </li>
                        <li>
                            <a href="perguntas/html/imagem/index.php">Imagem</a>
                        </li>
                        <li>
                            <a href="perguntas/html/lista/index.php">Lista</a>
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
                            <a href="perguntas/css/cor/index.php">Cor</a>
                        </li>
                        <li>
                            <a href="perguntas/css/elementos/index.php">Elementos</a>
                        </li>
                        <li>
                            <a href="perguntas/css/fonte/index.php">Fonte</a>
                        </li>
                        <li>
                            <a href="perguntas/css/lista/index.php">Lista</a>
                        </li><li>
                            <a href="perguntas/css/seletores/index.php">Seletores</a>
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

    <script src="./JS/modalConta.js"></script>
</body>
</html>