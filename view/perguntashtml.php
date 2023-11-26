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
        <link rel="stylesheet" href="_css/Menu.css">
        <link rel="stylesheet" href="_css/footer.css">
        <link rel="stylesheet" href="_css/perguntasHTML.css">
        <link rel="stylesheet" href="_css/dropdownConta.css">
        <link rel="stylesheet" href="_css/modalConta.css">
    <!-- fim-css -->

        <!--script do dropdown-->
        <script src="JS/dropdown.js"></script>
        <script src="JS/dropdownConta.js"></script>
        
    <link rel="shortcut icon" href="_img/logo.png" type="image/x-icon">
    <title>Perguntas de HTML</title> 
</head>
<body>
     <!-- Menu -->
<header class="Home">
    <a href="Menu.html">
    <img src="_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
        <div class="link">
            <li class="linke"><b><a href="menu.php">Home</a></b></li>
            <li class="focus"><b><a href="#">HTML</a></b></li>
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
                <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                </svg><h3>Perguntas de HTML 5</h3>
        </div>
        <div class="inner-div">
            <ul>
                <!-- Pergunta 1 -->            
            <br><br><br><br>
                <a href="perguntas/html/tabela/index.php"><li><b>Tabela</b></li></a>
                <a href="perguntas/html/link/index.php"><li><b>Link´s</b></li></a>
                <a href="perguntas/html/imagem/index.php"><li><b>Imagem</b></li></a>
                <a href="perguntas/html/lista/index.php"><li><b>Lista</b></li></a>
                <a href="perguntas/html/elementos/index.php"><li><b>Elementos e Atributos</b></li></a>
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