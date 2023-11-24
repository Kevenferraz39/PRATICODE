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
        <link rel="stylesheet" href="_css/desnvolvedores.css">
        <link rel="stylesheet" href="_css/Login.css">
        <link rel="stylesheet" href="_css/dropdownConta.css">
        <link rel="stylesheet" href="_css/modalConta.css">
    <!-- fim-css -->

        <!--Script-->    
            <!--Start of Tawk.to Script-->
            <script src="JS/chat.js"></script>
            <!--script do dropdown-->
            <script src="JS/dropdown.js"></script>
        <!--Script-->
 
    <link rel="shortcut icon" href="_img/logo.png" type="image/x-icon">
    <title>Desenvolvedores</title> 
</head>
<body>
     <!-- Menu -->
<header class="Home">
    <a href="Menu.html">
    <img src="_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
        <div class="link">
            <li class="linke"><b><a href="menu.php">Home</a></b></li>
            <li class="linke"><b><a href="faleConosco.php">Fale conosco</a></b></li>
            <li class="focus"><b><a href="desenvolvedores.php">Desenvolvedores</a></b></li>
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
            <!-- final do botão dropdown -->
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
                        <input type="text" placeholder="Entre com o seu usuário" name="uname" >

                        <label for="psw"><b>Senha</b></label>
                        <input type="password" placeholder="Entre com a sua senha" name="psw" >
                            
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
     <h1>Desenvolvedores</h1><br>
     <p>Esse site foi criado a partir de um projeto de TCC da Escola Estadual Técnica Centro Paula Souza.</p>

     <div class="redes-sociais">
            <div class="insta">
                <img src="_img/Instagram.png" alt="imagem">
                <ul>
                    <li><a href="https://instagram.com/kevenferraz39?igshid=NzZlODBkYWE4Ng==">@kevenferraz39</a></li>
                    <li><a href="https://instagram.com/nolacio_nathan04?igshid=MzRlODBiNWFlZA==">@nolacio_nathan04</a></li>
                    <li><a href="https://instagram.com/ryzagb5?igshid=MzRlODBiNWFlZA==">@ryzagb5</a></li>
                    <li><a href="https://instagram.com/mart1ns.ju?igshid=MzRlODBiNWFlZA==">@mart1ns.ju</a></li>
                    <li><a href="https://instagram.com/heitorbiazon?igshid=MzRlODBiNWFlZA==">@heitorbiazon</a></li>
                    <li><a href="https://instagram.com/praticode_site?igshid=MzRlODBiNWFlZA==">@praticode_site</a></li>
                </ul>
            </div><br>
            <div class="git">
                <img src="_img/github-logo-removebg-preview.png" alt="imagem">
                <ul>
                    <li><a href="https://github.com/Kevenferraz39">@Kevenferraz39</a></li>
                    <li><a href="https://github.com/RayzaDSbr">@RayzaDSbr</a></li>
                    <li><a href="https://github.com/nathannolacio">@nathannolacio</a></li>
                    <li><a href="https://github.com/HeitorBiazon">@HeitorBiazon</a></li>
                    <li><a href="https://github.com/">@julia</a></li>
                    <li><a href="https://github.com/projetopraticode">@PratiCode</a></li>
                </ul>
            </div><br>
            <div class="linkedin">
                <img src="_img/icons8-linkedin-48.png" alt="imagem">
                <ul>
                    <li><a href="">Kevenferraz</a></li>
                    <li><a href="">Nathan Nolacio</a></li>
                    <li><a href="">Rayzagomes</a></li>
                    <li><a href="https://www.linkedin.com/in/julia-martins-de-melo-costa-3135b6229">Julia-martins</a></li>
                    <li><a href="https://www.linkedin.com/in/heitor-biazon?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_mediu,=android_app">Heitorbiazon</a></li>
                </ul>
            </div><br>
            <div class="email">
                <img src="_img/icons8-gmail-logo-48.png" alt="imagem">
                <ul>
                    <li><a href="kevenferraz39@gmail.com">kevenferraz39@gmail.com</a></li>
                    <li><a href="nathannolacio04@gmail.com">nathannolacio04@gmail.com</a></li>
                    <li><a href="rayzagomes98976@gmail.com">rayzagomes98976@gmail.com</a></li>
                    <li><a href="juliamartins.melo@gmail.com">juliamartins.melo@gmail.com&nbsp;</a></li>
                    <li><a href="biazonheitor@gmail.com">biazonheitor@gmail.com</a></li>
                    <li><a href="codePrati@gmail.com">codePrati@gmail.com</a></li>
                </ul>
            </div>
     </div>
     <h1 id="redes-sociais">Nos siga nas redes sociais</h1>
     <center>
        <div class="fotos">
            <div class="foto">
                <img src="_img/eu.jpeg" alt="foto">
            </div>
            <div class="foto">
                <img src="_img/Rayza.jpeg" alt="foto">
            </div>
            <div class="foto">
                <img src="_img/heitor.jpeg" alt="foto">
            </div>
            <div class="foto">
                <img src="_img/julia.jpeg" alt="foto">
            </div>
            <div class="foto">
                <img src="_img/nathan.jpeg" alt="foto">
            </div>
     </div>
     </center>
     
    <script src="./JS/dropdownConta.js"></script>
    <script src="./JS/modalConta.js"></script>
</body>
</html>