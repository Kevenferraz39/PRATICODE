<?php
    include_once('../../../controller/login/verificarSessao.php');
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
    <link rel="stylesheet" href="../../_css/tabelasCrud.css">
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
            <li class="focus"><b><a href="./index.php">Aluno</a></b></li>
            <li class="linke"><b><a href="../index.php">CRUD</a></b></li>
            
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
        <div id="container-conteudo-tabela">
            <div class="top">
                    <img src="../../_img/Logo-SemFundo.png">
                    <h3>Usuarios cadastrados</h3>     
            </div>
            <div class="conteudo-tabela">
            <table>
                    <thead>
                        <tr bordercolor="#a80a0a">
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
                            <td> <a href="<?= "editar.php?id=$dados[idAluno]"; ?>">Editar</a> <a href="<?= "excluir.php?id=$dados[idAluno]"; ?>">Excluir </a> </td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div><br><br>
                <a href="../index.php" class="btv">Voltar</a>
                <a href="cadastrar.php" class="bt">Cadastrar Novo Aluno</a>
        </div>
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

    <script src="../../JS/dropdownConta.js"></script>
</body>
</html>
