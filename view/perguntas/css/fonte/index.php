<?php 
    session_start();
    
    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
        header('Location: ../../../menu.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../../../_css/Menu.css">
    <link rel="stylesheet" href="../../../_css/footer.css">
    <link rel="stylesheet" href="../../../_css/perguntasCSS.css">
    <!-- fim-css -->
    <link rel="shortcut icon" href="../../../_img/logo.png" type="image/x-icon">
    <title>Fonte CSS 3</title> 
</head>
<body>
     <!-- Menu -->
     <header class="Home">
        <a href="../../../Menu.html">
        <img src="../../../_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
            <div class="link">
                <li class="linke"><b><a href="../../../menu.php">Home</a></b></li>
                <li class="focus"><b><a href="#">CSS</a></b></li>
                <li class="linke"><b><a href="../../../faleConosco.php">Fale conosco</a></b></li>
                <li class="linke"><b><a href="../../../desenvolvedores.php">Desenvolvedores</a></b></li>
            <!-- Projetos botão dropdown -->
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">Exercicios</button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="../../../exercicios.php"><b>Exercicios</b></a>
                        <a href="../../../perguntashtml.php"><b>HTML</b></a>
                        <a href="../../../perguntascss.php"><b>CSS</b></a>
                    </div>
                </div> 
            <!-- final do botão dropdown -->
        </div>
        <script>
            /* Quando o usuário clicar no botão, alterne entre ocultar e mostrar o conteúdo do menu suspenso*/
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            //Feche o menu suspenso se o usuário clicar fora dele
            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {
              var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                  myDropdown.classList.remove('show');
                }
              }
            }
        </script>
</header>
    <!-- fim do Menu -->
    <!-- conteudo da pagina -->
    <br><br><br><br><br>
<div class="container">
   <div class="lista-perguntas">
    <div class="top">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
            <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
            </svg><h3> Fonte CSS 3</h3>
    </div>
    <div class="inner-div">
        <ul>
            <!-- Pergunta 1 -->            
            <a href="p65.html"><li>
               <b>1. Qual propriedade CSS é usada para definir a fonte do texto em um elemento?</b>     
            </li></a>
             <!-- Pergunta 2 -->            
             <a href="p66.html"><li>
                <b>2. Qual propriedade CSS é usada para alterar o tamanho da fonte de um elemento? </b>
            </li></a>
            <!-- Pergunta 3 -->            
            <a href="p67.html"><li>
                <b>3. Qual propriedade CSS é usada para alinhar horizontalmente o texto dentro de um elemento? </b>
            </li></a>
            <!-- Pergunta 4 -->            
              <a href="p68.html"><li>
                <b>4. Qual propriedade CSS é usada para adicionar espaçamento entre as letras do texto?- </b>
            </li></a>
              <!-- Pergunta 5 -->            
              <a href="p69.html"><li>
                <b>5. Qual propriedade CSS é usada para alterar o estilo da fonte?</b>
            </li></a>
              <!-- Pergunta 6 -->            
              <a href="p70.html"><li>
                <b>6. Como definir o estilo da fonte em negrito em CSS?</b>
            </li></a>
              <!-- Pergunta 7 -->            
              <a href="p71.html"><li>
                <b>7. Qual propriedade CSS é usada para transformar o texto em maiúsculas?</b>
            </li></a>
              <!-- Pergunta 8 -->            
              <a href="p72.html"><li>
                <b>8. Qual é a propriedade CSS utilizada para adicionar sombras a texto?</b>
            </li></a>
            <!-- Adicione mais itens conforme necessário -->
        </ul>
    </div>
    <center>
        <div class="botoes">
            <a href="../../../perguntascss.php" class="b-perguntas">Voltar</a>
        </div><br>
    </center>
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
                        <img src="../../../_img/LogoBrancaSemFundo.png" alt="logo">
                    </a>
                </section>
                <section>
                    <h3>Produto</h3>
                    <ul>
                        <li>
                            <a href="../../../faleConosco.php">Fale conosco</a>
                        </li>
                        <li>
                            <a href="../../../exercicios.php">Exercicios</a>
                        </li>
                        <li>
                            <a href="../../../desenvolvedores.php">Desenvolvedores</a>
                        </li>
                   </ul>
                </section>
                <section>
                    <h3>EXERCICIOS DE HTML</h3>
                    <ul>
                        <li>
                            <a href="../../../perguntas/html/tabela/index.php">Tabelas</a>
                        </li>
                        <li>
                            <a href="../../../perguntas/html/link/index.php">Links</a>
                        </li>
                        <li>
                            <a href="../../../perguntas/html/imagem/index.php">Imagem</a>
                        </li>
                        <li>
                            <a href="../../../perguntas/html/lista/index.php">Lista</a>
                        </li><li>
                            <a href="../../../perguntas/html/elementos">Elemento e atributos</a>
                        </li>
                        <!-- More links -->
                    </ul>
                </section>
                
                <section>
                    <h3>EXERCICIOS DE CSS</h3>
                    <ul>
                        <li>
                            <a href="../../../perguntas/css/cor/index.php">Cor</a>
                        </li>
                        <li>
                            <a href="../../../perguntas/css/elementos/index.php">Elementos</a>
                        </li>
                        <li>
                            <a href="../../../perguntas/css/fonte/index.php">Fonte</a>
                        </li>
                        <li>
                            <a href="../../../perguntas/css/lista/index.php">Lista</a>
                        </li><li>
                            <a href="../../../perguntas/css/seletores/index.php">Seletores</a>
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
                                <img src="../../../_img/Instagram.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="gith">
                                <img src="../../../_img/github-logo-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="tiktok">
                                <img src="../../../_img/tiktok-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="linkedin">
                                <img src="../../../_img/icons8-linkedin-48.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="email">
                                <img src="../../../_img/icons8-gmail-logo-48.png" alt="imagem">
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