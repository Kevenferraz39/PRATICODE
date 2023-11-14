<?php
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
        if ($_SESSION['email'] != "codeprati@gmail.com" && $_SESSION['senha'] != "Praticode@2023") {
            header("Location: ../menu.php");
        }
    } else {
        header("Location: ../menu.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../_css/Menu.css">
    <link rel="stylesheet" href="../_css/footer.css"> 
    <link rel="stylesheet" href="../_css/Login.css">
    <link rel="stylesheet" href="../_css/crud.css">
    <!-- fim-css -->
    <link rel="shortcut icon" href="../_img/logo.png" type="image/x-icon">
    <title>CRUD</title> 
</head> 
<body>
     <!-- Menu -->
     <header class="Home">     
        <a href="Menu.html">
        <img src="../_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
            <div class="link">
                <li class="linke"><b><a href="../menu.php">Home</a></b></li>
                <li class="linke"><b><a href="faleConosco.php">Fale conosco</a></b></li>
                <li class="linke"><b><a href="desenvolvedores.php">Desenvolvedores</a></b></li>
                <div class="dropdown"> 
                    <button class="dropbtn" onclick="abrirDropdown()">Exercicios</button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="exercicios.php"><b>Exercicios</b></a>
                        <a href="perguntashtml.php"><b>HTML</b></a>
                        <a href="perguntascss.php"><b>CSS</b></a>
                    </div> 
                </div>
                <li class="focus"><b><a href="../../view/crud/">CRUD</a></b></li>
                <div class="dropdownConta">
                    <button class="btnConta" onclick="abrirDropdownConta()">Conta</button>
                    <div class="dropdown-conta-content" id="dropdownConta">
                        <a href="configConta.php">Configurações</a>
                        <a href="../controller/login/sair.php">Sair</a>
                    </div>
                </div>
            </div>
    </header>
    <!-- fim do Menu -->
    <!-- conteudo da pagina -->
    <br><br><br><br><br>
<div class="content">
    <center>
        <div class="conteudo">
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/aluno-removebg-preview.png" alt="imagem">
                </center>
                 <br>
                <a href="./aluno/index.php">Aluno</a>
            </div> 
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/lista-removebg-preview (1).png" alt="imagem">
                </center>
               <br>
                <a href="./lista/index.php">Lista</a>
            </div>
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/exercicio-removebg-preview.png" alt="imagem">
                </center>
               <br>
                <a href="./exercicio/index.php">Exercicio</a>
            </div>
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/resposta-removebg-preview.png" alt="imagem">
                </center>
               <br>
                 <a href="./resposta/index.php">Resposta</a>
            </div>
        </div>
    </center>
      
</div>
    <!--  fim do conteudo da pagina -->
    <!--  footer -->
    <footer>
        <div class="footer-line"></div>
        <div class="footer-wrapper">
            <div class="footer-columns">
                <section class="footer-logo">
                    <a href="#">
                        <img src="../_img/LogoBrancaSemFundo.png" alt="logo">
                    </a>
                </section>
                
                </section>
                        <!-- More sections -->            
            </div>
            <div class="footer-bottom">
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="#" title="Instagram">
                                <img src="../_img/Instagram.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="gith">
                                <img src="../_img/github-logo-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="tiktok">
                                <img src="../_img/tiktok-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="linkedin">
                                <img src="../_img/icons8-linkedin-48.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="email">
                                <img src="../_img/icons8-gmail-logo-48.png" alt="imagem">
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

    <script src="../JS/dropdown.js"></script>
    <script src="../JS/dropdownConta.js"></script>
</body>
</html>
