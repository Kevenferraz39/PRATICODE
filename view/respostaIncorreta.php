<?php 
    session_start();
    
    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
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
    <link rel="stylesheet" href="_css/footer.css">
    <link rel="stylesheet" href="_css/feedbackRespostas.css">
    <!-- fim-css -->
    <link rel="shortcut icon" href="../../../_img/logo.png" type="image/x-icon">
    <title>Resposta Incorreta!</title> 
</head>
<body>
     <!-- Menu -->
<header class="Home">
    <a href="./menu.php">
    <img src="./_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
</header>
    <!-- fim do Menu -->
    <!-- conteudo da pagina -->
    <br><br><br><br><br>
<div class="container">
   <div class="conteudo">
        <div class="resposta-incorreta">
            <h2>Poxa que pena!</h2>
            <p>A sua resposta está incorreta.</p>
        </div>
        
        <div class="botoes">
            <a href="./perguntashtml.php" class="btn-html">Perguntas de HTML</a>
            <a href="./perguntascss.php" class="btn-css">Perguntas de CSS</a>
            <a href="./menu.php" class="btn-home">Home</a>
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
            </div>
        </div>
    </footer>
</body>
</html>