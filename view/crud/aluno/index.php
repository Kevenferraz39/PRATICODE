<?php 
    include_once('../../../controller/crud/aluno/consultar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../../_css/Menu.css">
    <link rel="stylesheet" href="../../_css/footer.css"> 
    <link rel="stylesheet" href="../../_css/Login.css">
    <link rel="stylesheet" href="../../_css/aluno.css">
    <!-- fim-css -->
    <link rel="shortcut icon" href="../../_img/logo.png" type="image/x-icon">
    <title>Aluno</title> 
</head> 
<body>
     <!-- Menu -->
<header class="Home">    
    <a href="Menu.html">
    <img src="../../_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
        <div class="link">
            <li class="focus"><b><a href="../../Menu.html">Aluno</a></b></li>
            <li class="linke"><b><a href="../../faleConosco.html">Fale conosco</a></b></li>
            <li class="linke"><b><a href="../../Desenvolvedores.html">Desenvolvedores</a></b></li>
        <!-- Projetos botão dropdown -->
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Exercicios</button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="../../exercicios.php"><b>Exercicios</b></a>
                    <a href="../../perguntasHTML.html"><b>HTML</b></a>
                    <a href="../../perguntasCSS.html"><b>CSS</b></a>
                </div> 
            </div> 
        <!-- final do botão dropdown --> 
        <!--script do dropdown-->
        <script>
            //Quando o usuário clicar no botão, alterne entre ocultar e mostrar o conteúdo do menu suspenso
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
        <!--script do dropdown-->
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
            <div id="id01" class="modal">
                <form class="modal-content animate" method="post" action="../../controller/login/login.php">
                    <div class="container">
                    <label for="uname"><b>Usuário</b></label>
                    <input type="text" placeholder="Entre com o seu usuário" name="email" required>

                    <label for="psw"><b>Senha</b></label>
                    <input type="password" placeholder="Entre com a sua senha" name="senha" required>
                        
                    <button type="submit" id="but">Login</button>
                    <button id="but"><a href="Cadastro.html">Cadastre-se</a></button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Lembre-me
                    </label>
                    </div>

                    <div class="container" style="background-color:#fdfdfd00">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw"><a href="#">Esqueceu a sua senha ?</a></span>
                    </div>
                </form>
            </div>
        
                <!--script do menu-->
                <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
                <!--script do menu-->
        </div>
</header>
    <!-- fim do Menu -->
    <!-- conteudo da pagina -->
    <br><br><br><br><br>
<div class="content">
    <center>
        <div class="conteudo-tabela">
        <div class="top">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                </svg><h3>Perguntas de HTML 5</h3>
        </div>
           <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Pontos</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td> <?= $dados['idAluno'] ?> </td>
                        <td> <?= $dados['nome'] ?> </td>
                        <td> <?= $dados['email'] ?> </td>
                        <td> <?= $dados['senha'] ?> </td>
                        <td> <?= $dados['pontos'] ?> </td>
                        <td> <a href="<?= "editar.php?id=$dados[idAluno]"; ?>">Editar</a> <a href="<?= "excluir.php?id=$dados[idAluno]"; ?>">Excluir</a> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><br>
        <a href="cadastrar.php">Cadastrar Novo Aluno</a><br>
        <a href="../../index.html">Voltar</a>
    </center>
        <!--Start of Tawk.to Script-->
        <script src="JS/chat.js"></script>
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
                        <img src="../../_img/LogoBrancaSemFundo.png" alt="logo">
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
                                <img src="../../_img/Instagram.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="gith">
                                <img src="../../_img/github-logo-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="tiktok">
                                <img src="../../_img/tiktok-removebg-preview.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="linkedin">
                                <img src="../../_img/icons8-linkedin-48.png" alt="imagem">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="email">
                                <img src="../../_img/icons8-gmail-logo-48.png" alt="imagem">
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
